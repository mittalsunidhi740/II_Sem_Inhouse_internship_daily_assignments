<?php
include("db_connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $branch = mysqli_real_escape_string($conn, $_POST['branch']);
    $cgpa = mysqli_real_escape_string($conn, $_POST['cgpa']);
    $photo = mysqli_real_escape_string($conn, $_POST['photo']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $course = mysqli_real_escape_string($conn, $_POST['course']);

    // Check if email already exists
    $check = "SELECT * FROM students WHERE email='$email'";
    $result = mysqli_query($conn, $check);

    if (mysqli_num_rows($result) > 0) {
        echo "<div style='color:red; text-align:center; margin-top:30px;'>
                <h2>Email already registered!</h2>
                <a href='index.php'>Go Back</a>
              </div>";
    } else {

        $sql = "INSERT INTO students
        (name,email,branch,cgpa,photo,address,course)
        VALUES
        ('$name','$email','$branch','$cgpa','$photo','$address','$course')";

        if (mysqli_query($conn, $sql)) {

            $countQuery = "SELECT COUNT(*) AS total FROM students";
            $countResult = mysqli_query($conn, $countQuery);
            $row = mysqli_fetch_assoc($countResult);

            echo "<div style='text-align:center; margin-top:40px;'>
                    <h2 style='color:green;'>Student Registered Successfully!</h2>
                    <h4>You are Student #".$row['total']." in our system.</h4>
                    <br>
                    <a href='index.php'>Add Another Student</a>
                    <br><br>
                    <a href='students.php'>View Students</a>
                  </div>";

        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}

mysqli_close($conn);
?>
