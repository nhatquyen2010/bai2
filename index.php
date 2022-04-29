<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 02 - Html va PHP</title>
</head>
<body>
    <!-- Header -->
    <?php include_once './inc/header.php' ?>
    <h1>Ngon ngu lap trinh PHP</h1>
    <?php echo 'Hello World'; ?>
    <?php
        $language = 'PHP';
        var_dump($language);
    ?>
     <?php include './inc/content.php' ?>
    <!-- Footer -->
     <?php include_once './inc/footer.php' ?>
    <footer>Footer</footer>
</body>
</html>