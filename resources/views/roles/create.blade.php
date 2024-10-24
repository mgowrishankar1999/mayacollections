@extends('admin.admin_layout.master')
@section('content')

<ul class="flex space-x-2 rtl:space-x-reverse">
    <li>
        <a href="{{ route('roles.index') }}" class="text-primary hover:underline">Roles</a>
    </li>
    <li class="before:content-['/'] ltr:before:mr-1 rtl:before:ml-1">
        <span>Create</span>
    </li>
</ul>
<!-- danger -->
<div class="panel lg:col-span-2 mt-2">
    <div class="mb-5 flex items-center justify-between">
        <h5 class="text-lg font-semibold dark:text-white-light">Create Role</h5>
    </div>
    <div class="mb-5">
        {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
        <div class="mx-auto flex max-w-[900px] flex-col items-center gap-4 md:flex-row">
            <label style="font-weight: 800;">Role Name <span style="color: red;">*</span></label>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-input flex-1')) !!}
        </div>
        <br>
        <div class="panel">
            <div class="mb-5 flex items-center justify-between">
                <h5 class="text-lg font-semibold dark:text-white-light">Permissions</h5>
            </div>
            <div class="mb-5">
                <div class="grid grid-cols-4">
                    <div class="space-y-2">
                        <div>
                            <!-- <label class="inline-flex">
                                    <input type="checkbox" class="peer form-checkbox rounded-full text-success">
                                    <span class="peer-checked:text-success">Success</span>
                                </label> -->

                            @foreach($permission as $value)
                            <label class="inline-flex">{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'peer form-checkbox rounded-full text-success','type'=>'checkbox')) }}
                                <span class="peer-checked:text-success">{{ $value->name }}</span></label>
                            <br />
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button style="float: right;" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>

            {!! Form::close() !!}
        </div>
    </div>

    @stop