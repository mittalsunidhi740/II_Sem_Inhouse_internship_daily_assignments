<?php include 'header8.php'; ?>

<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card">

            <div class="card-header">
                <i class="fa-solid fa-user-graduate"></i>
                Student Registration Form
            </div>

            <div class="card-body">

                <form action="process.php" method="POST">

                    <div class="mb-3">
                        <label>Student Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>CGPA</label>
                        <input type="number" step="0.01" min="0" max="10" name="cgpa" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Branch</label>
                        <input type="text" name="branch" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>College Name</label>
                        <input type="text" name="college" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Gender</label><br>

                        <input type="radio" name="gender" value="Male" required> Male

                        <input type="radio" name="gender" value="Female" class="ms-3"> Female

                        <input type="radio" name="gender" value="Other" class="ms-3"> Other
                    </div>

                    <div class="mb-3">
                        <label>Course</label>

                        <select name="course" class="form-select" required>
                            <option value="">Select Course</option>
                            <option>B.Tech</option>
                            <option>BCA</option>
                            <option>MCA</option>
                            <option>B.Sc</option>
                            <option>M.Tech</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label>Address</label>

                        <textarea
                            name="address"
                            rows="3"
                            class="form-control"
                            required></textarea>
                    </div>

                    <div class="mb-3">
                        <label>Student Photo</label>

                        <input
                            type="file"
                            class="form-control"
                            disabled>

                        <small class="text-muted">
                            Placeholder only (No upload required)
                        </small>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        <i class="fa-solid fa-paper-plane"></i>
                        Submit Registration
                    </button>

                </form>

            </div>

        </div>

    </div>
</div>

<?php include 'footer8.php'; ?>
