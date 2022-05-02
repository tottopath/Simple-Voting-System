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
        
        
        $cid = $_POST['cid'];
        $pname = $_POST['pname'];
        $c_name = $_POST['c_name'];

        $sql = "INSERT INTO result(candidate_id, party_name, can_name, votes) VALUES ('$cid', '$pname', '$c_name', 0)";
        if($conn->query($sql))
        {
            $sql = "INSERT INTO candidate(candidate_id, party_name, can_name) VALUES ('$cid', '$pname', '$c_name')";
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
        }
        else
        {
            echo "<br>";
            echo "Data Not Inserted";
        }

        ?>
    </body>
</html>