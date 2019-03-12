<div class="row">
  <div class="col-md-12">
    <div class="row">
      <div class="col-md-12" style="text-align: center;"> <a href="javascript:;" onclick="addMedication()" data-toggle="modal" data-target="#modal_add_medication">Add a new medication
        <button style="background-color: #f5f5f5; margin-left: 15px;" type="button" class="btn alpha-primary text-primary-800 btn-icon rounded-round ml-2 legitRipple"><i style="color: #555;" class="icon-plus3"></i></button>
        </a> </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <table class="table datatable-basic" id="medication_list_datatable">
          <thead>
            <tr>
              <th>Medication</th>
              <th><i style="margin-right: 8px;" class="icon-aid-kit"></i>Qty of Medication</th>
              <th><i style="margin-right: 8px;" class="icon-menu7"></i>Times taken a day</th>
              <th><i style="margin-right: 8px;" class="icon-alarm"></i>When to take medication</th>
              <th><i style="margin-right: 8px;" class="icon-calendar3"></i>Time of day</th>
              <th><i style="margin-right: 8px;" class="icon-alarm"></i>Reminder</th>
              <th class="text-center">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><span class="text-muted">Add Med</span></td>
              <td><span class="text-muted">Add Qty</span></td>
              <td><span class="text-muted">Add Time</span></td>
              <td><span class="text-muted">Add when to take medicine</span></td>
              <td><span class="text-muted">Add time of day</span></td>
              <td><span class="text-muted">Set reminder</span></td>
              <td class="text-center"><div class="list-icons">
                  <div class="dropdown"> <a href="#" class="list-icons-item" data-toggle="dropdown"> <i class="icon-menu9"></i> </a>
                    <div class="dropdown-menu dropdown-menu-right"> <a href="#" class="dropdown-item"><i class="icon-square-right"></i> Edit Medication</a> <a href="#" class="dropdown-item"><i class="icon-bin2"></i> Delete Medication</a> <a href="#" class="dropdown-item"><i class="icon-square-down"></i> End Medication</a> <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a> </div>
                  </div>
                </div></td>
            </tr>
            <tr>
              <td><span class="text-muted">Add Med</span></td>
              <td><span class="text-muted">Add Qty</span></td>
              <td><span class="text-muted">Add Time</span></td>
              <td><span class="text-muted">Add when to take medicine</span></td>
              <td><span class="text-muted">Add time of day</span></td>
              <td><span class="text-muted">Set reminder</span></td>
              <td class="text-center"><div class="list-icons">
                  <div class="dropdown"> <a href="#" class="list-icons-item" data-toggle="dropdown"> <i class="icon-menu9"></i> </a>
                    <div class="dropdown-menu dropdown-menu-right"> <a href="#" class="dropdown-item"><i class="icon-square-right"></i> Edit Medication</a> <a href="#" class="dropdown-item"><i class="icon-bin2"></i> Delete Medication</a> <a href="#" class="dropdown-item"><i class="icon-square-down"></i> End Medication</a> <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a> </div>
                  </div>
                </div></td>
            </tr>
            <tr>
              <td><span class="text-muted">Add Med</span></td>
              <td><span class="text-muted">Add Qty</span></td>
              <td><span class="text-muted">Add Time</span></td>
              <td><span class="text-muted">Add when to take medicine</span></td>
              <td><span class="text-muted">Add time of day</span></td>
              <td><span class="text-muted">Set reminder</span></td>
              <td class="text-center"><div class="list-icons">
                  <div class="dropdown"> <a href="#" class="list-icons-item" data-toggle="dropdown"> <i class="icon-menu9"></i> </a>
                    <div class="dropdown-menu dropdown-menu-right"> <a href="#" class="dropdown-item"><i class="icon-square-right"></i> Edit Medication</a> <a href="#" class="dropdown-item"><i class="icon-bin2"></i> Delete Medication</a> <a href="#" class="dropdown-item"><i class="icon-square-down"></i> End Medication</a> <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a> </div>
                  </div>
                </div></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<div id="modal_add_medication" class="modal fade" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="add_client_medication_form">
        <div class="modal-header">
          <h5 class="modal-title" style="margin: 0 auto;">Add client medication</h5>
          <div>
            <li class="media">
              <div class="mr-3" style="margin-right: .55rem!important;"> <a href="#"> <img src="<?php echo base_url(); ?>assets/images/userimg/face22.jpg" class="rounded-circle" width="40" height="40" alt=""> </a> </div>
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
                <label>Medication name:</label>
                <input type="text" name="medication_name" class="form-control" placeholder="What medication is the client taking">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8 offset-md-2">
              <div class="form-group">
                <label>Medication dosage in Mg: </label>
                <br>
                <span class="text-muted">Add the required medication dosage</span>
                <input type="text" value="" class="form-control touchspin-empty" placeholder="Mg">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8 offset-md-2">
              <div class="form-group">
                <label>How many times a day is medication taken: </label>
                <br>
                <span class="text-muted">Add the frequency per day of dosage</span>
                <input type="text" value="" class="form-control touchspin-empty">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8 offset-md-2">
              <div class="form-group">
                <label>When is the medication taken</label>
                <br>
                <span class="text-muted">Select morning, evening or night</span>
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
              <label>What time is medication taken</label>
              <br>
              <span class="text-muted">Select what time is medication taken</span>
              <div class="input-group"> <span class="input-group-prepend"> <span class="input-group-text"><i class="icon-alarm"></i></span> </span>
                <input type="text" class="form-control pickatime" placeholder="select time">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8 offset-md-2">
              <div class="form-group pt-2">
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" id="medication_reminder_checkbox" class="form-check-input-styled" data-fouc>
                    Set reminder for caregiver </label>
                </div>
              </div>
            </div>
          </div>
          <div class="row" id="medication_set_reminder" style="display: none;">
            <div class="col-md-8 offset-md-2"> <span class="text-muted">Create a reminder for caregiver to give medication</span>
              <div class="input-group"> <span class="input-group-prepend"> <span class="input-group-text"><i class="icon-alarm"></i></span> </span>
                <input type="text" class="form-control pickatime" placeholder="select time">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn bg-primary btn-ladda btn-ladda-progress" data-style="zoom-in" data-spinner-size="20"> <span class="ladda-label">Done</span> </button>
        </div>
      </form>
    </div>
  </div>
</div>
