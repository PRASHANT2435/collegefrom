<?php
$con = new mysqli("localhost", "root", "", "tcsc");
if ($con->connect_error) {
    echo "Failed to connect to MySQL: " . $con->connect_error;
    exit();
}

$fullnamefisrt = $_POST["First"];
$fullnamemiddle = $_POST["MiddleName"];
$fullnamelast = $_POST["LastName"];
$fatherfisrtname =$_POST["fathernamefirst"];
$fatherlastname =$_POST["fathernamelast"];
$Tel =$_POST["fathertel"];
$matherfisrtname =$_POST["mathernamefirst"];
//$matherlastname =$_POST["mathernamelast"];
$mathertel =$_POST["mathertelnumber"];
$age = $_POST["Age"];
$email = $_POST["Email"];
$contact = $_POST["tel"];
$bday = $_POST["dob"];
$aadhar = $_POST["aadhar"];
$gender = "male";
$address = $_POST["Address"];
$city = $_POST["City"];
$country = $_POST["Country"];
$code = $_POST["pincode"];
$tenpercentage =$_POST["tenpercentage"];
$percentagen =$_POST["percentage"];
$level =$_POST["level"];
$course =$_POST["course"];
$semester = $_POST["sem"];
$rollno = $_POST["rollno"];
$div = $_POST["div"];
//img
//$imgaadhar = ""/*$_POST["image1"]*/;
//$imgmarksheet ="" /*$_POST["image2"*/;


$sql = " INSERT INTO `data` (`rollno`, `lastname`, `firstname`, `middlename`,`mathernamefirst`,`contact`,`fathernumber`,`mathernumber`,`age`,`email`,`aadhar`,`bod`,`gender`,`address`,`city`,`country`,`pinecode`,`tenpercentage`,`percentage`,`level`,`course`,`sem`,`div`,`imageone`,`imagetwo`) VALUES ('$rollno','$fullnamelast ','$fullnamefisrt ','$fullnamemiddle','$matherfisrtname','$contact','$Tel','$mathertel','$age','$email','$aadhar','$bday','$gender','$address','$city','$country','$code','$tenpercentage','$percentagen','$level','$course','$semester','$div','','')";


// Mysqli

//img 1
if ($con->query($sql) == TRUE) {
    echo "New record created successfully";
    $last_id = $con->insert_id;


    $targetDir = "images/";
    $fileName = basename($_FILES["image"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    if (!empty($_FILES["image"]["name"])) {
        // Allow certain file formats
        $allowTypes = array('jpg', 'png', 'jpeg');
        if (in_array($fileType, $allowTypes)) {
            // Upload file to server
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
                // Insert image file name into database
                $insert = $con->query("UPDATE `studentdata` SET `imageone`='" . $fileName . "' WHERE `uid`='" . $last_id . "'");
                if ($insert) {
                    $statusMsg = "The file " . $fileName . " has been uploaded successfully.";
                } else {
                    $statusMsg = "File upload failed, please try again.";
                }
            } else {
                $statusMsg = "Sorry, there was an error uploading your file.";
            }
        } else {
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
        }
    } else {
        $statusMsg = 'Please select a file to upload.';
    }
  
  if ($con->query($sql) == TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
}


//img 2
if ($con->query($sql) == TRUE) {
    echo "New record created successfully";
    $last_id = $con->insert_id;


    $targetDir = "images/";
    $fileName = basename($_FILES["image1"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    if (!empty($_FILES["image1"]["name"])) {
        // Allow certain file formats
        $allowTypes = array('jpg', 'png', 'jpeg');
        if (in_array($fileType, $allowTypes)) {
            // Upload file to server
            if (move_uploaded_file($_FILES["image1"]["tmp_name"], $targetFilePath)) {
                // Insert image file name into database
                $insert = $con->query("UPDATE `studentdata` SET `imagetwo`='" . $fileName . "' WHERE `uid`='" . $last_id . "'");
                if ($insert) {
                    $statusMsg = "The file " . $fileName . " has been uploaded successfully.";
                } else {
                    $statusMsg = "File upload failed, please try again.";
                }
            } else {
                $statusMsg = "Sorry, there was an error uploading your file.";
            }
        } else {
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
        }
    } else {
        $statusMsg = 'Please select a file to upload.';
    }
  
  if ($con->query($sql) == TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
}

?>