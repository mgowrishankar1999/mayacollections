@extends('admin.admin_layout.master')
@section('content')

<ul class="flex space-x-2 rtl:space-x-reverse">
    <li>
        <a href="{{ route('users.index') }}" class="text-primary hover:underline">Users</a>
    </li>
    <li class="before:content-['/'] ltr:before:mr-1 rtl:before:ml-1">
        <span>Create</span>
    </li>
</ul>
<!-- danger -->
<div class="panel lg:col-span-2 mt-2">
    <div class="mb-5 flex items-center justify-between">
        <h5 class="text-lg font-semibold dark:text-white-light">Create User</h5>
    </div>
    <div class="mb-5">
        {!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
            <div>
                <label for="gridEmail">Name <span style="color: red;">*</span></label>
                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-input')) !!}
            </div>
            <div>
                <label for="gridPassword">Email <span style="color: red;">*</span></label>
                {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-input')) !!}
            </div>
            <div>
                <label for="gridPassword">Mobile <span style="color: red;">*</span></label>
                {!! Form::text('mobile', null, array('placeholder' => 'Email','class' => 'form-input')) !!}
            </div>
            <div>

                <label for="gridState">Role <span style="color: red;">*</span></label>
                {!! Form::select('roles[]', $roles,[], array('class' => 'form-select text-white-dark')) !!}

            </div>
            <div>
                <label for="gridPassword">Password <span style="color: red;">*</span></label>
                {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-input')) !!}
            </div>
            <div>
                <label for="gridPassword">Confirm password <span style="color: red;">*</span></label>
                {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-input')) !!}
            </div>


        </div>
        <div class="mt-3">
            <button style="float: right;" type="submit" class="btn btn-primary">Update</button>
        </div>
        {!! Form::close() !!}
    </div>

    @stop