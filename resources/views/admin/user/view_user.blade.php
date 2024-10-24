@extends('admin.admin_layout.master')
@section('content')

<div id="kt_app_content" class="app-content  flex-column-fluid mt-5">


    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container  container-xxl ">

        <!--begin::Navbar-->
        <div class="card mb-5 mb-xxl-8">
            <div class="card-body pt-9 pb-0">
                <!--begin::Details-->
                <div class="d-flex flex-wrap flex-sm-nowrap">
                    <!--begin: Pic-->
                    <div class="me-7 mb-4">
                        <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                            <img src="{{ asset('assets/user/media/avatars/300-1.jpg')}}" alt="image">
                            <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
                        </div>
                    </div>
                    <!--end::Pic-->

                    <!--begin::Info-->
                    <div class="flex-grow-1">
                        <!--begin::Title-->
                        <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                            <!--begin::User-->
                            <div class="d-flex flex-column">
                                <!--begin::Name-->
                                <div class="d-flex align-items-center mb-2">
                                    <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">{{ $data->name }} ({{ $data->user_name }})</a>
                                    <a href="#"><i class="ki-duotone ki-verify fs-1 text-primary"><span class="path1"></span><span class="path2"></span></i></a>
                                </div>
                                <!--end::Name-->

                                <!--begin::Info-->
                                <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">

                                    <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                        <i class="ki-duotone ki-geolocation fs-4 me-1"><span class="path1"></span><span class="path2"></span></i> {{ $data->address }},{{ $data->city }}
                                    </a>
                                    <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                        <i class="ki-duotone ki-sms fs-4 me-1"><span class="path1"></span><span class="path2"></span></i>{{ $data->email }}
                                    </a>
                                </div>
                                <!--end::Info-->

                                <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                                    <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                        <i class="ki-duotone ki-telephone-geolocation fs-4 me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> {{ $data->mobile }}
                                    </a>

                                </div>

                                <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                                    <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                        <i class="ki-duotone ki-fingerprint-scanning fs-4 me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>Registered in : {{ $data->created_at }}
                                    </a>

                                </div>
                            </div>
                            <!--end::User-->
                            @if($data->status == 0)
                            <!--begin::Actions-->
                            <div class="d-flex my-4">
                                <a href="#" onclick="click_here(this.id, this.name)" id="{{ $data->id }}" name="1" class="btn btn-sm btn-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_offer_a_deal">Approve</a>
                            </div>
                            @endif
                            <!--end::Actions-->
                        </div>
                        <!--end::Title-->

                        <!--begin::Stats-->

                        <!--end::Stats-->
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Details-->

                <!--begin::Navs-->
                <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                    <!--begin::Nav item-->
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="#">
                            Overview </a>
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->

                    <!--end::Nav item-->
                </ul>
                <!--begin::Navs-->
            </div>
        </div>
        <!--end::Navbar-->
        <!--begin::Row-->
        <!--<div class="row g-5 g-xxl-8">-->
            <!--begin::Col-->
        <!--    <div class="col-xl-6">-->
                <!--begin::Feeds Widget 1-->
        <!--        <div class="card mb-5 mb-xxl-8">-->
                    <!--begin::Body-->
        <!--            <div class="card-body pb-0">-->
                        <!--begin::Header-->
        <!--                <div class="d-flex align-items-center">-->
                            <!--begin::User-->
        <!--                    <div class="d-flex align-items-center flex-grow-1">-->
                                <!--begin::Avatar-->
        <!--                        <div class="symbol symbol-45px me-5">-->
        <!--                            <img src="https://thumbs.dreamstime.com/b/people-meeting-organisation-concepts-44794045.jpg" alt="">-->
        <!--                        </div>-->
                                <!--end::Avatar-->

                                <!--begin::Info-->
        <!--                        <div class="d-flex flex-column">-->
        <!--                            <a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bold">Organisation details-->
        <!--                            </a>-->
        <!--                            <span class="text-gray-400 fw-bold">Current company : {{ $data->current_company }}</span>-->
        <!--                            <span class="text-gray-400 fw-bold">Department : {{ $data->departmant }}</span>-->
        <!--                            <span class="text-gray-400 fw-bold">Designation : {{ $data->designation }}</span>-->
                                    <!-- <span class="text-gray-400 fw-bold">Qualification : {{ $data->qualification }}</span> -->
        <!--                            <span class="text-gray-400 fw-bold">Official email : {{ $data->official_email }}</span>-->
        <!--                        </div>-->
                                <!--end::Info-->
        <!--                    </div>-->


                            <!--end::Menu-->
        <!--                </div>-->
                        <!--end::Header-->

                        <!--begin::Form-->
        <!--                <form id="kt_forms_widget_1_form" class="ql-quil ql-quil-plain pb-3">-->
                            <!--begin::Editor-->

                            <!--end::Editor-->



                            <!--begin::Toolbar-->

                            <!--end::Toolbar-->
        <!--                </form>-->
                        <!--end::Form-->
        <!--            </div>-->
                    <!--end::Body-->
        <!--        </div>-->
                <!--end::Feeds Widget 1-->
        <!--    </div>-->
            <!--end::Col-->

            <!--begin::Col-->
        <!--    <div class="col-xl-6">-->
                <!--begin::Charts Widget 1-->
        <!--        <div class="card mb-5 mb-xxl-8">-->
                    <!--begin::Header-->
        <!--            <div class="card-header border-0 pt-5">-->
                        <!--begin::Title-->
        <!--                <h3 class="card-title align-items-start flex-column">-->
        <!--                    <span class="card-label fw-bold fs-3 mb-1">User Status</span>-->
        <!--                    <br>-->

        <!--                    @if($data->status == 1)-->
        <!--                    <span class="badge py-3 px-4 fs-7 badge-light-success">Approved</span>-->
        <!--                    @else-->
        <!--                    <span class="badge py-3 px-4 fs-7 badge-light-warning">Waiting for your approval</span>-->
        <!--                    @endif-->
        <!--                </h3>-->
                        <!--end::Title-->

                        <!--begin::Toolbar-->
        <!--                <div class="card-toolbar">-->
                            <!--begin::Menu-->
        <!--                    <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">-->
        <!--                        <i class="ki-duotone ki-category fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i> </button>-->
        <!--                </div>-->
                        <!--end::Toolbar-->
        <!--            </div>-->

        <!--        </div>-->
        <!--    </div>-->
            <!--end::Col-->
        <!--</div>-->
        <div class="row g-5 g-xxl-8">

            <!--begin::Col-->

            <div class="col-xl-6">

                <!--begin::Feeds Widget 1-->

                <div class="card mb-5 mb-xxl-8">

                    <!--begin::Body-->

                    <div class="card-body pb-0">

                        <!--begin::Header-->

                        <div class="d-flex align-items-center">

                            <!--begin::User-->

                            <div class="d-flex align-items-center flex-grow-1">

                                <!--begin::Avatar-->

                                <div class="symbol symbol-45px me-5">

                                    <img src="https://cdn2.iconfinder.com/data/icons/public-services-filledoutline/64/HOTEL-vacations-hotel-buildings-holidays-512.png" alt="">

                                </div>

                                <!--end::Avatar-->



                                <!--begin::Info-->

                                <div class="d-flex flex-column">
                                    <a href="" class="text-gray-900 text-hover-primary fs-6 fw-bold">Current Company</a>
                                    <span class="text-gray-400 fw-bold">Current company: {{ $data->current_company }}</span>
                                    <span class="text-gray-400 fw-bold">Department: {{ $department_name->title ?? 'N/A' }}</span>
                                    <span class="text-gray-400 fw-bold">Designation: {{ $data->designation }}</span>
                                    <!-- <span class="text-gray-400 fw-bold">Qualification: {{ $data->qualification }}</span> -->
                                    <span class="text-gray-400 fw-bold">Official email: {{ $data->official_email }}</span>
                                </div>

                                <!--end::Info-->

                            </div>





                            <!--end::Menu-->

                        </div>

                        <!--end::Header-->



                        <!--begin::Form-->

                        <form id="kt_forms_widget_1_form" class="ql-quil ql-quil-plain pb-3">

                            <!--begin::Editor-->



                            <!--end::Editor-->







                            <!--begin::Toolbar-->



                            <!--end::Toolbar-->

                        </form>

                        <!--end::Form-->

                    </div>

                    <!--end::Body-->

                </div>

                <!--end::Feeds Widget 1-->

            </div>

            <!--end::Col-->



            <!--begin::Col-->

            <div class="col-xl-6">

                <!--begin::Charts Widget 1-->

                <div class="card mb-5 mb-xxl-8">

                    <!--begin::Header-->

                    <div class="card-header border-0 pt-5">

                        <!--begin::Title-->

                        <h3 class="card-title align-items-start flex-column">

                            <span class="card-label fw-bold fs-3 mb-1">User Status</span>

                            <br>



                            @if($data->status == 1)

                            <span class="badge py-3 px-4 fs-7 badge-light-success">Approved</span>

                            @else

                            <span class="badge py-3 px-4 fs-7 badge-light-warning">Waiting for your approval</span>

                            @endif

                        </h3>

                        <!--end::Title-->



                        <!--begin::Toolbar-->

                        <div class="card-toolbar">

                            <!--begin::Menu-->

                            <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">

                                <i class="ki-duotone ki-category fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i> </button>

                        </div>

                        <!--end::Toolbar-->

                    </div>



                </div>

            </div>







            <div class="row g-5 g-xxl-8">

                <!--begin::Col-->

                <div class="col-xl-6">

                    <!--begin::Feeds Widget 1-->





                    <div class="card mb-5 mb-xxl-8">

                        <!--begin::Header-->

                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">

                                <span class="card-label fw-bold fs-3 mb-1">Previous company</span>
                                @foreach($positions as $positions_data)
                                <span class="text-gray-400 fw-bold">Title : {{ $positions_data->title }}</span>
                                <span class="text-gray-400 fw-bold">Employment type : {{ $positions_data->employment_type }}</span>
                                <span class="text-gray-400 fw-bold">Company : {{ $positions_data->company_name }}</span>
                                <span class="text-gray-400 fw-bold">Location : {{ $positions_data->	location }}</span>
                                <span class="text-gray-400 fw-bold">Start date : {{ $positions_data->start_date }}</span>
                                <span class="text-gray-400 fw-bold">End Date : {{ $positions_data->end_date }}</span>
                                <span class="text-gray-400 fw-bold">Industryname : {{ $positions_data->industry_name }}</span>
                                @endforeach
                                <br>
                            </h3>
                            <div class="card-toolbar">

                                <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">

                                    <i class="ki-duotone ki-category fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i> </button>

                            </div>

                        </div>
                    </div>

                </div>

                <!--end::Col-->



                <!--begin::Col-->

                <div class="col-xl-6">

                    <!--begin::Charts Widget 1-->
                    <div class="card mb-5 mb-xxl-8">

                        <!--begin::Body-->

                        <div class="card-body pb-0">

                            <!--begin::Header-->

                            <div class="d-flex align-items-center">

                                <!--begin::User-->

                                <div class="d-flex align-items-center flex-grow-1">

                                    <!--begin::Avatar-->

                                    <div class="symbol symbol-45px me-5">

                                        <img src="https://cdn2.iconfinder.com/data/icons/public-services-filledoutline/64/HOTEL-vacations-hotel-buildings-holidays-512.png" alt="">

                                    </div>

                                    <!--end::Avatar-->



                                    <!--begin::Info-->

                                    <div class="d-flex flex-column">
                                        <a href="" class="text-gray-900 text-hover-primary fs-6 fw-bold">Skills

                                        </a>
                                        @foreach($skill as $skill_data)
                                        <p>{{ $skill->name }}</p>
                                        <span class="text-gray-400 fw-bold">Skills : {{ $skill_data->user_name }}</span>
                                        @endforeach



                                    </div>

                                    <!--end::Info-->

                                </div>





                                <!--end::Menu-->

                            </div>

                            <!--end::Header-->



                            <!--begin::Form-->

                            <form id="kt_forms_widget_1_form" class="ql-quil ql-quil-plain pb-3">

                                <!--begin::Editor-->



                                <!--end::Editor-->






                                <!--begin::Toolbar-->



                                <!--end::Toolbar-->

                            </form>

                            <!--end::Form-->

                        </div>

                        <!--end::Body-->

                    </div>


                </div>

            </div>
        </div>
        <!--end::Row-->


    </div>
    <!--end::Content container-->
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script>
    function click_here(clicked_id, clicked_name) {

        var id = clicked_id;
        var status = clicked_name;



        swal({
                title: "Are you sure!",
                type: "error",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes!",
                showCancelButton: true,
            },
            function() {
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: 'change_user_status_get',
                    data: {
                        '_token': '{{ csrf_token() }}',
                        'status': status,
                        'id': id
                    },
                    success: function(data) {
                        location.reload();
                        toastr.success(data.success);
                    }
                });
            });
    }
</script>



@stop