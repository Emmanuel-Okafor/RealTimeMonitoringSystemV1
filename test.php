<?php      
 
$con = mysqli_connect("localhost","root","","pgdportal");
if($con){
    echo 'connected';
}
                $sql = 'SELECT class, distribution FROM educational_level';
  
                $fire =mysqli_query($con,$sql);
                $results = mysqli_fetch_all($fire,MYSQLI_ASSOC);

    ?>

 <?php 
 
 //$myArr= [];
 $primary1=$primary2=$primary3=$primary4=$primary5=$primary6=$jss1=$jss2=$jss3=$ss1=$ss2=$ss3=[];
 $class_string=[];
 foreach($results as $result){

        switch($ac["Class"]){

            case "primary1":
                $primary1[] = $ac["Class"];
                $class_string[]=$ac["Class"];
                break;
            case "primary2":
                $primary2[] = $ac["Class"];
                $class_string[]=$ac["Class"];
                break;
            case "primary3":
                $primary3[] = $ac["Class"];
                $class_string[]=$ac["Class"];
                break;
            case "primary4":
                $primary4[] = $ac["Class"];
                $class_string[]=$ac["Class"];
                break;
            case "primary5":
                $primary5[] = $ac["Class"];
                $class_string[]=$ac["Class"];
                break;
            case "primary6":
                $primary6[] = $ac["Class"];
                $class_string[]=$ac["Class"];
                break;
            case "jss1":
                $jss1[] = $ac["Class"];
                $class_string[]=$ac["Class"];
                break;
            case "jss2":
                $jss2[] = $ac["Class"];
                $class_string[]=$ac["Class"];
                break;
            case "jss3":
                $jss3[] = $ac["Class"];
                $class_string[]=$ac["Class"];
                break;
            case "ss1":
                $ss1[] = $ac["Class"];
                $class_string[]=$ac["Class"];
                break;
            case "ss2":
                $ss2[] = $ac["Class"];
                $class_string[]=$ac["Class"];
                break;
            case "ss3":
                $ss3[] = $ac["Class"];
                $class_string[]=$ac["Class"];
                break;
}



}
    $class_count = [count($primary1),count($primary2),count($primary3),count($primary4),count($primary5),count($primary6),
    count($jss1),count($jss2),count($jss3),count($ss1),count($ss2),count($ss3)];
    foreach($class_string as $string){ 
    $sql = 'UPDATE educational_level SET distribution=? WHERE class = ? ';
    $stmt = $con->prepare($sql);
    $stmt->bind_param("ss",$class_count[0],$string);
    $stmt->execute();
}
    //$fire =mysqli_query($con,$sql);
    // session_start();
    
   

    // print_r($class_count_keys); 
    //$mapKeyArray = array([0]=>'zero',[1]=>'one',[2]=>'two',[3]=>'three');
    

    // foreach($class_count_keys as $key){
        
    //     $_SESSION[$key]=$key;
    //     echo $_SESSION[$key];  
    // }

        
        
     //print_r($myArr);
     //print_r($classTwo);
     print_r($class_count); 
     print_r($class_count[4]);
     
?>


    