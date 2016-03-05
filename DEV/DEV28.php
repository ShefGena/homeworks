<form method="post" action="DEV28.php">

    <table>
        <tr>
            <td><label for="login">Your Name:</label></td>
            <td><input type="text" name="login" placeholder="Enter your name" /></td>
        </tr>
        <tr>
            <td><label for="email">Your Email:</label></td>
            <td><input type="email" name="email" placeholder="Enter your email" /></td>
        </tr>
        <tr>
            <td><label for="phone">Your Phone:</label></td>
            <td><input type="text" name="phone" placeholder="Enter your phone" /></td>
        </tr>
    </table>

    <input type="submit" value="Register" />

</form>
<?php
print_r($_POST);
?>
