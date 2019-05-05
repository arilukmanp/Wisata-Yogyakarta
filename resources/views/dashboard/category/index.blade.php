@extends('layouts.master')

@section('title', 'Kategori Destinasi Wisata')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/datatables.min.css') }}">
@endsection


@section('content')
    <div class="block-content">
        <div class="row">
            <div class="col-md-12">
                <div class="block-header bttl">
                    <h3>Kategori Destinasi Wisata</h3>
                    <a href="/reference/category/create" class="btn btn_green btn-md pull-right"><i class="fas fa-plus btn-xs"></i> Tambah Data</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                @if(session('success'))
                    <div class="col-md-12">
                        <div class="alert alert-success">
                            {{ session('success') }}
                            <a class="close" data-dismiss="alert" href="" aria-hidden="true">&times;</a>
                        </div>
                    </div>
                @endif
                <div class="panel">
                    <table class="table table-striped" id="mydata">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Kategori</th>
                                <th>Ditambahkan Pada</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1
                            @endphp
                            @foreach ($categories as $category)
                            <tr>
                                <td><?= $i; ?></td>
                                <td>{{ $category->name }}</td>
                                <td>{{ Carbon\Carbon::parse($category->created_at)->formatLocalized('%A, %d %B %Y %H:%I:%S') . ", Pukul " . Carbon\Carbon::parse($category->created_at)->format('H:i')}}</td>
                                <td class="text-center">
                                    <a href="/{{Request::path()}}/{{$category->id}}/edit" class="btn btn_yellow btn-xs" data-toggle="tooltip" title="Edit"><i class="fas fa-pen"></i> &nbsp; Edit</a>
                                    <form action="{{URL::current().'/'.$category->id}}" method="POST">
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