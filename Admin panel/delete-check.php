<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iadmin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>
<html>
 <body>
    <!--right-->
    <div id="body">
        <div id="left">
        </div></div>
    <?php
    //execute the SQL query and return records
    $result = mysqli_query($conn,"SELECT * FROM article_upload");
    ?>
    <table>
        <thead>
            <tr>
                <th>name</th>
                <th>delete</th>

            </tr>
        </thead>
        <tbody>
            <?php
           while ($row = mysqli_fetch_assoc($result)) {
               //$id = $row['id'];
            ?>
         <tr>
        <td><?php echo $row['name'] ?></td>
        <td><button name="del" value="delete" onclick="d()" >delete</button></td>
             <td><a href='delete-check.php?hello=true'>Run PHP Function</a></td>
             <td><img src="../oilgas/oilgas/img/icons/basket.png" onClick="" width="20px" height="20px" border=0><br></td>
        </tr>
         <?php } ?>
        </tbody>
    </table>
     <form method="post">
         <?php
   while($r=mysql_fetch_array($result))
    {
         echo $r=['id'];
        }?>
         <!--<input type="hidden" name="id_to_be_deleted" value="<?php echo $id; ?>" />
   <input type="submit" name="delete_row" />-->
</form>
 </body>    
</html>

<?php
function d(){
if(isset($_POST['delete_row'])) {
   $id = $_POST['id_to_be_deleted'];
       if(!mysqli_query($conn, "DELETE FROM article_upload WHERE id = $r['id']")) {
     echo mysqli_error($conn);
   } else {
      //redirect $_SERVER['REQUEST_URI'];
   }
}
}
?>
<?php
// sql to delete a record
/*
 if (isset($_GET['del']))
 {
     echo "fuuuuu";
     $sql = "DELETE FROM article_upload WHERE id = $rec";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
 }*/
$conn->close();
?>