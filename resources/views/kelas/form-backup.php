@extends('templates/header')

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Tambah Data Kelas
        <small>SMK Negeri 4 Bandung</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Data Kelas</li>
        <li class="active"> Tambah Data Kelas</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      @include('templates/feedback')
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <a href="{{url('/')}} " class="btn bg-purple"><li class="fa fa-chevron"></li> Kembali</a>
        </div>

        <div class="box-body">
          <form action="{{url('kelas/add')}}" class="form-horizontal" method="POST">
            {{csrf_field()}}
               <div class="form-group">
              <label class="control-label col-sm-2"> Nama Kelas</label>
              <div class="col-sm-10">
                <input type="text" name="nama_kelas" class="form-control" placeholder="Masukan nama Kelas" />
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2"> Jurusan</label>
              <div class="col-sm-10">
                <input type="text" name="jurusan" class="form-control" placeholder="Masukan Jurusan" />
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-10 col-sm-offset-2">
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"> Simpan</i></button>
              </div>
            </div>
          </form>
        </div>
        <!-- /.box-body -->
       
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
    @endsection