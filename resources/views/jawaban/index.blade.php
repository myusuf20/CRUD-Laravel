@extends('master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">List Jawaban</h1>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Isi Pertanyaan</th>
                        <th>Tanggal Dibuat</th>
                        <th>Tanggal Diedit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($jawaban as $key => $jawaban1)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$jawaban1->isi}}</td>
                        <td>{{$jawaban1->created_at}}</td>
                        <td>{{$jawaban1->updated_at}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
