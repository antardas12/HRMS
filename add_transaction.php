<?php $currentPage = "Add Transaction";
include "./components/head.php" ?>
<title>Add Transaction</title>
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
            <h2 class="mb-4">Add New Transaction</h2>
            <form>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="transactionID" class="form-label">Transaction ID</label>
                        <input type="text" class="form-control" id="transactionID" value="AUTO GENERATED" disabled>
                    </div>
                    <div class="col-md-6">
                        <label for="clientName" class="form-label">Client Name</label>
                        <input type="text" class="form-control" id="clientName" value="Client Name" disabled>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="projectName" class="form-label">Project Name</label>
                        <input type="text" class="form-control" id="projectName" value="Project XYZ">
                    </div>
                    <div class="col-md-6">
                        <label for="transactionDate" class="form-label">Transaction Date</label>
                        <input type="date" class="form-control" id="transactionDate">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="amount" class="form-label">Amount</label>
                        <input type="number" class="form-control" id="amount" placeholder="Enter amount">
                    </div>
                    <div class="col-md-6">
                        <label for="paymentMethod" class="form-label">Payment Method</label>
                        <select class="form-select" id="paymentMethod">
                            <option value="credit">Credit Card</option>
                            <option value="debit">Debit Card</option>
                            <option value="paypal">PayPal</option>
                            <option value="bank">Bank Transfer</option>
                            <option value="cash">Cash</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3 col-lg-6 col-sm-12">
                    <label for="description" class="form-label">Transaction Description</label>
                    <textarea class="form-control" id="description" rows="4" placeholder="Describe the transaction"></textarea>
                </div>

                <div class="text-end">
                    <a href="manage_transactions.php" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary">Add Transaction</button>
                </div>
            </form>
        </div>
    </div>

    <?php include "./components/script.php" ?>
</body>

</html>