<?php $currentPage = "Edit Quotation";
include "./components/head.php" ?>
<title>Edit Quotation</title>
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
            <h2 class="mb-4">Edit Quotation</h2>
            <form>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="quotationNumber" class="form-label">Quotation Number</label>
                        <input type="text" class="form-control" id="quotationNumber" value="AUTO GENERATED" disabled>
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
                        <label for="projectType" class="form-label">Project Type</label>
                        <select class="form-select" id="projectType">
                            <option value="static">Static Website</option>
                            <option value="dynamic">Dynamic Website</option>
                            <option value="admin-android">Admin + Android App</option>
                            <option value="admin-ios">Admin + iOS App</option>
                            <option value="web-app">Website + App (iOS+APK)</option>
                            <option value="graphic">Graphic Design</option>
                            <option value="seo">SEO</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="totalAmount" class="form-label">Total Amount</label>
                        <input type="number" class="form-control" id="totalAmount" placeholder="Enter total amount">
                    </div>
                    <div class="col-md-6">
                        <label for="paymentTerms" class="form-label">Payment Terms</label>
                        <input type="text" class="form-control" id="paymentTerms" placeholder="Enter payment terms">
                    </div>
                </div>

                <div class="mb-3 col-lg-6 col-sm-12">
                    <label for="notes" class="form-label">Additional Notes</label>
                    <textarea class="form-control" id="notes" rows="4" placeholder="Any additional notes or comments"></textarea>
                </div>

                <div class="text-end">
                    <a href="manage_quotations.php" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary">Update Quotation</button>
                </div>
            </form>
        </div>
    </div>

    <?php include "./components/script.php" ?>
</body>

</html>