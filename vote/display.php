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
        $center = $_POST['rec'];
        $candidate = $_POST['dec'];

        $sql = "UPDATE result SET votes = votes + 1 WHERE candidate_id = '$candidate';";
        if($conn->query($sql))
        {
            echo ("<script LANGUAGE='JavaScript'> window.alert('Thank You For Voting'); window.location.href='index.php'; </script>");
            
        }
        
    ?>
    </body>
</html>