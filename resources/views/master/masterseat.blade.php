@extends('customer.default')

@section('title','Master Seat')

@section('content')

<div class="box box-primary box-solid direct-chat direct-chat-primary">
	<div class="box-header">
		<a href="/"><i class="fa fa-home fa-lg"></i></a> | 
		<h3 class="box-title">Master Seat</h3>
		<div class="box-tools pull-right">
	      <button class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle">Bantuan</button>
	    </div>
	</div>
	<br>
	<div class="box-body">
		<div class="row">
			<div class="col-lg-10" style="margin-left: 10px;">
				<div class="form-group input-group">
					<ul class="nav nav-pills">
						<li class="active"><a href="#data" data-toggle="tab">Data Seat</a></li>
						<li><a href="#tambahseat" data-toggle="tab">Tambah Baru</a></li>
					</ul>
				</div>
			</div>
		</div>
		<hr>
		<div class="tab-content">
			<div class="tab-pane fade in active" id="data">
				<div class="panel-body">
					<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
							<tr>
								<th>No.</th>
								<th>Nama Seat</th>
								<th>Jumlah Seat</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						<?php $no=0; ?>
						@foreach ($seat as $seat)
						<?php $no++; ?>
							<tr>
								<td>{{$no}}</td>
								<td>{{ $seat->name }}</td>
								<td>{{ $seat->jumlah }}</td>
								<td>
									<a href="/masterseat/edit/{{$seat->id}}">Edit</a> |
									<a href="">Delete</a>
								</td>
							</tr>
						@endforeach
						</tbody>
					</table>
				</div>
			</div>
			<div class="tab-pane fade" id="tambahseat">
			<form action="masterseat" method="post">
				{{ csrf_field() }}
				<div class="row">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-lg-2" style="margin-left: 10px">
								<label style="padding-bottom: 5px; font-size: 12px">Nama :</label>
							</div>
							<div class="col-lg-5">
								<div class="form-group input-group">
									<input type="text" name="name" class="form-control form-purchase">
								</div>
							</div>
						</div>
						<div class="row">
							 <div class="col-lg-2" style="margin-left: 10px">
							 	<label style="padding-bottom: 5px; font-size: 12px;">Jumlah Seat :</label>
							 </div>
							 <div class="col-lg-5">
							 	<div class="form-group input-group">
							 		<input type="number" name="jumlah" min="0" class="form-control form-purchase">
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
	</div>
</div>

@endsection