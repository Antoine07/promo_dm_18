<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php echo $error ?? '' ?>
    <form <?php echo $validate?? '' ; ?> action="login.php" method="post">
        <p>
            <?php echo $email; ?>
        </p>
        <p>
            <?php echo $password; ?>
        </p>
        <p>
            <input type="submit">
        </p>
    </form>
</body>

</html>