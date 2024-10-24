@extends('admin.admin_layout.master')
@section('content')



<!--begin::Header-->


<!--begin::Toolbar-->
<div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 ">

    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex flex-stack ">



        <!--begin::Page title-->
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
            <!--begin::Title-->
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                Users List
            </h1>
            <!--end::Title-->
        </div>
        <!--end::Page title-->
        <!--begin::Actions-->
        <div class="d-flex align-items-center gap-2 gap-lg-3">
            <!--begin::Filter menu-->
        </div>
        <!--end::Actions-->
    </div>
    <!--end::Toolbar container-->
</div>
<!--end::Toolbar-->

<!--begin::Content-->
<div id="kt_app_content" class="app-content  flex-column-fluid ">

    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container  container-xxl ">
        <!--begin::Products-->
        <div class="card card-flush">
            <!--begin::Card header-->
            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                <!--begin::Card title-->
                <div class="card-title">
                    <!--begin::Search-->
                    <div class="d-flex align-items-center position-relative my-1">
                        <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4"><span class="path1"></span><span class="path2"></span></i> <input type="text" data-kt-ecommerce-order-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Report" />
                    </div>
                    <!--end::Search-->

                    <!--begin::Export buttons-->
                    <div id="kt_ecommerce_report_customer_orders_export" class="d-none"></div>
                    <!--end::Export buttons-->
                </div>
                <!--end::Card title-->

                <!--begin::Card toolbar-->
                <div class="card-toolbar flex-row-fluid justify-content-end gap-5">

                    <!--begin::Filter-->
                    <div class="w-150px">
                        <!--begin::Select2-->
                        <!-- <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-order-filter="status">
                            <option></option>
                            <option value="all">All</option>
                            <option value="active">Active</option>
                            <option value="locked">Locked</option>
                            <option value="pending">Pending</option>
                            <option value="banned">Banned</option>
                        </select> -->
                        <!--end::Select2-->
                    </div>
                    <!--end::Filter-->

                    <!--begin::Export dropdown-->
                    <button type="button" class="btn btn-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <i class="ki-duotone ki-exit-up fs-2"><span class="path1"></span><span class="path2"></span></i> Export Report
                    </button>
                    <!--begin::Menu-->
                    <div id="kt_ecommerce_report_customer_orders_export_menu" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3" data-kt-ecommerce-export="copy">
                                Copy to clipboard
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3" data-kt-ecommerce-export="excel">
                                Export as Excel
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3" data-kt-ecommerce-export="csv">
                                Export as CSV
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3" data-kt-ecommerce-export="pdf">
                                Export as PDF
                            </a>
                        </div>
                        <!--end::Menu item-->

                    </div>
                    <!--end::Menu-->
                    <!--end::Export dropdown-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->

            <!--begin::Card body-->
            <div class="card-body pt-0">

                <!--begin::Table-->
                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_report_customer_orders_table">
                    <thead>
                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                            <th class="min-w-100px">Customer Name</th>
                            <th class="min-w-100px">Email</th>
                            <th class="min-w-100px">Status</th>
                            <th class="min-w-100px">Profession</th>
                            <th class="min-w-100px">Date Joined</th>
                            <th class="text-center min-w-100px">Action</th>
                        </tr>
                    </thead>
                    <tbody class="fw-semibold text-gray-600">
                        @foreach ($data as $key => $user)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-45px me-5">
                                        @if ($user->profile_picture)
                                        <img alt="Pic" src="{{ $user->profile_picture }}">
                                        @else
                                        <img alt="Default Pic" src="{{ asset('assets/user/media/avatars/12345.png')}}">
                                        @endif
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Name-->
                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="{{ route('profile.view_user_detail',$user->id) }}" class="text-dark fw-bold text-hover-primary mb-1 fs-6">{{ $user->name }}</a>

                                        <a href="{{ route('profile.view_user_detail',$user->id) }}" class="text-muted text-hover-primary fw-semibold text-muted d-block fs-7">
                                            <!-- <span class="text-dark">Email</span>: smith@kpmg.com </a> -->
                                    </div>
                                    <!--end::Name-->
                                </div>
                            </td>
                            <td>
                                <a href="#" class="text-dark text-hover-primary">{{ $user->email }}</a>
                            </td>


                            <td>
                                @if($user->status == 1)
                                <div class="badge badge-light-success">Active</div>
                                @else
                                <div class="badge badge-light-warning">Pending</div>
                                @endif
                            </td>

                            <td>
                                {{ $user->designation }}
                            </td>


                            <td>
                                {{ $user->created_at }}
                            </td>
                            <td class="text-center">
                                <!-- <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="View posts" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                    <i class="ki-duotone ki-picture fs-2 text-primary"><span class="path1"></span><span class="path2"></span></i> </a> -->

                                <a href="{{ route('profile.view_user_detail',$user->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="View details" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                    <i class="ki-duotone ki-user fs-2 text-warning"><span class="path1"></span><span class="path2"></span></i> </a>

                                <a href="#" data-id="{{ $user->id }}" data-bs-toggle="tooltip" data-bs-placement="top" title="delete" class="btn btn-icon delete-btn btn-bg-light btn-active-color-primary btn-sm">
                                    <i class="ki-duotone ki-trash fs-2 text-danger"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i> </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <!--end::Table-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Products-->
    </div>
    <!--end::Content container-->
</div>
<!--end::Content-->
</div>
<!--end::Content wrapper-->


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script>
    $(document).on('click', '.delete-btn', function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        var status = $(this).data('name');
        Swal.fire({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this record!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, Do it!",
                cancelButtonText: "No, cancel!",
                closeOnConfirm: false,
                closeOnCancel: false
            })
            .then((willDelete) => {
                if (willDelete.isConfirmed) {
                    $.ajax({
                        type: "POST",
                        url: '/user_get/delete/' + id,
                        data: {
                            "_token": "{{ csrf_token() }}",
                            "id": id
                        },
                        success: function(response) {
                            Swal.fire("Deleted!", "Your record has been deleted.", "success");
                            window.location.reload();
                        },
                        error: function(xhr) {
                            Swal.fire("Error!", "Failed to update record!", "error");
                        }
                    });
                } else if (willDelete.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire("Cancelled", "Your record is safe :)", "error");
                }
            });
    });
</script>




@stop