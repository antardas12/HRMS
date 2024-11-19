<?php $currentPage = "";
include "./components/head.php"; ?>
<title>Add Project</title>
<link rel="stylesheet" href="./assets/css/style.css?v=<?php echo time(); ?>">
</head>

<body>
    <!-- Sidebar -->
    <?php include "./components/sidebar.php"; ?>

    <!-- Main content -->
    <div id="main-content" class="main-content">
        <!-- Topbar -->
        <?php include "./components/topbar.php"; ?>

        <div class="container">
            <h2>Add New Project</h2>
            <form class="row" action="process_add_project.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3 col-6">
                    <label for="clientId" class="form-label">Client ID</label>
                    <select name="client_id" id="clientId" class="form-control" required>
                        <!-- Populate client options from database -->
                        <?php
                        // Example array of clients
                        $clients = [
                            ['id' => 1, 'name' => 'Client A'],
                            ['id' => 2, 'name' => 'Client B'],
                            // Fetch clients from database in a real implementation
                        ];
                        foreach ($clients as $client) {
                            echo "<option value=\"{$client['id']}\">{$client['name']}</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="mb-3 col-6">
                    <label for="projectName" class="form-label">Project Name</label>
                    <input type="text" name="project_name" id="projectName" class="form-control" required>
                </div>
                <div class="mb-3 col-6">
                    <label for="projectType" class="form-label">Project Type</label>
                    <select name="project_type" id="projectType" class="form-control" required>
                        <option value="STATIC WEBSITE">Static Website</option>
                        <option value="DYNAMIC WEBSITE">Dynamic Website</option>
                        <option value="ADMIN + ANDROID APP">Admin + Android App</option>
                        <option value="ADMIN + IOS APP">Admin + iOS App</option>
                        <option value="WEBSITE + APP">Website + App (iOS + APK)</option>
                        <option value="GRAPHIC DESIGN">Graphic Design</option>
                        <option value="SEO">SEO</option>
                        <option value="OTHER">Other</option>
                    </select>
                </div>
                <div class="mb-3 col-6">
                    <label for="documentation" class="form-label">Project Documentation</label>
                    <input type="file" name="documentation" id="documentation" class="form-control">
                </div>
                <div class="mb-3 col-6">
                    <label for="server" class="form-label">Server</label>
                    <select name="server" id="server" class="form-control" onchange="toggleServerType(this.value)" required>
                        <option value="NO">No</option>
                        <option value="YES">Yes</option>
                    </select>
                </div>
                <div class="mb-3 col-6" id="serverTypeContainer" style="display: none;">
                    <label for="serverType" class="form-label">Server Type</label>
                    <input type="text" name="server_type" id="serverType" class="form-control">
                </div>
                <div class="mb-3 col-6">
                    <label for="developmentCost" class="form-label">Development Cost</label>
                    <input type="number" name="development_cost" id="developmentCost" class="form-control" required>
                </div>
                <div class="mb-3 col-6">
                    <label for="serverCost" class="form-label">Server Cost</label>
                    <input type="number" name="server_cost" id="serverCost" class="form-control">
                </div>
                <div class="mb-3 col-6">
                    <label for="otherAccessories" class="form-label">Other Accessories Cost</label>
                    <input type="number" name="other_accessories" id="otherAccessories" class="form-control">
                </div>
                <div class="mb-3 col-6">
                    <label for="totalCost" class="form-label">Total Cost</label>
                    <input type="number" name="total_cost" id="totalCost" class="form-control" required readonly>
                </div>
                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Add Project</button>
                </div>
            </form>
        </div>
    </div>

    <?php include "./components/script.php"; ?>
    <script>
        function toggleServerType(value) {
            document.getElementById('serverTypeContainer').style.display = value === 'YES' ? 'block' : 'none';
        }

        // Calculate total cost on input change
        document.querySelectorAll('input[type="number"]').forEach(input => {
            input.addEventListener('input', calculateTotal);
        });

        function calculateTotal() {
            const developmentCost = parseFloat(document.getElementById('developmentCost').value) || 0;
            const serverCost = parseFloat(document.getElementById('serverCost').value) || 0;
            const otherAccessories = parseFloat(document.getElementById('otherAccessories').value) || 0;

            const total = developmentCost + serverCost + otherAccessories;
            document.getElementById('totalCost').value = total;
        }
    </script>
</body>

</html>