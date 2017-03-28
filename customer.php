<!DOCTYPE html>
<html>
<head>
    <title>Customer Page</title>
</head>
<body>
    <form action="customer.php" method="post">
        <label for="fname">First Name: </label>
        <input type="text" id="fname" name="fname">
        <br>
        <label for="country">Chosen Country: </label>
        <input type="text" id="country" name="country">
        <hr>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
    <br>
    <?php
        if(!empty($_POST['fname']) && !empty($_POST['country'])) {
            echo "Hi ".$_POST['fname']."<br>";
            echo "Your allocated email address has been set to: ".$_POST['fname'].strlen($_POST['country'])."@gcutours.com<br>";
            echo "Your password is: ".strrev($_POST['fname']);
        }
    ?>
</body>
</html>