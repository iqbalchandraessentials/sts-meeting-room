@extends('master')


@section('breadcrumb')
    <div class="mr-auto w-p50">
        <h3 class="page-title border-0">Employee Requisition</h3>
    </div>
@endsection


@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Basic Info</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <td>Job Title</td>
                                    <td>:</td>
                                    <td class="text-capitalize">
                                        {{ $data->job_title }}
                                     </td>
                                </tr>
                                <tr>
                                    <td>Level</td>
                                    <td>:</td>
                                    <td>
                                        {{ $data->level }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Division</td>
                                    <td>:</td>
                                    <td>
                                        {{ $data->div->division }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Business Unit/PT</td>
                                    <td>:</td>
                                    <td>
                                        {{ $data->pt->PT }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Created at</td>
                                    <td>:</td>
                                    <td>
                                        {{ date('d-M-Y', strtotime($data->created_at)) }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <td>Location</td>
                                    <td>:</td>
                                    <td>
                                        {{ $data->location }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Budgeted</td>
                                    <td>:</td>
                                    <td>
                                        @if ($data->budgeted == 0)
                                        <span class="badge badge-info pl-4 pr-4">YES</span>
                                        @else
                                        <span class="badge badge-danger pl-4 pr-4">NO</span>
                                        @endif

                                    </td>
                                </tr>
                                <tr>
                                    <td>Purpose</td>
                                    <td>:</td>
                                    <td>
                                        @if ($data->purpose == 0)
                                        <span class="badge badge-success pl-4 pr-4">NEW POSITION</span>
                                        @elseif ($data->purpose == 1)
                                        <span class="badge badge-info pl-4 pr-4">PROJECT</span>
                                        @elseif ($data->purpose == 2)
                                        <span class="badge badge-warning pl-4 pr-4">REPLACEMENT-OF</span>
                                        @endif
                                    </td>
                                </tr>
                                @if ($data->state_employee_name)
                                <tr>
                                    <td>State Employee</td>
                                    <td>:</td>
                                    <td>
                                        {{ $data->state_employee_name }}
                                    </td>
                                </tr>
                                @endif
                                @if ($data->state_employee_name)
                                <tr>
                                    <td>Date Project</td>
                                    <td>:</td>
                                    <td>
                                        {{ $data->start_project }} - {{ $data->end_project }}
                                    </td>
                                </tr>
                                @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Employment Requirement</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <td>Status Of Employment</td>
                                    <td>:</td>
                                    <td>
                                        @if ($data->status == 0)
                                        <span class="badge badge-info pl-4 pr-4">PERMANENT</span>

                                        @elseif ($data->status == 1)
                                        <span class="badge badge-warning pl-4 pr-4">CONTRACT</span>

                                        @elseif ($data->status == 2)
                                        <span class="badge badge-primary pl-4 pr-4">INTERNSHIP</span>
                                        @elseif ($data->status == 3)
                                        <span class="badge badge-danger pl-4 pr-4">OUTSOURCE</span>
                                        @endif
                                     </td>
                                </tr>

                                <tr>
                                    <td>Personel Request</td>
                                    <td>:</td>
                                    <td>
                                        {{ $data->personel_req }} Person
                                    </td>
                                </tr>
                                <tr>
                                    <td>Work Experience</td>
                                    <td>:</td>
                                    <td>
                                        {{ $data->experience }} Years
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gender</td>
                                    <td>:</td>
                                    <td class="text-capitalize">
                                        {{ $data->gender }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Age Betwen</td>
                                    <td>:</td>
                                    <td>
                                        {{ $data->age_min }} - {{ $data->age_max }} Years old
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col">
                        <table class="table table-hover">
                            <tbody>
                                @if ($data->intern_month )
                                    <tr>
                                        <td>Date Required</td>
                                        <td>:</td>
                                        <td>
                                            {{ $data->intern_month }} Months
                                        </td>
                                    </tr>
                                @endif
                                <tr>
                                    <td>Date Required</td>
                                    <td>:</td>
                                    <td>
                                        {{ $data->date_required }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Education</td>
                                    <td>:</td>
                                    <td>
                                        {{ $data->education }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Major</td>
                                    <td>:</td>
                                    <td class="text-capitalize">
                                        {{ $data->major }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Fresh Graduate</td>
                                    <td>:</td>
                                    <td>
                                        @if ($data->fresh_graduate)
                                        <span class="badge badge-success pl-4 pr-4">YES</span>
                                        @else
                                        <span class="badge badge-danger pl-4 pr-4">NO</span>
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <table class="table text-center">
                    <tbody>
                        <tr>
                            <td style="width: 10%"><b>Skill</b></td>
                            <td style="width: 5%">:</td>
                            <td style="width: 60%">
                                {{ $data->skill }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-12">
                <div class="mt-5">
                <table class="table table-hover mt-5">
                    <thead class="text-center ">
                        <th style="width: 10%">MAIN RESPONSIBILITIES</th>
                        <th style="width: 20%">TASK</th>
                        <th style="width: 15%">REPORT</th>
                    </thead>
                    <tbody>
                    @foreach ($data->respons as $item)
                    <tr>
                        <td>
                            {{ $item->main_response }}
                        </td>
                        <td>
                            {{ $item->task }}
                        </td>
                        <td>
                            {{ $item->report }}
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            </div>
            </div>
    </div>


    <div class="col-sm-6">
        <div class="row">
            <div class="col-3">
                <div class="form-group">
                    <a onclick="history.back()" class="btn text-white btn-bold btn-pure btn-info btn-block">Back</a>
                </div>
            </form>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('vendor/dropzone/dropzone.js') }}"></script>
@endsection



