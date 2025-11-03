<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Edit Payment Information - PayDude™</title>
    <link rel="stylesheet" href="css/styles.css" />
</head>
<body>
    <header>
        <h1>PayDude™</h1>
    </header>
    <main>
        <h2>Account Information and Settings Updated</h2>

        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            // Simple sanitize function
            function clean_input($data) {
                return htmlspecialchars(trim($data));
            }

            // Collect and clean all form data
            $fname = clean_input($_POST["fname"] ?? "");
            $lname = clean_input($_POST["lname"] ?? "");
            $address = clean_input($_POST["address"] ?? "");
            $prov = clean_input($_POST["prov"] ?? "");
            $phone = clean_input($_POST["phone"] ?? "");
            $email = clean_input($_POST["email"] ?? "");
            $password = clean_input($_POST["password"] ?? "");
            $question = clean_input($_POST["question"] ?? "");
            $mfa = clean_input($_POST["mfa"] ?? "");

            // Validate required fields
            if (empty($fname) || empty($lname)) {
                echo "<p>Error: First and last name are required.</p>";
            } else {
                echo "<p>Thank you, <strong>$fname $lname</strong>! Your account information has been updated.</p>";

                echo "<ul>";
                echo "<li>Address: $address</li>";
                echo "<li>Province: $prov</li>";
                echo "<li>Phone: $phone</li>";
                echo "<li>Email: $email</li>";
                echo "<li>MFA Method: " . ($mfa ?: "None selected") . "</li>";
                echo "<li>Security Question: " . ($question ?: "Not provided") . "</li>";
                echo "</ul>";
            }

            // Handle alert settings (checkboxes)
            if (!empty($_POST["alert"]) && is_array($_POST["alert"])) {
                echo "<h3>Alert Preferences:</h3><ul>";
                foreach ($_POST["alert"] as $setting) {
                    echo "<li>" . clean_input($setting) . "</li>";
                }
                echo "</ul>";
            } else {
                echo "<p>No alert settings selected.</p>";
            }
        } else {
            echo "<p>Error: Invalid form submission.</p>";
        }
        ?>
    </main>
    <footer>
        <p><small>©PayDude Inc. All rights reserved</small></p>
    </footer>
</body>
</html>
