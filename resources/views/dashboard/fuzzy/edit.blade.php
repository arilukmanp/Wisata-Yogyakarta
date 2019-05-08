@extends('layouts.master')

@section('title', 'Edit Pengaturan Variabel Fuzzy')

@section('content')
<div class="block-content">
	<div class="row">
		<div class="col-md-12">
			<div class="block-header bttl">
				<h3>Edit Pengaturan Variabel Fuzzy</h3>
			</div>
		</div>
	</div>
	<div class="row">
		<form class="form-horizontal edt" action="/reference/fuzzy" method="POST" enctype="multipart/form-data">
	
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
	
			<div class="col-md-12">
				<div class="panel">
					<table class="table table-bordered" id="mydata">
						<thead>
							<tr>
								<th>#</th>
								<th>Kriteria</th>
								<th>Himp. Fuzzy</th>
								<th>Batas Bawah</th>
								<th>Batas Atas</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td rowspan="3" style="vertical-align: middle">1</td>
								<td rowspan="3" style="vertical-align: middle">Popularitas</td>
								<td style="vertical-align: middle">Cukup Terkenal</td>
								<td><input type="number" step="0.1" class="form-control" name="popularityMin1" value="{{$popularity1->min_set}}" autocomplete="off"></td>
								<td><input type="number" step="0.1" class="form-control" name="popularityMax1" value="{{$popularity1->max_set}}" autocomplete="off"></td>
							</tr>
							<tr>
								<td style="vertical-align: middle">Terkenal</td>
								<td><input type="number" step="0.1" class="form-control" name="popularityMin2" value="{{$popularity2->min_set}}" autocomplete="off"></td>
								<td><input type="number" step="0.1" class="form-control" name="popularityMax2" value="{{$popularity2->max_set}}" autocomplete="off"></td>
							</tr>
							<tr>
								<td style="vertical-align: middle">Sangat Terkenal</td>
								<td><input type="number" step="0.1" class="form-control" name="popularityMin3" value="{{$popularity3->min_set}}" autocomplete="off"></td>
								<td><input type="number" step="0.1" class="form-control" name="popularityMax3" value="{{$popularity3->max_set}}" autocomplete="off"></td>
							</tr>
	
	
							<tr>
								<td rowspan="3" style="vertical-align: middle">2</td>
								<td rowspan="3" style="vertical-align: middle">Biaya Masuk</td>
								<td style="vertical-align: middle">Sangat Murah</td>
								<td><input type="number" step="0.1" class="form-control" name="costMin1" value="{{$cost1->min_set}}" autocomplete="off"></td>
								<td><input type="number" step="0.1" class="form-control" name="costMax1" value="{{$cost1->max_set}}" autocomplete="off"></td>
							</tr>
							<tr>
								<td>Murah</td>
								<td><input type="number" step="0.1" class="form-control" name="costMin2" value="{{$cost2->min_set}}" autocomplete="off"></td>
								<td><input type="number" step="0.1" class="form-control" name="costMax2" value="{{$cost2->max_set}}" autocomplete="off"></td>
							</tr>
							<tr>
								<td>Sedang</td>
								<td><input type="number" step="0.1" class="form-control" name="costMin3" value="{{$cost3->min_set}}" autocomplete="off"></td>
								<td><input type="number" step="0.1" class="form-control" name="costMax3" value="{{$cost3->max_set}}" autocomplete="off"></td>
							</tr>
	
	
							<tr>
								<td rowspan="3" style="vertical-align: middle">3</td>
								<td rowspan="3" style="vertical-align: middle">Pengunjung</td>
								<td style="vertical-align: middle">Sepi</td>
								<td><input type="number" step="0.1" class="form-control" name="visitorMin1" value="{{$visitor1->min_set}}" autocomplete="off"></td>
								<td><input type="number" step="0.1" class="form-control" name="visitorMax1" value="{{$visitor1->max_set}}" autocomplete="off"></td>
							</tr>
							<tr>
								<td style="vertical-align: middle">Cukup Ramai</td>
								<td><input type="number" step="0.1" class="form-control" name="visitorMin2" value="{{$visitor2->min_set}}" autocomplete="off"></td>
								<td><input type="number" step="0.1" class="form-control" name="visitorMax2" value="{{$visitor2->max_set}}" autocomplete="off"></td>
							</tr>
							<tr>
								<td style="vertical-align: middle">Ramai</td>
								<td><input type="number" step="0.1" class="form-control" name="visitorMin3" value="{{$visitor3->min_set}}" autocomplete="off"></td>
								<td><input type="number" step="0.1" class="form-control" name="visitorMax3" value="{{$visitor3->max_set}}" autocomplete="off"></td>
							</tr>
	
	
							<tr>
								<td rowspan="3" style="vertical-align: middle">4</td>
								<td rowspan="3" style="vertical-align: middle">Fasilitas</td>
								<td style="vertical-align: middle">Cukup Lengkap</td>
								<td><input type="number" step="0.1" class="form-control" name="facilityMin1" value="{{$facility1->min_set}}" autocomplete="off"></td>
								<td><input type="number" step="0.1" class="form-control" name="facilityMax1" value="{{$facility1->max_set}}" autocomplete="off"></td>
							</tr>
							<tr>
								<td style="vertical-align: middle">Lengkap</td>
								<td><input type="number" step="0.1" class="form-control" name="facilityMin2" value="{{$facility2->min_set}}" autocomplete="off"></td>
								<td><input type="number" step="0.1" class="form-control" name="facilityMax2" value="{{$facility2->max_set}}" autocomplete="off"></td>
							</tr>
							<tr>
								<td style="vertical-align: middle">Sangat Lengkap</td>
								<td><input type="number" step="0.1" class="form-control" name="facilityMin3" value="{{$facility3->min_set}}" autocomplete="off"></td>
								<td><input type="number" step="0.1" class="form-control" name="facilityMax3" value="{{$facility3->max_set}}" autocomplete="off"></td>
							</tr>
	
	
							<tr>
								<td rowspan="3" style="vertical-align: middle">5</td>
								<td rowspan="3" style="vertical-align: middle">Kebersihan</td>
								<td style="vertical-align: middle">Cukup Bersih</td>
								<td><input type="number" step="0.1" class="form-control" name="cleanlinessMin1" value="{{$cleanliness1->min_set}}" autocomplete="off"></td>
								<td><input type="number" step="0.1" class="form-control" name="cleanlinessMax1" value="{{$cleanliness1->max_set}}" autocomplete="off"></td>
							</tr>
							<tr>
								<td style="vertical-align: middle">Bersih</td>
								<td><input type="number" step="0.1" class="form-control" name="cleanlinessMin2" value="{{$cleanliness2->min_set}}" autocomplete="off"></td>
								<td><input type="number" step="0.1" class="form-control" name="cleanlinessMax2" value="{{$cleanliness2->max_set}}" autocomplete="off"></td>
							</tr>
							<tr>
								<td style="vertical-align: middle">Sangat Bersih</td>
								<td><input type="number" step="0.1" class="form-control" name="cleanlinessMin3" value="{{$cleanliness3->min_set}}" autocomplete="off"></td>
								<td><input type="number" step="0.1" class="form-control" name="cleanlinessMax3" value="{{$cleanliness3->max_set}}" autocomplete="off"></td>
							</tr>
	
	
							<tr>
								<td rowspan="3" style="vertical-align: middle">6</td>
								<td rowspan="3" style="vertical-align: middle">Akses</td>
								<td style="vertical-align: middle">Cukup Mudah</td>
								<td><input type="number" step="0.1" class="form-control" name="accessibilityMin1" value="{{$accessibility1->min_set}}" autocomplete="off"></td>
								<td><input type="number" step="0.1" class="form-control" name="accessibilityMax1" value="{{$accessibility1->max_set}}" autocomplete="off"></td>
							</tr>
							<tr>
								<td style="vertical-align: middle">Mudah</td>
								<td><input type="number" step="0.1" class="form-control" name="accessibilityMin2" value="{{$accessibility2->min_set}}" autocomplete="off"></td>
								<td><input type="number" step="0.1" class="form-control" name="accessibilityMax2" value="{{$accessibility2->max_set}}" autocomplete="off"></td>
							</tr>
							<tr>
								<td style="vertical-align: middle">Sangat Mudah</td>
								<td><input type="number" step="0.1" class="form-control" name="accessibilityMin3" value="{{$accessibility3->min_set}}" autocomplete="off"></td>
								<td><input type="number" step="0.1" class="form-control" name="accessibilityMax3" value="{{$accessibility3->max_set}}" autocomplete="off"></td>
							</tr>
						</tbody>
					</table>
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
@endsection