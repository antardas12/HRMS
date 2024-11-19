<div class="card mt-3">
    <div class="card-body">
        <h5 class="card-title">Leave Management</h5>
        <div class="mb-3">
            <h6>List of Leave</h6>
            <ul id="leaveList" class="list-group">
                <!-- Leave list will be populated dynamically -->
            </ul>
        </div>
        <form id="leaveForm">
            <div class="mb-3">
                <label for="leaveType" class="form-label">Leave Type</label>
                <select class="form-select" id="leaveType" required>
                    <option value="">Select Leave Type</option>
                    <option value="annual">Annual Leave</option>
                    <option value="sick">Sick Leave</option>
                    <option value="personal">Personal Leave</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="leaveStart" class="form-label">Start Date</label>
                <input type="date" class="form-control" id="leaveStart" required>
            </div>
            <div class="mb-3">
                <label for="leaveEnd" class="form-label">End Date</label>
                <input type="date" class="form-control" id="leaveEnd" required>
            </div>
            <div class="mb-3">
                <label for="leaveReason" class="form-label">Reason</label>
                <textarea class="form-control" id="leaveReason" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit Leave Request</button>
        </form>
    </div>
</div>