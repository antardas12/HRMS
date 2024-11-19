<?php include "./components/head.php"  ?>
<title>HRMS Dashboard</title>
<link rel="stylesheet" href="./assets/css/style.css?v=<?php echo time(); ?>">
</head>

<body>
    <!-- Sidebar -->
    <?php include "./components/sidebar.php" ?>

    <!-- Main content -->
    <div id="main-content" class="main-content">
        <!-- Topbar -->
        <?php include "./components/topbar.php" ?>

        <div class="card">
            <div class="card-header">
                Edit Production Report
            </div>
            <div class="card-body">
                <h5 class="card-title">Edit the details of the production report</h5>

                <!-- Edit Form -->
                <form>
                    <!-- Project Name -->
                    <div class="mb-3">
                        <label for="projectName" class="form-label">Project Name</label>
                        <input type="text" class="form-control" id="projectName" value="Project Alpha">
                    </div>

                    <!-- Developer Name -->
                    <div class="mb-3">
                        <label for="developerName" class="form-label">Developer Name</label>
                        <input type="text" class="form-control" id="developerName" value="John Doe">
                    </div>

                    <!-- Status -->
                    <div class="mb-3">
                        <label for="projectStatus" class="form-label">Status</label>
                        <select id="projectStatus" class="form-select">
                            <option value="running" selected>Running</option>
                            <option value="complete">Complete</option>
                            <option value="cancel">Cancel</option>
                            <option value="hold">Hold</option>
                        </select>
                    </div>

                    <!-- Date -->
                    <div class="mb-3">
                        <label for="reportDate" class="form-label">Date</label>
                        <input type="date" class="form-control" id="reportDate" value="2024-09-30">
                    </div>

                    <!-- Description -->
                    <div class="mb-3">
                        <label for="reportDescription" class="form-label">Description</label>
                        <textarea class="form-control" id="reportDescription"
                            rows="3">Initial phase development completed.</textarea>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary btn-submit">Save Changes</button>
                    <a href="production-report-list.html" class="btn btn-secondary btn-submit">Cancel</a>
                </form>
            </div>
        </div>

        <?php include  "./components/script.php"  ?>

</body>

</html>