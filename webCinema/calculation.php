

<?php

//**********************connect to database*********************/

$conn = mysqli_connect('localhost', 'root','');
    
if(!$conn){
    die('Connction Failed');
}
$db_select = mysqli_select_db($conn,'ccsw321_cinema_group');

if(!$db_select){
    die('could not find ccsw321_cinema_groupdatabase');
}

/************************varibles****************************/

$Tickect_t = $_POST['type'];
$Tickect_n = $_POST['numt'];
$Cgolden = 40;
$Cmax = 35;
$Cnormal = 20;
$total = 0;


//if the user choose GOLDEN tickect it will calculate the the number of tickect * 40
    if ($Tickect_t == $Cgolden){
        $total = $Tickect_n * 40;
        echo 'The total price: ' .  $total . 'SAR';
    }
//if the user choose MAX tickect it will calculate the the number of tickect * 35
    else if ($Tickect_t == $Cmax){
        $total = $Tickect_n * 35;
        echo 'The total price: ' .  $total . 'SAR';
    }
//if the user choose NORMAL tickect it will calculate the the number of tickect * 20
    else{
        $total = $Tickect_n * 20;
        echo 'The total price: ' .  $total . 'SR';
    }



?>
