<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(is_front_page()) { bloginfo("name"); } else { wp_title(""); }?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/style.css" />
</head>
<body>
    
</body>
</html>