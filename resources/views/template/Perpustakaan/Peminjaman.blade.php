@extends('template.master')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Input Data Peminjaman</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/book/store" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Peminjaman</label>
                    <input type="Date" class="form-control" name="Tanggal_Peminjaman" placeholder="Input Tanggal Peminjaman">
                    <label for="exampleInputEmail1">Tanggal Kembali </label>
                    <input type="Date" class="form-control" name="Tanggal_Kembali" placeholder="Input Tanggal Kembali">

 </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" value="Save" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
</div>
@endsection