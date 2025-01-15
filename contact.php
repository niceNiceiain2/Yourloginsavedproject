<!DOCTYPE html>
<html>
<head>
    <title>Contact Info - Iain's Website</title>
</head>
<body>
    <?php
    // Enable error reporting
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    ob_start();

    // Initialize variables for form data and errors
    $firstName = $lastName = $email = $phone = $username = $password = $comments = "";
    $firstNameErr = $lastNameErr = $emailErr = $phoneErr = $usernameErr = "";

    // Database connection credentials
    $host = "localhost";
    $db_user = "webuser"; // Replace with your webuser username
    $db_password = "xPNdihLYx]UrCuT5"; // Replace with your webuser password
    $db_name = "contact_data";

    // Check if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Debug input data
        var_dump($_POST);

        // Sanitize and validate input
        $firstName = htmlspecialchars($_POST['firstName']);
        $lastName = htmlspecialchars($_POST['lastName']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
        $comments = htmlspecialchars($_POST['comments']);

        // Validate first name
        if (empty($firstName)) {
            $firstNameErr = "First name is required.";
        } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $firstName)) {
            $firstNameErr = "Only letters, hyphen, and apostrophe allowed in first name.";
        }

        // Validate last name
        if (empty($lastName)) {
            $lastNameErr = "Last name is required.";
        } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $lastName)) {
            $lastNameErr = "Only letters, hyphen, and apostrophe allowed in last name.";
        }

        // Validate email format
        if (empty($email)) {
            $emailErr = "Email is required.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format.";
        }

        // Validate phone number
        if (empty($phone)) {
            $phoneErr = "Phone number is required.";
        } elseif (!preg_match("/^[0-9]*$/", $phone)) {
            $phoneErr = "Only digits are allowed in phone number.";
        }

        // Validate username
        if (empty($username)) {
            $usernameErr = "Username is required.";
        }

        // Check if there are no validation errors
        if (empty($firstNameErr) && empty($lastNameErr) && empty($emailErr) && empty($phoneErr) && empty($usernameErr)) {
            // Database connection
            $dblink = new mysqli($host, $db_user, $db_password, $db_name);

            // Check connection
            if ($dblink->connect_error) {
                die("<h2>Database connection failed: " . $dblink->connect_error . "</h2>");
            } else {
                echo "Database connection successful.<br>";
            }

            // Prepare SQL query
            $sql = "INSERT INTO contact_info (first_name, last_name, email, phone, username, password, comments) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmt = $dblink->prepare($sql);

            if ($stmt) {
                // Bind parameters
                $stmt->bind_param("sssssss", $firstName, $lastName, $email, $phone, $username, $password, $comments);

                // Execute statement
                if ($stmt->execute()) {
                    echo '<div class="section-title"><h2>Data sent to database successfully!</h2></div>';
                } else {
                    echo '<h2>Error inserting data: ' . $stmt->error . '</h2>';
                }

                // Close statement
                $stmt->close();
            } else {
                echo '<h2>Database query failed: ' . $dblink->error . '</h2>';
            }

            // Close connection
            $dblink->close();

            // End output buffering and display page
            ob_end_flush();
            exit();
        }
    }

    // Display form with errors (if any)
    ?>
    <form id="contactForm" action="contact.php" method="POST">
        <div class="form-group" id="firstNameGroup">
            <label class="control-label">First Name:</label>
            <input type="text" class="form-control" id="firstName" name="firstName" value="<?= htmlspecialchars($firstName) ?>" required>
            <?php if ($firstNameErr) echo '<span class="text-danger">' . $firstNameErr . '</span>'; ?>
        </div>
        <div class="form-group" id="lastNameGroup">
            <label class="control-label">Last Name:</label>
            <input type="text" class="form-control" id="lastName" name="lastName" value="<?= htmlspecialchars($lastName) ?>" required>
            <?php if ($lastNameErr) echo '<span class="text-danger">' . $lastNameErr . '</span>'; ?>
        </div>
        <div class="form-group" id="emailGroup">
            <label class="control-label">Email Address:</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= htmlspecialchars($email) ?>" required>
            <?php if ($emailErr) echo '<span class="text-danger">' . $emailErr . '</span>'; ?>
        </div>
        <div class="form-group" id="phoneGroup">
            <label class="control-label">Phone Number:</label>
            <input type="text" class="form-control" id="phone" name="phone" value="<?= htmlspecialchars($phone) ?>" required>
            <?php if ($phoneErr) echo '<span class="text-danger">' . $phoneErr . '</span>'; ?>
        </div>
        <div class="form-group" id="usernameGroup">
            <label class="control-label">Username:</label>
            <input type="text" class="form-control" id="username" name="username" value="<?= htmlspecialchars($username) ?>" required>
            <?php if ($usernameErr) echo '<span class="text-danger">' . $usernameErr . '</span>'; ?>
        </div>
        <div class="form-group" id="passwordGroup">
            <label class="control-label">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="form-group" id="commentsGroup">
            <label class="control-label">Comments:</label>
            <textarea class="form-control" id="comments" name="comments"><?= htmlspecialchars($comments) ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
    <?php ob_end_flush(); ?>
</body>
</html>