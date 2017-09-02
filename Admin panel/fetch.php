
<?php
 $host="localhost";
 $username="root";    			// specify the sever details for mysql
 $password="";
 $database="iadmin";
$conn= mysqli_connect($host,$username,$password, $database);
?>
 <!DOCTYPE html>
 <html >
 <head>
    <title>Home</title>

 </head>
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
                <th>content</th>

            </tr>
        </thead>
        <tbody>
            <?php
           while ($row = mysqli_fetch_assoc($result)) {
              echo
         "<tr>
        <td>{$row['name']}</td>
        <td>{$row['content']}</td>
        </tr>";
          }
            ?>
        </tbody>
    </table>
 </body>
 </html>
