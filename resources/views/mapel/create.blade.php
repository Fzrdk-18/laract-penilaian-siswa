@extends('main.layout')
@section('content')
    <center>
        <br>
        <h2>TAMBAH DATA MAPEL</h2>
        <form method="POST" action="/mapel/store">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">MATA PELAJARAN</td>
                    <td class="bar"><input type="text" name="nama_mapel"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center><button class="button-primary" type="submit">SIMPAN</button></center>
                    </td>
                </tr>
            </table>
    </center>
@endsection