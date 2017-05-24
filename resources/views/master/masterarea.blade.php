@extends('customer.default')

@section('title','Master Area')

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
		<div class="row">
			<div class="col-lg-10" style="margin-left: 10px;">
				<div class="form-group input-group">
					<ul class="nav nav-pills">
						<li class="active"><a href="#datarea" data-toggle="tab">Data Area</a></li>
						<li><a href="#tambaharea" data-toggle="tab">Tambah Baru</a></li>
					</ul>
				</div>
			</div>
		</div>
		<hr>
		<div class="tab-content">
			<div class="tab-pane fade in active" id="dataarea">
				<div class="panel-body">
					<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
							<tr>
								<th>No</th>
								<th>Kode Area</th>
								<th>Nama Area</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="tab-pane fade" id="tambaharea">
				<div class="row">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-lg-3" style="margin-left: 10px;">
								<label style="padding-bottom: 5px; font-size: 12px;">Kode Area :</label>
							</div>
							<div class="col-lg-5">
								<div class="form-group input-group">
									<input type="text" name="kd_area" class="form-control form-purchase" placeholder="...">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-3" style="margin-left: 10px;">
								<label style="padding-bottom: 5px; font-size: 12px;">Nama Area :</label>
							</div>
							<div class="col-lg-5">
								<div class="form-group input-group">
									<input type="text" name="area_name" class="form-control form-purchase" placeholder="...">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="box-footer">
		<div class="row">
			<div class="col-lg-12">
				<button type="button" class="btn btn-primary pull-right">Submit</button>
			</div>
		</div>
	</div>
</div>

@endsection