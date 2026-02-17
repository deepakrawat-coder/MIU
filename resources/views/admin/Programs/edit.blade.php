<div class="modal-body">

    <div class="text-center mb-4">
        <h4 class="fw-bold text-primary">Edit Program</h4>
        <small class="text-muted">Update program details carefully</small>
    </div>

    <form id="program-form" action="{{ route('programs.update', $program->id) }}" method="POST"
        enctype="multipart/form-data">
        @csrf

        <!-- School -->
        <div class="mb-3">
            <label class="form-label">School <span class="text-danger">*</span></label>
            <select name="school_id" class="form-select" required>
                <option value="">Select School</option>
                @foreach($Schools as $School)
                <option value="{{ $School->id }}" {{ $program->school_id == $School->id ? 'selected' : '' }}>
                    {{ $School->name }}
                </option>
                @endforeach
            </select>
        </div>

        <!-- Program Name -->
        <div class="mb-3">
            <label class="form-label">Program Name <span class="text-danger">*</span></label>
            <input type="text" name="name" value="{{ $program->name }}" class="form-control" required>
        </div>

        <!-- Degree Type -->
        <div class="mb-3">
            <label class="form-label">Degree Type</label>
            <input type="text" name="degree_type" value="{{ $program->degree_type }}" class="form-control">
        </div>

        <!-- Duration -->
        <div class="mb-3">
            <label class="form-label">Duration</label>
            <input type="text" name="duration" value="{{ $program->duration }}" class="form-control">
        </div>

        <!-- Level -->
        <div class="mb-3">
            <label class="form-label">Level</label>
            <select name="level" class="form-select">
                @foreach(['Undergraduate','Postgraduate','Doctoral','Diploma'] as $level)
                <option value="{{ $level }}" {{ $program->level == $level ? 'selected' : '' }}>
                    {{ $level }}
                </option>
                @endforeach
            </select>
        </div>

        <!-- Overview -->
        <div class="mb-3">
            <label class="form-label">Overview</label>
            <textarea name="overview" id="overview" class="form-control" rows="4">
                {!! $program->overview !!}
            </textarea>
        </div>

        <!-- Eligibility -->
        <div class="mb-3">
            <label class="form-label">Eligibility (comma separated)</label>
            <input type="text" name="eligibility"
                value="{{ is_array($program->eligibility) ? implode(',', $program->eligibility) : '' }}"
                class="form-control">
        </div>

        <!-- Curriculum -->
        <div class="mb-3">
            <label class="form-label">Curriculum Structure (comma separated)</label>
            <input type="text" name="curriculum_structure"
                value="{{ is_array($program->curriculum_structure) ? implode(',', $program->curriculum_structure) : '' }}"
                class="form-control">
        </div>

        <!-- Highlights -->
        <div class="mb-3">
            <label class="form-label">Highlights (comma separated)</label>
            <input type="text" name="highlights"
                value="{{ is_array($program->highlights) ? implode(',', $program->highlights) : '' }}"
                class="form-control">
        </div>

        <!-- Seats -->
        <div class="mb-3">
            <label class="form-label">Total Seats</label>
            <input type="number" name="total_seats" value="{{ $program->total_seats }}" class="form-control">
        </div>

        <!-- Fees -->
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Minimum Fee</label>
                <input type="number" step="0.01" name="fee_min" value="{{ $program->fee_min }}" class="form-control">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Maximum Fee</label>
                <input type="number" step="0.01" name="fee_max" value="{{ $program->fee_max }}" class="form-control">
            </div>
        </div>

        <!-- Featured Image -->
        <div class="mb-3">
            <label class="form-label">Featured Image</label>

            @if($program->featured_image)
            <div class="mb-2">
                <img src="{{ asset($program->featured_image) }}" width="120" class="rounded shadow-sm">
            </div>
            @endif

            <input type="file" name="featured_image" class="form-control">
        </div>

        <div class="mb-3 text-end">
            <button type="submit" class="btn btn-primary">Update</button>
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
        </div>

    </form>
</div>


<!-- CKEditor -->
{{-- <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
    let editorInstance;

$(document).ready(function() {

    ClassicEditor
        .create(document.querySelector('#overview'))
        .then(editor => {
            editorInstance = editor;
        });

    $("#program-form").submit(function(e){
        e.preventDefault();

        $('textarea[name="overview"]').val(editorInstance.getData());

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
</script> --}}


<script>
$(document).ready(function() {

    $("#program-form").submit(function(e){
        e.preventDefault();

        let formData = new FormData(this);

        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function(res){
                if(res.status === 'success'){
                    toastr.success(res.message);
                    $(".modal").modal('hide');
                    $('#programs-table').DataTable().ajax.reload();
                } else {
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
