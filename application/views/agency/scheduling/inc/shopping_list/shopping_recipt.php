
      <form id="add_shopping_recipt" method="post">
        <div class="modal-header">
          <!-- <div class="col-md-3">
            <select name="status" class="form-control form-control-select2" data-fouc>
                <option value="Pending">Pending</option>
                <option value="Complete">Complete</option> 
            </select>
          </div> -->
          <h5 class="modal-title" style="margin: 0 auto;">Add Recipts</h5>
          <div>
            <li class="media" style="padding: unset; border: none;">
              <div class="mr-3" style="margin-right: .55rem!important;">
                <a href="#">
                  <img src="<?php echo client_image($client->id); ?>" class="rounded-circle" width="40" height="40" alt="">
                </a>
              </div>
              <div class="media-body">
                <div class="media-title font-weight-semibold" style="font-size: 12px; margin-bottom: 0px !important;"><?php echo $client->first_name." ".$client->last_name; ?></div>
                <span class="text-muted" style="font-size: 12px;">Total Care</span>
              </div>
            </li>
          </div>
        </div>
      
        <div class="modal-body">
          <div class="row">
            <div class="col-md-11 offset-md-1">
              <div class="form-group row">
                <label class="col-md-12"><i class="icon-attachment2" style="margin-right: 10px;"></i>Attach Reciept</label>
                <div class="col-lg-10">
                 <input type="file" class="form-input-styled" name="file" data-fouc>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="row">
            <div class="col-md-11 offset-md-1">
              <div class="form-group row">
                <label class="col-md-12">Shopping List</label>
                <div class="col-lg-10">
                  <div class="input-group">
                    <input type="text" class="form-control border-right-0" id="list_detail" placeholder="Add to my shopping list">
                    <input type="hidden" name="counter" value="1">
                    <span class="input-group-append">
                      <button class="btn bg-blue" onclick="add_list()" type="button">Add<i style="margin-left: 5px;" class="icon-arrow-right14"></i></button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8 offset-md-1" id="list_detail_div">
              <!-- <div class="d-flex align-items-center">
                <div class="mr-3">
                  <div class="form-group pt-2">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input-styled" data-fouc>hjghjgf
                      </label>
                    </div>
                  </div>
                </div>
                <div class="mr-3" style="margin-bottom: 7px;"><a href="#" class="text-default font-weight-semibold letter-icon-title"><i style="margin-right: 10px;" class="icon-cross3"></i>Remove</a>
                </div>
              </div> -->
            <!--</div>
          </div> -->
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn bg-primary btn-ladda btn-ladda-progress" data-style="zoom-in"  data-spinner-size="20"> <span class="ladda-label">Done</span> </button>
          <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
        </div>
      </form>
    