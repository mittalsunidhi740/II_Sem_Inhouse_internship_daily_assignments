<?php
include("db_connect.php");

$sql = "SELECT * FROM students ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

$totalStudents = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Records</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    <h2 class="text-center mb-4">Student Records</h2>

    <table class="table table-bordered table-hover">

        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Branch</th>
                <th>CGPA</th>
                <th>Photo</th>
                <th>Address</th>
                <th>Course</th>
                <th>Date Registered</th>
            </tr>
        </thead>

        <tbody>

        <?php
        while($row = mysqli_fetch_assoc($result))
        {
            $class = ($row['cgpa'] > 8.0) ? "table-success" : "";

            echo "<tr class='$class'>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['branch']."</td>";
            echo "<td>".$row['cgpa']."</td>";
            echo "<td>".$row['photo']."</td>";
            echo "<td>".$row['address']."</td>";
            echo "<td>".$row['course']."</td>";
            echo "<td>".$row['date_registered']."</td>";
            echo "</tr>";
        }
        ?>

        </tbody>

    </table>

    <div class="alert alert-info">
        <strong>Total Students:</strong>
        <?php echo $totalStudents; ?>
    </div>

    <a href="index.php" class="btn btn-primary">Register New Student</a>

</div>

</body>
</html>

<?php
mysqli_close($conn);
?>
