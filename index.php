<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .all{
            position:absolute;
            background-image:url("img/jkl.jpg");
            height:100vh;
            width:100%;
            background-size:cover;
            background-position:center;
        }
        .cdd{
            position:absolute;
            padding:10px;
            width:80%;
            height:50px;
            left:0;
            right:0;
            top:0;
            bottom:0;
            margin:auto;
            animation-name:example;
            animation-duration: 1s;
            animation-iteration-count: infinite;
        }
        @keyframes example {
  0%   {background-color:black; }
  25%  {background-color:purple; }
  50%  {background-color:black; }
  75%  {background-color:purple; }
  100% {background-color:black; }
}
.btnn{
    background-color:transparent;
    border:none;
    color:white;
    cursor:pointer;
}
    </style>
    <title></title>
</head>
<body>
    <a href="#"></a>
   
    <?php
            require_once("connection.php");
            if(isset($_GET['type'])){
                $lfd = $_GET['type'];
            }else{
                $lfd =0;
            }
           
            $check = "SELECT  * FROM f_url WHERE id = '$lfd'";
            $comp = mysqli_query($connection,$check);
            $ch = mysqli_num_rows($comp);
            
            $data = mysqli_fetch_assoc($comp);
            ?>


                <div class="all">
                <input type="hidden" value="<?php echo $lfd ; ?>" name="chat-id" id="chat-id">    
                    <button id="goTo" class="btnn">
                    <div class="card cdd  text-center text-white shadow-lg">

                            <div class="fw-bold fs-1.3">
                                JOIN US
                            </div>
                           
                    </div>
        </button>
                </div>
                <div id="showw" style="diplay:none;"></div>
            <?php
          
            ?>

       
    ?>
</body>
</html>
<script>
                        $(document).ready(function(){
                                $("#goTo").click(function(){
                                    var id= $("#chat-id").val();
                                    $.ajax({
                                        method:"POST",
                                        url:"redirect.php",
                                        data:"id="+id,
                                        success: function(data){
                                            $('#showw').html(data);
                                            // console.log(data)
                                        }
                                    })
                                })
                        })
                </script>