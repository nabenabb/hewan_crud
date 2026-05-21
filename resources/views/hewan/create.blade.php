@extends('layouts.app')

@section('content')
<form action="{{ route('hewan.store') }}" method="POST">
    @csrf
    <label for="name">Hewan:</label>
    <input type="text" name="hewan" required><br><br>

    <label for="type">Jenis Hewan:</label>
    <select name="jenis_hewan">
        <option disabled selected>-- Pilih Salah Satu --</option>
        <option value="Mamalia">Mamalia</option>
        <option value="Burung">Burung</option>
        <option value="Reptil">Reptil</option>
        <option value="Amfibi">Amfibi</option>
        <option value="Ikan">Ikan</option>
        <option value="Serangga">Serangga</option>
    </select><br><br>

    <label for="age">Umur:</label>
    <input type="number" name="umur"><br><br>

    <label for="condition">Keadaan:</label>
    <input type="text" name="keadaan"><br><br>

    <button type="submit">Simpan</button>
    <a href="{{ route('hewan.index') }}">Batal</a>
</form>
@endsection
