@extends('layouts.master')

@section('title','Master User')

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
				<h3 class="box-title">Master User</h3>
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
								<li class="active"><a href="#datauser" data-toggle="tab">Data User</a></li>
								<li><a href="#tambahuser" data-toggle="tab">Tambah Baru</a></li>
							</ul>
						</div>
					</div>
				</div>
				<hr>
				<div class="tab-content">
					<div class="tab-pane fade in active" id="datauser">
						<div class="panel-body">
							<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama</th>
										<th>NIK</th>
										<th>Username</th>
										<th>Cabang</th>
										<th>User level</th>
										<th>Telp</th>
										<th>Aktif</th>
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
										<td></td>
										<td></td>
										<td></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="tab-pane fade" id="tambahuser">
						<div class="row">
							<div class="col-lg-12">
								<div class="row">
									<div class="col-lg-2" style="margin-left: 10px;">
										<label style="padding-bottom: 5px; font-size: 12px;">NIK :</label>
									</div>
									<div class="col-lg-6">
										<div class="form-group input-group">
											<input type="text" name="NIK" class="form-control form-purchase" placeholder="....">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-2" style="margin-left: 10px;">
										<label style="padding-bottom: 5px; font-size: 12px;">Nama User :</label>
									</div>
									<div class="col-lg-6">
										<div class="form-group input-group">
											<input type="text" name="nama_user" class="form-control form-purchase" placeholder="...">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-2" style="margin-left: 10px;">
										<label style="padding-bottom: 5px; font-size: 12px;">Kantor Cabang :</label>
									</div>
									<div class="col-lg-6">
										<div class="form-group input-group">
											<select class="form-control form-purchase" name="cabang">
												<option>BSD</option>
												<option>Blora</option>
												<option>Bintaro</option>
												<option>Menteng</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-2" style="margin-left: 10px;">
										<label style="padding-bottom: 5px; font-size: 12px;">No Telpon :</label>
									</div>
									<div class="col-lg-6">
										<div class="form-group input-group">
											<input type="number" min="0" name="telp" class="form-control form-purchase" placeholder="08xxxxxxxxx">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-2" style="margin-left: 10px;">
										<label style="padding-bottom: 5px; font-size: 12px;">Username :</label>
									</div>
									<div class="col-lg-6">
										<div class="form-group input-group">
											<input type="text" name="username" class="form-control form-purchase" placeholder="********">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-2" style="margin-left: 10px;">
										<label style="padding-bottom: 5px; font-size: 12px;">Password :</label>
									</div>
									<div class="col-lg-6">
										<div class="form-group input-group">
											<input type="text" name="password" class="form-control form-purchase">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-2" style="margin-left: 10px;">
										<label style="padding-bottom: 5px; font-size: 12px;">User Level :</label>
									</div>
									<div class="col-lg-6">
										<div class="form-group input-group">
											<select class="form-control form-purchase" name="privillage">
												<option value="CSO">CSO</option>
												<option value="CSO Paket">CSO Paket</option>
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
				<div class="col-lg-12">
					<button type="button" class="btn btn-primary pull-right">Submit</button>
				</div>
			</div>
		</div>
	</section>
</div>

@endsection