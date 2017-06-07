@extends('customer.default')

@section('title','Edit Master Asuransi')

@section('content')

<div class="box box-primary box-solid direct-chat direct-chat-primary">
	<div class="box-header">
		<a href="/"><i class="fa fa-home fa-lg"></i></a> | 
		<h3 class="box-title">Master Asuransi</h3>
		<div class="box-tools pull-right">
	      <button class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle">Bantuan</button>
	    </div>
	</div>
	<br>
	<div class="box-body">
		<div class="row">
			<form action="/editmasterasuransi/{{$insurance->id}}" method="post">
				<input type="hidden" name="_method" value="PUT">
        		{{ csrf_field() }}
        		<div class="col-lg-12">
					<div class="row">
						<div class="col-lg-2" style="margin-left: 10px;">
							<label style="padding-bottom: 5px; font-size: 12px;">Nama Plan :</label>
						</div>
						<div class="col-lg-5">
							<div class="form-group input-group">
								<input type="text" name="name" class="form-control form-purchase" value="{{$insurance->name}}">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2" style="margin-left: 10px;">
							<label style="padding-bottom: 5px; font-size: 12px;">Besar Premi :</label>
						</div>
						<div class="col-lg-5">
							<div class="form-group input-group">
								<input type="number" min="0" name="premi" class="form-control form-purchase" value="{{$insurance->premi}}">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2" style="margin-left: 10px;">
							<label style="padding-bottom: 5px; font-size: 12px;">Keterangan :</label>
						</div>
						<div class="col-lg-5">
							<div class="form-group input-group">
								<input type="text" name="description" class="form-control form-purchase" value="{{$insurance->description}}">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-10" style="margin-left: 30px;">
							<button type="submit" class="btn btn-primary pull-right">Submit</button>
						</div>
					</div>
					<br>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection