@extends('master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">List Pertanyaan</h1>
        </div>
        <div class="card-header">
            <a href="/pertanyaan/create" class="btn btn-primary">Create New</a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Isi Pertanyaan</th>
                        <th>Tanggal Dibuat</th>
                        <th>Tanggal Diedit</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pertanyaan as $key => $pertanyaan1)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$pertanyaan1->judul}}</td>
                        <td>{{$pertanyaan1->isi}}</td>
                        <td>{{$pertanyaan1->created_at}}</td>
                        <td>{{$pertanyaan1->updated_at}}</td>
                        <td>
                            <a href="/jawaban/create" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i></a>
                        <a href="/jawaban" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </>
    </div>
@endsection
