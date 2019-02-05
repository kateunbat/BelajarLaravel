@extends('templates/header')

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Siswa
        <small>SMK Negeri 4 Bandung</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('siswa')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Siswa</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      @include('templates/feedback')
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <a href="{{url('siswa/add')}} " class="btn btn-success"><li class="fa fa-plus-circle"></li> Tambah</a>
        </div>

        <div class="box-body">
          <table class="table table-stripped">
            <thead>
              <tr>
                <th>No</th>  
                <th>Nama Lengkap</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>No telp</th>
                <th>Kelas</th>
                <th>action</th>
              </tr>
            </thead>

            <tbody>
              @foreach ($datas as $data)
              <tr>
                <td>{{!empty($i) ? ++$i : $i=1 }}</td>
                <td>{{$data->nama_lengkap }}</td>
                <td>{{$data->jenis_kelamin_display}}</td>
                <td>{{$data->alamat}}</td>
                <td>{{$data->no_telp}}</td>
                <td>{{$data->kelas->nama_kelas}}</td>
                <td>
                  <a href="siswa/{{$data->nis}}/edit" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
                  <form action="siswa/{{$data->nis}}/delete" method="get" style="display: inline;">
                    {{ csrf_field()}}
                    {{method_field('delete')}}
                    <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
           </table>
        </div>
        <!-- /.box-body -->
       
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
    @endsection