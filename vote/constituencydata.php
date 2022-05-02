<!DOCTYPE html>
<html>
    <body>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "vote";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            echo "<br>";
            die("Connection failed: " . $conn->connect_error);
        }
        
        $conid = $_POST['conid'];
        $wno = $_POST['wno'];
        $con_name = $_POST['con_name'];

        $sql = "INSERT INTO constituency(constituency_id, ward_no, con_name) VALUES ('$conid', '$wno', '$con_name')";
        if($conn->query($sql))
        {
            header("Location: admin.html");
            exit();            
        }
        else
        {
            echo "<br>";
            echo "Data Not Inserted";
        }
        ?>
    </body>
</html>