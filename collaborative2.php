<?php
      session_start();
    
if(empty($_SESSION['login'])){
  header('location:jobseeker_login.php');
}
    $conn = new mysqli("localhost","root","","joblister");
    $userId = $_SESSION['login'];

       $start = microtime(true);


        //echo "3";
        $sql1 = "SELECT jobId,rating FROM ratings WHERE userId='$userId' ";
        $result1 = $conn->query($sql1); 

        $jobs = array();
        


          while($row1=mysqli_fetch_assoc($result1)){
            $movies[$row1["jobId"]] = $row1["rating"];
        }

        $max_similarity = -1;
        $max_similarity_user = -1;

        for($comp_user = 1; $comp_user<=671; $comp_user++){
            
            if($comp_user!=$userId){
                $sql2 = "SELECT jobId,rating FROM ratings WHERE userId='$comp_user' ";
                $result2 = $conn->query($sql2);

                $marked = array();
                $score = 0;
                while($row2=mysqli_fetch_assoc($result2)){
                    
                    if(array_key_exists($row2["jobId"],$jobs)){
                        //$score = $score + ($row2["rating"]-$jobs[$row2["jobId"]])*($row2["rating"]-$jobs[$row2["jobId"]]);
                        
                        $score = $score + ($row2["rating"]-$jobs[$row2["jobId"]]);

                        $marked[$row2["jobId"]] = 1;
                    }

                    else{
                        //$score = $score + ($row2["rating"])*($row2["rating"]);
                        $score = $score + ($row2["rating"]);
                    }
                }

                /*
                foreach ($categories as $key => $value) {
                echo "Category: $key"."<br>";
                */

                foreach ($jobs as $key => $value){
                    if(array_key_exists($key,$marked)==false){
                        //$score = $score + ($value)*($value);
                        $score = $score + ($value);
                    }
                }

                //$score = 1/(sqrt($score) + 1);
                $score = 1/($score + 1);

                if($score > $max_similarity){
                    $max_similarity = $score;
                    $max_similarity_user = $comp_user;
                }

            }

        }

        echo $max_similarity."<br>";
        echo $max_similarity_user."<br>";

        $sql3 = "SELECT jobId FROM ratings WHERE userId='$max_similarity_user' ";
        $result3 = $conn->query($sql3);

        $max_similarity_user_array = array();
        while($row3=mysqli_fetch_assoc($result3)){
            if(array_key_exists($row3["jobId"],$jobs)==false){
                array_push($max_similarity_user_array, $row3["jobId"]);
            }
        }

        for($x = 0; $x < count($max_similarity_user_array); $x++){
            
            $sql4="SELECT job_title,average_rating FROM job_data WHERE jobId='$max_similarity_user_array[$x]'";
            $result4 = $conn->query($sql4);
            while($row4=mysqli_fetch_assoc($result4)){
                echo $row4["job_title"]." ".$row4["average_rating"]."<br>";
            }           

        }
     


        $time_elapsed_secs = microtime(true) - $start;
        echo $time_elapsed_secs;
