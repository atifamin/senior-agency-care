<?php
include(APPPATH."views/agency/inc/header.php");?>

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="row" style="margin-top: 40px;">
        <div class="col-md-4 offset-md-4" style="text-align: center;">
          <div class="input-group"> <span class="input-group-prepend"> <span class="input-group-text">
            <h5 style="font-size: 15px; font-weight: 500;">Week ending</h5>
            </span> </span>
            <input type="text" class="form-control daterange-basic" value="03/18/2013 - 03/23/2013">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="datatable-scroll">
            <table class="table" id="main-datatable">
              <thead>
                <tr>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Mobile Number</th>
                  <th>Email Address</th>
                  <th>Assigned Caregiver</th>
                  <th class="text-center">Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php if(count($clients)>0): ?>
                <?php foreach($clients as $rowKey=>$rowVal): ?>
                <tr>
                  <td><span><strong style="font-weight: 400;"><?php echo $rowVal->first_name; ?></strong></span></td>
                  <td><span><strong style="font-weight: 400;"><?php echo $rowVal->last_name; ?></strong></span></td>
                  <td><span><strong style="font-weight: 400;"><?php echo $rowVal->mobile_number; ?></strong></span></td>
                  <td><span><strong style="font-weight: 400;"><?php echo $rowVal->email_address; ?></strong></span></td>
                  <td><li class="media" style="list-style: none;">
                      <div class="mr-3" align="center">
                      	<a href="<?php echo site_url("agency/clients/client_profile/".$rowVal->id.""); ?>" target="_blank">
                        	<img src="<?php echo base_url("assets/images/placeholders/avatar.png"); ?>" class="rounded-circle" width="40" height="40" alt="">
                        </a>
                        <?php if(isset($rowVal->linked_profile_detail)): ?>
                        <a href="<?php echo site_url("agency/clients/client_profile/".$rowVal->linked_profile_detail->id.""); ?>">
                        	<img src="<?php echo base_url("assets/images/placeholders/avatar.png"); ?>" class="rounded-circle" width="40" height="40" alt="">
                        </a>
                        <?php endif; ?>
                      </div>
                    </li></td>
                  <td class="text-center"><div class="align-self-center ml-3">
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
</script>
<?php include(APPPATH."views/agency/inc/footer.php");?>
