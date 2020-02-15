<?php include_once 'config/init.php'; ?>

<?php
$job = new Job;

if(isset($_POST['app_id'])){
	$del_id = $_POST['app_id'];
	if($job->apply($app_id)){
		redirect('homejoblister.php', 'Job Applied', 'Success');
	}else{
		redirect('homejoblister.php', 'Failed to apply for job', 'error');
	}
}
$template = new Template('templates/job-apply.php');
$job_id = isset($_GET['id']) ? $_GET['id'] : null;



$template->job = $job->getJob($job_id);

echo $template;

 