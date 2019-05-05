@extends('layouts.master')


@if(Request::segment(1) == 'bantul')
    @section('title', 'Destinasi Bantul')
@endif

@if(Request::segment(1) == 'gunungkidul')
    @section('title', 'Destinasi Gunungkidul')
@endif

@if(Request::segment(1) == 'kulonprogo')
    @section('title', 'Destinasi Kulonprogo')
@endif

@if(Request::segment(1) == 'sleman')
    @section('title', 'Destinasi Sleman')
@endif

@if(Request::segment(1) == 'yogyakarta')
    @section('title', 'Destinasi Yogyakarta')
@endif


@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/datatables.min.css') }}">
@endsection


@section('content')
    <div class="block-content">
        <div class="row">
            <div class="col-md-12">
                <div class="block-header bttl">
                    @if(Request::segment(1) == 'bantul')
                        <h3>Destinasi Wisata Kab. Bantul</h3>
                        <a href="/bantul/create" class="btn btn_green btn-md pull-right"><i class="fas fa-plus btn-xs"></i> Tambah Data</a>
                    @endif

                    @if(Request::segment(1) == 'gunungkidul')
                        <h3>Destinasi Wisata Kab. Gunungkidul</h3>
                        <a href="/gunungkidul/create" class="btn btn_green btn-md pull-right"><i class="fas fa-plus btn-xs"></i> Tambah Data</a>
                    @endif

                    @if(Request::segment(1) == 'kulonprogo')
                        <h3>Destinasi Wisata Kab. Kulonprogo</h3>
                        <a href="/kulonprogo/create" class="btn btn_green btn-md pull-right"><i class="fas fa-plus btn-xs"></i> Tambah Data</a>
                    @endif

                    @if(Request::segment(1) == 'sleman')
                        <h3>Destinasi Wisata Kab. Sleman</h3>
                        <a href="/sleman/create" class="btn btn_green btn-md pull-right"><i class="fas fa-plus btn-xs"></i> Tambah Data</a>
                    @endif

                    @if(Request::segment(1) == 'yogyakarta')
                        <h3>Destinasi Wisata Kota Yogyakarta</h3>
                        <a href="/yogyakarta/create" class="btn btn_green btn-md pull-right"><i class="fas fa-plus btn-xs"></i> Tambah Data</a>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <table class="table table-striped" id="mydata">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Destinasi</th>
                                <th>Kategori</th>
                                <th>Terakhir Diperbarui</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1
                            @endphp
                            @foreach ($destinations as $destination)
                            <tr>
                                <td><?= $i; ?></td>
                                <td><a class="a-user" href="/{{Request::segment(1)}}/{{$destination->id}}">{{ $destination->name }}</a></td>
                                <td>{{ $destination->category->name }}</td>
                                <td>{{ Carbon\Carbon::parse($destination->updated_at)->diffForHumans() }}</td>
                                <td>
                                    <form action="{{URL::current().'/'.$destination->id}}" method="POST">
                                        <button type="submit" class="btn btn_red btn-xs" name="submit" value="delete" data-toggle="tooltip" title="Delete" onClick="return dodelete();"><i class="fas fa-trash"></i> &nbsp; Hapus</button>
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE">
                                    </form>
                                </td>
                            </tr>
                            @php
                                $i++
                            @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/datatables.min.js') }}"></script>
    
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>

    <script>
		function dodelete()
		{
			job = confirm("Data Akan Dihapus Secara Permanen. Apakah Anda Yakin?");
			if(job != true)
			{
				return false;
			}
		}
    </script>
@endsection