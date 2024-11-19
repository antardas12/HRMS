<?php
$currentPage = "edit_work_order";
include "./components/head.php"
?>
<title>Edit Work Order</title>
<link rel="stylesheet" href="./assets/css/style.css?v=<?php echo time(); ?>" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<style>
    .form-section {
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
    }

    .section-title {
        padding-bottom: 10px;
        margin-bottom: 20px;
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

        <!-- Content -->
        <div class="container mt-4">
            <h2 class="text-center mb-4">Edit Work Order</h2>

            <div class="card shadow">
                <div class="card-body">
                    <?php
                    // Dummy data - replace with actual data from your database
                    $workOrder = [
                        'id' => 'WO001',
                        'client' => 'ABC Corp',
                        'project' => 'Website Redesign',
                        'startDate' => '2023-05-01',
                        'dueDate' => '2023-06-15',
                        'status' => 'In Progress',
                        'description' => 'Redesign the company website to improve user experience and incorporate modern design trends.',
                        'assignedTo' => 'John Doe',
                        'estimatedHours' => 120,
                        'actualHours' => 80,
                    ];
                    ?>

                    <form action="update_work_order.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $workOrder['id']; ?>">

                        <div class="form-section">
                            <h3 class="section-title">General Information</h3>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="client" class="form-label">Client</label>
                                    <input type="text" class="form-control" id="client" name="client" value="<?php echo $workOrder['client']; ?>" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="project" class="form-label">Project</label>
                                    <input type="text" class="form-control" id="project" name="project" value="<?php echo $workOrder['project']; ?>" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="startDate" class="form-label">Start Date</label>
                                    <input type="text" class="form-control datepicker" id="startDate" name="startDate" value="<?php echo $workOrder['startDate']; ?>" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="dueDate" class="form-label">Due Date</label>
                                    <input type="text" class="form-control datepicker" id="dueDate" name="dueDate" value="<?php echo $workOrder['dueDate']; ?>" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select class="form-select" id="status" name="status" required>
                                        <option value="Not Started" <?php echo $workOrder['status'] == 'Not Started' ? 'selected' : ''; ?>>Not Started</option>
                                        <option value="In Progress" <?php echo $workOrder['status'] == 'In Progress' ? 'selected' : ''; ?>>In Progress</option>
                                        <option value="On Hold" <?php echo $workOrder['status'] == 'On Hold' ? 'selected' : ''; ?>>On Hold</option>
                                        <option value="Completed" <?php echo $workOrder['status'] == 'Completed' ? 'selected' : ''; ?>>Completed</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="assignedTo" class="form-label">Assigned To</label>
                                    <input type="text" class="form-control" id="assignedTo" name="assignedTo" value="<?php echo $workOrder['assignedTo']; ?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-section">
                            <h3 class="section-title">Project Details</h3>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="4" required><?php echo $workOrder['description']; ?></textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="estimatedHours" class="form-label">Estimated Hours</label>
                                    <input type="number" class="form-control" id="estimatedHours" name="estimatedHours" value="<?php echo $workOrder['estimatedHours']; ?>" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="actualHours" class="form-label">Actual Hours</label>
                                    <input type="number" class="form-control" id="actualHours" name="actualHours" value="<?php echo $workOrder['actualHours']; ?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary">Update Work Order</button>
                            <a href="view_work_order.php?id=<?php echo $workOrder['id']; ?>" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include "./components/script.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            flatpickr(".datepicker", {
                dateFormat: "Y-m-d",
            });
        });
    </script>
</body>

</html>