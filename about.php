<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About me</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include 'variables.php' ?>

    <div class="container">
        <?php include 'header.inc.php' ?>

        <div class="container-about">
            <img id="foto" src="img/bruce.jpg" alt="">
            <div class="about">
                <?php echo "My name is $name $surname. I'm $age years old and i'm from $city. My profession is $profession."?>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti obcaecati inventore tenetur omnis odio distinctio officiis, quo tempora, corporis nisi adipisci voluptates reprehenderit, iusto molestias expedita nulla temporibus itaque dolore.</p>
            </div>
        </div>    
        
        
        <?php include 'footer.inc.php' ?>
    </div>
</body>
</html>