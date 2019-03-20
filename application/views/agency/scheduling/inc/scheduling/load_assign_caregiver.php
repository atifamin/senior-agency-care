<div class="modal-header">
  <h6 class="modal-title" align="center">Assign Caregiver</h6>
  <button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
  <div class="form-group" id="select_caregiver">
    <select multiple="multiple" data-placeholder="Select Caregiver..." class="form-control select" data-fouc id="caregivers" name="assisgn_caregivers[]">
      <option></option>
      <?php if(count($caregivers)>0): ?>
      <?php foreach($caregivers as $caregiverKey=>$caregiverVal): ?>
      <option value="<?php echo $caregiverVal->id; ?>" <?php if(in_array($caregiverVal->id, $assignedCargivers)){echo 'selected="selected"';} ?>><?php echo $caregiverVal->first_name." ".$caregiverVal->last_name; ?></option>
      <?php endforeach; endif; ?>
    </select>
  </div>
</div>
<div class="modal-footer">
  <button type="submit" class="btn bg-primary spinner-light-card" style="width:100%">Save changes</button>
</div>


<script>
$("#caregivers").select2();
</script>
