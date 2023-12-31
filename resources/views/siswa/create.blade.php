@extends('layout.master')
<!-- START FORM -->
@section('content')

<div class="container-fluid">

    <form action='{{ url('siswa') }}' method='post' class="pt-3">
    @csrf
           <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href='{{ url('siswa') }}' class="btn btn-secondary"> Kembali</a>
               <div class="mb-3 row">
                   <label for="nis" class="col-sm-2 col-form-label">NIM</label>
                   <div class="col-sm-10">
                       <input type="number" class="form-control" name='nis' value="{{ Session::get('nis') }}"id="nis">
                   </div>
               </div>
               <div class="mb-3 row">
                   <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                   <div class="col-sm-10">
                       <input type="text" class="form-control" name='nama' value="{{ Session::get('nama') }}"id="nama">
                   </div>
               </div>
               <div class="mb-3 row">
                   <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                   <div class="col-sm-10">
                       <input type="text" class="form-control" name='jurusan' value="{{ Session::get('jurusan') }}"id="jurusan">
                   </div>
               </div>
               <div class="mb-3 row">
                   <label for="jurusan" class="col-sm-2 col-form-label"></label>
                   <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
               </div>
           </div>
    </form>
</div>
<!-- AKHIR FORM -->
@endsection