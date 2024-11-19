<?php 
$currentPage = ""; 
include "./components/head.php"; 
?>
<title>User Profile</title>
<link rel="stylesheet" href="./assets/css/style.css?v=<?php echo time(); ?>">
<style>
    .profile-container {
        max-width: 900px; /* Limit the width for better readability */
        margin: 0 auto; /* Center the profile container */
        padding: 30px; /* Space around the container */
        background-color: #fff; /* White background for profile */
        border-radius: 8px; /* Rounded corners */
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Soft shadow */
    }
    .profile-header {
        text-align: center; /* Center the profile header */
        margin-bottom: 40px; /* Space below the header */
    }
    .profile-row {
        display: flex; /* Flexbox for layout */
        justify-content: space-between; /* Space between items */
        margin-bottom: 30px; /* Space between rows */
        padding: 20px; /* Space inside each row */
        border: 1px solid #e1e1e1; /* Border for each row */
        border-radius: 8px; /* Rounded corners for rows */
        background-color: #f8f9fa; /* Light background for contrast */
    }
    .profile-row img {
        height: 80px; /* Set height for logo */
        border-radius: 50%; /* Circular logo */
    }
    .profile-info {
        flex: 1; /* Flex-grow to fill space */
        padding-left: 20px; /* Space between image and text */
    }
    .profile-info h5 {
        font-size: 1.2rem; /* Title size */
        margin-bottom: 5px; /* Space below title */
    }
    .profile-info p {
        font-size: 1rem; /* Text size */
        color: #555; /* Text color */
        margin: 0; /* Remove default margins */
    }
    .edit-button {
        display: block; /* Block button */
        width: 100%; /* Full width */
        margin-top: 20px; /* Space above button */
    }
</style>
</head>
<body>
    <!-- Sidebar -->
    <?php include "./components/sidebar.php"; ?>

    <!-- Main content -->
    <div id="main-content" class="main-content">
        <!-- Topbar -->
        <?php include "./components/topbar.php"; ?>

        <!-- Profile Display -->
        <div class="container profile-container mt-5">
            <h2 class="profile-header">Profile Information</h2>
            <div class="profile-row">
                <div class="profile-info">
                    <h5>Brand Name</h5>
                    <p class="font-weight-bold">My Awesome Brand</p>
                </div>
                <!-- <img src="./assets/images/dummy_logo.png" alt="Brand Logo" class="img-fluid"> -->
                <img src="https://indomitechgroup.com/img/logo.png" alt="Brand Logo" class="img-fluid">
            </div>
            <div class="profile-row">
                <div class="profile-info">
                    <h5>Address</h5>
                    <p>123 Brand St, Brand City, BC 12345</p>
                </div>
            </div>
            <div class="profile-row">
                <div class="profile-info">
                    <h5>Phone</h5>
                    <p>📞 (123) 456-7890</p>
                </div>
            </div>
            <div class="profile-row">
                <div class="profile-info">
                    <h5>Email</h5>
                    <p>✉️ contact@myawesomebrand.com</p>
                </div>
            </div>
            <div class="profile-row">
                <div class="profile-info">
                    <h5>Website</h5>
                    <p><a href="https://www.myawesomebrand.com" target="_blank" style="color: #007bff;">www.myawesomebrand.com</a></p>
                </div>
            </div>

            <!-- Edit Button -->
            <a href="settings.php" class="btn btn-primary btn-lg edit-button">Edit Settings</a>
        </div>

        <!-- Footer -->
        <footer class="mt-5 py-3 bg-light">
            <div class="container text-center">
                <p class="text-muted">© <?php echo date("Y"); ?> My Awesome Brand. All Rights Reserved.</p>
            </div>
        </footer>
    </div>

    <?php include "./components/script.php"; ?>
</body>
</html>
