<?php
include(APPPATH . "views/caregiver/inc/header.php"); ?>

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
                <div class="row" style="margin-top: 35px;">
                    <div class="col-md-4 offset-md-4" >
                        <a href="javascript:;" class="btn btn-light legitRipple" data-toggle="modal" data-target="#clock_modal">clock in</a>
                        <a href="javascript:;" id="clock_out_btn" class="btn btn-light legitRipple">CLOCK OUT</a>
                    </div>
                    <div class="col-md-2 offset-md-4" id="clock_out_time">
                        <span style="color: #FF7043;">You have not clocked in yet.Please clock in now</span>
                    </div>
                </div>

                <div id="clock_in_time" style="display: none;">
                    <div class="row">
                        <div class="col-md-2 offset-md-4">
                            <span>@ 10:50am</span>
                        </div>
                        <div class="col-md-2" style="text-align: center;">
                            <span>@ 12:30pm</span>
                        </div>
                    </div>
                </div>
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
                                    <th>Location</th>
                                    <th>Charting Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <span class="text-muted">10:30am - 12:30pm</span>
                                        <i class="icon-primitive-dot mr-3 icon-2x"
                                           style="color: #00BCD4; font-size: 18px; float: right;"></i>
                                    </td>
                                    <td>
                                        <li class="media">
                                            <div class="mr-3">
                                                <a href="#">
                                                    <img src="http://localhost/senior-agency-care/assets/images/userimg/face8.jpg"
                                                         class="rounded-circle" width="40" height="40" alt="">
                                                </a>
                                            </div>
                                            <div class="media-body" style="margin-top: 10px;">
                                                <div class="media-title font-weight-semibold">James Alexander</div>
                                            </div>
                                        </li>
                                    </td>
                                    <td>
                                        <li class="media">
                                            <div class="media-title font-weight-semibold">
                                                Johar Town Lahore,Pakistan <i class="icon-location3"></i>
                                            </div>
                                        </li>
                                    </td>
                                    <td>
                                        <li class="media">
                                            <div class="media-title font-weight-semibold">
                                                <p><span class="badge badge-primary">Primary</span> &nbsp;&nbsp;&nbsp;<a href="">Start Charting</a></p>
                                            </div>
                                        </li>
                                    </td>
                                    <td>
                                        <div class="align-self-center ml-3">
                                            <a href="#" class="text-default" data-toggle="collapse"
                                               data-target="#james4">
                                                <i class="icon-menu7"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        <div class="collapse" id="james4">
                                            <div class="pb-1">
                                                <div class="navbar navbar-expand-xl navbar-light navbar-component rounded-top mb-0">
                                                    <div class="navbar-collapse" id="navbar-demo-light">
                                                        <ul class="nav navbar-nav"
                                                            style="width: 100%; background-color: #fafafa!important;">
                                                            <li class="nav-item dropdown" style="font-size: 11px;">
                                                                <a style="padding: 14px 14px 14px 14px;"
                                                                   href="#schedule_client_bio"
                                                                   class="navbar-nav-link active" data-toggle="tab">
                                                                    <i style="padding-right: 10px;"
                                                                       class="icon-users4"></i>Client Bio
                                                                </a>
                                                            </li>
                                                            <li class="nav-item dropdown" style="font-size: 11px;">
                                                                <a style="padding: 14px 14px 14px 14px;"
                                                                   href="#schedule_medication_list_1"
                                                                   class="navbar-nav-link" data-toggle="tab">
                                                                    <i style="padding-right: 10px;"
                                                                       class="icon-gear"></i>Medication List
                                                                </a>
                                                            </li>
                                                            <li class="nav-item dropdown" style="font-size: 11px;">
                                                                <a style="padding: 14px 14px 14px 14px;"
                                                                   href="#schedule_diet_and_allergies_1"
                                                                   class="navbar-nav-link " data-toggle="tab"><i
                                                                            style="padding-right: 10px;"
                                                                            class="icon-calendar3"></i>Diet and
                                                                    Allergies
                                                                </a>
                                                            </li>
                                                            <li class="nav-item dropdown" style="font-size: 11px;">
                                                                <a style="padding: 14px 14px 14px 14px;"
                                                                   href="#schedule_appiontment_callender"
                                                                   class="navbar-nav-link" data-toggle="tab">
                                                                    <i style="padding-right: 10px;"
                                                                       class="icon-users4"></i>Appointment Calendar</a>
                                                            </li>
                                                            <li class="nav-item dropdown" style="font-size: 11px;">
                                                                <a style="padding: 14px 14px 14px 14px;"
                                                                   href="#schedule_client_vitals"
                                                                   class="navbar-nav-link" data-toggle="tab">
                                                                    <i style="padding-right: 10px;"
                                                                       class="icon-collaboration"></i>Client Vitals
                                                                </a>
                                                            </li>
                                                            <li class="nav-item dropdown" style="font-size: 11px;">
                                                                <a style="padding: 14px 14px 14px 14px;"
                                                                   href="#schedule_notice_board" class="navbar-nav-link"
                                                                   data-toggle="tab">
                                                                    <i style="padding-right: 10px;"
                                                                       class="icon-collaboration"></i>
                                                                    Notice Board
                                                                </a>
                                                            </li>
                                                            <li class="nav-item dropdown" style="font-size: 11px;">
                                                                <a style="padding: 14px 14px 14px 14px;"
                                                                   href="#schedule_shopping_list"
                                                                   class="navbar-nav-link" data-toggle="tab">
                                                                    <i style="padding-right: 10px;"
                                                                       class="icon-vcard"></i>Shopping List
                                                                </a>
                                                            </li>
                                                            <li class="nav-item dropdown" style="font-size: 11px;">
                                                                <a style="padding: 14px 14px 14px 14px;"
                                                                   href="#schedule_photos_music"
                                                                   class="navbar-nav-link" data-toggle="tab">
                                                                    <i style="padding-right: 10px;"
                                                                       class="icon-vcard"></i>Photos & Favorite music
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="border-top-0 rounded-0 rounded-bottom tab-content" style="padding: 1%;">
                                                    <!-- ============ CLient Bio ============== -->
                                            <div class="tab-pane fade active show" id="schedule_client_bio">
                                                <div class="row">
                                                    <div class="col-md-12" style="margin: 20px 0px 10px 0px;">
                                                        <p>Client brief bio</p>
                                                    </div>
                                                    <div class="col-md-12" style="margin-top: 5px;">
                                                        <p><strong>Name: <span>Mr Thomas Crowe</span></strong>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-12" style="margin-top: 5px;">
                                                        <p><strong>Profession: <span>Doctor</span></strong></p>
                                                    </div>
                                                    <div class="col-md-12" style="margin-top: 5px;">
                                                        <p>Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting industry. Lorem Ipsum has been the
                                                            industry's standard dummy text ever since the 1500s,
                                                            when an unknown printer took a galley of type and
                                                            scrambled it to make a type specimen book. It has
                                                            survived not only five centuries, but also the leap
                                                            into electronic typesetting, remaining essentially
                                                            unchanged.</p>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting industry. Lorem Ipsum has been the
                                                            industry's standard dummy text ever since the 1500s,
                                                            when an unknown printer took a galley of type and
                                                            scrambled it to make a type specimen book.</p>
                                                    </div>
                                                    <div class="col-md-12" style="margin-top: 5px;">
                                                        <p><strong>Client's typical daily routine:</strong></p>
                                                    </div>
                                                    <div class="col-md-12" style="margin-top: 5px;">
                                                        <p>Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting industry. Lorem Ipsum has been the
                                                            industry's standard dummy text ever since the 1500s,
                                                            when an unknown printer took a galley of type and
                                                            scrambled it to make a type specimen book. It has
                                                            survived not only five centuries, but also the leap
                                                            into electronic typesetting, remaining essentially
                                                            unchanged.</p>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting industry. Lorem Ipsum has been the
                                                            industry's standard dummy text ever since the
                                                            1500s.</p>
                                                    </div>
                                                    <div class="col-md-12" style="margin-top: 5px;">
                                                        <p><strong>Likes:</strong></p>
                                                    </div>
                                                    <div class="col-md-12" style="margin-top: 5px;">
                                                        <p>Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting industry. Lorem Ipsum has been the
                                                            industry's standard dummy text ever since the 1500s,
                                                            when an unknown printer took a galley of type and
                                                            scrambled it to make a type specimen book.</p>
                                                    </div>
                                                    <div class="col-md-12" style="margin-top: 5px;">
                                                        <p><strong>Dislikes:</strong></p>
                                                    </div>
                                                    <div class="col-md-12" style="margin-top: 5px;">
                                                        <p>Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting industry. Lorem Ipsum has been the
                                                            industry's standard dummy text ever since the 1500s,
                                                            when an unknown printer took a galley of type and
                                                            scrambled it to make a type specimen book.</p>
                                                    </div>
                                                    <div class="col-md-12" style="margin-top: 5px;">
                                                        <p><strong>Hobbies:</strong></p>
                                                    </div>
                                                    <div class="col-md-12" style="margin-top: 5px;">
                                                        <p>Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting industry. Lorem Ipsum has been the
                                                            industry's standard dummy text ever since the 1500s,
                                                            when an unknown printer took a galley of type and
                                                            scrambled it to make a type specimen book.</p>
                                                    </div>
                                                    <div class="col-md-12" style="margin-top: 5px;">
                                                        <p><strong>Favourite Music:</strong></p>
                                                    </div>
                                                    <div class="col-md-12" style="margin-top: 5px;">
                                                        <p>Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting industry. Lorem Ipsum has been the
                                                            industry's standard dummy text ever since the 1500s,
                                                            when an unknown printer took a galley of type and
                                                            scrambled it to make a type specimen book.</p>
                                                    </div>
                                                    <div class="col-md-12"
                                                         style="text-align: right; margin-top: 20px;">
                                                        <a href="javascript:;" data-toggle="modal"
                                                           data-target="#modal_clients_bio"
                                                           style="margin-right: 10px;"><i style="color: #555;"
                                                                                          class="icon-pencil5"></i></a>
                                                        <a href="javascript:;" onclick="deleteClientBio()"><i
                                                                    style="color: #555;"
                                                                    class="icon-bin"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                                    <!-- ============Medication CLient============== -->

                                        <div class="tab-pane fade" id="schedule_medication_list_1">
                                            <div class="row">
                                                <div class="col-md-12" style="text-align: center;">
                                                    <a href="javascript:;" onclick="addMedication()"
                                                       data-toggle="modal"
                                                       data-target="#modal_add_medication">Add a new
                                                        medication
                                                        <button style="background-color: #f5f5f5; margin-left: 15px;"
                                                                type="button"
                                                                class="btn alpha-primary text-primary-800 btn-icon rounded-round ml-2 legitRipple">
                                                            <i style="color: #555;" class="icon-plus3"></i>
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <table class="table datatable-basic">
                                                        <thead>
                                                        <tr>
                                                            <th>Medication</th>
                                                            <th><i style="margin-right: 8px;"
                                                                   class="icon-aid-kit"></i>Qty of
                                                                Medication
                                                            </th>
                                                            <th><i style="margin-right: 8px;"
                                                                   class="icon-menu7"></i>Times taken a day
                                                            </th>
                                                            <th><i style="margin-right: 8px;"
                                                                   class="icon-alarm"></i>When to take
                                                                medication
                                                            </th>
                                                            <th><i style="margin-right: 8px;"
                                                                   class="icon-calendar3"></i>Time of day
                                                            </th>
                                                            <th><i style="margin-right: 8px;"
                                                                   class="icon-alarm"></i>Reminder
                                                            </th>
                                                            <th class="text-center">Actions</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td><span class="text-muted">Add Med</span></td>
                                                            <td><span class="text-muted">Add Qty</span></td>
                                                            <td><span class="text-muted">Add Time</span>
                                                            </td>
                                                            <td><span class="text-muted">Add when to take medicine</span>
                                                            </td>
                                                            <td>
                                                                <span class="text-muted">Add time of day</span>
                                                            </td>
                                                            <td><span class="text-muted">Set reminder</span>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="list-icons">
                                                                    <div class="dropdown">
                                                                        <a href="#" class="list-icons-item"
                                                                           data-toggle="dropdown">
                                                                            <i class="icon-menu9"></i>
                                                                        </a>

                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <a href="#"
                                                                               class="dropdown-item"><i
                                                                                        class="icon-square-right"></i>
                                                                                Edit Medication</a>
                                                                            <a href="#"
                                                                               class="dropdown-item"><i
                                                                                        class="icon-bin2"></i>
                                                                                Delete Medication</a>
                                                                            <a href="#"
                                                                               class="dropdown-item"><i
                                                                                        class="icon-square-down"></i>
                                                                                End Medication</a>
                                                                            <a href="#"
                                                                               class="dropdown-item"><i
                                                                                        class="icon-file-pdf"></i>
                                                                                Export to .pdf</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="text-muted">Add Med</span></td>
                                                            <td><span class="text-muted">Add Qty</span></td>
                                                            <td><span class="text-muted">Add Time</span>
                                                            </td>
                                                            <td><span class="text-muted">Add when to take medicine</span>
                                                            </td>
                                                            <td>
                                                                <span class="text-muted">Add time of day</span>
                                                            </td>
                                                            <td><span class="text-muted">Set reminder</span>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="list-icons">
                                                                    <div class="dropdown">
                                                                        <a href="#" class="list-icons-item"
                                                                           data-toggle="dropdown">
                                                                            <i class="icon-menu9"></i>
                                                                        </a>

                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <a href="#"
                                                                               class="dropdown-item"><i
                                                                                        class="icon-square-right"></i>
                                                                                Edit Medication</a>
                                                                            <a href="#"
                                                                               class="dropdown-item"><i
                                                                                        class="icon-bin2"></i>
                                                                                Delete Medication</a>
                                                                            <a href="#"
                                                                               class="dropdown-item"><i
                                                                                        class="icon-square-down"></i>
                                                                                End Medication</a>
                                                                            <a href="#"
                                                                               class="dropdown-item"><i
                                                                                        class="icon-file-pdf"></i>
                                                                                Export to .pdf</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="text-muted">Add Med</span></td>
                                                            <td><span class="text-muted">Add Qty</span></td>
                                                            <td><span class="text-muted">Add Time</span>
                                                            </td>
                                                            <td><span class="text-muted">Add when to take medicine</span>
                                                            </td>
                                                            <td>
                                                                <span class="text-muted">Add time of day</span>
                                                            </td>
                                                            <td><span class="text-muted">Set reminder</span>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="list-icons">
                                                                    <div class="dropdown">
                                                                        <a href="#" class="list-icons-item"
                                                                           data-toggle="dropdown">
                                                                            <i class="icon-menu9"></i>
                                                                        </a>

                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <a href="#"
                                                                               class="dropdown-item"><i
                                                                                        class="icon-square-right"></i>
                                                                                Edit Medication</a>
                                                                            <a href="#"
                                                                               class="dropdown-item"><i
                                                                                        class="icon-bin2"></i>
                                                                                Delete Medication</a>
                                                                            <a href="#"
                                                                               class="dropdown-item"><i
                                                                                        class="icon-square-down"></i>
                                                                                End Medication</a>
                                                                            <a href="#"
                                                                               class="dropdown-item"><i
                                                                                        class="icon-file-pdf"></i>
                                                                                Export to .pdf</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                                    </div>

                                                    <!-- ============//Dietry Needs CLient============== -->

                                        <div class="tab-pane fade" id="schedule_diet_and_allergies_1">
                                            <form>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group pt-2">
                                                            <label class="d-block font-weight-semibold">Select
                                                                client's dietry requirements</label>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio"
                                                                       class="custom-control-input"
                                                                       name="client_dietry_requirements"
                                                                       id="regular_diet" checked="">
                                                                <label class="custom-control-label"
                                                                       for="regular_diet">Regular
                                                                    diet</label>
                                                            </div>

                                                            <div class="custom-control custom-radio">
                                                                <input type="radio"
                                                                       class="custom-control-input"
                                                                       name="client_dietry_requirements"
                                                                       id="mechanical_diet">
                                                                <label class="custom-control-label"
                                                                       for="mechanical_diet">Mechanical
                                                                    diet</label>
                                                            </div>

                                                            <div class="custom-control custom-radio">
                                                                <input type="radio"
                                                                       class="custom-control-input"
                                                                       name="client_dietry_requirements"
                                                                       id="pure_diet">
                                                                <label class="custom-control-label"
                                                                       for="pure_diet">Puree diet</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group pt-2">
                                                            <label class="d-block font-weight-semibold">Select
                                                                client's dietry requirements</label>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio"
                                                                       class="custom-control-input"
                                                                       name="client_fluids_requirements"
                                                                       id="thin_liquids" checked="">
                                                                <label class="custom-control-label"
                                                                       for="thin_liquids">Thin
                                                                    liquids</label>
                                                            </div>

                                                            <div class="custom-control custom-radio">
                                                                <input type="radio"
                                                                       class="custom-control-input"
                                                                       name="client_fluids_requirements"
                                                                       id="honey_thick_liquids">
                                                                <label class="custom-control-label"
                                                                       for="honey_thick_liquids">Honey thick
                                                                    liquids</label>
                                                            </div>

                                                            <div class="custom-control custom-radio">
                                                                <input type="radio"
                                                                       class="custom-control-input"
                                                                       name="client_fluids_requirements"
                                                                       id="nector_thick_liquids">
                                                                <label class="custom-control-label"
                                                                       for="nector_thick_liquids">Nector
                                                                    thick liquids</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="d-block font-weight-semibold">List
                                                                client's known allergies</label>
                                                            <input style="width: 100%;" type="text"
                                                                   class="form-control tokenfield" value=""
                                                                   placeholder="Add multiple client's allergies(with comma seperated)"
                                                                   data-foucus>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div style="text-align: right;">
                                                    <button type="button"
                                                            class="btn btn-primary legitRipple">Save<i
                                                                style="margin-left: 8px;"
                                                                class="icon-arrow-right14"></i></button>
                                                </div>

                                            </form>

                                        </div>

                            <!-- ============//Appoitment Callender CLient============== -->
	                                    <div class="tab-pane fade" id="schedule_appiontment_callender">
	                                        <div class="row">
	                                            <div class="col-md-12" style="text-align: center;">
	                                                <a href="javascript:;" data-toggle="modal"
	                                                   data-target="#modal_new_appointment">Create new
	                                                    appointment
	                                                    <button style="background-color: #f5f5f5; margin-left: 15px;"
	                                                            type="button"
	                                                            class="btn alpha-primary text-primary-800 btn-icon rounded-round ml-2 legitRipple">
	                                                        <i style="color: #555;" class="icon-plus3"></i>
	                                                    </button>
	                                                </a>
	                                            </div>
	                                        </div>
	                                        <div class="row">
	                                            <div class="col-md-12">
	                                                <table class="table datatable-basic"
	                                                       id="appointment_datatable">
	                                                    <thead>
	                                                    <tr>
	                                                        <th>Appointment Type</th>
	                                                        <th>Appointment Date</th>
	                                                        <th>Time</th>
	                                                        <th>Location</th>
	                                                        <th>Reminder</th>
	                                                        <th class="text-center">Actions</th>
	                                                    </tr>
	                                                    </thead>
	                                                    <tbody>
	                                                    <tr>
	                                                        <td>Doctor's appointment<br><span class="text-muted">Dr. Marvin Cobler</span>
	                                                        </td>
	                                                        <td>
	                                                            <span class="text-muted">Appointment date</span>
	                                                        </td>
	                                                        <td><span class="text-muted">Time</span></td>
	                                                        <td><span class="text-muted"><i class="icon-location3"></i> Johar Town Lahore,Pakistan </span>
	                                                        </td>
	                                                        <td>
	                                                            <span class="text-muted">1 hr to Appointment</span>
	                                                        </td>
	                                                        <td class="text-center">
	                                                            <div class="list-icons">
	                                                                <div class="dropdown">
	                                                                    <a href="#" class="list-icons-item"
	                                                                       data-toggle="dropdown">
	                                                                        <i class="icon-menu9"></i>
	                                                                    </a>
	                                                                    <div class="dropdown-menu dropdown-menu-right">
	                                                                        <a href="#"
	                                                                           class="dropdown-item"><i class="icon-square-right"></i>Edit Appointment</a>
	                                                                        <a href="#"
	                                                                           class="dropdown-item"><i class="icon-bin2"></i>Delete Appointment</a>
	                                                                        <a href="#"
	                                                                           class="dropdown-item"><iclass="icon-square-down"></i>End Appointment</a>
	                                                                    </div>
	                                                                </div>
	                                                            </div>
	                                                        </td>
	                                                    </tr>
	                                                    </tbody>
	                                                </table>
	                                            </div>
	                                        </div>
	                                    </div>


                            <!-- ============//Client Vitals============== -->
	                                    <div class="tab-pane fade" id="schedule_client_vitals">
	                                        <div class="row">
	                                            <div class="col-md-12" style="text-align: center;">
	                                                <a href="javascript:;" data-toggle="modal"data-target="#modal_clients_vital">Add new client vitals
                                                        <button style="background-color: #f5f5f5; margin-left: 15px;" type="button" class="btn alpha-primary text-primary-800 btn-icon rounded-round ml-2 legitRipple"><i style="color: #555;" class="icon-plus3"></i>
	                                                    </button>
	                                                </a>
	                                            </div>
	                                        </div>
	                                        <div class="row">
	                                            <div class="col-md-12">
	                                                <table class="table datatable-basic" id="client_vital_datatable">
	                                                    <thead>
	                                                    <tr>
	                                                        <th><i style="margin-right: 8px;" class="icon-man"></i>Blood Pressure
	                                                        </th>
	                                                        <th><i style="margin-right: 8px; color: red;"class="icon-heart6"></i>Heart Rate
	                                                        </th>
	                                                        <th><i style="margin-right: 8px; color: green;" class="icon-stats-growth2"></i>Temperature
	                                                        </th>
	                                                        <th><i style="margin-right: 8px;" class="icon-calendar22"></i>Date Taken
	                                                        </th>
	                                                        <th class="text-center">Actions</th>
	                                                    </tr>
	                                                    </thead>
	                                                    <tbody>
	                                                    <tr>
	                                                        <td>
	                                                            <span class="text-muted">Blood Pressure</span>
	                                                        </td>
	                                                        <td><span class="text-muted">Heart Rate</span>
	                                                        </td>
	                                                        <td><span class="text-muted">Temperature</span>
	                                                        </td>
	                                                        <td><span class="text-muted">Date taken</span>
	                                                        </td>
	                                                        <td class="text-center">
	                                                            <div class="list-icons">
	                                                                <div class="dropdown">
	                                                                    <a href="#" class="list-icons-item"data-toggle="dropdown"><i class="icon-menu9"></i>
	                                                                    </a>
	                                                                    <div class="dropdown-menu dropdown-menu-right">
	                                                                        <a href="#"class="dropdown-item"><iclass="icon-square-right"></i>Edit Vitals</a>
	                                                                        <a href="#"
	                                                                           class="dropdown-item"><iclass="icon-bin2"></i>Delete Vitals</a>
	                                                                        <a href="#"
	                                                                           class="dropdown-item"><iclass="icon-square-down"></i>End Vitals</a>
	                                                                    </div>
	                                                                </div>
	                                                            </div>
	                                                        </td>
	                                                    </tr>
	                                                    </tbody>
	                                                </table>
	                                            </div>
	                                        </div>
	                                    </div>


                            <!-- ================//Notice Board================ -->
            <div class="tab-pane fade" id="schedule_notice_board">
                <div class="row">
                    <div class="col-md-12" style="text-align: center;">
                        <div class="form-group">
                            <button type="button" class="btn btn-light daterange-predefined">
                                <i class="icon-calendar22 mr-2"></i>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table datatable-responsive"
                               id="notice_board_datatable"
                               style="border: none !important;">
                            <thead style="border: none !important;">
                            <tr style="border: none !important;">
                                <th style="border: none !important;">
                                    <ul class="nav nav-tabs nav-tabs-bottom">
                                        <li class="nav-item" style="padding-right: 30px;"><a href="#client_latest_updates_1" class="nav-link active" data-toggle="tab">Latest Updates</a></li>
                                        <li class="nav-item" style="padding-right: 30px;"><a href="#client_shifts_1"class="nav-link"data-toggle="tab">Shifts</a>
                                        </li>
                                        <li class="nav-item" style="padding-right: 30px;"><a href="#client_notices_1" class="nav-link" data-toggle="tab">Client Notices</a></li>
                                        <li class="nav-item" style="padding-right: 30px;"><a href="#timesheet_payroll_1" class="nav-link" data-toggle="tab">Timesheet & Payroll</a></li>
                                        <li class="nav-item"><a href="#client_other_1" class="nav-link" data-toggle="tab">Other</a>
                                        </li>
                                    </ul>
                                </th>
                            </tr>
                            </thead>
                            <tbody style="border: none !important;">
                            <tr style="border: none !important;">
                                <td style="border: none !important; padding: 0;">
                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="client_latest_updates_1">
                                            <ul class="media-list">
                                                <li class="media" style="border: none !important;">
                                                    <div class="mr-3">
                                                        <a href="#" class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-rotate-cw3"></i></a>
                                                    </div>
                                                    <div class="media-body">
                                                        <a href="#">David Liner</a> requested refund for a double card charge.
                                                        <div class="font-size-sm text-muted mt-1">
                                                            4 minutes ago
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="media" style="border: none !important;">
                                                    <div class="mr-3">
                                                        <a href="#" class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-rotate-cw3"></i></a>
                                                    </div>
                                                    <div class="media-body">
                                                        <a href="#">David Liner</a> requested refund for a double cardcharge.
                                                        <div class="font-size-sm text-muted mt-1">
                                                            4 minutes ago
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="media" style="border: none !important;">
                                                    <div class="mr-3">
                                                        <a href="#" class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-rotate-cw3"></i></a>
                                                    </div>
                                                    <div class="media-body">
                                                        <a href="#">David Liner</a> requested
                                                        refund for a double card charge.
                                                        <div class="font-size-sm text-muted mt-1">
                                                            4 minutes ago
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="media"
                                                    style="border: none !important;">
                                                    <div class="mr-3">
                                                        <a href="#" class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-rotate-cw3"></i></a>
                                                    </div>
                                                    <div class="media-body">
                                                        <a href="#">David Liner</a> requested
                                                        refund for a double card charge.
                                                        <div class="font-size-sm text-muted mt-1">
                                                            4 minutes ago
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="media" style="border: none !important;">
                                                    <div class="mr-3">
                                                        <a href="#" class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-rotate-cw3"></i></a>
                                                    </div>
                                                    <div class="media-body">
                                                        <a href="#">David Liner</a> requested
                                                        refund for a double card charge.
                                                        <div class="font-size-sm text-muted mt-1">
                                                            4 minutes ago
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade"
                                             id="client_shifts_1">
                                            <ul class="media-list">
                                                <li class="media"
                                                    style="border: none !important;">
                                                    <div class="mr-3">
                                                        <a href="#" class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i class="icon-rotate-cw3"></i></a>
                                                    </div>
                                                    <div class="media-body">
                                                        <a href="#">David Liner</a> requested
                                                        refund for a double card charge.
                                                        <div class="font-size-sm text-muted mt-1">
                                                            4 minutes ago
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="media"
                                                    style="border: none !important;">
                                                    <div class="mr-3">
                                                        <a href="#"
                                                           class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i
                                                                    class="icon-rotate-cw3"></i></a>
                                                    </div>

                                                    <div class="media-body">
                                                        <a href="#">David
                                                            Liner</a> requested
                                                        refund for a double card
                                                        charge.
                                                        <div class="font-size-sm text-muted mt-1">
                                                            4 minutes ago
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="media"
                                                    style="border: none !important;">
                                                    <div class="mr-3">
                                                        <a href="#"
                                                           class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i
                                                                    class="icon-rotate-cw3"></i></a>
                                                    </div>

                                                    <div class="media-body">
                                                        <a href="#">David
                                                            Liner</a> requested
                                                        refund for a double card
                                                        charge.
                                                        <div class="font-size-sm text-muted mt-1">
                                                            4 minutes ago
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="media"
                                                    style="border: none !important;">
                                                    <div class="mr-3">
                                                        <a href="#"
                                                           class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i
                                                                    class="icon-rotate-cw3"></i></a>
                                                    </div>

                                                    <div class="media-body">
                                                        <a href="#">David
                                                            Liner</a> requested
                                                        refund for a double card
                                                        charge.
                                                        <div class="font-size-sm text-muted mt-1">
                                                            4 minutes ago
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="media"
                                                    style="border: none !important;">
                                                    <div class="mr-3">
                                                        <a href="#"
                                                           class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i
                                                                    class="icon-rotate-cw3"></i></a>
                                                    </div>

                                                    <div class="media-body">
                                                        <a href="#">David
                                                            Liner</a> requested
                                                        refund for a double card
                                                        charge.
                                                        <div class="font-size-sm text-muted mt-1">
                                                            4 minutes ago
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade"
                                             id="client_notices_1">
                                            <ul class="media-list">
                                                <li class="media"
                                                    style="border: none !important;">
                                                    <div class="mr-3">
                                                        <a href="#"
                                                           class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i
                                                                    class="icon-rotate-cw3"></i></a>
                                                    </div>

                                                    <div class="media-body">
                                                        <a href="#">David
                                                            Liner</a> requested
                                                        refund for a double card
                                                        charge.
                                                        <div class="font-size-sm text-muted mt-1">
                                                            4 minutes ago
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="media"
                                                    style="border: none !important;">
                                                    <div class="mr-3">
                                                        <a href="#"
                                                           class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i
                                                                    class="icon-rotate-cw3"></i></a>
                                                    </div>

                                                    <div class="media-body">
                                                        <a href="#">David
                                                            Liner</a> requested
                                                        refund for a double card
                                                        charge.
                                                        <div class="font-size-sm text-muted mt-1">
                                                            4 minutes ago
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="media"
                                                    style="border: none !important;">
                                                    <div class="mr-3">
                                                        <a href="#"
                                                           class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i
                                                                    class="icon-rotate-cw3"></i></a>
                                                    </div>

                                                    <div class="media-body">
                                                        <a href="#">David
                                                            Liner</a> requested
                                                        refund for a double card
                                                        charge.
                                                        <div class="font-size-sm text-muted mt-1">
                                                            4 minutes ago
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="media"
                                                    style="border: none !important;">
                                                    <div class="mr-3">
                                                        <a href="#"
                                                           class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i
                                                                    class="icon-rotate-cw3"></i></a>
                                                    </div>

                                                    <div class="media-body">
                                                        <a href="#">David
                                                            Liner</a> requested
                                                        refund for a double card
                                                        charge.
                                                        <div class="font-size-sm text-muted mt-1">
                                                            4 minutes ago
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="media"
                                                    style="border: none !important;">
                                                    <div class="mr-3">
                                                        <a href="#"
                                                           class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i
                                                                    class="icon-rotate-cw3"></i></a>
                                                    </div>

                                                    <div class="media-body">
                                                        <a href="#">David
                                                            Liner</a> requested
                                                        refund for a double card
                                                        charge.
                                                        <div class="font-size-sm text-muted mt-1">
                                                            4 minutes ago
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade"
                                             id="timesheet_payroll_1">
                                            <ul class="media-list">
                                                <li class="media"
                                                    style="border: none !important;">
                                                    <div class="mr-3">
                                                        <a href="#"
                                                           class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i
                                                                    class="icon-rotate-cw3"></i></a>
                                                    </div>

                                                    <div class="media-body">
                                                        <a href="#">David
                                                            Liner</a> requested
                                                        refund for a double card
                                                        charge.
                                                        <div class="font-size-sm text-muted mt-1">
                                                            4 minutes ago
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="media"
                                                    style="border: none !important;">
                                                    <div class="mr-3">
                                                        <a href="#"
                                                           class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i
                                                                    class="icon-rotate-cw3"></i></a>
                                                    </div>

                                                    <div class="media-body">
                                                        <a href="#">David
                                                            Liner</a> requested
                                                        refund for a double card
                                                        charge.
                                                        <div class="font-size-sm text-muted mt-1">
                                                            4 minutes ago
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="media"
                                                    style="border: none !important;">
                                                    <div class="mr-3">
                                                        <a href="#"
                                                           class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i
                                                                    class="icon-rotate-cw3"></i></a>
                                                    </div>

                                                    <div class="media-body">
                                                        <a href="#">David
                                                            Liner</a> requested
                                                        refund for a double card
                                                        charge.
                                                        <div class="font-size-sm text-muted mt-1">
                                                            4 minutes ago
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="media"
                                                    style="border: none !important;">
                                                    <div class="mr-3">
                                                        <a href="#"
                                                           class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i
                                                                    class="icon-rotate-cw3"></i></a>
                                                    </div>

                                                    <div class="media-body">
                                                        <a href="#">David
                                                            Liner</a> requested
                                                        refund for a double card
                                                        charge.
                                                        <div class="font-size-sm text-muted mt-1">
                                                            4 minutes ago
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="media"
                                                    style="border: none !important;">
                                                    <div class="mr-3">
                                                        <a href="#"
                                                           class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i
                                                                    class="icon-rotate-cw3"></i></a>
                                                    </div>

                                                    <div class="media-body">
                                                        <a href="#">David
                                                            Liner</a> requested
                                                        refund for a double card
                                                        charge.
                                                        <div class="font-size-sm text-muted mt-1">
                                                            4 minutes ago
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade"
                                             id="client_other_1">
                                            <ul class="media-list">
                                                <li class="media"
                                                    style="border: none !important;">
                                                    <div class="mr-3">
                                                        <a href="#"
                                                           class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i
                                                                    class="icon-rotate-cw3"></i></a>
                                                    </div>

                                                    <div class="media-body">
                                                        <a href="#">David
                                                            Liner</a> requested
                                                        refund for a double card
                                                        charge.
                                                        <div class="font-size-sm text-muted mt-1">
                                                            4 minutes ago
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="media"
                                                    style="border: none !important;">
                                                    <div class="mr-3">
                                                        <a href="#"
                                                           class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i
                                                                    class="icon-rotate-cw3"></i></a>
                                                    </div>

                                                    <div class="media-body">
                                                        <a href="#">David
                                                            Liner</a> requested
                                                        refund for a double card
                                                        charge.
                                                        <div class="font-size-sm text-muted mt-1">
                                                            4 minutes ago
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="media"
                                                    style="border: none !important;">
                                                    <div class="mr-3">
                                                        <a href="#"
                                                           class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i
                                                                    class="icon-rotate-cw3"></i></a>
                                                    </div>

                                                    <div class="media-body">
                                                        <a href="#">David
                                                            Liner</a> requested
                                                        refund for a double card
                                                        charge.
                                                        <div class="font-size-sm text-muted mt-1">
                                                            4 minutes ago
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="media"
                                                    style="border: none !important;">
                                                    <div class="mr-3">
                                                        <a href="#"
                                                           class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i
                                                                    class="icon-rotate-cw3"></i></a>
                                                    </div>

                                                    <div class="media-body">
                                                        <a href="#">David
                                                            Liner</a> requested
                                                        refund for a double card
                                                        charge.
                                                        <div class="font-size-sm text-muted mt-1">
                                                            4 minutes ago
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="media"
                                                    style="border: none !important;">
                                                    <div class="mr-3">
                                                        <a href="#"
                                                           class="btn btn-outline bg-primary-400 border-primary-400 text-primary-800 btn-icon rounded-round border-2 ml-2 legitRipple"><i
                                                                    class="icon-rotate-cw3"></i></a>
                                                    </div>

                                                    <div class="media-body">
                                                        <a href="#">David
                                                            Liner</a> requested
                                                        refund for a double card
                                                        charge.
                                                        <div class="font-size-sm text-muted mt-1">
                                                            4 minutes ago
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

		                            <!-- ================//Shopping List ================ -->
	                                    <div class="tab-pane fade" id="schedule_shopping_list">
	                                        <div class="row">
	                                            <div class="col-md-12" style="text-align: center;">
	                                                <a href="javascript:;" data-toggle="modal"
	                                                   data-target="#modal_shopping_list">Create new
	                                                    shopping list
	                                                    <button style="background-color: #f5f5f5; margin-left: 15px;"
	                                                            type="button"
	                                                            class="btn alpha-primary text-primary-800 btn-icon rounded-round ml-2 legitRipple">
	                                                        <i style="color: #555;" class="icon-plus3"></i>
	                                                    </button>
	                                                </a>
	                                            </div>
	                                        </div>
	                                        <div class="row">
	                                            <div class="col-md-12">
	                                                <table class="table datatable-basic"
	                                                       id="shopping_list_datatable">
	                                                    <thead>
	                                                    <tr>
	                                                        <th>Date Created</th>
	                                                        <th>Status</th>
	                                                        <th>Shopping Reminder</th>
	                                                        <th class="text-center">Actions</th>
	                                                    </tr>
	                                                    </thead>
	                                                    <tbody>
	                                                    <tr>
	                                                        <td><span class="text-muted">May 03, 2019</span>
	                                                        </td>
	                                                        <td><span class="text-muted">Complete</span>
	                                                        </td>
	                                                        <td>
	                                                            <span class="text-muted">10 Minutes before</span>
	                                                        </td>
	                                                        <td class="text-center">
	                                                            <div class="list-icons">
	                                                                <div class="dropdown">
	                                                                    <a href="#" class="list-icons-item"
	                                                                       data-toggle="dropdown">
	                                                                        <i class="icon-menu9"></i>
	                                                                    </a>

	                                                                    <div class="dropdown-menu dropdown-menu-right">
	                                                                        <a href="#"
	                                                                           class="dropdown-item"><i
	                                                                                    class="icon-square-right"></i>
	                                                                            Edit shopping list</a>
	                                                                        <a href="#"
	                                                                           class="dropdown-item"><i
	                                                                                    class="icon-bin2"></i>
	                                                                            Delete shopping list</a>
	                                                                        <a href="#"
	                                                                           class="dropdown-item"><i
	                                                                                    class="icon-square-down"></i>
	                                                                            End shopping list</a>
	                                                                    </div>
	                                                                </div>
	                                                            </div>
	                                                        </td>
	                                                    </tr>
	                                                    </tbody>
	                                                </table>
	                                            </div>
	                                        </div>
	                                    </div>

                                        <!-- ================//Photos and music ================ -->
                                    <div class="tab-pane fade" id="schedule_photos_music">
                                            <div class="row">
                                                <div class="col-md-4 offset-md-3" style="padding-top: 30px;">
                                                    <button type="button" class="btn btn-primary btn-icon"><i class="icon-download"></i></button>
                                                    <div class="btn-group">
                                                    <button type="button" style="background-color: #fff;" class="btn btn-light dropdown-toggle" data-toggle="dropdown">Upload new photo or music</button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="javascript:;" data-toggle="modal"
                                                       data-target="#modal_photo" class="dropdown-item"><i class="icon-camera"></i> Upload Photo</a>
                                                        <a href="javascript:;" data-toggle="modal"
                                                       data-target="#modal_music" class="dropdown-item"><i class="icon-music"></i> Upload Music</a>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 offset-md-2" style="padding-top: 35px;">
                                                    <div class="form-group form-group-feedback form-group-feedback-right">
                                                    <input type="text" class="form-control form-control-sm" placeholder="Search...">
                                                    <div class="form-control-feedback form-control-feedback-sm">
                                                        <i class="icon-search4 text-muted"></i>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="row" style="padding-top: 30px;">
                                                <div class="col-md-12">
                                                    <ul class="nav nav-tabs nav-tabs-bottom" style="background-color: #fafafa;">
                                                        <li class="nav-item"><a href="#myphoto" class="nav-link active" data-toggle="tab">My Photos</a></li>
                                                        <li class="nav-item"><a href="#mymusic" class="nav-link" data-toggle="tab">Favorite Music</a></li>
                                                    </ul>
                                                    <div class="tab-content">
                                                    <div class="tab-pane fade show active" id="myphoto">
                                            <div class="row">
                                        <div class="col-xl-4 col-sm-6">
                                            <div class="card">
                                                <div class="card-img-actions">
                                                    <img class="card-img-top img-fluid" src="<?php echo base_url(); ?>assets/images/userimg/img4.png" alt="">
                                                    <div class="card-img-actions-overlay card-img-top">
                                                        <a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
                                                            <i class="icon-plus3"></i>
                                                        </a>
                                                        <a href="user_pages_profile.html" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
                                                            <i class="icon-link"></i>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="card-body text-center">
                                                    <p class="d-block">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="row">
                                                    <div class="col-sm-8">
                                                         <p>updated: may 25th</p>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <a href="" class="pull-right">Edit</a>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <a href="" class="pull-right"> Delete</a>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-sm-6">
                                            <div class="card">
                                                <div class="card-img-actions">
                                                    <img class="card-img-top img-fluid" src="<?php echo base_url(); ?>assets/images/userimg/img1.png" alt="">
                                                    <div class="card-img-actions-overlay card-img-top">
                                                        <a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
                                                            <i class="icon-plus3"></i>
                                                        </a>
                                                        <a href="user_pages_profile.html" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
                                                            <i class="icon-link"></i>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="card-body text-center">
                                                    <p class="d-block">Lorem Ipsum is simply dummy text of the printing and
                                                                    typesetting industry. Lorem Ipsum has been the
                                                                    industry's standard dummy text ever since the 1500s, </p>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="row">
                                                    <div class="col-sm-8">
                                                         <p>updated: may 25th</p>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <a href="" class="pull-right">Edit</a>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <a href="" class="pull-right"> Delete</a>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-sm-6">
                                            <div class="card">
                                                <div class="card-img-actions">
                                                    <img class="card-img-top img-fluid" src="<?php echo base_url(); ?>assets/images/userimg/img3.png" alt="">
                                                    <div class="card-img-actions-overlay card-img-top">
                                                        <a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
                                                            <i class="icon-plus3"></i>
                                                        </a>
                                                        <a href="user_pages_profile.html" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
                                                            <i class="icon-link"></i>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="card-body text-center">
                                                    <p class="d-block">Lorem Ipsum is simply dummy text of the printing and
                                                                    typesetting industry. Lorem Ipsum has been the
                                                                    industry's standard dummy text ever since the 1500s, </p>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="row">
                                                    <div class="col-sm-8">
                                                         <p>updated: may 25th</p>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <a href="" class="pull-right">Edit</a>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <a href="" class="pull-right"> Delete</a>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                         </div>
                                            </div>

                                                    <div class="tab-pane fade" id="mymusic">
                                                        Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>   
                                    </div>
                                        </div>

										</div>
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


