<div class="card mt-3">
    <div class="card-body">
        <h5 class="card-title">Salary Management</h5>
        <div class="mb-3">
            <a href="https://docs.google.com/spreadsheets/d/1ViAvHORF4JN5i-_9iTsOj2sSRaV-7_SpNvgQvHiU1hg/edit?usp=sharing" target="_blank" class="btn btn-secondary">Open Salary Format</a>
        </div>
        <form id="salaryForm">
            <div class="mb-3">
                <label for="salaryEmployeeId" class="form-label">Employee ID</label>
                <input type="text" class="form-control" id="salaryEmployeeId" required>
            </div>
            <div class="mb-3">
                <label for="salaryMonth" class="form-label">Month</label>
                <input type="month" class="form-control" id="salaryMonth" required>
            </div>
            <div class="mb-3">
                <label for="salaryStatus" class="form-label">Status</label>
                <select class="form-select" id="salaryStatus" required>
                    <option value="">Select Status</option>
                    <option value="pending">Pending</option>
                    <option value="clear">Clear</option>
                    <option value="transfer">Transfer Next Month</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update Salary Status</button>
        </form>
    </div>
</div>