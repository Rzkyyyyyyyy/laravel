<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class siswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = siswa::orderBy('nis','desc')->paginate(10);
        return view('siswa.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('kelas',$request->kelas);
        Session::flash('nama',$request->nama);
        Session::flash('jurusan',$request->jurusan);
            $request->validate([
                'kelas'=>'required',
                'nama'=>'required',
                'jurusan'=>'required',
            ],[
                'kelas.required'=>'kelas wajib diisi',
                'nama.required'=>'Nama wajib diisi',
                'jurusan.required'=>'jurusan wajib diisi',
            ]);
            $data =[ 
            'kelas'=>$request->kelas,
            'nama'=>$request->nama,
            'jurusan'=>$request->jurusan,
        ];
        siswa::create($data);
        return redirect()->to('siswa')->with('success','berhasil menambahkan data');
            
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = siswa::where('nis',$id)->first();
        return view('siswa.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama'=>'required',
            'jurusan'=>'required',
        ],[
            'nama.required'=>'Nama wajib diisi',
            'jurusan.required'=>'jurusan wajib diisi',
        ]);
        $data =[ 
        // 'nis'=>$request->nis,
            'nama'=>$request->nama,
            'jurusan'=>$request->jurusan,
        ];
        siswa::where('nis', $id)->update($data);
        return to_route('siswa.index')->with('success','berhasil melakukan update data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
