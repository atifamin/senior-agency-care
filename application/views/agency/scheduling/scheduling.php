<?php include(APPPATH."views/agency/inc/header.php");?>
<?php //print_array($relationshipDetails); ?>
<style>
.navbar-light .active>.navbar-nav-link, .navbar-light .navbar-nav-link.active, .navbar-light .navbar-nav-link.show, .navbar-light .show>.navbar-nav-link {
	background-color: #f1f0f0;
}
</style>

<div class="card">
  <div class="card-header bg-white header-elements-sm-inline" style="background-color: #fafafa!important; padding: 6px 6px 6px 6px;">
    <h6 style="font-size: 12px; color: #FEA024; margin: 0 auto; text-align: center;">Clients not scheduled<span style="margin-left: 6px;" class="badge badge-warning badge-pill">65</span></h6>
    <div class="header-elements">
      <form action="#">
        <div class="form-group-feedback form-group-feedback-left">
          <input type="text" class="form-control form-control-sm" placeholder="Search">
          <div class="form-control-feedback form-control-feedback-lg"> <i style="font-size: 12px; color: lightgray;" class="icon-search4"></i> </div>
        </div>
      </form>
    </div>
  </div>
  <?php if(isset($relationshipDetails->linked_profile_detail)){ ?>
  <div class="row" style="margin-top: 10px; padding: 10px;">
    <div class="offset-md-4 col-md-4">
      <ul class="nav nav-tabs nav-tabs-solid nav-justified border-0">
        <li class="nav-item" onclick="window.location = '<?php echo site_url("agency/scheduling/view/".$relationshipDetails->id.""); ?>'"><a href="javascript:;" class="nav-link legitRipple <?php if($client_id==$relationshipDetails->id){echo 'active';} ?>" data-toggle="tab"><img src="<?php echo base_url("assets/images/placeholders/avatar.png"); ?>" class="rounded-circle mr-1" width="25" height="25" alt=""><?php echo $relationshipDetails->first_name." ".$relationshipDetails->last_name; ?></a></li>
        <li class="nav-item" onclick="window.location = '<?php echo site_url("agency/scheduling/view/".$relationshipDetails->linked_profile_detail->id.""); ?>'"><a href="javascript:;" class="nav-link legitRipple <?php if($client_id==$relationshipDetails->linked_profile_detail->id){echo 'active';} ?>" data-toggle="tab"><img src="<?php echo base_url("assets/images/placeholders/avatar.png"); ?>" class="rounded-circle mr-1" width="25" height="25" alt=""> <?php echo $relationshipDetails->linked_profile_detail->first_name." ".$relationshipDetails->linked_profile_detail->last_name; ?></a></li>
      </ul>
    </div>
  </div>
  <?php } ?>
  <ul class="media-list media-list-linked">
    <li>
      <div class="media">
        <div class="mr-3"><img src="<?php echo base_url("assets/images/placeholders/avatar.png"); ?>" class="rounded-circle" width="40" height="40" alt=""></div>
        <div class="media-body">
          <div class="media-title font-weight-semibold"><?php echo $client->first_name." ".$client->last_name; ?></div>
          <span class="text-muted">Client</span> </div>
        <div class="align-self-center ml-3"> <a href="#" class="text-default" data-toggle="collapse" data-target="#james3"> <i class="icon-menu7"></i> </a> </div>
      </div>
      <div class="collapse show" id="james3">
        <div class="pb-1">
          <div class="tab-content">
            <div class="tab-pane fade show active" id="james1">
              <div class="navbar navbar-expand-xl navbar-light navbar-component rounded-top mb-0">
                <div class="navbar-brand d-xl-none"> <a href="index.html" class="d-inline-block"> <img src="<?php echo base_url(); ?>assets/images/logo_dark.png" alt=""> </a> </div>
                <div class="d-xl-none">
                  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-demo-light"> <i class="icon-menu"></i> <br />
                  <small class="text-muted">Open</small> </button>
                </div>
                <div class="navbar-collapse collapse" id="navbar-demo-light">
                  <ul class="nav navbar-nav">
                    <li class="nav-item dropdown"> <a href="#schedule" class="sub_car_pane navbar-nav-link active" data-toggle="tab"> <i class="icon-calendar3 mr-2"></i> Schedule </a> </li>
                    <li class="nav-item dropdown"> <a href="#medication_list" class="sub_car_pane navbar-nav-link" data-toggle="tab"> <i class="icon-gear mr-2"></i> Medication List </a> </li>
                    <li class="nav-item dropdown"> <a href="#dietry_needs" class="sub_car_pane navbar-nav-link" data-toggle="tab"> <i class="icon-collaboration mr-2"></i> Dietry Needs </a> </li>
                    <li class="nav-item dropdown"> <a href="#appointment_calender" class="sub_car_pane navbar-nav-link" data-toggle="tab"> <i class="icon-users4 mr-2"></i> Appointment Calender </a> </li>
                    <li class="nav-item dropdown"> <a href="#vital_reports" class="sub_car_pane navbar-nav-link" data-toggle="tab"> <i class="icon-collaboration mr-2"></i> Vital Reports </a> </li>
                    <li class="nav-item dropdown"> <a href="#notice_board" class="sub_car_pane navbar-nav-link" data-toggle="tab"> <i class="icon-collaboration mr-2"></i> Notice Board </a> </li>
                    <li class="nav-item dropdown"> <a href="#shopping_list" class="sub_car_pane navbar-nav-link" data-toggle="tab"> <i class="icon-vcard mr-2"></i> Shopping List </a> </li>
                    <li class="nav-item dropdown"> <a href="#client_bio" class="sub_car_pane navbar-nav-link" data-toggle="tab"> <i class="icon-users4 mr-2"></i> Client Bio </a> </li>
                  </ul>
                </div>
              </div>
              <div class="card card-body border-top-0 rounded-0 rounded-bottom tab-content" >
                <div class="tab-pane fade active show" id="schedule">
                  <?php include(APPPATH."views/agency/scheduling/inc/scheduling.php"); ?>
                </div>
                <div class="tab-pane fade" id="medication_list">
                  <?php include(APPPATH."views/agency/scheduling/inc/medication_list.php"); ?>
                </div>
                <div class="tab-pane fade" id="dietry_needs">
                  <?php include(APPPATH."views/agency/scheduling/inc/dietry_needs.php"); ?>
                </div>
                <div class="tab-pane fade" id="appointment_calender">
                  <?php include(APPPATH."views/agency/scheduling/inc/appointment_calender.php"); ?>
                </div>
                <div class="tab-pane fade" id="vital_reports">
                  <?php include(APPPATH."views/agency/scheduling/inc/vital_reports.php"); ?>
                </div>
                <div class="tab-pane fade" id="notice_board">
                  <?php include(APPPATH."views/agency/scheduling/inc/notice_board.php"); ?>
                </div>
                <div class="tab-pane fade" id="shopping_list">
                  <?php include(APPPATH."views/agency/scheduling/inc/shopping_list.php"); ?>
                </div>
                <div class="tab-pane fade" id="client_bio">
                  <?php include(APPPATH."views/agency/scheduling/inc/client_bio.php"); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </li>
  </ul>
</div>
<script>
$(".sub_car_pane").on("click", function(){
	$("#navbar-demo-light").removeClass("show");
});

// $('#james1_data').on('click',function(){
//   $("#james1").css("display","block");
//   $("#james2").css("display","none");
// });
// $('#james2_data').on('click',function(){
//   $("#james1").css("display","none");
//   $("#james2").css("display","block");
// });

$('#appointment_datatable, #appointment_datatable_1, #shopping_list_datatable, #shopping_list_datatable_1, #client_vital_datatable, #client_vital_datatable_1').DataTable({
    columnDefs: [{ 
        orderable: true,
        targets: [ 3 ]
    }],
    dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
    language: {
        search: '<span>Filter:</span> _INPUT_',
        searchPlaceholder: 'Type to filter...',
        lengthMenu: '<span>Show:</span> _MENU_',
        paginate: { 'first': 'First', 'last': 'Last', 'next': $('html').attr('dir') == 'rtl' ? '&larr;' : '&rarr;', 'previous': $('html').attr('dir') == 'rtl' ? '&rarr;' : '&larr;' }
    }
});
</script>
<?php include(APPPATH."views/agency/inc/footer.php");?>
