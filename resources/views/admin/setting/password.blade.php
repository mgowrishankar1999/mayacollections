@extends('admin.admin_layout.master')
@section('content')

<div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 ">

    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex flex-stack ">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
            <!--begin::Title-->
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
               Password
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

<div id="kt_app_content" class="app-content  flex-column-fluid ">
    <div id="kt_app_content_container" class="app-container  container-xxl ">
        <div class="card card-flush">
            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                
             <div class="modal-content">
                    <!--begin::Modal header-->
                    <div class="modal-header" id="kt_modal_add_user_header">
                        <!--begin::Modal title-->
                        <h2 class="fw-bold">Change password</h2>

                    </div>
                    <!--end::Modal header-->

                    <!--begin::Modal body-->
                    <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                        <!--begin::Form-->
                                    <form id="kt_modal_add_user_form" method="POST" class="form" action="{{ route('update.password', ['id' => 4]) }}">
                @csrf
                <!--begin::Scroll-->
                <div class="d-flex flex-column scroll-y me-n7 pe-7">
                    <!--begin::Input group-->
            
                    <!--end::Input group-->
            
                    <!--begin::Input group-->
                    <div class="fv-row mb-7">
                        <!--begin::Label-->
                        <label class="required fw-semibold fs-6 mb-2">Password</label>
                        <!--end::Label-->
            
                        <!--begin::Input-->
                        <input type="password" name="password" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Password" />
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
            
                    <!--begin::Input group-->
                    <div class="fv-row mb-7">
                        <!--begin::Label-->
                        <label class="required fw-semibold fs-6 mb-2">Confirm Password</label>
                        <!--end::Label-->
            
                        <!--begin::Input-->
                        <input type="password" name="password_confirmation" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Confirm Password" />
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
            
                </div>
                <!--end::Scroll-->
            
                <!--begin::Actions-->
                <div class="text-center pt-15">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
                <br>
                <!--end::Actions-->
            </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Modal body-->
                </div>   
                
            </div>
        </div>
    </div>
    <!--end::Content container-->
</div>

@stop