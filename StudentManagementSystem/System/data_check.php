<?php

$host="localhost";

$user="root";

$password="12345";

$db="schoolproj";

$port= 3307;

$data=mysqli_connect($host,$user,$password,$db,$port);


if($data===false){
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['apply']))
{
    $data_firstname=$_POST['first_name'];
    $data_lastname=$_POST['last_name'];
    $data_middlename=$_POST['middle_name'];
    $data_registeringfor=$_POST['registering_for'];
    $data_birthday=$_POST['birthday'];
    $data_gender=$_POST['gender'];
    $data_contactnumber=$_POST['contact_number'];
    $data_email=$_POST['email'];
    $data_nationality=$_POST['nationality'];
    $data_religion=$_POST['religion'];
    $data_permanentaddress=$_POST['permanent_address'];
    $data_strand=$_POST['strand'];


    $sql = "INSERT INTO enrollment_form (first_name, last_name, middle_name, registering_for, birthday, gender, contact_number, email, nationality, religion, permanent_address, strand) 
    VALUES ('$data_firstname', '$data_lastname', '$data_middlename', '$data_registeringfor', '$data_birthday', '$data_gender', '$data_contactnumber', '$data_email', '$data_nationality', '$data_religion', '$data_permanentaddress', '$data_strand')";

    $result = mysqli_query($data, $sql);


    if($result) {
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit(); 
    }
    

}

?>