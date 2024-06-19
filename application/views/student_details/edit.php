<div class="modal-header">
    <h1 class="modal-title fs-5" id="exampleModalLabel"> Student Details</h1>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<form action="<?= base_url('student/update'); ?>" method="POST">
    <div class="modal-body">
        <div class="mb-3">
            <label class="form-label">Student Name</label>
            <input type="text" class="form-control" id="name" name="student_name" placeholder="Student Name" required />
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Father Name</label>
                <input type="text" class="form-control" id="father_name" name="father_name" placeholder="Father Name"
                    required />
            </div>
            <div class="col mb-3">
                <label class="form-label">Mother Name</label>
                <input type="text" class="form-control" id="mother_name" name="mother_name" placeholder="Mother Name"
                    required />
            </div>
        </div>



        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Class</label>
                <select class="form-select" aria-label="Default select example" name="class" required>
                    <option selected>Select class</option>
                    <option value="6">6th</option>
                    <option value="7">7th</option>
                    <option value="8">8th</option>
                </select>
            </div>
            <div class="col mb-3">
                <label class="form-label">Date of Birth</label>
                <input type="date" class="form-control" id="dob" name="dob" placeholder="date of birth" required />
            </div>
        </div>

        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Scholar No.</label>
                <input type="number" class="form-control" id="scholar_no" name="scholar_no" placeholder="scholar no"
                    required />
            </div>
            <div class="col mb-3">
                <label class="form-label">Samagra Id</label>
                <input type="number" class="form-control" id="Samagra" name="Samagra" placeholder="Samagra No" required />
            </div>
        </div>

        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Aadhar</label>
                <input type="number" class="form-control" id="aadhar" name="aadhar" placeholder="Aadhar" required />
            </div>
            <div class="col mb-3">
                <label class="form-label">Account No</label>
                <input type="number" class="form-control" id="account" name="account" placeholder="Account No."
                    required />
            </div>
        </div>

        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Caste</label>
                <select class="form-select" aria-label="Default select example" name="caste" required>
                    <option selected>Select caste</option>
                    <option value="ST">ST</option>
                    <option value="SC">SC</option>
                    <option value="OBC">OBC</option>
                    <option value="GEN">GEN</option>
                </select>
            </div>
            <div class="col mb-3">
                <label class="form-label">Caste Cartificate No.</label>
                <input type="text" class="form-control" id="caste_no" name="caste_no" placeholder="Caste No."
                    required />
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Mobile No.</label>
                <input type="number" class="form-control" id="Mobile" name="Mobile" placeholder="Mobile" required />
            </div>
            <div class="col mb-3">
                <label class="form-label">PURV KI SCHOOL</label>
                <input type="text" class="form-control" id="school" name="school" placeholder="school"
                    required />
            </div>
        </div>
        <div class="col mb-3">
            <label class="form-label">Pass out Percentage</label>
            <input type="text" class="form-control" id="Percentage" name="Percentage" placeholder="Percentage "
                required />
        </div>

        <div class="modal-footer">
            <input type="submit" class="btn btn-success" value="Submit">
        </div>
    </div>
</form>