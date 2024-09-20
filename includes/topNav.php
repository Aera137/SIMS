<?php
include 'header.php';
?>

<div class="top-nav-container">
    <!-- Logo on the left -->
    <img src="../assets/images/logo.png" id="logo">

    <div class="right-container">
        <!-- Theme Toggler (Center-right) -->
        <div class="theme-toggler">
            <span class="material-symbols-rounded active" id="night-mode">light_mode</span>
            <span class="material-symbols-rounded" id="day-mode">dark_mode</span>
        </div>

        <!-- Admin Dropdown (Right of Theme Toggler) -->
        <div class="admin-dropdown">
            <img src="../assets/images/profile.png" id="profile">
            <button class="admin-btn">Admin <span class="material-symbols-rounded">expand_more</span></button>
            <div class="dropdown-content">
                <a href="settings.php">Settings</a>
                <a href="logout.php">Logout</a>
            </div>
        </div>
    </div>
</div>
