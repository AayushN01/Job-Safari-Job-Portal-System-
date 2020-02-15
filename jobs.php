<?php include_once 'config/init.php'; ?>

<?php
$job = new Job;
$template = new Template('templates/single.php');
$job_id = isset($_GET['id']) ? $_GET['id'] : null;


$template->job= $job->getjob($job_id);

echo $template;

 