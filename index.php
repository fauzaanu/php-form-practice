<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <?php

    $file = fopen("data.txt", "r");
    if (filesize("data.txt") > 0){

        $whole_file = fread($file, filesize("data.txt"));
        // $all_data = fgets($file);
        // fgets only loads the first line of the file
        echo "$whole_file";
        fclose($file);
    }
   
    ?>
    <hr>
    <form action="post.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Your(🫵) Name">
        <label for="fruit">Favourite Fruit</label>
        <input type="text" name="fruit" placeholder="Your(🫵) Favourite Fruit">
        <input id="submit" type="submit" value="Submit">
    </form>
</body>
</html>