<?php include "./components/head.php"; ?>
<title>Work Order Input Form</title>
<link rel="stylesheet" href="./assets/css/style.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

</head>

<body>
    <?php include "./components/sidebar.php"; ?>

    <div id="main-content" class="main-content">
        <?php include "./components/topbar.php"; ?>

        <div class="container mt-5">
            <!-- <h2 class="mb-4">Genarate Work Order</h2> -->
            <form id="workOrderForm" action="./genarated_workorder_format.php">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Company Details</h4>
                        <div class="mb-3">
                            <label for="companyName" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="companyName" required>
                        </div>
                        <div class="mb-3">
                            <label for="companyAddress" class="form-label">Address</label>
                            <input type="text" class="form-control" id="companyAddress" required>
                        </div>
                        <div class="mb-3">
                            <label for="companyPhone" class="form-label">Phone No.</label>
                            <input type="tel" class="form-control" id="companyPhone" required>
                        </div>
                        <div class="mb-3">
                            <label for="companyEmail" class="form-label">Email ID</label>
                            <input type="email" class="form-control" id="companyEmail" required>
                        </div>
                        <div class="mb-3">
                            <label for="gstinNo" class="form-label">GSTIN No.</label>
                            <input type="text" class="form-control" id="gstinNo" required>
                        </div>
                        <div class="mb-3">
                            <label for="licenseNo" class="form-label">License No.</label>
                            <input type="text" class="form-control" id="licenseNo" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h4>Client Details</h4>
                        <div class="mb-3">
                            <label for="clientName" class="form-label">Client Name</label>
                            <input type="text" class="form-control" id="clientName" required>
                        </div>
                        <div class="mb-3">
                            <label for="clientAddress" class="form-label">Address</label>
                            <input type="text" class="form-control" id="clientAddress" required>
                        </div>
                        <div class="mb-3">
                            <label for="clientPhone" class="form-label">Phone No.</label>
                            <input type="tel" class="form-control" id="clientPhone" required>
                        </div>
                        <div class="mb-3">
                            <label for="clientEmail" class="form-label">Email ID</label>
                            <input type="email" class="form-control" id="clientEmail" required>
                        </div>
                        <div class="mb-3">
                            <label for="orderNo" class="form-label">Order No.</label>
                            <input type="text" class="form-control" id="orderNo" required>
                        </div>
                        <div class="mb-3">
                            <label for="customerId" class="form-label">Customer Id</label>
                            <input type="text" class="form-control" id="customerId" required>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="orderDate" class="form-label">Order Date</label>
                            <input placeholder="Select a date" type="text" class="form-control datepicker" id="orderDate" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="startDate" class="form-label">Expected Start Date</label>
                            <input placeholder="Select a date" type="text" class="form-control datepicker" id="startDate" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="endDate" class="form-label">Expected End Date</label>
                            <input placeholder="Select a date" type="text" class="form-control datepicker" id="endDate" required>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="authorizedBy" class="form-label">Work Authorized By</label>
                            <input type="text" class="form-control" id="authorizedBy" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="signature" class="form-label">Signature</label>
                            <input type="file" class="form-control" id="signature" required>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="workDescription" class="form-label">Work Description</label>
                    <textarea class="form-control" id="workDescription" rows="3" required></textarea>
                </div>

                <h4 class="mt-4">Parts & Material Costs</h4>
                <div class="row">
                    <div class="col-md-3">
                        <div class="mb-3">
                            <label for="partDesc1" class="form-label">Description</label>
                            <input type="text" class="form-control" id="partDesc1" required>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="mb-3">
                            <label for="partQty1" class="form-label">QTY</label>
                            <input type="number" class="form-control" id="partQty1" required>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="mb-3">
                            <label for="partPrice1" class="form-label">Price/Unit</label>
                            <input type="number" class="form-control" id="partPrice1" required>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="mb-3">
                            <label for="partDisc1" class="form-label">Disc (%)</label>
                            <input type="number" class="form-control" id="partDisc1" required>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="mb-3">
                            <label for="partGst1" class="form-label">GST (%)</label>
                            <input type="number" class="form-control" id="partGst1" required>
                        </div>
                    </div>
                </div>

                <h4 class="mt-4">Services & Labour Costs</h4>
                <div class="row">
                    <div class="col-md-3">
                        <div class="mb-3">
                            <label for="serviceDesc1" class="form-label">Description</label>
                            <input type="text" class="form-control" id="serviceDesc1" required>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="mb-3">
                            <label for="serviceQty1" class="form-label">QTY</label>
                            <input type="number" class="form-control" id="serviceQty1" required>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="mb-3">
                            <label for="servicePrice1" class="form-label">Price/Unit</label>
                            <input type="number" class="form-control" id="servicePrice1" required>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="mb-3">
                            <label for="serviceDisc1" class="form-label">Disc (%)</label>
                            <input type="number" class="form-control" id="serviceDisc1" required>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="mb-3">
                            <label for="serviceGst1" class="form-label">GST (%)</label>
                            <input type="number" class="form-control" id="serviceGst1" required>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="compliedBy" class="form-label">Work Order Complied By</label>
                            <input type="text" class="form-control" id="compliedBy" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="approvalDate" class="form-label">Date of Approval</label>
                            <input placeholder="Select a date" type="text" class="form-control datepicker" id="approvalDate" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="clientNameTitle" class="form-label">Client Name & Title</label>
                            <input type="text" class="form-control" id="clientNameTitle" required>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="additionalComments" class="form-label">Additional Comments</label>
                    <textarea class="form-control" id="additionalComments" rows="3"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Generate Work Order</button>
            </form>
        </div>
    </div>

    <?php include "./components/script.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            flatpickr(".datepicker", {
                dateFormat: "Y-m-d",
            });
        });
    </script>

</body>

</html>