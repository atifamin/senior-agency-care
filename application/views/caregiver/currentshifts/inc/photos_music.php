<?php //print_array($client_media_data);?>
<?php //$data = json_decode(json_encode($client_media_data),true);?>
<?php //print_array($data);?>
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-4 offset-md-3" style="padding-top: 30px;">
                <button type="button" class="btn btn-primary btn-icon"><i class="icon-download"></i></button>
                <div class="btn-group">
                <button type="button" style="background-color: #fff;" class="btn btn-light dropdown-toggle" data-toggle="dropdown">Upload new photo or music</button>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="javascript:;" data-toggle="modal"
                   data-target="#modal_photo" class="dropdown-item"><i class="icon-camera"></i> Upload Photo</a>
                    <a href="javascript:;" data-toggle="modal"
                   data-target="#modal_music" class="dropdown-item"><i class="icon-music"></i> Upload Music</a>
                </div>
                </div>
            </div>
            <div class="col-md-3 offset-md-2" style="padding-top: 35px;">
                <div class="form-group form-group-feedback form-group-feedback-right">
                <input type="text" class="form-control form-control-sm" placeholder="Search...">
                <div class="form-control-feedback form-control-feedback-sm">
                    <i class="icon-search4 text-muted"></i>
                </div>
            </div>
            </div>
        </div>
        <div class="row" style="padding-top: 30px;">
            <div class="col-md-12">
                <ul class="nav nav-tabs nav-tabs-bottom" style="background-color: #fafafa;">
                    <li class="nav-item"><a href="#myphoto" class="nav-link active" data-toggle="tab">My Photos</a></li>
                    <li class="nav-item"><a href="#mymusic" class="nav-link" data-toggle="tab">Favorite Music</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="myphoto">
                        <div class="row">
                            <?php //$data = json_decode(json_encode($client_media_data),true);?>
                            <?php if (count($client_media_data) > 0) {
                                foreach ($client_media_data as $media_data) { 
                                 if($media_data->type =="photo"){ ?>

                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="card-img-actions">
                                        <img class="card-img-top img-fluid" src="<?php if(isset($media_data->image_detail)){echo base_url().$media_data->image_detail->full_path;} ?>" alt="">
                                        <div class="card-img-actions-overlay card-img-top">
                                            <a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
                                                <i class="icon-plus3"></i>
                                            </a>
                                            <a href="user_pages_profile.html" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
                                                <i class="icon-link"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card-body text-center">
                                        <p class="d-block"><?php echo $media_data->title;?></p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                        <div class="col-sm-7">
                                             <p>updated: <?php echo date("M d",strtotime($media_data->created_at));?></p>
                                        </div>
                                        <div class="col-sm-2">
                                            <a href="" class="pull-right">Edit</a>
                                        </div>
                                        <div class="col-sm-3">
                                            <a href="" class="pull-right"> Delete</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } } } ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="mymusic">
                        <div class="row">
                            <?php //$data = json_decode(json_encode($client_media_data),true);?>
                            <?php if (count($client_media_data) > 0) {
                                foreach ($client_media_data as $media_data) { 
                                 if($media_data->type =="audio" || $media_data->type == "video"){ ?>
                                    <?php // print_array($client_media_data); ?>
                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="card-img-actions">
                                        
                                        <div class="card-img-actions-overlay card-img-top">
                                            <a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
                                                <i class="icon-plus3"></i>
                                            </a>
                                            <a href="user_pages_profile.html" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
                                                <i class="icon-link"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card-body text-center">
                                        
                                        
                                        <?php if ($media_data->type == "audio") { ?>
                                            <audio controls style="width:100%;">
                                            <source src="<?php echo base_url().$media_data->image_detail->full_path;; ?>" type="audio/mpeg">
                                            </source>
                                        </audio>  
                                        <?php  } ?>
                                        <?php if ($media_data->type == "video") { ?> 
                                            <iframe width="270" height="315" src="<?php echo $media_data->music_file_link;?>" frameborder="0" allowfullscreen></iframe>
                                        <?php } ?>
                                        <?php if ($media_data->type == "audio_video") { ?>
                                        <audio controls style="width:100%;">
                                            <source src="<?php echo base_url().$media_data->image_detail->full_path;; ?>" type="audio/mpeg">
                                            </source>
                                        </audio> 
                                        <iframe width="270" height="315" src="<?php echo $media_data->music_file_link;?>" frameborder="0" allowfullscreen></iframe>
                                        <?php } ?>
                                        <!-- <button><i class="icon-play4 mr-3 icon-2x"></i></button> -->
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                        <div class="col-sm-7">
                                             <p>updated: <?php echo date("M d",strtotime($media_data->created_at));?></p>
                                        </div>
                                        <div class="col-sm-2">
                                            <a href="" class="pull-right">Edit</a>
                                        </div>
                                        <div class="col-sm-3">
                                            <a href="" class="pull-right"> Delete</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } 
                    } } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>


