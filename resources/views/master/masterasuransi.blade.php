@extends('customer.default')

@section('title','Master Asuransi')

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
			<div class="col-lg-10" style="margin-left: 10px;">
                <div class="form-group input-group">
                    <ul class="nav nav-pills">
                        <li class="active"><a href="#dataasuransi" data-toggle="tab">Data Asuransi</a></li>
                        <li><a href="#tambahasuransi" data-toggle="tab">Tambah Baru</a></li>
                    </ul>
                </div>
            </div>
		</div>
		<hr>
		<div class="tab-content">
			<div class="tab-pane fade in active" id="dataasuransi">
				<div class="panel-body">
					<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Plan</th>
								<th>Besar Premi (Rp)</th>
								<th>Keterangan</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						<?php $no = 0; ?>
						@foreach ($insurance as $insurance)
						<?php $no++; ?>
							<tr>
								<td>{{$no}}</td>
								<td>{{$insurance->name}}</td>
								<td>{{$insurance->premi}}</td>
								<td>{{$insurance->description}}</td>
								<td>
									<a href="/masterasuransi/edit/{{$insurance->id}}">Edit</a> |
									<a href="">Delete</a>
								</td>
							</tr>
						@endforeach
						</tbody>
					</table>
				</div>
			</div>
			<div class="tab-pane fade" id="tambahasuransi">
			<form action="/masterasuransi" method="post">
			{{ csrf_field() }}
				<div class="row">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-lg-2" style="margin-left: 10px;">
								<label style="padding-bottom: 5px; font-size: 12px;">Nama Plan :</label>
							</div>
							<div class="col-lg-5">
								<div class="form-group input-group">
									<input type="text" name="name" class="form-control form-purchase" placeholder="PLan xxx">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-2" style="margin-left: 10px;">
								<label style="padding-bottom: 5px; font-size: 12px;">Besar Premi :</label>
							</div>
							<div class="col-lg-5">
								<div class="form-group input-group">
									<input type="number" min="0" name="premi" class="form-control form-purchase" placeholder="Rp. xxxx">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-2" style="margin-left: 10px;">
								<label style="padding-bottom: 5px; font-size: 12px;">Keterangan :</label>
							</div>
							<div class="col-lg-5">
								<div class="form-group input-group">
									<input type="text" name="description" class="form-control form-purchase" placeholder=".....">
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
