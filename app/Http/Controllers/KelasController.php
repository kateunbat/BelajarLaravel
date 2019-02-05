<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
    	$data['datas'] = \App\Kelas::all();
    	return view('kelas/index')->with($data);
    }

    public function create()
    {
    	return view('kelas/form');
    }

    public function store (Request $request)
    {
    	$rules = [
    		'nama_kelas' =>'required|max:100',
    		'jurusan'=>'required|max:100'
    	];
    	$this->validate($request, $rules);

    	$input = $request->all();
    	$status = \App\Kelas::create($input);

    	if ($status) return redirect('/')->with('success', 'Data berhasil ditambahkan Bro!');
    	else return('/')->with('error', 'Data Gagal Ditambahkan Bro!');
    	
    }

    public function edit($id)
    {
    	$data = \App\Kelas::find($id);
        return view('kelas/edit', ['data' => $data]);
    }

    public function update(Request $request, $id)
    {
$data = \App\Kelas::find($id);
        $data ->update($request->all());
        
        if ($data) return redirect('/')->with('success', 'Data Berhasil Diubah Bro!');
        else return redirect('/')->with('error', 'Data gagal diubah Bro!');

    }
    

    public function delete(Request $request, $id)
    {
        $data = \App\kelas::find($id);
        $data ->delete();

         if ($data) return redirect('/')->with('success', 'Data Berhasil Dihapus Bro!');
        else return redirect('/')->with('error', 'Data gagal dihapus Bro!');

    }
}
