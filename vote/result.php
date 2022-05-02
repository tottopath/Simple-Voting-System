<!DOCTYPE html>
<html>
    <body align = center>
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

        $sql = "SELECT * FROM `result` WHERE votes=(select max(votes) from result)";
        $result = mysqli_query($conn, $sql);
        $ans = mysqli_fetch_assoc($result);

        mysqli_free_result($result);
        echo "The Winning candidate is: <br>";
        print_r($ans);
        ?>
        <br><br>
        <a href="admin.html"><button>Back</button></a>

    </body>
</html>