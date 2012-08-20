<?php 
if($_POST){
    $name=$_POST['name'];    
    $email=$_POST['email'];    
    $phone=$_POST['phone']; 
    $street=$_POST['street']; 
    $city=$_POST['city']; 
    $state=$_POST['state']; 
    $zip=$_POST['zip']; 
    $comments=$_POST['comments']; 
    
    mail("contact@7712th.com", "Contact Form via 7712th.com", $name . ' , ' . $email . ' , ' . $phone . ' , ' . $street . ' , ' . $city . ' , ' . $state . ' , ' . $zip . ' , ' . $comments, "From:" . $email); 
    
}
?>