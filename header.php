<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mutual</title>
    <?php wp_head(); ?>
</head>

<body>

    <header>
        <?php
            wp_nav_menu(array( 
                'theme_location' => 'primary',
             )
        )
        ?>
    </header>

</body>

</html>