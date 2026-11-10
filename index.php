
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $gender = htmlspecialchars($_POST['gender']);
    $course = htmlspecialchars($_POST['course']);
    $address = htmlspecialchars($_POST['address']);

    $success = true;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>
    <link rel="stylesheet" href="style.css">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="script.js"></script>
</head>

<body>

<div class="container">

    <h1>Student Registration Form</h1>

    <?php if (isset($success)) { ?>

        <h2>Registration Successful!</h2>

        <div class="result">
            <p><b>Name:</b> <?php echo $name; ?></p>
            <p><b>Email:</b> <?php echo $email; ?></p>
            <p><b>Phone:</b> <?php echo $phone; ?></p>
            <p><b>Gender:</b> <?php echo $gender; ?></p>
            <p><b>Course:</b> <?php echo $course; ?></p>
            <p><b>Address:</b> <?php echo $address; ?></p>
        </div>

        <button onclick="window.print()">Print Details</button>
        <br><br>
        <a href="index.php">Register Again</a>

    <?php } else { ?>

    <form id="regForm" method="POST" action="">

        <label>Full Name:</label>
        <input type="text" name="name" id="name" required>

        <label>Email:</label>
        <input type="email" name="email" id="email" required>

        <label>Phone:</label>
        <input type="tel" name="phone" id="phone" required>

        <label>Gender:</label>
        <select name="gender" required>
            <option value="">Select Gender</option>
            <option>Male</option>
            <option>Female</option>
            <option>Other</option>
        </select>

        <label>Course:</label>
        <select name="course" required>
            <option value="">Select Course</option>
            <option>Computer Science</option>
            <option>Information Science</option>
            <option>Electronics</option>
            <option>Mechanical</option>
        </select>

        <label>Address:</label>
        <textarea name="address" required></textarea>

        <button type="submit">Submit Application</button>

    </form>

    <?php } ?>

</div>

</body>
</html>
