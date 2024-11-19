<?php $currentPage = ""; include "./components/head.php"; ?>
<title>Manage Projects</title>
<link rel="stylesheet" href="./assets/css/style.css?v=<?php echo time(); ?>">
</head>
<body>
    <!-- Sidebar -->
    <?php include "./components/sidebar.php"; ?>

    <!-- Main content -->
    <div id="main-content" class="main-content">
        <!-- Topbar -->
        <?php include "./components/topbar.php"; ?>

        <div class="container">
            <h2 class="mb-4">Manage Projects</h2>
            <table class="table my-3 table-bordered">
                <thead>
                    <tr>
                        <th>Project ID</th>
                        <th>Client Name</th>
                        <th>Project Name</th>
                        <th>Project Type</th>
                        <th>Development Cost</th>
                        <th>Total Cost</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Populate project rows from database -->
                    <?php
                    // Example array of projects
                    $projects = [
                        ['id' => 1, 'client_name' => 'Client A', 'project_name' => 'Project A', 'project_type' => 'Dynamic Website', 'development_cost' => 5000, 'total_cost' => 6000],
                        ['id' => 2, 'client_name' => 'Client B', 'project_name' => 'Project B', 'project_type' => 'Static Website', 'development_cost' => 3000, 'total_cost' => 3500],
                        // Fetch projects from database in a real implementation
                    ];
                    foreach ($projects as $project) {
                        echo "<tr>
                                <td>{$project['id']}</td>
                                <td>{$project['client_name']}</td>
                                <td>{$project['project_name']}</td>
                                <td>{$project['project_type']}</td>
                                <td>{$project['development_cost']}</td>
                                <td>{$project['total_cost']}</td>
                                <td>
                                    <a href=\"edit_project?id={$project['id']}\" class=\"btn btn-warning\">Edit</a>
                                    <a href=\"delete_project.php?id={$project['id']}\" class=\"btn btn-danger\">Delete</a>
                                </td>
                            </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <?php include "./components/script.php"; ?>
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
