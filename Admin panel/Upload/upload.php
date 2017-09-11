<?php
if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)
{
$fileName = $_FILES['userfile']['name'];
$tmpName  = $_FILES['userfile']['tmp_name'];
$fileSize = $_FILES['userfile']['size'];
$fileType = $_FILES['userfile']['type'];

$fp      = fopen($tmpName, 'r');
$content = fread($fp, filesize($tmpName));
$content = addslashes($content);
fclose($fp);

if(!get_magic_quotes_gpc())
{
    $fileName = addslashes($fileName);
}
include 'connection.php';
$connection = new createConnection(); 			//created a new object
$connection_ref = $connection->connectToDatabase();

$query = mysqli_query($connection_ref,"INSERT INTO article_upload (name, type, size, content ) ".
"VALUES ('$fileName', '$fileType', '$fileSize', '$content')");
echo '<script language="javascript">';
echo 'alert("File uploaded!!")';
echo '</script>';
} 
?>
