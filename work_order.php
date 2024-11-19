<?php $currentPage = "work_order";
include "./components/head.php" ?>
<title>Work Order Management</title>
<link rel="stylesheet" href="./assets/css/style.css?v=<?php echo time(); ?>" />
<style>
    .main-content {
        display: flex;
        flex-direction: column;
        height: 100vh;
    }

    .container {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .row {
        flex-grow: 1;
        display: flex;
        flex-wrap: wrap;
    }

    .col-md-6 {
        flex-basis: 50%;
        max-width: 50%;
        padding: 15px;
    }

    .card {
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .card-body {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .card-text {
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
            <h2 class="text-center mb-4">Work Order Management</h2>
            <div class="row">
                <!-- Running Work Orders Card -->
                <div class="col-md-6">
                    <div class="card border-success shadow">
                        <div class="card-body">
                            <h3 class="card-title text-success">Running Work Orders</h3>
                            <p class="card-text">View and manage all running work orders. Keep track of ongoing projects and their progress in real-time.</p>
                            <a href="running_work_orders" class="btn btn-lg btn-success">View Running Orders</a>
                        </div>
                    </div>
                </div>

                <!-- Complete Work Orders Card -->
                <div class="col-md-6">
                    <div class="card border-primary shadow">
                        <div class="card-body">
                            <h3 class="card-title text-primary">Completed Work Orders</h3>
                            <p class="card-text">Access completed work orders for your review. Analyze finished projects and gather insights for future improvements.</p>
                            <a href="completed_work_orders" class="btn btn-lg btn-primary">View Completed Orders</a>
                        </div>
                    </div>
                </div>

                <!-- Cancel Work Orders Card -->
                <div class="col-md-6">
                    <div class="card border-danger shadow">
                        <div class="card-body">
                            <h3 class="card-title text-danger">Cancelled Work Orders</h3>
                            <p class="card-text">Check all cancelled work orders here. Understand the reasons for cancellations and identify areas for process improvement.</p>
                            <a href="cancel_work_orders" class="btn btn-lg btn-danger">View Cancelled Orders</a>
                        </div>
                    </div>
                </div>

                <!-- Generate Work Order Card -->
                <div class="col-md-6">
                    <div class="card border-info shadow">
                        <div class="card-body">
                            <h3 class="card-title text-info">Generate Work Order</h3>
                            <p class="card-text">Create a new work order with ease. Streamline your workflow by quickly initiating new projects or tasks.</p>
                            <a href="genarate_work" class="btn btn-lg btn-info">Generate New Order</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "./components/script.php" ?>

</body>

</html>