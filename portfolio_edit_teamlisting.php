<?php $currentPage = "portfolio_edit_teamlisting";
include "./components/head.php"; ?>
<title>Portfolio</title>
<link rel="stylesheet" href="./assets/css/style.css?v=<?php echo time(); ?>">

</head>

<body>
    <!-- Sidebar -->
    <?php include "./components/sidebar.php"; ?>
    <!-- Main content -->
    <div id="main-content" class="main-content">
        <!-- Topbar -->
        <?php include "./components/topbar.php"; ?>

        <div class="container form-container">


            <div class="form-card mb-5">
                <h2 class="form-heading">Add Team Member</h2>
                <form class="row" action="update_project.php">
                    <div class="mb-3 col-6">
                        <label for="clientID" class="form-label">Employee ID</label>
                        <select id="clientID" name="client_id" class="form-select" required>
                            <option value="">Select Client</option>
                            <option value="1">Client 1</option>
                            <option value="2">Client 2</option>
                        </select>
                    </div>

                    <div class="mb-3 col-6">
                        <label for="team_member_name" class="form-label">Employee Name</label>
                        <input type="text" id="team_member_name" name="team_member_name" class="form-control">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="team_member_role" class="form-label">Employee Role</label>
                        <input type="text" id="team_member_role" name="team_member_role" class="form-control">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="team_member_img" class="form-label">Team Member image</label>
                        <input type="file" id="team_member_img" name="team_member_img" class="form-control">
                    </div>



                    <div class="col-12 text-end">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <?php include "./components/script.php"; ?>
</body>

</html>