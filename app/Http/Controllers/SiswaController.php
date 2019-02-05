<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Storage;
use File;


class SiswaController extends Controller
{
    public function index()
    {
    	$data['datas'] = \App\Siswa::all();
    	return view('siswa/index')->with($data);
    }

    public function create()
    {
    	return view('siswa/form');


    }

    public function store (Request $request)
    {
    	$rules = [
    		'nis' => 'required|integer',
    		'nama_lengkap' => 'required|max:100',
    		'jenis_kelamin' => 'required',
    		'alamat' => 'required',
    		'no_telp' => 'required',
    		'id_kelas' => 'required',
   
            
    	];
     

    	$this->validate($request, $rules);

    	$input = $request->all();
    
    	$status = \App\Siswa::create($input);

    	if ($status) return redirect('siswa')->with('success', 'Data berhasil ditambahkan Bro!');
    	else return('siswa')->with('error', 'Data Gagal Ditambahkan Bro!');
    }

     public function edit($id)
    {
    	$data = \App\Siswa::find($id);
        return view('siswa/edit', ['data' => $data]);
    }

    public function update(Request $request, $id)
    {
    	$rules = [

    		'nama_lengkap' => 'required|max:100',
    		'jenis_kelamin' => 'required',
    		'alamat' => 'required',
    		'no_telp' => 'required',
    		'id_kelas' => 'required',
           
    	];




    	$data = \App\Siswa::find($id);
        $data->update($request->all());
     
        
        
        
        if ($data) return redirect('siswa')->with('success', 'Data Berhasil Diubah Bro!');
        else return redirect('siswa')->with('error', 'Data gagal diubah Bro!');

    }

     public function delete(Request $request, $id)
    {
        $data = \App\Siswa::find($id);
        $data ->delete();

         if ($data) return redirect('siswa')->with('success', 'Data Berhasil Dihapus Bro!');
        else return redirect('siswa')->with('error', 'Data gagal dihapus Bro!');

    }
}
