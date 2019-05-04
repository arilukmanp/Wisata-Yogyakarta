@extends('layouts.master')

@section('title', 'Edit Participant')

@section('content')
<div class="block-content">
	<div class="row">
		<div class="col-md-12">
			<div class="block-header bttl">
				<h3>Edit Participant</h3>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<form class="form-horizontal edt" action="/participants/{{ $participant->id }}" method="POST" enctype="multipart/form-data">
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
						<label for="name">Fullname</label>
						<input type="text" class="form-control" id="name" name="name" value="{{ $participant->profile->name }}" required autocomplete="off">
					</div>
                </div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="email">Email Address</label>
						<input type="email" class="form-control" id="email" name="email" value="{{ $participant->email }}" required autocomplete="off">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="place_of_birth">Place of Birth</label>
						<input type="text" class="form-control" id="place_of_birth" name="place_of_birth" value="{{ $participant->profile->place_of_birth }}" autocomplete="off">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="date_of_birth">Date of Birth</label>
						<input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value="{{ $participant->profile->date_of_birth }}" autocomplete="off">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="phone">Phone Number</label>
						<input type="number" class="form-control" id="phone" name="phone" value="{{ $participant->profile->phone }}" autocomplete="off">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="photo">Photo</label>
						<div class="input-group">
							<input type="text" class="form-control" name="photo_old" value="{{ $participant->profile->photo }}" readonly>
							<label class="input-group-btn">
								<span class="btn btn-danger">
									<span class="image-preview-input-title">Select Photo</span>
									<input type="file" accept="image/png, image/jpeg, image/jpg" id="photo" name="photo" style="display: none;">
								</span>
							</label>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
						<label>Address</label>
						<textarea class="form-control" rows="3" name="address">{{ $participant->profile->address }}</textarea>
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-btn">
						<a href="/participants/{{ $participant->id }}" class="btn btn-danger"><i class="fa fa-times"></i> &nbsp; Batal</a>
						<button type="submit" class="btn btn-info pull-right" value="edit" name="submit"><i class="fa fa-check"></i> &nbsp; Save</button>
						{{ csrf_field() }}
						<input type="hidden" name="_method" value="PUT">
					</div>
                </div>
			</form>
		</div>
	</div>
</div>
@endsection

@section('script')
	<script type="text/javascript">
		$(document).on('click', '#close-preview', function(){ 
			$('.image-preview').popover('hide');
		});

		$(function() {
			var closebtn = $('<button/>', {
				type:"button",
				text: 'x',
				id: 'close-preview',
				style: 'font-size: initial;',
			});
			closebtn.attr("class","close pull-right");


			$('.image-preview-clear').click(function(){
				$('.image-preview').attr("data-content","").popover('hide');
				$('.image-preview-filename').val("");
				$('.image-preview-clear').hide();
				$('.image-preview-input input:file').val("");
				$(".image-preview-input-title").text("Browse"); 
			}); 

			$(".image-preview-input input:file").change(function (){     
				var img = $('<img/>', {
					id: 'dynamic',
					width:250,
					height:200
				});      
				var file = this.files[0];
				var reader = new FileReader();

				reader.onload = function (e) {
					$(".image-preview-input-title").text("Ganti");
					$(".image-preview-clear").show();
					$(".image-preview-filename").val(file.name);
				}        
				reader.readAsDataURL(file);
			});  
		});
	</script>
@endsection