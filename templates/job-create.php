<?php include 'inc/header.php';?>
<h3 class="page-header">Create a new job</h3><br>
<form method="post" action="create.php">
	<div class="form-group">
		<label>Name of Organization</label>
		<input type="text" class="form-control" name="company">
	</div>
	<div class="form-group">
		<label>Category</label>
		<select type="text" class="form-control" name="category">
			<option value="0">Choose a Category</option>
                <?php foreach ($categories as $category): ?>
                  <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                <?php endforeach; ?><br>
          </select>      
	</div>
	<div class="form-group">
		<label>Job Title</label>
		<input type="text" class="form-control" name="job_title">
	</div>
	<div class="form-group">
		<label>Description</label>
		<textarea  class="form-control" name="description"></textarea>
	</div>
	<div class="form-group">
		<label>Location</label>
		<input type="text" class="form-control" name="location">
	</div>
	<div class="form-group">
		<label>Salary</label>
		<input type="text" class="form-control" name="salary">
	</div>
	<div class="form-group">
		<label>Contact User</label>
		<input type="text" class="form-control" name="contact_user">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="text" class="form-control" name="contact_email">
	</div>
	<input type="submit" class="btn" value="Submit" name="submit" style="color: #fff; background-color: #56CC9D;">
</form>
<br>
<a href="homejoblister.php">Back</a>
<br>
<?php include 'inc/footer.php';?>