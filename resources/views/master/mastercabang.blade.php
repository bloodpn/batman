@extends('customer.default')

@section('title','Master Cabang')

@section('content')

<div class="box box-primary box-solid direct-chat direct-chat-primary">
	<div class="box-header">
		<a href="/"><i class="fa fa-home fa-lg"></i></a> | 
		<h3 class="box-title">Master Cabang</h3>
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
						<li class="active"><a href="#data" data-toggle="tab">Data Cabang</a></li>
						<li><a href="#tambahcabang" data-toggle="tab">Tambah Baru</a></li>
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
								<th>No</th>
								<th>Kode</th>
								<th>Nama Cabang</th>
								<th>Alamat</th>
								<th>Kota</th>
								<th>Telp</th>
								<th>Fax</th>
								<th>Tipe</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						<?php $no = 0; ?>
						@foreach ($counter as $counter)
						<?php $no++; ?>							
						<tr>
								<td>{{$no}}</td>
								<td>{{$counter->kd_counters}}</td>
								<td>{{$counter->name}}</td>
								<td>{{$counter->address}}</td>
								<td>{{$counter->city}}</td>
								<td>{{$counter->phone}}</td>
								<td>{{$counter->fax}}</td>
								<td>{{$counter->type}}</td>
								<td>
									<a href="">edit</a> |
									<a href="">Delete</a>
								</td>
							</tr>
						@endforeach
						</tbody>
					</table>
				</div>
			</div>
			<div class="tab-pane fade" id="tambahcabang">
				<div class="row">
					<div class="col-lg-2" style="margin-left: 10px">
						<label style="padding-bottom: 5px; font-size: 12px;">Kode Cabang :</label><br><br>
						<label style="padding-bottom: 5px; font-size: 12px;">Nama Cabang :</label><br><br>
						<label style="padding-bottom: 5px; font-size: 12px;">Alamat :</label><br><br>
						<label style="padding-bottom: 5px; font-size: 12px;">Kota :</label><br><br>
						<label style="padding-bottom: 5px; font-size: 12px;">Telp :</label><br><br>
						<label style="padding-bottom: 5px; font-size: 12px;">Tipe :</label><br><br>
					</div> 
					<div class="col-lg-4">
						<div class="form-group input-group" style="margin-bottom: 0px;">
							<input type="text" name="kd_cabang" class="form-control form-purchase" placeholder="BDG">
						</div><br>
						<div class="form-group input-group" style="margin-bottom: 0px;">
							<input type="text" name="nama_cabang" class="form-control form-purchase" placeholder="WTC">
						</div><br>
						<div class="form-group input-group" style="margin-bottom: 0px;">
							<input type="text" name="alamat" class="form-control form-purchase" placeholder="....">
						</div><br>
						<div class="form-group input-group" style="margin-bottom: 0px;">
							<input type="text" name="kota" class="form-control form-purchase" placeholder="Bandung">
						</div><br>
						<div class="form-group input-group" style="margin-bottom: 0px;">
							<input type="number" min="0" name="telp_cabang" placeholder="0821.....">
						</div><br>
						<div class="form-group input-group" style="margin-bottom: 0px;">
							<select class="form-control form-purchase" name="tipe_cabang">
								<option value="Agen">Agen</option>
								<option value="Cabang">Cabang</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12" style="margin-right: 5px;">
						<button class="btn btn-primary pull-right">Submit</button>
					</div>
				</div><br>
			</div>
		</div>
	</div>
</div>

@endsection