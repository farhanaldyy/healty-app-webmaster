@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Table Dokter</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dokter</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <!-- table poli -->
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">Table Data Dokter</h3>
                <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Add item</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Nama Dokter</th>
                      <th>Spesialis</th>
                      <th>ID Poli</th>
                      <th>Image</th>
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   <!-- loop data user -->
                   @foreach($listDokter as $data)
                        <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->spesialis}}</td>
                        <td>{{$data->id_poli}}</td>
                        <td>{{$data->image}}</td>
                        <td>
                            <a href="#"> 
                                <i class="fa fa-edit blue"></i> 
                            </a>
                            /
                            <a href="#"> 
                                <i class="fa fa-trash text-danger"></i> 
                            </a>
                        </td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Dokter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form method="POST" action="{{route('dokter.store')}}" role="form" enctype="multipart/form-data">
              @csrf
                <div class="modal-body">
                  <div class="form-group">
                    <label>Nama Dokter</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Nama Dokter" name="name">
                  </div>
                  <div class="form-group">
                    <label>Spesialis</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Spesialis Dokter" name="spesialis">
                  </div>
                  <div class="form-group">
                    <label>Id Poli</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Id Poli" name="id_poli">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File Gambar</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add Data</button>
              </div>
              </form>
            </div>
          </div>
        </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
