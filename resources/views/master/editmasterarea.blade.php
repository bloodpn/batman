@extends('customer.default')

@section('title','Master Cabang')

@section('content')

<div class="box box-primary box-solid direct-chat direct-chat-primary">
	<div class="box-header">
		<a href="/"><i class="fa fa-home fa-lg"></i></a> | 
		<h3 class="box-title">Master Area</h3>
		<div class="box-tools pull-right">
	      <button class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle">Bantuan</button>
	    </div>
	</div>
	<br>
	<div class="box-body">
	<form action="/editmasterarea/{{$area->id}}" method="post">
		<input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-lg-3" style="margin-left: 10px;">
						<label style="padding-bottom: 5px; font-size: 12px;">Kode Area :</label>
					</div>
					<div class="col-lg-5">
						<div class="form-group input-group">
							<input type="text" name="kode" class="form-control form-purchase" value="{{$area->kode}}">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3" style="margin-left: 10px;">
						<label style="padding-bottom: 5px; font-size: 12px;">Nama Area :</label>
					</div>
					<div class="col-lg-5">
						<div class="form-group input-group">
							<input type="text" name="name" class="form-control form-purchase" value="{{$area->name}}">
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
		</div>
	</form>
	</div>
</div>

@endsection