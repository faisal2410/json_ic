<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Simple Curriculum Vitae Website</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
</head>

<body>
    <?php include 'header.php'; ?>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        // In a real application, you might send an email or save the message to a database here.

        echo "<h1>Thank You, $name!</h1>";
        echo "<p>We have received your message and will get back to you at $email shortly.</p>";
        echo "<p>Your message:</p>";
        echo "<pre>$message</pre>";
    } else {
        echo "Invalid request.";
    } ?>

    <?php include 'footer.php'; ?>
</body>

</html>