@extends('templates/header')

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Edit Data Siswa
        <small>SMK Negeri 4 Bandung</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('siswa')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Data Kelas</li>
        <li class="active">Edit Data Siswa</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      @include('templates/feedback')
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <a href="{{url('siswa')}} " class="btn bg-purple"><li class="fa fa-chevron-left"></li> Kembali</a>
        </div>

        <div class="box-body">
         <form action="/siswa/{{$data->nis}}/edit" class="form-horizontal" method="POST">
           @csrf
          
           {{ method_field('post')}}
          
      
           <div class="form-group">
             <label class="control-label col-sm-2">Nama Lengkap</label>
             <div class="col-sm-10">
               <input type="text" name="nama_lengkap" class="form-control" placeholder="Masukan Nama Lengkap" value="{{@$data->nama_lengkap}}" />
             </div>
           </div>

           <div class="form-group">
             <label class="control-label col-sm-2">Jenis Kelamin</label>
             <div class="col-sm-10">
               <div class="checkbox">
                 <label><input type="radio" name="jenis_kelamin" value="L" {{ (@$data->jenis_kelamin == 'L' ? 'checked' : '') }} />L</label>
                 <label><input type="radio" name="jenis_kelamin" value="P" {{ (@$data->jenis_kelamin == 'P' ? 'checked' : '') }} />P</label>
               </div>
             </div>
           </div>

           <div class="form-group">
             <label class="control-label col-sm-2">alamat</label>
             <div class="col-sm-10">
               <input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat" value="{{@$data->alamat}}" />
             </div>
           </div>

             <div class="form-group">
             <label class="control-label col-sm-2">No Telp</label>
             <div class="col-sm-10">
               <input type="text" name="no_telp" class="form-control" placeholder="Masukan Nomor Telp" value="{{@$data->no_telp}}" />
             </div>
           </div>

           <div class="form-group">
             <label class="control-label col-sm-2">Kelas</label>
             <div class="col-sm-10">
               <select name="id_kelas" class="form-control">
                 @foreach (\App\Kelas::all() as $kelas)
                 <option value="{{$kelas->id_kelas}}" {{@$result->id_kelas == $kelas->id_kelas ? 'selected' : '' }}> {{ $kelas->nama_kelas }} </option>
                 @endforeach
               </select>
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