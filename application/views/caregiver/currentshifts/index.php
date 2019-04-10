<?php include(APPPATH."views/caregiver/inc/header.php"); ?>
<?php //print_array($shift_detail); ?>
<div class="card">
  <div class="card-header header-elements-inline" style="padding-bottom: 0px;">
    <div style="margin: 0 auto;">
      <h1 class="card-title" style="font-size: 44px; font-weight: 400; color: #555;"> <i style="font-size: 29px;" class="icon-alarm mr-3 icon-2x"></i> <?php echo date('H:i:s'); ?> </h1>
      <p style="margin-left: 65px; font-size: 13px;"><span style="padding-right: 15px;">hours</span><span style="padding-right: 15px;">minutes</span><span>seconds</span></p>
    </div>
    <div class="header-elements">
      <div class="list-icons"> <a class="list-icons-item" data-action="collapse"></a> <a class="list-icons-item" data-action="reload"></a> </div>
    </div>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-md-12" style="text-align: center;">
        <h4> <span style="font-size: 13px; font-weight: 500; margin-right: 15px;">Wednesday</span>November 12, 2014 </h4>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12" style="text-align: center;"> <span style="font-size: 13px; font-weight: 500; margin-right: 15px;">Location</span><span class="text-muted">Johar Town Lahore,Pakistan <i class="icon-location3"></i></span> </div>
    </div>
    <div class="row" style="margin-top: 35px; text-align:center;">
      <div class="col-md-12" > <a href="javascript:;" class="btn btn-light legitRipple" id="clock_in_modal" data-toggle="modal" data-target="#clock_modal">CLOCK IN</a> <a href="javascript:;" id="clock_out_btn" class="btn btn-light legitRipple">CLOCK OUT</a> </div>
      <div class="col-md-12" id="clock_out_time" style="width: 50%;"> <span style="color: #FF7043;">You have not clocked in yet.Please clock in now</span> </div>
    </div>
    <div id="clock_in_time" style="display: none;">
      <div class="row">
        <div class="col-md-4 offset-md-4"> <span style="margin-left: 10px;">@ 10:50am</span> <span class="pull-right" style="margin-right: 20px;">@ 12:30pm</span> </div>
      </div>
    </div>
    <div class="row" style="margin-top: 40px;">
      <div class="col-md-12" style="text-align: center;">
        <h5 style="font-weight: 500; margin-bottom: 0;">Current Shifts</h5>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-12">
         
        <ul class="media-list media-list-linked">
          <li style="list-style: none;">
            <div class="media"> 
              <!--  <div class="mr-3">
                                        <div class="media-title font-weight-semibold">Shift Time</div>
                                    </div> -->
              <div class="media-body">
                <div class="media-title font-weight-semibold">Shift Time</div>
              </div>
              <div class="media-body">
                <div class="media-title font-weight-semibold">Client</div>
              </div>
              <div class="media-body">
                <div class="media-title font-weight-semibold">Location</div>
              </div>
              <div class="media-body text-center">
                <div class="media-title font-weight-semibold">Charting Status</div>
              </div>
              <div class="ml-3">
                <div class="media-title font-weight-semibold">Action</div>
              </div>
            </div>
          </li>
          <?php if (count($shift_detail) > 0 ) {
          foreach ($shift_detail as $detail) { ?> 
          <li>
            <div class="media">
              <div class="media-body"> <span class="text-muted"><?php echo date("H:ia",strtotime($detail->in_time))." - ".date('H:ia',strtotime($detail->out_time)); ?></span> 
                <!-- <i class="icon-primitive-dot mr-3 icon-2x" style="color: #00BCD4; font-size: 18px; float: right;"></i> --> 
              </div>
              <div class="media-body"> 
                <!-- <i class="icon-primitive-dot mr-3 icon-2x" style="color: #00BCD4; font-size: 18px; float: left;"></i> --> 
                <img src="<?php echo client_image($detail->client_id); ?>" class="rounded-circle" width="40" height="40" alt="">
                <div class="media-title font-weight-semibold"><?php echo $detail->title; ?></div>
              </div>
              <div class="media-body">
                <div class="media-title font-weight-semibold"> Johar Town Lahore,Pakistan <i class="icon-location3"></i> </div>
              </div>
              <div class="media-body">
                <div class="media-title font-weight-semibold">
                  <p><span class="badge badge-primary">Primary</span> &nbsp;&nbsp;&nbsp;<a href="">Start Charting</a></p>
                </div>
              </div>
              <div class="align-self-center ml-3"> <a href="#" class="text-default" data-toggle="collapse" data-target="#row_<?php echo $detail->id; ?>"> <i class="icon-menu7"></i> </a> </div>
            </div>
            <div class="collapse" id="row_<?php echo $detail->id; ?>">
              <div class="pb-1">
                <div class="navbar navbar-expand-xl navbar-light navbar-component rounded-top mb-0">
                  <div class="navbar-brand d-xl-none"> <a href="index.html" class="d-inline-block"> <img src="<?php echo base_url(); ?>assets/images/logo_dark.png" alt=""> </a> </div>
                  <div class="d-xl-none">
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-demo-light"> <i class="icon-menu"></i> </button>
                  </div>
                  <div class="navbar-collapse collapse" id="navbar-demo-light">
                    <ul class="nav navbar-nav">
                      <li class="nav-item dropdown"> <a href="#client_bio_<?php echo $detail->id; ?>" class="sub_car_pane navbar-nav-link active" data-toggle="tab"> <i class="icon-calendar3 mr-2"></i> Client Bio </a> </li>
                      <li class="nav-item dropdown"> <a href="#medication_list_<?php echo $detail->id; ?>" class="sub_car_pane navbar-nav-link" data-toggle="tab"> <i class="icon-gear mr-2"></i> Medication List </a> </li>
                      <li class="nav-item dropdown"> <a href="#diet_and_allergies_<?php echo $detail->id; ?>" class="sub_car_pane navbar-nav-link" data-toggle="tab"> <i class="icon-collaboration mr-2"></i> Dietry and Allergies </a> </li>
                      <li class="nav-item dropdown"> <a href="#appiontment_calender_<?php echo $detail->id; ?>" class="sub_car_pane navbar-nav-link" data-toggle="tab"> <i class="icon-users4 mr-2"></i> Appointment Calender </a> </li>
                      <li class="nav-item dropdown"> <a href="#client_vitals_<?php echo $detail->id; ?>" class="sub_car_pane navbar-nav-link" data-toggle="tab"> <i class="icon-collaboration mr-2"></i> Client Vitals </a> </li>
                      <li class="nav-item dropdown"> <a href="#notice_board_<?php echo $detail->id; ?>" class="sub_car_pane navbar-nav-link" data-toggle="tab"> <i class="icon-collaboration mr-2"></i> Notice Board </a> </li>
                      <li class="nav-item dropdown"> <a href="#shopping_list_<?php echo $detail->id; ?>" class="sub_car_pane navbar-nav-link" data-toggle="tab"> <i class="icon-vcard mr-2"></i> Shopping List </a> </li>
                      <li class="nav-item dropdown"> <a href="#photos_music_<?php echo $detail->id; ?>" class="sub_car_pane navbar-nav-link" data-toggle="tab"> <i class="icon-users4 mr-2"></i> Photos and Favorite Music </a> </li>
                    </ul>
                  </div>
                </div>
                <div class="card card-body border-top-0 rounded-0 rounded-bottom tab-content" >
                  <div class="tab-pane fade active show" id="client_bio_<?php echo $detail->id; ?>">
                    <?php include(APPPATH."views/caregiver/currentshifts/inc/client_bio.php"); ?>
                  </div>
                  <div class="tab-pane fade" id="medication_list_<?php echo $detail->id; ?>">
                    <?php include(APPPATH."views/caregiver/currentshifts/inc/medication_list.php"); ?>
                  </div>
                  <div class="tab-pane fade" id="diet_and_allergies_<?php echo $detail->id; ?>">
                    <?php include(APPPATH."views/caregiver/currentshifts/inc/diet_and_allergies.php"); ?>
                  </div>
                  <div class="tab-pane fade" id="appiontment_calender_<?php echo $detail->id; ?>">
                    <?php include(APPPATH."views/caregiver/currentshifts/inc/appiontment_calender.php"); ?>
                  </div>
                  <div class="tab-pane fade" id="client_vitals_<?php echo $detail->id; ?>">
                    <?php include(APPPATH."views/caregiver/currentshifts/inc/client_vitals.php"); ?>
                  </div>
                  <div class="tab-pane fade" id="notice_board_<?php echo $detail->id; ?>">
                    <?php include(APPPATH."views/caregiver/currentshifts/inc/notice_board.php"); ?>
                  </div>
                  <div class="tab-pane fade" id="shopping_list_<?php echo $detail->id; ?>">
                    <?php include(APPPATH."views/caregiver/currentshifts/inc/shopping_list.php"); ?>
                  </div>
                  <div class="tab-pane fade" id="photos_music_<?php echo $detail->id; ?>">
                    <?php include(APPPATH."views/caregiver/currentshifts/inc/photos_music.php"); ?>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <?php } }?>
        </ul>
        
      </div>
    </div>
    
    
  </div>
