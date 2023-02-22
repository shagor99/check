<?php
session_start();
require_once("connection.php");
if(!isset($_POST['id'])){
    echo "Not Found";
    die();
}
if($_POST['id']!= 0){
   $id=$_POST['id'];
   $select="SELECT * FROM f_url WHERE id='$id'";
   $s_c=mysqli_query($connection,$select)or die("error");
   $data=mysqli_fetch_assoc($s_c);
    $link=$data['real_url'];
    $l = "https://www.youtube.com/redirect?event=comments&redir_token=QUFFLUhqblVIYVJhV25yWWhtaFhRcnBiQzdlUTlKbmFVd3xBQ3Jtc0tuRmFiTENfa0E1SUVfUG5tVXNjbUFqQTNuelZwU2pkNDVPVGlqb2lLQTVLUkZkdlFXRjBieURrWGZzZl91MDJ4UVpfZF81b1V1SktUNEhiTklhaGhHUTJiQXBDOE5VTk5pUzF5OTlJczluZk9FQ0QwRQ&q=$link&html_redirect=1";
    echo "<script>
    myFunction();
    function myFunction() {
      var desktopFallback = '$l',
                    
                        
        mobileFallback = '$l';
    
        if( /Android|iPhone|iPad|iPod/i.test(navigator.userAgent) ) {
            window.location = app;
            window.setTimeout(function() {
                window.location = mobileFallback;
            }, 25);
        } else {
            window.location = desktopFallback;
        }
    
        function killPopup() {
            window.removeEventListener('pagehide', killPopup);
        }
    
        window.addEventListener('pagehide', killPopup);
    }
    </script>";
}else{
    $link ="https://diplomaresultbd.com/";
    $l = "https://www.youtube.com/redirect?event=comments&redir_token=QUFFLUhqblVIYVJhV25yWWhtaFhRcnBiQzdlUTlKbmFVd3xBQ3Jtc0tuRmFiTENfa0E1SUVfUG5tVXNjbUFqQTNuelZwU2pkNDVPVGlqb2lLQTVLUkZkdlFXRjBieURrWGZzZl91MDJ4UVpfZF81b1V1SktUNEhiTklhaGhHUTJiQXBDOE5VTk5pUzF5OTlJczluZk9FQ0QwRQ&q=$link&html_redirect=1";
    echo "<script>
    myFunction();
    function myFunction() {
      var desktopFallback = '$l',
                    
                        
        mobileFallback = '$l';
    
        if( /Android|iPhone|iPad|iPod/i.test(navigator.userAgent) ) {
            window.location = app;
            window.setTimeout(function() {
                window.location = mobileFallback;
            }, 25);
        } else {
            window.location = desktopFallback;
        }
    
        function killPopup() {
            window.removeEventListener('pagehide', killPopup);
        }
    
        window.addEventListener('pagehide', killPopup);
    }
    </script>";
}
?>