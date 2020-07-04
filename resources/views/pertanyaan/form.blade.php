@extends('master')

@section('content')

<div class="card card-warning">
    <div class="card-header">
        <h3 class="card-title">Pertanyaan</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form role="form" action="/pertanyaan" method="POST">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="masukkan judul..">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <!-- textarea -->
                    <div class="form-group">
                        <label for="isi">Isi Pertanyaan</label>
                        <textarea class="form-control" rows="3" id="isi" name="isi" placeholder="masukkan pertanyaan.."></textarea>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
    <!-- /.card-body -->
</div>

@endsection
