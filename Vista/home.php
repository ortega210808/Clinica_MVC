<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['tag_page']; ?></title>
</head>
<body>
    <?php 
        dep($data); 
    ?>
    <!-- <h1><?php echo $data['page_title']; ?></h1>

    <?php print_r($data); ?> -->

    <?php echo token(); ?>
</body>
</html>