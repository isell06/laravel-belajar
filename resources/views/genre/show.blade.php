@extends('layouts.master')

@push('css')

@endpush

@section('content')
            <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Cast</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">General Form</li>
                    </ol>
                </div>
                </div>
            </div><!-- /.container-fluid -->
            </section>
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Show Data Cast</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Enter Nama" value="{{ $genre->nama }}" disabled>
                  </div>
                </div>
                <!-- /.card-body -->
            </div>

@endsection