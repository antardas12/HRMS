<?php $currentPage = "clients"; ?>
<?php include "./components/head.php" ?>
<title>Edit Client</title>
<link rel="stylesheet" href="./assets/css/style.css?v=<?php echo time(); ?>" />
</head>
<body>
    <!-- Sidebar -->
    <?php include "./components/sidebar.php" ?>

    <!-- Main content -->
    <div id="main-content" class="main-content">
        <!-- Topbar -->
        <?php include "./components/topbar.php" ?>

        <!-- Form to edit client details -->
        <div class="container mt-4">
            <h1 class="mb-4">Edit Client</h1>
            <div class="card">
                <div class="card-header">
                    <h5 class="my-2">Client Information</h5>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="clientName" class="form-label">Client Name</label>
                                <input type="text" class="form-control" id="clientName" placeholder="Enter client name" value="ABC Corp">
                            </div>
                            <div class="col-md-6">
                                <label for="contactPerson" class="form-label">Contact Person</label>
                                <input type="text" class="form-control" id="contactPerson" placeholder="Enter contact person" value="John Doe">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="clientEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="clientEmail" placeholder="Enter email" value="johndoe@abccorp.com">
                            </div>
                            <div class="col-md-6">
                                <label for="clientPhone" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="clientPhone" placeholder="Enter phone number" value="(123) 456-7890">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="clientAddress" class="form-label">Address</label>
                                <textarea class="form-control" id="clientAddress" rows="3" placeholder="Enter client address">123 Main Street, City, State</textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 text-end">
                                <a href="clients.php" class="btn btn-secondary">Cancel</a>
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <?php include "./components/script.php"  ?>
</body>
