@extends('layouts.master')

@section('title', 'Pengaturan Variabel Fuzzy')

@section('content')
<div class="block-content">
	<div class="row">
		<div class="col-md-12">
			<div class="block-header bttl">
				<h3>Pengaturan Variabel Fuzzy</h3>
				<a href="/{{Request::path()}}/edit" class="btn btn_yellow btn-md pull-right"><i class="fas fa-pencil-alt btn-xs"></i> Edit Data</a>
			</div>
		</div>
	</div>
	<div class="row">
		@if(session('success'))
			<div class="col-md-12">
				<div class="alert alert-success">
					{{ session('success') }}
					<a class="close" data-dismiss="alert" href="" aria-hidden="true">&times;</a>
				</div>
			</div>
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
								<td rowspan="3" style="vertical-align : middle">1</td>
								<td rowspan="3" style="vertical-align : middle">Popularitas</td>
								<td>Cukup Terkenal</td>
								<td>{{$popularity1->min_set}}</td>
								<td>{{$popularity1->max_set}}</td>
							</tr>
							<tr>
								<td>Terkenal</td>
								<td>{{$popularity2->min_set}}</td>
								<td>{{$popularity2->max_set}}</td>
							</tr>
							<tr>
								<td>Sangat Terkenal</td>
								<td>{{$popularity3->min_set}}</td>
								<td>{{$popularity3->max_set}}</td>
							</tr>
							

							<tr>
								<td rowspan="3" style="vertical-align : middle">2</td>
								<td rowspan="3" style="vertical-align : middle">Biaya Masuk</td>
								<td>Sangat Murah</td>
								<td>{{$cost1->min_set}}</td>
								<td>{{$cost1->max_set}}</td>
							</tr>
							<tr>
								<td>Murah</td>
								<td>{{$cost2->min_set}}</td>
								<td>{{$cost2->max_set}}</td>
							</tr>
							<tr>
								<td>Sedang</td>
								<td>{{$cost3->min_set}}</td>
								<td>{{$cost3->max_set}}</td>
							</tr>


							<tr>
								<td rowspan="3" style="vertical-align : middle">3</td>
								<td rowspan="3" style="vertical-align : middle">Pengunjung</td>
								<td>Sepi</td>
								<td>{{$visitor1->min_set}}</td>
								<td>{{$visitor1->max_set}}</td>
							</tr>
							<tr>
								<td>Cukup Ramai</td>
								<td>{{$visitor2->min_set}}</td>
								<td>{{$visitor2->max_set}}</td>
							</tr>
							<tr>
								<td>Ramai</td>
								<td>{{$visitor3->min_set}}</td>
								<td>{{$visitor3->max_set}}</td>
							</tr>


							<tr>
								<td rowspan="3" style="vertical-align : middle">4</td>
								<td rowspan="3" style="vertical-align : middle">Fasilitas</td>
								<td>Cukup Lengkap</td>
								<td>{{$facility1->min_set}}</td>
								<td>{{$facility1->max_set}}</td>
							</tr>
							<tr>
								<td>Lengkap</td>
								<td>{{$facility2->min_set}}</td>
								<td>{{$facility2->max_set}}</td>
							</tr>
							<tr>
								<td>Sangat Lengkap</td>
								<td>{{$facility3->min_set}}</td>
								<td>{{$facility3->max_set}}</td>
							</tr>


							<tr>
								<td rowspan="3" style="vertical-align : middle">5</td>
								<td rowspan="3" style="vertical-align : middle">Kebersihan</td>
								<td>Cukup Bersih</td>
								<td>{{$cleanliness1->min_set}}</td>
								<td>{{$cleanliness1->max_set}}</td>
							</tr>
							<tr>
								<td>Bersih</td>
								<td>{{$cleanliness2->min_set}}</td>
								<td>{{$cleanliness2->max_set}}</td>
							</tr>
							<tr>
								<td>Sangat Bersih</td>
								<td>{{$cleanliness3->min_set}}</td>
								<td>{{$cleanliness3->max_set}}</td>
							</tr>
							

							<tr>
								<td rowspan="3" style="vertical-align : middle">6</td>
								<td rowspan="3" style="vertical-align : middle">Akses</td>
								<td>Cukup Mudah</td>
								<td>{{$accessibility1->min_set}}</td>
								<td>{{$accessibility1->max_set}}</td>
							</tr>
							<tr>
								<td>Mudah</td>
								<td>{{$accessibility2->min_set}}</td>
								<td>{{$accessibility2->max_set}}</td>
							</tr>
							<tr>
								<td>Sangat Mudah</td>
								<td>{{$accessibility3->min_set}}</td>
								<td>{{$accessibility3->max_set}}</td>
							</tr>
						</tbody>
					</table>
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group"></div>
		</div>
	</div>
</div>
@endsection