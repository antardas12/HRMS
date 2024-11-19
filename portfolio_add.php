<?php $currentPage = "portfolio_add";
include "./components/head.php"; ?>
<title>Portfolio</title>
<link rel="stylesheet" href="./assets/css/style.css?v=<?php echo time(); ?>">
<!-- Flatpickr CSS for better date input -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<!-- Custom styles to improve design -->

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
                <h2 class="form-heading">Add Portfolio</h2>
                <form class="row" action="update_project.php">
                    <div class="mb-3 col-6">
                        <label for="clientID" class="form-label">Client ID</label>
                        <select id="clientID" name="client_id" class="form-select" required>
                            <option value="">Select Client</option>
                            <option value="1">Client 1</option>
                            <option value="2">Client 2</option>
                        </select>
                    </div>

                    <div class="mb-3 col-6">
                        <label for="clientName" class="form-label">Client Name</label>
                        <input type="text" id="clientName" name="client_name" class="form-control">
                    </div>

                    <div class="mb-3 col-6">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" id="phone" name="phone" class="form-control">
                    </div>

                    <!-- Improved Date Input -->
                    <div class="mb-3 col-6">
                        <label for="projectDate" class="form-label">Project Date</label>
                        <input type="text" id="projectDate" name="project_date" class="form-control flatpickr" placeholder="Select Date">
                    </div>







                    <div class="mb-3 col-6">
                        <label for="applink" class="form-label">App Link</label>
                        <input type="text" id="applink" name="applink" class="form-control">
                    </div>

                    <div class="mb-3 col-6">
                        <label for="weblink" class="form-label">Web Link</label>
                        <input type="text" id="weblink" name="weblink" class="form-control">
                    </div>



                    <div class="col-md-6 mb-3">
                        <label for="milestoneNote" class="form-label">Project Summary</label>
                        <textarea class="form-control" id="milestoneNote" name="milestone_note" rows="3"></textarea>
                    </div>

                    <!-- Dynamic Image Upload -->
                    <div class="mb-3 col-6">
                        <label for="projectImages" class="form-label">Project Images</label>
                        <div id="image-upload-container">
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" name="project_images[]" required>
                                <button class="btn btn-outline-secondary" type="button" onclick="addImageField()">Add More</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 text-end">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>


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

    <!-- JavaScript to handle dynamic image upload -->
    <script>
        function addImageField() {
            const container = document.getElementById('image-upload-container');
            const inputGroup = document.createElement('div');
            inputGroup.classList.add('input-group', 'mb-3');
            inputGroup.innerHTML = `
                <input type="file" class="form-control" name="project_images[]">
                <button class="btn btn-outline-danger" type="button" onclick="removeImageField(this)">Remove</button>
            `;
            container.appendChild(inputGroup);
        }

        function removeImageField(button) {
            button.closest('.input-group').remove();
        }
    </script>

    <!-- Flatpickr for enhanced date input -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        flatpickr(".flatpickr", {
            dateFormat: "Y-m-d",
        });
    </script>

    <?php include "./components/script.php"; ?>
</body>

</html>