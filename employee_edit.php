<?php include "./components/head.php" ?>
<title>Edit Employee</title>
<link rel="stylesheet" href="./assets/css/style.css?v=<?php echo time(); ?>" />

</head>
<body>

 <!-- Sidebar -->
 <?php include "./components/sidebar.php" ?>

<!-- Main content -->
<div id="main-content" class="main-content">
    <!-- Topbar -->
    <?php include "./components/topbar.php" ?>

    <!-- Employee Edit Section -->
    <div class="container mt-4">
        <h2 class="mb-4">Edit Employee Details</h2>
        <div class="card">
            <div class="card-header">
                <h5>Employee Code: EMP001 <!-- Placeholder for Employee Code --></h5>
            </div>
            <div class="card-body">
                <form class="row">
                    <div class="col-6 mb-3">
                        <label for="empName" class="form-label">EMP NAME</label>
                        <input type="text" class="form-control" id="empName" placeholder="Enter employee name" required>
                    </div>

                    <div class="col-6 mb-3">
                        <label for="empEmail" class="form-label">EMP EMAIL</label>
                        <input type="email" class="form-control" id="empEmail" placeholder="Enter employee email" required>
                    </div>

                    <div class="col-6 mb-3">
                        <label for="empPhone" class="form-label">EMP PHONE</label>
                        <input type="text" class="form-control" id="empPhone" placeholder="Enter employee phone number" required>
                    </div>

                    <div class="col-6 mb-3">
                        <label for="empPassword" class="form-label">EMP PASSWORD</label>
                        <input type="password" class="form-control" id="empPassword" placeholder="Enter new password (optional)">
                    </div>

                    <div class="d-flex justify-content-end my-3">
                        <a href="employee_list.php" class="btn btn-secondary  me-3">Cancel</a>
                        <a type="submit" class="btn btn-success">Update Employee</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "./components/script.php" ?>

</body>
