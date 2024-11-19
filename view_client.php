<?php
$currentPage = "";
include "./components/head.php";
?>
<title>View Client</title>
<link rel="stylesheet" href="./assets/css/style.css?v=<?php echo time(); ?>">
<style>
    .container {
        margin-top: 30px;
        max-width: 1100px;
        /* Limit the width for better readability */
        margin: 0 auto;
        padding: 20px;
    }

    .client-info,
    .table-section {
        margin-bottom: 40px;
        /* Space between sections */
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .client-header,
    .table-section h4 {
        margin-bottom: 20px;
        font-weight: bold;
    }

    .text-right {
        text-align: right;
    }
</style>
</head>

<body>
    <!-- Sidebar -->
    <?php include "./components/sidebar.php"; ?>

    <!-- Main content -->
    <div id="main-content" class="main-content">
        <!-- Topbar -->
        <?php include "./components/topbar.php"; ?>

        <!-- Client Information Section -->
        <div class="container">
            <div class="client-info card p-4">
                <h2 class="client-header text-center pb-3">Client Information</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="client-info-detail mb-3">
                            <h6 class="text-muted">Client Name</h6>
                            <p class="fw-bold fs-5 text-dark">John Doe</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="client-info-detail mb-3">
                            <h6 class="text-muted">Company Name</h6>
                            <p class="fw-bold fs-5 text-dark">Doe Enterprises</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="client-info-detail mb-3">
                            <h6 class="text-muted">Email</h6>
                            <p class="fw-bold fs-5 text-dark">johndoe@doe.com</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="client-info-detail mb-3">
                            <h6 class="text-muted">Phone</h6>
                            <p class="fw-bold fs-5 text-dark">(123) 456-7890</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="client-info-detail">
                            <h6 class="text-muted">Address</h6>
                            <p class="fw-bold fs-5 text-dark">123 Main St, Cityville, XY 12345</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quotation List Section -->
            <div class="card my-5">
                <div class="card-header d-flex justify-content-between my-2">
                    <h5 class="my-2">Quotations</h5>
                    <a href="add_new_quotation.php" class="btn btn-warning" style="color: #fff;">Add Quotation &nbsp;<i class="fa-solid fa-plus"></i></a>
                </div>
                <div class="card-body">
                    <table class="table table-hover table-bordered quotation-table">
                        <thead>
                            <tr>
                                <th>Quotation ID</th>
                                <th>Client Name</th>
                                <th>Date</th>
                                <th>Total Amount</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#Q1023</td>
                                <td>ABC Corporation</td>
                                <td>October 3, 2024</td>
                                <td>$12,500</td>
                                <td><span class="badge bg-warning">Pending</span></td>
                                <td>
                                    <!-- <a href="view_quotation.php?id=Q1023" class="btn btn-info btn-sm">View</a> -->
                                    <a href="edit_quotations?id=Q1023" class="btn btn-primary btn-sm">Edit</a>
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>#Q1024</td>
                                <td>XYZ Ltd.</td>
                                <td>October 2, 2024</td>
                                <td>$8,000</td>
                                <td><span class="badge bg-success">Approved</span></td>
                                <td>
                                    <!-- <a href="view_quotation.php?id=Q1024" class="btn btn-info btn-sm">View</a> -->
                                    <a href="edit_quotations?id=Q1024" class="btn btn-primary btn-sm">Edit</a>
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr>
                            <!-- Add more quotations here -->
                        </tbody>
                    </table>
                </div>
            </div>

            <!--Client Projects -->
            <div class="card my-5">
                <div class="card-header d-flex justify-content-between my-2">
                    <h5 class="my-2">Client Projects</h5>
                    <!-- <a href="add_new_quotation.php" class="btn btn-warning" style="color: #fff;"><i class="fa-solid fa-plus"></i></a> -->
                </div>
                <div class="card-body">
                    <table class="table table-hover table-bordered quotation-table">
                        <thead>
                            <tr>
                                <th>Project ID</th>
                                <th>Project Name</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>P001</td>
                                <td>Website Development</td>
                                <td>01/08/2024</td>
                                <td>15/09/2024</td>
                                <td>Completed</td>
                            </tr>
                            <tr>
                                <td>P002</td>
                                <td>Mobile App Design</td>
                                <td>16/09/2024</td>
                                <td>Ongoing</td>
                                <td>In Progress</td>
                            </tr>
                            <!-- Add more quotations here -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>

    <?php include "./components/script.php"; ?>
    <script>
        $(document).ready(function() {
            console.log("Document is ready.");
            $('.project-table').DataTable({
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

        $(document).ready(function() {
            console.log("Document is ready.");
            $('.quotation-table').DataTable({
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
        })
    </script>
</body>

</html>