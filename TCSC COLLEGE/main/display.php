<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Entries</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> <style></style>
</head>
<body>
    <div class="container">
            <div>
                <img src="banner.jpg" alt="" height="200x" width="auto"/>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Uid</th>
                                <th>Name</th>
                                <th>Course</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $con= new mysqli("localhost","root","","tcsc");
                                if($con->connect_error){
                                echo "Failed to connect to MySQL: ".$con->connect_error;
                                exit();
                                }
                                $sql= "SELECT `UID`, `firstname`, `lastname` FROM `data` WHERE 1";
                                $result= mysqli_query($con, $sql);

                                while($row=mysqli_fetch_array($result)){
                                    echo '<tr>';
                                    echo "<td>".$row['UID']."</td>";
                                    echo "<td>".$row['firstname']." ".$row['lastname']."</td>";
                                    echo "<td><a href = 'details.php' UID=$row[0]>Click</a></td>";
                                    echo '<tr>';
                                }
                                
                            ?>
                        </tbody>
                    </table>
            </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>