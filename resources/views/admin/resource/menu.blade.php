<?php
$status = request()->segment(2);
?>
<div class="aside-menu flex-column-fluid">
    <!--begin::Aside Menu-->
    <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
        <!--begin::Menu-->
        <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true" data-kt-menu-expand="false">

            {{-- Dashboard --}}
            <div class="menu-item menu-active-bg">
                <a class="menu-link {{($status=='dashboard')?'active':''}}" href="{{url('/avqadmin/dashboard')}}">
                    <span class="menu-icon">
                        <i class="fa fa-th"></i>
                    </span>
                    <span class="menu-title">Dashboard</span>
                </a>
            </div>
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{($status=='banner' || $status=='logo' || $status=='' || $status=='' || $status=='')?'here show':''}}">
                <span class="menu-link">
                    <span class="menu-icon">
                        <i class="fa fa-star"></i>
                    </span>
                    <span class="menu-title">Banner Manager</span>
                    <span class="menu-arrow"></span>
                </span>

                <div class="menu-sub menu-sub-accordion menu-active-bg">

                    <div class="menu-item">
                        <a class="menu-link {{($status=='banner')?'active':''}}" href="{{route('banner.index')}}">
                            <span class="menu-bullet">
                                <i class="fa fa-dot-circle-o" style="font-size: 10px;" aria-hidden="true"></i>
                            </span>
                            <span class="menu-title"> Banner </span>
                        </a>
                    </div>
                </div>
            </div>

            <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{($status=='pages')?'here show':''}}">
                <span class="menu-link">
                    <span class="menu-icon">
                        <i class="fa-solid fa-bars"></i>
                    </span>
                    <span class="menu-title">Pages Manager</span>
                    <span class="menu-arrow"></span>
                </span>

                <div class="menu-sub menu-sub-accordion menu-active-bg">

                    <div class="menu-item">
                        <a class="menu-link {{($status=='pages')?'active':''}}" href="{{route('pages.index')}}">
                            <span class="menu-bullet">
                                <i class="fa fa-dot-circle-o" style="font-size: 10px;" aria-hidden="true"></i>
                            </span>
                            <span class="menu-title"> Pages </span>
                        </a>
                    </div>
                </div>

            </div>

            <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{($status=='principle' || $status=='non-teaching' || $status=='faculty')?'here show':''}}">
                <span class="menu-link">
                    <span class="menu-icon">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </span>
                    <span class="menu-title">Faculty Manager</span>
                    <span class="menu-arrow"></span>
                </span>

                <div class="menu-sub menu-sub-accordion menu-active-bg">

                    <div class="menu-item">
                        <a class="menu-link {{($status=='principle')?'active':''}}" href="{{route('principle.index')}}">
                            <span class="menu-bullet">
                                <i class="fa fa-dot-circle-o" style="font-size: 10px;" aria-hidden="true"></i>
                            </span>
                            <span class="menu-title"> Principle Msg</span>
                        </a>
                    </div>

                    <div class="menu-item">
                        <a class="menu-link {{($status=='faculty')?'active':''}}" href="{{route('faculty.index')}}">
                            <span class="menu-bullet">
                                <i class="fa fa-dot-circle-o" style="font-size: 10px;" aria-hidden="true"></i>
                            </span>
                            <span class="menu-title"> Faculty Member </span>
                        </a>
                    </div>

                    <div class="menu-item">
                        <a class="menu-link {{($status=='non-teaching')?'active':''}}" href="{{route('non-teaching.index')}}">
                            <span class="menu-bullet">
                                <i class="fa fa-dot-circle-o" style="font-size: 10px;" aria-hidden="true"></i>
                            </span>
                            <span class="menu-title"> Non Teaching </span>
                        </a>
                    </div>


                </div>
            </div>

            <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{($status=='department'|| $status=='seat-allocation' || $status=='course-subject'|| $status=='fees-structure')?'here show':''}}">
                <span class="menu-link">
                    <span class="menu-icon">
                        <i class="fa fa-sitemap" aria-hidden="true"></i>
                    </span>
                    <span class="menu-title">Academic Manager</span>
                    <span class="menu-arrow"></span>
                </span>

                <div class="menu-sub menu-sub-accordion menu-active-bg">

                    <div class="menu-item">
                        <a class="menu-link {{($status=='department')?'active':''}}" href="{{route('department.index')}}">
                            <span class="menu-bullet">
                                <i class="fa fa-dot-circle-o" style="font-size: 10px;" aria-hidden="true"></i>
                            </span>
                            <span class="menu-title"> Department </span>
                        </a>
                    </div>

                    <div class="menu-item">
                        <a class="menu-link {{($status=='course-subject')?'active':''}}" href="{{route('course-subject.index')}}">
                            <span class="menu-bullet">
                                <i class="fa fa-dot-circle-o" style="font-size: 10px;" aria-hidden="true"></i>
                            </span>
                            <span class="menu-title"> Course and Subject </span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link {{($status=='seat-allocation')?'active':''}}" href="{{ route('seat-allocation.index') }}">
                            <span class="menu-bullet">
                                <i class="fa fa-dot-circle-o" style="font-size: 10px;" aria-hidden="true"></i>
                            </span>
                            <span class="menu-title"> Seat Allocation </span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link {{($status=='fees-structure')?'active':''}}" href="{{ route('fees-structure.index') }}">
                            <span class="menu-bullet">
                                <i class="fa fa-dot-circle-o" style="font-size: 10px;" aria-hidden="true"></i>
                            </span>
                            <span class="menu-title"> Fees Structure </span>
                        </a>
                    </div>
                </div>
            </div>

            <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{( $status=='facility'
            || $status=='notice' || $status=='news-event')?'here show':''}}">
                <span class="menu-link">
                    <span class="menu-icon">
                        <i class="fa fa-cogs" aria-hidden="true"></i>
                    </span>
                    <span class="menu-title">System Manager</span>
                    <span class="menu-arrow"></span>
                </span>

                <div class="menu-sub menu-sub-accordion menu-active-bg">

                    <div class="menu-item">
                        <a class="menu-link {{($status=='facility')?'active':''}}" href="{{route('facility.index')}}">
                            <span class="menu-bullet">
                                <i class="fa fa-dot-circle-o" style="font-size: 10px;" aria-hidden="true"></i>
                            </span>
                            <span class="menu-title"> Facility </span>
                        </a>
                    </div>

                    <div class="menu-item">
                        <a class="menu-link {{($status=='notice')?'active':''}}" href="{{route('notice.index')}}">
                            <span class="menu-bullet">
                                <i class="fa fa-dot-circle-o" style="font-size: 10px;" aria-hidden="true"></i>
                            </span>
                            <span class="menu-title"> Upcaming Notice </span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link {{($status=='news-event')?'active':''}}" href="{{route('news-event.index')}}">
                            <span class="menu-bullet">
                                <i class="fa fa-dot-circle-o" style="font-size: 10px;" aria-hidden="true"></i>
                            </span>
                            <span class="menu-title"> News & Event </span>
                        </a>
                    </div>
                </div>
            </div>

            <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{($status=='gallery' || $status=='gallery-category' || $status=='')?'here show':''}}">
                <span class="menu-link">
                    <span class="menu-icon">
                        <i class="fa fa-object-group" aria-hidden="true"></i>
                    </span>
                    <span class="menu-title">Gallery Manager</span>
                    <span class="menu-arrow"></span>
                </span>

                <div class="menu-sub menu-sub-accordion menu-active-bg">

                    <div class="menu-item">
                        <a class="menu-link {{($status=='gallery-category')?'active':''}}" href="{{route('gallery-category.index')}}">
                            <span class="menu-bullet">
                                <i class="fa fa-dot-circle-o" style="font-size: 10px;" aria-hidden="true"></i>
                            </span>
                            <span class="menu-title"> Gallery Category </span>
                        </a>
                    </div>

                    <div class="menu-item">
                        <a class="menu-link {{($status=='gallery')?'active':''}}" href="{{route('gallery.index')}}">
                            <span class="menu-bullet">
                                <i class="fa fa-dot-circle-o" style="font-size: 10px;" aria-hidden="true"></i>
                            </span>
                            <span class="menu-title"> Gallery </span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="menu-item">
                <div class="menu-content pt-8 pb-2">
                    <span class="menu-section text-uppercase fs-8 ls-1" style="color: rgba(230, 230, 230, 0.877) !important;"> CONTACT MANAGEMENT</span>
                </div>
            </div>
            <div class="menu-item menu-active-bg">
                <a class="menu-link {{($status=='contact')?'active':''}}" href="{{route('contact.index')}}">
                    <span class="menu-icon">
                        <i class="fa fa-headset" aria-hidden="true"></i>
                    </span>
                    <span class="menu-title"> Contact Us </span>
                </a>
            </div>

            <div class="menu-item menu-active-bg">
                <a class="menu-link {{($status=='setting')?'active':''}}" href="{{route('setting.index')}}">
                    <span class="menu-icon">
                        <i class="fa fa-cog" aria-hidden="true"></i>
                    </span>
                    <span class="menu-title"> Setting </span>
                </a>
            </div>
        </div>
    </div>
    <!--end::Menu-->
</div>
<!--end::Aside Menu-->
</div>
