@extends('layouts.dashboard')
@section('content')
    <div class="data-table-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 box-margin">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title mb-1">Data Pengguna</h6>
                            <div class="flot-right" style="margin-bottom: 10px;">
                                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Add Data User</button>
                            </div>
                            <div class="table-responsive">
                                <table id="dataTableExample" class="table">
                                    <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Resort</th>
                                        <th>Username</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $ini)
                                        <tr>
                                            <td>{{$ini -> name}}</td>
                                            <td>{{$ini -> resort}}</td>
                                            <td>{{$ini -> username}}</td>
                                            <td><button class="btn btn-sm btn-success" type="button"><i class="fa fa-edit"></i> Change Password</button></td>
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
                    <h4 class="modal-title">Add kategory</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <form action="{{ route('admin.user.add') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="name" class="form-control" placeholder="Nama" required>
                        </div>
                        <div class="form-group">
                            <label>Resort</label>
                            <select class="form-control" name="id_sector" required>
                                @foreach($sector as $sec)
                                    <option value="{{ $sec->id }}">{{ $sec->city }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
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