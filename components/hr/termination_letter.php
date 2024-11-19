<div class="card mt-3">
    <div class="card-body">
        <h5 class="card-title">Termination Letter</h5>
        <form id="terminationLetterForm">
            <div class="mb-3">
                <label for="emplIdName" class="form-label">Employee ID with Name</label>
                <input type="text" class="form-control" id="emplIdName" required>
            </div>
            <div class="mb-3">
                <label for="terminationDoc" class="form-label">Upload Document</label>
                <input type="file" class="form-control" id="terminationDoc" accept=".pdf,.doc,.docx" required>
            </div>
            <button type="submit" class="btn btn-primary">Generate Termination Letter</button>
        </form>
    </div>
</div>