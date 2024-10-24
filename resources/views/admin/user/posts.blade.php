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
                            @if ($data->profile_picture)
                            <img alt="image" src="{{ $data->profile_picture }}">
                            @else
                            <img alt="image" src="{{ asset('assets/user/media/avatars/300-1.jpg')}}">
                            @endif
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
                                    <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">{{ $data->name }}</a>
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
                        <a class="nav-link text-active-primary ms-0 me-10 py-5" href="{{ route('profile.view_user_detail',$data->id) }}">
                            Overview </a>
                    </li>

                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5  active" href="{{ route('profile.view_user_posts',$data->id) }}">
                            Posts </a>
                    </li>

                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5" href="{{ route('profile.view_user_friends',$data->id) }}">
                            Friends </a>
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
        <div class="card">
            <!--begin::Body-->
            <div class="card-body p-lg-20">
                <!--begin::Section-->

                <!--end::Section-->







                <!--begin::Section-->
                <div class="mb-17">
                    <!--begin::Content-->
                    <div class="d-flex flex-stack mb-5">
                        <!--begin::Title-->
                        <h3 class="text-dark">Posts</h3>
                        <!--end::Title-->

                        <!--begin::Link-->
                        <a href="#" class="fs-6 fw-semibold link-primary">
                            View All
                        </a>
                        <!--end::Link-->
                    </div>
                    <!--end::Content-->

                    <!--begin::Separator-->
                    <div class="separator separator-dashed mb-9"></div>
                    <!--end::Separator-->

                    <!--begin::Row-->
                    <div class="row g-10">
                        <!--begin::Col-->
                        @foreach ($get_post as $key => $post)
                        <div class="col-md-4">
                            <!--begin::Hot sales post-->
                            <div class="card-xl-stretch me-md-6">
                                <!--begin::Overlay-->
                                <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="{{ $post->media_url }}">
                                    <!--begin::Image-->
                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url({{ $post->media_url }})">
                                    </div>
                                    <!--end::Image-->

                                    <!--begin::Action-->
                                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                        <i class="ki-duotone ki-eye fs-2x text-white"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                    </div>
                                    <!--end::Action-->
                                </a>
                                <!--end::Overlay-->

                                <!--begin::Body-->
                                <div class="mt-5">
                                    <!--begin::Title-->
                                    <a href="#" class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">
                                        {{ $post->title }} </a>
                                    <!--end::Title-->

                                    <!--begin::Text-->
                                    <!-- <div class="fw-semibold fs-5 text-gray-600 text-dark mt-3">
                                        {{ $post->description }}
                                    </div> -->

                                    <br>

                                    <div class="d-flex align-items-center mb-5">
                                        <a href="#" class="btn btn-sm btn-light btn-color-muted btn-active-light-success px-4 py-2 me-4">
                                            <i class="ki-duotone ki-message-text-2 fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> {{ $post->likes_count }}
                                        </a>

                                        <a href="#" class="btn btn-sm btn-light btn-color-muted btn-active-light-danger px-4 py-2">
                                            <i class="ki-duotone ki-heart fs-2"><span class="path1"></span><span class="path2"></span></i> {{ $post->comments_count }}
                                        </a>
                                    </div>

                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Hot sales post-->
                        </div>
                        @endforeach
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Section-->


            </div>
            <!--end::Body-->
        </div>
        <!--end::Row-->


    </div>
    <!--end::Content container-->
</div>


@stop