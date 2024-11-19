<?php $currentPage = "hr";
include "./components/head.php"  ?>
<title>Finance</title>
<link rel="stylesheet" href="./assets/css/style.css?v=<?php echo time(); ?>">
</head>
</head>

<body>
    <!-- Sidebar -->
    <?php include "./components/sidebar.php" ?>

    <!-- Main content -->

    <div id="main-content" class="main-content">
        <!-- Topbar -->
        <?php include "./components/topbar.php" ?>



        <div class="container">
            <h2 class="text-center mb-4">Edit Service/Product</h2>

            <div class="card mb-4">
                <div class="card-body">
                    <form>
                        <div class="form-group mb-3">
                            <label for="serviceName">Name</label>
                            <input type="text" class="form-control" id="serviceName"
                                placeholder="Enter service/product name" value="Service/Product 1" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="servicePrice">Price</label>
                            <input type="number" class="form-control" id="servicePrice" placeholder="Enter price"
                                value="100" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="serviceDescription">Description</label>
                            <textarea class="form-control" id="serviceDescription" rows="3"
                                required>Description of Service/Product 1</textarea>
                        </div>
                        <div class="text-center d-flex gap-4 align-items-center justify-content-end">
                            <a href="manage_service_product.html" class="btn btn-secondary ">Cancel</a>
                            <button type="submit" class="btn btn-primary btn-custom">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>






    </div>







    <?php include  "./components/script.php"  ?>



</body>

</html>