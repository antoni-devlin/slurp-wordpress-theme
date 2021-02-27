<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Slurp</title>
</head>

<body>
    <nav class="nav-side">
        <a href="javascript:void(0)" onclick="toggleNav()" class="nav-toggle"></a>
        <h3> <a href="/"> <?php bloginfo() ?> </a> </h3>
        <?php wp_nav_menu(array('sidebar-nav' => 'sidebar-nav', 'container' => 'ul', 'menu_class' => 'categories'));  ?>
    </nav>