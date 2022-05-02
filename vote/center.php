<!DOCTYPE html>
<html>
    <body align = center>
        <form action="centerdata.php" method="post">
            <h2><b>New Center</b></h2>
    
            <table border="1" align = center>
                <tr>
                    <td>
                        <label>Enter Center ID: </label>
                    </td>
                    <td>
                        <input type="text" name="cenid" placeholder="Enter Center ID"><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Enter PIN: </label>
                    </td>
                    <td>
                        <input type="text" name="pin" placeholder="Enter PIN"><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Enter Center Name: </label>
                    </td>
                    <td>
                        <input type="text" name="cen_name" placeholder="Enter Center Name"><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button>Add Center</button>
                    </td>
                </tr>
            </table>
            
        </form>
        <a href="admin.html"><button>Back</button></a>
    </body>
</html>