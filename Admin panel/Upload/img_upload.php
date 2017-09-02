 <?php
     
    if(isset($_POST['but_upload'])){
        $name = $_FILES['file']['name'];
        $target_dir = "upload/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);
        $select = $_POST['services'];
        // Select file type
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Valid file extensions
        $extensions_arr = array("jpg","jpeg","png","gif");
       
        // Check extension
        if( in_array($imageFileType,$extensions_arr) ){
            
            // Convert to base64 
            $image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']) );
            $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;
            $host="localhost";
            $username="root";    			// specify the sever details for mysql
            $password="";
            $database="iadmin";
            $conn= mysqli_connect($host,$username,$password, $database);
   
            // Insert record
            $query = mysqli_query($conn,"insert into images_upload(name,Services,image) values('".$name."','".$select."','".$image."')");
           
           // mysqli_query($con,$query) or die(mysqli_error($con));
                
            // Upload file
            move_uploaded_file($_FILES['file']['tmp_name'],'../oilgas/Upload/'.$name);
            mysql_query($query) or die('Query Successful'); 
            include 'cancel.php';

        }
    }
    
    ?>

