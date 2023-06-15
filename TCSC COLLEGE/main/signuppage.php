<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create A New Account</title>
</head>
<body>
    <center>
    <div class="border">
        <div class="container">
            <img src="\ILS\Thakur.jfif" alt="" height="100x" width="auto"/>
        </div>
        <form action="signupdata.php" method="POST">
		    <h2>Sign up</h2>
		    <div class="col">
                <div class="row">
                    <label for="">UserName:</label>
                    <input class="form-control" type="text" value="" name="username" placeholder="New Username"/>
                </div>
                <div class="row">
                    <label for="">Password:</label>
                    <input class="form-control" type="text" value="" name="password" placeholder="New Password">
                </div>
            </div>
            <br>
            <div class="col">
                <div class="row">
                    <input type="submit" value="create">
                </div>
            </div>
	    </form>
    </div>
    </center>
    
  
</body>
</html>