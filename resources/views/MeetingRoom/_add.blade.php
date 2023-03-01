@extends('master')

@section('head')
    <link rel="stylesheet" href="{{ asset('vendor/dropzone/dropzone.css') }}">
@endsection

@section('breadcrumb')
    <div class="mr-auto w-p50">
        <h3 class="page-title border-0">Employee Requisition Form</h3>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-6 d-flex">
            <div class="box flex-fill">
                <div class="box-header">
                    <h4 class="box-title">Basic Info</h4>
                </div>
                <form action="{{ route('requisition.store') }}" method="POST">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label>Job Title</label>
                        <input type="text" name="job_title" class="form-control" required>
                        <input type="text" name="requested_by" class="form-control d-none" value="{{Auth::id()}}">
                    </div>
                    <div class="form-group">
                        <label>Level</label>
                        <select class="form-control" name="level" style="width: 100%;" required>
                            <option selected disabled>Select Level</option>
                            <option value="Head Of Coporate">Head Of Coporate</option>
                            <option value="Dept. Head">Dept. Head</option>
                            <option value="Section Head">Section Head</option>
                            <option value="Officer">Officer</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Division</label>
                        <select class="form-control" id="division" name="division" style="width: 100%;" required>
                            <option selected="selected" disabled>Select Division</option>
                            @foreach ($div as $x)
                                    <option value="{{ $x->id }}">{{ $x->division }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Location</label>
                        <textarea class="form-control" name="location" cols="10" rows="3" required></textarea>
                    </div>
                        <div class="form-group">
                            <label> Business Unit/PT</label>
                            <select class="form-control" name="unit_business" style="width: 100%;">
                                <option value="" selected disabled>Select Company</option>
                                @foreach ($pt as $x)
                                    <option value="{{ $x->id }}">{{ $x->PT }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <div class="c-inputs-stacked">
                                <input name="budgeted" type="radio" id="budgeted" value="0" checked>
                                <label for="budgeted" class="mr-30">Budgeted</label>

                                <input name="budgeted" type="radio" id="unbudgeted" value="1">
                                <label for="unbudgeted" class="mr-30">Unbudgeted</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="c-inputs-stacked">
                                <input name="purpose" type="radio" id="new-position" value="0" checked>
                                <label for="new-position" class="mr-30">New Position</label>

                                <input name="purpose" type="radio" id="project" value="1">
                                <label for="project" class="mr-30">Project</label>

                                <input name="purpose" type="radio" id="replacement-of" value="2">
                                <label for="replacement-of" class="mr-30">Replacement-of</label>
                            </div>
                        </div>

                            <div class="form-group d-none" id="project-duration" style="margin-top: 20px">
                                <div class="row">
                                    <div class="col-6">
                                        <input type="date" name="start_project" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <input type="date" name="end_project" class="form-control">
                                    </div>
                                </div>
                                <p><small>*) diisi dengan jangka waktu project</small></p>
                            </div>

                        <div class="col-7 d-none" id="name-replace-of">
                            <input type="text" class="form-control" name="state_employee_name" placeholder="state employee's name" aria-label="state employee's name" aria-describedby="basic-addon2">
                        </div>
                </div>
            </div>
            {{--  end basic Info --}}
        </div>
        <div class="col-sm-6 d-flex">
                <div class="box flex-fill">
                    <div class="box-header">
                        <h4 class="box-title">Employment Requirement</h4>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label>Status of Employment</label>
                            <div class="c-inputs-stacked">
                                <input name="status" type="radio" id="permanent" value="0" checked>
                                <label for="permanent" class="mr-30">Permanent</label>

                                <input name="status" type="radio" id="contract" value="1">
                                <label for="contract" class="mr-30">Contract</label>

                                <input name="status" type="radio" id="internship" value="2">
                                <label for="internship" class="mr-30">Internship</label>

                                <input name="status" type="radio" id="outsource" value="3">
                                <label for="outsource" class="mr-30">Outsource</label>
                            </div>
                        </div>

                        <div class="form-group d-none" id="month-duration">
                            <div class="row">
                                <div class="col-6"></div>
                                <div class="col-6">
                                    <label>Internship</label>
                                    <div class="input-group">
                                        <input type="number" name="intern_month" class="form-control">
                                        <span class="input-group-text">Months</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <label>Date required</label>
                                    <input type="date" class="form-control" name="date_required" required>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Personnel Requested</label>
                                        <div class="input-group">
                                            <input type="number" name="personel_req" class="form-control" required>
                                            <span class="input-group-text">Persons</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <select class="form-control" name="gender" style="width: 100%;" required>
                                <option disabled selected>Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="Not concerned">Not concerned</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Education Level</label>
                                        <select class="form-control " name="education" style="width: 100%;" required>
                                            <option value="" selected disabled>Select Education</option>
                                            <option value="SMU/SMK">SMU/SMK</option>
                                            <option value="Diploma">Diploma</option>
                                            <option value="Bachelor">Bachelor</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Major</label>
                                        <input type="text" name="major" class="form-control" placeholder="" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Age Minimum</label>
                                        <input type="number" class="form-control" placeholder="" name="age_min" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Age Maximum</label>
                                        <input type="number" class="form-control" placeholder="" name="age_max" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Working Experience</label>
                            <div class="row">
                                <div class="col">
                                    <div class="input-group mb-3">
                                        <input type="number" class="form-control" name="experience" required>
                                        <span class="input-group-text" id="inputGroup-sizing-default">Years</span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="fresh_graduate" value="1"
                                            id="flexCheckIndeterminate">
                                        <label class="form-check-label" for="flexCheckIndeterminate">
                                            Fresh Graduate
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="box-header">
                    <h4 class="box-title">Employment Requirement</h4>
                </div>
                <div class="box-body">
                    <div class="form-group mb-0">
                        <div class="row">
                            <div class="col-3">
                                <label>Main Responsibilities</label>
                            </div>
                            <div class="col-4">
                                <label>Task</label>
                            </div>
                            <div class="col-4">
                                <label>Report</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-3">
                                <textarea class="form-control editor" name="main_response[]" cols="3" rows="3" required></textarea>
                            </div>
                            <div class="col-4">
                                <textarea class="form-control editor" name="task[]" cols="3" rows="3" required></textarea>
                            </div>
                            <div class="col-4">
                                <textarea class="form-control editor" name="report[]" cols="3" rows="3" ></textarea>
                            </div>
                            <div class="col-1">
                                <a class="btn btn-bold btn-pure btn-info btn-block" id="addRow" data-toggle="tooltip" data-placement="bottom" title="Add participants">
                                    <i class="ti-plus text-white"></i>
                                </a>
                            </div>
                        </div>
                        <div id="field_wrapper"></div>
                    </div>

                    <div class="form-group">
                        <label for="">Skill, Knowledge & Abilities</label>
                        <textarea class="form-control editor" name="skill" cols="5" rows="5" required></textarea>
                    </div>
                </div>
            </div>
        <div class="col-sm-6">
            <div class="row">
                <div class="col-3">
                    <div class="form-group">
                        <button type="submit" class="btn btn-bold btn-pure btn-info btn-block">Create</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
        </div>
@endsection

@section('script')
<script>

    $('input[type=radio][name=purpose]').change(function() {
    if (this.value == '1') {
            $('#project-duration').removeClass('d-none')
    } else {
        $('#project-duration').addClass('d-none')
    }
    if (this.value == '2') {
            $('#name-replace-of').removeClass('d-none')
    } else {
        $('#name-replace-of').addClass('d-none')
    }
});

    $('input[type=radio][name=status]').change(function() {
    if (this.value == '3') {
            $('#month-duration').removeClass('d-none')
    } else {
        $('#month-duration').addClass('d-none')
    }
});
</script>

<script>
     $(document).ready(function(){
            var maxField = 24; //Input fields increment limitation
            var addButton = $('#addRow'); //Add button selector
            var wrapper = $('#field_wrapper'); //Input field wrapper
            var html = ''; //New input field html
                html +='<div class="form-group mb-0 mt-4 new-row">';
                    html +='<div class="row">';
                        html +='<div class="col-3">';
                            html +='<textarea class="form-control editor" name="main_response[]" cols="3" rows="3" ></textarea>';
                        html +='</div>';
                        html +='<div class="col-4">';
                            html +='<textarea class="form-control editor" name="task[]" cols="3" rows="3" ></textarea>';
                        html +='</div>';
                        html +='<div class="col-4">';
                            html +='<textarea class="form-control editor" name="report[]" cols="3" rows="3" ></textarea>';
                        html +='</div>';
                        html +='<div class="col-1">';
                            html +='<button class="btn btn-bold btn-pure btn-danger btn-block" id="removeRow"><i class="ti-minus"></i></button>';
                        html +='</div>';
                    html +='</div>';
                html +='</div>';
            var x = 1; //Initial field counter is 1
            //Once add button is clicked
            $(addButton).click(function(){
                //Check maximum number of input fields
                if(x < maxField){
                    x++; //Increment field counter
                    $(wrapper).append(html); //Add field html
                } else {
                    Swal.fire('You have reached the maximum number of participants')
                }
            });
            //Once remove button is clicked
            $(wrapper).on('click', '#removeRow', function(e){
                e.preventDefault();
                $(this).closest('.form-group').remove(); //Remove field html
                x--; //Decrement field counter
            });
        });
</script>

@endsection
