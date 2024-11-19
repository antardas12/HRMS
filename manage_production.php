<?php $currentPage = "Manage Production"; include "./components/head.php" ?>
    <title>Manage Production</title>
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
            <h2 class="mb-4">Manage Production</h2>

            <div class="card mt-4 p-3">
                <div class="card-body">
                    <!-- Production Table -->
            <table class="table table-bordered table-hover mb-3 rounded">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Project Name</th>
                        <th scope="col">Start Date</th>
                        <th scope="col">End Date</th>
                        <th scope="col">Assigned Developers</th>
                        <th scope="col">Milestone</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Sample Row -->
                    <tr>
                        <th scope="row">1</th>
                        <td>Project 1</td>
                        <td>2023-10-01</td>
                        <td>2023-12-01</td>
                        <td>Developer 1, Developer 2</td>
                        <td>Milestone 1: Design Phase</td>
                        <td>Ongoing</td>
                        <td>
                            <a href="edit_production.php?id=1" class="btn btn-sm btn-warning">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Cancel</a>
                            <a href="#" class="btn btn-sm btn-secondary">Hold</a>
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
