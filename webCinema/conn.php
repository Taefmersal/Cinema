

<?php

//************************varibles****************************/

$firstName = $_POST['first'];
$lastName = $_POST['last'];
$email = $_POST['email'];
$phoneNumber = $_POST['phone'];
$ccNumber = $_POST['cnum'];
$expiration = $_POST['ex'];
$code = $_POST['code'];
$city = $_POST['city'];
$Dbirth = $_POST['start'];
$gender = $_POST['gender'];
$Tickect_t = $_POST['type'];
$Tickect_n = $_POST['numt'];
$language = $_POST['lan'];

//**********************connect to database*********************/

$conn = mysqli_connect('localhost', 'root','');
    
if(!$conn){
    die('Connction Failed');
}
$db_select = mysqli_select_db($conn,'ccsw321_cinema_group');

if(!$db_select){
    die('could not find ccsw321_cinema_groupdatabase');
}
 
//*************************if statement if the user press submit the information will insert in the database table**************/    
    
if(isset($_POST["submit"])){


    //*****query to insert data into database table **************/

    $query = "INSERT INTO inserttable (firstName, lastName,email,phoneNumber,ccNumber,expiration,code,city,Dbirth,gender,Tickect_t,Tickect_n,lan)
    VALUES ('$firstName', '$lastName',' $email','$phoneNumber'
    ,'$ccNumber','$expiration','$code','$city','$Dbirth','$gender','$Tickect_t','$Tickect_n','$language')";


	  $result =mysqli_query($conn,$query);

      //**********call another php page *********/

      include 'select.php';
      include 'calculation.php';


} 
     //**************if the user not submit************/
else

{
    echo "Failure!";}
    
?>
