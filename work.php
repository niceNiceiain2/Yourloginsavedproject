<?php
// Set up dynamic variables
$pageTitle = "Welcome to Work Info";
$introText = "I aspire to work as a Software Engineer in tech cities.";
$dreamText = "My dream is to contribute to innovative projects and create software that positively impacts people's lives.";
?>

<section id="work">
    <div class="container">
        <!-- Dynamically rendered title -->
        <h2><?php echo $pageTitle; ?></h2>
        <p><?php echo $introText; ?></p>

        <!-- Content Section -->
        <table class="content">
            <tr>
                <td>
                    <!-- Dynamically rendered content -->
                    <p><?php echo $dreamText; ?></p>
                </td>
            </tr>
        </table>
    </div>
</section>