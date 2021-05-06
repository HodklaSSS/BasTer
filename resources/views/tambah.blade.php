@extends('adminlte::page')

@section('title', 'Pengelolaan Anime')

@section('content_header')
    <h1 class="m-0 text-dark">Pengelolaan Anime</h1>
@stop

@section('content')
<form method="POST" action="{{ route('insert') }}" enctype="multipart/form-data">
    @method('POST')
    @csrf
        <div class="form-group">
            <label for="inputJudul">Judul</label>
            <input type="text" class="form-control" id="inputJudul" name="judul">
        </div>
        <div class="form-group">
            <label for="inputStudio">Studio</label>
            <input type="text" class="form-control" id="inputstudio" name="studio">
        </div>
        <div class="form-group">
            <label for="inputTahun">Tahun</label>
            <input type="date" class="form-control" id="inputTahun" name="tahun">
        </div>
    <div class="modal-footer">
        <a href="{{route('home')}}" class="btn btn-primary">Kembali</a>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </div>
</form>
@stop