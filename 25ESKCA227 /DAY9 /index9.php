<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h2 class="text-center">Student Registration Form</h2>
        </div>

        <div class="card-body">

            <form action="process_form.php" method="POST">

                <div class="mb-3">
                    <label class="form-label">Student Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Branch</label>
                    <input type="text" name="branch" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">CGPA</label>
                    <input type="number" step="0.01" min="0" max="10" name="cgpa" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Photo Filename</label>
                    <input type="text" name="photo" class="form-control" placeholder="photo.jpg">
                </div>

                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <textarea name="address" class="form-control" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Course</label>
                    <input type="text" name="course" class="form-control">
                </div>

                <button type="submit" class="btn btn-success w-100">
                    Register Student
                </button>

            </form>

            <br>

            <a href="students.php" class="btn btn-primary w-100">
                View All Students
            </a>

        </div>
    </div>

</div>

</body>
</html>
