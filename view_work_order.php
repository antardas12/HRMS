<?php
$currentPage = "view_work_order";
include "./components/head.php"
?>
<title>View Work Order</title>
<link rel="stylesheet" href="./assets/css/style.css?v=<?php echo time(); ?>" />
<style>
    .work-order-details {
        background-color: #f8f9fa;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
    }

    .timeline {
        position: relative;
        padding-left: 30px;
    }

    .timeline::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 2px;
        background: #007bff;
    }

    .timeline-item {
        position: relative;
        margin-bottom: 20px;
    }

    .timeline-item::before {
        content: '';
        position: absolute;
        left: -34px;
        top: 0;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: #007bff;
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
            <h2 class="text-center mb-4">View Work Order</h2>

            <div class="card shadow">
                <div class="card-body">
                    <div class="work-order-details">
                        <h3>Work Order #WO001</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>Client:</strong> ABC Corp</p>
                                <p><strong>Project:</strong> Website Redesign</p>
                                <p><strong>Start Date:</strong> 2023-05-01</p>
                                <p><strong>Due Date:</strong> 2023-06-15</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Status:</strong> <span class="badge bg-success">In Progress</span></p>
                                <p><strong>Assigned To:</strong> John Doe</p>
                                <p><strong>Priority:</strong> High</p>
                                <p><strong>Estimated Hours:</strong> 120</p>
                            </div>
                        </div>
                    </div>

                    <h4>Description</h4>
                    <p>Complete website redesign for ABC Corp, including responsive design, improved user interface, and integration with their CMS.</p>

                    <h4>Timeline</h4>
                    <div class="timeline">
                        <div class="timeline-item">
                            <p><strong>2023-05-01:</strong> Work order created</p>
                        </div>
                        <div class="timeline-item">
                            <p><strong>2023-05-03:</strong> Initial client meeting completed</p>
                        </div>
                        <div class="timeline-item">
                            <p><strong>2023-05-10:</strong> Design mockups submitted for review</p>
                        </div>
                        <div class="timeline-item">
                            <p><strong>2023-05-15:</strong> Client feedback received, revisions in progress</p>
                        </div>
                    </div>

                    <h4>Attachments</h4>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Project Brief
                            <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-download"></i> Download</a>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Design Mockups
                            <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-download"></i> Download</a>
                        </li>
                    </ul>

                    <div class="mt-4">
                        <a href="edit_work_order" class="btn btn-primary"><i class="fas fa-edit"></i> Edit Work Order</a>
                        <a href="#" class="btn btn-success"><i class="fas fa-check"></i> Mark as Complete</a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-times"></i> Cancel Work Order</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "./components/script.php" ?>
</body>

</html>