<!-- ==========Add Medication Modal============= -->
<div id="modal_add_medication" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="margin: 0 auto;">Add client medication</h5>
                <div>
                    <li class="media">
                        <div class="mr-3" style="margin-right: .55rem!important;">
                            <a href="#">
                                <img src="<?php echo base_url(); ?>assets/images/userimg/face22.jpg"
                                     class="rounded-circle" width="40" height="40" alt="">
                            </a>
                        </div>

                        <div class="media-body">
                            <div class="media-title font-weight-semibold"
                                 style="font-size: 12px; margin-bottom: 0px !important;">Bastin Miller
                            </div>
                            <span class="text-muted" style="font-size: 12px;">Total Care</span>
                        </div>
                    </li>
                </div>
            </div>
            <form id="add_client_medication_form">
                <div class="modal-body">
                    <form action="#">
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <div class="form-group">
                                    <label>Medication name:</label>
                                    <input type="text" name="medication_name" class="form-control"
                                           placeholder="What medication is the client taking">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <div class="form-group">
                                    <label>Medication dosage in Mg: </label><br><span class="text-muted">Add the required medication dosage</span>
                                    <input type="text" value="" class="form-control touchspin-empty" placeholder="Mg">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <div class="form-group">
                                    <label>How many times a day is medication taken: </label><br><span
                                            class="text-muted">Add the frequency per day of dosage</span>
                                    <input type="text" value="" class="form-control touchspin-empty">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <div class="form-group">
                                    <label>When is the medication taken</label><br><span class="text-muted">Select morning, evening or night</span>
                                    <select class="form-control select-icons" data-fouc>
                                        <option></option>
                                        <option value="morning">Morning</option>
                                        <option value="evening">Evening</option>
                                        <option value="night">Night</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <label>What time is medication taken</label><br><span class="text-muted">Select what time is medication taken</span>
                                <div class="input-group">
						<span class="input-group-prepend">
							<span class="input-group-text"><i class="icon-alarm"></i></span>
						</span>
                                    <input type="text" class="form-control pickatime" placeholder="select time">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <div class="form-group pt-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" id="medication_reminder_checkbox"
                                                   class="form-check-input-styled" data-fouc>
                                            Set reminder for caregiver
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="medication_set_reminder" style="display: none;">
                            <div class="col-md-8 offset-md-2">
                                <span class="text-muted">Create a reminder for caregiver to give medication</span>
                                <div class="input-group">
						<span class="input-group-prepend">
							<span class="input-group-text"><i class="icon-alarm"></i></span>
						</span>
                                    <input type="text" class="form-control pickatime" placeholder="select time">
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn bg-primary btn-ladda btn-ladda-progress" data-style="zoom-in"
                            data-spinner-size="20"><span class="ladda-label">Done</span></button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- ==========Add Vitals Modal============= -->
