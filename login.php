<!DOCTYPE html>
<html>
<body>
 
<?php
$uid = $_POST['userid'];
$pw = $_POST['password'];
$gen = $_POST['gender']; 
if($uid == 'cnn ' and $pw == 'cnn 34' and $gen == 'ben32')
{    
    session_start();
    $_SESSION['sid']=session_id();
    echo "Log in successfully";
}
?>
 
</body>
</html>