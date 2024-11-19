document.addEventListener('DOMContentLoaded', function() {
    // Offer Letter
    document.getElementById('offerLetterForm').addEventListener('submit', function(e) {
        e.preventDefault();
        // Handle offer letter generation
        alert('Offer letter generation functionality to be implemented');
    });

    // Termination Letter
    document.getElementById('terminationLetterForm').addEventListener('submit', function(e) {
        e.preventDefault();
        // Handle termination letter generation
        alert('Termination letter generation functionality to be implemented');
    });

    // Leave Management
    document.getElementById('leaveForm').addEventListener('submit', function(e) {
        e.preventDefault();
        // Handle leave request submission
        alert('Leave request submission functionality to be implemented');
    });

    // Pay Slip
    document.getElementById('paySlipForm').addEventListener('submit', function(e) {
        e.preventDefault();
        // Handle pay slip generation
        alert('Pay slip generation functionality to be implemented');
    });

    // Experience Certificate
    document.getElementById('experienceCertificateForm').addEventListener('submit', function(e) {
        e.preventDefault();
        // Handle experience certificate generation
        alert('Experience certificate generation functionality to be implemented');
    });

    // Salary Management
    document.getElementById('salaryForm').addEventListener('submit', function(e) {
        e.preventDefault();
        // Handle salary status update
        alert('Salary status update functionality to be implemented');
    });

    // Function to populate leave list (example)
    function populateLeaveList() {
        const leaveList = document.getElementById('leaveList');
        // This is a placeholder. In a real application, you'd fetch this data from a server
        const leaves = [
            { id: 1, type: 'Annual', status: 'Approved' },
            { id: 2, type: 'Sick', status: 'Pending' },
            { id: 3, type: 'Personal', status: 'Rejected' }
        ];

        leaveList.innerHTML = leaves.map(leave => `
            <li class="list-group-item d-flex justify-content-between align-items-center">
                ${leave.type} Leave
                <span class="badge bg-primary rounded-pill">${leave.status}</span>
            </li>
        `).join('');
    }

    // Call function to populate leave list
    populateLeaveList();
});