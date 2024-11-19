<div class="card mt-3">
    <div class="card-body">
        <h5 class="card-title">Pay Slip</h5>
        <form id="paySlipForm">
            <div class="mb-3">
                <label for="employeeId" class="form-label">Employee ID</label>
                <input type="text" class="form-control" id="employeeId" required>
            </div>
            <div class="mb-3">
                <label for="payPeriod" class="form-label">Pay Period</label>
                <input type="month" class="form-control" id="payPeriod" required>
            </div>
            <button type="submit" class="btn btn-primary">Generate Pay Slip</button>
        </form>
    </div>
</div>