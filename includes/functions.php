<?php
    function generateRandomString($length = 6){
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';

        for($i = 0; $i < $length; $i++){
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

//$seatNumber = 1;
function generateSeatNumber(){
   //session_start();

   if(!isset($_SESSION['current_number'])){
    $_SESSION['current_number'] = 1;
   }

   if(isset($_POST['next'])){
    $_SESSION['current_number']++;
   }

   $current_number = $_SESSION['current_number'];

   echo $current_number . "<br>";

   if($current_number >= 60491){
    $_SESSION['current_number'] = 1;
   }
}

function generateAccount(){
    return mt_rand(1000000000, 9999999999);
}

?>