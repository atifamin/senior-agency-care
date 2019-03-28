<?php include(APPPATH."views/agency/inc/header.php");?>
<style>
.datatable-header, .dataTables_info, thead {
	display: none;
}
</style>
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="row" style="padding: 12px;">
        <div class="col-md-3" style="text-align: center; margin: 5px 0px;">
          <div class="btn-group"> <a href="#" class="btn btn-light legitRipple"><i class="icon-arrow-left22"></i></a> <a href="#" class="btn btn-light legitRipple"><i class="icon-arrow-right22"></i></a> <a style="margin-left: 12px; font-size: 12px;" href="#" class="btn btn-light legitRipple">Today</a> </div>
        </div>
        <div class="col-md-6" style="text-align: center; margin: 5px 0px;">
          <button type="button" class="btn btn-light daterange-predefined"> <i class="icon-calendar22 mr-2"></i> <span></span> </button>
        </div>
        <div class="col-md-3" style="text-align: center; margin: 5px 0px;">
          <div class="btn-group"> <a style="font-size: 12px;" href="#" class="btn btn-light legitRipple">Month</a> <a style="font-size: 12px;" href="#" class="btn btn-light legitRipple">Week</a> <a style="font-size: 12px;" href="#" class="btn btn-light legitRipple">Day</a> </div>
        </div>
      </div>
    </div>
    <div class="card"> 
      <div class="card-header bg-white header-elements-sm-inline" style="background-color: #fafafa!important; padding: 6px 6px 6px 6px;">
        <h6 style="font-size: 12px; color: #FEA024; margin: 0 auto; text-align: center;">Clients not scheduled<span style="margin-left: 6px;" class="badge badge-warning badge-pill"><?php echo count($notScheduledClients); ?></span></h6>
        <div class="header-elements">
          <form action="#">
            <div class="form-group-feedback form-group-feedback-left">
              <input type="text" class="form-control form-control-sm" placeholder="Search">
              <div class="form-control-feedback form-control-feedback-lg"> <i style="font-size: 12px; color: lightgray;" class="icon-search4"></i> </div>
            </div>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="datatable-scroll">
            <table class="table" id="main-datatable">
              <tbody>
                <?php if(count($notScheduledClients)>0): ?>
                <?php foreach($notScheduledClients as $rowKey=>$rowVal): ?>
                <tr>
                  <td><li class="media" style="list-style: none;">
                      <div class="mr-3" align="center"> <a href="<?php echo site_url("agency/clients/client_profile/".$rowVal->id.""); ?>" target="_blank"> <img src="<?php echo client_image($rowVal->id); ?>" class="rounded-circle" width="40" height="40" alt=""> </a>&nbsp;&nbsp;<strong style="font-weight:400;"><?php echo $rowVal->first_name." ".$rowVal->last_name; ?></strong>
                        <?php if(isset($rowVal->linked_profile_detail)): ?>
                        <a href="<?php echo site_url("agency/clients/client_profile/".$rowVal->linked_profile_detail->id.""); ?>"> <img src="<?php echo client_image($rowVal->linked_profile_detail->id); ?>" class="rounded-circle" width="40" height="40" alt=""> </a>&nbsp;&nbsp;<strong style="font-weight:400;"><?php echo $rowVal->linked_profile_detail->first_name." ".$rowVal->linked_profile_detail->last_name; ?></strong>
                        <?php endif; ?>
                      </div>
                    </li></td>
                  <td class="text-center" ><div class="align-self-center ml-3" style="float:right;">
                      <div class="list-icons">
                        <div class="list-icons-item dropdown"> <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-menu9"></i></a>
                          <div class="dropdown-menu dropdown-menu-right" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-158px, -116px, 0px);"> <a href="<?php echo site_url("agency/scheduling/view/".$rowVal->id.""); ?>" class="dropdown-item"><i class="icon-menu7"></i>View Schedule</a> </div>
                        </div>
                      </div>
                    </div></td>
                </tr>
                <?php endforeach; endif; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="card"> 
      <!--<div class="row">
        <div class="col-md-12">
          <div class="bg-light font-weight-semibold py-2" align="center">
            <h6 style="font-size: 12px; color: #4caf50;margin: 0px;" class="">Scheduled Clients<span style="margin-left: 6px;" class="badge badge-success badge-pill"><?php echo count($scheduledClients); ?></span></h6>
          </div>
        </div>
      </div>-->
      <div class="card-header bg-white header-elements-sm-inline" style="background-color: #fafafa!important; padding: 6px 6px 6px 6px;">
        <h6 style="font-size: 12px; color: #4caf50; margin: 0 auto; text-align: center;">Scheduled Clients<span style="margin-left: 6px;" class="badge badge-success badge-pill"><?php echo count($scheduledClients); ?></span></h6>
        <div class="header-elements">
          <form action="#">
            <div class="form-group-feedback form-group-feedback-left">
              <input type="text" class="form-control form-control-sm" placeholder="Search">
              <div class="form-control-feedback form-control-feedback-lg"> <i style="font-size: 12px; color: lightgray;" class="icon-search4"></i> </div>
            </div>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="datatable-scroll">
            <table class="table" id="main-datatable1">
              <tbody>
                <?php if(count($scheduledClients)>0): ?>
                <?php foreach($scheduledClients as $rowKey1=>$rowVal1): ?>
                <tr>
                  <td><li class="media" style="list-style: none;">
                      <div class="mr-3" align="center"> <a href="<?php echo site_url("agency/clients/client_profile/".$rowVal1->id.""); ?>" target="_blank"> <img src="<?php echo client_image($rowVal1->id); ?>" class="rounded-circle" width="40" height="40" alt=""> </a>&nbsp;&nbsp;<strong style="font-weight:400;"><?php echo $rowVal1->first_name." ".$rowVal1->last_name; ?></strong>
                        <?php if(isset($rowVal1->linked_profile_detail)): ?>
                        <a href="<?php echo site_url("agency/clients/client_profile/".$rowVal1->linked_profile_detail->id.""); ?>"> <img src="<?php echo client_image($rowVal1->linked_profile_detail->id); ?>" class="rounded-circle" width="40" height="40" alt=""> </a>&nbsp;&nbsp;<strong style="font-weight:400;"><?php echo $rowVal1->linked_profile_detail->first_name." ".$rowVal1->linked_profile_detail->last_name; ?></strong>
                        <?php endif; ?>
                      </div>
                    </li></td>
                  <td class="text-center" style="float:right;"><div class="align-self-center ml-3">
                      <div class="list-icons">
                        <div class="list-icons-item dropdown"> <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="true"><i class="icon-menu9"></i></a>
                          <div class="dropdown-menu dropdown-menu-right" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-158px, -116px, 0px);"> <a href="<?php echo site_url("agency/scheduling/view/".$rowVal1->id.""); ?>" class="dropdown-item"><i class="icon-menu7"></i>View Schedule</a> </div>
                        </div>
                      </div>
                    </div></td>
                </tr>
                <?php endforeach; endif; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--<script src="<?php echo base_url(); ?>assets/js/demo_pages/datatables_basic.js"></script> --> 
