@extends('master')

@section('content')

<div class="card card-warning">
    <div class="card-header">
        <h3 class="card-title">Jawaban</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form role="form" action="/jawaban" method="POST">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <!-- textarea -->
                    <div class="form-group">
                        <label for="isi">Isi Jawaban</label>
                        <textarea class="form-control" rows="3" id="isi" name="isi" placeholder="masukkan jawaban.."></textarea>
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
