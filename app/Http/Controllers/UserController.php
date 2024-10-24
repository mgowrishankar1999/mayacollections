<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Helpers\HelperClass;
use Spatie\Permission\Models\Role;
use App\Helpers\Loggerhelper;
use App\Models\Notification;
use App\Notifications\CustomNotification;
use Exception;
use DB;
use Auth;
use Hash;
use Illuminate\Support\Arr;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = User::where('role_id', '!=', 2)->where('status', 1)->orderBy('id', 'DESC')->get();
        return view('admin.user.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name', 'name')->all();
        return view('users.user.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            // your code here
        } catch (Exception $e) {
            $logs = Loggerhelper::error_logs($e->getMessage());
        }
        $this->validate($request, [
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = Role::where('name', $request->input('roles'))->first();
        if ($user->id != '') {
            $input['role_id'] = $user->id;
        } else {
            return redirect()->route('users.index')
                ->with('error', 'Something went wrong');
        }
        $user = User::create($input);

        //activity
        // $input = $request->all();
        $date = date('Y-m-d H:i:s');
        $input['activity'] = "user created at '.$date.'";
        $jeson_rec = json_encode($input);
        Loggerhelper::addToLog($jeson_rec);

        $user->assignRole($request->input('roles'));

        return redirect()->route('users.index')
            ->with('success', 'User created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('admin.user.view', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $user = User::find($id);
            $roles = Role::pluck('name', 'name')->all();
            $userRole = $user->roles->pluck('name', 'name')->all();

            return view('users.user.edit', compact('user', 'roles', 'userRole'));
        } catch (Exception $e) {
            $logs = Loggerhelper::error_logs($e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $this->validate($request, [
                'name' => 'required',
                'email' => 'required|email|unique:users,email,' . $id,
                'password' => 'same:confirm-password',
                'roles' => 'required'
            ]);

            $input = $request->all();
            if (!empty($input['password'])) {
                $input['password'] = Hash::make($input['password']);
            } else {
                $input = Arr::except($input, array('password'));
            }

            $user = User::find($id);
            $user->update($input);
            DB::table('model_has_roles')->where('model_id', $id)->delete();

            $user->assignRole($request->input('roles'));

            //activity
            $input = $request->all();
            $date = date('Y-m-d H:i:s');
            $input['activity'] = "user updated at '.$date.'";
            $jeson_rec = json_encode($input);
            Loggerhelper::addToLog($jeson_rec);

            return redirect()->route('users.index')
                ->with('success', 'User updated successfully');
        } catch (Exception $e) {
            $logs = Loggerhelper::error_logs($e->getMessage());
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            User::find($id)->delete();
            return redirect()->route('users.index')
                ->with('success', 'User deleted successfully');
        } catch (Exception $e) {
            $logs = Loggerhelper::error_logs($e->getMessage());
        }
    }


    public function user_get_delete($id)
    {
        User::find($id)->delete();
        return response()->json(['success' => 'User deleted successfully.']);
    }
}
