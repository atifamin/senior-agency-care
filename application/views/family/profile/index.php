
<?php include(APPPATH."views/family/inc/header.php"); ?>
<?php $months = CON_MONTHS; ?>
<div class="d-md-flex align-items-md-start"> 
  <!-- Right content -->
  <?php //print_r($result)exit(); ?>
  <div class="tab-content w-100 overflow-auto">
    <div class="tab-pane fade active show" id="profile">
      <div class="container-fluid">
        <div class="card">
          
          <div class="row">
            <div class="col-md-12">
              <div class="card-body">
                <ul class="nav nav-tabs nav-tabs-bottom">
                  <li class="nav-item" style="padding-right: 15px;"><a href="#companyinfo" class="nav-link active" data-toggle="tab">Family Information</a></li>
                 
                  <li class="nav-item" style="right: 3% !important; position: absolute;"><a href="<?php echo site_url("family/profile/Edit_Profile/".$this->family_id."") ?>"><button class="btn btn-light" style="background-color: #fff;"><i class="icon-google-drive mr-2"></i> Edit Profile</button></a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="companyinfo">
                    <div class="row">
                      <div class="col-md-12">
                        <table>
                          <tr>
                            <td style="width: 310px; padding-top: 10px;"><strong>First Name:</strong></td>
                            <td style="padding-top: 10px;"><?php echo $result->first_name; ?></td>
                          </tr>
                          <tr>
                            <td style="width: 310px; padding-top: 10px;"><strong>Last Name:</strong></td>
                            <td style="padding-top: 10px;"><?php echo $result->last_name; ?></td>
                          </tr>
                          <tr>
                            <td style="width: 310px; padding-top: 10px;"><strong>Email Address:</strong></td>
                            <td style="padding-top: 10px;"><?php echo $result->email_address; ?></td>
                          </tr>
                           <tr>
                            <td style="width: 310px; padding-top: 10px;"><strong>Mobile Number:</strong></td>
                            <td style="padding-top: 10px;"><?php echo $result->mobile_number; ?></td>
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
                            <?php $personal_care_services = json_decode($result->profile->personal_care_services); ?>
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
                            <?php $housekeeping_services = json_decode($result->profile->housekeeping_services); ?>
                            <td style="padding-top: 10px;">
                              <?php foreach(load_table("housekeeping_services") as $HS): ?>
                              <p>
                              <?php
                           if (count($housekeeping_services)>0 && in_array($HS->id, $housekeeping_services)) {
                             echo $HS->name;
                           }
                             ?>
                              </p>
                                <?php endforeach; ?>
                            </td>
                          </tr>
                          <tr>
                            <td style="width: 310px; padding-top: 10px;"><strong>Select sunrise/sunset survices:</strong></td>
                            <?php $sunrise_sunset_services = json_decode($result->profile->sunrise_sunset_services); ?>
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
                            <?php $dementia_alzheimer_assistance = json_decode($result->profile->dementia_alzheimer_assistance); ?>
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
                            <?php $personal_assistance_services = json_decode($result->profile->personal_assistance_services); ?>
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
                              <?php $post_surgery_maternity_services = json_decode($result->profile->post_surgery_maternity_services); ?>
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
                            <?php $respite_services = json_decode($result->profile->respite_services); ?>
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
                            <?php $other_services = json_decode($result->profile->other_services); ?>
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
                      <?php if(isset($result->license) && count($result->license)>0){ ?>
                      <?php foreach($result->license as $licenseKey=>$licenseVal){ ?>
                      <?php $fromDate = date("Y-m-d");
                            $toDate = date("".$licenseVal->valid_to_year."-".$licenseVal->valid_to_month."-d");
                            $difference = $this->common_model->dateDifferanceTwoDates($fromDate, $toDate); 
                      ?>
                      <?php if ($difference['days'] < 0) { ?>
                        <div class="col-md-12">
                          <div class="card" style="margin-bottom:5%">
                            <div class="card-header alpha-warning text-warning-800 header-elements-inline">
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
                                  echo $difference['days'];
                                ?>
                                  </strong>&nbsp;Days to expire</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <hr />
                        </div>  
                      <?php }elseif ($difference['days'] > 0) { ?>
                        <div class="col-md-12">
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
                                  echo $difference['days'];
                                ?>
                                  </strong>&nbsp;Days to expire</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <hr />
                        </div>
                      <?php } ?>
                      
                      <?php }} ?>
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
                        if($result->profile->media_company_logo!=0){
                    //print_array($result->profile);
                          if(!empty($result->profile->media_company_logo_detail)){
                            $imagUrl = $result->profile->media_company_logo_detail->full_path;
                    
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
<?php include(APPPATH."views/family/inc/footer.php"); ?>
