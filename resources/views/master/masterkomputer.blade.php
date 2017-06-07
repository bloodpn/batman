@extends('customer.default')

@section('title','Master Komputer')

@section('content')

<div class="box box-primary box-solid direct-chat direct-chat-primary">
	<div class="box-header">
		<a href="/"><i class="fa fa-home fa-lg"></i></a> | 
		<h3 class="box-title">Master Komputer</h3>
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
                        <li class="active"><a href="#datakomputer" data-toggle="tab">Data Komputer</a></li>
                        <li><a href="#tambahkomputer" data-toggle="tab">Tambah Baru</a></li>
                    </ul>
                </div>
            </div>
		</div>
		<hr>
		<div class="tab-content">
			<div class="tab-pane fade in active" id="datakomputer">
				<div class="panel-body">
					<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
							<tr>
								<th>No</th>
								<th>Mac Address</th>
								<th>Nama Komputer</th>
								<th>Cabang</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						<?php $no = 0; ?>
						@foreach ($computer as $computers)
							<tr>
								<td>{{$no}}</td>
								<td>{{$computers->mac_address}}</td>
								<td>{{$computers->name}}</td>
								<td>{{$computers->name}}</td>
								<td></td>
							</tr>
						@endforeach
						</tbody>
					</table>
				</div>
			</div>
			<div class="tab-pane fade" id="tambahkomputer">
			<form action="/masterkomputer" method="post">
			{{ csrf_field() }}
			
				<div class="row">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-lg-2" style="margin-left: 10px;">
								<label style="padding-bottom: 5px; font-size: 12px;">Nama PC :</label>
							</div>
							<div class="col-lg-5">
								<div class="form-group input-group">
									<input type="text" name="name" class="form-control form-purchase" placeholder="USER-PC">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-2" style="margin-left: 10px;">
								<label style="padding-bottom: 5px; font-size: 12px;">Mac Address :</label>
							</div>
							<div class="col-lg-5">
								<div class="form-group input-group">
									<input type="text" name="mac_address" class="form-control form-purchase" placeholder="BBSFF988288888">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-2" style="margin-left: 10px;">
								<label style="padding-bottom: 5px; font-size: 12px">Cabang :</label>
							</div>
							<div class="col-lg-5">
								<div class="form-group input-group">
									<select class="form-control form-purchase" name="counter">
									@foreach ($counter as $counters)
										<option value="{{$counters->id}}">{{$counters->name}}</option>
									@endforeach
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-10" style="margin-left: 30px;">
								<button class="btn btn-primary pull-right" type="submit">Submit</button>
							</div>
						</div>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection