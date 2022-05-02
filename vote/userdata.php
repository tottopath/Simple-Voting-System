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
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $age = $_POST['age'];
        $vid = $_POST['vid'];

        $sql = "INSERT INTO voter(voter_id, age, f_name, l_name) VALUES ('$vid', '$age', '$fname', '$lname')";
        if($conn->query($sql))
        {
            echo "<br>";
            header("Location: votefor.php");
        }
        else
        {
            echo "<br>";
            echo "Data Not Inserted";
        }
        ?>
    </body>
</html>