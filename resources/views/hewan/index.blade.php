@extends('layouts.app')

@section('content')
<table border="1" cellspacing="0" cellpadding="5">
    <thead>
        <tr>
            <th>#</th>
            <th>Hewan</th>
            <th>Jenis Hewan</th>
            <th>Umur</th>
            <th>Keadaan</th>
            <th><a href=" {{ route('hewan.create') }} "> Tambah Data </a></th>
</tr>
</thead>
<tbody>
    @foreach($hewan as $data)
    <tr>
        <td>{{ $loop->index+1 }}</td>
        <td>{{ $data->hewan }}</td>
        <td>{{ $data->jenis_hewan }}</td>
        <td>{{ $data->umur}} Tahun</td>
        <td>{{ $data->keadaan }}</td>
        <td>
            <a href="#">Edit</a>
            <button type="submit' onclick="return confirm('Hapus Hewan Ini?')">Hapus</button>
        </td>
    </tr>
    @endforeach
   </tbody>
</table>
@endsection 