<?php
// Get the current page's basename (e.g. "index.php")
$currentPage = basename($_SERVER['PHP_SELF'], ".php");
?>

<nav id="sidebar" class="sidebar">
    <div class="brand">HRMS</div>
    <ul class="nav flex-column mt-4">
        <li class="nav-item">
            <a class="nav-link <?php echo ($currentPage == "dashboard") ? "active" : ""; ?>" href="dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#operationsSubmenu" role="button" aria-expanded="false" aria-controls="operationsSubmenu">
                <i class="fas fa-cogs"></i> Operations
            </a>
            <div class="collapse <?php echo ($currentPage == 'employees' || $currentPage == 'clients') ? 'show' : ''; ?>" id="operationsSubmenu">
                <ul class="nav flex-column collapse-menu">
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($currentPage == "employees") ? "active" : ""; ?>" href="employees"><i class="fas fa-users"></i> Employees</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($currentPage == "clients") ? "active" : ""; ?>" href="clients"><i class="fas fa-building"></i> Clients</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#projectsSubmenu" role="button" aria-expanded="false" aria-controls="projectsSubmenu">
                <i class="fas fa-project-diagram"></i> Projects
            </a>
            <div class="collapse <?php echo ($currentPage == 'add' || $currentPage == 'manage') ? 'show' : ''; ?>" id="projectsSubmenu">
                <ul class="nav flex-column collapse-menu">
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($currentPage == "add_projects") ? "active" : ""; ?>" href="add_projects"><i class="fas fa-plus"></i> Add</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($currentPage == "manage_projects") ? "active" : ""; ?>" href="manage_projects"><i class="fas fa-tasks"></i> Manage</a>
                    </li>
                </ul>
            </div>
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link fs-6" data-bs-toggle="collapse" href="#workOrderSubmenu" role="button" aria-expanded="false" aria-controls="workOrderSubmenu">
                <i class="fas fa-file-contract"></i> Generate Work
            </a>
            <div class="collapse <?php echo ($currentPage == 'update' || $currentPage == 'suspend') ? 'show' : ''; ?>" id="workOrderSubmenu">
                <ul class="nav flex-column collapse-menu">
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($currentPage == "running_works") ? "active" : ""; ?>" href="running_works"> Running Works</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($currentPage == "completed_works") ? "active" : ""; ?>" href="completed_works">Completed Works</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($currentPage == "cancel_works") ? "active" : ""; ?>" href="cancel_works"> Cancel Works</a>
                    </li>
                </ul>
            </div>
        </li> -->
        <li class="nav-item">
            <a class="nav-link <?php echo ($currentPage == "work_order") ? "active" : ""; ?>" href="work_order"><i class="fas fa-file-contract"></i> Work Order</a>
        </li>
        <!-- Start of Production Menu with Subcomponents -->
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#productionSubmenu" role="button" aria-expanded="false" aria-controls="productionSubmenu">
                <i class="fas fa-file-alt"></i> Production
            </a>
            <div class="collapse <?php echo ($currentPage == 'add_production' || $currentPage == 'manage_production') ? 'show' : ''; ?>" id="productionSubmenu">
                <ul class="nav flex-column collapse-menu">
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($currentPage == "add_production") ? "active" : ""; ?>" href="add_production"><i class="fas fa-plus"></i> Add</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($currentPage == "manage_production") ? "active" : ""; ?>" href="manage_production"><i class="fas fa-tasks"></i> Manage</a>
                    </li>
                </ul>
            </div>
        </li>
        <!-- End of Production Menu with Subcomponents -->
        <li class="nav-item">
            <a class="nav-link <?php echo ($currentPage == "report") ? "active" : ""; ?>" href="./report"><i class="fas fa-file-alt"></i> Reports</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo ($currentPage == "hr") ? "active" : ""; ?>" href="./hr.php"><i class="fas fa-user-tie"></i> HR</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo ($currentPage == "marketing") ? "active" : ""; ?>" href="./marketing"><i class="fas fa-bullhorn"></i> Marketing</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo ($currentPage == "accounting") ? "active" : ""; ?>" href="accounting"><i class="fas fa-money-bill-wave"></i> Accounting</a>
        </li>
        <!-- Portfolio -->
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#portfolioSubmenu" role="button" aria-expanded="false" aria-controls="portfolioSubmenu">
                <i class="fa-solid fa-briefcase"></i> Portfolio
            </a>
            <div class="collapse <?php echo ($currentPage == 'portfolio_add' || $currentPage == 'portfolio_manage') ? 'show' : ''; ?>" id="portfolioSubmenu">
                <ul class="nav flex-column collapse-menu">
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($currentPage == "portfolio_add") ? "active" : ""; ?>" href="portfolio_add"><i class="fas fa-plus"></i> Add</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($currentPage == "portfolio_manage") ? "active" : ""; ?>" href="portfolio_manage"><i class="fas fa-tasks"></i> Manage</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo ($currentPage == "settings") ? "active" : ""; ?>" href="settings"><i class="fas fa-cog"></i> Settings</a>
        </li>
    </ul>
</nav>