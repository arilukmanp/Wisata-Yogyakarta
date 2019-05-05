@extends('layouts.master')

@section('title', $destination->name)

@section('content')
<div class="block-content">
	<div class="row">
		<div class="col-md-12">
			<div class="block-header bttl">
				<h3>Data Destinasi Wisata Kab. Bantul</h3>
				<a href="/{{Request::segment(1)}}/{{$destination->id}}/edit" class="btn btn_yellow btn-md pull-right"><i class="fas fa-pencil-alt btn-xs"></i> Edit Data</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="flex-single">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-12 col-xs-12">
						<label class="col-xs-6 col-md-4">Nama Tempat<span style="float:right;">:</span></label>
						<p class="col-xs-6 col-md-8">{{ $destination->name }}</p>
					</div>
					<div class="col-md-12 col-xs-12">
						<label class="col-xs-6 col-md-4">Kategori<span style="float:right;">:</span></label>
						<p class="col-xs-6 col-md-8">{{ $destination->category->name }}</p>
					</div>
					<div class="col-md-12 col-xs-12">
						<label class="col-xs-6 col-md-4">Popularitas Tempat<span style="float:right;">:</span></label>
						<p class="col-xs-6 col-md-8">{{ $destination->popularity }} &nbsp; <span class="parameter-text">/10</span></p>
					</div>
					<div class="col-md-12 col-xs-12">
						<label class="col-xs-6 col-md-4">Harga Tiket<span style="float:right;">:</span></label>
						<p class="col-xs-6 col-md-8">Rp. {{ $destination->cost }},-</p>
					</div>
					<div class="col-md-12 col-xs-12">
						<label class="col-xs-6 col-md-4">Jam Buka<span style="float:right;">:</span></label>
						<p class="col-xs-6 col-md-8">{{ $destination->business_hours }}</p>
					</div>
					<div class="col-md-12 col-xs-12">
						<label class="col-xs-6 col-md-4">Rata-Rata Pengunjung Perhari<span style="float:right;">:</span></label>
						<p class="col-xs-6 col-md-8">{{ $destination->visitor }} Orang</p>
					</div>
					<div class="col-md-12 col-xs-12">
						<label class="col-xs-6 col-md-4">Fasilitas<span style="float:right;">:</span></label>
						<p class="col-xs-6 col-md-8">{{ $destination->facilities }} &nbsp; <span class="parameter-text">/10</span></p>
					</div>
					<div class="col-md-12 col-xs-12">
						<label class="col-xs-6 col-md-4">Kebersihan<span style="float:right;">:</span></label>
						<p class="col-xs-6 col-md-8">{{ $destination->cleanliness }} &nbsp; <span class="parameter-text">/10</span></p>
					</div>
					<div class="col-md-12 col-xs-12">
						<label class="col-xs-6 col-md-4">Kemudahan Akses Tempat<span style="float:right;">:</span></label>
						<p class="col-xs-6 col-md-8">{{ $destination->accessibility }} &nbsp; <span class="parameter-text">/10</span></p>
					</div>
					<div class="col-md-12 col-xs-12">
						<label class="col-xs-6 col-md-4">Alamat<span style="float:right;">:</span></label>
						<p class="col-xs-6 col-md-8">{{ $destination->address }}</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group"></div>
		</div>
	</div>
</div>
@endsection