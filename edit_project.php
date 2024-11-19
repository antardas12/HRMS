<?php include "./components/head.php"; ?>
<title>Edit Project</title>
<link rel="stylesheet" href="./assets/css/style.css?v=<?php echo time(); ?>">
</head>

<body>
    <!-- Sidebar -->
    <?php include "./components/sidebar.php"; ?>

    <!-- Main content -->
    <div id="main-content" class="main-content">
        <!-- Topbar -->
        <?php include "./components/topbar.php"; ?>

        <!-- Edit Project Form -->
        <div class="container mt-5">
            <h2 class="mb-4">Edit Project</h2>
            <form class="row" action="update_project.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3 col-6">
                    <label for="clientID" class="form-label">Client ID</label>
                    <select id="clientID" name="client_id" class="form-select" required>
                        <option value="">Select Client</option>
                        <!-- Populate clients here -->
                        <option value="1">Client 1</option>
                        <option value="2">Client 2</option>
                    </select>
                </div>

                <div class="mb-3 col-6">
                    <label for="clientName" class="form-label">Client Name</label>
                    <input type="text" id="clientName" name="client_name" class="form-control" readonly>
                </div>

                <div class="mb-3 col-6">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" id="phone" name="phone" class="form-control" readonly>
                </div>

                <div class="mb-3 col-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control" readonly>
                </div>

                <div class="mb-3 col-6">
                    <label for="companyName" class="form-label">Company Name</label>
                    <input type="text" id="companyName" name="company_name" class="form-control" readonly>
                </div>

                <div class="mb-3 col-6">
                    <label for="projectName" class="form-label">Project Name</label>
                    <input type="text" id="projectName" name="project_name" class="form-control" required>
                </div>

                <div class="mb-3 col-6">
                    <label for="projectID" class="form-label">Project ID</label>
                    <input type="text" id="projectID" name="project_id" class="form-control" readonly>
                </div>

                <div class="mb-3 col-6">
                    <label for="projectType" class="form-label">Project Type</label>
                    <select id="projectType" name="project_type" class="form-select" required>
                        <option value="static_website">Static Website</option>
                        <option value="dynamic_website">Dynamic Website</option>
                        <option value="admin_android_app">Admin + Android App</option>
                        <option value="admin_ios_app">Admin + iOS App</option>
                        <option value="website_app">Website + App (iOS + APK)</option>
                        <option value="graphic_design">Graphic Design</option>
                        <option value="seo">SEO</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div class="mb-3 col-6" id="otherProjectType" style="display: none;">
                    <label for="otherType" class="form-label">Specify Other Type</label>
                    <input type="text" id="otherType" name="other_type" class="form-control">
                </div>

                <div class="mb-3 col-6">
                    <label for="projectDocumentation" class="form-label">Project Documentation</label>
                    <input type="file" id="projectDocumentation" name="project_documentation" class="form-control">
                </div>

                <div class="mb-3 col-6">
                    <label for="server" class="form-label">Server</label>
                    <select id="server" name="server" class="form-select">
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>

                <div class="mb-3 col-6" id="serverTypeDiv" style="display: none;">
                    <label for="serverType" class="form-label">Server Type</label>
                    <input type="text" id="serverType" name="server_type" class="form-control">
                </div>

                <div class="mb-3 col-6">
                    <label for="developmentCost" class="form-label">Development Cost</label>
                    <input type="number" id="developmentCost" name="development_cost" class="form-control" required>
                </div>

                <div class="mb-3 col-6">
                    <label for="serverCost" class="form-label">Server Cost</label>
                    <input type="number" id="serverCost" name="server_cost" class="form-control">
                </div>

                <div class="mb-3 col-6">
                    <label for="accessoriesCost" class="form-label">Other Accessories Cost</label>
                    <input type="number" id="accessoriesCost" name="accessories_cost" class="form-control">
                </div>

                <div class="mb-3 col-6">
                    <label for="total" class="form-label">Total</label>
                    <input type="number" id="total" name="total" class="form-control" readonly>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Update Project</button>
                </div>
            </form>
        </div>

        <!-- JavaScript for handling dynamic fields -->
        <script>
            document.getElementById('projectType').addEventListener('change', function() {
                if (this.value === 'other') {
                    document.getElementById('otherProjectType').style.display = 'block';
                } else {
                    document.getElementById('otherProjectType').style.display = 'none';
                }
            });

            document.getElementById('server').addEventListener('change', function() {
                if (this.value === 'yes') {
                    document.getElementById('serverTypeDiv').style.display = 'block';
                } else {
                    document.getElementById('serverTypeDiv').style.display = 'none';
                }
            });

            // Example for calculating total
            function calculateTotal() {
                const developmentCost = parseFloat(document.getElementById('developmentCost').value) || 0;
                const serverCost = parseFloat(document.getElementById('serverCost').value) || 0;
                const accessoriesCost = parseFloat(document.getElementById('accessoriesCost').value) || 0;
                const total = developmentCost + serverCost + accessoriesCost;
                document.getElementById('total').value = total;
            }

            document.getElementById('developmentCost').addEventListener('input', calculateTotal);
            document.getElementById('serverCost').addEventListener('input', calculateTotal);
            document.getElementById('accessoriesCost').addEventListener('input', calculateTotal);
        </script>

    </div>

    <?php include "./components/script.php"; ?>
</body>

</html>