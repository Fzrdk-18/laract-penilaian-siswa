@extends('main.layout')
@section('content')
    <center>
        <br>
        <h2>EDIT DATA JURUSAN</h2>
        <form method="POST" action="/mapel/update/{{ $mapel->id }}">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">MATA PELAJARAN</td>
                    <td class="bar"><input type="text" name="nama_mapel" value="{{ $mapel->nama_mapel }}"></td>
                </tr>
                <tr>
                    <td colspan="2">                                
                        <center><button class="button-primary" type="submit">UBAH</button></center>
                    </td>
                </tr>
            </table>
    </center>
@endsection