<div id="modal_clients_vital" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="margin: 0 auto;">Add Client Vitals</h5>
                <div>
                    <li class="media">
                        <div class="mr-3" style="margin-right: .55rem!important;">
                            <a href="#">
                                <img src="<?php echo base_url(); ?>assets/images/userimg/face17.jpg"
                                     class="rounded-circle" width="40" height="40" alt="">
                            </a>
                        </div>

                        <div class="media-body">
                            <div class="media-title font-weight-semibold"
                                 style="font-size: 12px; margin-bottom: 0px !important;">Bastin Miller
                            </div>
                            <span class="text-muted" style="font-size: 12px;">Total Care</span>
                        </div>
                    </li>
                </div>
            </div>
            <form id="add_client_medication_form">
                <div class="modal-body">
                    <form action="#">
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <div class="form-group">
                                    <label>Add date and time vitals were taken: </label>
                                    <div class="input-group">
							<span class="input-group-prepend">
								<span class="input-group-text"><i class="icon-alarm"></i></span>
							</span>
                                        <input type="text" class="form-control daterange-time" value=""
                                               placeholder="Enter date and time vitals were taken">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 50px;">
                            <div class="col-md-3">
                                <div class="form-group pt-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input-styled" data-fouc>
                                            Blood Pressure
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <input class="form-control" type="number" name="number"
                                       style="position: relative; bottom: 16px;">
                            </div>
                            <div class="col-md-2" style="text-align: center;"><label
                                        style="position: relative; top: 9px;">Over</label></div>
                            <div class="col-md-3">
                                <input class="form-control" type="number" name="number"
                                       style="position: relative; bottom: 16px;">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group pt-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input-styled" data-fouc>
                                            Breathing
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <input class="form-control" type="number" name="number"
                                       style="position: relative; bottom: 16px;">
                            </div>
                            <div class="col-md-2" style="text-align: center;"><label
                                        style="position: relative; top: 9px;">To</label></div>
                            <div class="col-md-3">
                                <input class="form-control" type="number" name="number"
                                       style="position: relative; bottom: 16px;">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group pt-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input-styled" data-fouc>
                                            Pulse
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <input class="form-control" type="number" name="number"
                                       style="position: relative; bottom: 16px;">
                            </div>
                            <div class="col-md-2" style="text-align: center;"><label
                                        style="position: relative; top: 9px;">To</label></div>
                            <div class="col-md-3">
                                <input class="form-control" type="number" name="number"
                                       style="position: relative; bottom: 16px;">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group pt-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input-styled" data-fouc>
                                            Temperature
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" type="number" name="number"
                                       style="position: relative; bottom: 16px;">
                            </div>
                            <div class="col-md-2"><label style="position: relative; top: 9px;">Farenheight</label></div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn bg-primary btn-ladda btn-ladda-progress" data-style="zoom-in"
                            data-spinner-size="20"><span class="ladda-label">Done</span></button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- ==========Photos Modal============= -->
