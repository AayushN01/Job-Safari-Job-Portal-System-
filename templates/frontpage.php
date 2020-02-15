<?php include 'inc/header.php';?>

      <div class="jumbotron" style="padding-right: 60px; padding-left: 60px;border-radius: 6px; text-align: center;    margin-bottom: 30px;
    color: inherit;
    background-color: #eee;">
        <h1 style="font-family: inherit; font-weight: 500; line-height: 1.1; margin: .67em 0; font-size: 50px;">Search for Jobs</h1>       
            <form method="GET" action="homejoblister.php">
              
              <select name="category" class="form-control">
                <option value="0">Choose a Category</option>
                <?php foreach ($categories as $category): ?>
                  <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                <?php endforeach; ?>
                
              </select><br>
                <input type="submit" class="btn btn-lg " value="Search Job" style="background-color: #56CC9D; padding: 14px 24px;
    font-size: 21px; line-height: 1.5;
    border-radius: 0.6rem;display: inline-block;
    font-weight: 400; ">
            </form>
          
       
      </div>
      <h3 style="font-size: 25px;"><bolder><?php echo $title; ?></bolder></h3><br>
      <?php foreach($jobs as $job): ?>
      <div class="row marketing">
        <div class="col-md-10">
          <h2 style="font-size: 20px;"><b>Job Title:  <?php echo $job->job_title; ?></b></h2>
          <h3 style="font-size: 16px;"><u>Company Name:  <?php echo $job->company; ?></u></h3>
          <p><?php echo $job->description; ?></p><br>
        </div>
             <div class="col-md-2">
        	<a class="button" href="job.php?id=<?php echo $job->id; ?>">View</a>
        </div>
          
    </div>            
  <?php endforeach; ?><br>

<?php include 'inc/footer.php';?>