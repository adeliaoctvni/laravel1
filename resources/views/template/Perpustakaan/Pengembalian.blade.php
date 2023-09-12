@extends('template.master')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Input Data Pengembalian</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/book/store" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Pengembalian </label>
                    <input type="Date" class="form-control" name="Tanggal_Pengembalian" placeholder="Input Tanggal Pengembalian">
                    <label for="exampleInputEmail1"> Denda </label>
                    <input type="Integer" class="form-control" name="Denda" placeholder="Input Denda">

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