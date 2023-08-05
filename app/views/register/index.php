<html>
<head>
    <title>Halaman Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="wrapper container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Registrasi Akun</h4>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <div class="form-group mb-3">
                                <label for="username">Username:</label>
                                <input type="text" id="username" name="username" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" class="form-control" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="password">Password:</label>
                                <input type="password" id="password" name="password" class="form-control" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="user_type">User Type:</label>
                                <select id="user_type" name="user_type" class="form-control">
                                    <option value="" disabled selected hidden></option>
                                    <option value="Personal">Personal</option>
                                    <option value="Business">Business</option>
                                    <option value="Charities">Charities</option>
                                </select>
                            </div>

                            <div id="personalFields" style="display: none;">
                                <div class="form-group mb-3">
                                    <label for="first_name">First Name:</label>
                                    <input type="text" id="first_name" name="first_name" class="form-control">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="last_name">Last Name:</label>
                                    <input type="text" id="last_name" name="last_name" class="form-control">
                                </div>
                            </div>

                            <div id="businessFields" style="display: none;">
                                <div class="form-group mb-3">
                                    <label for="organization_name">Organization Name:</label>
                                    <input type="text" id="organization_name" name="organization_name" class="form-control">
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </form>
                        <p>Sudah punya akun?</p><a href="./login">Masuk Disini!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script>
        document.getElementById('user_type').addEventListener('change', function() {
            var selectedUserType = this.value;
            var personalFields = document.getElementById('personalFields');
            var businessFields = document.getElementById('businessFields');

            if (selectedUserType === 'Personal') {
                personalFields.style.display = 'block';
                businessFields.style.display = 'none';
            } else if (selectedUserType === 'Business') {
                personalFields.style.display = 'none';
                businessFields.style.display = 'block';
            } else {
                personalFields.style.display = 'none';
                businessFields.style.display = 'none';
            }
        });
    </script>
</body>
</html>
