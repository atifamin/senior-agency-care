<?php include(APPPATH . "views/family/inc/header.php"); ?>

<style type="text/css">
    .navbar-nav-link.active {
        background-color: #fff !important;
    }

    .sorting_disabled {
        width: auto !important;
    }

    .dataTable thead .sorting:before {
        content: "";
    }

    .dataTable thead .sorting:after {
        content: "";
    }

    .dataTable thead .sorting_asc:after {
        content: "";
    }

    .dataTable thead {
        font-size: 12px;
    }

    .token-input {
        min-width: 100% !important;
    }

    .dataTable thead .sorting_desc:after {
        content: "";
    }

    .navbar-nav-link.active {
        background-color: #E6E6E6 !important;
    }
    .table .table{
        background-color: #fff  !important;
    }
</style>
<div class="row">
    <div class="col-md-12">
        <!-- Dropdown list -->
        <div class="card">
            <div class="card-header header-elements-inline" style="padding-bottom: 0px;">
                <div style="margin: 0 auto;">
                    <h1 class="card-title" style="font-size: 44px; font-weight: 400; color: #555;">
                        <i style="font-size: 29px;" class="icon-alarm mr-3 icon-2x"></i> 09:54:29
                    </h1>
                    <p style="margin-left: 65px; font-size: 13px;"><span style="padding-right: 15px;">hours</span><span
                                style="padding-right: 15px;">minutes</span><span>seconds</span></p>
                </div>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-12" style="text-align: center;">
                        <h4>
                            <span style="font-size: 13px; font-weight: 500; margin-right: 15px;">Wednesday</span>
                            November 12, 2014
                        </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="text-align: center;">
                        <span style="font-size: 13px; font-weight: 500; margin-right: 15px;">Location</span><span class="text-muted">Johar Town Lahore,Pakistan <i class="icon-location3"></i></span>
                    </div>
                </div>
                <!-- <div class="row" style="margin-top: 35px;">
                    <div class="col-md-4 offset-md-4" >
                        <a href="javascript:;" class="btn btn-light legitRipple" id="clock_in_modal" data-toggle="modal" data-target="#clock_modal">CLOCK IN</a>
                        <a href="javascript:;" id="clock_out_btn" class="btn btn-light legitRipple pull-right">CLOCK OUT</a>
                    </div>
                    <div class="col-md-2 offset-md-4" id="clock_out_time" style="width: 50%;">
                        <span style="color: #FF7043;">You have not clocked in yet.Please clock in now</span>
                    </div>
                </div>

                <div id="clock_in_time" style="display: none;">
                    <div class="row">
                        <div class="col-md-4 offset-md-4">
                            <span style="margin-left: 10px;">@ 10:50am</span>
                            <span class="pull-right" style="margin-right: 20px;">@ 12:30pm</span>
                        </div>
                    </div>
                </div> -->
                <div class="row" style="margin-top: 40px;">
                    <div class="col-md-12" style="text-align: center;">
                        <h5 style="font-weight: 500; margin-bottom: 0;">Current Shifts</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Shift Time</th>
                                        <th>Client</th>
                                        <th>Assign Caregivers</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <span class="text-muted">10:30am - 12:30pm</span>
                                            <i class="icon-primitive-dot mr-3 icon-2x" style="color: #00BCD4; font-size: 18px; float: right;"></i>
                                        </td>
                                        <td>
                                            <li class="media">
                                                <div class="mr-3">
                                                    <a href="#"><img src="http://localhost/senior-agency-care/assets/images/userimg/face8.jpg" class="rounded-circle" width="40" height="40" alt=""></a>
                                                </div>
                                                <div class="media-body" style="margin-top: 10px;">
                                                    <div class="media-title font-weight-semibold">James Alexander</div>
                                                </div>
                                            </li>
                                        </td>
                                        <td>
                                            <li class="media">
                                                <div class="mr-3">
                                                    <a href="#"><img src="http://localhost/senior-agency-care/assets/images/userimg/face12.jpg" class="rounded-circle" width="40" height="40" alt=""></a>
                                                </div>
                                                <div class="media-body" style="margin-top: 10px;">
                                                    <div class="media-title font-weight-semibold">Lucy Alexander <a href="javascript:;" data-toggle="modal" data-target="#view_profile" ><i class="icon-eye8 icon-2x" style=" font-size: 18px; margin-left: 10px;"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                <!--=========Profile Modal=======-->
<div id="view_profile" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="card-body text-center">
                    <a href="#">
                        <img src="http://localhost/senior-agency-care/assets/images/userimg/face8.jpg " class="img-fluid rounded-circle shadow-1 mb-3" width="80" height="80" alt="">
                    </a>
                    <h5 class="mb-0"><b>James Alexander</b></h5>
                    <span class="font-size-sm text-muted">CNA:Certified Nurse Assistant</span>
                </div>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 offset-md-1">
                        <h5 class="font-weight-semibold">WORK EXPERIENCE</h5>
                        <h6 style="margin: 0px;">Senior care Staffing LLC</h6>
                        <h6 class="font-weight-semibold" style="color: #2196F3;">2013-Present</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 offset-md-1">
                        <h6 style="margin: 0px;">Kansas City Senior Care</h6>
                        <h6 class="font-weight-semibold" style="color: #2196F3;">2010-2013</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 offset-md-1">
                        <h6 style="margin: 0px;">Maryland Senior Care</h6>
                        <h6 class="font-weight-semibold" style="color: #2196F3;">2013-2013</h6>
                    </div>
                </div>
                <div class="row" style="margin-top: 10px;">
                    <div class="col-md-10 offset-md-1">
                        <h5 class="font-weight-semibold">BRIEF BIO ABOUT ME</h5>
                        <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</span>
                    </div>
                </div
                 <div class="row">
                    <div class="col-md-12" style="margin-top: 10px; background-color: #f5f5f5;">
                        <span class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </span>
                    </div>
                </div
            </div>

            <div class="modal-footer" style="margin-top: 10px;">
                
                <li class="media" style="width: 93%;">
                    <div class="mr-3">
                        <a href="#" class="list-icons-item" data-trigger="hover"><i class="icon-phone2" style="margin-right: 8px;"></i> 03543505041</a>
                    </div>
                    <div class="media-body text-center">
                         <a href="#" class="list-icons-item" data-trigger="hover"><i class="icon-comment" style="margin-right: 8px;"></i> Send Message</a>
                    </div>
                    <div class="align-self-center ml-3 pull-right">
                        <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                    </div>
                </li>
            </div>
        </div>
    </div>
</div>
