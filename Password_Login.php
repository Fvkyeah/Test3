
<?php
// Check if the email is set and not empty
if (isset($_POST['email']) && !empty($_POST['email'])) {
    $email = $_POST['email'];
} else {
    // Redirect back to the email login page if the email is not provided
    header("Location: email_login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Password Page</title>
</head>
<body>
    <h2>Password Page</h2>
    <form method="post" action="process_login.php">
        <input type="hidden" name="email" value="<?php echo $email; ?>">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
