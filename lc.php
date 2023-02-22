<?php
    session_start();
    if(isset($_POST['genarate'])){
        require_once("connection.php");
        $gn=$_POST['genarate'];
        $code=$_POST['passcode'];
        if($code=='110824'){
            require_once("connection.php");
            $_SESSION['gn']=$gn;
            $insert = "INSERT INTO f_url (real_url,g_time)VALUES('$gn','$date')";
            $com= mysqli_query($connection,$insert) or die(mysqli_error($connection));
            $select = "SELECT * FROM f_url ORDER BY id DESC";
            $sc=mysqli_query($connection,$select);
            $data = mysqli_fetch_assoc($sc);
            $id = $data['id'];
            $_SESSION['id']=$id;
            header("Location:linkgenarate.php");
        }else{
            $_SESSION['warn']="Your pass code don't match";
            $_SESSION['gn']=$gn;
            header("Location:linkgenarate.php");
        }
    }
?>