<div id="modal_photo" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="margin: 0 auto;">Upload a Photo</h5>
                <div>
                    <li class="media">
                        <div class="mr-3" style="margin-right: .55rem!important;">
                            <a href="#">
                                <img src="<?php echo base_url(); ?>assets/images/userimg/face8.jpg"
                                     class="rounded-circle" width="40" height="40" alt="">
                            </a>
                        </div>

                        <div class="media-body">
                            <div class="media-title font-weight-semibold"
                                 style="font-size: 12px; margin-bottom: 0px !important;">Bastin Miller
                            </div>
                            <span class="text-muted" style="font-size: 12px;">Total Care</span>
                        </div>
                    </li>
                </div>
            </div>
                <div class="modal-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" name="photo_title" class="form-control" placeholder="Add title to Photo">
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="file" class="file-input" data-show-remove="true" data-fouc>
                            </div>
                        </div>
                    </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn bg-primary btn-ladda btn-ladda-progress"
                                    data-style="zoom-in" data-spinner-size="20"><span class="ladda-label">Done</span>
                            </button>
                        </div>
                    
                </div>
        </div>
</div>

<!-- ==========Music Modal============= -->
<div id="modal_music" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" style="margin: 0 auto;">Upload Client's favorite music</h4>
            </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 offset-md-1">
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="radio" id="music_file_link" name="addon-radio" class="form-control-styled" checked data-fouc>&nbsp; Embeded a youtube or vimeo link
                                    </div>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="radio" id="upload_music_file" name="addon-radio" class="form-control-styled" data-fouc>&nbsp; Upload a music file
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 50px;" id="file_link">
                        <div class="col-md-11 offset-md-1">
                            <div class="form-group">
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Paste the shared link from youtube hare">
                                        <span class="input-group-append">
                                            <button class="btn btn-primary" type="button">Add</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-11 offset-md-1" style="margin-top: 40px; ">
                            <p>How to get Shared link from youtube and paste here</p>
                            <p>1) Goto the youtube video page</p>
                            <p>2) Find a share link tab and you should find the copy link option.</p>
                            <p>3) Click the "Copy link" button to copy link.</p>
                            <p>4) Paste the link above and click "Add" to embeded the video.</p>
                        </div>
                    </div>
                    <div class="row" id="music_upload" style="margin: 50px 0 40px 0; display: none;">
                        <div class="col-md-9 offset-md-1">     
                            <input type="file" class="file-input" data-fouc>
                            <span class="form-text text-muted">MP3 file format only max 5MB</span>
                        </div>
                    </div>
                </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn bg-primary btn-ladda btn-ladda-progress"data-style="zoom-in" data-spinner-size="20"><span class="ladda-label">Done</span>
                            </button>
                        </div>
                    
                </div>
        </div>
