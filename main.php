<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php include 'variables.php' ?>    

    <div class="container">
        <?php include 'header.inc.php' ?>

        <div class="container-greeting">
            <div class="block-greeting">
                <h1 class="greeting">
                    <?php echo $greeting ?>
                </h1>
            </div>
        </div>

        <div class="container-greeting">
            <?php include 'logo-welcome.inc.php' ?>
        </div>
        
        <?php include 'footer.inc.php' ?>
                
    </div>
</body>
</html>