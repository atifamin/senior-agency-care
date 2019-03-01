<?php include(APPPATH."views/caregiver/inc/header.php"); ?>

<!-- Support tickets -->
<div class="card">
	<div class="card-header header-elements-sm-inline">
		<h6 class="card-title"></h6>
		<div class="header-elements">
			<a class="text-default daterange-ranges font-weight-semibold cursor-pointer dropdown-toggle">
				<i class="icon-calendar3 mr-2"></i>
				<span></span>
			</a>
    	</div>
	</div>

	<div class="card-body d-md-flex align-items-md-center justify-content-md-between flex-md-wrap">
		<div class="d-flex align-items-center mb-3 mb-md-0" style="margin: 0 auto;">
			<a href="#" class="btn bg-transparent border-indigo-400 text-indigo-400 rounded-round border-2 btn-icon">
				<i class="icon-alarm-add"></i>
			</a>
			<div class="ml-3">
				<h5 class="font-weight-semibold mb-0">11</h5>
				<span class="text-muted">Complete</span>
			</div>
		</div>
		<div class="d-flex align-items-center mb-3 mb-md-0" style="margin: 0 auto;">
			<a href="#" class="btn bg-transparent border-indigo-400 text-indigo-400 rounded-round border-2 btn-icon">
				<i class="icon-spinner11"></i>
			</a>
			<div class="ml-3">
				<h5 class="font-weight-semibold mb-0">32</h5>
				<span class="text-muted">Pending</span>
			</div>
		</div>
	</div>
	<div class="card-body" style="padding: 10px;">
		<div class="row">
			<div class="col-md-12">
				<li style="list-style: none; padding-bottom: 12px; padding-top: 10px;">
					<div class="media">
						<div class="mr-3"></div>
						<div class="media-body">
							<div class="media-title font-weight-semibold">Clients</div>
						</div>
						<div class="media-body">
							<div class="media-title font-weight-semibold">Shift Time</div>
						</div>
						<div class="align-self-center ml-3">
							Action
						</div>
					</div>
				</li>
			</div>
		</div>
		<div class="row" style="background-color: #ccc8c83d; padding: 12px;">
			<div class="col-md-12">Pending Charts
				<span class="badge bg-blue badge-pill" style="float: right;">24</span>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<li style="list-style: none;">
					<div class="media" style="padding-top: 20px; padding-bottom: 13px;">
						<div class="media-body">
							<div class="media-title font-weight-semibold">Annabelle Doney</div>
							<span class="text-muted"><i class="icon-primitive-dot mr-3 icon-2x" style="color: #00BCD4; font-size: 18px;"></i>Active</span>
						</div>
						<div class="media-body">
							<div class="media-title font-weight-semibold">Thursday, November 28 - 10 AM - 7 PM</div>
						</div>
						<div class="align-self-center ml-3">
							<a href="#" class="text-default" data-toggle="collapse" data-target="#james2">
								<i class="icon-menu7"></i>
							</a>
						</div>
					</div>

					<div class="collapse" id="james2">
						<div class="card-body bg-light border-top border-bottom">
							<div class="row" style="background-color: #fff;">
								<div class="col-md-12">
									<div><p style="color: red;">Important Charting Instructions</div> 1) At the end of each shift, record ADL SELF PERFORMANCE and ADL SUPPORT PROVIDED by selecting the round buttons below. For ADL's with pictures, use the code provided. <br> 2) For those non ADL items, either inital that care was provided or use corresponding codes. <br> 2) Initials can be added via the checkbox marked "Initial non ADL".
									</p>

								</div>
							</div>
							<div class="timeline timeline-left" style="z-index: 1; margin-top: 30px;">
								<div class="timeline-container">
									<!-- Sales stats -->
									<div class="timeline-row">
										<div class="timeline-icon">
											<a href="#"><img src="<?php echo base_url();?>assets/images/userimg/face4.jpg" alt=""></a>
										</div>

										<div class="card">
											<div class="card-header header-elements-inline">
												<div class="row">
													<div class="col-md-12">
														<h5>BED MOBILITY</h5>
														<p>How residents move to and from lying positions, turn side to side and positons body while in bed or alternate sleep furniture.</p>
													</div>
												</div>
											</div>

											<div class="card-body">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<select data-placeholder="SELECT ADL SELF PERFORMANCE CODE" class="form-control select" data-fouc>
																<option></option>
																<option value="independent">INDEPENDENT - No help of staff oversight at any time</option>
																<option value="supervision">SUPERVISION - Oversight, encouragement or cueing</option>
																<option value="limited_assistance">LIMITED ASSISTANCE - Resident involved activity. Staff provided weight bearing support</option>
																<option value="total_dependence">TOTAL DEPENDENCE - Full staff performance</option>
																<option value="activity_didnot_occur">ACTIVITY DID NOT OCCUR - Activity did not occur or family and or non - facility staff provided care 100% of the time</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<select data-placeholder="SELECT ADL SUPPORT PROVIDE CODE" class="form-control select" data-fouc>
																<option></option>
																<option value="help_only">SETUP help only</option>
																<option value="physical_assist">ONE PERSON physical assist</option>
																<option value="two_physical_assist">TWO PERSON physical assist</option>
																<option value="adl_activity_itself">ADL activity itself did not occur or family and or non-facility staff provided care 100% of the time</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group pt-2">
							                                <div class="form-check">
							                                    <label class="form-check-label">
							                                        <input type="checkbox" id="medication_reminder_checkbox"
							                                               class="form-check-input-styled" data-fouc>
							                                        ADL ACTIVITY DID NOT OCCUR
							                                    </label>
							                                </div>
							                            </div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /sales stats -->



									<!-- Sales stats -->
									<div class="timeline-row">
										<div class="timeline-icon">
											<a href="#"><img src="<?php echo base_url();?>assets/images/userimg/face4.jpg" alt=""></a>
										</div>

										<div class="card">
											<div class="card-header header-elements-inline">
												<div class="row">
													<div class="col-md-12">
														<h5>TRANSFER</h5>
														<p>How residents move between surfaces including 2 and from; bed, choar, wheelchair, standing position (excludes to/from bath toilet)</p>
													</div>
												</div>
											</div>

											<div class="card-body">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<select data-placeholder="SELECT ADL SELF PERFORMANCE CODE" class="form-control select" data-fouc>
																<option></option>
																<option value="independent">INDEPENDENT - No help of staff oversight at any time</option>
																<option value="supervision">SUPERVISION - Oversight, encouragement or cueing</option>
																<option value="limited_assistance">LIMITED ASSISTANCE - Resident involved activity. Staff provided weight bearing support</option>
																<option value="total_dependence">TOTAL DEPENDENCE - Full staff performance</option>
																<option value="activity_didnot_occur">ACTIVITY DID NOT OCCUR - Activity did not occur or family and or non - facility staff provided care 100% of the time</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<select data-placeholder="SELECT ADL SUPPORT PROVIDE CODE" class="form-control select" data-fouc>
																<option></option>
																<option value="help_only">SETUP help only</option>
																<option value="physical_assist">ONE PERSON physical assist</option>
																<option value="two_physical_assist">TWO PERSON physical assist</option>
																<option value="adl_activity_itself">ADL activity itself did not occur or family and or non-facility staff provided care 100% of the time</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group pt-2">
							                                <div class="form-check">
							                                    <label class="form-check-label">
							                                        <input type="checkbox" id="medication_reminder_checkbox"
							                                               class="form-check-input-styled" data-fouc>
							                                        ADL ACTIVITY DID NOT OCCUR
							                                    </label>
							                                </div>
							                            </div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /sales stats -->



									<!-- Sales stats -->
									<div class="timeline-row">
										<div class="timeline-icon">
											<a href="#"><img src="<?php echo base_url();?>assets/images/userimg/face4.jpg" alt=""></a>
										</div>

										<div class="card">
											<div class="card-header header-elements-inline">
												<div class="row">
													<div class="col-md-12">
														<h5>WALK IN ROOM</h5>
														<p>How residents walks between locations in his/her room.</p>
													</div>
												</div>
											</div>

											<div class="card-body">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<select data-placeholder="SELECT ADL SELF PERFORMANCE CODE" class="form-control select" data-fouc>
																<option></option>
																<option value="independent">INDEPENDENT - No help of staff oversight at any time</option>
																<option value="supervision">SUPERVISION - Oversight, encouragement or cueing</option>
																<option value="limited_assistance">LIMITED ASSISTANCE - Resident involved activity. Staff provided weight bearing support</option>
																<option value="total_dependence">TOTAL DEPENDENCE - Full staff performance</option>
																<option value="activity_didnot_occur">ACTIVITY DID NOT OCCUR - Activity did not occur or family and or non - facility staff provided care 100% of the time</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<select data-placeholder="SELECT ADL SUPPORT PROVIDE CODE" class="form-control select" data-fouc>
																<option></option>
																<option value="help_only">SETUP help only</option>
																<option value="physical_assist">ONE PERSON physical assist</option>
																<option value="two_physical_assist">TWO PERSON physical assist</option>
																<option value="adl_activity_itself">ADL activity itself did not occur or family and or non-facility staff provided care 100% of the time</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group pt-2">
							                                <div class="form-check">
							                                    <label class="form-check-label">
							                                        <input type="checkbox" id="medication_reminder_checkbox"
							                                               class="form-check-input-styled" data-fouc>
							                                        ADL ACTIVITY DID NOT OCCUR
							                                    </label>
							                                </div>
							                            </div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /sales stats -->



									<!-- Sales stats -->
									<div class="timeline-row">
										<div class="timeline-icon">
											<a href="#"><img src="<?php echo base_url();?>assets/images/userimg/face4.jpg" alt=""></a>
										</div>

										<div class="card">
											<div class="card-header header-elements-inline">
												<div class="row">
													<div class="col-md-12">
														<h5>WALK IN CORRIDOR</h5>
														<p>How residents walks in unit or corridor.</p>
													</div>
												</div>
											</div>

											<div class="card-body">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<select data-placeholder="SELECT ADL SELF PERFORMANCE CODE" class="form-control select" data-fouc>
																<option></option>
																<option value="independent">INDEPENDENT - No help of staff oversight at any time</option>
																<option value="supervision">SUPERVISION - Oversight, encouragement or cueing</option>
																<option value="limited_assistance">LIMITED ASSISTANCE - Resident involved activity. Staff provided weight bearing support</option>
																<option value="total_dependence">TOTAL DEPENDENCE - Full staff performance</option>
																<option value="activity_didnot_occur">ACTIVITY DID NOT OCCUR - Activity did not occur or family and or non - facility staff provided care 100% of the time</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<select data-placeholder="SELECT ADL SUPPORT PROVIDE CODE" class="form-control select" data-fouc>
																<option></option>
																<option value="help_only">SETUP help only</option>
																<option value="physical_assist">ONE PERSON physical assist</option>
																<option value="two_physical_assist">TWO PERSON physical assist</option>
																<option value="adl_activity_itself">ADL activity itself did not occur or family and or non-facility staff provided care 100% of the time</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group pt-2">
							                                <div class="form-check">
							                                    <label class="form-check-label">
							                                        <input type="checkbox" id="medication_reminder_checkbox"
							                                               class="form-check-input-styled" data-fouc>
							                                        ADL ACTIVITY DID NOT OCCUR
							                                    </label>
							                                </div>
							                            </div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /sales stats -->


									<!-- Sales stats -->
									<div class="timeline-row">
										<div class="timeline-icon">
											<a href="#"><img src="<?php echo base_url();?>assets/images/userimg/face4.jpg" alt=""></a>
										</div>

										<div class="card">
											<div class="card-header header-elements-inline">
												<div class="row">
													<div class="col-md-12">
														<h5>LOCOMOTION ON UNIT</h5>
														<p>How residents move between locations in his/her rooms and adjuscent corridor in the same floor. If on wheelchair, self sufficiency in one chair.</p>
													</div>
												</div>
											</div>

											<div class="card-body">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<select data-placeholder="SELECT ADL SELF PERFORMANCE CODE" class="form-control select" data-fouc>
																<option></option>
																<option value="independent">INDEPENDENT - No help of staff oversight at any time</option>
																<option value="supervision">SUPERVISION - Oversight, encouragement or cueing</option>
																<option value="limited_assistance">LIMITED ASSISTANCE - Resident involved activity. Staff provided weight bearing support</option>
																<option value="total_dependence">TOTAL DEPENDENCE - Full staff performance</option>
																<option value="activity_didnot_occur">ACTIVITY DID NOT OCCUR - Activity did not occur or family and or non - facility staff provided care 100% of the time</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<select data-placeholder="SELECT ADL SUPPORT PROVIDE CODE" class="form-control select" data-fouc>
																<option></option>
																<option value="help_only">SETUP help only</option>
																<option value="physical_assist">ONE PERSON physical assist</option>
																<option value="two_physical_assist">TWO PERSON physical assist</option>
																<option value="adl_activity_itself">ADL activity itself did not occur or family and or non-facility staff provided care 100% of the time</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group pt-2">
							                                <div class="form-check">
							                                    <label class="form-check-label">
							                                        <input type="checkbox" id="medication_reminder_checkbox"
							                                               class="form-check-input-styled" data-fouc>
							                                        ADL ACTIVITY DID NOT OCCUR
							                                    </label>
							                                </div>
							                            </div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /sales stats -->



									<!-- Sales stats -->
									<div class="timeline-row">
										<div class="timeline-icon">
											<a href="#"><img src="<?php echo base_url();?>assets/images/userimg/face4.jpg" alt=""></a>
										</div>

										<div class="card">
											<div class="card-header header-elements-inline">
												<div class="row">
													<div class="col-md-12">
														<h5>LOCOMOTION OFF UNIT</h5>
														<p>How residents move between surfaces including 2 and from; bed, choar, wheelchair, standing position (excludes to/from bath toilet)</p>
													</div>
												</div>
											</div>

											<div class="card-body">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<select data-placeholder="SELECT ADL SELF PERFORMANCE CODE" class="form-control select" data-fouc>
																<option></option>
																<option value="independent">INDEPENDENT - No help of staff oversight at any time</option>
																<option value="supervision">SUPERVISION - Oversight, encouragement or cueing</option>
																<option value="limited_assistance">LIMITED ASSISTANCE - Resident involved activity. Staff provided weight bearing support</option>
																<option value="total_dependence">TOTAL DEPENDENCE - Full staff performance</option>
																<option value="activity_didnot_occur">ACTIVITY DID NOT OCCUR - Activity did not occur or family and or non - facility staff provided care 100% of the time</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<select data-placeholder="SELECT ADL SUPPORT PROVIDE CODE" class="form-control select" data-fouc>
																<option></option>
																<option value="help_only">SETUP help only</option>
																<option value="physical_assist">ONE PERSON physical assist</option>
																<option value="two_physical_assist">TWO PERSON physical assist</option>
																<option value="adl_activity_itself">ADL activity itself did not occur or family and or non-facility staff provided care 100% of the time</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group pt-2">
							                                <div class="form-check">
							                                    <label class="form-check-label">
							                                        <input type="checkbox" id="medication_reminder_checkbox"
							                                               class="form-check-input-styled" data-fouc>
							                                        ADL ACTIVITY DID NOT OCCUR
							                                    </label>
							                                </div>
							                            </div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /sales stats -->


									<!-- Sales stats -->
									<div class="timeline-row">
										<div class="timeline-icon">
											<a href="#"><img src="<?php echo base_url();?>assets/images/userimg/face4.jpg" alt=""></a>
										</div>

										<div class="card">
											<div class="card-header header-elements-inline">
												<div class="row">
													<div class="col-md-12">
														<h5>DRESSING</h5>
														<p>How residents put on, fastens and take off all items of clothing including donning/removing prothesis or TED hose. Dressing includes putting on and changing pajamas and house dresses.</p>
													</div>
												</div>
											</div>

											<div class="card-body">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<select data-placeholder="SELECT ADL SELF PERFORMANCE CODE" class="form-control select" data-fouc>
																<option></option>
																<option value="independent">INDEPENDENT - No help of staff oversight at any time</option>
																<option value="supervision">SUPERVISION - Oversight, encouragement or cueing</option>
																<option value="limited_assistance">LIMITED ASSISTANCE - Resident involved activity. Staff provided weight bearing support</option>
																<option value="total_dependence">TOTAL DEPENDENCE - Full staff performance</option>
																<option value="activity_didnot_occur">ACTIVITY DID NOT OCCUR - Activity did not occur or family and or non - facility staff provided care 100% of the time</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<select data-placeholder="SELECT ADL SUPPORT PROVIDE CODE" class="form-control select" data-fouc>
																<option></option>
																<option value="help_only">SETUP help only</option>
																<option value="physical_assist">ONE PERSON physical assist</option>
																<option value="two_physical_assist">TWO PERSON physical assist</option>
																<option value="adl_activity_itself">ADL activity itself did not occur or family and or non-facility staff provided care 100% of the time</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group pt-2">
							                                <div class="form-check">
							                                    <label class="form-check-label">
							                                        <input type="checkbox" id="medication_reminder_checkbox"
							                                               class="form-check-input-styled" data-fouc>
							                                        ADL ACTIVITY DID NOT OCCUR
							                                    </label>
							                                </div>
							                            </div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /sales stats -->


									<!-- Sales stats -->
									<div class="timeline-row">
										<div class="timeline-icon">
											<a href="#"><img src="<?php echo base_url();?>assets/images/userimg/face4.jpg" alt=""></a>
										</div>

										<div class="card">
											<div class="card-header header-elements-inline">
												<div class="row">
													<div class="col-md-12">
														<h5>PERSONAL HYGIENE</h5>
														<p>How residents handle personal hygiene, including combing hair, brushing teeth, shaving, applying makeup, washing/dry face and hands.(Excludes Baths and Shower)</p>
													</div>
												</div>
											</div>

											<div class="card-body">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<select data-placeholder="SELECT ADL SELF PERFORMANCE CODE" class="form-control select" data-fouc>
																<option></option>
																<option value="independent">INDEPENDENT - No help of staff oversight at any time</option>
																<option value="supervision">SUPERVISION - Oversight, encouragement or cueing</option>
																<option value="limited_assistance">LIMITED ASSISTANCE - Resident involved activity. Staff provided weight bearing support</option>
																<option value="total_dependence">TOTAL DEPENDENCE - Full staff performance</option>
																<option value="activity_didnot_occur">ACTIVITY DID NOT OCCUR - Activity did not occur or family and or non - facility staff provided care 100% of the time</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<select data-placeholder="SELECT ADL SUPPORT PROVIDE CODE" class="form-control select" data-fouc>
																<option></option>
																<option value="help_only">SETUP help only</option>
																<option value="physical_assist">ONE PERSON physical assist</option>
																<option value="two_physical_assist">TWO PERSON physical assist</option>
																<option value="adl_activity_itself">ADL activity itself did not occur or family and or non-facility staff provided care 100% of the time</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group pt-2">
							                                <div class="form-check">
							                                    <label class="form-check-label">
							                                        <input type="checkbox" id="medication_reminder_checkbox"
							                                               class="form-check-input-styled" data-fouc>
							                                        ADL ACTIVITY DID NOT OCCUR
							                                    </label>
							                                </div>
							                            </div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /sales stats -->


									<!-- Sales stats -->
									<div class="timeline-row">
										<div class="timeline-icon">
											<a href="#"><img src="<?php echo base_url();?>assets/images/userimg/face4.jpg" alt=""></a>
										</div>

										<div class="card">
											<div class="card-header header-elements-inline">
												<div class="row">
													<div class="col-md-12">
														<h5>EATING</h5>
														<p>How residents eat and drink regardless of skill. Do not include drinking and eating during medication pass. Includes intake of nourishment by other means e.g(tube feeding, total parenteral nutrition, IV fluids administered for hydration or hydration)</p>
													</div>
												</div>
											</div>

											<div class="card-body">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<select data-placeholder="SELECT ADL SELF PERFORMANCE CODE" class="form-control select" data-fouc>
																<option></option>
																<option value="independent">INDEPENDENT - No help of staff oversight at any time</option>
																<option value="supervision">SUPERVISION - Oversight, encouragement or cueing</option>
																<option value="limited_assistance">LIMITED ASSISTANCE - Resident involved activity. Staff provided weight bearing support</option>
																<option value="total_dependence">TOTAL DEPENDENCE - Full staff performance</option>
																<option value="activity_didnot_occur">ACTIVITY DID NOT OCCUR - Activity did not occur or family and or non - facility staff provided care 100% of the time</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<select data-placeholder="SELECT ADL SUPPORT PROVIDE CODE" class="form-control select" data-fouc>
																<option></option>
																<option value="help_only">SETUP help only</option>
																<option value="physical_assist">ONE PERSON physical assist</option>
																<option value="two_physical_assist">TWO PERSON physical assist</option>
																<option value="adl_activity_itself">ADL activity itself did not occur or family and or non-facility staff provided care 100% of the time</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group pt-2">
							                                <div class="form-check">
							                                    <label class="form-check-label">
							                                        <input type="checkbox" id="medication_reminder_checkbox"
							                                               class="form-check-input-styled" data-fouc>
							                                        ADL ACTIVITY DID NOT OCCUR
							                                    </label>
							                                </div>
							                            </div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /sales stats -->


									<!-- Sales stats -->
									<div class="timeline-row">
										<div class="timeline-icon">
											<a href="#"><img src="<?php echo base_url();?>assets/images/userimg/face4.jpg" alt=""></a>
										</div>

										<div class="card">
											<div class="card-header header-elements-inline">
												<div class="row">
													<div class="col-md-12">
														<h5>TOILET USE</h5>
														<p>How the resident uses the toilet room, comode, bedpan or urinal; transfer on/of toilet, cleanes self after eliminatio, changes pad, manages ostomy or catheter and adjust clothes. DO NOT INCLUDE EMPTY of bedpan, urinal, beside comode, chatether bag or ostomy bad.</p>
													</div>
												</div>
											</div>

											<div class="card-body">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<select data-placeholder="SELECT ADL SELF PERFORMANCE CODE" class="form-control select" data-fouc>
																<option></option>
																<option value="independent">INDEPENDENT - No help of staff oversight at any time</option>
																<option value="supervision">SUPERVISION - Oversight, encouragement or cueing</option>
																<option value="limited_assistance">LIMITED ASSISTANCE - Resident involved activity. Staff provided weight bearing support</option>
																<option value="total_dependence">TOTAL DEPENDENCE - Full staff performance</option>
																<option value="activity_didnot_occur">ACTIVITY DID NOT OCCUR - Activity did not occur or family and or non - facility staff provided care 100% of the time</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<select data-placeholder="SELECT ADL SUPPORT PROVIDE CODE" class="form-control select" data-fouc>
																<option></option>
																<option value="help_only">SETUP help only</option>
																<option value="physical_assist">ONE PERSON physical assist</option>
																<option value="two_physical_assist">TWO PERSON physical assist</option>
																<option value="adl_activity_itself">ADL activity itself did not occur or family and or non-facility staff provided care 100% of the time</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group pt-2">
							                                <div class="form-check">
							                                    <label class="form-check-label">
							                                        <input type="checkbox" id="medication_reminder_checkbox"
							                                               class="form-check-input-styled" data-fouc>
							                                        ADL ACTIVITY DID NOT OCCUR
							                                    </label>
							                                </div>
							                            </div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
												            <label>RECORD IF PATIENT WAS</label>
												            <input type="text" name="" class="form-control">
												        </div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>RECORD NUMBER OF MOVEMENTS/EPISODES </label>
															<input type="text" value="" class="form-control touchspin-empty" >
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /sales stats -->


									<!-- Sales stats -->
									<div class="timeline-row">
										<div class="timeline-icon">
											<a href="#"><img src="<?php echo base_url();?>assets/images/userimg/face4.jpg" alt=""></a>
										</div>

										<div class="card">
											<div class="card-header header-elements-inline">
												<div class="row">
													<div class="col-md-12">
														<h5>BATHING</h5>
														<p>How residents take full-body showers, baths, sponge baths, and transfers in and out of tub showers. EXCLUDE washing of back and hairs</p>
													</div>
												</div>
											</div>

											<div class="card-body">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<select data-placeholder="SELECT ADL SELF PERFORMANCE CODE" class="form-control select" data-fouc>
																<option></option>
																<option value="independent">INDEPENDENT - No help of staff oversight at any time</option>
																<option value="supervision">SUPERVISION - Oversight, encouragement or cueing</option>
																<option value="limited_assistance">LIMITED ASSISTANCE - Resident involved activity. Staff provided weight bearing support</option>
																<option value="total_dependence">TOTAL DEPENDENCE - Full staff performance</option>
																<option value="activity_didnot_occur">ACTIVITY DID NOT OCCUR - Activity did not occur or family and or non - facility staff provided care 100% of the time</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<select data-placeholder="SELECT ADL SUPPORT PROVIDE CODE" class="form-control select" data-fouc>
																<option></option>
																<option value="help_only">SETUP help only</option>
																<option value="physical_assist">ONE PERSON physical assist</option>
																<option value="two_physical_assist">TWO PERSON physical assist</option>
																<option value="adl_activity_itself">ADL activity itself did not occur or family and or non-facility staff provided care 100% of the time</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group pt-2">
							                                <div class="form-check">
							                                    <label class="form-check-label">
							                                        <input type="checkbox" id="medication_reminder_checkbox"
							                                               class="form-check-input-styled" data-fouc>
							                                        ADL ACTIVITY DID NOT OCCUR
							                                    </label>
							                                </div>
							                            </div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>RECORD TYPE OF BATH</label><br>
															<select data-placeholder="SELECT ADL SELF PERFORMANCE CODE" class="form-control select" data-fouc>
																<option></option>
															</select>
														</div>
													</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /sales stats -->


									<!-- Sales stats -->
									<div class="timeline-row">
										<div class="timeline-icon">
											<a href="#"><img src="<?php echo base_url();?>assets/images/userimg/face4.jpg" alt=""></a>
										</div>

										<div class="card">
											<div class="card-header header-elements-inline">
												<div class="row">
													<div class="col-md-12">
														<h5>FINAL NOTES</h5>
														<p>These are simple yes or no answers questions about specific events that happened during your shift. Please try be a detailed as possible if you answer of these questions</p>
													</div>
												</div>
											</div>

											<div class="card-body">
												<div class="row">
													<div class="col-md-6">
														<div class="form-check form-check-switch form-check-switch-left">
															<label class="form-check-label d-flex align-items-center">
																<span style="margin-right: 15px">1) Were there any brusies on resident?</span>
																<input style="margin-left: 15px;" type="checkbox" data-on-text="Yes" data-off-text="No" class="form-check-input-switch" data-size="small">
															</label>
														</div>
													</div>
												</div>
												<div class="row" style="margin-top: 30px;">
													<div class="col-md-6">
														<div class="form-check form-check-switch form-check-switch-left">
															<label class="form-check-label d-flex align-items-center">
																<span style="margin-right: 15px">2) Were there any cuts on the resident?</span>
																<input style="margin-left: 15px;" type="checkbox" data-on-text="Yes" data-off-text="No" class="form-check-input-switch" data-size="small">
															</label>
														</div>
													</div>
												</div>
												<div class="row" style="margin-top: 30px;">
													<div class="col-md-6">
														<div class="form-check form-check-switch form-check-switch-left">
															<label class="form-check-label d-flex align-items-center">
																<span style="margin-right: 15px">3) Did resident have any falls on shift?</span>
																<input style="margin-left: 15px;" type="checkbox" data-on-text="Yes" data-off-text="No" class="form-check-input-switch" data-size="small">
															</label>
														</div>
													</div>
												</div>
												<div class="row" style="margin-top: 30px;">
													<div class="col-md-6">
														<div class="form-check form-check-switch form-check-switch-left">
															<label class="form-check-label d-flex align-items-center">
																<span style="margin-right: 15px">4) Did the resident have any skin tears?</span>
																<input style="margin-left: 15px;" type="checkbox" data-on-text="Yes" data-off-text="No" class="form-check-input-switch" data-size="small">
															</label>
														</div>
													</div>
												</div>
												<div class="row" style="margin-top: 30px;">
													<div class="col-md-6">
														<div class="form-check form-check-switch form-check-switch-left">
															<label class="form-check-label d-flex align-items-center">
																<span style="margin-right: 15px">5) Was there any damage to client's property? e.g broken vase</span>
																<input style="margin-left: 15px;" type="checkbox" data-on-text="Yes" data-off-text="No" class="form-check-input-switch" data-size="small">
															</label>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /sales stats -->



									<!-- Sales stats -->
									<div class="timeline-row">
										<div class="timeline-icon">
											<a href="#"><img src="<?php echo base_url();?>assets/images/userimg/face4.jpg" alt=""></a>
										</div>

										<div class="card">

											<div class="card-body">
												<div class="row">
													<div class="col-md-6">
														<div class="form-check form-check-switch form-check-switch-left">
															<label class="form-check-label d-flex align-items-center">
																<span style="margin-right: 15px"><strong>DID YOUR DRIVE YOUR CLIENT?</strong></span>
																<input style="margin-left: 15px;" type="checkbox" data-on-text="Yes" data-off-text="No" class="form-check-input-switch" data-size="small">
															</label>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>If so, please add the amount of miles you drove in order to compensate </label>
															<input type="text" value="" class="form-control touchspin-empty">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /sales stats -->
								</div>
							</div>
							<div style="margin-top: 10px;"> <p style="padding-right: 10px; float: left;padding-top: 10px;" >NB: All submissions ARE FINAL and cannot be reserved. Once you are ready 	   to submit please click on the submit button.</p>
								<a href="#" class="btn btn-primary btn-labeled btn-labeled-left legitRipple" style="float: right;margin-bottom: 10px;"><b><i class="icon-paperplane"></i></b>Submit this chart</a>
							</div>
						</div>
					</div>
				</li>	
			</div>
			<div class="row" style="background-color: #ccc8c83d; padding: 12px;">
				<div class="col-md-12">Pending Charts
					<span class="badge bg-blue badge-pill" style="float: right; background-color: #008000a6;">24</span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<li style="list-style: none;">
						<div class="media" style="padding-top: 20px; padding-bottom: 8px;">
							<div class="media-body">
								<div class="media-title font-weight-semibold">Annabelle Doney</div>
								<span class="text-muted"><i class="icon-primitive-dot mr-3 icon-2x" style="color: #00BCD4; font-size: 18px;"></i>Active</span>
							</div>
							<div class="media-body">
								<div class="media-title font-weight-semibold">Thursday, November 28 - 10 AM - 7 PM</div>
							</div>
							<div class="align-self-center ml-3">
								<a href="#" class="text-default" data-toggle="collapse" data-target="#james3">
									<i class="icon-menu7"></i>
								</a>
							</div>
						</div>

						<div class="collapse" id="james3">
							<div class="card-body bg-light border-top border-bottom">
								<div class="row" style="background-color: #fff;">
									<div class="col-md-12">
										<div><p style="color: red;">Important Charting Instructions</div> 1) At the end of each shift, record ADL SELF PERFORMANCE and ADL SUPPORT PROVIDED by selecting the round buttons below. For ADL's with pictures, use the code provided. <br> 2) For those non ADL items, either inital that care was provided or use corresponding codes. <br> 2) Initials can be added via the checkbox marked "Initial non ADL".
										</p>

									</div>
								</div>
								<div class="timeline timeline-left" style="z-index: 1; margin-top: 30px;">
									<div class="timeline-container">
										<!-- Sales stats -->
										<div class="timeline-row">
											<div class="timeline-icon">
												<a href="#"><img src="<?php echo base_url();?>assets/images/userimg/face4.jpg" alt=""></a>
											</div>

											<div class="card">
												<div class="card-header header-elements-inline">
													<div class="row">
														<div class="col-md-12">
															<h5>BED MOBILITY</h5>
															<p>How residents move to and from lying positions, turn side to side and positons body while in bed or alternate sleep furniture.</p>
														</div>
													</div>
												</div>

												<div class="card-body">
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<select data-placeholder="SELECT ADL SELF PERFORMANCE CODE" class="form-control select" data-fouc>
																	<option></option>
																	<option value="independent">INDEPENDENT - No help of staff oversight at any time</option>
																	<option value="supervision">SUPERVISION - Oversight, encouragement or cueing</option>
																	<option value="limited_assistance">LIMITED ASSISTANCE - Resident involved activity. Staff provided weight bearing support</option>
																	<option value="total_dependence">TOTAL DEPENDENCE - Full staff performance</option>
																	<option value="activity_didnot_occur">ACTIVITY DID NOT OCCUR - Activity did not occur or family and or non - facility staff provided care 100% of the time</option>
																</select>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<select data-placeholder="SELECT ADL SUPPORT PROVIDE CODE" class="form-control select" data-fouc>
																	<option></option>
																	<option value="help_only">SETUP help only</option>
																	<option value="physical_assist">ONE PERSON physical assist</option>
																	<option value="two_physical_assist">TWO PERSON physical assist</option>
																	<option value="adl_activity_itself">ADL activity itself did not occur or family and or non-facility staff provided care 100% of the time</option>
																</select>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group pt-2">
								                                <div class="form-check">
								                                    <label class="form-check-label">
								                                        <input type="checkbox" id="medication_reminder_checkbox"
								                                               class="form-check-input-styled" data-fouc>
								                                        ADL ACTIVITY DID NOT OCCUR
								                                    </label>
								                                </div>
								                            </div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- /sales stats -->



										<!-- Sales stats -->
										<div class="timeline-row">
											<div class="timeline-icon">
												<a href="#"><img src="<?php echo base_url();?>assets/images/userimg/face4.jpg" alt=""></a>
											</div>

											<div class="card">
												<div class="card-header header-elements-inline">
													<div class="row">
														<div class="col-md-12">
															<h5>TRANSFER</h5>
															<p>How residents move between surfaces including 2 and from; bed, choar, wheelchair, standing position (excludes to/from bath toilet)</p>
														</div>
													</div>
												</div>

												<div class="card-body">
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<select data-placeholder="SELECT ADL SELF PERFORMANCE CODE" class="form-control select" data-fouc>
																	<option></option>
																	<option value="independent">INDEPENDENT - No help of staff oversight at any time</option>
																	<option value="supervision">SUPERVISION - Oversight, encouragement or cueing</option>
																	<option value="limited_assistance">LIMITED ASSISTANCE - Resident involved activity. Staff provided weight bearing support</option>
																	<option value="total_dependence">TOTAL DEPENDENCE - Full staff performance</option>
																	<option value="activity_didnot_occur">ACTIVITY DID NOT OCCUR - Activity did not occur or family and or non - facility staff provided care 100% of the time</option>
																</select>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<select data-placeholder="SELECT ADL SUPPORT PROVIDE CODE" class="form-control select" data-fouc>
																	<option></option>
																	<option value="help_only">SETUP help only</option>
																	<option value="physical_assist">ONE PERSON physical assist</option>
																	<option value="two_physical_assist">TWO PERSON physical assist</option>
																	<option value="adl_activity_itself">ADL activity itself did not occur or family and or non-facility staff provided care 100% of the time</option>
																</select>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group pt-2">
								                                <div class="form-check">
								                                    <label class="form-check-label">
								                                        <input type="checkbox" id="medication_reminder_checkbox"
								                                               class="form-check-input-styled" data-fouc>
								                                        ADL ACTIVITY DID NOT OCCUR
								                                    </label>
								                                </div>
								                            </div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- /sales stats -->



										<!-- Sales stats -->
										<div class="timeline-row">
											<div class="timeline-icon">
												<a href="#"><img src="<?php echo base_url();?>assets/images/userimg/face4.jpg" alt=""></a>
											</div>

											<div class="card">
												<div class="card-header header-elements-inline">
													<div class="row">
														<div class="col-md-12">
															<h5>WALK IN ROOM</h5>
															<p>How residents walks between locations in his/her room.</p>
														</div>
													</div>
												</div>

												<div class="card-body">
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<select data-placeholder="SELECT ADL SELF PERFORMANCE CODE" class="form-control select" data-fouc>
																	<option></option>
																	<option value="independent">INDEPENDENT - No help of staff oversight at any time</option>
																	<option value="supervision">SUPERVISION - Oversight, encouragement or cueing</option>
																	<option value="limited_assistance">LIMITED ASSISTANCE - Resident involved activity. Staff provided weight bearing support</option>
																	<option value="total_dependence">TOTAL DEPENDENCE - Full staff performance</option>
																	<option value="activity_didnot_occur">ACTIVITY DID NOT OCCUR - Activity did not occur or family and or non - facility staff provided care 100% of the time</option>
																</select>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<select data-placeholder="SELECT ADL SUPPORT PROVIDE CODE" class="form-control select" data-fouc>
																	<option></option>
																	<option value="help_only">SETUP help only</option>
																	<option value="physical_assist">ONE PERSON physical assist</option>
																	<option value="two_physical_assist">TWO PERSON physical assist</option>
																	<option value="adl_activity_itself">ADL activity itself did not occur or family and or non-facility staff provided care 100% of the time</option>
																</select>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group pt-2">
								                                <div class="form-check">
								                                    <label class="form-check-label">
								                                        <input type="checkbox" id="medication_reminder_checkbox"
								                                               class="form-check-input-styled" data-fouc>
								                                        ADL ACTIVITY DID NOT OCCUR
								                                    </label>
								                                </div>
								                            </div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- /sales stats -->



										<!-- Sales stats -->
										<div class="timeline-row">
											<div class="timeline-icon">
												<a href="#"><img src="<?php echo base_url();?>assets/images/userimg/face4.jpg" alt=""></a>
											</div>

											<div class="card">
												<div class="card-header header-elements-inline">
													<div class="row">
														<div class="col-md-12">
															<h5>WALK IN CORRIDOR</h5>
															<p>How residents walks in unit or corridor.</p>
														</div>
													</div>
												</div>

												<div class="card-body">
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<select data-placeholder="SELECT ADL SELF PERFORMANCE CODE" class="form-control select" data-fouc>
																	<option></option>
																	<option value="independent">INDEPENDENT - No help of staff oversight at any time</option>
																	<option value="supervision">SUPERVISION - Oversight, encouragement or cueing</option>
																	<option value="limited_assistance">LIMITED ASSISTANCE - Resident involved activity. Staff provided weight bearing support</option>
																	<option value="total_dependence">TOTAL DEPENDENCE - Full staff performance</option>
																	<option value="activity_didnot_occur">ACTIVITY DID NOT OCCUR - Activity did not occur or family and or non - facility staff provided care 100% of the time</option>
																</select>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<select data-placeholder="SELECT ADL SUPPORT PROVIDE CODE" class="form-control select" data-fouc>
																	<option></option>
																	<option value="help_only">SETUP help only</option>
																	<option value="physical_assist">ONE PERSON physical assist</option>
																	<option value="two_physical_assist">TWO PERSON physical assist</option>
																	<option value="adl_activity_itself">ADL activity itself did not occur or family and or non-facility staff provided care 100% of the time</option>
																</select>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group pt-2">
								                                <div class="form-check">
								                                    <label class="form-check-label">
								                                        <input type="checkbox" id="medication_reminder_checkbox"
								                                               class="form-check-input-styled" data-fouc>
								                                        ADL ACTIVITY DID NOT OCCUR
								                                    </label>
								                                </div>
								                            </div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- /sales stats -->


										<!-- Sales stats -->
										<div class="timeline-row">
											<div class="timeline-icon">
												<a href="#"><img src="<?php echo base_url();?>assets/images/userimg/face4.jpg" alt=""></a>
											</div>

											<div class="card">
												<div class="card-header header-elements-inline">
													<div class="row">
														<div class="col-md-12">
															<h5>LOCOMOTION ON UNIT</h5>
															<p>How residents move between locations in his/her rooms and adjuscent corridor in the same floor. If on wheelchair, self sufficiency in one chair.</p>
														</div>
													</div>
												</div>

												<div class="card-body">
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<select data-placeholder="SELECT ADL SELF PERFORMANCE CODE" class="form-control select" data-fouc>
																	<option></option>
																	<option value="independent">INDEPENDENT - No help of staff oversight at any time</option>
																	<option value="supervision">SUPERVISION - Oversight, encouragement or cueing</option>
																	<option value="limited_assistance">LIMITED ASSISTANCE - Resident involved activity. Staff provided weight bearing support</option>
																	<option value="total_dependence">TOTAL DEPENDENCE - Full staff performance</option>
																	<option value="activity_didnot_occur">ACTIVITY DID NOT OCCUR - Activity did not occur or family and or non - facility staff provided care 100% of the time</option>
																</select>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<select data-placeholder="SELECT ADL SUPPORT PROVIDE CODE" class="form-control select" data-fouc>
																	<option></option>
																	<option value="help_only">SETUP help only</option>
																	<option value="physical_assist">ONE PERSON physical assist</option>
																	<option value="two_physical_assist">TWO PERSON physical assist</option>
																	<option value="adl_activity_itself">ADL activity itself did not occur or family and or non-facility staff provided care 100% of the time</option>
																</select>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group pt-2">
								                                <div class="form-check">
								                                    <label class="form-check-label">
								                                        <input type="checkbox" id="medication_reminder_checkbox"
								                                               class="form-check-input-styled" data-fouc>
								                                        ADL ACTIVITY DID NOT OCCUR
								                                    </label>
								                                </div>
								                            </div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- /sales stats -->



										<!-- Sales stats -->
										<div class="timeline-row">
											<div class="timeline-icon">
												<a href="#"><img src="<?php echo base_url();?>assets/images/userimg/face4.jpg" alt=""></a>
											</div>

											<div class="card">
												<div class="card-header header-elements-inline">
													<div class="row">
														<div class="col-md-12">
															<h5>LOCOMOTION OFF UNIT</h5>
															<p>How residents move between surfaces including 2 and from; bed, choar, wheelchair, standing position (excludes to/from bath toilet)</p>
														</div>
													</div>
												</div>

												<div class="card-body">
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<select data-placeholder="SELECT ADL SELF PERFORMANCE CODE" class="form-control select" data-fouc>
																	<option></option>
																	<option value="independent">INDEPENDENT - No help of staff oversight at any time</option>
																	<option value="supervision">SUPERVISION - Oversight, encouragement or cueing</option>
																	<option value="limited_assistance">LIMITED ASSISTANCE - Resident involved activity. Staff provided weight bearing support</option>
																	<option value="total_dependence">TOTAL DEPENDENCE - Full staff performance</option>
																	<option value="activity_didnot_occur">ACTIVITY DID NOT OCCUR - Activity did not occur or family and or non - facility staff provided care 100% of the time</option>
																</select>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<select data-placeholder="SELECT ADL SUPPORT PROVIDE CODE" class="form-control select" data-fouc>
																	<option></option>
																	<option value="help_only">SETUP help only</option>
																	<option value="physical_assist">ONE PERSON physical assist</option>
																	<option value="two_physical_assist">TWO PERSON physical assist</option>
																	<option value="adl_activity_itself">ADL activity itself did not occur or family and or non-facility staff provided care 100% of the time</option>
																</select>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group pt-2">
								                                <div class="form-check">
								                                    <label class="form-check-label">
								                                        <input type="checkbox" id="medication_reminder_checkbox"
								                                               class="form-check-input-styled" data-fouc>
								                                        ADL ACTIVITY DID NOT OCCUR
								                                    </label>
								                                </div>
								                            </div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- /sales stats -->


										<!-- Sales stats -->
										<div class="timeline-row">
											<div class="timeline-icon">
												<a href="#"><img src="<?php echo base_url();?>assets/images/userimg/face4.jpg" alt=""></a>
											</div>

											<div class="card">
												<div class="card-header header-elements-inline">
													<div class="row">
														<div class="col-md-12">
															<h5>DRESSING</h5>
															<p>How residents put on, fastens and take off all items of clothing including donning/removing prothesis or TED hose. Dressing includes putting on and changing pajamas and house dresses.</p>
														</div>
													</div>
												</div>

												<div class="card-body">
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<select data-placeholder="SELECT ADL SELF PERFORMANCE CODE" class="form-control select" data-fouc>
																	<option></option>
																	<option value="independent">INDEPENDENT - No help of staff oversight at any time</option>
																	<option value="supervision">SUPERVISION - Oversight, encouragement or cueing</option>
																	<option value="limited_assistance">LIMITED ASSISTANCE - Resident involved activity. Staff provided weight bearing support</option>
																	<option value="total_dependence">TOTAL DEPENDENCE - Full staff performance</option>
																	<option value="activity_didnot_occur">ACTIVITY DID NOT OCCUR - Activity did not occur or family and or non - facility staff provided care 100% of the time</option>
																</select>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<select data-placeholder="SELECT ADL SUPPORT PROVIDE CODE" class="form-control select" data-fouc>
																	<option></option>
																	<option value="help_only">SETUP help only</option>
																	<option value="physical_assist">ONE PERSON physical assist</option>
																	<option value="two_physical_assist">TWO PERSON physical assist</option>
																	<option value="adl_activity_itself">ADL activity itself did not occur or family and or non-facility staff provided care 100% of the time</option>
																</select>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group pt-2">
								                                <div class="form-check">
								                                    <label class="form-check-label">
								                                        <input type="checkbox" id="medication_reminder_checkbox"
								                                               class="form-check-input-styled" data-fouc>
								                                        ADL ACTIVITY DID NOT OCCUR
								                                    </label>
								                                </div>
								                            </div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- /sales stats -->


										<!-- Sales stats -->
										<div class="timeline-row">
											<div class="timeline-icon">
												<a href="#"><img src="<?php echo base_url();?>assets/images/userimg/face4.jpg" alt=""></a>
											</div>

											<div class="card">
												<div class="card-header header-elements-inline">
													<div class="row">
														<div class="col-md-12">
															<h5>PERSONAL HYGIENE</h5>
															<p>How residents handle personal hygiene, including combing hair, brushing teeth, shaving, applying makeup, washing/dry face and hands.(Excludes Baths and Shower)</p>
														</div>
													</div>
												</div>

												<div class="card-body">
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<select data-placeholder="SELECT ADL SELF PERFORMANCE CODE" class="form-control select" data-fouc>
																	<option></option>
																	<option value="independent">INDEPENDENT - No help of staff oversight at any time</option>
																	<option value="supervision">SUPERVISION - Oversight, encouragement or cueing</option>
																	<option value="limited_assistance">LIMITED ASSISTANCE - Resident involved activity. Staff provided weight bearing support</option>
																	<option value="total_dependence">TOTAL DEPENDENCE - Full staff performance</option>
																	<option value="activity_didnot_occur">ACTIVITY DID NOT OCCUR - Activity did not occur or family and or non - facility staff provided care 100% of the time</option>
																</select>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<select data-placeholder="SELECT ADL SUPPORT PROVIDE CODE" class="form-control select" data-fouc>
																	<option></option>
																	<option value="help_only">SETUP help only</option>
																	<option value="physical_assist">ONE PERSON physical assist</option>
																	<option value="two_physical_assist">TWO PERSON physical assist</option>
																	<option value="adl_activity_itself">ADL activity itself did not occur or family and or non-facility staff provided care 100% of the time</option>
																</select>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group pt-2">
								                                <div class="form-check">
								                                    <label class="form-check-label">
								                                        <input type="checkbox" id="medication_reminder_checkbox"
								                                               class="form-check-input-styled" data-fouc>
								                                        ADL ACTIVITY DID NOT OCCUR
								                                    </label>
								                                </div>
								                            </div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- /sales stats -->


										<!-- Sales stats -->
										<div class="timeline-row">
											<div class="timeline-icon">
												<a href="#"><img src="<?php echo base_url();?>assets/images/userimg/face4.jpg" alt=""></a>
											</div>

											<div class="card">
												<div class="card-header header-elements-inline">
													<div class="row">
														<div class="col-md-12">
															<h5>EATING</h5>
															<p>How residents eat and drink regardless of skill. Do not include drinking and eating during medication pass. Includes intake of nourishment by other means e.g(tube feeding, total parenteral nutrition, IV fluids administered for hydration or hydration)</p>
														</div>
													</div>
												</div>

												<div class="card-body">
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<select data-placeholder="SELECT ADL SELF PERFORMANCE CODE" class="form-control select" data-fouc>
																	<option></option>
																	<option value="independent">INDEPENDENT - No help of staff oversight at any time</option>
																	<option value="supervision">SUPERVISION - Oversight, encouragement or cueing</option>
																	<option value="limited_assistance">LIMITED ASSISTANCE - Resident involved activity. Staff provided weight bearing support</option>
																	<option value="total_dependence">TOTAL DEPENDENCE - Full staff performance</option>
																	<option value="activity_didnot_occur">ACTIVITY DID NOT OCCUR - Activity did not occur or family and or non - facility staff provided care 100% of the time</option>
																</select>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<select data-placeholder="SELECT ADL SUPPORT PROVIDE CODE" class="form-control select" data-fouc>
																	<option></option>
																	<option value="help_only">SETUP help only</option>
																	<option value="physical_assist">ONE PERSON physical assist</option>
																	<option value="two_physical_assist">TWO PERSON physical assist</option>
																	<option value="adl_activity_itself">ADL activity itself did not occur or family and or non-facility staff provided care 100% of the time</option>
																</select>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group pt-2">
								                                <div class="form-check">
								                                    <label class="form-check-label">
								                                        <input type="checkbox" id="medication_reminder_checkbox"
								                                               class="form-check-input-styled" data-fouc>
								                                        ADL ACTIVITY DID NOT OCCUR
								                                    </label>
								                                </div>
								                            </div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- /sales stats -->


										<!-- Sales stats -->
										<div class="timeline-row">
											<div class="timeline-icon">
												<a href="#"><img src="<?php echo base_url();?>assets/images/userimg/face4.jpg" alt=""></a>
											</div>

											<div class="card">
												<div class="card-header header-elements-inline">
													<div class="row">
														<div class="col-md-12">
															<h5>TOILET USE</h5>
															<p>How the resident uses the toilet room, comode, bedpan or urinal; transfer on/of toilet, cleanes self after eliminatio, changes pad, manages ostomy or catheter and adjust clothes. DO NOT INCLUDE EMPTY of bedpan, urinal, beside comode, chatether bag or ostomy bad.</p>
														</div>
													</div>
												</div>

												<div class="card-body">
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<select data-placeholder="SELECT ADL SELF PERFORMANCE CODE" class="form-control select" data-fouc>
																	<option></option>
																	<option value="independent">INDEPENDENT - No help of staff oversight at any time</option>
																	<option value="supervision">SUPERVISION - Oversight, encouragement or cueing</option>
																	<option value="limited_assistance">LIMITED ASSISTANCE - Resident involved activity. Staff provided weight bearing support</option>
																	<option value="total_dependence">TOTAL DEPENDENCE - Full staff performance</option>
																	<option value="activity_didnot_occur">ACTIVITY DID NOT OCCUR - Activity did not occur or family and or non - facility staff provided care 100% of the time</option>
																</select>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<select data-placeholder="SELECT ADL SUPPORT PROVIDE CODE" class="form-control select" data-fouc>
																	<option></option>
																	<option value="help_only">SETUP help only</option>
																	<option value="physical_assist">ONE PERSON physical assist</option>
																	<option value="two_physical_assist">TWO PERSON physical assist</option>
																	<option value="adl_activity_itself">ADL activity itself did not occur or family and or non-facility staff provided care 100% of the time</option>
																</select>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group pt-2">
								                                <div class="form-check">
								                                    <label class="form-check-label">
								                                        <input type="checkbox" id="medication_reminder_checkbox"
								                                               class="form-check-input-styled" data-fouc>
								                                        ADL ACTIVITY DID NOT OCCUR
								                                    </label>
								                                </div>
								                            </div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
													            <label>RECORD IF PATIENT WAS</label>
													            <input type="text" name="" class="form-control">
													        </div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label>RECORD NUMBER OF MOVEMENTS/EPISODES </label>
																<input type="text" value="" class="form-control touchspin-empty" >
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- /sales stats -->


										<!-- Sales stats -->
										<div class="timeline-row">
											<div class="timeline-icon">
												<a href="#"><img src="<?php echo base_url();?>assets/images/userimg/face4.jpg" alt=""></a>
											</div>

											<div class="card">
												<div class="card-header header-elements-inline">
													<div class="row">
														<div class="col-md-12">
															<h5>BATHING</h5>
															<p>How residents take full-body showers, baths, sponge baths, and transfers in and out of tub showers. EXCLUDE washing of back and hairs</p>
														</div>
													</div>
												</div>

												<div class="card-body">
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<select data-placeholder="SELECT ADL SELF PERFORMANCE CODE" class="form-control select" data-fouc>
																	<option></option>
																	<option value="independent">INDEPENDENT - No help of staff oversight at any time</option>
																	<option value="supervision">SUPERVISION - Oversight, encouragement or cueing</option>
																	<option value="limited_assistance">LIMITED ASSISTANCE - Resident involved activity. Staff provided weight bearing support</option>
																	<option value="total_dependence">TOTAL DEPENDENCE - Full staff performance</option>
																	<option value="activity_didnot_occur">ACTIVITY DID NOT OCCUR - Activity did not occur or family and or non - facility staff provided care 100% of the time</option>
																</select>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<select data-placeholder="SELECT ADL SUPPORT PROVIDE CODE" class="form-control select" data-fouc>
																	<option></option>
																	<option value="help_only">SETUP help only</option>
																	<option value="physical_assist">ONE PERSON physical assist</option>
																	<option value="two_physical_assist">TWO PERSON physical assist</option>
																	<option value="adl_activity_itself">ADL activity itself did not occur or family and or non-facility staff provided care 100% of the time</option>
																</select>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group pt-2">
								                                <div class="form-check">
								                                    <label class="form-check-label">
								                                        <input type="checkbox" id="medication_reminder_checkbox"
								                                               class="form-check-input-styled" data-fouc>
								                                        ADL ACTIVITY DID NOT OCCUR
								                                    </label>
								                                </div>
								                            </div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label>RECORD TYPE OF BATH</label><br>
																<select data-placeholder="SELECT ADL SELF PERFORMANCE CODE" class="form-control select" data-fouc>
																	<option></option>
																</select>
															</div>
														</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- /sales stats -->


										<!-- Sales stats -->
										<div class="timeline-row">
											<div class="timeline-icon">
												<a href="#"><img src="<?php echo base_url();?>assets/images/userimg/face4.jpg" alt=""></a>
											</div>

											<div class="card">
												<div class="card-header header-elements-inline">
													<div class="row">
														<div class="col-md-12">
															<h5>FINAL NOTES</h5>
															<p>These are simple yes or no answers questions about specific events that happened during your shift. Please try be a detailed as possible if you answer of these questions</p>
														</div>
													</div>
												</div>

												<div class="card-body">
													<div class="row">
														<div class="col-md-6">
															<div class="form-check form-check-switch form-check-switch-left">
																<label class="form-check-label d-flex align-items-center">
																	<span style="margin-right: 15px">1) Were there any brusies on resident?</span>
																	<input style="margin-left: 15px;" type="checkbox" data-on-text="Yes" data-off-text="No" class="form-check-input-switch" data-size="small">
																</label>
															</div>
														</div>
													</div>
													<div class="row" style="margin-top: 30px;">
														<div class="col-md-6">
															<div class="form-check form-check-switch form-check-switch-left">
																<label class="form-check-label d-flex align-items-center">
																	<span style="margin-right: 15px">2) Were there any cuts on the resident?</span>
																	<input style="margin-left: 15px;" type="checkbox" data-on-text="Yes" data-off-text="No" class="form-check-input-switch" data-size="small">
																</label>
															</div>
														</div>
													</div>
													<div class="row" style="margin-top: 30px;">
														<div class="col-md-6">
															<div class="form-check form-check-switch form-check-switch-left">
																<label class="form-check-label d-flex align-items-center">
																	<span style="margin-right: 15px">3) Did resident have any falls on shift?</span>
																	<input style="margin-left: 15px;" type="checkbox" data-on-text="Yes" data-off-text="No" class="form-check-input-switch" data-size="small">
																</label>
															</div>
														</div>
													</div>
													<div class="row" style="margin-top: 30px;">
														<div class="col-md-6">
															<div class="form-check form-check-switch form-check-switch-left">
																<label class="form-check-label d-flex align-items-center">
																	<span style="margin-right: 15px">4) Did the resident have any skin tears?</span>
																	<input style="margin-left: 15px;" type="checkbox" data-on-text="Yes" data-off-text="No" class="form-check-input-switch" data-size="small">
																</label>
															</div>
														</div>
													</div>
													<div class="row" style="margin-top: 30px;">
														<div class="col-md-6">
															<div class="form-check form-check-switch form-check-switch-left">
																<label class="form-check-label d-flex align-items-center">
																	<span style="margin-right: 15px">5) Was there any damage to client's property? e.g broken vase</span>
																	<input style="margin-left: 15px;" type="checkbox" data-on-text="Yes" data-off-text="No" class="form-check-input-switch" data-size="small">
																</label>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- /sales stats -->



										<!-- Sales stats -->
										<div class="timeline-row">
											<div class="timeline-icon">
												<a href="#"><img src="<?php echo base_url();?>assets/images/userimg/face4.jpg" alt=""></a>
											</div>

											<div class="card">

												<div class="card-body">
													<div class="row">
														<div class="col-md-6">
															<div class="form-check form-check-switch form-check-switch-left">
																<label class="form-check-label d-flex align-items-center">
																	<span style="margin-right: 15px"><strong>DID YOUR DRIVE YOUR CLIENT?</strong></span>
																	<input style="margin-left: 15px;" type="checkbox" data-on-text="Yes" data-off-text="No" class="form-check-input-switch" data-size="small">
																</label>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label>If so, please add the amount of miles you drove in order to compensate </label>
																<input type="text" value="" class="form-control touchspin-empty">
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- /sales stats -->
									</div>
								</div>
								<div style="margin-top: 10px;"> <p style="padding-right: 10px; float: left;padding-top: 10px;" >NB: All submissions ARE FINAL and cannot be reserved. Once you are ready 	   to submit please click on the submit button.</p>
								<a href="#" class="btn btn-primary btn-labeled btn-labeled-left legitRipple" style="float: right;margin-bottom: 10px;"><b><i class="icon-paperplane"></i></b>Submit this chart</a>
							</div>
							</div>
						</div>
					</li>	
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /support tickets -->



<script src="<?php echo base_url(); ?>assets/js/plugins/ui/moment/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/daterangepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/anytime.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/pickadate/picker.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/pickadate/picker.date.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/pickadate/picker.time.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/pickers/pickadate/legacy.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/notifications/jgrowl.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo_pages/picker_date.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo_pages/dashboard_boxed.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo_pages/timelines.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/forms/selects/select2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo_pages/form_select2.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo_pages/form_checkboxes_radios.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/forms/styling/switch.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/forms/inputs/touchspin.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo_pages/form_input_groups.js"></script>
<?php include(APPPATH."views/caregiver/inc/footer.php"); ?>