<div class="row">
  <div class="col-md-12">
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
                        <a href="#"class="dropdown-item"><i class="icon-square-right"></i>Edit Vitals</a>
                        <a href="#" class="dropdown-item"><i class="icon-bin2"></i>Delete Vitals</a>
                        <a href="#" class="dropdown-item"><i class="icon-square-down"></i>End Vitals</a>
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

<!-- ==========Add Vitals Modal============= -->
<div id="modal_clients_vital" class="modal fade" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="add_client_medication_form">
        <div class="modal-header">
          <h5 class="modal-title" style="margin: 0 auto;">Add Client Vitals</h5>
          <div>
            <li class="media">
              <div class="mr-3" style="margin-right: .55rem!important;"> <a href="#"> <img src="<?php echo base_url(); ?>assets/images/userimg/face5.jpg" class="rounded-circle" width="40" height="40" alt=""> </a> </div>
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
                <label>Add date and time vitals were taken: </label>
                <div class="input-group"> <span class="input-group-prepend"> <span class="input-group-text"><i class="icon-alarm"></i></span> </span>
                  <input type="text" class="form-control daterange-time" value="" placeholder="Enter date and time vitals were taken">
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
                    Blood Pressure </label>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <input class="form-control" type="number" name="number" style="position: relative; bottom: 16px;">
            </div>
            <div class="col-md-2" style="text-align: center;">
              <label style="position: relative; top: 9px;">Over</label>
            </div>
            <div class="col-md-3">
              <input class="form-control" type="number" name="number" style="position: relative; bottom: 16px;">
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group pt-2">
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input-styled" data-fouc>
                    Breathing </label>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <input class="form-control" type="number" name="number" style="position: relative; bottom: 16px;">
            </div>
            <div class="col-md-2" style="text-align: center;">
              <label style="position: relative; top: 9px;">To</label>
            </div>
            <div class="col-md-3">
              <input class="form-control" type="number" name="number" style="position: relative; bottom: 16px;">
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group pt-2">
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input-styled" data-fouc>
                    Pulse </label>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <input class="form-control" type="number" name="number" style="position: relative; bottom: 16px;">
            </div>
            <div class="col-md-2" style="text-align: center;">
              <label style="position: relative; top: 9px;">To</label>
            </div>
            <div class="col-md-3">
              <input class="form-control" type="number" name="number" style="position: relative; bottom: 16px;">
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group pt-2">
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input-styled" data-fouc>
                    Temperature </label>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <input class="form-control" type="number" name="number" style="position: relative; bottom: 16px;">
            </div>
            <div class="col-md-2">
              <label style="position: relative; top: 9px;">Farenheight</label>
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