</div>

<!-- ==========Clock Modal============= -->
<div id="clock_modal" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div style="margin: 0 auto;">
                    <h1 class="card-title" style="font-size: 44px; font-weight: 400; color: #555;">
                    <i style="font-size: 29px;" class="icon-alarm mr-3 icon-2x"></i> 09:54:29
                    </h1>
                    <p style="margin-left: 65px; font-size: 13px;"><span style="padding-right: 15px;">hours</span><span
                    style="padding-right: 15px;">minutes</span><span>seconds</span></p>
                </div>
            </div>
                <div class="modal-body">
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
                <div class="row">
                <div class="col-md-10 offset-md-1">
                    <li class="media" style="position: relative;top: 30px; width: 90%;margin: 35px auto;">
                        <div class="mr-3" style="margin-top: 10px;">
                            <span><b>Shift time</b></span>
                            <span style="margin: auto 10px;">10:30am - 12:30pm</span>
                        </div>

                        <div class="media-body" style="text-align: center; margin-top: 10px;">
                            <span><i class="icon-primitive-dot mr-3 icon-2x" style="color: #00BCD4; font-size:18px;"></i></span>
                        </div>
                        <div>
                            <span><a href="#"><img src="http://localhost/senior-agency-care/assets/images/userimg/face8.jpg" class="rounded-circle" width="40" height="40" alt=""></a></span><span style="margin: auto 10px;">James Alexander</span>
                        </div>
                    </li>
                </div>
                </div>
            </div>
            <div class="modal-footer" style="margin-top: 20px; ">
                <button type="submit" id="btn_clock_in" style="background-color: #4CAF50;color: #ffffff;" class="btn btn-ladda btn-ladda-progress" data-dismiss="modal" data-style="zoom-in" data-spinner-size="20"><span class="ladda-label">CLOCK IN</span></button>
                <button type="button" class="btn btn-default btn-link" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<!-- ==========Add Appointment Modal============= -->
