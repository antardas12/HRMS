<?php $currentPage = "reports";
include "./components/head.php"  ?>
<title>Report</title>
<link rel="stylesheet" href="./assets/css/style.css?v=<?php echo time(); ?>">
<style>
    .card-header {
        background-color: #007bff;
        color: white;
        font-weight: bold;
    }

    .btn-primary,
    .btn-secondary {
        margin: 5px;
    }

    .form-select {
        margin-bottom: 15px;
    }

    .table th,
    .table td {
        vertical-align: middle;
    }
</style>
</head>

<body>
    <!-- Sidebar -->
    <?php include "./components/sidebar.php" ?>

    <!-- Main content -->

    <div id="main-content" class="main-content">
        <!-- Topbar -->
        <?php include "./components/topbar.php" ?>
        <div class="container mt-5">
            <!-- Production Report Section -->
            <div class="card">
                <div class="card-header bg-white text-black">
                    Production Report
                </div>
                <div class="card-body">
                    <h5 class="card-title">List of All Production Reports</h5>

                    <!-- Table for Production Reports -->
                    <table class="table table-striped" id="production_list">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Project Name</th>
                                <th scope="col">Developer</th>
                                <th scope="col">Status</th>
                                <th scope="col">Date</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Project Alpha</td>
                                <td>John Doe</td>
                                <td><span class="badge bg-success badge-status">Running</span></td>
                                <td>2024-09-30</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-primary">View</a>
                                    <a href="./edit_production_list" class="btn btn-sm btn-secondary">Edit</a>
                                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Project Beta</td>
                                <td>Jane Smith</td>
                                <td><span class="badge bg-warning badge-status">Hold</span></td>
                                <td>2024-09-25</td>
                                <td>
                                    <button class="btn btn-sm btn-primary">View</button>
                                    <button class="btn btn-sm btn-secondary">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Project Gamma</td>
                                <td>Michael Johnson</td>
                                <td><span class="badge bg-danger badge-status">Cancelled</span></td>
                                <td>2024-09-15</td>
                                <td>
                                    <button class="btn btn-sm btn-primary">View</button>
                                    <button class="btn btn-sm btn-secondary">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Developer-wise Daily Report Section -->
            <div class="card">
                <div class="card-header card-header bg-white text-black">
                    Daily Report
                </div>
                <div class="card-body">
                    <h5 class="card-title">Select Project Status</h5>

                    <!-- Project Status Filter -->
                    <label for="projectStatus" class="form-label">Project Status</label>
                    <select id="projectStatus" class="form-select">
                        <option value="running">Running</option>
                        <option value="complete">Complete</option>
                        <option value="cancel">Cancel</option>
                        <option value="hold">Hold</option>
                    </select>

                    <button class="btn btn-primary">Filter Report</button>
                </div>
            </div>

            <!-- Developer-wise Daily Report Section -->
            <div class="card mt-4">
                <div class="card-header bg-white text-black">
                    Developer-wise Daily Report
                </div>
                <div class="card-body">
                    <h5 class="card-title">Report List</h5>

                    <!-- Table for Developer-wise Daily Reports -->
                    <table class="table table-striped" id="daily_report">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Developer Name</th>
                                <th>Project</th>
                                <th>Status</th>
                                <th>Task</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>John Doe</td>
                                <td>Project Alpha</td>
                                <td><span class="badge bg-success">Running</span></td>
                                <td>Developed Login Screen</td>
                                <td>2024-09-30</td>
                                <td>
                                    <button class="btn btn-sm btn-primary">View</button>
                                    <button class="btn btn-sm btn-secondary">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jane Smith</td>
                                <td>Project Beta</td>
                                <td><span class="badge bg-warning">Hold</span></td>
                                <td>Database Schema Update</td>
                                <td>2024-09-29</td>
                                <td>
                                    <button class="btn btn-sm btn-primary">View</button>
                                    <button class="btn btn-sm btn-secondary">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                            <!-- Additional rows can be added as needed -->
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Create Report Section -->
            <div class="card mt-4">
                <div class="card-header bg-white text-black">
                    Create Report
                </div>
                <div class="card-body">
                    <label for="selectProject">Select Project:</label>
                    <select id="selectProject" class="form-select">
                        <option value="project1">Project 1</option>
                        <option value="project2">Project 2</option>
                    </select>

                    <label for="selectCategory">Select Category:</label>
                    <select id="selectCategory" class="form-select">
                        <option value="app">App</option>
                        <option value="web">Web</option>
                    </select>

                    <label for="addReport">Add Report (Multiple):</label>
                    <textarea id="addReport" class="form-control" rows="3"
                        placeholder="Enter report details"></textarea>

                    <label for="assignDeveloper">Assign Developer:</label>
                    <select id="assignDeveloper" class="form-select">
                        <option value="dev1">Developer 1</option>
                        <option value="dev2">Developer 2</option>
                    </select>

                    <button class="btn btn-primary mt-3">Create Report</button>
                </div>
            </div>

            <!-- Assign Report Section -->
            <div class="card mt-4">
                <div class="card-header bg-white text-black">
                    Assign Report
                </div>
                <div class="card-body">
                    <label for="assignProject">Select Project:</label>
                    <select id="assignProject" class="form-select">
                        <option value="project1">Project 1</option>
                        <option value="project2">Project 2</option>
                    </select>

                    <label for="selectReport">Select Report (Single/Multiple):</label>
                    <select id="selectReport" class="form-select">
                        <option value="report1">Report 1</option>
                        <option value="report2">Report 2</option>
                    </select>

                    <label for="assignDev">Assign Developer:</label>
                    <select id="assignDev" class="form-select">
                        <option value="dev1">Developer 1</option>
                        <option value="dev2">Developer 2</option>
                    </select>

                    <button class="btn btn-primary mt-3">Assign Report</button>
                </div>
            </div>

            <!-- Solve Report Section -->
            <div class="card mt-4">
                <div class="card-header bg-white text-black">
                    Solve Report
                </div>
                <div class="card-body">
                    <label for="solveProject">Select Project:</label>
                    <select id="solveProject" class="form-select">
                        <option value="project1">Project 1</option>
                        <option value="project2">Project 2</option>
                    </select>

                    <table class="table mt-3" id="report_table">
                        <thead>
                            <tr>
                                <th>Report ID</th>
                                <th>Report Details</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Issue with the login screen</td>
                                <td><span class="badge bg-warning">In Progress</span></td>
                                <td><button class="btn btn-sm btn-success">Change Status</button></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Database sync issue</td>
                                <td><span class="badge bg-danger">On Hold</span></td>
                                <td><button class="btn btn-sm btn-success">Change Status</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <?php include  "./components/script.php"  ?>
        <script>
            // Initialize DataTables for Clients and Transactions
            $(document).ready(function() {
                $('#report_table').DataTable({
                    paging: true,
                    searching: true,
                    ordering: true,
                    lengthMenu: [5, 10, 15, 25, 50, 'All'],
                    language: {
                        search: "_INPUT_",
                        searchPlaceholder: "Search clients..."
                    }
                });

                $('#daily_report').DataTable({
                    paging: true,
                    searching: true,
                    ordering: true,
                    lengthMenu: [5, 10, 15, 25, 50, 'All'],
                    language: {
                        search: "_INPUT_",
                        searchPlaceholder: "Search transactions..."
                    }
                });
                $('#production_list').DataTable({
                    paging: true,
                    searching: true,
                    ordering: true,
                    lengthMenu: [5, 10, 15, 25, 50, 'All'],
                    language: {
                        search: "_INPUT_",
                        searchPlaceholder: "Search transactions..."
                    }
                });

            });
        </script>
</body>

</html>