@section('title',)
@extends('front.resource.main')
@section('content')
<!-- Content -->
<style>
    table td {
        border-top: 1px solid #000;
        border-bottom: 1px solid #000;
        border-right: 1px solid #000;
        border-left: 1px solid #000;
    }
    table th {
        border-top: 1px solid #000;
        border-bottom: 1px solid #000;
        border-right: 1px solid #000;
        border-left: 1px solid #000;
    }
p {
    line-height: 20px;
    margin-bottom: 24px;
}

</style>
<!-- Content -->
<!-- Content -->
<?php $page_manage=DB::table('page_manages')->where('status','1')->where('id','1')->first()?>
<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url({{url('public/images/inner-banner/'.$page_manage->banner_img)}});">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">MANDATORY DISCLOSURE</h1>
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="index.html">Home</a></li>
                    </ul>
                </div>
                <!-- Breadcrumb row END -->
            </div>
        </div>
    </div>
    <div class="section-full content-inner-2">
        <div class="container">
            <div class="section-head text-center">
                <h2 class="title">About Akui Women's Collage</h2>
                <div class="dlab-separator bg-primary m-b0"></div>
            </div>
            <div class="row">
                <table width="100%" class="table table-responsive">
                    <thead>
                       <tr class="tbl-top">
                           <th>SL NO.</td>
                           <td> DOCUMENTS / INFORMATION </td>
                           <td>UPLOAD DOCUMENTS</td>
                       </tr>
                    </thead>
                   <tbody>
                       <tr>
                           <td>
                               1.
                           </td>
                           <td>
                               COPIES OF AFFILIATION / UPGRADATION LETTER AND RECENT EXTENTION OF AFFILATION. IF ANY
                           </td>
                           <td>
                               <a href="../images/mandatory_disclosure/bms_affiliation.pdf" target="_blank" style="font-size: 20px;"><i class="fa fa-file-pdf-o"></i></a>
                           </td>
                       </tr>
                       <tr>
                           <td>
                               2.
                           </td>
                           <td>
                               COPIES OF SOCIATIES / TRUST / COMPANY REGISTRATION / RENEWAL CERTIFICATE AS APPLICABLE
                           </td>
                           <td>
                               <a href="../images/mandatory_disclosure/bms_sociaty_regd.pdf" target="_blank" style="font-size: 20px;"><i class="fa fa-file-pdf-o"></i></a>
                           </td>
                       </tr>
                       <tr>
                           <td>
                               3.
                           </td>
                           <td>
                               COPY OF NO OBJECTION CERTIFICATE (NOC) ISSUED. IF APPLICABLE BY THE STATE GOVT / UT
                           </td>
                           <td>
                               <a href="../images/mandatory_disclosure/bms_noc.pdf" target="_blank" style="font-size: 20px;"><i class="fa fa-file-pdf-o"></i></a>
                           </td>
                       </tr>
                       <tr>
                           <td>
                               4.
                           </td>
                           <td>
                               COPIES OF RECOGNITION CERTIFICATE UNDER RTE ATC 2009 AND ITS RENEWAL IF APPLICABLE
                           </td>
                           <td>
                               NA
                           </td>
                       </tr>
                       <tr>
                           <td>
                               5.
                           </td>
                           <td>
                               COPY OF VALID BUILDING SAFETY CERTIFICATE AS PER THE NATIONAL BUILDING CODE
                           </td>
                           <td>
                               YES (PDF)
                           </td>
                       </tr>
                       <tr>
                           <td>
                               6.
                           </td>
                           <td>
                               COPY OF VALID FIRE SAFETY CERTIFICATE ISSUED BY THE COMPETENT AUTHIRITY
                           </td>
                           <td>
                               <a href="../images/mandatory_disclosure/bms_fire_certificate.pdf" target="_blank" style="font-size: 20px;"><i class="fa fa-file-pdf-o"></i></a>
                           </td>
                       </tr>
                       <tr>
                           <td>
                               7.
                           </td>
                           <td>
                               COPY OF THE DEO CERTIFICATE SUBMITTED BY THE SCHOOL FOR AFFILIATION / UPGRADATION / EXTENSION OF AFFILIATIONER SELF CERTIFICATION BY SCHOOL
                           </td>
                           <td>
                               YES (PDF)
                           </td>
                       </tr>
                       <tr>
                           <td>
                               8.
                           </td>
                           <td>
                               COPIES OF VALID WATER, HEALTH AND SANITATION CERTIFICATE
                           </td>
                           <td>
                               <a href="../images/mandatory_disclosure/bms_water_health_sanitation_certi.pdf" target="_blank" style="font-size: 20px;"><i class="fa fa-file-pdf-o"></i></a>
                           </td>
                       </tr>
                   </tbody>
               </table>
            </div>
        </div>
    </div>

</div>

@endsection
