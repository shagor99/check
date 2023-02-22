<?php
    session_start();
    require_once("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Your Link</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .cdd{
            width:80%;
            left:0;
            right:0;
            margin:auto;
        }
    </style>
</head>
<body>
    <div class="card cdd mt-5 bg-primary text-white shadow-lg">
        <?php
            if(isset($_SESSION['warn'])){
                ?>

        <div class="warn bg-danger text-center p-2"> <?php echo $_SESSION['warn']; ?> </div>
        <?php
        unset($_SESSION['warn']);
            }
        ?>
            <div class="card-header">
                <h4>Make Your Link</h4>
            </div>
            <div class="card-body">
                <form action="lc.php" method="post">
                    <div class="form-group mt-1">
                        <label for="">URL</label>
                        <input type="text"  value="<?php if(isset($_SESSION['gn'])){ echo $_SESSION['gn'] ; unset($_SESSION['gn']); } ?>" class="mt-2 form-control form-control-sm" name="genarate" id="" required>
                    </div>
                    <div class="form-group mt-1">
                        <label for="">Pass Code</label>
                        <input type="text" mxlength="10" class="mt-2 form-control form-control-sm" name="passcode" id="" required>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-dark btn-sm">Short</button>
                    </div>
                </form>
                <?php
                    if(isset($_SESSION['id'])){
                        $f="https://";
                        $l=$_SESSION['id'];
                        $d = $_SERVER['HTTP_HOST'];
                        $link = $f.$d.'/'.$l;
                        ?>

                <div class="form-group mt-5">
                        <button onclick="copyToClipboard()" class="btn btn-warning btn-sm">Copy</button>
                        <input type="text" value = "<?php echo $link ?>" class="mt-2 form-control form-control-sm" name="" id="myvalue" readonly>
                    </div>
                    <?php
                    unset($_SESSION['id']);
                    } 
                ?>
            </div>
    </div>

</body>
<script>
    function copyToClipboard() {
    var textBox = document.getElementById("myvalue");
    textBox.select();
    document.execCommand("copy");
}
</script>
</html>