<?php include_once 'config/init.php'; ?>

<?php
$job = new Job;
if(isset($_POST['submit'])){
	//create data arrAY
	$data = array();
	$data['job_title'] = $_POST['job_title'];
	$data['company'] = $_POST['company'];
	$data['category_id'] = $_POST['category'];
	$data['description'] = $_POST['description'];
	$data['location'] = $_POST['location'];
	$data['salary'] = $_POST['salary'];
	$data['contact_email'] = $_POST['contact_email'];
	$data['contact_user'] = $_POST['contact_user'];

	if($job->create($data)){
		redirect('homejoblister.php','Job has been added', 'success');
	} else {
		redirect('homejoblister.php','Something went wrong....Job has not been added', 'error');
	}

}
$template = new Template('templates/job-create.php');

$template->categories = $job->getCategories();

echo $template;

 