<!-- ==========Music Modal============= -->
<div id="modal_music" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="add_client_music_form" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="client_id" value="<?php echo $detail->client_id; ?>">
                <input type="hidden" name="agency_id" value="<?php echo $detail->agency_id; ?>">
                <div class="modal-header">
                    <h4 class="modal-title" style="margin: 0 auto;">Upload Client's favorite music</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 offset-md-1">
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="radio" id="music_file_link" name="addon-radio" class="form-control-styled" checked data-fouc>&nbsp; Embeded a youtube or vimeo link
                                    </div>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="radio" id="upload_music_file" name="addon-radio" class="form-control-styled" data-fouc>&nbsp; Upload a music file
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 50px;" id="file_link">
                        <div class="col-md-11 offset-md-1">
                            <div class="form-group">
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <input type="text" name="music_file_link" id="list_detail" class="form-control" placeholder="Paste the shared link from youtube hare">
                                        <input type="hidden" name="count" value="1">
                                        <span class="input-group-append">
                                            <button class="btn btn-primary" onclick="add_list();" type="button">Add</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 offset-md-1" id="ETNH">    
                                          
                        </div>
                        <div class="col-md-11 offset-md-1" style="margin-top: 40px; ">
                            <p>How to get Shared link from youtube and paste here</p>
                            <p>1) Goto the youtube video page</p>
                            <p>2) Find a share link tab and you should find the copy link option.</p>
                            <p>3) Click the "Copy link" button to copy link.</p>
                            <p>4) Paste the link above and click "Add" to embeded the video.</p>
                        </div>
                    </div>
                    <div class="row" id="music_upload" style="margin: 50px 0 40px 0; display: none;">
                        <div class="col-md-9 offset-md-1">     
                            <input type="file" name="file" class="file-input" data-fouc>
                            <span class="form-text text-muted">MP3 file format only max 5MB</span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn bg-primary btn-ladda btn-ladda-progress"data-style="zoom-in" data-spinner-size="20"><span class="ladda-label">Done</span>
                    </button>
                </div>
            </form>  
        </div>
    </div>
</div>

<!-- ==========Photos Modal============= -->
<div id="modal_photo" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="add_client_image_form_<?php $detail->id; ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="client_id" value="<?php echo $detail->client_id; ?>">
                <input type="hidden" name="agency_id" value="<?php echo $detail->agency_id; ?>">
                <div class="modal-header">
                    <h5 class="modal-title" style="margin: 0 auto;">Upload a Photo</h5>
                    <div>
                        <ul><li class="media">
                            <div class="mr-3" style="margin-right: .55rem !important;">
                                <a href="#">
                                    <img src="<?php echo client_image($client->id); ?>" class="rounded-circle" width="40" height="40" alt="">
                                </a>
                            </div>
                            <div class="media-body">
                                <div class="media-title font-weight-semibold" style="font-size: 12px; margin-bottom: 0px !important;"><?php echo $client->first_name." ".$client->last_name;?>
                                </div>
                                <span class="text-muted" style="font-size: 12px;">Client</span>
                            </div>
                        </li>
                        </ul>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <input type="text" name="photo_title" class="form-control" placeholder="Add title to Photo">
                            </div>
                        </div>
                            
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="file" name="file" class="file-input" data-show-remove="true" data-fouc>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button  class="btn btn-link" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn bg-primary btn-ladda btn-ladda-progress" data-style="zoom-in" data-spinner-size="20"><span class="ladda-label">Done</span>
                    </button>
                </div>
            </form>          
        </div>
    </div>
</div>

<script type="text/javascript">

    function add_list(){
        var count1 = $("input[name=count]").val();
        var value1 = $("input[name=music_file_link]").val();

        $("#ETNH").append('<div class="row" id="list_url_'+count1+'"><div class="col-md-6"  style="margin-top: 3px;"><input type="hidden" name="list_url[]" value="'+value1+'"><div class="form-group pt-2"><div class="form-check"><label class="form-check-label"><input type="checkbox" name="url" checked class="form-check-input-style checkebox_url" disabled data-fouc>'+value1+'</label></div></div> </div><div class="col-md-6"><a style="float:right; margin-top: 11px;" href="javascript:;" onclick="remove('+count1+')" class="text-default font-weight-semibold letter-icon-title"><i style="margin-right: 7px;" class="icon-cross3"></i>Remove</a></div></div>');
       
        count1 = parseInt(count1)+1;
        $("input[name=count]").val(count1);
        $('.checkebox_url').uniform();
    }
    function remove(id){
        $('#list_url_'+id+'').remove();
    }

    $('#add_client_image_form_<?php $detail->id; ?>').on('submit',function(e){
        e.preventDefault();
        var formData = new FormData($(this)[0]);
        //formData.append("client_image","");
        // console.log(formData);
        // return false;
        $.ajax({
            url: '<?php echo site_url("caregiver/current_shifts/add_photos"); ?>',
            type: 'POST',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(e){
                //console.log(e);
                //return false;
                $('#modal_photo').modal('hide');
                location.reload();
                //return false;
            }
        });
    });

    $('#add_client_music_form').on('submit', function(e){
        e.preventDefault();
        var formData = new FormData($(this)[0]);
        //console.log(formData);
        $.ajax({
            url: '<?php echo site_url("caregiver/current_shifts/add_music"); ?>',
            type: 'POST',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(e){
                console.log(e);
                // =return false;       
                $('#modal_music').modal("hide");
                location.reload();  
            }
        });
    });

    $('#upload_music_file').click(function(){
            if($("#file_link").css("display","block")){
                $("#file_link").css("display","none");
                $("#music_upload").css("display","block");
            }
        });
        $('#music_file_link').click(function(){
            if($("#file_link").css("display","none")){
                $("#file_link").css("display","block");
                $("#music_upload").css("display","none");
            }
        });
</script>