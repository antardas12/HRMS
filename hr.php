<?php $currentPage = "hr";
include "./components/head.php"; ?>
<title>HR Management</title>
<link rel="stylesheet" href="./assets/css/style.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="./assets/css/hr.css?v=<?php echo time(); ?>">
</head>

<body>
    <!-- Sidebar -->
    <?php include "./components/sidebar.php"; ?>
    <!-- Main content -->
    <div id="main-content" class="main-content">
        <!-- Topbar -->
        <?php include "./components/topbar.php"; ?>

        <div class="container mt-4">
            <h2 class="mb-3">HR Management</h2>
            <ul class="nav nav-tabs" id="hrTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="offer-tab" data-bs-toggle="tab" data-bs-target="#offer" type="button" role="tab" aria-controls="offer" aria-selected="true">Offer Letter</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="termination-tab" data-bs-toggle="tab" data-bs-target="#termination" type="button" role="tab" aria-controls="termination" aria-selected="false">Termination Letter</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="leave-tab" data-bs-toggle="tab" data-bs-target="#leave" type="button" role="tab" aria-controls="leave" aria-selected="false">Leave</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="payslip-tab" data-bs-toggle="tab" data-bs-target="#payslip" type="button" role="tab" aria-controls="payslip" aria-selected="false">Pay Slip</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="experience-tab" data-bs-toggle="tab" data-bs-target="#experience" type="button" role="tab" aria-controls="experience" aria-selected="false">Experience Certificate</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="salary-tab" data-bs-toggle="tab" data-bs-target="#salary" type="button" role="tab" aria-controls="salary" aria-selected="false">Salary</button>
                </li>
            </ul>
            <div class="tab-content" id="hrTabContent">
                <div class="tab-pane fade show active" id="offer" role="tabpanel" aria-labelledby="offer-tab">
                    <?php include "./components/hr/offer_letter.php"; ?>
                </div>
                <div class="tab-pane fade" id="termination" role="tabpanel" aria-labelledby="termination-tab">
                    <?php include "./components/hr/termination_letter.php"; ?>
                </div>
                <div class="tab-pane fade" id="leave" role="tabpanel" aria-labelledby="leave-tab">
                    <?php include "./components/hr/leave.php"; ?>
                </div>
                <div class="tab-pane fade" id="payslip" role="tabpanel" aria-labelledby="payslip-tab">
                    <?php include "./components/hr/pay_slip.php"; ?>
                </div>
                <div class="tab-pane fade" id="experience" role="tabpanel" aria-labelledby="experience-tab">
                    <?php include "./components/hr/experience_certificate.php"; ?>
                </div>
                <div class="tab-pane fade" id="salary" role="tabpanel" aria-labelledby="salary-tab">
                    <?php include "./components/hr/salary.php"; ?>
                </div>
            </div>
        </div>
    </div>
    <?php include "./components/script.php"; ?>
    <script src="./assets/js/hr.js"></script>
</body>

</html>