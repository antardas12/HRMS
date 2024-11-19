<?php $currentPage = "operations"; include "./components/head.php" ?>
<title>Employees</title>
<link rel="stylesheet" href="./assets/css/style.css?v=<?php echo time(); ?>" />

</head>
<body>

 <!-- Sidebar -->
 <?php include "./components/sidebar.php" ?>

<!-- Main content -->
<div id="main-content" class="main-content">
    <!-- Topbar -->
    <?php include "./components/topbar.php" ?>

    <!-- Employee Add & Manage Section -->
    <div class="container mt-4">
        <h2 class="mb-4">Employee Management</h2>
        <div class="card">
            <div class="card-header mt-2">
                <h5 >Add New Employee</h5>
            </div>
            <div class="card-body">
                <form class="row" action="employee_add.php" method="POST">
                    <div class="col-6 mb-3">
                        <label for="empCode" class="form-label">Employee Code</label>  <!--[Auto-Generated] -->
                        <input type="text" class="form-control" id="empCode" name="empCode" value="Auto-generated code" readonly>
                    </div>
                    <div class="col-6 mb-3">
                        <label for="empName" class="form-label">Employee Name</label>
                        <input type="text" class="form-control" id="empName" name="empName" required>
                    </div>
                    <div class="col-6 mb-3">
                        <label for="empEmail" class="form-label">Employee Email</label>
                        <input type="email" class="form-control" id="empEmail" name="empEmail" required>
                    </div>
                    <div class="col-6 mb-3">
                        <label for="empPhone" class="form-label">Employee Phone</label>
                        <input type="text" class="form-control" id="empPhone" name="empPhone" required>
                    </div>
                    <div class="col-6 mb-3">
                        <label for="empPassword" class="form-label">Employee Password</label>
                        <input type="password" class="form-control" id="empPassword" name="empPassword" required>
                    </div>
                    <div class=" d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Add Employee</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-header">
                <h5 class="my-2">Manage Employees</h5>
            </div>
            <div class="card-body">
                <!-- This will list all employees -->
                <table id="employeetable" class="table border">
                    <thead >
                        <tr>
                            <th>EMP CODE</th>
                            <th>EMP NAME</th>
                            <th>EMP EMAIL</th>
                            <th>EMP PHONE</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody >
                        <!-- Example row (In real use, data will be fetched from the database) -->
                        <tr>
                            <td>EMP001</td>
                            <td>John Doe</td>
                            <td>johndoe@example.com</td>
                            <td>+1234567890</td>
                            <td>
                                <a href="employee_edit.php?id=EMP001" class="btn btn-warning btn-sm">Edit</a>
                                <a href="employee_delete.php?id=EMP001" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>EMP001</td>
                            <td>John Doe</td>
                            <td>johndoe@example.com</td>
                            <td>+1234567890</td>
                            <td>
                                <a href="employee_edit.php?id=EMP001" class="btn btn-warning btn-sm">Edit</a>
                                <a href="employee_delete.php?id=EMP001" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>EMP001</td>
                            <td>John Doe</td>
                            <td>johndoe@example.com</td>
                            <td>+1234567890</td>
                            <td>
                                <a href="employee_edit.php?id=EMP001" class="btn btn-warning btn-sm">Edit</a>
                                <a href="employee_delete.php?id=EMP001" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        <!-- More rows would go here -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include "./components/script.php"  ?>

<script>
        $(document).ready(function() {
            console.log("Document is ready.");
            $('#employeetable').DataTable({
                paging: true,
                searching: true,
                ordering: true,
                lengthMenu: [5, 10, 15, 25, 50, 'All'],
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search..."
                }
            });
            console.log("DataTable initialized.");
        });
    </script>

</body>