<div id="modal_new_appointment" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="margin: 0 auto;">Create a new appointment</h5>
                <div>
                    <li class="media">
                        <div class="mr-3" style="margin-right: .55rem!important;">
                            <a href="#">
                                <img src="<?php echo base_url(); ?>assets/images/userimg/face15.jpg"
                                     class="rounded-circle" width="40" height="40" alt="">
                            </a>
                        </div>

                        <div class="media-body">
                            <div class="media-title font-weight-semibold"
                                 style="font-size: 12px; margin-bottom: 0px !important;">Bastin Miller
                            </div>
                            <span class="text-muted" style="font-size: 12px;">Total Care</span>
                        </div>
                    </li>
                </div>
            </div>
            <form id="add_client_medication_form">
                <div class="modal-body">
                    <form action="#">
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <div class="form-group">
                                    <label>Add appointment type</label>
                                    <select class="form-control select-icons" id="therapy_type"
                                        onchange="setTherapyType()"
                                        data-placeholder="Select the type of appointment" data-fouc>
                                        <option></option>
                                        <option value="doctor_appointment">Doctor's Appointment</option>
                                        <option value="therapy_appointment">Therapy Appointment</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="therapy_doc_name" style="display: none;">
                            <div class="col-md-8 offset-md-2">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter doctor's name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <div class="form-group">
                                    <label>Enter appointment date and time: </label>
                                    <div class="input-group">
        							<span class="input-group-prepend">
        								<span class="input-group-text"><i class="icon-alarm"></i></span>
        							</span>
                                    <input type="text" class="form-control daterange-time" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <div class="form-group">
                                    <label>Enter appointment location: </label>
                                    <div class="form-group form-group-feedback form-group-feedback-left">
                                        <input type="text" class="form-control form-control-sm"
                                               placeholder="Add appointment location">
                                        <div class="form-control-feedback form-control-feedback-sm">
                                            <i class="icon-pin-alt"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <div class="form-group pt-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" id="appointment_reminder_checkbox"
                                                   class="form-check-input-styled" data-fouc>
                                            Set reminder for caregiver
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="appointment_set_reminder" style="display: none;">
                            <div class="col-md-8 offset-md-2">
                                <div class="input-group">
						<span class="input-group-prepend">
							<span class="input-group-text"><i class="icon-alarm"></i></span>
						</span>
                                    <input type="text" class="form-control pickatime"
                                           placeholder="Create reminder for caregiver">
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn bg-primary btn-ladda btn-ladda-progress" data-style="zoom-in"
                            data-spinner-size="20"><span class="ladda-label">Done</span></button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- ==========Add Shopping List Modal============= -->
