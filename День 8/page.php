<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <style>
        .policy-container { max-width: 800px; margin: 60px auto; padding: 20px; background: #fff; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); font-family: sans-serif; line-height: 1.6; color: #333; }
        .policy-container h1 { color: #1a4499; margin-bottom: 30px; }
        .back-link { display: inline-block; margin-bottom: 20px; color: #1a4499; text-decoration: none; font-weight: bold; }
    </style>
</head>
<body>
    <div class="policy-container">
        <a href="/" class="back-link">← На главную</a>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <div class="policy-content">
                <?php the_content(); ?>
            </div>
        <?php endwhile; endif; ?>
    </div>
</body>
</html>