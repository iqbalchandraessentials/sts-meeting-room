@extends('master')

@section('breadcrumb')
    <div class="mr-auto w-p50">
        <h3 class="page-title border-0">Meeting Room</h3>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12 col-md-6 col-xl-3">
            <div class="flexbox flex-justified text-center mb-30 bg-primary">
                <div class="no-shrink py-30">
                    <span class="ti-blackboard font-size-50"></span>
                </div>
                <div class="py-30 bg-white text-dark">
                    <div class="font-size-30">1</div>
                    <span>Total Room</span>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-3">
            <div class="flexbox flex-justified text-center mb-30 bg-danger">
                <div class="no-shrink py-30">
                    <span class="ti-link font-size-50"></span>
                </div>
                <div class="py-30 bg-white text-dark">
                    <div class="font-size-30">1/<span class="font-size-18">1</span></div>
                    <span>Active Room</span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="box">
                <div class="box-header">
                    <h4 class="box-title">Meeting Room List</h4>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-striped dataTables">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-left">Name</th>
                                    <th class="text-center text-nowrap">Capacity</th>
                                    <th class="text-left">Facilities</th>
                                    <th class="text-left text-nowrap">Hours Availability</th>
                                    <th class="text-left text-nowrap">Days Availability </th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-left text-nowrap">Large Meeting Room</td>
                                    <td class="text-right">12</td>
                                    <td class="text-left">Infocus, Screen, Glass board, Sound system, Pencils and memos, Internet connection.</td>
                                    <td class="text-left">Full Days</td>
                                    <td class="text-left">All Days</td>
                                    <td class="text-center text-success"><span class="btn btn-success btn-block btn-rounded">Active</span></td>
                                    <td class="text-center">
                                        <span data-toggle="modal" data-target="#modal-fill">
                                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="bottom" title="View">
                                                <i class="ti-eye"></i>
                                            </a>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- modal here --}}
    <div class="modal modal-fill fade" data-backdrop="false" id="modal-fill" tabindex="-1" style="z-index: 9999">
        <div class="modal-dialog modal-lg"">
            <div class="modal-content" style="max-width: 1024px">
                <div class="modal-header">
                    {{-- <h5 class="modal-title">Large Meeting Room	</h5> --}}
                    <button type="button" class="close" style="padding-right: 28px" data-dismiss="modal">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="box">
                                <div class="box-header">
                                    <h4 class="box-title">Basic Info</h4>
                                </div>
                                <div class="box-body">
                                    <div class="form-group">
                                        <label>Meeting Room Name</label>
                                        <input type="text" class="form-control" value="Large Meeting Room" placeholder="" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Capacity</label>
                                        <input type="number" class="form-control" value="12" placeholder="" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Room Location</label>
                                        <textarea rows="4" cols="4" class="form-control" placeholder="" readonly>Jl. Letjen M.T. Haryono No.kav 20, RT.4/RW.1, Cawang, Kec. Kramat jati, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13630.</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Hours Availability</label>
                                        <input type="text" class="form-control" value="Full Days" placeholder="" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Days Availability</label>
                                        <input type="text" class="form-control" value="All Days" placeholder="" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Meeting Room Status</label>
                                        <input type="text" class="form-control" value="Active" placeholder="" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="box">
                                <div class="box-header">
                                    <h4 class="box-title">Meeting Room Facilities</h4>
                                </div>
                                <div class="box-body">
                                    <div class="form-group">
                                        <label>Facilities</label>
                                        <textarea rows="4" cols="4" class="form-control" placeholder="" readonly>Infocus, Screen, Glass board, Sound system, Pencils and memos, Internet connection.</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="box-header">
                                    <h4 class="box-title">Meeting Room Photo</h4>
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-sm-6 col-6 mb-4">
                                            <img src="{{url('img/meeting-room/meeting_room_1.jpeg')}}" alt="">
                                        </div>
                                        <div class="col-sm-6 col-6 mb-4">
                                            <img src="{{url('img/meeting-room/meeting_room_2.jpeg')}}" alt="">
                                        </div>
                                        <div class="col-sm-6 col-6">
                                            <img src="{{url('img/meeting-room/meeting_room_3.jpeg')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-3">
                                    <div class="form-group">
                                        <button type="button" class="btn btn-bold btn-pure btn-secondary btn-block" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <a href="{{ url('/meeting-room/details/edit') }}" class="btn btn-bold btn-pure btn-info float-right btn-block">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

