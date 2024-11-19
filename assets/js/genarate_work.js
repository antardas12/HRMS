document.getElementById('workOrderForm').addEventListener('submit', function (e) {
    e.preventDefault();
    generateWorkOrder();
});

function generateWorkOrder() {
    // Collect form data
    const formData = {
        companyName: document.getElementById('companyName').value,
        companyAddress: document.getElementById('companyAddress').value,
        companyPhone: document.getElementById('companyPhone').value,
        companyEmail: document.getElementById('companyEmail').value,
        gstinNo: document.getElementById('gstinNo').value,
        licenseNo: document.getElementById('licenseNo').value,
        clientName: document.getElementById('clientName').value,
        clientAddress: document.getElementById('clientAddress').value,
        clientPhone: document.getElementById('clientPhone').value,
        clientEmail: document.getElementById('clientEmail').value,
        orderNo: document.getElementById('orderNo').value,
        customerId: document.getElementById('customerId').value,
        orderDate: document.getElementById('orderDate').value,
        startDate: document.getElementById('startDate').value,
        endDate: document.getElementById('endDate').value,
        authorizedBy: document.getElementById('authorizedBy').value,
        signature: document.getElementById('signature').value,
        workDescription: document.getElementById('workDescription').value,
        partDesc1: document.getElementById('partDesc1').value,
        partQty1: document.getElementById('partQty1').value,
        partPrice1: document.getElementById('partPrice1').value,
        partDisc1: document.getElementById('partDisc1').value,
        partGst1: document.getElementById('partGst1').value,
        serviceDesc1: document.getElementById('serviceDesc1').value,
        serviceQty1: document.getElementById('serviceQty1').value,
        servicePrice1: document.getElementById('servicePrice1').value,
        serviceDisc1: document.getElementById('serviceDisc1').value,
        serviceGst1: document.getElementById('serviceGst1').value,
        compliedBy: document.getElementById('compliedBy').value,
        approvalDate: document.getElementById('approvalDate').value,
        clientNameTitle: document.getElementById('clientNameTitle').value,
        additionalComments: document.getElementById('additionalComments').value
    };

    // Calculate totals and amounts
    const partAmount1 = calculateAmount(formData.partQty1, formData.partPrice1, formData.partDisc1, formData.partGst1);
    const serviceAmount1 = calculateAmount(formData.serviceQty1, formData.servicePrice1, formData.serviceDisc1, formData.serviceGst1);
    const totalEstimate = partAmount1 + serviceAmount1;

    // Generate work order HTML
    const workOrderHTML = `
        <?php include "./genarated_workorder_format.php" ?>
    `;

    // Create a Blob with the HTML content
    const blob = new Blob([workOrderHTML], {
        type: 'text/html'
    });
    const url = URL.createObjectURL(blob);

    // Create a download link and trigger the download
    const a = document.createElement('a');
    a.href = url;
    a.download = 'work_order.html';
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
    URL.revokeObjectURL(url);
}

function calculateAmount(qty, price, disc, gst) {
    const subtotal = qty * price;
    const discountAmount = subtotal * (disc / 100);
    const afterDiscount = subtotal - discountAmount;
    const gstAmount = afterDiscount * (gst / 100);
    return afterDiscount + gstAmount;
}
