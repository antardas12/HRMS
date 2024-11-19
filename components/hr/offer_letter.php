<div class="card mt-3">
    <div class="card-body">
        <h5 class="card-title">Offer Letter</h5>
        <form id="offerLetterForm">
            <div class="mb-3">
                <label for="empIdName" class="form-label">Employee ID with Name</label>
                <input type="text" class="form-control" id="empIdName" required>
            </div>
            <div class="mb-3">
                <label for="offerDoc" class="form-label">Upload Document</label>
                <input type="file" class="form-control" id="offerDoc" accept=".pdf,.doc,.docx" required>
            </div>
            <button type="submit" class="btn btn-primary">Generate Offer Letter</button>
        </form>
    </div>
</div>