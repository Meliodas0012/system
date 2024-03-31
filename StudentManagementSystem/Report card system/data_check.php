<?php

$host="localhost";

$user="root";

$password="12345";

$db="reportcardsystem";

$port= 3307;

$data=mysqli_connect($host,$user,$password,$db,$port);



if($data == false) {
    die("connection error");
}


if(isset($_POST['submit'])){

    $webprogGrade = $_POST['webprog'];
    $oopGrade = $_POST['oop'];
    $entrepGrade = $_POST['entrep'];
    $immersionGrade = $_POST['immersion'];

    $sql = "INSERT INTO grades(webprog,oop,entrep,immersion)
    VALUES('$webprogGrade', '$oopGrade', '$entrepGrade', '$immersionGrade')";

    $result = mysqli_query($data,$sql);
    
if($result)
{
 echo "success";
} else{
    echo "failed";
}

}

?>