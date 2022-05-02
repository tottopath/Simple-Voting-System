<!DOCTYPE html>
<html>
    <body align = center>
        <form action="constituencydata.php" method="post">
            <h2><b>New consituency</b></h2>
    
            <table border="1" align = center>
                <tr>
                    <td>
                        <label>Enter constituency id: </label>
                    </td>
                    <td>
                        <input type="text" name="conid" placeholder="Enter constituency id"><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Enter ward no: </label>
                    </td>
                    <td>
                        <input type="text" name="wno" placeholder="Enter ward no"><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Enter constituency name: </label>
                    </td>
                    <td>
                        <input type="text" name="con_name" placeholder="Enter constituency name"><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button>Add Consituency</button>
                    </td>
                </tr>
            </table>
            
        </form>
        <a href="admin.html"><button>Back</button></a>
    </body>
</html>