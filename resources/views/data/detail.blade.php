@extends('layouts.dashboard')
@section('content')
    <div class="data-table-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 box-margin">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title mb-1">Data {{ $category->name }} pada {{ $sector->name }}</h6>
                            {{--<p class="card-description mb-30">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p>--}}
                            @if(auth()->user()->id_sector == $sector->id)
                            <div class="flot-right" style="margin-bottom: 10px;">
                                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Add Data</button>
                            </div>
                            @endif
                            <div class="table-responsive">
                                <table id="dataTableExample" class="table">
                                    <thead>
                                    <tr>
                                        <th>No Regis</th>
                                        <th>Tanggal</th>
                                        <th>Keterangan</th>
                                        <th>Foto</th>
                                        <th>Status</th>
                                        @if(auth()->user()->id_sector == $sector->id)
                                        <th>Action</th>
                                        @endif
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $ini)
                                        <tr>
                                            <td>{{ $ini->no_regist }}</td>
                                            <td>{{ $ini->created_at->format('d F Y') }}</td>
                                            <td>{{ $ini->notes }}</td>
                                            <td><img src="/storage/img/{{ $ini->image }}"></td>
                                            <td><span class="badge badge-warning">Menunggu</span></td>
                                            @if(auth()->user()->id_sector == $sector->id)
                                            <td>
                                                <button class="btn btn-sm btn-success"><i class="fa fa-check"></i></button>
                                                <button class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button>
                                            </td>
                                            @endif
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
@stop
