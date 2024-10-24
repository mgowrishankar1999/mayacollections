<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Models\User;
use App\Models\Posts;
use App\Models\Vote;
use App\Models\Department;
use App\Models\FriendRequest;
use App\Models\Position;
use App\Models\Skill;
use App\Models\Education;
use App\Models\EducationList;
use App\Models\Industries;
use App\Models\Requirement;
use App\Models\UserSkill;
use App\Models\Verification;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;
use Auth;
use App\Services\FCMService;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\DB;
use App\Helpers\HelperClass;
use Log;
use Illuminate\Support\Str;

class RegisterController extends Controller
{


    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'mobile' => 'required|unique:users,mobile',
            'username' => 'required',
            'email' => 'required||unique:users,email',
            'password' => 'required|confirmed|min:6',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            return response()->json([
                'message' => 'The given data was invalid.',
                'errors' => $errors,
            ], 422);
        }

        $isVerifiedMobile = '';

        $user = User::where('email', $request->input('email'))->first();


        if ($user) {

            //=== Check if user mobile already verified ===//
            $isVerifiedMobile = isset($user->is_verrified_mobile) ? $user->is_verrified_mobile : '0';

            if ($isVerifiedMobile == '1') {
                // Generate and return the token for the updated user
                $token = JWTAuth::fromUser($user);

                return response()->json([
                    'message' => 'User already exist',
                    'user' => $user,
                    'token' => $token,
                ], 200);
            }
        } else {
            $user = new User;
            $user->name = ucfirst($request->input('name'));
            $user->email = $request->input('email');
            $user->his_her = $request->input('his_her');
            //$user->mobile = $request->input('mobile');
            $user->last_name = ucfirst($request->input('lastname'));
            $user->user_name = $request->input('username');
            $user->role_id = 5;
        }

        $user->mobile = $request->input('mobile');
        $user->otp = mt_rand(1111, 9999);
        $user->password = Hash::make($request->input('password'));
        $user->save();

        $token = JWTAuth::fromUser($user);

        // Send SMS and email only for the first time registration 
        $sendSms = HelperClass::sendSms($user->mobile, $user->otp, '10', '1');

        $email = $user->email;
        $name = $user->name;
        $otp = $user->otp;
        $sub = 'Welcome To Sipmaa';
       /* $msg = '<html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>Welcome to sipmaa</title>
                    </head>
                    
                    <body style="height: auto;width: 595px;margin: auto;background-color:#f1f1f1;padding:40px;">
                        <section style="height: auto;width:100%;margin: auto;background-color:#fff;padding:25px 0px 40px 0;box-shadow: 0px 2px 25px 10px #4f94cb;">
                            <div>
                                <div style="">
                                    <img src="https://sipmaaindia.com/assets/images/logo.png" width="25%" ;="" height="auto" alt="" srcset="">
                                </div>
                    
                                <hr style="border: 1px solid #ededed; width:100%;">
                                <p style="line-height:0px;padding-left: 25px; ">Dear Leader,</p>
                                <h1 align="center" style="font-size:30px; font-weight:900;line-height:40px;">Welcome To Sipmaa!</h1>
                                <p align="center" style="line-height:40px;">Here is your new OTP for verification:</p>
                                <div align="center">
                                    <button style="background:#4587b6;color:white;width: 50%; height: 30px; border: none; border-radius: 20px;  ">
                                        OTP:' . $otp . '</button>
                                </div>
                            </div>
                            <p style="line-height:40px;padding-left: 25px; ">Regards,</p>
                            <h4 style="line-height:0px;padding-left: 25px;font-weight:600; ">Team SIPMAA </h4>
                        </section>
                    </body></html>';
                    
        */
        
        $img1 = url('/assets/images/1.png');
        $img2 = url('/assets/images/2.png');
        
        $msg = '<html lang="en">
                	<head>
                		<meta charset="UTF-8">
                		<meta http-equiv="X-UA-Compatible" content="IE=edge">
                		<meta name="viewport" content="width=device-width, initial-scale=1.0">
                		<title>Welcome to SIPMAA</title>
                	</head>
                	
                	<body style="height: auto;width: 595px;margin: auto;background-color:#f1f1f1;padding:40px;">
                	  <section style="height: auto;width:100%;margin: auto;background-color:#fff;padding:20px 0px 25px 0;box-shadow: 0px 2px 25px 10px #4f94cb;">
                			<div>
                				<div style="">
                					<img src="https://sipmaaindia.com/assets/images/logo.png" width="25%" ;="" height="auto" alt="" srcset="">
                				</div>
                				<hr style="border: 1px solid #ededed; width:100%;">
                				<h1 align="center" style="font-size:30px; font-weight:900;line-height:20px;">Welcome To Sipmaa!</h1>
                	
                				<p align="center" style="line-height:20px;">Here is your new OTP for verification:</p>
                				<div align="center">
                				  <button style="background:#4587b6;color:white;/* height: 30px; */border: none;border-radius: 30px;padding: 15px 40px;">
                						OTP:' . $otp . '</button>
                				</div>
                
                				<hr style="border: 1px solid #ededed; width:100%;">
                
                				<h3 align="center" style="font-size:18px; font-weight:900;line-height:20px;">Never miss an update with the <span  style="color: #4587b6;" >Sipmaa </span> app</h3>
                				<div align="center" >
                					<img src="'.$img1.'" width="20%" ;="" height="auto" alt="" srcset="">
                					<img src="'.$img2.'" width="18%" ;="" height="auto" alt="" srcset="">
                				</div>
                				<p align="left" style="line-height:10px; padding-left: 20px;"><span  style="color: #4587b6;" >Learn why we included this.</span></p>
                				<p align="left" style="line-height:10px; padding-left: 20px;">You are receiving <span  style="color: #4587b6;" >SIPMAA</span> notification emails</span></p>
                				<p align="left" style="line-height:10px; padding-left: 20px;"><span  style="color: #4587b6;" >Unsubscribe. Help</span></span></p>
                				<img style="line-height:10px; padding-left: 20px;" src="https://sipmaaindia.com/assets/images/logo.png" width="15%" ;="" height="auto" alt="" srcset="">
                				<p align="left" style="line-height:10px; padding-left: 20px;">© 2023 Sipmaa Corporation, Chennai.</p>
                
                			</div>
                		</section>
                	</body>
                </html>';

        $sendinBlueMail = HelperClass::forgetpasswordMail($email, $name, $otp, $sub, $msg);

        return response()->json([
            'message' => 'User registered successfully.',
            'user' => $user,
            'token' => $token,
        ], 201);
    }



    public function check_user(Request $request)
    {

        $user = Auth::user();
        // Check if the user's department is verified
        $departmentStatus = $user->department === 'verified' ? 'Verified' : 'Not Verified';
        // Return the response with the department status
        return response()->json([
            'user_status' => $departmentStatus
        ]);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'login' => 'required|string',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'The given data was invalid.',
                'errors' => $validator->errors(),
            ], 422);
        }

        $credentials = $request->only('login', 'password');

        $fieldType = filter_var($request->input('login'), FILTER_VALIDATE_EMAIL) ? 'email' : 'user_name';
        if (Auth::attempt([$fieldType => $credentials['login'], 'password' => $credentials['password']])) {
            $user = Auth::user();
            if ($user->status != 1) {
                return response()->json(['error' => 'Please wait until the admin approves your account.'], Response::HTTP_UNAUTHORIZED);
            }

            if ($user->role_id == 2) {
                return response()->json(['error' => 'You not allow to access'], Response::HTTP_UNAUTHORIZED);
            }
            $token = JWTAuth::fromUser($user);
            return response()->json(compact('token'), Response::HTTP_OK);
        }

        return response()->json(['error' => 'invalid_credentials'], Response::HTTP_UNAUTHORIZED);
    }
    
    
        public function delete_user(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password' => 'required',
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'message' => 'The given data was invalid.',
                'errors' => $validator->errors(),
            ], 422);
        }
        $user = Auth::user(); // Get the authenticated user
        // Verify the user's password before proceeding with the deletion
        if (Hash::check($request->input('password'), $user->password)) {
            $user->delete();
            return response()->json(['message' => 'User account deleted successfully.'], Response::HTTP_OK);
        }
    
        return response()->json(['error' => 'Invalid password.'], Response::HTTP_UNAUTHORIZED);
    }


    public function profile_update(Request $request)
    {
        $user = auth()->user();

        if ($request->filled('last_name')) {
            $user->last_name = ucfirst($request->last_name);
        }
        if ($request->filled('current_company')) {
            $user->current_company = ucfirst($request->current_company);
        }
        if ($request->filled('department')) {
            $user->department = $request->department;
        }
        if ($request->filled('education')) {
            $user->education = $request->education;
        }
        if ($request->filled('recruitment')) {
            $user->recruitment = $request->recruitment;
        }
        if ($request->filled('industries')) {
            $user->industries = $request->industries;
        }
        if ($request->filled('others')) {
            $user->others = $request->others;
        }
         if ($request->filled('other_department')) {
            $user->other_department = $request->other_department;
        }
        
        if ($request->filled('designation')) {
            $user->designation = ucfirst($request->designation);
        }
        if ($request->filled('his_her')) {
            $user->his_her = $request->his_her;
        }
        if ($request->filled('bio')) {
            $user->bio = ucfirst($request->bio);
        }
        if ($request->filled('qualification')) {
            $user->qualification = ucfirst($request->qualification);
        }
        if ($request->filled('official_email')) {
            $user->official_email = $request->official_email;
        }
        if ($request->filled('address')) {
            $user->address = ucfirst($request->address);
        }
        if ($request->filled('pincode')) {
            $user->pincode = $request->pincode;
        }
        if ($request->filled('city')) {
            $user->city = ucfirst($request->city);
        }
        if ($request->filled('state')) {
            $user->state = ucfirst($request->state);
        }
        
        

        if ($request->hasFile('profile_picture')) {
            $media = $request->file('profile_picture');
            $filename = time() . '_' . $media->getClientOriginalName(); // create a unique filename to prevent conflicts
            $path = $media->move(public_path('assets/user/profile-pictures'), $filename); // save the media file in public/media folder
            $url = url('/assets/user/profile-pictures/' . $filename); // get the url of the saved media file
            $user->profile_picture = $url;
        }

        if ($request->hasFile('batch')) {
            $media = $request->file('batch');
            $filename = time() . '_' . $media->getClientOriginalName(); // create a unique filename to prevent conflicts
            $path = $media->move(public_path('assets/user/profile-pictures'), $filename); // save the media file in public/media folder
            $url = url('/assets/user/profile-pictures/' . $filename); // get the url of the saved media file
            $user->batch = $url;
        }

        if ($request->hasFile('backround_image')) {
            $media = $request->file('backround_image');
            $filename = time() . '_' . $media->getClientOriginalName(); // create a unique filename to prevent conflicts
            $path = $media->move(public_path('assets/user/profile-pictures'), $filename); // save the media file in public/media folder
            $url = url('/assets/user/profile-pictures/' . $filename); // get the url of the saved media file
            $user->backround_image = $url;
        }

        $user->save();
        return response()->json(['message' => 'Profile updated successfully']);
    }




    public function store_position(Request $request)
    {
        $request->validate([
            'user_id' => 'required|integer',
            'employment_type' => 'required|string',
            'company_name' => 'required|string',
            'department' => 'required|string',
            'recruitment'  => 'nullable|string',
            'location' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date',
            'industry_name' => 'required|string',
            'others' => 'nullable|string',
            'other_department' => 'nullable|string',// Added validation rule for "others" field
        ]);

        $positionData = $request->except(['others']); // Exclude "others" field from the data
        $position = Position::create($positionData);

        return response()->json([
            'message' => 'Position created successfully',
            'data' => $position,
        ], 201);
    }

    public function store_skill(Request $request)
    {
        $request->validate([
            'user_id' => 'required|integer',
            'name' => 'required|string',
            'level' => 'required|string',
        ]);

        $skill = Skill::create($request->all());

        return response()->json([
            'message' => 'Skill created successfully',
            'data' => $skill,
        ], 201);
    }


    public function verifyOTP(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'otp' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'The given data was invalid.',
                'errors' => $validator->errors(),
            ], 422);
        }

        $user_id = $request->input('user_id');
        $otp = $request->input('otp');

        // Find the user based on the user_id (email or mobile)
        $user = User::where('id', $user_id)->first();

        if (!$user) {
            return response()->json(['status' => 'error', 'message' => 'User not found'], 404);
        }

        // Compare the entered OTP with the one saved in the user's record
        if ($otp == $user->otp) {
            $user->otp = null;
            $user->save();
            
            
            $img1 = url('/assets/images/1.png');
            $img2 = url('/assets/images/2.png');

            // Send the email
            $email = $user->email;
            $name = $user->name;
            $new_otp = '';
            $sub = 'OTP verification successful';
            $msg = '<html lang="en">
                    	<head>
                    		<meta charset="UTF-8">
                    		<meta http-equiv="X-UA-Compatible" content="IE=edge">
                    		<meta name="viewport" content="width=device-width, initial-scale=1.0">
                    		<title>OTP verification successful</title>
                    	</head>
                    	
                    	<body style="height: auto;width: 595px;margin: auto;background-color:#f1f1f1;padding:40px;">
                    		<section style="height: auto;width:100%;margin: auto;background-color:#fff;padding:20px 0px 25px 0;box-shadow: 0px 2px 25px 10px #4f94cb;">
                    			<div>
                    				<div style="">
                    					<img src="https://sipmaaindia.com/assets/images/logo.png" width="25%" ;="" height="auto" alt="" srcset="">
                    				</div>
                    				<hr style="border: 1px solid #ededed; width:100%;">
                    				<h1 align="center" style="font-size:30px; font-weight:900;line-height:20px;">OTP verification successful</h1>
                    	
                    				<p align="center" style="line-height:20px;">Your Account has been Successfully Verrification.<br>Waiting For Admin Approved!</p>
                    				<!--<div align="center">
                    					<button style="background:#4587b6;color:white;/* height: 30px; */border: none;border-radius: 30px;padding: 15px 40px;">
                    						OTP:' . $otp . '</button>
                    				</div>-->
                    				<div align="center">
                    					<a href="http://web.sipmaaindia.com/sign-in">
                    						<button style="background:#4587b6;color:white;width: 50%; height: 30px; border: none; border-radius: 20px;">
                    							LOGIN
                    						</button>
                    					</a>
                    				</div>
                    
                    				<hr style="border: 1px solid #ededed; width:100%;">
                    
                    				<h3 align="center" style="font-size:18px; font-weight:900;line-height:20px;">Never miss an update with the <span  style="color: #4587b6;" >Sipmaa </span> app</h3>
                    				<div align="center" >
                    					<img src="'.$img1.'" width="20%" ;="" height="auto" alt="" srcset="">
                    					<img src="'.$img2.'" width="18%" ;="" height="auto" alt="" srcset="">
                    				</div>
                    				<p align="left" style="line-height:10px; padding-left: 20px;"><span  style="color: #4587b6;" >Learn why we included this.</span></p>
                    				<p align="left" style="line-height:10px; padding-left: 20px;">You are receiving <span  style="color: #4587b6;" >SIPMAA</span> notification emails</span></p>
                    				<p align="left" style="line-height:10px; padding-left: 20px;"><span  style="color: #4587b6;" >Unsubscribe. Help</span></span></p>
                    				<img style="line-height:10px; padding-left: 20px;" src="https://sipmaaindia.com/assets/images/logo.png" width="15%" ;="" height="auto" alt="" srcset="">
                    				<p align="left" style="line-height:10px; padding-left: 20px;">© 2023 Sipmaa Corporation, Chennai.</p>
                    
                    			</div>
                    		</section>
                    	</body>
                    </html>';

            $sendinBlueMail = HelperClass::forgetpasswordMail($email, $name, $new_otp, $sub, $msg);

            return response()->json(['status' => 'success', 'data' => $user->mobile, 'message' => 'OTP verification successful'], 200);
        } else {
            // OTP is invalid
            return response()->json(['status' => 'error', 'message' => 'Invalid OTP'], 400);
        }
    }


    public function otp_verrify(Request $request)
    {

        $user = auth()->user();

        if ($request->otp !== $user->otp) {
            return response()->json(['error' => 'Invalid OTP'], 400);
        }

        $user->is_verrified_mobile = 1;
        $user->save();

        $user_id = auth()->user()->id;
        $user_details = User::where('id', $user_id)->first();
        
       $img1 = url('/assets/images/1.png');
        $img2 = url('/assets/images/2.png');
        
        $sendSms = HelperClass::sendSms($user_details->mobile, '', '10', '3');
        // Send the email
        $email = $user->email;
        $name = $user->name;
        $new_otp = '';
        $sub = 'OTP verification successful';
        $msg = '<html lang="en">
                	<head>
                		<meta charset="UTF-8">
                		<meta http-equiv="X-UA-Compatible" content="IE=edge">
                		<meta name="viewport" content="width=device-width, initial-scale=1.0">
                		<title>OTP verification successful</title>
                	</head>
                	
                	<body style="height: auto;width: 595px;margin: auto;background-color:#f1f1f1;padding:40px;">
                		<section style="height: auto;width:100%;margin: auto;background-color:#fff;padding:20px 0px 25px 0;box-shadow: 0px 2px 25px 10px #4f94cb;">
                			<div>
                				<div style="">
                					<img src="https://sipmaaindia.com/assets/images/logo.png" width="25%" ;="" height="auto" alt="" srcset="">
                				</div>
                				<hr style="border: 1px solid #ededed; width:100%;">
                				<h1 align="center" style="font-size:30px; font-weight:900;line-height:20px;">OTP verification successful</h1>
                	
                				<p align="center" style="line-height:20px;">Your Account has been Successfully Verrification.<br>Waiting For Admin Approved!</p>
                			 
                				<div align="center">
                					<a href="http://web.sipmaaindia.com/sign-in">
                						<button style="background:#4587b6;color:white;width: 50%; height: 30px; border: none; border-radius: 20px;">
                							LOGIN
                						</button>
                					</a>
                				</div>
                
                				<hr style="border: 1px solid #ededed; width:100%;">
                
                				<h3 align="center" style="font-size:18px; font-weight:900;line-height:20px;">Never miss an update with the <span  style="color: #4587b6;" >Sipmaa </span> app</h3>
                				<div align="center" >
                					<img src="'.$img1.'" width="20%" ;="" height="auto" alt="" srcset="">
                					<img src="'.$img2.'" width="18%" ;="" height="auto" alt="" srcset="">
                				</div>
                				<p align="left" style="line-height:10px; padding-left: 20px;"><span  style="color: #4587b6;" >Learn why we included this.</span></p>
                				<p align="left" style="line-height:10px; padding-left: 20px;">You are receiving <span  style="color: #4587b6;" >SIPMAA</span> notification emails</span></p>
                				<p align="left" style="line-height:10px; padding-left: 20px;"><span  style="color: #4587b6;" >Unsubscribe. Help</span></span></p>
                				<img style="line-height:10px; padding-left: 20px;" src="https://sipmaaindia.com/assets/images/logo.png" width="15%" ;="" height="auto" alt="" srcset="">
                				<p align="left" style="line-height:10px; padding-left: 20px;">© 2023 Sipmaa Corporation, Chennai.</p>
                
                			</div>
                		</section>
                	</body>
                </html>';

        $sendinBlueMail = HelperClass::forgetpasswordMail($email, $name, $new_otp, $sub, $msg);
        return response()->json(['message' => 'OTP updated successfully', 'data' => $user->mobile], 200);
    }

    public function profile(Request $request)
    {
        if (!empty($request->input('user_id'))) {
            $user_id = $request->input('user_id');
        } else {
            $user_id = auth()->user()->id;
        }
        $user_details = User::where('id', $user_id)->first();
        // Retrieve department name for the user
        $department_name = Department::where('id', $user_details->department)->value('title');
        // Retrieve positions and skills for the user
        $positions = Position::where('user_id', $user_id)->get();
        foreach ($positions as $position) {
            $position->name_depart = Department::where('id', $position->department)->value('title');
            $position->name_rec = Requirement::where('id', $position->recruitment)->value('name');
        }
                $skills = Skill::where('user_id', $user_id)->get();
        $posts = Posts::where('user_id', $user_id)->with('user', 'likes', 'comments')->get()->map(function ($post) use ($user_id) {
            $like_count = $post->likes->where('type', 'like')->count();
            $liked_by_user = $post->likes->where('user_id', $user_id)->where('type', 'like')->first() ? true : false;
            $comment_count = $post->comments->count();
            return [
                'id' => $post->id,
                'title' => $post->title,
                'body' => $post->media_url,
                'created_at' => $post->created_at,
                'user' => $post->user,
                'like_count' => $like_count,
                'liked_by_user' => $liked_by_user,
                'comment' => $comment_count
            ];
        });
    
        $total_posts = Posts::where('user_id', $user_id)->count();
    
        $friend_count = FriendRequest::where(function ($query) use ($user_id) {
            $query->where('user_id', $user_id)
                ->orWhere('friend_id', $user_id);
        })
            ->where('accepted', 1)
            ->count();
    
        $current_user_id = auth()->user()->id;
    
        $is_friend = FriendRequest::where(function ($query) use ($user_id, $current_user_id) {
            $query->where(function ($q) use ($user_id, $current_user_id) {
                $q->where('user_id', $user_id)
                    ->where('friend_id', $current_user_id);
            })->orWhere(function ($q) use ($user_id, $current_user_id) {
                $q->where('user_id', $current_user_id)
                    ->where('friend_id', $user_id);
            });
        })->where('accepted', 1)->first();
    
        $likeCount = Vote::whereIn('posts_id', function ($query) use ($user_id) {
            $query->select('id')
                ->from('post')
                ->where('user_id', $user_id);
        })->count();
    
        return response()->json([
            'message' => 'success',
            'user' => $user_details,
            'department_name' => $department_name, // Include department_name in the response
            'positions' => $positions,
            'skills' => $skills,
            'posts' => $posts,
            'total_friends' => $friend_count,
            'is_friend' => $is_friend ? 1 : 0,
            'total_likes' => $likeCount,
            'total_posts' => $total_posts
        ], 200);
    }



    

    public function sendemail_verrify(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $email = $request->input('email');

        $verification = Verification::where('email', $email)->first();

        if ($verification) {
            if ($verification->verification_status == 1) {
                return response()->json(['message' => 'Email is already verified'], 400);
            }
            $uniqueNumber = $verification->verification_token;
        } else {
            $uniqueNumber = Str::random(32);
            Verification::create([
                'email' => $email,
                'verification_token' => $uniqueNumber,
            ]);
        }
        
        $img1 = url('/assets/images/1.png');
        $img2 = url('/assets/images/2.png');

        $name = 'Sipmaa';
        $otp = '';
        $sub = 'Email Verification';
        $msg = '<html lang="en">
                	<head>
                		<meta charset="UTF-8">
                		<meta http-equiv="X-UA-Compatible" content="IE=edge">
                		<meta name="viewport" content="width=device-width, initial-scale=1.0">
                		<title>Email Verification</title>
                	</head>
                	
                	<body style="height: auto;width: 595px;margin: auto;background-color:#f1f1f1;padding:40px;">
                		<section style="height: auto;width:100%;margin: auto;background-color:#fff;padding:20px 0px 25px 0;box-shadow: 0px 2px 25px 10px #4f94cb;">
                			<div>
                				<div style="">
                					<img src="https://sipmaaindia.com/assets/images/logo.png" width="25%" ;="" height="auto" alt="" srcset="">
                				</div>
                				<hr style="border: 1px solid #ededed; width:100%;">
                				<p style="line-height:0px;padding-left: 25px; ">Dear Leader,</p>
                				<h1 align="center" style="font-size:30px; font-weight:900;line-height:20px;">Email Verification</h1>
                	
                				<p align="center" style="line-height:20px;">Click the link below to verify your email.</p>
                				<div align="center">
                					<a href="' . route('verify-email', $uniqueNumber) . '">Click to verify</a>
                				</div>
                				 
                
                				<hr style="border: 1px solid #ededed; width:100%;">
                
                				<h3 align="center" style="font-size:18px; font-weight:900;line-height:20px;">Never miss an update with the <span  style="color: #4587b6;" >Sipmaa </span> app</h3>
                				<div align="center" >
                					<img src="'.$img1.'" width="20%" ;="" height="auto" alt="" srcset="">
                					<img src="'.$img2.'" width="18%" ;="" height="auto" alt="" srcset="">
                				</div>
                				<p align="left" style="line-height:10px; padding-left: 20px;"><span  style="color: #4587b6;" >Learn why we included this.</span></p>
                				<p align="left" style="line-height:10px; padding-left: 20px;">You are receiving <span  style="color: #4587b6;" >SIPMAA</span> notification emails</span></p>
                				<p align="left" style="line-height:10px; padding-left: 20px;"><span  style="color: #4587b6;" >Unsubscribe. Help</span></span></p>
                				<img style="line-height:10px; padding-left: 20px;" src="https://sipmaaindia.com/assets/images/logo.png" width="15%" ;="" height="auto" alt="" srcset="">
                				<p align="left" style="line-height:10px; padding-left: 20px;">© 2023 Sipmaa Corporation, Chennai.</p>
                
                			</div>
                		</section>
                	</body>
                </html>';
        $sendinBlueMail = HelperClass::forgetpasswordMail($email, $name, $otp, $sub, $msg);

        return response()->json(['message' => 'Email verification link sent'], 200);
    }

    public function checkVerificationStatus(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);
        $email = $request->input('email');

        $verification = Verification::where('email', $email)->first();

        if (!$verification) {
            return response()->json(['message' => 'Verification record not found'], 404);
        }
        $status = $verification->verification_status;
        return response()->json(['status' => $status], 200);
    }

    public function department(Request $request)
    {
        $department = Department::get();
        return response()->json([
            'message' => 'User details.',
            'departments' => $department,
        ], 200);
    }

    public function industries_get(Request $request)
    {
        $industries = Industries::get();
        return response()->json([
            'message' => 'User details.',
            'Industries' => $industries,
        ], 200);
    }

    public function requirments(Request $request)
    {
        $requirments = Requirement::get();
        return response()->json([
            'message' => 'details.',
            'Requirement' => $requirments,
        ], 200);
    }

    public function change_password_new(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'old_password' => 'required',
            'password' => 'required|confirmed|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'The given data was invalid.',
                'errors' => $validator->errors(),
            ], 422);
        }

        $user = auth()->user();

        if (!Hash::check($request->old_password, $user->password)) {
            return response()->json(['status' => 'error', 'message' => 'The old password is incorrect'], 400);
        }

        $user->update(['password' => Hash::make($request->password)]);

        return response()->json(['status' => 'success'], 200);
    }


    public function resendOTP(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'mobile' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'The given data was invalid.',
                'errors' => $validator->errors(),
            ], 422);
        }

        $mobile = $request->input('mobile');

        // Find the user based on the user_id
        $user = User::where('mobile', $mobile)->first();


        if (!$user) {
            return response()->json(['status' => 'error', 'message' => 'User not found'], 404);
        }

        // Generate a new OTP
        $otp = mt_rand(1111, 9999);
        $user->otp = $otp;
        $user->save();
        
        $img1 = url('/assets/images/1.png');
        $img2 = url('/assets/images/2.png');

        // Send the email
        $email = $user->email;
        $name = $user->name;
        $sub = 'Resend OTP';
        $msg = '<html lang="en">
                	<head>
                		<meta charset="UTF-8">
                		<meta http-equiv="X-UA-Compatible" content="IE=edge">
                		<meta name="viewport" content="width=device-width, initial-scale=1.0">
                		<title>Resend OTP</title>
                	</head>
                	
                	<body style="height: auto;width: 595px;margin: auto;background-color:#f1f1f1;padding:40px;">
                		<section style="height: auto;width:100%;margin: auto;background-color:#fff;padding:20px 0px 25px 0;box-shadow: 0px 2px 25px 10px #4f94cb;">
                			<div>
                				<div style="">
                					<img src="https://sipmaaindia.com/assets/images/logo.png" width="25%" ;="" height="auto" alt="" srcset="">
                				</div>
                				<hr style="border: 1px solid #ededed; width:100%;"> 
                				<h1 align="center" style="font-size:30px; font-weight:900;line-height:20px;">Resend OTP</h1>
                	
                				<p align="center" style="line-height:20px;">Here is your new OTP for password reset:</p>
                				<div align="center">
                					<button style="background:#4587b6;color:white;/* height: 30px; */border: none;border-radius: 30px;padding: 15px 40px;">
                						OTP:' . $otp . '</button>
                				</div>
                				 
                
                				<hr style="border: 1px solid #ededed; width:100%;">
                
                				<h3 align="center" style="font-size:18px; font-weight:900;line-height:20px;">Never miss an update with the <span  style="color: #4587b6;" >Sipmaa </span> app</h3>
                				<div align="center" >
                					<img src="'.$img1.'" width="20%" ;="" height="auto" alt="" srcset="">
                					<img src="'.$img2.'" width="18%" ;="" height="auto" alt="" srcset="">
                				</div>
                				<p align="left" style="line-height:10px; padding-left: 20px;"><span  style="color: #4587b6;" >Learn why we included this.</span></p>
                				<p align="left" style="line-height:10px; padding-left: 20px;">You are receiving <span  style="color: #4587b6;" >SIPMAA</span> notification emails</span></p>
                				<p align="left" style="line-height:10px; padding-left: 20px;"><span  style="color: #4587b6;" >Unsubscribe. Help</span></span></p>
                				<img style="line-height:10px; padding-left: 20px;" src="https://sipmaaindia.com/assets/images/logo.png" width="15%" ;="" height="auto" alt="" srcset="">
                				<p align="left" style="line-height:10px; padding-left: 20px;">© 2023 Sipmaa Corporation, Chennai.</p>
                
                			</div>
                		</section>
                	</body>
                </html>';

        $sendinBlueMail = HelperClass::forgetpasswordMail($email, $name, $otp, $sub, $msg);

        // Send the SMS
        $sendSms = HelperClass::sendSms($user->mobile, $otp, '10', '1');

        return response()->json(['status' => 'success', 'message' => 'New OTP sent to your registered email and mobile number'], 200);
    }

    public function forgotPassword(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'mobile_or_email' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'The given data was invalid.',
                'errors' => $validator->errors(),
            ], 422);
        }

        $identifier = $request->mobile_or_email;
        $resetMethod = null;

        // Check if the identifier is in email format
        if (filter_var($identifier, FILTER_VALIDATE_EMAIL)) {
            $resetMethod = 'email';
        } else {
            // Check if the identifier is in mobile number format
            // You can modify the regular expression pattern according to your mobile number format
            if (preg_match('/^[0-9]{10}$/', $identifier)) {
                $resetMethod = 'mobile';
            }
        }

        if (!$resetMethod) {
            return response()->json(['status' => 'error', 'message' => 'Invalid mobile or email format'], 422);
        }

        $user = null;

        if ($resetMethod === 'email') {
            $user = User::where('email', $identifier)->first();
        } elseif ($resetMethod === 'mobile') {
            $user = User::where('mobile', $identifier)->first();
        }

        if (!$user) {
            return response()->json(['status' => 'error', 'message' => 'User not found'], 404);
        }

        // Generate the OTP
        $otp = mt_rand(1111, 9999);
        $user->otp = $otp;
        $user->save();
        
        $img1 = url('/assets/images/1.png');
        $img2 = url('/assets/images/2.png');

        // Send the email
        $email = $user->email;
        $name = $user->name;
        $new_otp = $otp;
        $sub = 'Forget Password';
        $msg = '<html lang="en">
                	<head>
                		<meta charset="UTF-8">
                		<meta http-equiv="X-UA-Compatible" content="IE=edge">
                		<meta name="viewport" content="width=device-width, initial-scale=1.0">
                		<title>Forget Password</title>
                	</head>
                	
                	<body style="height: auto;width: 595px;margin: auto;background-color:#f1f1f1;padding:40px;">
                		<section style="height: auto;width:100%;margin: auto;background-color:#fff;padding:20px 0px 25px 0;box-shadow: 0px 2px 25px 10px #4f94cb;">
                			<div>
                				<div style="">
                					<img src="https://sipmaaindia.com/assets/images/logo.png" width="25%" ;="" height="auto" alt="" srcset="">
                				</div>
                				<hr style="border: 1px solid #ededed; width:100%;"> 
                				<h1 align="center" style="font-size:30px; font-weight:900;line-height:20px;">Password Reset!</h1>
                	
                				<p align="center" style="line-height:20px;">Someone requested that the password be reset for <br> the following account.</p>
                				<div align="center">
                					<a href="http://web.sipmaaindia.com/sign-in">
                						<button style="background:#4587b6;color:white;width: 50%; height: 30px; border: none; border-radius: 20px;">
                							LOGIN
                						</button>
                					</a>
                				</div>
                				 
                
                				<hr style="border: 1px solid #ededed; width:100%;">
                
                				<h3 align="center" style="font-size:18px; font-weight:900;line-height:20px;">Never miss an update with the <span  style="color: #4587b6;" >Sipmaa </span> app</h3>
                				<div align="center" >
                					<img src="'.$img1.'" width="20%" ;="" height="auto" alt="" srcset="">
                					<img src="'.$img2.'" width="18%" ;="" height="auto" alt="" srcset="">
                				</div>
                				<p align="left" style="line-height:10px; padding-left: 20px;"><span  style="color: #4587b6;" >Learn why we included this.</span></p>
                				<p align="left" style="line-height:10px; padding-left: 20px;">You are receiving <span  style="color: #4587b6;" >SIPMAA</span> notification emails</span></p>
                				<p align="left" style="line-height:10px; padding-left: 20px;"><span  style="color: #4587b6;" >Unsubscribe. Help</span></span></p>
                				<img style="line-height:10px; padding-left: 20px;" src="https://sipmaaindia.com/assets/images/logo.png" width="15%" ;="" height="auto" alt="" srcset="">
                				<p align="left" style="line-height:10px; padding-left: 20px;">© 2023 Sipmaa Corporation, Chennai.</p>
                
                			</div>
                		</section>
                	</body>
                </html>';

        $sendinBlueMail = HelperClass::forgetpasswordMail($email, $name, $new_otp, $sub, $msg);

        // Send the SMS
        $sendSms = HelperClass::sendSms($user->mobile, $otp, '10', '1');


        return response()->json(['status' => 'success', 'data' => $user->id, 'message' => 'OTP sent to your registered email and mobile number'], 200);
    }

    public function resetpassword(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'mobile' => 'required',
            'password' => 'required|confirmed|min:8'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'The given data was invalid.',
                'errors' => $validator->errors(),
            ], 422);
        }

        $mobile = $request->input('mobile');

        // Find the user based on the mobile number
        $user = User::where('mobile', $mobile)->first();

        if (!$user) {
            return response()->json(['status' => 'error', 'message' => 'User not found'], 404);
        }

        $user->update(['password' => Hash::make($request->password)]);

        return response()->json(['status' => 'success'], 200);
    }

    public function user_check(Request $request)
    {

        $userName = $request->input('user_name');
        $user = User::where('user_name', $userName)->first();

        if ($user) {
            // User name is not available
            return response()->json(['message' => 'User name not available'], 409);
        } else {
            // User name is available
            return response()->json(['message' => 'User name available'], 200);
        }
    }

    public function updateToken(Request $request)
    {
        try {
            $user = User::findOrFail($request->id);
            $user->update(['fcm_token' => $request->token]);
            return response()->json([
                'success' => true
            ]);
        } catch (\Exception $e) {
            report($e);
            return response()->json([
                'success' => false
            ], 500);
        }
    }

    public function sendNotificationrToUser(Request $request)
    {

        $token = $request->input('token'); // Replace with the actual device token
        $notification = [
            'title' => 'New Notification',
            'body' => 'Hello, this is a Firebase push notification!',
        ];

        $response = FCMService::sendNotification($token, $notification);

        // Process the response as needed

        return "Notification sent successfully!";
    }

    //=== Get State List ===//
    public function getStateList(Request $request)
    {
        $stateList = DB::select('select id, state from state_city_list order by state asc');
        $temp_array = [];
        foreach ($stateList as &$v) {
            if (!isset($temp_array[$v->state]))
                $temp_array[$v->state] = &$v;
        }
        $states = array_values($temp_array);


        return response()->json(['message' => 'Get State List', 'stateList' => $states], 200);
    }


    //=== Get City List ===//
    public function getCityList($id)
    {
        $stateId = DB::select('select state from state_city_list where id = ?', [$id]);
        $cities = DB::select('select * from state_city_list where state = ?', [$stateId[0]->state]);
        return response()->json(['message' => 'Get City List', 'cityList' => $cities], 200);
    }

    public function getCitysearch(Request $request)
    {
        $query = $request->input('query');
        $cities = DB::table('state_city_list')
            ->where('city', 'LIKE', '%' . $query . '%')
            ->get();

        return response()->json(['message' => 'Get City List', 'cityList' => $cities], 200);
    }

    public function testSms(Request $request)
    {
        $sendSms = HelperClass::sendSms('9994214396', '0000', '10', '1');
    }

    public function getUserSkills()
    {
        $userSkills = UserSkill::select('name')->get();
        return response()->json(['data' => $userSkills], 200);
    }
    
    public function get_education()
    {
        $education = Education::get();
        return response()->json(['data' => $education], 200);
    }
    
    
    
    public function getEducationList() {
        $educationwithlist = Education::with('educationlist')->get();
        return response()->json(['data' => $educationwithlist], 200);
    }
    
    
    
}
