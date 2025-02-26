<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        <h1>ADD STUDENT</h1>
        <form action="action_page.php" method="POST">
            <table border="1" cellpadding="20" cellspacing="5" width="60%">
                <th>Question</th>
                <th>Answer</th>
                <tr>
                    <td> Name: </td>
                    <td> <input type="text" name="name"> </td>
                </tr>
                <tr>
                    <td> Gender: </td>
                    <td>
                        <input type="radio" name="gender" value="male" checked> Male
                        <input type="radio" name="gender" value="female"> Female
                    </td>
                </tr>
                <tr>
                    <td> Country: </td>
                    <td>
                        <select name="country">
                            <option value="PH" select>Philippines</option>
                            <option value="AUS">Australia</option>
                            <option value="US">United States</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="right">
                        <input type="submit" name="save" value="Save">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>    