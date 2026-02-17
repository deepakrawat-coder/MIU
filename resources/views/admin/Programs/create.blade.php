<div class="modal-body">

    <div class="text-center mb-4">
        <h4 class="fw-bold text-primary">Add Program</h4>
        <small class="text-muted">Fill program details carefully</small>
    </div>

    <form id="program-form" action="{{ route('programs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- School -->
        <div class="mb-3">
            <label class="form-label">School <span class="text-danger">*</span></label>
            <select name="School_id" class="form-select" required>
                <option value="">Select School</option>
                @foreach($Schools as $School)
                <option value="{{ $School->id }}">{{ $School->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Program Name -->
        <div class="mb-3">
            <label class="form-label">Program Name <span class="text-danger">*</span></label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <!-- Degree Type -->
        <div class="mb-3">
            <label class="form-label">Degree Type</label>
            <input type="text" name="degree_type" class="form-control" placeholder="B.Tech, MBA">
        </div>

        <!-- Duration -->
        <div class="mb-3">
            <label class="form-label">Duration</label>
            <input type="text" name="duration" class="form-control" placeholder="4 Years">
        </div>

        <!-- Level -->
        <div class="mb-3">
            <label class="form-label">Level</label>
            <select name="level" class="form-select">
                <option value="Undergraduate">Undergraduate</option>
                <option value="Postgraduate">Postgraduate</option>
                <option value="Doctoral">Doctoral</option>
                <option value="Diploma">Diploma</option>
            </select>
        </div>

        <!-- Overview -->
        <div class="mb-3">
            <label class="form-label">Overview</label>
            <textarea name="overview" id="overview" class="form-control" rows="4"></textarea>
        </div>

        <!-- Eligibility -->
        <div class="mb-3">
            <label class="form-label">Eligibility (comma separated)</label>
            <input type="text" name="eligibility[]" class="form-control" placeholder="10+2, PCM Required">
        </div>

        <!-- Curriculum Structure -->
        <div class="mb-3">
            <label class="form-label">Curriculum Structure (comma separated)</label>
            <input type="text" name="curriculum_structure[]" class="form-control" placeholder="Semester 1, Semester 2">
        </div>

        <!-- Highlights -->
        <div class="mb-3">
            <label class="form-label">Highlights (comma separated)</label>
            <input type="text" name="highlights[]" class="form-control" placeholder="Industry Oriented, Internship">
        </div>

        <!-- Seats -->
        <div class="mb-3">
            <label class="form-label">Total Seats</label>
            <input type="number" name="total_seats" class="form-control">
        </div>

        <!-- Fees -->
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Minimum Fee</label>
                <input type="number" step="0.01" name="fee_min" class="form-control">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Maximum Fee</label>
                <input type="number" step="0.01" name="fee_max" class="form-control">
            </div>
        </div>

        <!-- Featured Image -->
        <div class="mb-3">
            <label class="form-label">Featured Image <span class="text-danger">*</span></label>
            <input type="file" name="featured_image" class="form-control" required>
        </div>



        <div class="mb-3 text-end">
            <button type="submit" class="btn btn-primary">Save</button>
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
        </div>

    </form>
</div>


<!-- CKEditor -->
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
    let editorInstance;

$(document).ready(function() {

    ClassicEditor
        .create(document.querySelector('#overview'))
        .then(editor => {
            editorInstance = editor;
        })
        .catch(error => {
            console.error(error);
        });

    $("#program-form").submit(function(e){
        e.preventDefault();

        const overviewData = editorInstance.getData();
        $('textarea[name="overview"]').val(overviewData);

        let formData = new FormData(this);

        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function(res){
                if(res.status=='success'){
                    toastr.success(res.message);
                    $(".modal").modal('hide');
                    $('#programs-table').DataTable().ajax.reload();
                }else{
                    toastr.error(res.message);
                }
            },
            error: function(err){
                toastr.error(err.responseJSON?.message || 'Something went wrong!');
            }
        });
    });

});
</script>
