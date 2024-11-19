<?php $currentPage = "hr";  include "./components/head.php"  ?>
<title>Add Fund</title>
<link rel="stylesheet" href="./assets/css/style.css?v=<?php echo time(); ?>">
<style>
  body {
            background-color: #f8f9fa;
        }
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
            padding: 20px;
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
        .form-inline .form-group {
            margin-right: 15px;
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
    <h2 class="section-title">Add Fund</h2>

    <div class="card">
        <div class="card-body">
            <form>
                <div class="form-row">
                    <!-- SL [Auto-generated] -->
                    <div class="form-group col-md-2">
                        <label for="slNumber">SL</label>
                        <input type="text" class="form-control" id="slNumber" value="AUTO" readonly>
                    </div>
                    <!-- Date [Auto but editable for older] -->
                    <div class="form-group col-md-4">
                        <label for="date">Date</label>
                        <input type="date" class="form-control" id="date" value="<?php echo date('Y-m-d'); ?>">
                    </div>
                </div>

                <div class="form-row">
                    <!-- Particulars (Client Name with ID) -->
                    <div class="form-group col-md-6">
                        <label for="clientParticulars">Particulars (Client Name with ID)</label>
                        <select class="form-control" id="clientParticulars">
                            <option value="1">John Doe [ID: 123]</option>
                            <option value="2">Jane Smith [ID: 124]</option>
                            <option value="3">Mark Johnson [ID: 125]</option>
                        </select>
                    </div>
                    <!-- Mode -->
                    <div class="form-group col-md-3">
                        <label for="mode">Mode</label>
                        <select class="form-control" id="mode">
                            <option>Bank Transfer</option>
                            <option>Credit Card</option>
                            <option>Cash</option>
                            <option>Other</option>
                        </select>
                    </div>
                    <!-- Transaction ID -->
                    <div class="form-group col-md-3">
                        <label for="trsnId">Transaction ID</label>
                        <input type="text" class="form-control" id="trsnId" placeholder="Enter Transaction ID">
                    </div>
                </div>

                <div class="form-row">
                    <!-- Credit -->
                    <div class="form-group col-md-3">
                        <label for="credit">Credit</label>
                        <input type="number" class="form-control" id="credit" placeholder="Enter Credit Amount">
                    </div>
                    <!-- Debit -->
                    <div class="form-group col-md-3">
                        <label for="debit">Debit</label>
                        <input type="number" class="form-control" id="debit" placeholder="Enter Debit Amount">
                    </div>
                    <!-- Cleared Balance -->
                    <div class="form-group col-md-3">
                        <label for="clrBalance">Cleared Balance</label>
                        <input type="text" class="form-control" id="clrBalance" value="AUTO" readonly>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-custom">Submit Fund Entry</button>
                </div>
            </form>
        </div>
    </div>
</div>




    </div>
    <?php include  "./components/script.php"  ?>



</body>

</html>