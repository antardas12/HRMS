<?php $currentPage = "hr";  include "./components/head.php"  ?>
<title>Finance</title>
<link rel="stylesheet" href="./assets/css/style.css?v=<?php echo time(); ?>">
<style>
 .container {
            margin-top: 30px;
        }
        .section-title {
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
        }
        .card {
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        .btn-custom {
            background-color: #007bff;
            color: white;
            border: none;
        }
        .btn-custom:hover {
            background-color: #0056b3;
        }
        .form-group label {
            font-weight: bold;
        }
</style>
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
    <h2 class="section-title">Edit Purchase</h2>

    <div class="card mb-4">
        <div class="card-body">
            <form>
                <div class="row">
                <div class="form-group col-6 mb-3">
                    <label for="purchaseCode">Code (Auto Gen)</label>
                    <input type="text" class="form-control" id="purchaseCode" value="AUTOGEN12345" disabled>
                </div>
                <div class="form-group col-6 mb-3">
                    <label for="productName">Product / Service Name</label>
                    <input type="text" class="form-control" id="productName" value="Product 1" placeholder="Enter product/service name" required>
                </div>
                <div class="form-group col-6">
                    <label for="quantity">Quantity</label>
                    <input type="number" class="form-control" id="quantity" value="10" placeholder="Enter quantity" required>
                </div>
                <div class="form-group col-6">
                    <label for="cost">Cost</label>
                    <input type="number col-6" class="form-control" id="cost" value="100.00" placeholder="Enter cost" required>
                </div>
                </div>
                <div class="text-end mt-3">
                    <button type="submit" class="btn btn-success btn-custom">Update Purchase</button>
                </div>
            </form>
        </div>
    </div>
</div>
      





    </div>







    <?php include  "./components/script.php"  ?>



</body>

</html>