<?php if(count($result)>0): ?>
<?php foreach($result as $row): ?>
<option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
<?php endforeach; endif; ?>
