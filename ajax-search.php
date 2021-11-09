<?php
    if(isset($_GET['term'])){
        include "connection.php";
        $user_input_data=$_GET['term'];
        $zip_codes=array();
        $sql="SELECT zip FROM cities_extended  WHERE zip LIKE '%".$user_input_data."%' LIMIT 10";
        $result=$conn->query($sql);
        while($row=$result->fetch_assoc()){
        $data['zip']=$row['zip'];
        array_push($zip_codes,$data['zip']);
        }
        echo json_encode($zip_codes);
    }else{
        echo "data is not set";
    }
?>