@extends('layouts.dashboard')
@section('content')
    <div class="data-table-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 box-margin">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title mb-1">Data Resort</h6>
                            <div class="flot-right" style="margin-bottom: 10px;">
                                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Add Data</button>
                            </div>
                            <div class="table-responsive">
                                <table id="dataTableExample" class="table">
                                    <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Kota</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $ini)
                                        <tr>
                                            <td>{{ $ini->name }}</td>
                                            <td>{{ $ini->city }}</td>
                                            <td>
                                                <form action="{{ route('admin.sector.delete',$ini->id) }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"> Delete</i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Resort</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <form action="{{ route('admin.sector.add') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama Resort</label>
                            <input type="text" name="city" class="form-control" placeholder="Nama Resort" required>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                    </div>
                </form>



            </div>
        </div>
    </div>
@stop