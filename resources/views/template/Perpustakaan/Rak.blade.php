@extends('template.master')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Input Data Rak</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/book/store" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Rak </label>
                    <input type="Text" class="form-control" name="Nama_Rak" placeholder="Input Nama rak">
                    <label for="exampleInputEmail1"> Lokasi Rak </label>
                    <input type="Text" class="form-control" name="Lokasi_Rak" placeholder="Input Lokasi rak">

 </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="submit" class="btn btn-primary">Reset</button>
                </div>
              </form>
            </div>
</div>
@endsection