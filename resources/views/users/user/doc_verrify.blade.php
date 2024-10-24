<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from html.vristo.sbthemes.com/apps-chat.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2023 07:07:20 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    @include('admin.admin_layout.header_css')
</head>

<body x-data="main" class="relative overflow-x-hidden font-nunito text-sm font-normal antialiased" :class="[ $store.app.sidebar ? 'toggle-sidebar' : '', $store.app.theme, $store.app.menu, $store.app.layout,$store.app.rtlClass]">

    <div class="" :class="[$store.app.navbar]">

        <div class="main-content">
            <!-- start header section -->
            <header :class="{'dark' : $store.app.semidark && $store.app.menu === 'horizontal'}">
                <div class="shadow-sm">
                    <div class="relative flex w-full items-center bg-white px-5 py-2.5 dark:bg-[#0e1726]">
                        <div class="horizontal-logo flex items-center justify-between ltr:mr-2 rtl:ml-2 lg:hidden">
                            <a href="index.html" class="main-logo flex shrink-0 items-center">
                                <img class="inline w-8 ltr:-ml-1 rtl:-mr-1" src="assets/images/logo.svg" alt="image" />
                                <span class="hidden align-middle text-2xl font-semibold transition-all duration-300 ltr:ml-1.5 rtl:mr-1.5 dark:text-white-light md:inline">RadyPay</span>
                            </a>

                            <a href="javascript:;" class="collapse-icon flex flex-none rounded-full bg-white-light/40 p-2 hover:bg-white-light/90 hover:text-primary ltr:ml-2 rtl:mr-2 dark:bg-dark/40 dark:text-[#d0d2d6] dark:hover:bg-dark/60 dark:hover:text-primary lg:hidden" @click="$store.app.toggleSidebar()">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 7L4 7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    <path opacity="0.5" d="M20 12L4 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    <path d="M20 17L4 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                </svg>
                            </a>
                        </div>
                        <div class="hidden ltr:mr-2 rtl:ml-2 sm:block">

                        </div>
                        <div x-data="header" class="flex items-center space-x-1.5 ltr:ml-auto rtl:mr-auto rtl:space-x-reverse dark:text-[#d0d2d6] sm:flex-1 ltr:sm:ml-0 sm:rtl:mr-0 lg:space-x-2">
                            <div class="sm:ltr:mr-auto sm:rtl:ml-auto" x-data="{ search: false }" @click.outside="search = false">

                            </div>

                            <div class="dropdown flex-shrink-0" x-data="dropdown" @click.outside="open = false">
                                <a href="javascript:;" class="group relative" @click="toggle()">
                                    <span><img class="h-9 w-9 rounded-full object-cover saturate-50 group-hover:saturate-100" src="assets/images/user-profile.jpeg" alt="image" /></span>
                                </a>
                                <ul x-cloak x-show="open" x-transition x-transition.duration.300ms class="top-11 w-[230px] !py-0 font-semibold text-dark ltr:right-0 rtl:left-0 dark:text-white-dark dark:text-white-light/90">

                                    <li class="border-t border-white-light dark:border-white-light/10">
                                        <a href="auth-boxed-signin.html" class="!py-3 text-danger" @click="toggle">
                                            <svg class="h-4.5 w-4.5 rotate-90 ltr:mr-2 rtl:ml-2" width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.5" d="M17 9.00195C19.175 9.01406 20.3529 9.11051 21.1213 9.8789C22 10.7576 22 12.1718 22 15.0002V16.0002C22 18.8286 22 20.2429 21.1213 21.1215C20.2426 22.0002 18.8284 22.0002 16 22.0002H8C5.17157 22.0002 3.75736 22.0002 2.87868 21.1215C2 20.2429 2 18.8286 2 16.0002L2 15.0002C2 12.1718 2 10.7576 2.87868 9.87889C3.64706 9.11051 4.82497 9.01406 7 9.00195" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                                <path d="M12 15L12 2M12 2L15 5.5M12 2L9 5.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            Sign Out
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- horizontal menu -->

                </div>
            </header>
            <!-- end header section -->

            <div class="">
                <!-- start main content section -->

                <div class="relative flex h-full gap-5 sm:h-[calc(100vh_-_150px)] sm:min-h-0" :class="{'min-h-[999px]' : isShowChatMenu}">
                    <div class="panel absolute z-10 hidden w-full max-w-xs flex-none space-y-4 overflow-hidden p-4 xl:relative xl:block xl:h-full" :class="isShowChatMenu && '!block'">



                    </div>
                    <div class="h-full flex p-0">
                        <div class="panel lg:col-span-2">
                            <div class="mb-5" x-data="{ activeTab: 1}">
                                <div class="inline-block w-full">
                                    <ul class="mb-5 grid grid-cols-3">
                                        <li>
                                            <a href="javascript:;" :class="{'text-primary': activeTab === 1}" @click="activeTab = 1" class="text-primary">
                                                <div class="flex items-center justify-center rounded-full bg-[#f3f2ee] p-2.5 dark:bg-[#1b2e4b] !bg-primary text-white" :class="{'!bg-primary text-white': activeTab === 1}" @click="activeTab = 1">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                                                        <path opacity="0.5" d="M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z" stroke="currentColor" stroke-width="1.5"></path>
                                                        <path d="M12 15L12 18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                                    </svg>
                                                </div>
                                                <span class="mt-2 block text-center">Home</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" :class="{'text-primary': activeTab === 2}" @click="activeTab = 2">
                                                <div class="flex items-center justify-center rounded-full bg-[#f3f2ee] p-2.5 dark:bg-[#1b2e4b]" :class="{'!bg-primary text-white': activeTab === 2}" @click="activeTab = 2">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                                                        <circle cx="12" cy="6" r="4" stroke="currentColor" stroke-width="1.5"></circle>
                                                        <ellipse opacity="0.5" cx="12" cy="17" rx="7" ry="4" stroke="currentColor" stroke-width="1.5"></ellipse>
                                                    </svg>
                                                </div>
                                                <span class="mt-2 block text-center">About</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" :class="{'text-primary': activeTab === 3}" @click="activeTab = 3">
                                                <div class="flex items-center justify-center rounded-full bg-[#f3f2ee] p-2.5 dark:bg-[#1b2e4b]" :class="{'!bg-primary text-white': activeTab === 3}" @click="activeTab = 3">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                                                        <path d="M20.9751 12.1852L20.2361 12.0574L20.9751 12.1852ZM20.2696 16.265L19.5306 16.1371L20.2696 16.265ZM6.93776 20.4771L6.19055 20.5417H6.19055L6.93776 20.4771ZM6.1256 11.0844L6.87281 11.0198L6.1256 11.0844ZM13.9949 5.22142L14.7351 5.34269V5.34269L13.9949 5.22142ZM13.3323 9.26598L14.0724 9.38725V9.38725L13.3323 9.26598ZM6.69813 9.67749L6.20854 9.10933H6.20854L6.69813 9.67749ZM8.13687 8.43769L8.62646 9.00585H8.62646L8.13687 8.43769ZM10.518 4.78374L9.79207 4.59542L10.518 4.78374ZM10.9938 2.94989L11.7197 3.13821L11.7197 3.13821L10.9938 2.94989ZM12.6676 2.06435L12.4382 2.77841L12.4382 2.77841L12.6676 2.06435ZM12.8126 2.11093L13.0419 1.39687L13.0419 1.39687L12.8126 2.11093ZM9.86194 6.46262L10.5235 6.81599V6.81599L9.86194 6.46262ZM13.9047 3.24752L13.1787 3.43584V3.43584L13.9047 3.24752ZM11.6742 2.13239L11.3486 1.45675L11.3486 1.45675L11.6742 2.13239ZM20.2361 12.0574L19.5306 16.1371L21.0086 16.3928L21.7142 12.313L20.2361 12.0574ZM13.245 21.25H8.59634V22.75H13.245V21.25ZM7.68497 20.4125L6.87281 11.0198L5.37839 11.149L6.19055 20.5417L7.68497 20.4125ZM19.5306 16.1371C19.0238 19.0677 16.3813 21.25 13.245 21.25V22.75C17.0712 22.75 20.3708 20.081 21.0086 16.3928L19.5306 16.1371ZM13.2548 5.10015L12.5921 9.14472L14.0724 9.38725L14.7351 5.34269L13.2548 5.10015ZM7.18772 10.2456L8.62646 9.00585L7.64728 7.86954L6.20854 9.10933L7.18772 10.2456ZM11.244 4.97206L11.7197 3.13821L10.2678 2.76157L9.79207 4.59542L11.244 4.97206ZM12.4382 2.77841L12.5832 2.82498L13.0419 1.39687L12.897 1.3503L12.4382 2.77841ZM10.5235 6.81599C10.8354 6.23198 11.0777 5.61339 11.244 4.97206L9.79207 4.59542C9.65572 5.12107 9.45698 5.62893 9.20041 6.10924L10.5235 6.81599ZM12.5832 2.82498C12.8896 2.92342 13.1072 3.16009 13.1787 3.43584L14.6306 3.05921C14.4252 2.26719 13.819 1.64648 13.0419 1.39687L12.5832 2.82498ZM11.7197 3.13821C11.7547 3.0032 11.8522 2.87913 11.9998 2.80804L11.3486 1.45675C10.8166 1.71309 10.417 2.18627 10.2678 2.76157L11.7197 3.13821ZM11.9998 2.80804C12.1345 2.74311 12.2931 2.73181 12.4382 2.77841L12.897 1.3503C12.3872 1.18655 11.8312 1.2242 11.3486 1.45675L11.9998 2.80804ZM14.1537 10.9842H19.3348V9.4842H14.1537V10.9842ZM14.7351 5.34269C14.8596 4.58256 14.824 3.80477 14.6306 3.0592L13.1787 3.43584C13.3197 3.97923 13.3456 4.54613 13.2548 5.10016L14.7351 5.34269ZM8.59634 21.25C8.12243 21.25 7.726 20.887 7.68497 20.4125L6.19055 20.5417C6.29851 21.7902 7.34269 22.75 8.59634 22.75V21.25ZM8.62646 9.00585C9.30632 8.42 10.0391 7.72267 10.5235 6.81599L9.20041 6.10924C8.85403 6.75767 8.30249 7.30493 7.64728 7.86954L8.62646 9.00585ZM21.7142 12.313C21.9695 10.8365 20.8341 9.4842 19.3348 9.4842V10.9842C19.9014 10.9842 20.3332 11.4959 20.2361 12.0574L21.7142 12.313ZM12.5921 9.14471C12.4344 10.1076 13.1766 10.9842 14.1537 10.9842V9.4842C14.1038 9.4842 14.0639 9.43901 14.0724 9.38725L12.5921 9.14471ZM6.87281 11.0198C6.84739 10.7258 6.96474 10.4378 7.18772 10.2456L6.20854 9.10933C5.62021 9.61631 5.31148 10.3753 5.37839 11.149L6.87281 11.0198Z" fill="currentColor"></path>
                                                        <path opacity="0.5" d="M3.9716 21.4709L3.22439 21.5355L3.9716 21.4709ZM3 10.2344L3.74721 10.1698C3.71261 9.76962 3.36893 9.46776 2.96767 9.48507C2.5664 9.50239 2.25 9.83274 2.25 10.2344L3 10.2344ZM4.71881 21.4063L3.74721 10.1698L2.25279 10.299L3.22439 21.5355L4.71881 21.4063ZM3.75 21.5129V10.2344H2.25V21.5129H3.75ZM3.22439 21.5355C3.2112 21.383 3.33146 21.2502 3.48671 21.2502V22.7502C4.21268 22.7502 4.78122 22.1281 4.71881 21.4063L3.22439 21.5355ZM3.48671 21.2502C3.63292 21.2502 3.75 21.3686 3.75 21.5129H2.25C2.25 22.1954 2.80289 22.7502 3.48671 22.7502V21.2502Z" fill="currentColor"></path>
                                                    </svg>
                                                </div>
                                                <span class="mt-2 block text-center">Success</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div>
                                        <template x-if="activeTab === 1">
                                            <div class="mb-5">
                                                <form class="space-y-5" @submit.prevent="submitForm4()">
                                                    <div class="grid grid-cols-1 gap-5 md:grid-cols-3">
                                                        <div :class="[isSubmitForm4 ? (form4.firstName ? 'has-success' : 'has-error') : '']" class="">
                                                            <label for="customFname">First Name</label>
                                                            <input id="customFname" type="text" placeholder="Enter First Name" class="form-input" x-model="form4.firstName">
                                                            <template x-if="isSubmitForm4 &amp;&amp; form4.firstName">
                                                                <p class="mt-1 text-[#1abc9c]">Looks Good!</p>
                                                            </template>
                                                            <template x-if="isSubmitForm4 &amp;&amp; !form4.firstName">
                                                                <p class="mt-1 text-danger">Please fill the first name</p>
                                                            </template>
                                                        </div>
                                                        <div :class="[isSubmitForm4 ? (form4.lastName ? 'has-success' : 'has-error') : '']" class="">
                                                            <label for="customLname">Last name</label>
                                                            <input id="customLname" type="text" placeholder="Enter Last Name" class="form-input" x-model="form4.lastName">
                                                            <template x-if="isSubmitForm4 &amp;&amp; form4.lastName">
                                                                <p class="mt-1 text-[#1abc9c]">Looks Good!</p>
                                                            </template>
                                                            <template x-if="isSubmitForm4 &amp;&amp; !form4.lastName">
                                                                <p class="mt-1 text-danger">Please fill the last name</p>
                                                            </template>
                                                        </div>
                                                        <div :class="[isSubmitForm4 ? (form4.userName ? 'has-success' : 'has-error') : '']" class="">
                                                            <label for="customeEmail">Username</label>
                                                            <div class="flex">
                                                                <div class="flex items-center justify-center border border-[#e0e6ed] bg-[#eee] px-3 font-semibold ltr:rounded-l-md ltr:border-r-0 rtl:rounded-r-md rtl:border-l-0 dark:border-[#17263c] dark:bg-[#1b2e4b]">
                                                                    @
                                                                </div>
                                                                <input id="customeEmail" type="text" placeholder="Enter Username" class="form-input ltr:rounded-l-none rtl:rounded-r-none" x-model="form4.userName">
                                                            </div>
                                                            <template x-if="isSubmitForm4 &amp;&amp; form4.userName">
                                                                <p class="mt-1 text-[#1abc9c]">Looks Good!</p>
                                                            </template>
                                                            <template x-if="isSubmitForm4 &amp;&amp; !form4.userName">
                                                                <p class="mt-1 text-danger">Please choose a userName</p>
                                                            </template>
                                                        </div>
                                                    </div>
                                                    <div class="grid grid-cols-1 gap-5 md:grid-cols-4">
                                                        <div class="md:col-span-2" :class="[isSubmitForm4 ? (form4.city ? 'has-success' : 'has-error') : '']">
                                                            <label for="customeCity">City</label>
                                                            <input id="customeCity" type="text" placeholder="Enter City" class="form-input" x-model="form4.city">
                                                            <template x-if="isSubmitForm4 &amp;&amp; form4.city">
                                                                <p class="mt-1 text-[#1abc9c]">Looks Good!</p>
                                                            </template>
                                                            <template x-if="isSubmitForm4 &amp;&amp; !form4.city">
                                                                <p class="mt-1 text-danger">Please provide a valid city</p>
                                                            </template>
                                                        </div>
                                                        <div :class="[isSubmitForm4 ? (form4.state ? 'has-success' : 'has-error') : '']" class="">
                                                            <label for="customeState">State</label>
                                                            <input id="customeState" type="text" placeholder="Enter State" class="form-input" x-model="form4.state">
                                                            <template x-if="isSubmitForm4 &amp;&amp; form4.state">
                                                                <p class="mt-1 text-[#1abc9c]">Looks Good!</p>
                                                            </template>
                                                            <template x-if="isSubmitForm4 &amp;&amp; !form4.state">
                                                                <p class="mt-1 text-danger">Please provide a valid state</p>
                                                            </template>
                                                        </div>
                                                        <div :class="[isSubmitForm4 ? (form4.zip ? 'has-success' : 'has-error') : '']" class="">
                                                            <label for="customeZip">Zip</label>
                                                            <input id="customeZip" type="text" placeholder="Enter Zip" class="form-input" x-model="form4.zip">
                                                            <template x-if="isSubmitForm4 &amp;&amp; form4.zip">
                                                                <p class="mt-1 text-[#1abc9c]">Looks Good!</p>
                                                            </template>
                                                            <template x-if="isSubmitForm4 &amp;&amp; !form4.zip">
                                                                <p class="mt-1 text-danger">Please provide a valid zip</p>
                                                            </template>
                                                        </div>
                                                    </div>
                                                    <div :class="[isSubmitForm4 ? (form4.isTerms ? 'has-success' : 'has-error') : '']" class="">
                                                        <label class="mt-1 inline-flex cursor-pointer">
                                                            <input type="checkbox" class="form-checkbox" x-model="form4.isTerms">
                                                            <span class="text-white-dark">Agree to terms and conditions</span>
                                                        </label>
                                                        <template x-if="isSubmitForm4 &amp;&amp; !form4.isTerms">
                                                            <p class="mt-1 text-danger">You must agree before submitting.</p>
                                                        </template>
                                                    </div>

                                                </form>
                                            </div>
                                        </template>

                                        <template x-if="activeTab === 2">
                                            <p class="mb-5">The next and previous buttons help you to navigate through your content.</p>
                                        </template>
                                        <template x-if="activeTab === 3">
                                            <p class="mb-5">Wonderful transition effects.</p>
                                        </template>
                                    </div>
                                    <div class="flex justify-between">
                                        <button type="button" class="btn btn-primary" :disabled="activeTab === 1" @click="activeTab--" disabled="disabled">Back</button>
                                        <button type="button" class="btn btn-primary" :disabled="activeTab === 3" @click="activeTab++">Next</button>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>

                <!-- end main content section -->
            </div>
        </div>
    </div>

    @include('admin.admin_layout.footer_script')
</body>

<!-- Mirrored from html.vristo.sbthemes.com/apps-chat.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2023 07:07:24 GMT -->

</html>