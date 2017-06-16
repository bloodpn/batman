@extends('layouts.master')

@section('title','Pengiriman Paket')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <small>7 Mei 2017 - 16.40 wib</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

		<div class="box">
			<div class="box-header">
		  		<a href="/"><i class="fa fa-home fa-lg"></a></i> | 
		  		<h3 class="box-title">Pengiriman Paket</h3>
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
							<label>Tanggal Pengiriman</label>
							<div class="input-group date">
			                  	<div class="input-group-addon">
			                    	<i class="fa fa-calendar"></i>
			                  	</div>
			                  	<input type="text" class="form-control pull-right" id="tgl_berangkat" placeholder="Tanggal Berangkat">
			                </div>
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
					<div class="col-lg-5">
						<div class="form-group">
							<label>Jadwal Pengiriman</label>
							<select class="form-control" style="width: 100%">
								<option>Blr (09:00) - BDG (11.00)</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
				<div class="input-group pull-right">
		            <!-- <button type="button" class="btn btn-primary btn-flat">Lanjut</button> -->
		            <a href="{{ url('/datapaket') }}" class="btn btn-primary btn-flat">Lanjut</a>
		        </div>
			</div>
		</div>
	</section>
</div>

@endsection