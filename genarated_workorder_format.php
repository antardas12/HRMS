<?php include "./components/head.php" ?>
<title>Work Order Format</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

<style>
    body {
        font-family: "Roboto", sans-serif;
        line-height: 1.6;
        color: #333;
    }

    .container {
        width: 100%;
        max-width: 1000px;
        margin: 0 auto;
        padding: 20px;
        box-sizing: border-box;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 10px;
    }

    th,
    td {
        border: 1px solid black;
        padding: 8px;
    }

    th {
        background-color: #4CAF50;
        color: white;
    }

    .section-header {
        background-color: #4CAF50;
        color: white;
        padding: 15px;
        text-align: center;
        font-weight: bold;
        font-size: 18px;
    }

    .label {
        font-weight: bold;
    }

    .signature-section td {
        height: 100px;
        vertical-align: bottom;
    }

    .comments-section {
        height: 80px;
    }

    /* Header Styles */
    .header-section {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
        padding-bottom: 10px;
        border-bottom: 4px solid #4CAF50;
        background-color: #f9f9f9;
        padding: 15px;
        border-radius: 8px;
    }

    .header-left img {
        height: 80px;
        width: auto;
    }

    .header-left h5 {
        color: #0B192C;
    }

    .header-left h6 {
        color: #1E3E62;
    }

    .header-right {
        text-align: right;
        font-size: 14px;
        color: #333;
    }

    .header-right p {
        margin: 0;
        line-height: 1.6;
    }

    /* Footer Section */
    .footer-section {
        margin-top: 40px;
        padding-top: 20px;
        border-top: 4px solid #4CAF50;
        background-color: #f9f9f9;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        padding: 15px;
        border-radius: 8px;
    }

    /* Footer Contact Info */
    .footer-contact-info {
        font-size: 14px;
        font-weight: bold;
        color: #111;
    }

    .footer-contact-info a {
        color: #111;
        text-decoration: none;
    }

    .footer-contact-info a:hover {
        text-decoration: underline;
    }

    /* Signature Section */
    .signature-placeholder {
        text-align: right;
        font-size: 16px;
        color: #333;
        padding-right: 20px;
        position: relative;
        display: flex;
        flex-direction: column;
    }

    .signature-placeholder span {
        display: block;
        text-align: center;
        margin-top: 10px;
        padding-top: 5px;
        border-top: 2px solid #4CAF50;
        width: 200px;
        margin-left: auto;
        margin-right: 0;
        position: relative;
    }

    /* Print Button */
    #btnPrint {
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        font-size: 16px;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    #btnPrint:hover {
        background-color: #45a049;
    }

    .company-seal {
        display: flex;
        flex-direction: column;
    }
</style>




</head>


