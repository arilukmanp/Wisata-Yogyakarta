@extends('layouts.master')


@if(Request::segment(1) == 'bantul')
    @section('title', 'Edit Destinasi Wisata Kab. Bantul')
@endif

@if(Request::segment(1) == 'gunungkidul')
    @section('title', 'Edit Destinasi Wisata Kab. Gunungkidul')
@endif

@if(Request::segment(1) == 'kulonprogo')
    @section('title', 'Edit Destinasi Wisata Kab. Kulonprogo')
@endif

@if(Request::segment(1) == 'sleman')
    @section('title', 'Edit Destinasi Wisata Kab. Sleman')
@endif

@if(Request::segment(1) == 'yogyakarta')
    @section('title', 'Edit Destinasi Wisata Kota Yogyakarta')
@endif


@section('content')
<div class="block-content">
	<div class="row">
		<div class="col-md-12">
			<div class="block-header bttl">
				@if(Request::segment(1) == 'bantul')
					<h3>Edit Data Destinasi Wisata Kab. Bantul</h3>
				@endif
				
				@if(Request::segment(1) == 'gunungkidul')
					<h3>Edit Data Destinasi Wisata Kab. Gunungkidul</h3>
				@endif
				
				@if(Request::segment(1) == 'kulonprogo')
					<h3>Edit Data Destinasi Wisata Kab. Kulonprogo</h3>
				@endif
				
				@if(Request::segment(1) == 'sleman')
					<h3>Edit Data Destinasi Wisata Kab. Sleman</h3>
				@endif
				
				@if(Request::segment(1) == 'yogyakarta')
					<h3>Edit Data Destinasi Wisata Kota Yogyakarta</h3>
				@endif
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<form class="form-horizontal edt" action="/{{Request::segment(1)}}/{{$destination->id}}" method="POST" enctype="multipart/form-data">
			
				@if(count($errors) > 0)
					@foreach ($errors->all() as $error)
						<div class="col-md-12">
							<div class="alert alert-warning">
								{{ $error }}
								<a class="close" data-dismiss="alert" href="" aria-hidden="true">&times;</a>
							</div>
						</div>
					@endforeach
				@endif

				<div class="col-md-6">
					<div class="form-group">
						<label for="name">Nama Tempat</label>
						<input type="text" class="form-control" id="name" name="name" value="{{ $destination->name }}" required autocomplete="off">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="category">Kategori</label>
						<select class="form-control" id="category" name="category">
							<option>-- Pilih Kategori --</option>
							@foreach ($categories as $category)
								<option value="{{$category->id}}">{{$category->name}}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label for="popularity">Popularitas Tempat</label>
						<input type="number" class="form-control" id="popularity" name="popularity" value="{{ $destination->popularity }}" required autocomplete="off">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label for="cost">Harga Tiket</label>
						<input type="number" class="form-control" id="cost" name="cost" value="{{ $destination->cost }}" required autocomplete="off">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label for="business_hours">Jam Buka</label>
						<input type="text" class="form-control" id="business_hours" name="business_hours" value="{{ $destination->business_hours }}" required autocomplete="off">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label for="visitor">Rata-Rata Pengunjung Perhari</label>
						<input type="number" class="form-control" id="visitor" name="visitor" value="{{ $destination->visitor }}" required autocomplete="off">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label for="facilities">Fasilitas</label>
						<input type="number" class="form-control" id="facilities" name="facilities" value="{{ $destination->facilities }}" required autocomplete="off">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label for="cleanliness">Kebersihan</label>
						<input type="number" class="form-control" id="cleanliness" name="cleanliness" value="{{ $destination->cleanliness }}" required autocomplete="off">
					</div>
				</div>
				<div class="col-md-4">
						<div class="form-group" style="border-bottom: none">
						<label for="accessibility">Kemudahan Akses Tempat</label>
						<input type="number" class="form-control" id="accessibility" name="accessibility" value="{{ $destination->accessibility }}" required autocomplete="off">
					</div>
				</div>
				<div class="col-md-8">
					<div class="form-group" style="border-bottom: none">
						<label for="address">Alamat</label>
						<textarea class="form-control" id="address" name="address" rows="1" required>{{ $destination->address }}</textarea>
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group"></div>
				</div>
				<div class="col-md-12">
					<div class="form-btn">
						<a href="{{URL::previous()}}" class="btn btn-danger"><i class="fa fa-times"></i> &nbsp; Batal</a>
						<button type="submit" class="btn btn-info pull-right" value="upload" name="submit"><i class="fa fa-check"></i> &nbsp; Simpan</button>
						@csrf
						<input type="hidden" name="_method" value="PUT">
					</div>
                </div>
			</form>
		</div>
	</div>
</div>
@endsection