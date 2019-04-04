<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/daterangepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo_pages/picker_date.js"></script>
<div class="row">
  <div class="col-md-12">
    <div class="row">
      <div class="col-md-12" style="text-align: center;">
        <a href="javascript:;" data-toggle="modal"
           data-target="#modal_new_appointment">Create new appointment
            <button style="background-color: #f5f5f5; margin-left: 15px;" type="button" class="btn alpha-primary text-primary-800 btn-icon rounded-round ml-2 legitRipple">
                <i style="color: #555;" class="icon-plus3"></i>
            </button>
        </a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <table class="table datatable-basic" id="appointment_datatable">
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
                      <a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu9"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item"><i class="icon-square-right"></i>Edit Appointment</a>
                          <a href="#" class="dropdown-item"><i class="icon-bin2"></i>Delete Appointment</a>
                          <a href="#" class="dropdown-item"><i class="icon-square-down"></i>End Appointment</a>
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


<!-- ==========Add Appointment Modal============= -->
<div id="modal_new_appointment" class="modal fade" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="add_client_medication_form">
        <div class="modal-header">
          <h5 class="modal-title" style="margin: 0 auto;">Create a new appointment</h5>
          <div>
            <li class="media">
              <div class="mr-3" style="margin-right: .55rem!important;"> <a href="#"> <img src="<?php echo base_url(); ?>assets/images/userimg/face10.jpg" class="rounded-circle" width="40" height="40" alt=""> </a> </div>
              <div class="media-body">
                <div class="media-title font-weight-semibold" style="font-size: 12px; margin-bottom: 0px !important;">Bastin Miller</div>
                <span class="text-muted" style="font-size: 12px;">Total Care</span> </div>
            </li>
          </div>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-8 offset-md-2">
              <div class="form-group">
                <label>Add appointment type</label>
                <select class="form-control select-icons" id="therapy_type" onchange="setTherapyType()" data-placeholder="Select the type of appointment" data-fouc>
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
                <div class="input-group"> <span class="input-group-prepend"> <span class="input-group-text"><i class="icon-alarm"></i></span> </span>
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
                  <input type="text" class="form-control form-control-sm" placeholder="Add appointment location">
                  <div class="form-control-feedback form-control-feedback-sm"> <i class="icon-pin-alt"></i> </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8 offset-md-2">
              <div class="form-group pt-2">
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" id="appointment_calender_checkbox" class="form-check-input-styled" data-fouc>
                    Set reminder for caregiver </label>
                </div>
              </div>
            </div>
          </div>
          <div class="row" id="appointment_reminder_set" style="display: none;">
            <div class="col-md-12">
              <div class="row" id="appointment_set_reminder_doctor" style="display: none;">
                <div class="col-md-8 offset-md-2">
                  <div class="input-group"> <span class="input-group-prepend"> <span class="input-group-text"><i class="icon-alarm"></i></span> </span>
                    <select class="form-control multiselect" data-fouc>
                      <option value="dr_2.0">2.0 Hrs before appointment</option>
                      <option value="dr_2.5">2.5 Hrs before appointment</option>
                      <option value="dr_3.0">3.0 Hrs before appointment</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row" id="appointment_set_reminder_therapy" style="display: none;">
                <div class="col-md-8 offset-md-2">
                  <div class="input-group"> <span class="input-group-prepend"> <span class="input-group-text"><i class="icon-alarm"></i></span> </span>
                    <select class="form-control multiselect" data-fouc>
                      <option value="th_30">30 Minutes before appointment</option>
                      <option value="th_1.0">1.0 Hrs before appointment</option>
                      <option value="th_1.5">1.5 Hrs before appointment</option>
                      <option value="th_2.0">2.0 Hrs before appointment</option>
                      <option value="th_3.0">3.0 Hrs before appointment</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="row" id="appointment_set_reminder" style="display: none;">
                <div class="col-md-8 offset-md-2">
                    <div class="input-group">
                        <span class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-alarm"></i></span>
                        </span>
                        <select class="form-control multiselect" data-fouc>
                            <option value="dr_2.0">2.0 Hrs before appointment</option>
                            <option value="dr_2.5">2.5 Hrs before appointment</option>
                            <option value="dr_3.0">3.0 Hrs before appointment</option>
                        </select>
                    </div>
                </div>
            </div> --> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn bg-primary btn-ladda btn-ladda-progress" data-style="zoom-in" data-spinner-size="20"> <span class="ladda-label">Done</span> </button>
        </div>
      </form>
    </div>
  </div>
</div>

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
function setTherapyType(){
    var type = $("#therapy_type").val();
    if(type == "doctor_appointment"){
        $("#therapy_doc_name").css("display","block");
        $('#appointment_set_reminder_doctor').css('display','block');
        $('#appointment_set_reminder_therapy').css('display','none');
    }else if (type == "therapy_appointment"){
        $("#therapy_doc_name").css("display","none");
        $('#appointment_set_reminder_doctor').css('display','none');
        $('#appointment_set_reminder_therapy').css('display','block');
    }
} 
$('#appointment_calender_checkbox').click(function(){
  if($(this).prop("checked") == true){
      $("#appointment_reminder_set").css("display","block");
  }
  else if($(this).prop("checked") == false){
      $("#appointment_reminder_set").css("display","none");
  }
});
</script>