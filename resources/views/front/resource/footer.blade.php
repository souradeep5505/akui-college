<style>
    #sidebar {
        position: fixed;
        right: 0;
        top: 27%;
        margin: 0 0 0 0;
        z-index: 100;

    }

    #sidebar a {
        color: #ffffff;
        writing-mode: vertical-rl;
        text-orientation: upright;
        text-transform: uppercase;
        font-size: 15px;
    }

    #sidebar p {
        background: #00c6ff;
        padding: 5px;
    }
    strong {
    font-weight: bolder;
    }
    .icon-bx-wraper.bx-style-1, .icon-bx-wraper.bx-style-2{
        font-size: 0px;
    }
    .footer-bottom{
        padding: 15px 0;
    }
</style>
<?php $settings=DB::table('settings')->where('id',1)->first(); ?>
<footer class="site-footer footer-gray-1">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="0.2s">
                    <div class="widget border-0">
                        <h6 class="m-b20 text-white font-weight-300 text-uppercase">Quick Links</h6>
                        <ul class="list-2">
                            <li><a href="{{ url('/about-us') }}">About Us</a></li>
                            <li><a href="{{ url('/all-notice') }}">Notice</a></li>
                            <li><a href="{{ url('/all-department') }}">Departments</a></li>
                            <li><a href="{{ url('/all-faculty') }}">Faculty</a></li>
                            <li><a href="{{ url('/privacy-policy') }}">Privacy Policy</a></li>
                            <li><a href="{{ url('/news-details') }}">News & event </a></li>
                            <li><a href="{{ url('/seat-allocation') }}">Seat Allocation</a></li>
                            <li><a href="{{ url('/fees-structure') }}">Fees Structure</a></li>
                            <li><a href="{{ url('/gallery') }}">Gallery</a></li>
                            <li><a href="{{ url('/contact-us') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="0.4s">
                    <div class="widget">
                        <h6 class="m-b20 text-white font-weight-300 text-uppercase">Newsletter</h6>
                        <div class="subscribe-form m-b20 m-t30">
                            <form class="dzSubscribe" action="script/mailchamp.php" method="post">
                                <div class="dzSubscribeMsg"></div>
                                <div class="input-group">
                                    <input name="dzEmail" required="required" class="form-control radius-no" placeholder="Your Email Id" type="email">
                                    <span class="input-group-btn">
                                        <button name="submit" value="Submit" type="submit" class="site-button btnhover20 radius-no">SEND</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <h6 class="m-b10 text-white font-weight-300 text-uppercase">Connect with us</h6>
                        <ul class="list-inline m-a0">
                            <li><a href="{{ $settings->facebook }}" target="_blank" title="Facebook" class="site-button btnhover20 facebook sharp"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{ $settings->youtube }}" target="_blank" title="Youtube" class="site-button btnhover20 google-plus sharp"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="{{ $settings->twitter }}" target="_blank" title="Twitter" class="site-button btnhover20 twitter sharp"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 wow fadeIn" data-wow-delay="0.6s">
                    <div class="icon-bx-wraper bx-style-1 m-b15 radius-sm br-col-w1 bg-tpw1">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3669.886216994541!2d87.72717671424127!3d23.10126071918123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f83b7300000001%3A0x141d3e7e3c4047c5!2sAkui%20Kamalabala%20Women&#39;s%20College!5e0!3m2!1sen!2sin!4v1675750464395!5m2!1sen!2sin" width="470" height="190" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer bottom part -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12" style="text-align: center;"> <span style="text-align: center;"> <a href="https://www.akuiwomenscollege.org/" target="_blank">Akui Kamalabala Women's college © 2020-2025</a>. all rights reserved. Designed & Developed By AVQUORA</span> </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer END -->
<button class="scroltop style1 white icon-up" type="button"><i class="fas fa-arrow-up"></i></button>
<div id="sidebar">
    <p>
        <a href="mandetory-disclosure" style="text-decoration: none;"><strong>MANDATORY DISCLOSURE</strong></a></p>

</div>
