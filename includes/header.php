<!-- | ALL HEADER CONTENT HERE | -->

<!--header.php file-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,1,0" />

    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/topNav.css">
    <link rel="stylesheet" href="../styles/sidebar.css">

    <?php
    // Get the current page's filename
    $current_page = basename($_SERVER['PHP_SELF']);

    // Conditionally load styles based on the current page
    if ($current_page == 'dashboard.php') {
        echo '<link rel="stylesheet" href="../styles/dashboard.css">';
        echo '<script src="../scripts/dashboard.js"></script>';

    } elseif ($current_page == 'analytics.php') {
        echo '<link rel="stylesheet" href="../styles/analytics.css">';

    } elseif ($current_page == 'inventory.php') {
        echo '<link rel="stylesheet" href="../styles/inventory.css">';

    } elseif ($current_page == 'rental-boxes.php') {
        echo '<link rel="stylesheet" href="../styles/rental-boxes.css">';

    } elseif ($current_page == 'sales.php') {
        echo '<link rel="stylesheet" href="../styles/sales.css">';

    } elseif ($current_page == 'settings.php') {
        echo '<link rel="stylesheet" href="../styles/settings.css">';
    }
    ?>


</head>
