<?php $currentPage = "add_projects"; ?>
<?php include "./components/head.php"; ?>
<title>Add New Project</title>
<link rel="stylesheet" href="./assets/css/style.css?v=<?php echo time(); ?>" />
</head>

<body>

    <!-- Sidebar -->
    <?php include "./components/sidebar.php"; ?>

    <!-- Main content -->
    <div id="main-content" class="main-content">
        <!-- Topbar -->
        <?php include "./components/topbar.php"; ?>

        <div class="container mt-4">
            <h1 class="mb-4">Add New Project</h1>

            <div class="card">
                <div class="card-body">
                    <form class="row" method="POST">
                        <div class="mb-3 col-6">
                            <label for="projectName" class="form-label">Project Name</label>
                            <input type="text" class="form-control" id="projectName" name="projectName" required>
                        </div>
                        <div class="mb-3 col-6">
                            <label for="developmentCost" class="form-label">Development Cost</label>
                            <input type="number" class="form-control" id="developmentCost" name="developmentCost" required>
                        </div>
                        <div class="mb-3 col-6">
                            <label for="server" class="form-label">Server</label>
                            <select class="form-select" id="server" name="server">
                                <option value="AWS">AWS</option>
                                <option value="Azure">Azure</option>
                                <option value="Google Cloud">Google Cloud</option>
                            </select>
                        </div>
                        <div class="mb-3 col-6">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" id="status" name="status">
                                <option value="Running">Running</option>
                                <option value="Completed">Completed</option>
                                <option value="Closed">Closed</option>
                                <option value="On Hold">On Hold</option>
                            </select>
                        </div>
                        <div class="text-end mt-3">
                            <a type="submit" class="btn btn-primary">Add Project</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <?php include "./components/script.php"; ?>

    </div>

</body>