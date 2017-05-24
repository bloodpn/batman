@extends('customer.default')

@section('title','Master Jurusan')

@section('content')

<div class="box box-primary box-solid direct-chat direct-chat-primary">
	<div class="box-header">
		<a href="/"><i class="fa fa-home fa-lg"></i></a> | 
		<h3 class="box-title">Master Jurusan</h3>
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
						<li class="active"><a href="#datajurusan" data-toggle="tab">Data Jurusan</a></li>
						<li><a href="#tambahjurusan" data-toggle="tab">Tambah Baru</a></li>
					</ul>
				</div>
			</div>
		</div>
		<hr>
		<div class="tab-content">
			<div class="tab-pane fade in active" id="datajurusan">
				<div class="panel-body">
					<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
							<tr>
								<th rowspan="2" class="text-center rata">No</th>
								<th rowspan="2" class="text-center rata">Kode Jurusan</th>
								<th rowspan="2" class="text-center rata">Asal</th>
								<th rowspan="2" class="text-center rata">Tujuan</th>
								<th rowspan="2" class="text-center rata">Jenis</th>
								<th rowspan="2" class="text-center rata">Tiket (Rp.)</th>
								<th rowspan="2" class="text-center rata">Tuslah (Rp.)</th>
								<th colspan="8" class="text-center rata">Harga Kirim Paket</th>
								<th rowspan="2" class="text-center rata">Area</th>
								<th rowspan="2" class="text-center rata">Aktif</th>
								<th rowspan="2" class="text-center rata">Action</th>
							</tr>
							<tr>
								<th>Platinum</th>
								<th>Gold Antar</th>
								<th>Gold Diambil</th>
								<th>Silver</th>
								<th>Cargo Antar</th>
								<th>Cargo Diambil</th>
								<th>Motor Kecil</th>
								<th>Motor Besar</th>
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
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td><a href="">aktif</a></td>
								<td>
									<a href="">Edit</a> |
									<a href="">Delete</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="tab-pane fade" id="tambahjurusan">
				<div class="row">
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-3" style="margin-left: 10px;">
								<label style="padding-bottom: 5px; font-size: 12px;">Kode Jurusan :</label>
							</div>
							<div class="col-lg-5">
								<div class="form-group input-group">
									<input type="text" name="kd_jurusan" class="form-control form-purchase" placeholder="BALE-BDR-M">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-3" style="margin-left: 10px;">
								<label style="padding-bottom: 5px; font-size: 12px;">Asal :</label>
							</div>
							<div class="col-lg-5">
								<div class="form-group input-group">
									<select class="form-control form-purchase" name="asl">
										<option value="Bandara Soetta (CGK)">Bandara Soeta (CGK)</option>
										<option value="BSD">BSD</option>
										<option value="Bekasi">Bekasi</option>
										<option value="Bintaro">Bintaro</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-3" style="margin-left: 10px;">
								<label style="padding-bottom: 5px; font-size: 12px;">Tujuan :</label>
							</div>
							<div class="col-lg-5">
								<div class="form-group input-group">
									<select class="form-control form-purchase" name="asl">
										<option value="Bandara Soetta (CGK)">Bandara Soeta (CGK)</option>
										<option value="BSD">BSD</option>
										<option value="Bekasi">Bekasi</option>
										<option value="Bintaro">Bintaro</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-3" style="margin-left: 10px;">
								<label style="padding-bottom: 5px; font-size: 12px;">Jenis Jurusan :</label>
							</div>
							<div class="col-lg-5">
								<div class="form-group input-group">
									<select class="form-control form-purchase" name="jenis_jurusan">
										<option value="Dalam Kota">Dalam Kota</option>
										<option value="Luar Kota">Luar Kota</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-3" style="margin-left: 10px;">
								<label style="padding-bottom: 5px; font-size: 12px;">Harga TIket :</label>
							</div>
							<div class="col-lg-5">
								<div class="form-group input-group">
									<input type="number" min="0" name="harga_tiket" class="form-control form-purchase" placeholder="Rp. 60.000">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-3" style="margin-left: 10px;">
								<label style="padding-bottom: 5px; font-size: 12px;">Harga Tuslah :</label>
							</div>
							<div class="col-lg-5">
								<div class="form-group input-group">
									<input type="number" min="0" name="harga_tuslah" class="form-control form-purchase" placeholder="Rp. 70.000">
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-12">
								<h5>Harga Kirim Paket</h5>
								<hr>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-3">
								<label style="padding-bottom: 5px; font-size: 12px;">Paket Platinum :</label>
							</div>
							<div class="col-lg-5">
								<div class="form-group input-group">
									<input type="number" name="platinum_paket" class="form-control form-purchase" placeholder="Rp. xxxx">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-3">
								<label style="padding-bottom: 5px; font-size: 12px;">Gold Antar :</label>
							</div>
							<div class="col-lg-5">
								<div class="form-group input-group">
									<input type="number" min="0" name="gold_antar" class="form-control form-purchase" placeholder="Rp. xxx">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-3">
								<label style="padding-bottom: 5px; font-size: 12px;">Gold Diambil :</label>
							</div>
							<div class="col-lg-5">
								<div class="form-group input-group">
									<input type="number" min="0" name="gold_ambil" class="form-control form-purchase" placeholder="Rp. xxxx">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="box-footer">
		<button type="button" class="btn btn-primary pull-right">Submit</button>
	</div>
</div>

@endsection