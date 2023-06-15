<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <center>
        <div class="container">
            <div>
                <img src="Thakur.jfif" alt="" height="100x" width="auto">
            </div>
        </div>
        <h1>Login ID and Password:</h1>
        <form action="display.php"  method="post" enctype="multipart/form-data">
        <form  method="post" enctype="multipart/form-data">
            <div class="col">
                <div class="row">
                    <label class="form-control" for="">Username</label>
                    <input class=" " type="text" name="username" value="" placeholder="username">
                </div>
                <div class="row">
                    <label class="form-control" for="">Password</label>
                    <input class=" " type="password" name="password" value="" placeholder="password"> 
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <input type="submit" class="btn btn-primary" name="submit"/>
                </div>
                <div class="col">
                    <?php
                        echo "<td><a href=signuppage.php?>New Account?</a></td>";
                    ?>
                </div>
            </div>
        </form>
        </center>
    </div>
</body>
</html>