<script src="<?php echo base_url(); ?>assets/js/plugins/tables/datatables/datatables.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/demo_pages/datatables_responsive.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/plugins/ui/moment/moment.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/daterangepicker.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/anytime.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/pickadate/picker.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/pickadate/picker.date.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/pickadate/picker.time.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/pickadate/legacy.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/plugins/notifications/jgrowl.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/demo_pages/picker_date.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/plugins/forms/selects/select2.min.js"></script> 
<script>
$("#main-datatable").DataTable({
	autoWidth: false,
	columnDefs: [{ 
		orderable: false,
		width: 100,
		targets: [ 1 ]
	}],
	dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
	language: {
		search: '<span>Filter:</span> _INPUT_',
		searchPlaceholder: 'Type to filter...',
		lengthMenu: '<span>Show:</span> _MENU_',
		paginate: { 'first': 'First', 'last': 'Last', 'next': $('html').attr('dir') == 'rtl' ? '&larr;' : '&rarr;', 'previous': $('html').attr('dir') == 'rtl' ? '&rarr;' : '&larr;' }
	}
});
$("#main-datatable1").DataTable({
	autoWidth: false,
	columnDefs: [{ 
		orderable: false,
		width: 100,
		targets: [ 1 ]
	}],
	dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
	language: {
		search: '<span>Filter:</span> _INPUT_',
		searchPlaceholder: 'Type to filter...',
		lengthMenu: '<span>Show:</span> _MENU_',
		paginate: { 'first': 'First', 'last': 'Last', 'next': $('html').attr('dir') == 'rtl' ? '&larr;' : '&rarr;', 'previous': $('html').attr('dir') == 'rtl' ? '&rarr;' : '&larr;' }
	}
});
$("#assign_over_time_rules_select").select2();
</script>
<?php include(APPPATH."views/agency/inc/footer.php");?>
