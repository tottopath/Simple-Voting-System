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
        
        $cenid = $_POST['cenid'];
        $pin = $_POST['pin'];
        $cen_name = $_POST['cen_name'];

        $sql = "INSERT INTO election_center(center_id, pin, c_name) VALUES ('$cenid', '$pin', '$cen_name')";
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