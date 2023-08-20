@extends('layouts/frontend/base')

@section('content')

<body>
    <link href="{{asset('assets/select2user.css')}}" rel="stylesheet">
    <section class="text-center mb-0" style="padding-bottom:15%;">
        <div class="container text-left">
            <div class="rows" style="padding-top:10%;">
                <div class="col-12">
                    @php
                    if(isset($_GET['tahun'])){
                    $tahunya = $_GET['tahun'];
                        $thn = $tahunya;
                    }else{
                        $thn = date('Y');
                    }
                    @endphp
                    <h2>Peringkat Pengisian Data OPD Tahun {{$thn}}</h2>
                    <div class="card card-primary">
                        <div class="card-header">
                            <div class="card-tools">
                            <form class="form-inline text-right" type="get" action="{{url('perangkingan')}}">
                                <div class="form-group mb-2">
                                    <label for="inputPassword2" class="sr-only">Password</label>
                                    <select name="tahun" class="form-control">
                                    @php
                                    $rangking = DB::table('rangking')->groupby('tahun')->get();
                                    @endphp
                                    @foreach($rangking as $rkg)
                                    <option value="{{$rkg->tahun}}">{{$rkg->tahun}}</option>
                                    @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-success ml-1 mb-2"><i class="fa fa-search"></i></button>
                                <button onclick="window.history.go(-1);" type="button"
                                    class="btn btn-danger ml-1 mb-2"> <i class="fa fa-arrow-left"></i>
                                </button>
                            </form>
                               

                            </div>
                        </div>
                        <div class="card-body">
                            
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th>Nama File</th>
                                            <th>Penanggung Jawab</th>
                                            <th>Total Data</th>
                                            <th>Diselesaikan</th>
                                            <th>Presentase</th>
                                            <th>Last Update</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($datarangking as $rowrangking)
                                        <tr>
                                            <td> <i class="fa fa-file"></i> {{$rowrangking->nama_file}}</td>
                                            <td><i class="fa fa-users"></i> {{$rowrangking->pj}}</td>
                                            <td>{{$rowrangking->total}} Data</td>
                                            <td>{{$rowrangking->diisi}} Data</td>
                                            <td>

                                                {{$rowrangking->presentase}} %
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-primary"
                                                        style="width:{{$rowrangking->presentase}}%"></div>
                                                </div>
                                            </td>
                                            <td> <i class="fa fa-calendar"></i> {{$rowrangking->tanggal}}</td>
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
    </section>

    </div>
</body>
@endsection