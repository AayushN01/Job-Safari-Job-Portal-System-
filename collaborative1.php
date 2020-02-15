<?php

      session_start();
    
if(empty($_SESSION['login'])){
  header('location:jobseeker_login.php');
}
    $conn = new mysqli("localhost","root","","joblister");
    $userId = $_SESSION['login'];

$start = microtime(true);

        $sql1 = "SELECT jobID,rating FROM ratings WHERE userId='$userId' ";
        $result1 = $conn->query($sql1); 

        $jobs = array();
        $ratings = array();

        while($row1=mysqli_fetch_assoc($result1)){
            array_push($jobs,$row1["jobId"]);
            array_push($ratings,$row1["rating"]);
        }

        $max_similarity = -1;
        $max_similarity_user = -1;


        for($comp_user = 1; $comp_user<=300; $comp_user++){

            if($comp_user!=$userId){
        
                $sql2 = "SELECT jobId,rating FROM ratings WHERE jobId='$comp_user' ";
                $result2 = $conn->query($sql2);

                $marked = array_fill(0,count($jobs),0);
                $score = 0;
                while($row2 = mysqli_fetch_assoc($result2)){
                    
                    if(in_array($row2["jobId"], $jobs)){

                        $index = -1;
                        for($x = 0; $x < count($jobs); $x++){

                            if($jobs[$x]==$row2["jobId"]){
                                $index = $x;
                                break;
                            }
                        }

                        $score = $score + ($row2["rating"]-$ratings[$index])*($row2["rating"]-$ratings[$index]);
                        
                        //$score = $score + abs($row2["rating"]-$ratings[$index]);

                        $marked[$index] = 1;
                    }

                    else{
                        $score = $score + ($row2["rating"])*($row2["rating"]);
                        //$score = $score + ($row2["rating"]);
                    }
                }

                for($y = 0; $y < count($jobs); $y++){
                    if($marked[$y]==0){
                        $score = $score + ($ratings[$y])*($ratings[$y]);
                        //$score = $score + ($ratings[$y]);
                    }
                }

                $score = 1/(sqrt($score) + 1);

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
            if(in_array($row3["jobId"], $jobs) === false){
                array_push($max_similarity_user_array, $row3["jobId"]);   
            }
        }

        for($x = 0; $x < count($max_similarity_user_array); $x++){
            
            $sql4="SELECT job_title,average_rating FROM job_data WHERE jobId='$max_similarity_user_array[$x]'";
            $result4 = $conn->query($sql4);
            while($row4=mysqli_fetch_assoc($result4)){
                echo $row4["job_title"]."<br>";
            }           

        }



        $time_elapsed_secs = microtime(true) - $start;
        echo $time_elapsed_secs;
?> 