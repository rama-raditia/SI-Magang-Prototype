@extends('layouts.sidebar')
@section('konten')
<!-- Main content -->


 <link href="assets/cp/jquery.filer/css/jquery.filer.css" rel="stylesheet" />
 <script type="text/javascript" src="assets/cp/jquery.filer/js/jquery.filer.min.js"></script>
 <div class="content-wrapper">
     <!-- Header area -->

     <div class="page-header-content page-header page-header-defaultborder-bottom-lg border-bottom-primary">
         <div class="page-title">
            <h4> <span class="text-semibold">Info</span> - Pembimbing, Penguji, dan Mentor Magang</h4>
         </div>
     </div>

   <!-- Content area -->
<div class="content">
    <div class="panel panel-default">
        <div class="panel-heading" >
            <h5 class="panel-title">Pembimbing, Penguji, dan Mentor Magang</h5>
            <div class="heading-elements">
                
            </div>
        </div>

        <div class="panel-body" style="padding-top: 20px; background-color: #f7f7f7; border-radius: 8px;">
<div class="panel-body" style="padding-top: 0px;">
<div class="alert alert-info" style="border-radius: 12px; background: #ffffff; padding: 20px; border: 1px solid #ffffff;">
    <div class="row">
        <div class="media-body" style="border-radius: 12px; padding: 20px; background-color: #fff; border: 1px solid #ffffff;">
                            <table class="table table-striped table-bordered" >
                                <tbody>
                                    <tr>
                                        <td style="width: 30%; font-weight: bold; color: #555;">Nama Mentor</td>
                                        <td style="color: #666;">Made Mentor</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 30%; font-weight: bold; color: #555;">Email Mentor</td>
                                        <td style="color: #666;">mentor@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: bold; color: #555;">No HP Mentor</td>
                                        <td style="color: #666;">08910111213</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            <!-- Tabel Pembimbing dan Penguji -->
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="panel panel-default" style="border-radius: 8px; overflow: hidden;">
                        <table class="table table-striped table-bordered table-hover" style="border-collapse: separate; border-spacing: 0 10px;">
                            <tbody>
                                <tr>
                                    <td style="width: 40%;"><b>Nama Pembimbing Magang</b></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><b>No HP Pembimbing Magang</b></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="panel panel-default" style="border-radius: 8px; overflow: hidden;">
                        <table class="table table-striped table-bordered table-hover" style="border-collapse: separate; border-spacing: 0 10px;">
                            <tbody>
                                <tr>
                                    <td style="width: 40%;"><b>Nama Penguji Magang</b></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><b>No HP Penguji Magang</b></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12" style="margin-top: 2rem;">
                    <div class="panel panel-default" style="border-radius: 8px; overflow: hidden;">
                        <table class="table table-striped table-bordered table-hover" style="border-collapse: separate; border-spacing: 0 10px;">
                            <tbody>
                                <tr>
                                    <td style="width: 20%;"><b>Nilai Magang</b></td>
                                    <td><b><span class="text-muted">-</span></b></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
             <!-- Footer -->
             <div class="footer text-muted">
                 &copy; 2025 <a href="#">Sistem Magang Undiksha - UPT TIK</a>
             </div>
             <!-- /footer -->

            
         <!-- /content area -->

     </div>
     <!-- /main content -->

 </div>
 <!-- /page content -->

</div>
<!-- /page container -->
@endsection