<div id="modal_shopping_list" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="margin: 0 auto;">Add Shopping List</h5>
                <div>
                    <li class="media">
                        <div class="mr-3" style="margin-right: .55rem!important;">
                            <a href="#">
                                <img src="<?php echo base_url(); ?>assets/images/userimg/face13.jpg"
                                     class="rounded-circle" width="40" height="40" alt="">
                            </a>
                        </div>

                        <div class="media-body">
                            <div class="media-title font-weight-semibold"
                                 style="font-size: 12px; margin-bottom: 0px !important;">Bastin Miller
                            </div>
                            <span class="text-muted" style="font-size: 12px;">Total Care</span>
                        </div>
                    </li>
                </div>
            </div>
            <form id="add_client_medication_form">
                <div class="modal-body">
                    <form action="#">
                        <div class="row">
                            <div class="col-md-11 offset-md-1">
                                <div class="form-group row">
                                    <label class="col-md-12"><i class="icon-attachment2" style="margin-right: 10px;"></i>Attach Reciept</label>
                                    <div class="col-lg-10">
                                        <input type="file" class="file-input" data-fouc>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-11 offset-md-1">
                                <div class="d-flex align-items-center">
                                    <div class="mr-3">
                                        <div class="form-group pt-2">
                                            <a href="#"><i style="font-size: 30px;" class="icon-file-word"></i></a>
                                        </div>
                                    </div>
                                    <div class="mr-3" style="margin-left: 140px; margin-bottom: 7px;">
                                        <a href="#" class="text-default font-weight-semibold letter-icon-title"><i
                                                    style="margin-right: 10px;" class="icon-file-empty"></i>Edit</a>
                                    </div>
                                    <div class="mr-3" style="margin-bottom: 7px;">
                                        <a href="#" class="text-default font-weight-semibold letter-icon-title"><i
                                                    style="margin-right: 10px;" class="icon-cross3"></i>Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-11 offset-md-1">
                                <div class="form-group row">
                                    <label class="col-md-12">Shopping List</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <input type="text" class="form-control border-right-0"
                                                   placeholder="Add to my shopping list">
                                            <span class="input-group-append">
									<button class="btn bg-blue" type="button">Add<i style="margin-left: 5px;"
                                                                                    class="icon-arrow-right14"></i></button>
								</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-11 offset-md-1">
                                <div class="d-flex align-items-center">
                                    <div class="mr-3">
                                        <div class="form-group pt-2">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input-styled" data-fouc>
                                                    Toilet Paper
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mr-3" style="margin-left: 140px; margin-bottom: 7px;">
                                        <a href="#" class="text-default font-weight-semibold letter-icon-title"><i
                                                    style="margin-right: 10px;" class="icon-file-empty"></i>Edit</a>
                                    </div>
                                    <div class="mr-3" style="margin-bottom: 7px;">
                                        <a href="#" class="text-default font-weight-semibold letter-icon-title"><i
                                                    style="margin-right: 10px;" class="icon-cross3"></i>Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn bg-primary btn-ladda btn-ladda-progress" data-style="zoom-in"
                            data-spinner-size="20"><span class="ladda-label">Done</span></button>
                    <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

    <!-- ==========Client Bio Modal============= -->
