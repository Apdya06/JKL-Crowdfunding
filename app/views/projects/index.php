<!DOCTYPE html>
<html>
<head>
    <title>Tambah Project Crowdfunding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2>Add New Project</h2>
                <form action="process_add_project.php" method="post">
                    <div class="form-group mb-3">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="descriptions">Description</label>
                        <textarea name="descriptions" id="descriptions" class="form-control" required></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="goal_amount">Goal Amount</label>
                        <input type="number" name="goal_amount" id="goal_amount" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="start_date">Start Date</label>
                        <input type="date" name="start_date" id="start_date" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="end_date">End Date</label>
                        <input type="date" name="end_date" id="end_date" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Project</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Skrip JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
