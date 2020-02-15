<?php
      session_start();
    
if(empty($_SESSION['login'])){
  header('location:jobseeker_login.php');
}
    $conn = new mysqli("localhost","root","","joblister");
    $userId = $_SESSION['login'];
   // $username = $_SESSION['login'];
    $url = $_SERVER['REQUEST_URI'];
        
    if($url[strlen($url)-1]=='1'){
        $sql1 = "SELECT jobId FROM ratings WHERE userId='$userId' ";
        $result1 = $conn->query($sql1); 
        $row1 = mysqli_fetch_array($result1);
        $categories = array();
        $jobs = array();
        $b = $row1["jobId"];
        array_push($jobs,$row1["jobId"]);
        $sql2 = "SELECT category FROM job_data WHERE jobId='$b' ";
        $result2 = $conn->query($sql2); 
        $row2 = mysqli_fetch_array($result2);
        $c = $row2["category"];
        $temp = "";
        for($x = 0; $x < strlen($c); $x++){
            if($c[$x]=='|'){
                if(array_key_exists($temp, $categories)){
                    $categories[$temp]++;
                }
                else{
                    $categories[$temp]=1;
                }
                $temp = "";
            }
            else{
                $temp = $temp.$c[$x];
            }
        }
        if(strlen($temp)){
            if(array_key_exists($temp, $categories)){
                    $categories[$temp]++;
                }
                else{
                    $categories[$temp]=1;
                }
                $temp = "";
        }
        while($row1 = $result1->fetch_assoc()) {
            $b = $row1["jobId"];
            $sql2 = "SELECT category FROM job_data WHERE jobId='$b' ";
            $result2 = $conn->query($sql2); 
            $row2 = mysqli_fetch_array($result2);
            $c = $row2["category"];
            $temp = "";
            array_push($jobs,$row1["jobId"]);
            for($x = 0; $x < strlen($c); $x++){
                if($c[$x]=='|'){
                    if(array_key_exists($temp, $categories)){
                        $categories[$temp]++;
                    }
                    else{
                        $categories[$temp]=1;
                    }
                    $temp = "";
                }
                else{
                    $temp = $temp.$c[$x];
                }
            }
            if(strlen($temp)){
                if(array_key_exists($temp, $categories)){
                        $categories[$temp]++;
                    }
                    else{
                        $categories[$temp]=1;
                    }
                    $temp = "";
            }
        }
        arsort($categories);
        foreach ($categories as $key => $value) {
            echo "category: $key"."<br>";
            
            $a = 0;
            $aname = "";
            
            $b = 0;
            $bname = "";
            
            $c = 0;
            $cname = "";
        $sql3 = "SELECT jobId, job_title, category, average_rating FROM job_data WHERE no_of_users_rated > 3";
        $result3 = $conn->query($sql3); 
        $row3 = mysqli_fetch_array($result3);
        
            if (strpos($row3["category"],$key) !== false && in_array($row3["jobId"], $jobs) === false){
                    if($row3["average_rating"] > $a){
                        $c = $b;
                        $cname = $bname;
                        $b = $a;
                        $bname = $aname;
                        $a = $row3["average_rating"];
                        $aname = $row3["job_title"];
                    }
                    else if($row3["average_rating"] > $b){
                        $c = $b;
                        $cname = $bname;
                        $b = $row3["average_rating"];
                        $bname = $row3["job_title"];                
                    }
                    else if($row3["average_rating"] > $c){
                        $c = $row3["average_rating"];
                        $cname = $row3["job_title"];                                        
                    }
            }
            while($row3 = $result3->fetch_assoc()){
                if (strpos($row3["category"],$key) !== false &&in_array($row3["jobId"], $jobs) === false){
                    if($row3["average_rating"] > $a){
                        $c = $b;
                        $cname = $bname;
                        $b = $a;
                        $bname = $aname;
                        $a = $row3["average_rating"];
                        $aname = $row3["job_title"];
                    }
                    else if($row3["averagr_rating"] > $b){
                        $c = $b;
                        $cname = $bname;
                        $b = $row3["average_rating"];
                        $bname = $row3["job_title"];                
                    }
                    else if($row3["average_rating"] > $c){
                        $c = $row3["average_rating"];
                        $cname = $row3["job_title"];                                        
                    }
                }
            }
            //echo $key."<br>";
            //echo $value."<br>";
            echo $aname." ".$a."<br>";
            echo $bname." ".$b."<br>";
            echo $cname." ".$c."<br>";
            echo "<br>";
        }       
    
    }
    
