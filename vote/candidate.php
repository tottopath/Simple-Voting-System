<!DOCTYPE html>
<html>
<body align = center>
        <form action="candidatedata.php" method="post">
            <h2><b>New Candidate</b></h2>
    
            <table border="1" align = center>
                <tr>
                    <td>
                        <label>Enter Candidate ID: </label>
                    </td>
                    <td>
                        <input type="text" name="cid" placeholder="Enter Candidate ID"><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Enter Party Name: </label>
                    </td>
                    <td>
                        <input type="text" name="pname" placeholder="Enter Party Name"><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Enter Candidate Name: </label>
                    </td>
                    <td>
                        <input type="text" name="c_name" placeholder="Enter Candidate Name"><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button>Add Candidate</button>
                    </td>
                </tr>
            </table>
            
        </form>
        <a href="admin.html"><button>Back</button></a>
    </body>
</html>