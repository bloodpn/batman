@extends('customer.default')

@section('title','Pengiriman Paket')

@section('content')

<div class="box box-primary box-solid direct-chat direct-chat-primary">
	<div class="box-header">
  		<a href="home"><i class="fa fa-home"></a></i>
  		<h3 class="box-title">Cari Tiket</h3>
  			<div class="box-tools pull-right">
    			<button class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle">Bantuan</button>
  			</div>
	</div><!-- /.box-header -->
	<div class="box-body">
		<br>
		<div class="row" style="margin-left: 0px;">
			<div class="col-lg-5">
				<div class="form-group">
					<label>Kota Asal</label>
					<select class="form-control" style="width: 100%">
						<option>Jakarta</option>
						<option>Bandung</option>
						<option>Semarang</option>
					</select>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="form-group">
					
				</div>
			</div>
		</div>
		<div class="row" style="margin-left: 0px;">
			<div class="col-lg-5">
				<div class="form-group">
					<label>Kota Tujuan</label>
					<select class="form-control" style="width: 100%">
						<option>Jakarta</option>
						<option>Bandung</option>
						<option>Semarang</option>
					</select>
				</div>
			</div>
		</div>
	</div>

@endsection