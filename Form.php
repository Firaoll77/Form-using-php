<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form_page</title>
</head>
<body>
    <form action="insert.php" method="post">
        <table>
            <tr>
                <td>
                    <label>Name:</label>
                    <input type="text" name="name">
                </td>
            </tr>
                <td>
                    <label>E-mail:</label>
                    <input type="email" name="email" placeholder="abc123@gmail.com">
                </td>
            </tr>
            <tr>
                <td>
                    <label> Password:</label>
                    <input type="password" name=" password" placeholder="Password">
                </td>
            </tr>
            <tr>
                <td>
                    <label> Gender:</label>
            <input type="radio" name=" gender" value="M"> Male
            <input type="radio" name=" gender" value="F"> Female
                </td>
            </tr>
            <tr>
                <td>
                    <label>Phone Code:</label>
                    <select name="phoneCode" >
                        <option selected hidden value="">Select Phone Code</option>
                        <option value="251">251</option>
                        <option value="252">252</option>
                        <option value="253">253</option>
                        <option value="254">254</ption>
                        <option value="255">255</option>
                        <option value="256">256</option>
                    </select>
                    <input type="phone" name="phone">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" placeholder="Submit">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>