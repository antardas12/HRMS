<?php $currentPage = "Create Invoice";
include "./components/head.php" ?>
<title>Create Invoice</title>
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
            <h2 class="mb-4">Create New Invoice</h2>
            <form>
                <!-- Invoice Details -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="invoiceID" class="form-label">Invoice ID</label>
                        <input type="text" class="form-control" id="invoiceID" value="AUTO GENERATED" disabled>
                    </div>
                    <div class="col-md-6">
                        <label for="invoiceDate" class="form-label">Invoice Date</label>
                        <input type="date" class="form-control" id="invoiceDate">
                    </div>
                </div>

                <!-- Client and Project Details -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="clientName" class="form-label">Client Name</label>
                        <input type="text" class="form-control" id="clientName" value="Client Name" disabled>
                    </div>
                    <div class="col-md-6">
                        <label for="projectName" class="form-label">Project Name</label>
                        <input type="text" class="form-control" id="projectName" value="Project XYZ">
                    </div>
                </div>

                <!-- Item List for the Invoice -->
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="mt-4 mb-3">Invoice Items</h4>
                    <div class="mt-4 text-end">
                        <button type="button" class="btn btn-success" id="addItemBtn">+ Add Another Item</button>
                    </div>
                </div>
                <div id="item-list">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="itemDescription1" class="form-label">Item Description</label>
                            <input type="text" class="form-control" id="itemDescription1" placeholder="Enter item description">
                        </div>
                        <div class="col-md-3">
                            <label for="quantity1" class="form-label">Quantity</label>
                            <input type="number" class="form-control" id="quantity1" placeholder="Enter quantity">
                        </div>
                        <div class="col-md-3">
                            <label for="unitPrice1" class="form-label">Unit Price</label>
                            <input type="number" class="form-control" id="unitPrice1" placeholder="Enter unit price">
                        </div>
                    </div>
                </div>



                <!-- Summary Section -->
                <h4 class="mt-4 mb-3">Summary</h4>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="subTotal" class="form-label">Subtotal</label>
                        <input type="text" class="form-control" id="subTotal" value="Auto Calculated" disabled>
                    </div>
                    <div class="col-md-6">
                        <label for="tax" class="form-label">Tax (%)</label>
                        <input type="number" class="form-control" id="tax" placeholder="Enter tax percentage">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="totalAmount" class="form-label">Total Amount</label>
                        <input type="text" class="form-control" id="totalAmount" value="Auto Calculated" disabled>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="text-end">
                    <a href="manage_invoices.php" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary">Create Invoice</button>
                </div>
            </form>
        </div>
    </div>

    <?php include "./components/script.php" ?>

    <script>
        let itemCount = 1;

        // Function to add new item row
        document.getElementById('addItemBtn').addEventListener('click', function() {
            itemCount++;

            const itemList = document.getElementById('item-list');
            const newItemRow = document.createElement('div');
            newItemRow.classList.add('row', 'mb-3');
            newItemRow.innerHTML = `
                <div class="col-md-6">
                    <label for="itemDescription${itemCount}" class="form-label">Item Description</label>
                    <input type="text" class="form-control" id="itemDescription${itemCount}" placeholder="Enter item description">
                </div>
                <div class="col-md-3">
                    <label for="quantity${itemCount}" class="form-label">Quantity</label>
                    <input type="number" class="form-control" id="quantity${itemCount}" placeholder="Enter quantity">
                </div>
                <div class="col-md-3">
                    <label for="unitPrice${itemCount}" class="form-label">Unit Price</label>
                    <input type="number" class="form-control" id="unitPrice${itemCount}" placeholder="Enter unit price">
                </div>
            `;
            itemList.appendChild(newItemRow);
        });
    </script>
</body>

</html>