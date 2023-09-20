@extends('layout.master')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-3 text-gray-800">Table siswa</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Siswa</h6>
            <a href="{{ route('siswa.create') }}" class="btn btn-primary">Tambah Siswa</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kelas</th>
                            <th>Nama</th>
                            <th>Absen</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = $data->firstItem(); ?>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $item->nis }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->jurusan }}</td>
                                <td>
                                    <a href='{{ url('siswa/' . $item->nis . '/edit') }}' class="btn btn-warning btn-sm">Edit</a>
                                    <a href='' class="btn btn-danger btn-sm">Del</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection