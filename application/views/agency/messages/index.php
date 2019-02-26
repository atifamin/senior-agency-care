<?php include(APPPATH."views/agency/inc/header.php"); ?>

<div class="row">
	<div class="col-md-12">
		<h6>My Messages</h6>
	</div>
</div>


<div class="card">
	<div class="row">
		<div class="col-md-12">
			<ul class="nav nav-tabs nav-tabs-bottom">
				<li class="nav-item" style="padding-right: 30px;"><a href="#all_messages" class="nav-link active" data-toggle="tab"><img src="<?php echo base_url(); ?>/assets/images/userimg/face8.jpg" class="rounded-circle" width="40" height="40" alt="" style="margin-right: 10px;">All Messages</a></li>
				<li class="nav-item" style="padding-right: 30px;"><a href="#client_group_chat" class="nav-link" data-toggle="tab"><img src="http://localhost/senior-agency-care/assets/images/userimg/face4.jpg" class="rounded-circle" width="40" height="40" alt="" style="margin-right: 10px;">Group Messages</a></li>
			</ul>

			<div class="tab-content">
				<!-- ========Client All Messages======= -->
				<div class="tab-pane fade show active" id="all_messages">
					<div class="card-header bg-white header-elements-inline" style="padding-top: 0px;border-bottom: 0px;">
						<div class="form-group form-group-feedback form-group-feedback-right">
							<input type="text" class="form-control form-control-sm" placeholder="Type to filter">
							<div class="form-control-feedback form-control-feedback-sm">
								<i style="color: lightgray;" class="icon-search4"></i>
							</div>
						</div>
						<div class="header-elements" style="position: relative; bottom: 5px;">
							<a href="#"><span style="font-size: 14px; color: #555;">Create New<i style="margin-left: 10px; color: #00bcd4;" class="icon-pencil6"></i></span></a>
						</div>
					</div>
					<div class="card-body" style="padding: 0px;">
						<!-- Inside accordion 1-->
						<div class="card-group-control card-group-control-right" id="accordion-group-message">
							<div class="card mb-0 rounded-bottom-0 border-bottom-0">
								<div class="card-header">
									<h6 class="card-title">
										<a data-toggle="collapse" class="collapsed text-default" href="#accordion-item-group1">
											<img src="<?php echo base_url(); ?>/assets/images/userimg/face5.jpg" class="rounded-circle mr-2" width="22" height="22" alt="">
											James Dewalt
											<span class="badge badge-success badge-pill float-right" style="margin-left: 15px; margin-top: 2px; font-size: 10px;">65</span>
										</a>
									</h6>
								</div>

								<div id="accordion-item-group1" class="collapse" data-parent="#accordion-group-message">
									<div class="card-body">
										<ul class="media-list media-chat mb-3">
											<li class="media">
												<div class="mr-3">
													<a href="#">
														<img src="<?php echo base_url(); ?>/assets/images/userimg/face5.jpg" class="rounded-circle" width="40" height="40" alt="">
													</a>
												</div>

												<div class="media-body">
													<div class="media-chat-item">Crud reran and while much withdrew ardent much crab hugely met dizzily that more jeez gent equivalent unsafely far one hesitant so therefore.</div>
													<div class="font-size-sm text-muted mt-2">Tue, 10:28 am <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
												</div>
											</li>

											<li class="media media-chat-item-reverse">
												<div class="media-body">
													<div class="media-chat-item">Far squid and that hello fidgeted and when. As this oh darn but slapped casually husky sheared that cardinal hugely one and some unnecessary factiously hedgehog a feeling one rudely much</div>
													<div class="font-size-sm text-muted mt-2">Mon, 10:24 am <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
												</div>

												<div class="ml-3">
													<a href="#">
														<img src="<?php echo base_url(); ?>/assets/images/userimg/face12.jpg" class="rounded-circle" width="40" height="40" alt="">
													</a>
												</div>
											</li>

											<li class="media">
												<div class="mr-3">
													<a href="#">
														<img src="<?php echo base_url(); ?>/assets/images/userimg/face5.jpg" class="rounded-circle" width="40" height="40" alt="">
													</a>
												</div>

												<div class="media-body">
													<div class="media-chat-item">Tolerantly some understood this stubbornly after snarlingly frog far added insect into snorted more auspiciously heedless drunkenly jeez foolhardy oh.</div>
													<div class="font-size-sm text-muted mt-2">Wed, 4:20 pm <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
												</div>
											</li>

											<li class="media content-divider justify-content-center text-muted mx-0">
												<span class="px-2">New messages</span>
											</li>

											<li class="media media-chat-item-reverse">
												<div class="media-body">
													<div class="media-chat-item">Satisfactorily strenuously while sleazily dear frustratingly insect menially some shook far sardonic badger telepathic much jeepers immature much hey.</div>
													<div class="font-size-sm text-muted mt-2">2 hours ago <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
												</div>

												<div class="ml-3">
													<a href="#">
														<img src="<?php echo base_url(); ?>/assets/images/userimg/face12.jpg" class="rounded-circle" width="40" height="40" alt="">
													</a>
												</div>
											</li>

											<li class="media">
												<div class="mr-3">
													<a href="#">
														<img src="<?php echo base_url(); ?>/assets/images/userimg/face5.jpg" class="rounded-circle" width="40" height="40" alt="">
													</a>
												</div>

												<div class="media-body">
													<div class="media-chat-item">Grunted smirked and grew less but rewound much despite and impressive via alongside out and gosh easy manatee dear ineffective yikes.</div>
													<div class="font-size-sm text-muted mt-2">13 minutes ago <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
												</div>
											</li>

											<li class="media media-chat-item-reverse">
												<div class="media-body">
													<div class="media-chat-item"><i class="icon-menu"></i></div>
												</div>

												<div class="ml-3">
													<a href="#">
														<img src="<?php echo base_url(); ?>/assets/images/userimg/face12.jpg" class="rounded-circle" width="40" height="40" alt="">
													</a>
												</div>
											</li>
										</ul>

				                    	<textarea name="enter-message" class="form-control mb-3" rows="3" cols="1" placeholder="Enter your message..."></textarea>

				                    	<div class="d-flex align-items-center">
				                    		<div class="list-icons list-icons-extended">
				                                <a href="#" class="list-icons-item" data-popup="tooltip" data-container="body" title="Send photo"><i class="icon-file-picture"></i></a>
				                            	<a href="#" class="list-icons-item" data-popup="tooltip" data-container="body" title="Send video"><i class="icon-file-video"></i></a>
				                                <a href="#" class="list-icons-item" data-popup="tooltip" data-container="body" title="Send file"><i class="icon-file-plus"></i></a>
				                    		</div>

				                    		<button type="button" class="btn bg-teal-400 btn-labeled btn-labeled-right ml-auto"><b><i class="icon-paperplane"></i></b> Send</button>
				                    	</div>
									</div>
								</div>
							</div>
						</div>

						<!-- /inside accordion 1 -->


						<!-- Inside accordion 2-->
						<div class="card-group-control card-group-control-right" id="accordion-group-message-1">
							<div class="card mb-0 rounded-bottom-0 border-bottom-0">
								<div class="card-header">
									<h6 class="card-title">
										<a data-toggle="collapse" class="collapsed text-default" href="#accordion-item-group2">
											<img src="<?php echo base_url(); ?>/assets/images/userimg/face3.jpg" class="rounded-circle mr-2" width="22" height="22" alt="">
											Monica Winshow
											<span class="badge badge-success badge-pill float-right" style="margin-left: 15px; margin-top: 2px; font-size: 10px;">65</span>
										</a>
									</h6>
								</div>

								<div id="accordion-item-group2" class="collapse" data-parent="#accordion-group-message-1">
									<div class="card-body">
										<ul class="media-list media-chat mb-3">
											<li class="media">
												<div class="mr-3">
													<a href="#">
														<img src="<?php echo base_url(); ?>/assets/images/userimg/face3.jpg" class="rounded-circle" width="40" height="40" alt="">
													</a>
												</div>

												<div class="media-body">
													<div class="media-chat-item">Crud reran and while much withdrew ardent much crab hugely met dizzily that more jeez gent equivalent unsafely far one hesitant so therefore.</div>
													<div class="font-size-sm text-muted mt-2">Tue, 10:28 am <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
												</div>
											</li>

											<li class="media media-chat-item-reverse">
												<div class="media-body">
													<div class="media-chat-item">Far squid and that hello fidgeted and when. As this oh darn but slapped casually husky sheared that cardinal hugely one and some unnecessary factiously hedgehog a feeling one rudely much</div>
													<div class="font-size-sm text-muted mt-2">Mon, 10:24 am <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
												</div>

												<div class="ml-3">
													<a href="#">
														<img src="<?php echo base_url(); ?>/assets/images/userimg/face12.jpg" class="rounded-circle" width="40" height="40" alt="">
													</a>
												</div>
											</li>

											<li class="media">
												<div class="mr-3">
													<a href="#">
														<img src="<?php echo base_url(); ?>/assets/images/userimg/face3.jpg" class="rounded-circle" width="40" height="40" alt="">
													</a>
												</div>

												<div class="media-body">
													<div class="media-chat-item">Tolerantly some understood this stubbornly after snarlingly frog far added insect into snorted more auspiciously heedless drunkenly jeez foolhardy oh.</div>
													<div class="font-size-sm text-muted mt-2">Wed, 4:20 pm <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
												</div>
											</li>

											<li class="media content-divider justify-content-center text-muted mx-0">
												<span class="px-2">New messages</span>
											</li>

											<li class="media media-chat-item-reverse">
												<div class="media-body">
													<div class="media-chat-item">Satisfactorily strenuously while sleazily dear frustratingly insect menially some shook far sardonic badger telepathic much jeepers immature much hey.</div>
													<div class="font-size-sm text-muted mt-2">2 hours ago <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
												</div>

												<div class="ml-3">
													<a href="#">
														<img src="<?php echo base_url(); ?>/assets/images/userimg/face12.jpg" class="rounded-circle" width="40" height="40" alt="">
													</a>
												</div>
											</li>

											<li class="media">
												<div class="mr-3">
													<a href="#">
														<img src="<?php echo base_url(); ?>/assets/images/userimg/face3.jpg" class="rounded-circle" width="40" height="40" alt="">
													</a>
												</div>

												<div class="media-body">
													<div class="media-chat-item">Grunted smirked and grew less but rewound much despite and impressive via alongside out and gosh easy manatee dear ineffective yikes.</div>
													<div class="font-size-sm text-muted mt-2">13 minutes ago <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
												</div>
											</li>

											<li class="media media-chat-item-reverse">
												<div class="media-body">
													<div class="media-chat-item"><i class="icon-menu"></i></div>
												</div>

												<div class="ml-3">
													<a href="#">
														<img src="<?php echo base_url(); ?>/assets/images/userimg/face12.jpg" class="rounded-circle" width="40" height="40" alt="">
													</a>
												</div>
											</li>
										</ul>

				                    	<textarea name="enter-message" class="form-control mb-3" rows="3" cols="1" placeholder="Enter your message..."></textarea>

				                    	<div class="d-flex align-items-center">
				                    		<div class="list-icons list-icons-extended">
				                                <a href="#" class="list-icons-item" data-popup="tooltip" data-container="body" title="Send photo"><i class="icon-file-picture"></i></a>
				                            	<a href="#" class="list-icons-item" data-popup="tooltip" data-container="body" title="Send video"><i class="icon-file-video"></i></a>
				                                <a href="#" class="list-icons-item" data-popup="tooltip" data-container="body" title="Send file"><i class="icon-file-plus"></i></a>
				                    		</div>

				                    		<button type="button" class="btn bg-teal-400 btn-labeled btn-labeled-right ml-auto"><b><i class="icon-paperplane"></i></b> Send</button>
				                    	</div>
									</div>
								</div>
							</div>
						</div>

						<!-- /inside accordion 2 -->
					</div>
				</div>
				<!-- ========Client All Messages======= -->

				<!-- ========Client Group Messages======= -->
				<div class="tab-pane fade" id="client_group_chat" style="min-height: 300px;">
					<ul class="media-list">
						<li class="media" style="padding: 1%;">
							<div class="mr-3">
								<a href="javascript:;" data-toggle="modal" data-target="#modal_small" class="btn btn-light legitRipple">Create New Group</a>
							</div>

							<div class="media-body">
								<div class="form-group form-group-feedback form-group-feedback-right" style="width: 140px; margin: 0 auto;">
									<input type="text" class="form-control form-control-sm" placeholder="Type to filter">
									<div class="form-control-feedback form-control-feedback-sm">
										<i style="color: lightgray;" class="icon-search4"></i>
									</div>
								</div>
							</div>
						</li>
					</ul>
					<!-- Inside accordion 1-->
					<div class="card-group-control card-group-control-right" id="accordion-group-color-message">
						<div class="card mb-0 rounded-bottom-0 border-bottom-0">
							<div class="card-header">
								<h6 class="card-title">
										<div class="list-icons">
					                    	<div class="list-icons-item dropdown">
					                    		<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="false" style="margin-right: 20px;"><i class="icon-menu7"></i></a>

					                    		<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(22px, 16px, 0px);">
							                    	<a href="#" class="dropdown-item"><i class="icon-pencil5"></i> Edit</a>
							                    	<a href="#" class="dropdown-item"><i class="icon-database-remove"></i> Add remove members</a>
							                    	<a href="#" class="dropdown-item"><i class="icon-trash"></i> Remove group</a>
					                    		</div>
					                    	</div>
				                    	</div>
									<a data-toggle="collapse" class="collapsed text-default" href="#accordion-item-group-color1">
										Client Family Chat
									</a>
								</h6>
							</div>

							<div id="accordion-item-group-color1" class="collapse" data-parent="#accordion-group-color-message">
								<div class="card-body">
									<ul class="media-list media-chat mb-3">
										<li class="media content-divider justify-content-center text-muted mx-0">Yesterday</li>

										<li class="media">
											<div class="mr-3">
												<a href="#">
													<img src="<?php echo base_url(); ?>/assets/images/userimg/face12.jpg" class="rounded-circle" width="40" height="40" alt="">
												</a>
											</div>

											<div class="media-body">
												<div class="media-chat-item bg-slate border-slate">Crud reran and while much withdrew ardent much crab hugely met dizzily that more jeez gent equivalent unsafely far one hesitant so therefore.</div>
												<div class="font-size-sm text-muted mt-2">Tue, 10:28 am <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
											</div>
										</li>

										<li class="media media-chat-item-reverse">
											<div class="media-body">
												<div class="media-chat-item bg-info border-info">Far squid and that hello fidgeted and when. As this oh darn but slapped casually husky sheared that cardinal hugely one and some unnecessary factiously hedgehog a feeling one rudely much</div>
												<div class="font-size-sm text-muted mt-2">Mon, 10:24 am <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
											</div>

											<div class="ml-3">
												<a href="#">
													<img src="<?php echo base_url(); ?>/assets/images/userimg/face11.jpg" class="rounded-circle" width="40" height="40" alt="">
												</a>
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<a href="#">
													<img src="<?php echo base_url(); ?>/assets/images/userimg/face10.jpg" class="rounded-circle" width="40" height="40" alt="">
												</a>
											</div>

											<div class="media-body">
												<div class="media-chat-item bg-danger-400 border-danger-400">Tolerantly some understood this stubbornly after snarlingly frog far added insect into snorted more auspiciously heedless drunkenly jeez foolhardy oh.</div>
												<div class="font-size-sm text-muted mt-2">Wed, 4:20 pm <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
											</div>
										</li>

										<li class="media media-chat-item-reverse">
											<div class="media-body">
												<div class="media-chat-item bg-teal-400 border-teal-400">Satisfactorily strenuously while sleazily dear frustratingly insect menially some shook far sardonic badger telepathic much jeepers immature much hey.</div>
												<div class="font-size-sm text-muted mt-2">2 hours ago <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
											</div>

											<div class="ml-3">
												<a href="#">
													<img src="<?php echo base_url(); ?>/assets/images/userimg/face8.jpg" class="rounded-circle" width="40" height="40" alt="">
												</a>
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<a href="#">
													<img src="<?php echo base_url(); ?>/assets/images/userimg/face7.jpg" class="rounded-circle" width="40" height="40" alt="">
												</a>
											</div>

											<div class="media-body">
												<div class="media-chat-item bg-success-400 border-success-400">Grunted smirked and grew less but rewound much despite and impressive via alongside out and gosh easy manatee dear ineffective yikes.</div>
												<div class="font-size-sm text-muted mt-2">13 minutes ago <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
											</div>
										</li>

										<li class="media media-chat-item-reverse">
											<div class="media-body">
												<div class="media-chat-item bg-indigo-400 border-indigo-400"><i class="icon-menu"></i></div>
											</div>

											<div class="ml-3">
												<a href="#">
													<img src="<?php echo base_url(); ?>/assets/images/userimg/face6.jpg" class="rounded-circle" width="40" height="40" alt="">
												</a>
											</div>
										</li>
									</ul>

			                    	<textarea name="enter-message" class="form-control mb-3" rows="3" cols="1" placeholder="Enter your message..."></textarea>

			                    	<div class="d-flex align-items-center">
			                    		<div class="list-icons list-icons-extended">
			                                <a href="#" class="list-icons-item" data-popup="tooltip" data-container="body" title="Send photo"><i class="icon-file-picture"></i></a>
			                            	<a href="#" class="list-icons-item" data-popup="tooltip" data-container="body" title="Send video"><i class="icon-file-video"></i></a>
			                                <a href="#" class="list-icons-item" data-popup="tooltip" data-container="body" title="Send file"><i class="icon-file-plus"></i></a>
			                    		</div>

			                    		<button type="button" class="btn bg-teal-400 btn-labeled btn-labeled-right ml-auto"><b><i class="icon-paperplane"></i></b> Send</button>
			                    	</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /inside accordion 1 -->


					<!-- Inside accordion 2-->
					<div class="card-group-control card-group-control-right" id="accordion-group-color-message-1">
						<div class="card mb-0 rounded-bottom-0 border-bottom-0">
							<div class="card-header">
								<h6 class="card-title">
										<div class="list-icons">
					                    	<div class="list-icons-item dropdown">
					                    		<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="false" style="margin-right: 20px;"><i class="icon-menu7"></i></a>

					                    		<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(22px, 16px, 0px);">
							                    	<a href="#" class="dropdown-item"><i class="icon-pencil5"></i> Edit</a>
							                    	<a href="#" class="dropdown-item"><i class="icon-database-remove"></i> Add remove members</a>
							                    	<a href="#" class="dropdown-item"><i class="icon-trash"></i> Remove group</a>
					                    		</div>
					                    	</div>
				                    	</div>
									<a data-toggle="collapse" class="collapsed text-default" href="#accordion-item-group-color2">
										Caregiver Training Group
									</a>
								</h6>
							</div>

							<div id="accordion-item-group-color2" class="collapse" data-parent="#accordion-group-color-message-1">
								<div class="card-body">
									<ul class="media-list media-chat mb-3">
										<li class="media content-divider justify-content-center text-muted mx-0">Yesterday</li>

										<li class="media">
											<div class="mr-3">
												<a href="#">
													<img src="<?php echo base_url(); ?>/assets/images/userimg/face5.jpg" class="rounded-circle" width="40" height="40" alt="">
												</a>
											</div>

											<div class="media-body">
												<div class="media-chat-item bg-slate border-slate">Crud reran and while much withdrew ardent much crab hugely met dizzily that more jeez gent equivalent unsafely far one hesitant so therefore.</div>
												<div class="font-size-sm text-muted mt-2">Tue, 10:28 am <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
											</div>
										</li>

										<li class="media media-chat-item-reverse">
											<div class="media-body">
												<div class="media-chat-item bg-info border-info">Far squid and that hello fidgeted and when. As this oh darn but slapped casually husky sheared that cardinal hugely one and some unnecessary factiously hedgehog a feeling one rudely much</div>
												<div class="font-size-sm text-muted mt-2">Mon, 10:24 am <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
											</div>

											<div class="ml-3">
												<a href="#">
													<img src="<?php echo base_url(); ?>/assets/images/userimg/face4.jpg" class="rounded-circle" width="40" height="40" alt="">
												</a>
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<a href="#">
													<img src="<?php echo base_url(); ?>/assets/images/userimg/face3.jpg" class="rounded-circle" width="40" height="40" alt="">
												</a>
											</div>

											<div class="media-body">
												<div class="media-chat-item bg-danger-400 border-danger-400">Tolerantly some understood this stubbornly after snarlingly frog far added insect into snorted more auspiciously heedless drunkenly jeez foolhardy oh.</div>
												<div class="font-size-sm text-muted mt-2">Wed, 4:20 pm <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
											</div>
										</li>

										<li class="media media-chat-item-reverse">
											<div class="media-body">
												<div class="media-chat-item bg-teal-400 border-teal-400">Satisfactorily strenuously while sleazily dear frustratingly insect menially some shook far sardonic badger telepathic much jeepers immature much hey.</div>
												<div class="font-size-sm text-muted mt-2">2 hours ago <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
											</div>

											<div class="ml-3">
												<a href="#">
													<img src="<?php echo base_url(); ?>/assets/images/userimg/face2.jpg" class="rounded-circle" width="40" height="40" alt="">
												</a>
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<a href="#">
													<img src="<?php echo base_url(); ?>/assets/images/userimg/face1.jpg" class="rounded-circle" width="40" height="40" alt="">
												</a>
											</div>

											<div class="media-body">
												<div class="media-chat-item bg-success-400 border-success-400">Grunted smirked and grew less but rewound much despite and impressive via alongside out and gosh easy manatee dear ineffective yikes.</div>
												<div class="font-size-sm text-muted mt-2">13 minutes ago <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
											</div>
										</li>

										<li class="media media-chat-item-reverse">
											<div class="media-body">
												<div class="media-chat-item bg-indigo-400 border-indigo-400"><i class="icon-menu"></i></div>
											</div>

											<div class="ml-3">
												<a href="#">
													<img src="<?php echo base_url(); ?>/assets/images/userimg/face12.jpg" class="rounded-circle" width="40" height="40" alt="">
												</a>
											</div>
										</li>
									</ul>

			                    	<textarea name="enter-message" class="form-control mb-3" rows="3" cols="1" placeholder="Enter your message..."></textarea>

			                    	<div class="d-flex align-items-center">
			                    		<div class="list-icons list-icons-extended">
			                                <a href="#" class="list-icons-item" data-popup="tooltip" data-container="body" title="Send photo"><i class="icon-file-picture"></i></a>
			                            	<a href="#" class="list-icons-item" data-popup="tooltip" data-container="body" title="Send video"><i class="icon-file-video"></i></a>
			                                <a href="#" class="list-icons-item" data-popup="tooltip" data-container="body" title="Send file"><i class="icon-file-plus"></i></a>
			                    		</div>

			                    		<button type="button" class="btn bg-teal-400 btn-labeled btn-labeled-right ml-auto"><b><i class="icon-paperplane"></i></b> Send</button>
			                    	</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /inside accordion 2 -->
				</div>
				<!-- ========Client Group Messages======= -->
			</div>
		</div>
	</div>
</div>
<!-- /tabs with bottom line -->




<div id="modal_small" class="modal fade" tabindex="-1">
	<div class="modal-dialog modal-sm" style="margin-top: 250px;">
		<div class="modal-content">
			<div class="modal-header">
				
			</div>
			<form>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-10 offset-md-1">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Add group title">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-10 offset-md-1" style="margin-top: 20px;">
							<div class="form-group">
								<label><span class="text-muted">Add people to this group</span></label>
								<div class="input-group">
									<select class="form-control multiselect" multiple="multiple" data-fouc>
										<option value="1">user 1</option>
										<option value="2">user 2</option>
										<option value="3">user 3</option>
										<option value="4">user 4</option>
									</select>
								</div>									
							</div>
						</div>
					</div>
				</div>

				<div class="modal-footer">
					<button type="submit" class="btn bg-primary">Ok</button>
					<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
				</div>
			</form>
		</div>
	</div>
</div>
<script src="<?php echo base_url();?>assets/js/demo_pages/chat_layouts.js"></script>
<?php include(APPPATH."views/agency/inc/footer.php"); ?>