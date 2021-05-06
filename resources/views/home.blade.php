@extends('adminlte::page')

@section('title', 'Pengelolaan Buku')

@section('content_header')
    <h1 class="m-0 text-dark">Pengelolaan Buku</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                    <hr />
                    {{-- Table --}}
                    <table id="table-data" class="table table-borderer">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>JUDUL</th>
                                <th>STUDIO</th>
                                <th>TAHUN</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                
                                    
                                
                                @foreach ($datas as $key => $data )
                                    
                                @if ($data->verif == 0)
                                <td>{{$key + 1}}</td>
                                <td>{{$data->judul}}</td>
                                <td>{{$data->studio}}</td>
                                <td>{{$data->tahun}}</td>
                                <td>
                                    <form action="{{route('home.verif')}}" method="post">
                                        @method('POST');
                                        @csrf
                                    <button type="submit" class="btn btn-primary" data-id="{{ $data->id }}">Kirim</button>
                                </form>
                                <form action="" method="post">
                                        <a href="{{route('delete')}}" id="delete-data" class="btn btn-danger"
                                            data-id="{{ $data->id }}">Hapus</a>
                                        </form>
                                    </div>
                                </td>
                                @endif
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                    {{-- end Table --}}
                </div>
            </div>
        </div>
    </div>

@stop

@section('js')
    <script>
       $(document).on('click', 'verif_data', function() {
                let id = $(this).data('id');

                $('#data-id').val(id);
            });
        });

            $(document).on('click', '#btn-delete-buku', function() {
                let id = $(this).data('id');
                let cover = $(this).data('cover');

                $('#delete-id').val(id);
            });
        });

    </script>
@stop
