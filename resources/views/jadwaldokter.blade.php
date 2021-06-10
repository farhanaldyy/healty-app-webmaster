@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Table Jadwal Dokter</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Jadwal Dokter</li>
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
                <h3 class="card-title">Table Jadwal Dokter</h3>
                <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Add item</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>ID Dokter</th>
                      <th>ID Poli</th>
                      <th>Hari</th>
                      <th>Jam Mulai</th>
                      <th>Jam Selesai</th>
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   <!-- loop data user -->
                   @foreach($listJadwalDokter as $data)
                        <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->id_dokter}}</td>
                        <td>{{$data->id_poli}}</td>
                        <td>{{$data->hari}}</td>
                        <td>{{$data->jam_mulai}}</td>
                        <td>{{$data->jam_selesai}}</td>
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
                <h5 class="modal-title" id="exampleModalLabel">Add Jadwal Dokter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form method="POST" action="{{route('jadwaldokter.store')}}" role="form" enctype="multipart/form-data">
              @csrf
                <div class="modal-body">
                  <div class="form-group">
                    <label>ID Dokter</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter ID Dokter" name="id_dokter">
                  </div>
                  <div class="form-group">
                    <label>ID Poli</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="ID Poli" name="id_poli">
                  </div>
                  <div class="form-group">
                    <label>Hari</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Day" name="hari">
                  </div>
                  <div class="form-group">
                    <label>Jam Mulai</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Start" name="jam_mulai">
                  </div>
                  <div class="form-group">
                    <label>Jam Selesai</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="End" name="jam_selesai">
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
