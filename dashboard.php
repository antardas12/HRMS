<?php $currentPage = "dashboard"; include "./components/head.php"  ?>
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

        <h2 class="my-4 p-3">Welcome , Mark Zukerburg</h2>

        
        <!-- Cards  -->
        <div class="row g-4 mb-4">
            <div class="col-md-4 col-lg-3 text-center">
                <div class="stat-card">
                <i class="fas fa-users icon text-primary"></i>
                    <div class="stat-title">Total Employees</div>
                    <div class="stat-value">250</div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 text-center">
                <div class="stat-card">
                    <i class="fas fa-building icon text-success"></i>
                    <div class="stat-title">Total Clients</div>
                    <div class="stat-value">5000</div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 text-center">
                <div class="stat-card">
                    <i class="fas fa-project-diagram icon text-info"></i>
                    <div class="stat-title">Total Projects</div>
                    <div class="stat-value">75</div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 text-center">
                <div class="stat-card">
                    <i class="fas fa-tasks icon text-warning"></i>
                    <div class="stat-title">Total Production</div>
                    <div class="stat-value">120</div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 text-center">
                <div class="stat-card">
                    <i class="fas fa-check-circle icon text-info"></i>
                    <div class="stat-title">Total Complete</div>
                    <div class="stat-value">30</div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 text-center">
                <div class="stat-card">
                    <i class="fas fa-clock text-primary icon"></i>
                    <div class="stat-title">Total Pending</div>
                    <div class="stat-value">55</div>
                </div>
            </div>
            
        </div>

        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Recent Projects
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Project Alpha
                                <span class="badge bg-primary rounded-pill">In Progress</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Project Beta
                                <span class="badge bg-success rounded-pill">Completed</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Project Gamma
                                <span class="badge bg-warning rounded-pill">Pending</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Recent Clients
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Acme Corporation
                                <span class="badge bg-info rounded-pill">3 Projects</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                GlobalTech Solutions
                                <span class="badge bg-info rounded-pill">2 Projects</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Innovative Systems Inc.
                                <span class="badge bg-info rounded-pill">1 Project</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include  "./components/script.php"  ?>

</body>
</html>  