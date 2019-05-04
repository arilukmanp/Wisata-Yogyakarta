@extends('layouts.master')

@section('title', 'Add Participant')

@section('content')
<div class="block-content">
	<div class="row">
		<div class="col-md-12">
			<div class="block-header bttl">
				<h3>Participant Profile</h3>
				<a href="/participants/{{$participant->id}}/edit" class="btn btn_yellow btn-md pull-right"><i class="fas fa-pencil-alt btn-xs"></i> Edit Profile</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="flex-single">
		<div class="col-md-10">
			<div class="row">
				<div class="col-md-12 col-xs-12">
					<label class="col-xs-6 col-md-4">Fullname <span style="float:right;">:</span></label>
					<p class="col-xs-6 col-md-8">{{ $participant->profile->name }}</p>
				</div>
				<div class="col-md-12 col-xs-12">
					<label class="col-xs-6 col-md-4">Email <span style="float:right;">:</span></label>
					<p class="col-xs-6 col-md-8">{{ $participant->email }}</p>
				</div>
				<div class="col-md-12 col-xs-12">
					<label class="col-xs-6 col-md-4">Phone Number <span style="float:right;">:</span></label>
					<p class="col-xs-6 col-md-8">{{ $participant->profile->phone }}</p>
				</div>
				<div class="col-md-12 col-xs-12">
					<label class="col-xs-6 col-md-4">Place of Birth <span style="float:right;">:</span></label>
					<p class="col-xs-6 col-md-8">@if($participant->profile->place_of_birth == null) - @else {{ $participant->profile->place_of_birth }} @endif</p>
				</div>
				<div class="col-md-12 col-xs-12">
					<label class="col-xs-6 col-md-4">Date of Birth <span style="float:right;">:</span></label>
					<p class="col-xs-6 col-md-8">@if($participant->profile->date_of_birth == null) - @else {{ date("d F Y", strtotime($participant->profile->date_of_birth)) }} @endif</p>
				</div>
				<div class="col-md-12 col-xs-12">
					<label class="col-xs-6 col-md-4">Address <span style="float:right;">:</span></label>
					<p class="col-xs-6 col-md-8">@if($participant->profile->address == null) - @else {{ $participant->profile->address }} @endif</p>
				</div>
			</div>
		</div>
		<div class="col-md-2 order-first">
			<div class="row">
				@if($participant->profile->photo != null)
					<div class="col-xs-12 col-md-12">
						<a href="" data-toggle="modal" data-target="#myModal" class="mx-auto thumbnail avatar-photo">
							<img src="{{ asset('storage/profiles/'.$participant->profile->photo) }}" class="img-responsive" alt="Photo">
						</a>
					</div>
					<div id="myModal" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="background-color:#00000040">
						<div class="modal-dialog">
						  	<div class="modal-content">
								<div class="modal-body" style="padding-top:8px">
										<button type="button" class="close" data-dismiss="modal" style="font-size:30px; margin-bottom:5px;"><span aria-hidden="true">&times;</span></button>
									<img src="{{ asset('storage/profiles/'.$participant->profile->photo) }}" class="img-responsive">
							  	</div>
							</div>
						</div>
					</div>
				@endif
			</div>
		</div>
	</div>
		<div class="col-md-12">
			<div class="form-group"></div>
		</div>
	</div>
</div>
@endsection