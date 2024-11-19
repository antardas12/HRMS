<?php $currentPage = ""; include "./components/head.php"; ?>
    <title>Add New Quotation</title>
    <link rel="stylesheet" href="./assets/css/style.css?v=<?php echo time(); ?>">
</head>
<body>
    <!-- Sidebar -->
    <?php include "./components/sidebar.php"; ?>

    <!-- Main content -->
    <div id="main-content" class="main-content">
        <!-- Topbar -->
        <?php include "./components/topbar.php"; ?>

        <!-- Add New Quotation Form -->
        <div class="container mt-5">
            <h2>Add New Quotation</h2>
            <form action="submit_quotation.php" method="POST" enctype="multipart/form-data">
                <!-- Client ID (Select from list) -->
                <div class="mb-3">
                    <label for="clientID" class="form-label">Client ID</label>
                    <select id="clientID" name="client_id" class="form-select" required>
                        <option value="">Select Client</option>
                        <!-- Example Options, this should be dynamically populated -->
                        <option value="1">Client 1</option>
                        <option value="2">Client 2</option>
                    </select>
                </div>

                <!-- Client Name (Auto) -->
                <div class="mb-3">
                    <label for="clientName" class="form-label">Client Name</label>
                    <input type="text" id="clientName" name="client_name" class="form-control" readonly>
                </div>

                <!-- Project Name -->
                <div class="mb-3">
                    <label for="projectName" class="form-label">Project Name</label>
                    <input type="text" id="projectName" name="project_name" class="form-control" required>
                </div>

                <!-- Quotation Date -->
                <div class="mb-3">
                    <label for="quotationDate" class="form-label">Quotation Date</label>
                    <input type="date" id="quotationDate" name="quotation_date" class="form-control" required>
                </div>

                <!-- Quotation Items (Dynamic Fields for Multiple Items) -->
                <div class="mb-3">
                    <label class="form-label">Quotation Items</label>
                    <div id="quotationItems">
                        <div class="row mb-2">
                            <div class="col-md-4">
                                <input type="text" name="item_name[]" class="form-control" placeholder="Item Name" required>
                            </div>
                            <div class="col-md-3">
                                <input type="number" name="item_quantity[]" class="form-control" placeholder="Quantity" required>
                            </div>
                            <div class="col-md-3">
                                <input type="number" name="item_price[]" class="form-control" placeholder="Price" required>
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-danger remove-item">Remove</button>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-secondary mt-2" id="addItem">Add Item</button>
                </div>

                <!-- Total Calculation -->
                <div class="mb-3">
                    <label for="totalAmount" class="form-label">Total Amount</label>
                    <input type="number" id="totalAmount" name="total_amount" class="form-control" readonly>
                </div>

                <!-- Upload Quotation Document -->
                <div class="mb-3">
                    <label for="quotationDocument" class="form-label">Upload Quotation Document</label>
                    <input type="file" id="quotationDocument" name="quotation_document" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Submit Quotation</button>
            </form>
        </div>

        <!-- JavaScript for handling dynamic items and total calculation -->
        <script>
            document.getElementById('addItem').addEventListener('click', function() {
                const newItem = `
                <div class="row mb-2">
                    <div class="col-md-4">
                        <input type="text" name="item_name[]" class="form-control" placeholder="Item Name" required>
                    </div>
                    <div class="col-md-3">
                        <input type="number" name="item_quantity[]" class="form-control" placeholder="Quantity" required>
                    </div>
                    <div class="col-md-3">
                        <input type="number" name="item_price[]" class="form-control" placeholder="Price" required>
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-danger remove-item">Remove</button>
                    </div>
                </div>`;
                document.getElementById('quotationItems').insertAdjacentHTML('beforeend', newItem);
            });

            document.addEventListener('click', function(e) {
                if (e.target.classList.contains('remove-item')) {
                    e.target.closest('.row').remove();
                    calculateTotal();
                }
            });

            // Function to calculate total amount
            function calculateTotal() {
                let total = 0;
                const quantities = document.querySelectorAll('input[name="item_quantity[]"]');
                const prices = document.querySelectorAll('input[name="item_price[]"]');

                quantities.forEach((qty, index) => {
                    const price = prices[index].value;
                    total += (qty.value * price);
                });

                document.getElementById('totalAmount').value = total;
            }

            // Event listener for total calculation
            document.addEventListener('input', function(e) {
                if (e.target.name === 'item_quantity[]' || e.target.name === 'item_price[]') {
                    calculateTotal();
                }
            });
        </script>
    </div>

    <?php include "./components/script.php"; ?>
</body>
</html>
