<?php $settings=DB::table('settings')->where('id',1)->first(); ?>
<header class="site-header mo-left header-transparent box-header navstyle5 header">
<div class="top-bar">
    <div class="container">
        <div class="row d-flex justify-content-between">
            <div class="dlab-topbar-left">
                <ul>
                    <li><a class="fa fa-envelope" style="color: #000;" href="javascript:void(0);"> &nbsp;</a><span style="color: #000; font-size: 15px;">{{ $settings->email }}</span></li>
                    <li><a class="fa fa-phone"  style="color: #000;" href="javascript:void(0);"></a> &nbsp;<span style="color: #000; font-size: 14px;">+91 {{ $settings->phone }}</span></li>
                </ul>
            </div>
            <div class="dlab-topbar-right topbar-social">
                <ul>
                    <li><a href="{{ url($settings->facebook) }}" target="_blank" title="Facebook" class="site-button-link facebook hover"><i
                                class="fab fa-facebook-f" style="color: #000;"></i></a></li>
                    <li><a href="{{ url($settings->youtube) }}" target="_blank" title="Youtube"  class="site-button-link youtube hover"><i
                                    class="fab fa-youtube"style="color: #000;"></i></a></li>
                    <li><a href="{{ url($settings->twitter) }}" target="_blank" title="Twitter" class="site-button-link twitter hover"><i
                                class="fab fa-twitter"style="color: #000;"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
