@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>List Nilai</h2>
            @if (session('user')->role == 'guru')
                <a href="/nilai/create" class="button-primary">Tambah Data</a>
            @endif

            @if (session('success'))
                <p class="text-success">{{ session('success') }}</p>
            @endif
            <table cellpadding="10">
                    <td>NO</td>
                    <td>GURU MAPEL</td>
                    <td>NAMA SISWA</td>
                    <td>UTS</td>
                    <td>UH</td>
                    <td>UAS</td>
                    <td>NA</td>
                    @if (session('user')->role == 'guru')
                        <td>ACTION</td>
                    @endif
                </tr>
                @foreach ($nilai as $each)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $each->mengajar->guru->nama_guru }}</td>
                        <td>{{ $each->siswa->nama_siswa }}</td>
                        <td>{{ $each->uh }}</td>
                        <td>{{ $each->uts }}</td>
                        <td>{{ $each->uas }}</td>
                        <td>{{ $each->na }}</td>
                        @if (session('user')->role == 'guru')
                            <td>
                                <a href="/nilai/edit/{{ $each->id }}" class="button-warning">EDIT</a>
                                <a href="/nilai/destroy/{{ $each->id }}" onclick="return confirm('Yakin Hapus?')"
                                    class="button-danger">HAPUS</a>
                            </td>
                            @endif
                    </tr>
                    @endforeach
            </table>
        </b>
    </center>
@endsection
