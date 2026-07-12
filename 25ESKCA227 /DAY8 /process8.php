<?php
include 'header8.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $cgpa = $_POST['cgpa'];
    $branch = trim($_POST['branch']);
    $college = trim($_POST['college']);
    $gender = $_POST['gender'];
    $course = $_POST['course'];
    $address = trim($_POST['address']);

    // Validation
    if (
        empty($name) || empty($email) || empty($cgpa) ||
        empty($branch) || empty($college) ||
        empty($gender) || empty($course) || empty($address)
    ) {
        echo "<div class='alert alert-danger text-center'>
                Please fill all the fields.
              </div>";
        include 'footer8.php';
        exit;
    }

    // Grade Function
    function calculateGrade($cgpa)
    {
        if ($cgpa >= 9) {
            return ["Excellent", "success"];
        } elseif ($cgpa >= 8) {
            return ["Very Good", "primary"];
        } elseif ($cgpa >= 7) {
            return ["Good", "warning"];
        } else {
            return ["Keep Improving", "danger"];
        }
    }

    list($grade, $color) = calculateGrade($cgpa);

    // Greeting
    $hour = date("H");

    if ($hour < 12)
        $greeting = "Good Morning";
    elseif ($hour < 17)
        $greeting = "Good Afternoon";
    else
        $greeting = "Good Evening";

    $today = date("l, d F Y");
?>

<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="confirm-card text-center">

            <img src="https://via.placeholder.com/120"
                 class="profile"
                 alt="Student Photo">

            <h2><?php echo $greeting . ", " . $name; ?> 🎉</h2>

            <p class="text-muted"><?php echo $today; ?></p>

            <hr>

            <p><strong>Email:</strong> <?php echo $email; ?></p>

            <p><strong>College:</strong> <?php echo $college; ?></p>

            <p><strong>Branch:</strong> <?php echo $branch; ?></p>

            <p><strong>Course:</strong> <?php echo $course; ?></p>

            <p><strong>Gender:</strong> <?php echo $gender; ?></p>

            <p><strong>CGPA:</strong> <?php echo $cgpa; ?></p>

            <p><strong>Address:</strong> <?php echo $address; ?></p>

            <div class="alert alert-<?php echo $color; ?>">
                <strong>Performance:</strong> <?php echo $grade; ?>
            </div>

            <span class="badge bg-success badge-custom">
                Registration Successful
            </span>

        </div>

    </div>
</div>

<?php
}

include 'footer8.php';
?>
