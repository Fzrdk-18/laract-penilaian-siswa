@extends('main.layout')
@section('content')
    <center>
        <br>
        <h2>TAMBAH DATA SISWA</h2>
        <form method="post" action="/siswa/store">
            @csrf
            <table width="50%">
                <tr>
                    <td width="25%">Nis</td>
                    <td width="25%">
                        <input type="text" name="nis">
                    </td>
                </tr>
                <tr>
                    <td width="25%">Nama Siswa </td>
                    <td width="25%">
                        <input type="text" name="nama_siswa"></td>
                    </td>
                </tr>

                <td width="25%">Jenis Kelamin</td>
                <td width="25%">
                    <input type="radio" name="jk" value="L">Laki Laki
                    <input type="radio" name="jk" value="P">Perempuan
                </td>
                </tr>
                <tr>
                    <td width="25%">Alamat</td>
                    <td width="25%">
                        <textarea name="alamat" cols="30" rows="5"></textarea>
                    </td>
                </tr>
                <tr>
                    <td width="25%">Kelas</td>
                    <td width="25%">
                        <select name="kelas_id">
                            <option></option>
                            @foreach ($kelas as $k)
                                <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
                            @endforeach
                <td>
                <tr>
                    <td width="25%">Password</td>
                    <td width="25%"><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center><button class="button-primary" type="submit">SIMPAN </button></center>
                    </td>
                </tr>
            </table>
        </form>
    </center>
@endsection
