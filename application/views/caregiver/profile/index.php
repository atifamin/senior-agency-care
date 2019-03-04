<?php include(APPPATH."views/caregiver/inc/header.php"); ?>
<?php $months = CON_MONTHS; ?>

<div class="d-md-flex align-items-md-start"> 
  
  <!-- Left sidebar component -->
  <div class="sidebar sidebar-light bg-transparent sidebar-component sidebar-component-left wmin-300 border-0 shadow-0 sidebar-expand-md"> 
    
    <!-- Sidebar content -->
    <div class="sidebar-content"> 
      
      <!-- Navigation -->
      <div class="card">
        <div class="card-body bg-success-400 text-center card-img-top" style="background-image: url(); background-size: contain;">
          <div class="card-img-actions d-inline-block mb-3"> <img class="img-fluid rounded-circle" src="<?php echo $profile_image; ?>" width="170" height="170" alt="">
            <div class="card-img-actions-overlay rounded-circle"> <a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round"> <i class="icon-plus3"></i> </a> <a href="user_pages_profile.html" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2"> <i class="icon-link"></i> </a> </div>
          </div>
          <h6 class="font-weight-semibold mb-0"><?php echo $profile_detail->first_name." ".$profile_detail->last_name; ?></h6>
          <span class="d-block opacity-75"><?php echo ucfirst($profile_detail->position); ?></span>
          <div class="list-icons list-icons-extended mt-3"> <a href="<?php echo site_url("caregiver/profile/wizard/".$this->caregiver_id.""); ?>" class="list-icons-item text-white" data-popup="tooltip" title="" data-container="body" data-original-title="Edit My Profile"><i class="icon-google-drive"></i>&nbsp;&nbsp;Edit Profile</a> </div>
        </div>
      </div>
    </div>
    <!-- /sidebar content --> 
    
  </div>
  <!-- /left sidebar component --> 
  
  <!-- Right content -->
  <div class="tab-content w-100 overflow-auto">
    <div class="tab-pane fade active show" id="profile">
      <div class="container">
        <div class="card">
          
          <div class="row">
            <div class="col-md-12">
              <div class="card-body">
                <ul class="nav nav-tabs nav-tabs-bottom">
                  <li class="nav-item" style="padding-right: 130px;"><a href="#profileinfo" class="nav-link active" data-toggle="tab">Profile & Certification</a></li>
                  <li class="nav-item" style="padding-right: 130px;"><a href="#licenses" class="nav-link" data-toggle="tab">Valid State License</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="profileinfo">
                    <div class="row">
                      <div class="col-md-12">
                        <table>
                          <tr>
                            <td style="width: 310px; padding-top: 10px;"><strong>Gender:</strong></td>
                            <td style="padding-top: 10px;"><?php echo ucfirst($profile_detail->gender); ?></td>
                          </tr>
                          <tr>
                            <td style="width: 310px; padding-top: 10px;"><strong>From:</strong></td>
                            <td style="padding-top: 10px;"><span> <?php echo $months[$profile_detail->from_month].", ".$profile_detail->from_year; ?> </span></td>
                          </tr>
                          <tr>
                            <td style="width: 310px; padding-top: 10px;"><strong>To:</strong></td>
                            <td style="padding-top: 10px;"><span><?php echo $months[$profile_detail->to_month].", ".$profile_detail->to_year; ?></span></td>
                          </tr>
                          <tr>
                            <td style="width: 310px; padding-top: 10px;"><strong>Email address:</strong></td>
                            <td style="padding-top: 10px;"><?php echo $profile_detail->email; ?></td>
                          </tr>
                          <tr>
                            <td style="width: 310px; padding-top: 10px;"><strong>Phone:</strong></td>
                            <td style="padding-top: 10px;"><?php echo $profile_detail->phone_number; ?></td>
                          </tr>
                          <tr>
                            <td style="width: 310px; padding-top: 10px;"><strong>Address:</strong></td>
                            <td style="padding-top: 10px;"><?php echo $profile_detail->address; ?></td>
                          </tr>
                          <tr>
                            <td style="width: 310px; padding-top: 10px;"><strong>City:</strong></td>
                            <td style="padding-top: 10px;"><?php echo $profile_detail->city; ?></td>
                          </tr>
                          <tr>
                            <td style="width: 310px; padding-top: 10px;"><strong>State:</strong></td>
                            <td style="padding-top: 10px;"><?php echo $profile_detail->state; ?></td>
                          </tr>
                          <tr>
                            <td style="width: 310px; padding-top: 10px;"><strong>Country:</strong></td>
                            <td style="padding-top: 10px;"><?php echo $profile_detail->country; ?></td>
                          </tr>
                          <tr>
                            <td style="width: 310px; padding-top: 10px;"><strong>Zipcode:</strong></td>
                            <td style="padding-top: 10px;"><?php echo $profile_detail->zipcode; ?></td>
                          </tr>
                          <tr>
                            <td style="width: 310px; padding-top: 10px;"><strong>Emergency Contact Name:</strong></td>
                            <td style="padding-top: 10px;"><?php echo $profile_detail->emergency_contact_name; ?></td>
                          </tr>
                          <tr>
                            <td style="width: 310px; padding-top: 10px;"><strong>Emergency Contact Number:</strong></td>
                            <td style="padding-top: 10px;"><?php echo $profile_detail->emergency_contact_number; ?></td>
                          </tr>
                          
                        </table>
                      </div>
                    </div>
                    <div class="row" style="padding-top: 10px; padding-bottom:5px;">
                      <div class="col-md-12">
                        <h3><strong>My Certifications:</strong></h3>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <p><span class="bg-dark py-1 px-2 rounded"><span class="text-white">C.N.A Certified Nurse Assistant</span></span>&nbsp;&nbsp;&nbsp;<span class="bg-dark py-1 px-2 rounded"><span class="text-white">Home Health Aid</span></span></p>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="licenses">
                    <div class="row">
                      <div class="col-md-12">
                        <?php if(isset($profile_detail->license) && count($profile_detail->license)>0){ ?>
						            <?php foreach($profile_detail->license as $licenseKey=>$licenseVal){ ?>
                        <div class="card" style="margin-bottom:5%">
                          <div class="card-header">
                            <h4 class="card-title"><strong><?php echo $licenseVal->state_license; ?></strong></h4>
                          </div>
                          <div class="card-body">
                          <p><strong>From:</strong>&nbsp;&nbsp;<?php echo $months[$licenseVal->valid_from_month].", ".$licenseVal->valid_from_year; ?>&nbsp;&nbsp;&nbsp;&nbsp;<strong>To:</strong>&nbsp;&nbsp;<?php echo $months[$licenseVal->valid_to_month].", ".$licenseVal->valid_to_year; ?></p>
                          <?php if(isset($licenseVal->license_document) && count($licenseVal->license_document)>0){ ?>
                          <p><strong>Documents</strong></p>
                          
                          <a href="<?php echo base_url($licenseVal->license_document->full_path); ?>" download><?php echo $licenseVal->license_document->name; ?></a>
                          <?php } ?>
                          </div>
                        </div>
                        <hr />
                        <?php }} ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /right content --> 
  
</div>
<?php include(APPPATH."views/caregiver/inc/footer.php"); ?>
