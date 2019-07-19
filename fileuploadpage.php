<?php

  $loggedin = 0;

	if (isset($_COOKIE["xsession"]))
	{
		$loggedin = 1;
	}
	else
	{
		header("Location: login1.html");
}

$target_dir = "~/workspace/www/uploads/"; // <-- change this to your uploads directory
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        #echo "File is not an image.";
        $uploadOk = 1;
    }
}

echo "<br>tmp_name = " . $_FILES['fileToUpload']['tmp_name'] . "<br>";
echo "<br>size = " . $_FILES['fileToUpload']['size'] . "<br>";
echo "<br>name = " . $_FILES['fileToUpload']['name'] . "<br>";
echo "<br>target_file = " . $target_file . "<br>";
#echo "<br>max_file_size = " . $_FILES['fileToUpload']['MAX_FILE_SIZE'] . "<br>";
#system("ls " . $_FILES['filetoupload']['tmp_name']);

if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$_FILES['fileToUpload']['name'])) 
{
  echo "file was successfully upload somewhere <br>";
}
  
  if (
        !isset($_FILES['fileToUpload']['error']) ||
        is_array($_FILES['fileToUpload']['error'])
    )
  
  // Check $_FILES['upfile']['error'] value.
    switch ($_FILES['fileToUpload']['error']) {
        case UPLOAD_ERR_OK:
            break;
        case UPLOAD_ERR_NO_FILE:
            throw new RuntimeException('No file sent.');
        case UPLOAD_ERR_INI_SIZE:
        case UPLOAD_ERR_FORM_SIZE:
            throw new RuntimeException('Exceeded filesize limit.');
        default:
            throw new RuntimeException('Unknown errors.');
    }
?>

