<?php
// Get the current page from the URL, default to 'home' if not set
$currentPage = isset($_GET['page']) ? $_GET['page'] : 'index';

// Define the list of navigation links (the possible pages)
$pages = ['home', 'work', 'school', 'hobbies', 'contact', 'results'];

echo '<ul class="nav">';

foreach ($pages as $page) {
    // Check if the current page matches the link in the navigation
    if ($currentPage == $page) {
        // If the page matches, add the 'active' class
        echo "<li class='nav-item'><a href='?page=$page' class='nav-link active'>$page</a></li>";
    } else {
        // Otherwise, just display the normal link
        echo "<li class='nav-item'><a href='?page=$page' class='nav-link'>$page</a></li>";
    }
}

echo '</ul>';
?>