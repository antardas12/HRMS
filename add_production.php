<?php $currentPage = "";
include "./components/head.php"; ?>
<title>Add Production</title>
<link rel="stylesheet" href="./assets/css/style.css?v=<?php echo time(); ?>">
</head>

<body>
    <!-- Sidebar -->
    <?php include "./components/sidebar.php"; ?>

    <!-- Main content -->
    <div id="main-content" class="main-content">
        <!-- Topbar -->
        <?php include "./components/topbar.php"; ?>

        <!-- Production Form -->
        <div class="container mt-4">
            <h2 class="mb-4">Add Production</h2>
            <form action="add_production_handler.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <!-- Project Selection -->
                    <div class="col-md-6 mb-3">
                        <label for="projectId">Select Project</label>
                        <select class="form-control" id="projectId" name="project_id">
                            <option value="">Select Project</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <!-- Add dynamic project options here -->
                        </select>
                    </div>
                    <!-- Today Date -->
                    <div class="col-md-6 mb-3">
                        <label for="todayDate">Today Date</label>
                        <input type="date" class="form-control" id="todayDate" name="today_date" required>
                    </div>
                </div>
                <div class="row">
                    <!-- Start Date -->
                    <div class="col-md-6 mb-3">
                        <label for="startDate">Start Date</label>
                        <input type="date" class="form-control" id="startDate" name="start_date" required>
                    </div>
                    <!-- End Date -->
                    <div class="col-md-6 mb-3">
                        <label for="endDate">End Date</label>
                        <input type="date" class="form-control" id="endDate" name="end_date" required>
                    </div>
                </div>
                <div class="row">
                    <!-- Project Document Upload -->
                    <div class="col-md-6 mb-3">
                        <label for="projectDoc">Upload Project Document</label>
                        <input type="file" class="form-control" id="projectDoc" name="project_doc" accept=".pdf,.doc,.docx,.zip">
                    </div>
                    <!-- Image Upload -->
                    <div class="col-md-6 mb-3">
                        <label for="imageUpload">Upload Project Image</label>
                        <input type="file" class="form-control" id="imageUpload" name="project_image" accept="image/*">
                    </div>
                </div>
                <!-- Assign Developers -->
                <div class="row mb-4">
                    <div class="col-md-12">
                        <label for="assignDevelopers" class="form-label">Assign Developers</label>
                        <div class="developer-selection">
                            <select id="developerSelect" class="form-select mb-2">
                                <option value="">Select a developer</option>
                                <option value="1">John Doe</option>
                                <option value="2">Jane Smith</option>
                                <option value="3">Mike Johnson</option>
                                <option value="4">Emily Brown</option>
                                <option value="5">Chris Lee</option>
                            </select>
                            <button type="button" id="addDeveloper" class="btn btn-secondary">Add Developer</button>
                        </div>
                        <div id="selectedDevelopers" class="mt-3">
                            <!-- Selected developers will be displayed here -->
                        </div>
                        <!-- Hidden input to store selected developer IDs -->
                        <input type="hidden" name="assigned_developers" id="assignedDevelopers">
                    </div>
                </div>


                <!-- Milestone Section -->
                <h4 class="mt-4 mb-3">Milestones</h4>
                <div class="row">
                    <!-- Milestone Name -->
                    <div class="col-md-6 mb-3">
                        <label for="milestoneName">Milestone Name</label>
                        <input type="text" class="form-control" id="milestoneName" name="milestone_name" required>
                    </div>
                    <!-- Milestone Start Date -->
                    <div class="col-md-6 mb-3">
                        <label for="milestoneStartDate">Milestone Start Date</label>
                        <input type="date" class="form-control" id="milestoneStartDate" name="milestone_start_date" required>
                    </div>
                </div>
                <div class="row">
                    <!-- Milestone Note -->
                    <div class="col-md-6 mb-3">
                        <label for="milestoneNote">Milestone Note</label>
                        <textarea class="form-control" id="milestoneNote" name="milestone_note" rows="3"></textarea>
                    </div>
                    <!-- Milestone End Date -->
                    <div class="col-md-6 mb-3">
                        <label for="milestoneEndDate">Milestone End Date</label>
                        <input type="date" class="form-control" id="milestoneEndDate" name="milestone_end_date" required>
                    </div>
                </div>

                <!-- Submit Button -->
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Add Production</button>
                    </div>
            </form>
        </div>
    </div>

    <?php include  "./components/script.php"; ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const developerSelect = document.getElementById('developerSelect');
            const addDeveloperBtn = document.getElementById('addDeveloper');
            const selectedDevelopersDiv = document.getElementById('selectedDevelopers');
            const assignedDevelopersInput = document.getElementById('assignedDevelopers');
            const selectedDevelopers = new Set();

            addDeveloperBtn.addEventListener('click', function() {
                const selectedOption = developerSelect.options[developerSelect.selectedIndex];
                if (selectedOption.value && !selectedDevelopers.has(selectedOption.value)) {
                    selectedDevelopers.add(selectedOption.value);
                    updateSelectedDevelopers();
                }
            });

            function updateSelectedDevelopers() {
                selectedDevelopersDiv.innerHTML = '';
                const developerArray = Array.from(selectedDevelopers);
                developerArray.forEach(developerId => {
                    const developerName = developerSelect.querySelector(`option[value="${developerId}"]`).textContent;
                    const developerSpan = document.createElement('span');
                    developerSpan.className = 'badge bg-primary me-2 mb-2';
                    developerSpan.textContent = developerName;

                    const removeBtn = document.createElement('button');
                    removeBtn.className = 'btn-close btn-close-white';
                    removeBtn.setAttribute('aria-label', 'Remove');
                    removeBtn.onclick = function() {
                        selectedDevelopers.delete(developerId);
                        updateSelectedDevelopers();
                    };

                    developerSpan.appendChild(removeBtn);
                    selectedDevelopersDiv.appendChild(developerSpan);
                });

                assignedDevelopersInput.value = Array.from(selectedDevelopers).join(',');
            }
        });
    </script>
</body>

</html>