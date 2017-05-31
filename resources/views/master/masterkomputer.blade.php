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
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="tab-pane fade" id="tambahkomputer">
				<div class="row">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-lg-2" style="margin-left: 10px;">
								<label style="padding-bottom: 5px; font-size: 12px;">Nama PC :</label>
							</div>
							<div class="col-lg-5">
								<div class="form-group input-group">
									<input type="text" name="name_pc" class="form-control form-purchase" placeholder="USER-PC">
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
									<select class="form-control form-purchase" name="cabang">
										<option>Blora</option>
										<option>BSD</option>
										<option>Bintaro</option>
										<option>WTC</option>
									</select>
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