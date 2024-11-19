<?php $currentPage = "accounting";
include "./components/head.php"  ?>
<title>Finance Dashboard</title>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./assets/css/style.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="./assets/css/accounting.css?v=<?php echo time(); ?>">


</head>

<body>
    <?php include "./components/sidebar.php" ?>

    <div id="main-content" class="main-content">
        <?php include "./components/topbar.php" ?>

        <div class="dashboard-header">
            <h1 class="dashboard-title">Finance Dashboard</h1>
        </div>

        <div class="row g-4 mb-4">
            <div class="col-md-4 col-lg-3 text-center">
                <div class="stat-card">
                    <i class="fas fa-chart-line icon text-primary"></i>
                    <div class="stat-title">Total Qty Amount</div>
                    <div class="stat-value">$10,000</div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 text-center">
                <div class="stat-card">
                    <i class="fas fa-file-invoice-dollar icon text-success"></i>
                    <div class="stat-title">Total Invoice</div>
                    <div class="stat-value">$50,000</div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 text-center">
                <div class="stat-card">
                    <i class="fas fa-money-bill-wave icon text-info"></i>
                    <div class="stat-title">Total Disbursed</div>
                    <div class="stat-value">$30,000</div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 text-center">
                <div class="stat-card">
                    <i class="fas fa-clock icon text-warning"></i>
                    <div class="stat-title">Total Pending</div>
                    <div class="stat-value">$20,000</div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 text-center">
                <div class="stat-card">
                    <i class="fa-solid fa-file-invoice icon text-info"></i>
                    <div class="stat-title">Cash Account</div>
                    <div class="stat-value">$20,000</div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 text-center">
                <div class="stat-card">
                    <i class="fa-solid fa-file-invoice text-primary icon"></i>
                    <div class="stat-title">Branch Account</div>
                    <div class="stat-value">$20,000</div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 text-center">
                <div class="stat-card">
                    <i class="fa-solid fa-file-invoice text-success icon"></i>
                    <div class="stat-title">Capital Account</div>
                    <div class="stat-value">$20,000</div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Service & Product Details
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="serviceProductCode" class="form-label">Service or Product Code</label>
                                <input type="text" class="form-control" id="serviceProductCode" value="AUTO001" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="serviceProductName" class="form-label">Service or Product Name</label>
                                <input type="text" class="form-control" id="serviceProductName" placeholder="Enter Service or Product Name" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-custom">Add Service/Product</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Manage Service & Product
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover" id="manage_service">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Service/Product 1</td>
                                        <td>Description of Service/Product 1</td>
                                        <td>$100</td>
                                        <td>
                                            <a href="./edit_service_and_product.php" class="btn btn-sm btn-outline-secondary"><i class="fas fa-edit"></i></a>
                                            <a href="#" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        New Purchase
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="purchaseCode" class="form-label">Code (Auto Gen)</label>
                                <input type="text" class="form-control" id="purchaseCode" value="AUTOGEN12345" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="productName" class="form-label">Product / Service Name</label>
                                <input type="text" class="form-control" id="productName" placeholder="Enter product/service name" required>
                            </div>
                            <div class="mb-3">
                                <label for="quantity" class="form-label">Quantity</label>
                                <input type="number" class="form-control" id="quantity" placeholder="Enter quantity" required>
                            </div>
                            <div class="mb-3">
                                <label for="cost" class="form-label">Cost</label>
                                <input type="number" class="form-control" id="cost" placeholder="Enter cost" required>
                            </div>
                            <button type="submit" class="btn btn-success btn-custom">Add Purchase</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Manage Purchases
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover" id="purchases">
                                <thead>
                                    <tr>
                                        <th>Code</th>
                                        <th>Product / Service Name</th>
                                        <th>Quantity</th>
                                        <th>Cost</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>AUTOGEN12345</td>
                                        <td>Product 1</td>
                                        <td>10</td>
                                        <td>$100.00</td>
                                        <td>
                                            <a href="./edit_purchases.php" class="btn btn-sm btn-outline-warning"><i class="fas fa-edit"></i></a>
                                            <a href="#" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>Quotation Section</span>
                <button class="btn btn-primary btn-custom" data-toggle="modal" data-target="#newQuotationModal">
                    <i class="fas fa-plus me-2"></i>New Format
                </button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover" id="quotation">
                        <thead>
                            <tr>
                                <th>Quotation ID</th>
                                <th>Client Name</th>
                                <th>Date</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>QT-001</td>
                                <td>Client A</td>
                                <td>2024-10-01</td>
                                <td>$1,000.00</td>
                                <td><span class="badge bg-warning">Pending</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                                    <button class="btn btn-sm btn-outline-warning"><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>Fund Management</span>
                <a href="./add_fund.php" class="btn btn-success btn-custom">
                    <i class="fas fa-plus me-2"></i>Add Fund
                </a>
            </div>
            <div class="card-body">
                <form class="row g-3 mb-4">
                    <div class="col-md-5">
                        <select class="form-select" id="monthSelect">
                            <option value="">Select Month</option>
                            <option value="January">January</option>
                            <!-- Other months... -->
                        </select>
                    </div>
                    <div class="col-md-5">
                        <select class="form-select" id="yearSelect">
                            <option value="">Select Year</option>
                            <option value="2022">2022</option>
                            <!-- Other years... -->
                        </select>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary btn-custom w-100">View</button>
                    </div>
                </form>
                <div class="table-responsive">
                    <table class="table table-hover" id="balance_sheet">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Description</th>
                                <th>Income</th>
                                <th>Expense</th>
                                <th>Balance</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2024-10-01</td>
                                <td>Initial Balance</td>
                                <td class="text-success">$1,000.00</td>
                                <td class="text-danger">$0.00</td>
                                <td>$1,000.00</td>
                            </tr>
                            <!-- More rows... -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Income & Expense Section -->
        <div class="card mt-4">
            <div class="card-header">
                Income & Expense
            </div>
            <div class="card-body">
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="monthSelect" class="form-label">Select Month</label>
                        <select class="form-select" id="monthSelect">
                            <option value="">--Select Month--</option>
                            <option value="1">January</option>
                            <option value="2">February</option>
                            <!-- Add other months -->
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="yearSelect" class="form-label">Select Year</label>
                        <select class="form-select" id="yearSelect">
                            <option value="">--Select Year--</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="turnoverInput" class="form-label">Total Turnover</label>
                        <input type="number" class="form-control" id="turnoverInput" placeholder="Enter Total Turnover">
                    </div>
                    <div class="col-md-6">
                        <label for="salaryInput" class="form-label">Salary</label>
                        <input type="number" class="form-control" id="salaryInput" placeholder="Enter Salary">
                    </div>
                    <div class="col-md-6">
                        <label for="purchaseInput" class="form-label">Purchase</label>
                        <input type="number" class="form-control" id="purchaseInput" placeholder="Enter Purchase Amount">
                    </div>
                    <div class="col-md-6">
                        <label for="profitInput" class="form-label">Profit</label>
                        <input type="number" class="form-control" id="profitInput" placeholder="Enter Profit">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-custom">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    
    <!-- New Quotation Modal -->
    <div class="modal fade" id="newQuotationModal" tabindex="-1" aria-labelledby="newQuotationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newQuotationModalLabel">New Quotation Format</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Add your quotation form fields here -->
                    <form>
                        <div class="mb-3">
                            <label for="clientName" class="form-label">Client Name</label>
                            <input type="text" class="form-control" id="clientName" required>
                        </div>
                        <div class="mb-3">
                            <label for="quotationDate" class="form-label">Date</label>
                            <input type="date" class="form-control" id="quotationDate" required>
                        </div>
                        <div class="mb-3">
                            <label for="quotationAmount" class="form-label">Amount</label>
                            <input type="number" class="form-control" id="quotationAmount" required>
                        </div>
                        <!-- Add more fields as needed -->
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save Quotation</button>
                </div>
            </div>
        </div>
    </div>

    <?php include "./components/script.php" ?>

    <!-- <script>
        $(document).ready(function() {
            $('#manage_service, #purchases, #quotation, #balance_sheet').DataTable({
                responsive: true,
                pageLength: 10,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search...",
                },
                dom: '<"top"f>rt<"bottom"lip><"clear">',
            });
        });
    </script> -->
    <script>
        $(document).ready(function() {
            console.log("Document is ready.");
            $('#manage_service, #purchases, #quotation, #balance_sheet').DataTable({
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

    <script>
        // Additional JavaScript for handling modal actions, form submissions, etc.
        $(document).ready(function() {
            // Example: Handle form submission
            $('form').on('submit', function(e) {
                e.preventDefault();
                // Add your form submission logic here
                console.log('Form submitted');
            });

            // Example: Handle modal actions
            $('#newQuotationModal').on('show.bs.modal', function(e) {
                // Reset form fields or populate with data if editing
            });

            // Add more event handlers and functionality as needed
        });
    </script>
</body>

</html>