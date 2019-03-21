<?php
include(APPPATH."views/agency/inc/header.php");?>

<div class="row">
  <div class="col-md-12"> 
    <div class="card">
      <div class="row" style="padding: 12px;">
        <div class="col-md-3" style="text-align: center; margin: 5px 0px;">
            <div class="btn-group">
                <a href="#" class="btn btn-light legitRipple"><i class="icon-arrow-left22"></i></a>
                <a href="#" class="btn btn-light legitRipple"><i class="icon-arrow-right22"></i></a>
                <a style="margin-left: 12px; font-size: 12px;" href="#" class="btn btn-light legitRipple">Today</a>
            </div>
        </div>
        <div class="col-md-6" style="text-align: center; margin: 5px 0px;">
          <button type="button" class="btn btn-light daterange-predefined">
            <i class="icon-calendar22 mr-2"></i>
            <span></span>
          </button>
        </div>
        <div class="col-md-3" style="text-align: center; margin: 5px 0px;">
            <div class="btn-group">
                <a style="font-size: 12px;" href="#" class="btn btn-light legitRipple">Month</a>
                <a style="font-size: 12px;" href="#" class="btn btn-light legitRipple">Week</a>
                <a style="font-size: 12px;" href="#" class="btn btn-light legitRipple">Day</a>
            </div>
        </div>
      </div>
    </div>
    <!--<div class="card">
      <div class="row" style="padding: 12px; text-align: center;">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-6" align="right">
              <div class="form-group" style="width:60%;">
                <select class="form-control select" data-fouc id="assign_over_time_rules_select">
                  <option value="AZ">ASSIGN OVERTIME/HOLIDAY HRS RULES</option>
                </select>
                
              </div>
              </div>
              <div class="col-md-6" align="left"><br /><label style="font-size: 12px; color: #ff7043;">Not Set! Set up holiday and overtime rules to properly calculate timesheets</label></div>
          </div>
        </div>
      </div>
    </div>-->
    <div class="card">
      <div class="row" style="margin-top: 40px;">
        <div class="col-md-4 offset-md-4" style="text-align: center;">
          <h6 style="font-size: 12px; color: #ff7043;">Clients not scheduled<span style="margin-left: 6px;" class="badge badge-warning badge-pill"><?php echo count($notScheduledClients); ?></span></h6>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="datatable-scroll">
            <table class="table" id="main-datatable">
              <thead>
                <tr>
                  <!--<th>First Name</th>
                  <th>Last Name</th>
                  <th>Mobile Number</th>
                  <th>Email Address</th>-->
                  <th>&nbsp;</th>
                  <th class="text-center" >&nbsp;</th>
                </tr>
              </thead>
              <tbody>
                <?php if(count($notScheduledClients)>0): ?>
                <?php foreach($notScheduledClients as $rowKey=>$rowVal): ?>
                <tr>
                  <!--<td><span><strong style="font-weight: 400;"><?php echo $rowVal->first_name; ?></strong></span></td>
                  <td><span><strong style="font-weight: 400;"><?php echo $rowVal->last_name; ?></strong></span></td>
                  <td><span><strong style="font-weight: 400;"><?php echo $rowVal->mobile_number; ?></strong></span></td>
                  <td><span><strong style="font-weight: 400;"><?php echo $rowVal->email_address; ?></strong></span></td>-->
                  <td><li class="media" style="list-style: none;">
                      <div class="mr-3" align="center"> <a href="<?php echo site_url("agency/clients/client_profile/".$rowVal->id.""); ?>" target="_blank"> <img src="<?php echo client_image($rowVal->id); ?>" class="rounded-circle" width="40" height="40" alt=""> </a>
                        <?php if(isset($rowVal->linked_profile_detail)): ?>
                        <a href="<?php echo site_url("agency/clients/client_profile/".$rowVal->linked_profile_detail->id.""); ?>"> <img src="<?php echo client_image($rowVal->id); ?>" class="rounded-circle" width="40" height="40" alt=""> </a>
                        <?php endif; ?>
                      </div>
                    </li></td>
                  <td class="text-center" style="float:right;"><div class="align-self-center ml-3">
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
      <div class="row" style="margin-top: 40px;">
        <div class="col-md-4 offset-md-4" style="text-align: center;">
          <h6 style="font-size: 12px; color: #4caf50;">Scheduled Clients<span style="margin-left: 6px;" class="badge badge-success badge-pill"><?php echo count($scheduledClients); ?></span></h6>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="datatable-scroll">
            <table class="table" id="main-datatable1">
              <thead>
                <tr>
                  <!--<th>First Name</th>
                  <th>Last Name</th>
                  <th>Mobile Number</th>
                  <th>Email Address</th>-->
                  <th></th>
                  <th class="text-center"></th>
                </tr>
              </thead>
              <tbody>
                <?php if(count($scheduledClients)>0): ?>
                <?php foreach($scheduledClients as $rowKey1=>$rowVal1): ?>
                <tr>
                  <!--<td><span><strong style="font-weight: 400;"><?php echo $rowVal1->first_name; ?></strong></span></td>
                  <td><span><strong style="font-weight: 400;"><?php echo $rowVal1->last_name; ?></strong></span></td>
                  <td><span><strong style="font-weight: 400;"><?php echo $rowVal1->mobile_number; ?></strong></span></td>
                  <td><span><strong style="font-weight: 400;"><?php echo $rowVal1->email_address; ?></strong></span></td>-->
                  <td><li class="media" style="list-style: none;">
                      <div class="mr-3" align="center"> <a href="<?php echo site_url("agency/clients/client_profile/".$rowVal1->id.""); ?>" target="_blank"> <img src="<?php echo client_image($rowVal1->id); ?>" class="rounded-circle" width="40" height="40" alt=""> </a>
                        <?php if(isset($rowVal1->linked_profile_detail)): ?>
                        <a href="<?php echo site_url("agency/clients/client_profile/".$rowVal1->linked_profile_detail->id.""); ?>"> <img src="<?php echo client_image($rowVal1->id); ?>" class="rounded-circle" width="40" height="40" alt=""> </a>
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
$.extend( $.fn.dataTable.defaults, {
	autoWidth: false,
	columnDefs: [{ 
		orderable: false,
		width: 100,
		targets: [ 5 ]
	}],
	dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
	language: {
		search: '<span>Filter:</span> _INPUT_',
		searchPlaceholder: 'Type to filter...',
		lengthMenu: '<span>Show:</span> _MENU_',
		paginate: { 'first': 'First', 'last': 'Last', 'next': $('html').attr('dir') == 'rtl' ? '&larr;' : '&rarr;', 'previous': $('html').attr('dir') == 'rtl' ? '&rarr;' : '&larr;' }
	}
});
$("#main-datatable").DataTable();
$("#main-datatable1").DataTable();
$("#assign_over_time_rules_select").select2();
</script>
<?php include(APPPATH."views/agency/inc/footer.php");?>
