<!DOCTYPE html>
<html>
    <body align = center>
    <form action="display.php" method="post" >

        <table border="1" align = center>
            <tr>
                <td>
                    <label>Select Election Center: </label>
                    <br><br>
                    <input type="radio" name="rec" value="22222">Center ID: 22222<br>PIN: 400022<br>Center Name: New Sion Municipal School<br>
                    <br>
                    <input type="radio" name="rec" value="111111">Center ID: 111111<br>PIN: 400017<br>Center Name: Dharavi Transit Camp<br>
                    <br>
                    <input type="radio" name="rec" value="333333">Center ID: 333333<br>PIN: 400037<br>Center Name: Municipal New Building<br>
                    <br>
                    <input type="radio" name="rec" value="444444">Center ID: 444444<br>PIN: 400016<br>Center Name: City of Los Angeles Municipal School<br>
                    <br>
                </td>
                <td>
                    <label>Select Candidate: </label>
                    <br><br>
                    <input type="radio" name="dec" value="121212">Candidate ID: 121212<br>Party Name: Bharatiya Janata Party<br>Candidate Name: Narendra Modi<br>
                    <br>
                    <input type="radio" name="dec" value="131313">Candidate ID: 131313<br>Party Name: INC<br>Candidate Name: Rahul Gandhi<br>
                    <br>
                    <input type="radio" name="dec" value="212121">Candidate ID: 212121<br>Party Name: Shiv Sena<br>Candidate Name: Uddhav Thackeray<br>
                    <br>
                    <input type="radio" name="dec" value="313131">Candidate ID: 313131<br>Party Name: NCP<br>Candidate Name: Sharad Pawar<br>
                    <br>
                </td>
            </tr>
        </table>
        <br>
        
        <button type="submit">Vote</button>
        
    </form>
    </body>
</html>