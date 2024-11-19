<?php $currentPage = "portfolio_manage";
include "./components/head.php"; ?>
<title>Portfolio</title>
<link rel="stylesheet" href="./assets/css/style.css?v=<?php echo time(); ?>">
</head>

<body>
    <!-- Sidebar -->
    <?php include "./components/sidebar.php" ?>

    <!-- Main content -->
    <div id="main-content" class="main-content">
        <!-- Topbar -->
        <?php include "./components/topbar.php" ?>

        <div class="container mt-4">
            <!-- <h2 class="mb-4">Manage Portfolio</h2> -->

            <div class="card mt-4 p-3">
                <div class="card-body">
                    <h4 class="mb-3">Manage Portfolio</h4>
                    <!-- Production Table -->
                    <table class="table table-bordered table-hover mb-3 rounded">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Client id</th>
                                <th scope="col">Client Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Project Date</th>
                                <!-- <th scope="col">Image</th> -->
                                <th scope="col">App Link</th>
                                <th scope="col">Web Link</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Sample Row -->
                            <tr>
                                <!-- <th scope="row">1</th> -->
                                <td> CD1</td>
                                <td>John Doe</td>
                                <td>9825105620</td>
                                <td>2023-12-01</td>
                                <td><a class="btn btn-secondary btn-sm">View</a></td>
                                <td><a class="btn btn-secondary btn-sm">View</a></td>
                                <!-- <td>Ongoing</td> -->
                                <td>
                                    <a href="portfolio_edit" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                                    <!-- <a href="#" class="btn btn-sm btn-secondary">Hold</a> -->
                                </td>
                            </tr>
                            <!-- More rows can be added here -->
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card mt-4 p-3">
                <div class="card-body">
                    <h4 class="mb-3">Team Listing</h4>
                    <!-- Production Table -->
                    <table class="table table-bordered table-hover mb-3 rounded">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Employee ID</th>
                                <th scope="col">Employee Name</th>
                                <th scope="col">Employee Role</th>
                                <th scope="col">Employee Image</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Sample Row -->
                            <tr>
                                <td>EMP1</th>
                                <td>John Doe</td>
                                <td>Backend Developer</td>
                                <td><a class="btn btn-secondary btn-sm">View</a></td>
                                <td>
                                    <a href="portfolio_edit_teamlisting" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                                    <!-- <a href="#" class="btn btn-sm btn-secondary">Hold</a> -->
                                </td>
                            </tr>
                            <!-- More rows can be added here -->
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    <?php include "./components/script.php" ?>

    <script>
        $(document).ready(function() {
            console.log("Document is ready.");
            $('.table').DataTable({
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

</html>