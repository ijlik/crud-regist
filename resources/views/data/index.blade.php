@extends('layouts.dashboard')
@section('content')
    <div class="data-table-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 box-margin">
                    <h6>Data {{ $name }}</h6>
                    <p>Silahkan pilih Resort</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            @if(auth()->user()->role == \App\User::ROLE_POLRES)
            <div class="col-sm-6 col-xl-3 box-margin" onclick="document.location.href='/data/{{ $id }}/{{ auth()->user()->id_sector }}';">
                <div class="bg-success mb-30 p-3">
                    <h2 class="mb-0 text-white">No. Regist</h2>
                    <h6 class="text-white mb-0">{{ \App\Sector::find(auth()->user()->id_sector)->city }}</h6>
                </div>
            </div>
            @endif
            @foreach($sector as $ini)
                <div class="col-sm-6 col-xl-3 box-margin" onclick="document.location.href='/data/{{ $id }}/{{ $ini->id }}';">
                    <div class="primary-color mb-30 p-3">
                        <h2 class="mb-0 text-white">No. Regist</h2>
                        <h6 class="text-white mb-0">{{ $ini->city }}</h6>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@stop