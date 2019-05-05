@extends('layouts.master')

@section('title', 'Tambah Kategori Destinasi Wisata')

@section('content')
<div class="block-content">
	<div class="row">
		<div class="col-md-12">
			<div class="block-header bttl">
				<h3>Tambah Kategori Destinasi Wisata</h3>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<form class="form-horizontal edt" action="/reference/category" method="POST" enctype="multipart/form-data">
			
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
					<div class="form-group" style="border-bottom: none">
						<label for="name">Nama Kategori</label>
						<input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required autocomplete="off">
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
					</div>
                </div>
			</form>
		</div>
	</div>
</div>
@endsection