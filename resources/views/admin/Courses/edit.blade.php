<div class="modal-body">

    <div class="text-center mb-4">
        <h4 class="fw-bold text-primary">Edit Course</h4>
        <small class="text-muted">Update course details carefully</small>
    </div>

    <form id="course-edit-form" action="{{ route('courses.update', $course->id) }}" method="POST">
        @csrf

        <!-- Program -->
        <div class="mb-3">
            <label class="form-label">Program <span class="text-danger">*</span></label>
            <select name="program_id" class="form-select" required>
                <option value="">Select Program</option>
                @foreach($programs as $program)
                    <option value="{{ $program->id }}"
                        {{ $course->program_id == $program->id ? 'selected' : '' }}>
                        {{ $program->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Course Code -->
        <div class="mb-3">
            <label class="form-label">Course Code <span class="text-danger">*</span></label>
            <input type="text" name="code" class="form-control"
                   value="{{ $course->code }}" required>
        </div>

        <!-- Course Name -->
        <div class="mb-3">
            <label class="form-label">Course Name <span class="text-danger">*</span></label>
            <input type="text" name="name" class="form-control"
                   value="{{ $course->name }}" required>
        </div>

        <!-- Slug -->
        {{-- <div class="mb-3">
            <label class="form-label">Slug</label>
            <input type="text" name="slug" class="form-control"
                   value="{{ $course->slug }}">
        </div> --}}

        <!-- Description -->
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="4">{{ $course->description }}</textarea>
        </div>

        <!-- Semester & Year -->
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Semester</label>
                <input type="number" name="semester" class="form-control"
                       value="{{ $course->semester }}">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Year</label>
                <input type="number" name="year" class="form-control"
                       value="{{ $course->year }}">
            </div>
        </div>

        <!-- Credits -->
        <div class="mb-3">
            <label class="form-label">Credits</label>
            <input type="number" name="credits" class="form-control"
                   value="{{ $course->credits }}">
        </div>

        <!-- Type -->
        <div class="mb-3">
            <label class="form-label">Course Type</label>
            <select name="type" class="form-select">
                <option value="core" {{ $course->type == 'core' ? 'selected' : '' }}>Core</option>
                <option value="elective" {{ $course->type == 'elective' ? 'selected' : '' }}>Elective</option>
                <option value="laboratory" {{ $course->type == 'laboratory' ? 'selected' : '' }}>Laboratory</option>
                <option value="project" {{ $course->type == 'project' ? 'selected' : '' }}>Project</option>
                <option value="internship" {{ $course->type == 'internship' ? 'selected' : '' }}>Internship</option>
            </select>
        </div>

        <!-- Prerequisites -->
        <div class="mb-3">
            <label class="form-label">Prerequisites (comma separated)</label>
            <input type="text" name="prerequisites[]" class="form-control"
                value="{{ $course->prerequisites ? implode(',', json_decode($course->prerequisites)) : '' }}">
        </div>

        <!-- Syllabus -->
        <div class="mb-3">
            <label class="form-label">Syllabus (comma separated)</label>
            <input type="text" name="syllabus[]" class="form-control"
                value="{{ $course->syllabus ? implode(',', json_decode($course->syllabus)) : '' }}">
        </div>

        <!-- Learning Outcomes -->
        <div class="mb-3">
            <label class="form-label">Learning Outcomes (comma separated)</label>
            <input type="text" name="learning_outcomes[]" class="form-control"
                value="{{ $course->learning_outcomes ? implode(',', json_decode($course->learning_outcomes)) : '' }}">
        </div>

        <!-- Resources -->
        <div class="mb-3">
            <label class="form-label">Resources (comma separated)</label>
            <input type="text" name="resources[]" class="form-control"
                value="{{ $course->resources ? implode(',', json_decode($course->resources)) : '' }}">
        </div>

        <!-- Order -->
        <div class="mb-3">
            <label class="form-label">Display Order</label>
            <input type="number" name="order" class="form-control"
                   value="{{ $course->order }}">
        </div>

        <div class="mb-3 text-end">
            <button type="submit" class="btn btn-primary">Update</button>
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
        </div>

    </form>
</div>

<script>
$(document).ready(function() {

    $("#course-edit-form").submit(function(e){
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
                    $('#courses-table').DataTable().ajax.reload();
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
