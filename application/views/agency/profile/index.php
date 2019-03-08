
<?php include(APPPATH."views/agency/inc/header.php"); ?>
<?php $months = CON_MONTHS; 

//print_array($countries);
?>

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
          <h6 class="font-weight-semibold mb-0"><?php echo $profile_detail->full_name; ?></h6>
          <span class="d-block opacity-75"><?php echo ucfirst($profile_detail->position); ?></span>
          <div class="list-icons list-icons-extended mt-3"> <a href="<?php echo site_url("agency/profile/wizard/".$this->agency_id.""); ?>" class="list-icons-item text-white" data-popup="tooltip" title="" data-container="body" data-original-title="Edit My Profile"><i class="icon-google-drive"></i>&nbsp;&nbsp;Edit Profile</a> </div>
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
                  <li class="nav-item" style="padding-right: 15px;"><a href="#companyinfo" class="nav-link active" data-toggle="tab">Company Information</a></li>
                  <li class="nav-item" style="padding-right: 15px;"><a href="#service" class="nav-link" data-toggle="tab">Our Services</a></li>
                  <li class="nav-item" style="padding-right: 15px;"><a href="#companylicense" class="nav-link" data-toggle="tab">Licenses</a></li>
                  <li class="nav-item" style="padding-right: 15px;"><a href="#companylogo" class="nav-link" data-toggle="tab">Company logo and profile image</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="companyinfo">
                    <div class="row">
                      <div class="col-md-12">
                        <table>
                          <tr>
                            <td style="width: 310px; padding-top: 10px;"><strong>Company Name:</strong></td>
                            <td style="padding-top: 10px;"><?php echo $profile_detail->company_name; ?></td>
                          </tr>
                          <tr>
                            <td style="width: 310px; padding-top: 10px;"><strong>Position in Campany:</strong></td>
                            <td style="padding-top: 10px;"><span> <?php echo $profile_detail->position; ?> </span></td>
                          </tr>
                          <tr>
                            <td style="width: 310px; padding-top: 10px;"><strong>Your Full Name:</strong></td>
                            <td style="padding-top: 10px;"><span><?php echo $profile_detail->full_name; ?></span></td>
                          </tr>
                          <tr>
                            <td style="width: 310px; padding-top: 10px;"><strong>Company Email address:</strong></td>
                            <td style="padding-top: 10px;"><?php echo $profile_detail->email_address; ?></td>
                          </tr>
                          <tr>
                            <td style="width: 310px; padding-top: 10px;"><strong>Phone:</strong></td>
                            <td style="padding-top: 10px;"><?php echo $profile_detail->phone_number; ?></td>
                          </tr>
                          <tr>
                            <td style="width: 310px; padding-top: 10px;"><strong>When was your company formed:</strong></td>
                            <td style="padding-top: 10px;"><?php echo $profile_detail->profile->company_formed_year; ?></td>
                          </tr>
                          <tr>
                            <td style="width: 310px; padding-top: 10px;"><strong>How many caregivers do you employ:</strong></td>
                            <td style="padding-top: 10px;"><?php echo $totalCaregivers; ?></td>
                          </tr>
                          <tr>
                            <td style="width: 310px; padding-top: 10px;"><strong>How many clients do you serve:</strong></td>
                            <td style="padding-top: 10px;"><?php echo $totalClients; ?></td>
                          </tr>
                          <tr>
                            <td style="width: 310px; padding-top: 10px;"><strong>Country:</strong></td>
                            <td style="padding-top: 10px;">
                              <?php foreach ($countries as $count){
                                if ($profile_detail->profile->country_id == $count->id) {
                                  echo $count->name;
                                }
                              }?>
                            </td>
                          </tr>
                        </table>
                      </div>
                    </div>
                    <div class="row" style="padding-top: 10px; padding-bottom:5px;">
                      <div class="col-md-12">
                        <strong>Our Story:</strong>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <p><?php echo $profile_detail->profile->story; ?></p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <table>
                          <tr>
                            <td style="width: 310px; padding-top: 10px;"><strong>Company address:</strong></td>
                            <td style="padding-top: 10px;"><?php //echo $profile_detail->zipcode; ?></td>
                          </tr> 
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="service">
                    <div class="row">
                      <div class="col-md-12">
                        <table>
                          <tr>
                            <td style="width: 310px; padding-top: 10px;"><strong>Select your personal care services:</strong></td>
                            <?php $personal_care_services = json_decode($profile_detail->profile->personal_care_services); ?>
                            <td style="padding-top: 10px;">
                              <?php foreach(load_table("personal_care_services") as $PCS): ?>
                              <p>
                              <?php
							  if(count($personal_care_services)>0 && in_array($PCS->id, $personal_care_services)){
								   echo $PCS->name;
							  }
							  ?>
                              </p>
                              <?php endforeach; ?>
                            </td>
                          </tr>
                          <tr>
                            <td style="width: 310px; padding-top: 10px;"><strong>Select house keeping services:</strong></td>
                            <?php $housekeeping_services = json_decode($profile_detail->profile->housekeeping_services); ?>
                            <td style="padding-top: 10px;">
                              <?php foreach(load_table("housekeeping_services") as $HS): ?>
                              <p>
                              <?php
							  if(count($housekeeping_services)>0 && in_array($HS->id, $housekeeping_services)){
								   echo $HS->name;
							  }
							  ?>
                              </p>
                                <?php endforeach; ?>
                            </td>
                          </tr>
                          <tr>
                            <td style="width: 310px; padding-top: 10px;"><strong>Select sunrise/sunset survices:</strong></td>
                            <?php $sunrise_sunset_services = json_decode($profile_detail->profile->sunrise_sunset_services); ?>
                            <td style="padding-top: 10px;">
                              <?php foreach(load_table("sunrise_sunset_services") as $SSS): ?>
                              <p>
                              <?php
            							  if(count($sunrise_sunset_services)>0 && in_array($SSS->id, $sunrise_sunset_services)){
            								   echo $SSS->name;
            							  }
            							  ?>
                              </p>
                                <?php endforeach; ?>
                            </td>
                          </tr>
                          <tr>
                            <td style="width: 310px; padding-top: 10px;"><strong>Select dementia/alzheimer's Assistance:</strong></td>
                            <?php $dementia_alzheimer_assistance = json_decode($profile_detail->profile->dementia_alzheimer_assistance); ?>
                            <td style="padding-top: 10px;">
                              <?php foreach(load_table("dementia_alzheimer_assistance") as $DZA): ?>
                              <p>
                              <?php
							  if(count($dementia_alzheimer_assistance)>0 && in_array($DZA->id, $dementia_alzheimer_assistance)){
								   echo $DZA->name;
							  }
							  ?>
                              </p>
                                <?php endforeach; ?>
                            </td>
                          </tr>
                          <tr>
                            <td style="width: 310px; padding-top: 10px;"><strong>Select personal assistance services:</strong></td>
                            <?php $personal_assistance_services = json_decode($profile_detail->profile->personal_assistance_services); ?>
                            <td style="padding-top: 10px;">
                            <?php foreach(load_table("personal_assistance_services") as $PAS): ?>
                              <p>
                              <?php
							  if(count($personal_assistance_services)>0 && in_array($PAS->id, $personal_assistance_services)){
								   echo $PAS->name;
							  }
							  ?>
                              </p>
                              <?php endforeach; ?>
                            </td>
                          
                          </tr>
                          <tr>
                            <td style="width: 310px; padding-top: 10px;"><strong>Select post-surgery/maternity Assistance:</strong></td>
                            <td style="padding-top: 10px;">
                              <?php $post_surgery_maternity_services = json_decode($profile_detail->profile->post_surgery_maternity_services); ?>
                              <?php foreach(load_table("post_surgery_maternity_services") as $PSMS): ?>
                              <p>
                              <?php
							  if(count($post_surgery_maternity_services)>0 && in_array($PSMS->id, $post_surgery_maternity_services)){
								   echo $PSMS->name;
							  }
							  ?>
                              </p>
                                <?php endforeach; ?>
                            </td>
                          </tr>
                          <tr>
                            <td style="width: 310px; padding-top: 10px;"><strong>Respite services:</strong></td>
                            <?php $respite_services = json_decode($profile_detail->profile->respite_services); ?>
                            <td style="padding-top: 10px;">
                              <?php foreach(load_table("respite_services") as $RS): ?>
                              <p>
                              <?php
							  if(count($respite_services)>0 && in_array($RS->id, $respite_services)){
								   echo $RS->name;
							  }
							  ?>
                              </p>
                                <?php endforeach; ?>
                            </td> 
                          </tr>
                          <tr>
                            <td style="width: 310px; padding-top: 10px;"><strong>Other services:</strong></td>
                            <?php $other_services = json_decode($profile_detail->profile->other_services); ?>
                            <td style="padding-top: 10px;">
                              <?php foreach(load_table("other_services") as $OS): ?>
                              <p>
                              <?php
							  if(count($other_services)>0 && in_array($OS->id, $other_services)){
								   echo $OS->name;
							  }
							  ?>
                              </p>
                                <?php endforeach; ?>
                            </td> 
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="companylicense">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="card">
                          <div class="card-header card-header bg-warning text-white header-elements-inline">
                            <h6 class="card-title">Custom light color</h6>
                            <div class="header-elements">
                              <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                              </div>
                            </div>
                          </div>

                          <div class="card-body">
                            Card header with custom light colors - add <code>.alpha-*</code> class to card header container
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <?php if(isset($profile_detail->license) && count($profile_detail->license)>0){ ?>
                      <?php foreach($profile_detail->license as $licenseKey=>$licenseVal){ ?>
                        <div class="card" style="margin-bottom:5%">
                          <div class="card-header alpha-success text-success-800 header-elements-inline">
                            <?php //print_array($licenseVal->media_license_document_detail->full_path); ?>
                            <h4 class="card-title"><strong><?php echo $licenseVal->state_license; ?></strong></h4>
                            <div class="header-elements">
                              <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                              </div>
                            </div>
                          </div>
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-8">
                                <p><strong>From:</strong>&nbsp;&nbsp;<?php echo $months[$licenseVal->valid_from_month].", ".$licenseVal->valid_from_year; ?>&nbsp;&nbsp;&nbsp;&nbsp;<strong>To:</strong>&nbsp;&nbsp;<?php echo $months[$licenseVal->valid_to_month].", ".$licenseVal->valid_to_year; ?></p>
                              </div>
                              <div class="col-md-4 text-center">
                                <strong style="font-size: 24px; position: relative; top: 2px;">
                              <?php
                              $fromDate = date("Y-m-d");
                              $toDate = date("".$licenseVal->valid_to_year."-".$licenseVal->valid_to_month."-d");
                              $difference = $this->common_model->dateDifferanceTwoDates($fromDate, $toDate);
                                echo $difference['days'];
                              ?>
                                </strong>&nbsp;Days to expire</span>
                              </div>
                            </div>

                          <!-- <?php //if(isset($licenseVal->media_license_document_detail) && count($licenseVal->media_license_document_detail)>0){ ?>
                          <p><strong>Documents</strong></p>
                          
                          <a href="<?php //echo base_url.$licenseVal->media_license_document_detail->full_path; ?>" download><?php //echo $licenseVal->media_license_document_detail->name; ?></a> -->
                          <?php //} ?>
                          </div>
                        </div>
                        <hr />
                        <?php }} ?>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="companylogo">
                    <!-- <div class="row" style="margin-top: 20px; margin-bottom: 10px;">
                      <div class="col-md-12">
                        <div class="d-flex align-items-center">
                          <div>
                            <a href="#" class="text-default font-weight-semibold letter-icon-title"><i style="margin-right: 10px;" class="icon-file-plus"></i>Edit</a>
                          </div>
                        </div>
                      </div>
                    </div> -->
                    <div class="row">
                      <div class="col-md-12">
                        <table>
                          <tr>
                            <td style="width: 310px; padding-top: 10px;"><strong>Upload your company logo:</strong></td>
                            <td style="padding-top: 10px;">
                            <?php
          							$comLogoImageUrl = base_url("assets/images/placeholders/avatar.png");
          							if($profile_detail->profile->media_company_logo!=0){
										//print_array($profile_detail->profile);
          								if(!empty($profile_detail->profile->media_company_logo_detail)){
										$imagUrl = $profile_detail->profile->media_company_logo_detail->full_path;
										
          								if(file_exists(DOC_PATH.$imagUrl)){
          									$comLogoImageUrl = base_url().$imagUrl;
          								}
										}
          							}
      							   ?>
                            <strong><img src="<?php echo $comLogoImageUrl; ?>" class="rounded-circle" width="36" height="36" alt=""></strong></td>
                          </tr>
                          <tr>
                            <td style="width: 310px; padding-top: 10px;"><strong>Upload your profile picture:</strong></td>
                            <td style="padding-top: 10px;"><img src="<?php echo $profile_image; ?>" class="rounded-circle" width="36" height="36" alt=""></td>
                          </tr>
                        </table>
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
<?php include(APPPATH."views/agency/inc/footer.php"); ?>