<body>
    <div class="container">
        <div class="py-2 px-3 rounded" style="border:1px solid #0B192C">
            <!-- Header Section -->
            <div class="header-section">
                <div class="header-left text-center">
                    <img src="https://indomitechgroup.com/img/logo.png" alt="Company Logo">
                    <h5 class="mt-2 fw-bold">INDOMITECH GROUP</h5>
                    <h6 class="fw-bold mt-1">Creative Think</h6>
                </div>
                <div class="header-right">
                    <p> <img class="mb-2 me-2" style="height: 1.3rem;" src="./assets/images/google-maps.png" alt=""> <strong>KOLKATA</strong> - SODEPUR GHOLA ADRASHAPALLY MANIKDANGA ROAD<br>
                        KOLKATA - 700110<br>
                        <strong>ABU DHABI</strong> - ELECTRA STREET, COLORS EXPRESS BUILDING,<br>NEAR LIFE LINE HOSPITAL
                    </p>
                </div>
            </div>
            <div class="section-header">Work Order Format</div>

            <!-- Company and Client Details -->
            <table>
                <tr>
                    <td colspan="2"><span class="label">Company Name:</span> ABC Company</td>
                    <td colspan="2"><span class="label">Client Name:</span> XYZ Client</td>
                </tr>
                <tr>
                    <td colspan="2" class="no-border-top"><span class="label">Address:</span> 123 Company St, City, State</td>
                    <td colspan="2" class="no-border-top"><span class="label">Address:</span> 456 Client Ave, Town, State</td>
                </tr>
                <tr>
                    <td colspan="2" class="no-border-top"><span class="label">Phone No.:</span> (123) 456-7890</td>
                    <td colspan="2" class="no-border-top"><span class="label">Phone No.:</span> (987) 654-3210</td>
                </tr>
                <tr>
                    <td colspan="2" class="no-border-top"><span class="label">Email ID:</span> info@abccompany.com</td>
                    <td colspan="2" class="no-border-top"><span class="label">Email ID:</span> client@xyzclient.com</td>
                </tr>
                <tr>
                    <td colspan="2" class="no-border-top"><span class="label">GSTIN No.:</span> GSTIN12345678</td>
                    <td colspan="2" class="no-border-top"><span class="label">Order No.:</span> ORD-001</td>
                </tr>
                <tr>
                    <td colspan="2"><span class="label">License No.:</span> LIC-9876543</td>
                    <td colspan="2"><span class="label">Customer Id:</span> CUST-001<br><span class="label">Order Received By:</span> John Doe</td>
                </tr>
            </table>

            <!-- Order Dates -->
            <table>
                <tr>
                    <td><span class="label">Order Date:</span> 2023-10-07</td>
                    <td><span class="label">Expected Start Date:</span> 2023-10-15</td>
                    <td><span class="label">Expected End Date:</span> 2023-11-15</td>
                </tr>
            </table>

            <!-- Authorization and Signature -->
            <table class="signature-section">
                <tr>
                    <td><span class="label">Work Authorized By:</span> Jane Smith</td>
                    <td><span class="label">Signature:</span> _____________________</td>
                </tr>
            </table>

            <!-- Work Description -->
            <table>
                <tr>
                    <th>Work Description:</th>
                </tr>
                <tr>
                    <td>Complete renovation of office space including painting, flooring, and electrical work.</td>
                </tr>
            </table>

            <!-- Costs Table -->
            <table>
                <tr>
                    <th>Sl. No.</th>
                    <th>Description</th>
                    <th>QTY</th>
                    <th>Price /Unit</th>
                    <th>Disc (%)</th>
                    <th>GST (%)</th>
                    <th>Amount</th>
                </tr>
                <tr>
                    <td colspan="7">I. Parts & Material Costs</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Paint - Interior Emulsion</td>
                    <td>50</td>
                    <td>500</td>
                    <td>5</td>
                    <td>18</td>
                    <td>25,000</td>
                </tr>
                <tr>
                    <td colspan="6" class="label">Total</td>
                    <td>25,000</td>
                </tr>
                <tr>
                    <td colspan="7">II. Services & Labour Costs</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Painting Service</td>
                    <td>100</td>
                    <td>200</td>
                    <td>0</td>
                    <td>18</td>
                    <td>20,000</td>
                </tr>
                <tr>
                    <td colspan="6" class="label">Total</td>
                    <td>20,000</td>
                </tr>
            </table>

            <!-- Total Estimated Value -->
            <table>
                <tr>
                    <td colspan="2" class="label">The Estimated Value For Your Building (I+II):</td>
                    <td colspan="2">45,000</td>
                </tr>
            </table>

            <!-- Work Order Compliance -->
            <div class="row">
                <div class="col-6">
                    <table>
                        <tr>
                            <td><span class="label">Work Order Complied By:</span> Sarah Johnson</td>
                        </tr>
                        <tr>
                            <td><span class="label">Date of Approval:</span> 2023-10-10</td>
                        </tr>
                        <tr>
                            <td><span class="label">Client Name & Title:</span> Michael Brown, CEO</td>
                        </tr>
                    </table>
                </div>
                <div class="col-6" style="position: relative;">
                    <div class="company-seal" style="border:1px solid black;width:100%;height:93%;">
                        <img class="mb-2" style="height: 5rem;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjGRDTQXRFQ-0PxrUic8ZvU3KUxd5UWF4Gfg&s" alt="">
                        <span class="label text-center p-2 pe-4 border-top">Company seal & signature</span>
                    </div>

                </div>
            </div>

            <!-- Additional Comments -->
            <table class="comments-section">
                <tr>
                    <th>Additional Comments:</th>
                </tr>
                <tr>
                    <td>Please ensure all safety protocols are followed during the renovation process.</td>
                </tr>
            </table>
            <!-- Footer Section -->
            <div class="footer-section">
                <div class="footer-contact-info">
                    @indomitechgroup&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;service@indomitechgroup.com<br>
                    www.indomitechgroup.com&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;+919875405470 / +971566447642
                </div>
                <div class="signature-placeholder">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjGRDTQXRFQ-0PxrUic8ZvU3KUxd5UWF4Gfg&s" alt="Company Seal" style="max-height: 5rem;">
                    <span>Signature</span>
                </div>
            </div>

        </div>


    </div>

    <!-- Print Button -->
    <div class="text-center my-4">
        <button id="btnPrint">Print as PDF</button>
    </div>

    <!-- Include your script file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <?php include "./components/script.php" ?>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("btnPrint").addEventListener("click", function() {
                const container = document.querySelector(".container");

                html2canvas(container, {
                    scale: 2 // Increase scale for better quality
                }).then(canvas => {
                    const imgData = canvas.toDataURL("image/png");
                    const pdf = new jsPDF({
                        orientation: 'portrait',
                        unit: 'mm',
                        format: 'a4'
                    });

                    const imgWidth = 210; // A4 width in mm
                    const pageHeight = 297; // A4 height in mm
                    const imgHeight = (canvas.height * imgWidth) / canvas.width;
                    let heightLeft = imgHeight;
                    let position = 0;

                    pdf.addImage(imgData, 'PNG', 0, position, imgWidth, imgHeight);
                    heightLeft -= pageHeight;

                    while (heightLeft > 0) {
                        position = heightLeft - imgHeight;
                        pdf.addPage();
                        pdf.addImage(imgData, 'PNG', 0, position, imgWidth, imgHeight);
                        heightLeft -= pageHeight;
                    }

                    pdf.save('work_order.pdf');
                }).catch(err => {
                    console.error('Error generating PDF:', err);
                });
            });
        });
    </script>


</body>

</html>