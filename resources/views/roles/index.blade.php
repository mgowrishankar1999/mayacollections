@extends('admin.admin_layout.master')
@section('content')
<ul class="flex space-x-2 rtl:space-x-reverse">
    <li>
        <a href="{{ url('/home') }}" class="text-primary hover:underline">Dashboard</a>
    </li>
    <li class="before:content-['/'] ltr:before:mr-1 rtl:before:ml-1">
        <span>Roles</span>
    </li>
</ul>
<div class="animate__animated p-6" :class="[$store.app.animation]">

    <!-- start main content section -->
    <div x-data="basic">
        <div class="panel">
            <div class="mb-4 flex flex-col items-center justify-center sm:flex-row sm:justify-between">
                <div class="mb-4 sm:mb-0">
                    <div class="text-center text-lg font-semibold ltr:sm:text-left rtl:sm:text-right">Roles & Permission</div>
                    <div class="mt-2 flex flex-wrap items-center justify-center sm:justify-start">
                        <div class="flex items-center ltr:mr-4 rtl:ml-4">
                            <div class="h-2.5 w-2.5 rounded-sm bg-success ltr:mr-2 rtl:ml-2"></div>
                            <div>Admin</div>
                        </div>
                        <div class="flex items-center ltr:mr-4 rtl:ml-4">
                            <div class="h-2.5 w-2.5 rounded-sm bg-primary ltr:mr-2 rtl:ml-2"></div>
                            <div>Sub Admin</div>
                        </div>
                        <div class="flex items-center ltr:mr-4 rtl:ml-4">
                            <div class="h-2.5 w-2.5 rounded-sm bg-info ltr:mr-2 rtl:ml-2"></div>
                            <div>User</div>
                        </div>
                        <div class="flex items-center">
                            <div class="h-2.5 w-2.5 rounded-sm bg-danger ltr:mr-2 rtl:ml-2"></div>
                            <div>Others</div>
                        </div>
                    </div>
                </div>
                @can('role-create')
                <a href="{{ route('roles.create') }}" type="button" class="btn btn-primary" @click="editEvent()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 ltr:mr-2 rtl:ml-2">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                    Create role
                </a>
                @endcan
            </div>
            <div class="dataTable-wrapper dataTable-loading no-footer sortable fixed-columns">
                <div class="dataTable-top"></div>
                <div class="dataTable-container">
                    <table id="myTable" class="table-hover whitespace-nowrap dataTable-table">
                        <thead>
                            <tr>
                                <th data-sortable="" style="width: 6.38298%;"><a href="#" class="dataTable-sorter">ID</a></th>
                                <th data-sortable="" style="width: 16.6809%;"><a href="#" class="dataTable-sorter">Name</a></th>
                                <th data-sortable="false" style="width: 18.383%;">Guard Name</th>
                                <th data-sortable="" style="width: 20.3404%;"><a href="#" class="dataTable-sorter">created at</a></th>
                                <th data-sortable="false" style="width: 11.234%;">updated at</th>
                                <th data-sortable="false" style="width: 9.61702%;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $key => $role)
                            <tr>
                                <td><strong class="text-info">#{{ ++$i }}</strong></td>
                                <td><span class="badge badge-outline-success">{{ $role->name }}</span></td>
                                <td>
                                    <div class="flex items-center gap-2">
                                        <div class="font-semibold">{{ $role->guard_name }}</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="flex items-center gap-2">
                                        <div>{{ $role->created_at }}</div>
                                    </div>
                                </td>
                                <td>{{ $role->updated_at }}</td>
                                <td>
                                    <ul class="flex items-center justify-center gap-2">


                                        <li>
                                            <a class="flex h-8 w-8 items-center justify-center rounded-full bg-primary text-white shadow shadow-secondary" href="{{ route('roles.show',$role->id) }}" x-tooltip="View">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                                                    <path fill="white" d="M12 4.5A11.8 11.8 0 0 0 1 12a11.8 11.8 0 0 0 11 7.5h1.1a3.8 3.8 0 0 1-.1-1a4.1 4.1 0 0 1 .1-1.1H12A9.6 9.6 0 0 1 3.2 12A9.6 9.6 0 0 1 12 6.5a9.6 9.6 0 0 1 8.8 5.5l-.4.7a4.6 4.6 0 0 1 1.9.8A10.1 10.1 0 0 0 23 12a11.8 11.8 0 0 0-11-7.5M12 9a3 3 0 1 0 3 3a2.9 2.9 0 0 0-3-3m3 8.5v2h8v-2Z" />
                                                </svg>
                                            </a>
                                        </li>

                                        <li>
                                            @can('role-edit')
                                            <a class="flex h-8 w-8 items-center justify-center rounded-full bg-warning text-white shadow shadow-secondary" href="{{ route('roles.edit',$role->id) }}" x-tooltip="Edit">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                                                    <path opacity="0.5" d="M4 22H20" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                                    <path d="M14.6296 2.92142L13.8881 3.66293L7.07106 10.4799C6.60933 10.9416 6.37846 11.1725 6.17992 11.4271C5.94571 11.7273 5.74491 12.0522 5.58107 12.396C5.44219 12.6874 5.33894 12.9972 5.13245 13.6167L4.25745 16.2417L4.04356 16.8833C3.94194 17.1882 4.02128 17.5243 4.2485 17.7515C4.47573 17.9787 4.81182 18.0581 5.11667 17.9564L5.75834 17.7426L8.38334 16.8675L8.3834 16.8675C9.00284 16.6611 9.31256 16.5578 9.60398 16.4189C9.94775 16.2551 10.2727 16.0543 10.5729 15.8201C10.8275 15.6215 11.0583 15.3907 11.5201 14.929L11.5201 14.9289L18.3371 8.11195L19.0786 7.37044C20.3071 6.14188 20.3071 4.14999 19.0786 2.92142C17.85 1.69286 15.8581 1.69286 14.6296 2.92142Z" stroke="currentColor" stroke-width="1.5"></path>
                                                    <path opacity="0.5" d="M13.8879 3.66406C13.8879 3.66406 13.9806 5.23976 15.3709 6.63008C16.7613 8.0204 18.337 8.11308 18.337 8.11308M5.75821 17.7437L4.25732 16.2428" stroke="currentColor" stroke-width="1.5"></path>
                                                </svg>
                                            </a>
                                            @endcan
                                        </li>
                                        <li>
                                            @can('role-delete')
                                            <form action="{{route('roles.destroy', $role->id)}}" method="POST">
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE">
                                                <a x-tooltip="delete" class=" flex h-8 w-8 items-center justify-center rounded-full bg-danger text-white shadow shadow-secondary" data-toggle="tooltip" data-placement="top" title="Delete">
                                                    <button type="submit" style="border: 0; background: none;">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 512 512">
                                                            <path fill="none" d="M296 64h-80a7.91 7.91 0 0 0-8 8v24h96V72a7.91 7.91 0 0 0-8-8Z" />
                                                            <path fill="none" d="M292 64h-72a4 4 0 0 0-4 4v28h80V68a4 4 0 0 0-4-4Z" />
                                                            <path fill="white" d="M447.55 96H336V48a16 16 0 0 0-16-16H192a16 16 0 0 0-16 16v48H64.45L64 136h33l20.09 314A32 32 0 0 0 149 480h214a32 32 0 0 0 31.93-29.95L415 136h33ZM176 416l-9-256h33l9 256Zm96 0h-32V160h32Zm24-320h-80V68a4 4 0 0 1 4-4h72a4 4 0 0 1 4 4Zm40 320h-33l9-256h33Z" />
                                                        </svg>
                                                    </button>
                                                </a>
                                            </form>
                                            @endcan
                                        </li>
                                    </ul>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $roles->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@stop