<div id="modal_clients_bio" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="margin: 0 auto;">Edit Client Bio</h5>
                <div>
                    <li class="media">
                        <div class="mr-3" style="margin-right: .55rem!important;">
                            <a href="#">
                                <img src="<?php echo base_url(); ?>assets/images/userimg/face24.jpg"
                                     class="rounded-circle" width="40" height="40" alt="">
                            </a>
                        </div>

                        <div class="media-body">
                            <div class="media-title font-weight-semibold"
                                 style="font-size: 12px; margin-bottom: 0px !important;">Bastin Miller
                            </div>
                            <span class="text-muted" style="font-size: 12px;">Total Care</span>
                        </div>
                    </li>
                </div>
            </div>
            <form id="client_bio_form">
                <div class="modal-body">
                    <form action="#">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Client name:</label>
                                    <input type="text" name="client_name" class="form-control" placeholder="Client Name"
                                           value="Mr thomas crowe">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Client Profession:</label>
                                    <input type="text" name="client_profession" class="form-control"
                                           placeholder="Client Profession" value="Doctor">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Profession Details:</label>
                                    <textarea name="profession_details" rows="3" cols="4"
                                              placeholder="Add brief detail about client Profession"
                                              class="form-control">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown.</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Client's daily routine:</label>
                                    <textarea name="client_routine" rows="3" cols="4"
                                              placeholder="Add brief detail about client routine" class="form-control">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Client's likes:</label>
                                    <textarea name="client_likes" rows="3" cols="4"
                                              placeholder="Add brief detail about client likes" class="form-control">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has .</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Client's dislikes:</label>
                                    <textarea name="client_dislikes" rows="3" cols="4"
                                              placeholder="Add brief detail about client dislikes" class="form-control">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Client's hobbies:</label>
                                    <textarea name="client_hobbies" rows="3" cols="4"
                                              placeholder="Add brief detail about client hobbies" class="form-control">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Client's Favourite Music:</label>
                                    <textarea name="client_favourite_music" rows="3" cols="4"
                                              placeholder="Add brief detail about client favourite music"
                                              class="form-control">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn bg-primary btn-ladda btn-ladda-progress"
                                    data-style="zoom-in" data-spinner-size="20"><span class="ladda-label">Done</span>
                            </button>
                        </div>
                    </form>
                </div>
        </div>
</div>




    <script src="<?php echo base_url(); ?>assets/js/demo_pages/datatables_basic.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/tables/datatables/datatables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/forms/tags/tokenfield.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/demo_pages/datatables_responsive.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/demo_pages/form_tags_input.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/forms/styling/switch.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/ui/moment/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/pickers/daterangepicker.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/pickers/anytime.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/pickers/pickadate/picker.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/pickers/pickadate/picker.date.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/pickers/pickadate/picker.time.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/pickers/pickadate/legacy.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/notifications/jgrowl.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/demo_pages/form_checkboxes_radios.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/demo_pages/picker_date.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/demo_pages/form_input_groups.js"></script>
     
    <script src="<?php echo base_url(); ?>assets/js/plugins/uploaders/fileinput/plugins/sortable.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/uploaders/fileinput/fileinput.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/demo_pages/uploader_bootstrap.js"></script> 


    <?php include(APPPATH . "views/caregiver/inc/footer.php"); ?>

    <script type="text/javascript">


        

        $('#appointment_datatable, #shopping_list_datatable, #client_vital_datatable').DataTable({
            columnDefs: [{
                orderable: true,
                targets: [3]
            }],
            dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
            language: {
                search: '<span>Filter:</span> _INPUT_',
                searchPlaceholder: 'Type to filter...',
                lengthMenu: '<span>Show:</span> _MENU_',
                paginate: {
                    'first': 'First',
                    'last': 'Last',
                    'next': $('html').attr('dir') == 'rtl' ? '&larr;' : '&rarr;',
                    'previous': $('html').attr('dir') == 'rtl' ? '&rarr;' : '&larr;'
                }
            }
        });

        $('#notice_board_datatable').DataTable({
            autoWidth: false,
            responsive: true,
            columnDefs: [{
                orderable: false
            }],
            dom: '<"datatable-header"fl><"datatable-scroll-wrap"t><"datatable-footer"ip>',
            language: {
                search: '<span>Filter:</span> _INPUT_',
                searchPlaceholder: 'Type to filter...',
                lengthMenu: '<span>Show:</span> _MENU_',
                paginate: {
                    'first': 'First',
                    'last': 'Last',
                    'next': $('html').attr('dir') == 'rtl' ? '&larr;' : '&rarr;',
                    'previous': $('html').attr('dir') == 'rtl' ? '&rarr;' : '&larr;'
                }
            }
        });

        $('#medication_reminder_checkbox').click(function(){
            if($(this).prop("checked") == true){
                $("#medication_set_reminder").css("display","block");
            }
            else if($(this).prop("checked") == false){
                $("#medication_set_reminder").css("display","none");
            }
        });

        $('#appointment_reminder_checkbox').click(function(){
            if($(this).prop("checked") == true){
                $("#appointment_set_reminder").css("display","block");
            }
            else if($(this).prop("checked") == false){
                $("#appointment_set_reminder").css("display","none");
            }
        });

        function deleteClientBio() {
            swal({
                title: 'Are you sure?',
                text: 'You will not be able to recover clients bio data!',
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!'
            });
        }
        function setTherapyType(){
            var type = $("#therapy_type").val();
            if(type == "doctor_appointment"){
                $("#therapy_doc_name").css("display","block");
            }else{
                $("#therapy_doc_name").css("display","none");
            }
        }

        function addMedication() {

        }

        $('#upload_music_file').click(function(){
            if($("#file_link").css("display","block")){
                $("#file_link").css("display","none");
                $("#music_upload").css("display","block");
            }
        });
        $('#music_file_link').click(function(){
            if($("#file_link").css("display","none")){
                $("#file_link").css("display","block");
                $("#music_upload").css("display","none");
            }
        });


        $('#btn_clock_in').click(function(){
            if ($('#clock_in_time').css("display","none")) {
                $('#clock_out_time').css("display","none");
                $("#clock_out_btn").css({ 'background-color' : '#4CAF50', 'color' : '#fff'});
                $('#clock_in_time').css("display","block");
            }
        });

    </script>