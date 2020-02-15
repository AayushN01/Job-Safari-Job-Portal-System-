<?php include_once 'config/init.php'; ?>

<?php
$job = new Job;

if(isset($_POST['cnfm_id'])){
	$cnfm_id = $_POST['cnfm_id'];
	if($job->confirm($cnfm_id)){
		redirect('homejoblister.php', 'Job applied', 'Success');
	}else{
		redirect('homejoblister.php', 'Failed to apply job', 'error');
	}
}
$template = new Template('templates/job-apply.php');
$job_id = isset($_GET['id']) ? $_GET['id'] : null;



$template->job = $job->getJob($job_id);

echo $template;

 