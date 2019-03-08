<div class="row">
  <div class="col-md-12">
    <div class="row">
      <div class="col-md-12" style="margin: 20px 0px 10px 0px;">
        <p>Client brief bio</p>
      </div>
      <div class="col-md-12" style="margin-top: 5px;">
        <p><strong>Name: <span>Mr Thomas Crowe</span></strong></p>
      </div>
      <div class="col-md-12" style="margin-top: 5px;">
        <p><strong>Profession: <span>Doctor</span></strong></p>
      </div>
      <div class="col-md-12" style="margin-top: 5px;">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
      </div>
      <div class="col-md-12" style="margin-top: 5px;">
        <p><strong>Client's typical daily routine:</strong></p>
      </div>
      <div class="col-md-12" style="margin-top: 5px;">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
      </div>
      <div class="col-md-12" style="margin-top: 5px;">
        <p><strong>Likes:</strong></p>
      </div>
      <div class="col-md-12" style="margin-top: 5px;">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
      </div>
      <div class="col-md-12" style="margin-top: 5px;">
        <p><strong>Dislikes:</strong></p>
      </div>
      <div class="col-md-12" style="margin-top: 5px;">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
      </div>
      <div class="col-md-12" style="margin-top: 5px;">
        <p><strong>Hobbies:</strong></p>
      </div>
      <div class="col-md-12" style="margin-top: 5px;">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
      </div>
      <div class="col-md-12" style="margin-top: 5px;">
        <p><strong>Favourite Music:</strong></p>
      </div>
      <div class="col-md-12" style="margin-top: 5px;">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
      </div>
      <div class="col-md-12" style="text-align: right; margin-top: 20px;"> <a href="javascript:;" data-toggle="modal" data-target="#modal_clients_bio" style="margin-right: 10px;"><i style="color: #555;" class="icon-pencil5"></i></a> <a href="javascript:;" onclick="deleteClientBio()"><i style="color: #555;" class="icon-bin"></i></a> </div>
    </div>
  </div>
</div>

<div id="modal_clients_bio" class="modal fade" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="client_bio_form">
      <div class="modal-header">
        <h5 class="modal-title" style="margin: 0 auto;">Edit Client Bio</h5>
        <div>
        	<li class="media">
    				<div class="mr-3" style="margin-right: .55rem!important;">
    					<a href="#">
    						<img src="<?php echo base_url(); ?>assets/images/userimg/face25.jpg" class="rounded-circle" width="40" height="40" alt="">
    					</a>
    				</div>

    				<div class="media-body">
    					<div class="media-title font-weight-semibold" style="font-size: 12px; margin-bottom: 0px !important;">Bastin Miller</div>
    					<span class="text-muted" style="font-size: 12px;">Total Care</span>
    				</div>
			    </li>
        </div>
      </div>
      
        <div class="modal-body">
          	<div class="row">
          		<div class="col-md-6">
		            <div class="form-group">
		              <label>Client name:</label>
		              <input type="text" name="client_name" class="form-control" placeholder="Client Name" value="Mr thomas crowe">
		            </div>
	            </div>
    	        <div class="col-md-6">
    	            <div class="form-group">
    	              <label>Client Profession:</label>
    	              <input type="text" name="client_profession" class="form-control" placeholder="Client Profession" value="Doctor">
    	            </div>
    	        </div>
          	</div>
          	<div class="row">
  		        <div class="col-md-12">
  		            <div class="form-group">
  		              <label>Profession Details:</label>
  		              <textarea name="profession_details" rows="3" cols="4" placeholder="Add brief detail about client Profession" class="form-control">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown.</textarea>
  		            </div>
  		        </div>
		        </div>
    		    <div class="row">
    		        <div class="col-md-6">
    		            <div class="form-group">
    		              <label>Client's daily routine:</label>
    		              <textarea name="client_routine" rows="3" cols="4" placeholder="Add brief detail about client routine" class="form-control">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</textarea>
    		            </div>
    		        </div>
    		        <div class="col-md-6">
    		            <div class="form-group">
    		              <label>Client's likes:</label>
    		              <textarea name="client_likes" rows="3" cols="4" placeholder="Add brief detail about client likes" class="form-control">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has .</textarea>
    		            </div>
    		        </div>
    		    </div>
    		    <div class="row">
    		        <div class="col-md-6">
    		            <div class="form-group">
    		              <label>Client's dislikes:</label>
    		              <textarea name="client_dislikes" rows="3" cols="4" placeholder="Add brief detail about client dislikes" class="form-control">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</textarea>
    		            </div>
    		        </div>
    		        <div class="col-md-6">
    		            <div class="form-group">
    		              <label>Client's hobbies:</label>
    		              <textarea name="client_hobbies" rows="3" cols="4" placeholder="Add brief detail about client hobbies" class="form-control">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</textarea>
    		            </div>
    		        </div>
    		    </div>
    		    <div class="row">
    		        <div class="col-md-12">
    		            <div class="form-group">
    		              <label>Client's Favourite Music:</label>
    		              <textarea name="client_favourite_music" rows="3" cols="4" placeholder="Add brief detail about client favourite music" class="form-control">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</textarea>
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
