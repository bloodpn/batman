@extends('layouts.master')

@section('title','Edit Master Seat')

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
				<a href="/"><i class="fa fa-home fa-lg"></i></a> | 
				<h3 class="box-title">Master Seat</h3>
				<div class="box-tools pull-right">
			      <button class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle">Bantuan</button>
			    </div>
			</div>
			<br>
			<div class="box-body">
				<form action="/editmasterseat/{{$seat->id}}" method="post">
					<input type="hidden" name="_method" value="PUT">
					{{ csrf_field() }}
					<div class="row">
						<div class="col-lg-12">
							<div class="row">
								<div class="col-lg-2" style="margin-left: 10px">
									<label style="padding-bottom: 5px; font-size: 12px">Nama :</label>
								</div>
								<div class="col-lg-5">
									<div class="form-group input-group">
										<input type="text" name="name" class="form-control form-purchase" value="{{ $seat->name }}">
									</div>
								</div>
							</div>
							<div class="row">
								 <div class="col-lg-2" style="margin-left: 10px">
								 	<label style="padding-bottom: 5px; font-size: 12px;">Jumlah Seat :</label>
								 </div>
								 <div class="col-lg-5">
								 	<div class="form-group input-group">
								 		<input type="number" name="jumlah" min="0" class="form-control form-purchase" value="{{ $seat->jumlah }}">
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
	</section>
</div>

@endsection