<?php
$currentPage = "running_work_orders";
include "./components/head.php"
?>
<title>Running Work Orders</title>
<link rel="stylesheet" href="./assets/css/style.css?v=<?php echo time(); ?>" />
<style>
    .table-responsive {
        margin-top: 20px;
    }

    .status-badge {
        font-size: 0.8em;
        padding: 5px 10px;
    }

    .action-buttons .btn {
        margin-right: 5px;
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

        <!-- Content -->
        <div class="container mt-4">
            <h2 class="text-center mb-4">Running Work Orders</h2>

            <div class="card shadow">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th>Order ID</th>
                                    <th>Client</th>
                                    <th>Project</th>
                                    <th>Start Date</th>
                                    <th>Due Date</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>WO001</td>
                                    <td>ABC Corp</td>
                                    <td>Website Redesign</td>
                                    <td>2023-05-01</td>
                                    <td>2023-06-15</td>
                                    <td><span class="badge bg-success status-badge">In Progress</span></td>
                                    <td class="action-buttons">
                                        <a href="view_work_order" class="btn btn-sm btn-info">View</a>
                                        <a href="edit_work_order" class="btn btn-sm btn-primary">Edit</a>
                                        <a href="" class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>WO002</td>
                                    <td>XYZ Ltd</td>
                                    <td>Mobile App Development</td>
                                    <td>2023-05-10</td>
                                    <td>2023-07-20</td>
                                    <td><span class="badge bg-warning status-badge">On Hold</span></td>
                                    <td class="action-buttons">
                                        <a href="view_work_order" class="btn btn-sm btn-info">View</a>
                                        <a href="edit_work_order" class="btn btn-sm btn-primary">Edit</a>
                                        <a href="" class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>WO003</td>
                                    <td>123 Industries</td>
                                    <td>Network Upgrade</td>
                                    <td>2023-05-15</td>
                                    <td>2023-06-30</td>
                                    <td><span class="badge bg-success status-badge">In Progress</span></td>
                                    <td class="action-buttons">
                                        <a href="view_work_order" class="btn btn-sm btn-info">View</a>
                                        <a href="edit_work_order" class="btn btn-sm btn-primary">Edit</a>
                                        <a href="" class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
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