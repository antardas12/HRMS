<?php $currentPage = ""; include "./components/head.php"; ?>
<title>Settings</title>
<link rel="stylesheet" href="./assets/css/style.css?v=<?php echo time(); ?>">
</head>
<body>
    <!-- Sidebar -->
    <?php include "./components/sidebar.php"; ?>

    <!-- Main content -->
    <div id="main-content" class="main-content">
        <!-- Topbar -->
        <?php include "./components/topbar.php"; ?>

        <!-- Settings Form -->
        <div class="container mt-4">
            <!-- <h2 class="mb-4">Settings</h2> -->
            <h2 class="mb-4">Set Profile</h2>
            <form action="settings_handler.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <!-- Brand Name -->
                    <div class="col-md-6 mb-3">
                        <label for="brandName">Brand Name</label>
                        <input type="text" class="form-control" id="brandName" name="brand_name" required>
                    </div>
                    <!-- Logo Upload -->
                    <div class="col-md-6 mb-3">
                        <label for="logoUpload">Upload Logo</label>
                        <input type="file" class="form-control" id="logoUpload" name="logo" accept="image/*">
                    </div>
                </div>
                <div class="row">
                    
                    <!-- Email -->
                    <div class="col-md-6 mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <!-- Phone -->
                    <div class="col-md-6 mb-3">
                        <label for="phone">Phone</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>
                </div>
                <div class="row">
                    <!-- Address -->
                    <div class="col-md-6 mb-3">
                        <label for="address">Address</label>
                        <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
                    </div>
                    
                    <!-- Website -->
                    <div class="col-md-6 mb-3">
                        <label for="website">Website</label>
                        <input type="url" class="form-control" id="website" name="website" required>
                    </div>
                </div>

                <!-- Submit Button -->
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Save Settings</button>
                    </div>
            </form>
        </div>
    </div>

    <?php include  "./components/script.php"; ?>
</body>
</html>
