<!DOCTYPE html>
<html>
    <body align = "center">
    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new mysqli($servername, $username, $password);
    if ($conn->connect_error) {
        echo "<br>";
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "CREATE DATABASE IF NOT EXISTS vote";

    if($conn->query($sql))
    {
    
    }
    else
    {
        echo "<br>";
        echo "Databased creation error";
    }

    $dbname = "vote";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        echo "<br>";
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "CREATE TABLE IF NOT EXISTS voter (
        voter_id INT(50) PRIMARY KEY,
        age INT(50),
        f_name VARCHAR(50),
        l_name VARCHAR(50)
        )";
    if($conn->query($sql))
    {
        
    }
    else
    {
        echo "<br>";
        echo "Table creation error";
    }

    $sql = "CREATE TABLE IF NOT EXISTS election_center (
        center_id INT(50) PRIMARY KEY,
        pin INT(50),
        c_name VARCHAR(50)
        )";
    if($conn->query($sql))
    {
        
    }
    else
    {
        echo "<br>";
        echo "Table creation error";
    }
    
    $sql = "INSERT INTO election_center(center_id, pin, c_name) VALUES 
    ('111111', '400017', 'Dharavi Transit Camp'), 
    ('222222', '400022', 'New Sion Municipal School'),
    ('333333', '400037', 'Municipal New Building'),
    ('444444', '400016', 'City of Los Angeles Municipal School')";

    if($conn->query($sql))
    {

    }
    else
    {
        echo "<br>";
        echo "Data Not Inserted";
    }
    
    $sql = "CREATE TABLE IF NOT EXISTS candidate (
        candidate_id INT(50) PRIMARY KEY,
        party_name VARCHAR(50),
        can_name VARCHAR(50)
        )";
    if($conn->query($sql))
    {
        
    }
    else
    {
        echo "<br>";
        echo "Table creation error";
    }

    $sql = "INSERT INTO candidate(candidate_id, party_name, can_name) VALUES 
    ('121212', 'Bharatiya Janata Party', 'Narendra Modi'), 
    ('212121', 'Shiv Sena', 'Uddhav Thackeray'),
    ('131313', 'INC', 'Rahul Gandhi'), 
    ('313131', 'NCP', 'Sharad Pawar')";
    
    if($conn->query($sql))
    {
    
    }
    else
    {
        echo "<br>";
        echo "Data Not Inserted";
    }

    $sql = "CREATE TABLE IF NOT EXISTS constituency (
        constituency_id INT(50) PRIMARY KEY,
        ward_no INT(50),
        con_name VARCHAR(50)
        )";
    if($conn->query($sql))
    {
        
    }
    else
    {
        echo "<br>";
        echo "Table creation error";
    }

    $sql = "INSERT INTO constituency(constituency_id, ward_no, con_name) VALUES 
    ('26', '26', 'Mumbai North'), 
    ('27', '27', 'Mumbai North West'),
    ('28', '28', 'Mumbai North East'), 
    ('29', '29', 'Mumbai North Central'),
    ('30', '30', 'Mumbai South Central')";
    if($conn->query($sql))
    {
                  
    }
    else
    {
        echo "<br>";
        echo "Data Not Inserted";
    }

    $sql = "CREATE TABLE IF NOT EXISTS result (
        candidate_id INT(50) PRIMARY KEY,
        party_name VARCHAR(50),
        can_name VARCHAR(50),
        votes INT(50)
        )";
    if($conn->query($sql))
    {
        
    }
    else
    {
        echo "<br>";
        echo "Table creation error";
    }
    
    $sql = "INSERT INTO result(candidate_id, party_name, can_name, votes) VALUES 
    ('121212', 'Bharatiya Janata Party', 'Narendra Modi', 0), 
    ('212121', 'Shiv Sena', 'Uddhav Thackeray', 0),
    ('131313', 'INC', 'Rahul Gandhi', 0), 
    ('313131', 'NCP', 'Sharad Pawar', 0)";
    if($conn->query($sql))
    {
        
    }
    else
    {
        echo "<br>";
        echo "Data Not Inserted";
    }
    
    
    
    
    ?>
        <h2>Login Page</h2>
        <table border="1" align = "center">
            <tr>
                <td>
                    <a href="user.html"><button>Sign Up Voter</button></a>
                </td>
                <td>
                    <a href="admin.html"><button>Login as admin</button></a>
                </td>
            </tr>
            <tr>
    </body>
</html>