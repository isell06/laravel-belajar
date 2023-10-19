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
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Enter Nama" value="{{ $casts[0]->nama }}" disabled>
                  </div>
                  <div class="form-group">
                    <label for="umur">Umur</label>
                    <input type="number" name="umur" id="umur" class="form-control" placeholder="Enter Umur" value="{{ $casts[0]->umur }}" disabled>
                  </div>
                  <div class="form-group">
                    <label for="bio">Biografi</label>
                    <textarea name="bio" id="bio" cols="30" rows="10" class="form-control" placeholder="Input Biografi" disabled>{{ $casts[0]->bio }}</textarea>
                  </div>
                </div>
                <!-- /.card-body -->
            </div>

                <div class="card-footer">
                  <a href="{{ route('cast.index') }}" class="btn btn-danger"><i class="fas fa-close"></i>Back</a>
                </div>

@endsection