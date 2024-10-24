@extends('admin.admin_layout.master')
@section('content')
<!-- danger -->

<ul class="flex space-x-2 rtl:space-x-reverse">
    <li>
        <a href="{{ route('roles.index') }}" class="text-primary hover:underline">Roles</a>
    </li>
    <li class="before:content-['/'] ltr:before:mr-1 rtl:before:ml-1">
        <span>view</span>
    </li>
</ul>
<div class="panel lg:col-span-2 mt-2">
    <div class="mb-5 flex items-center text-bold justify-between">
        <h5 class="text-lg font-semibold dark:text-white-light">View Role</h5>
    </div>
    <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
        <div class="panel">
            <div class="mb-5">
                <h5 class="text-lg font-semibold dark:text-white-light">Name</h5>
            </div>
            <div class="space-y-4">
                <div class="rounded border border-[#ebedf2] dark:border-0 dark:bg-[#1b2e4b]">
                    <div class="flex items-center justify-between p-4 py-2">
                        <div class="grid h-9 w-9 place-content-center rounded-md bg-secondary-light text-secondary dark:bg-secondary dark:text-secondary-light">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                                <path d="M3.79424 12.0291C4.33141 9.34329 4.59999 8.00036 5.48746 7.13543C5.65149 6.97557 5.82894 6.8301 6.01786 6.70061C7.04004 6 8.40956 6 11.1486 6H12.8515C15.5906 6 16.9601 6 17.9823 6.70061C18.1712 6.8301 18.3486 6.97557 18.5127 7.13543C19.4001 8.00036 19.6687 9.34329 20.2059 12.0291C20.9771 15.8851 21.3627 17.8131 20.475 19.1793C20.3143 19.4267 20.1267 19.6555 19.9157 19.8616C18.7501 21 16.7839 21 12.8515 21H11.1486C7.21622 21 5.25004 21 4.08447 19.8616C3.87342 19.6555 3.68582 19.4267 3.5251 19.1793C2.63744 17.8131 3.02304 15.8851 3.79424 12.0291Z" stroke="currentColor" stroke-width="1.5"></path>
                                <path opacity="0.5" d="M9 6V5C9 3.34315 10.3431 2 12 2C13.6569 2 15 3.34315 15 5V6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                <path opacity="0.5" d="M9.1709 15C9.58273 16.1652 10.694 17 12.0002 17C13.3064 17 14.4177 16.1652 14.8295 15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                            </svg>
                        </div>
                        <div class="flex flex-auto items-start justify-between font-semibold ltr:ml-4 rtl:mr-4">
                            <h6 class="text-[13px] text-white-dark dark:text-white-dark">
                                <span style="font-size: 18px;font-weight: 800;" class="badge-outline-success">{{ $role->name }} </span> <span class="block text-base text-[#515365] dark:text-white-light">{{ $role->guard_name }}</span>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel">
            <div class="mb-10 flex items-center justify-between">
                <h5 class="text-lg font-semibold dark:text-white-light">Permissions</h5>
                <a href="{{ route('roles.edit',$role->id) }}" class="btn btn-primary">Add Permission</a>
            </div>
            <div class="group">
                @if(!empty($rolePermissions))
                @foreach($rolePermissions as $v)
                <ul class="mb-2 list-inside list-disc space-y-2 font-semibold text-white-dark">
                    <li>{{ $v->name }}</li>
                </ul>
                @endforeach
                @endif
                <div class="mb-4 flex items-center justify-between font-semibold">

                </div>
                <div class="mb-5 h-2.5 overflow-hidden rounded-full bg-dark-light p-0.5 dark:bg-dark-light/10">
                    <div class="relative h-full w-full rounded-full bg-gradient-to-r from-[#f67062] to-[#fc5296]" style="width: 65%"></div>
                </div>
            </div>
        </div>

    </div>


    @stop