</div>


<div id="clock_modal" class="modal fade" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div style="margin: 0 auto;">
          <h1 class="card-title" style="font-size: 44px; font-weight: 400; color: #555;"> <i style="font-size: 29px;" class="icon-alarm mr-3 icon-2x"></i> <?php echo date('H:i:s'); ?> </h1>
          <p style="margin-left: 65px; font-size: 13px;"><span style="padding-right: 15px;">hours</span><span
                    style="padding-right: 15px;">minutes</span><span>seconds</span></p>
        </div>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12" style="text-align: center;">
            <h4> <span style="font-size: 13px; font-weight: 500; margin-right: 15px;">Wednesday</span> November 12, 2014 </h4>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12" style="text-align: center;"> <span style="font-size: 13px; font-weight: 500; margin-right: 15px;">Location</span><span class="text-muted">Johar Town Lahore,Pakistan <i class="icon-location3"></i></span> </div>
        </div>
        <div class="row">
          <div class="col-md-10 offset-md-1">
            <li class="media" style="position: relative;top: 30px; width: 90%;margin: 35px auto;">
              <div class="mr-3" style="margin-top: 10px;"> <span><b>Shift time</b></span> <span style="margin: auto 10px;">10:30am - 12:30pm</span> </div>
              <div class="media-body" style="text-align: center; margin-top: 10px;"> <span><i class="icon-primitive-dot mr-3 icon-2x" style="color: #00BCD4; font-size:18px;"></i></span> </div>
              <div> <span><a href="#"><img src="http://localhost/senior-agency-care/assets/images/userimg/face8.jpg" class="rounded-circle" width="40" height="40" alt=""></a></span><span style="margin: auto 10px;">James Alexander</span> </div>
            </li>
          </div>
        </div>
      </div>
      <div class="modal-footer" style="margin-top: 20px; ">
        <button type="submit" id="btn_clock_in" onclick="clock_in()" style="background-color: #4CAF50;color: #ffffff;" class="btn btn-ladda btn-ladda-progress" data-dismiss="modal" data-style="zoom-in" data-spinner-size="20"><span class="ladda-label">CLOCK IN</span></button>
        <button type="button" class="btn btn-default btn-link" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>


<div id="update_modal" class="modal fade" tabindex="-2">
  <div class="modal-dialog">
    <div class="modal-content" id="update_modal_content">
      
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
$(".sub_car_pane").on("click", function(){
	$("#navbar-demo-light").removeClass("show");
});     

$('#btn_clock_in').click(function(){
    if ($('#clock_in_time').css("display","none")) {
        $('#clock_out_time').css("display","none");
        $("#clock_out_btn").css({'background-color' : '#4CAF50', 'color' : '#fff'});
        $('#clock_in_time').css("display","block");
        $('#clock_in_modal').removeAttr('data-target');
    }
});
  function clock_in(){

  }

    </script>
<?php include(APPPATH."views/caregiver/inc/footer.php"); ?>
