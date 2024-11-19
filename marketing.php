<?php $currentPage = "marketing";  include "./components/head.php"  ?>
<title>Marketing</title>
<link rel="stylesheet" href="./assets/css/style.css?v=<?php echo time(); ?>">
<style>
.marketing-section {
    background-color: #f8f9fa;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
    margin-top: 30px;
}

.form-label {
    font-weight: bold;
}

.status-select {
    border-color: #6c757d;
}

.form-control,
.status-select {
    margin-bottom: 20px;
}

.submit-btn {
    background-color: #007bff;
    color: white;
    padding: 10px 30px;
}

.table-section {
    margin-top: 50px;
}

.badge {
    font-size: 14px;
}

.badge-success {
    background-color: #28a745;
}

.badge-warning {
    background-color: #ffc107;
}

.badge-danger {
    background-color: #dc3545;
}

.badge-info {
    background-color: #17a2b8;
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


        <div class="container marketing-section">
            <h2 class="text-center text-primary mb-4">Marketing Project Management</h2>

            <form class="row">
                <!-- Project Quarry -->
                <div class=" col-6">
                    <label for="projectQuarry" class="form-label">Project Quarry</label>
                    <input type="text" class="form-control" id="projectQuarry" placeholder="Enter Project Quarry">
                </div>

                <!-- Client Name -->
                <div class=" col-6">
                    <label for="clientName" class="form-label">Client Name</label>
                    <input type="text" class="form-control" id="clientName" placeholder="Enter Client Name">
                </div>

                <!-- Project Type -->
                <div class=" col-6">
                    <label for="projectType" class="form-label">Project Type</label>
                    <input type="text" class="form-control" id="projectType" placeholder="Enter Project Type">
                </div>



                <!-- Budget -->
                <div class=" col-6">
                    <label for="budget" class="form-label">Budget</label>
                    <input type="number" class="form-control" id="budget" placeholder="Enter Budget">
                </div>



                <!-- Status -->
                <div class=" col-6">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-select status-select" id="status">
                        <option selected>Deal</option>
                        <option>Qty High</option>
                        <option>No Response</option>
                        <option>Following</option>
                    </select>
                </div>
                <!-- Note -->
                <div class=" col-6">
                    <label for="note" class="form-label">Note</label>
                    <textarea class="form-control" id="note" rows="2" placeholder="Add any notes"></textarea>
                </div>
                <!-- Description -->
                <div class=" col-6">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" rows="4" placeholder="Enter Description"></textarea>
                </div>

                <!-- Submit Button -->
                <div class="text-end">
                    <button type="submit" class="btn submit-btn">Submit</button>
                </div>
            </form>
        </div>

        <?php include  "./components/script.php"  ?>

</body>

</html>