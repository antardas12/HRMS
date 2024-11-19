<?php
$currentPage = "cancel_work_orders";
include "./components/head.php"
?>
<title>Cancelled Work Orders</title>
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
            <h2 class="text-center mb-4">Cancelled Work Orders</h2>

            <div class="card shadow">
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-hover mb-2">
                            <thead class="thead-light">
                                <tr>
                                    <th>Order ID</th>
                                    <th>Client</th>
                                    <th>Project</th>
                                    <th>Cancellation Date</th>
                                    <th>Reason</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // Dummy data - replace with actual data from your database
                                $orders = [
                                    ['WO007', 'MNO Corp', 'Data Migration', '2023-05-15', 'Budget constraints', 'Cancelled'],
                                    ['WO008', 'PQR Ltd', 'UI/UX Redesign', '2023-05-18', 'Change in project scope', 'Cancelled'],
                                    ['WO009', 'STU Industries', 'Cloud Migration', '2023-05-22', 'Internal restructuring', 'Cancelled'],
                                ];

                                foreach ($orders as $order) {
                                    echo "<tr>";
                                    echo "<td>{$order[0]}</td>";
                                    echo "<td>{$order[1]}</td>";
                                    echo "<td>{$order[2]}</td>";
                                    echo "<td>{$order[3]}</td>";
                                    echo "<td>{$order[4]}</td>";
                                    echo "<td><span class='badge bg-danger status-badge'>{$order[5]}</span></td>";
                                    echo "<td class='action-buttons'>
                                            <a href='view_work_order' class='btn btn-sm btn-info'><i class='fas fa-eye'></i></a>
                                            <button class='btn btn-sm btn-warning'><i class='fas fa-redo'></i></button>
                                          </td>";
                                    echo "</tr>";
                                }
                                ?>
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