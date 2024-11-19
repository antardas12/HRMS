<?php $currentPage = "operations"; ?>
<?php include "./components/head.php" ?>
<title>Clients</title>
<link rel="stylesheet" href="./assets/css/style.css?v=<?php echo time(); ?>" />
<style>
    .finance-card {
        background-image: linear-gradient(to top, #cfd9df 0%, #e2ebf0 100%);
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

        <!-- Client Profile Section -->
        <div class="container mt-4">
            <h1 class="mb-4">Client Profile</h1>

            <!-- Client List Section -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="my-2">Client List</h5>
                </div>
                <div class="card-body">
                    <table id="clientTable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Client ID</th>
                                <th>Client Name</th>
                                <th>Company Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>ABC Corp</td>
                                <td>John Doe</td>
                                <td>johndoe@abccorp.com</td>
                                <td>123 , USA</td>
                                <td>(123) 456-7890</td>
                                <td>
                                    <a href="view_client?id=101" class="btn btn-warning btn-sm">View</a>
                                    <a href="edit_client.php?id=1" class="btn btn-primary btn-sm">Edit</a>
                                    <button class="btn btn-danger btn-sm" onclick="confirmDelete(1)">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>XYZ Ltd</td>
                                <td>Jane Smith</td>
                                <td>janesmith@xyzltd.com</td>
                                <td>(098) 765-4321</td>
                                <td>Baker street , London</td>
                                <td>
                                    <a href="view_client?id=101" class="btn btn-warning btn-sm">View</a>
                                    <a href="edit_client.php?id=2" class="btn btn-primary btn-sm">Edit</a>
                                    <button class="btn btn-danger btn-sm" onclick="confirmDelete(2)">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Project List Section -->
            <div class="card my-5">
                <div class="card-header d-flex justify-content-between my-2">
                    <h5 class="my-2">Projects</h5>
                    <a href="add_new_project" class="btn btn-warning " >Add Project &nbsp;<i class="fa-solid fa-plus"></i></a>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs" id="projectTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="running-tab" data-bs-toggle="tab" data-bs-target="#running" type="button" role="tab" aria-controls="running" aria-selected="true">Running</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="completed-tab" data-bs-toggle="tab" data-bs-target="#completed" type="button" role="tab" aria-controls="completed" aria-selected="false">Completed</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="closed-tab" data-bs-toggle="tab" data-bs-target="#closed" type="button" role="tab" aria-controls="closed" aria-selected="false">Closed</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="hold-tab" data-bs-toggle="tab" data-bs-target="#hold" type="button" role="tab" aria-controls="hold" aria-selected="false">Hold</button>
                        </li>
                    </ul>

                    <div class="tab-content mt-4" id="projectTabContent">
                        <div class="tab-pane fade show active" id="running" role="tabpanel" aria-labelledby="running-tab">
                            <!-- Running Projects Table -->
                            <table class="table table-bordered projectstable my-4" style="border-bottom: none;">
                                <thead>
                                    <tr>
                                        <th>Project ID</th>
                                        <th>Project Name</th>
                                        <th>Development Cost</th>
                                        <th>Server</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>101</td>
                                        <td>Website Redesign</td>
                                        <td>$5,000</td>
                                        <td>AWS</td>
                                        <td><span class="badge bg-success">Running</span></td>
                                        <td>
                                            <a href="view_project?id=101" class="btn btn-warning btn-sm">View</a>
                                            <a href="edit_project?id=101" class="btn btn-primary btn-sm">Edit</a>
                                            <button class="btn btn-danger btn-sm">Close</button>
                                        </td>
                                    </tr>
                                    <!-- Add more running projects -->
                                </tbody>
                            </table>
                        </div>

                        <!-- Completed, Closed, and Hold Tabs Follow -->
                        <div class="tab-pane fade" id="completed" role="tabpanel" aria-labelledby="completed-tab">
                            <table class="table table-bordered projectstable" style="border-bottom: none;">
                                <!-- Completed Projects Table Content -->
                                <thead>
                                    <tr>
                                        <th>Project ID</th>
                                        <th>Project Name</th>
                                        <th>Development Cost</th>
                                        <th>Server</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>101</td>
                                        <td>Website Redesign</td>
                                        <td>$5,000</td>
                                        <td>AWS</td>
                                        <td><span class="badge bg-success">Running</span></td>
                                        <td>
                                            <a href="view_project?id=101" class="btn btn-warning btn-sm">View</a>
                                            <a href="edit_project?id=101" class="btn btn-primary btn-sm">Edit</a>
                                            <button class="btn btn-danger btn-sm">Close</button>
                                        </td>
                                    </tr>
                                    <!-- Add more running projects -->
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="closed" role="tabpanel" aria-labelledby="closed-tab">
                            <table class="table table-bordered projectstable" style="border-bottom: none;">
                                <!-- Closed Projects Table Content -->
                                <thead>
                                    <tr>
                                        <th>Project ID</th>
                                        <th>Project Name</th>
                                        <th>Development Cost</th>
                                        <th>Server</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>101</td>
                                        <td>Website Redesign</td>
                                        <td>$5,000</td>
                                        <td>AWS</td>
                                        <td><span class="badge bg-success">Running</span></td>
                                        <td>
                                            <a href="view_project?id=101" class="btn btn-warning btn-sm">View</a>
                                            <a href="edit_project?id=101" class="btn btn-primary btn-sm">Edit</a>
                                            <button class="btn btn-danger btn-sm">Close</button>
                                        </td>
                                    </tr>
                                    <!-- Add more running projects -->
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="hold" role="tabpanel" aria-labelledby="hold-tab">
                            <table class="table table-bordered projectstable" style="border-bottom: none;">
                                <!-- Hold Projects Table Content -->
                                <thead>
                                    <tr>
                                        <th>Project ID</th>
                                        <th>Project Name</th>
                                        <th>Development Cost</th>
                                        <th>Server</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>101</td>
                                        <td>Website Redesign</td>
                                        <td>$5,000</td>
                                        <td>AWS</td>
                                        <td><span class="badge bg-success">Running</span></td>
                                        <td>
                                            <a href="view_project?id=101" class="btn btn-warning btn-sm">View</a>
                                            <a href="edit_project?id=101" class="btn btn-primary btn-sm">Edit</a>
                                            <button class="btn btn-danger btn-sm">Close</button>
                                        </td>
                                    </tr>
                                    <!-- Add more running projects -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>






            <!-- Financial Summary Section -->
            <div class="card my-5 p-3">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="my-2">Financial Summary</h5>

                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card text-center mb-3 finance-card">
                                <div class="card-body">
                                    <h5 class="card-title">Total Income</h5>
                                    <p class="card-text">$25,000</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card text-center mb-3 finance-card">
                                <div class="card-body">
                                    <h5 class="card-title">Total Expenses</h5>
                                    <p class="card-text">$10,000</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card text-center mb-3 finance-card">
                                <div class="card-body">
                                    <h5 class="card-title">Net Profit</h5>
                                    <p class="card-text">$15,000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Transaction List Section -->
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between my-2">
                    <h5 class="my-2">Transactions</h5>
                    <div>
                        <a href="create_invoice" class="btn btn-success me-2"><i class="fa-solid fa-file-invoice"></i> Create Invoice</a>
                        <a href="add_transaction" class="btn btn-warning me-2"><i class="fa-solid fa-plus"></i> Add Transaction</a>
                    </div>
                </div>
                <div class="card-body">
                    <table id="transactionTable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Project ID</th>
                                <th>Project Name</th>
                                <th>Development Cost</th>
                                <th>Server</th>
                                <th>Total</th>
                                <th>Paid</th>
                                <th>Due</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>P123</td>
                                <td>Website Development</td>
                                <td>$5,000</td>
                                <td>$500</td>
                                <td>$5,500</td>
                                <td>$4,000</td>
                                <td>$1,500</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>P124</td>
                                <td>Mobile App Development</td>
                                <td>$7,000</td>
                                <td>$600</td>
                                <td>$7,600</td>
                                <td>$5,600</td>
                                <td>$2,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <?php include "./components/script.php"  ?>

        <script>
            // Initialize DataTables for Clients and Transactions
            $(document).ready(function() {
                $('#clientTable').DataTable({
                    paging: true,
                    searching: true,
                    ordering: true,
                    lengthMenu: [5, 10, 15, 25, 50, 'All'],
                    language: {
                        search: "_INPUT_",
                        searchPlaceholder: "Search clients..."
                    }
                });

                $('#transactionTable').DataTable({
                    paging: true,
                    searching: true,
                    ordering: true,
                    lengthMenu: [5, 10, 15, 25, 50, 'All'],
                    language: {
                        search: "_INPUT_",
                        searchPlaceholder: "Search transactions..."
                    }
                });
                $('.projectstable').DataTable({
                    paging: true,
                    searching: true,
                    ordering: true,
                    lengthMenu: [5, 10, 15, 25, 50, 'All'],
                    language: {
                        search: "_INPUT_",
                        searchPlaceholder: "Search transactions..."
                    }
                });
                $('.quotation-table').DataTable({
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

            // Function to confirm deletion
            function confirmDelete(clientId) {
                if (confirm("Are you sure you want to delete this client?")) {
                    console.log("Deleting client with ID: " + clientId);
                    // Implement delete functionality here
                }
            }
        </script>
    </div>

</body>