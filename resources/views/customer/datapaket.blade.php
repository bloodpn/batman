@extends('customer.default')

@section('title','Data Paket')

@section('content')

<div class="box box-primary box-solid direct-chat direct-chat-primary">
	<div class="box-header">
		<a href="/"><i class="fa fa-home fa-lg"></i></a> | 
		<h3 class="box-title">Data Pengiriman</h3>
			<div class="box-tools pull-right">
    			<button class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle">Bantuan</button>
  			</div>
	</div>
	<br>
	<div class="box-body">
		<!--Data Pengirim-->
		<div class="row">
			<div class="col-lg-12">
				<h4 style="margin-left: 10px;">Data Pengirim</h4>
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-2">
				<div class="form-group" style="margin-left: 10px;">
					<label>Nama Pengirim :</label>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="form-group">
					<input type="text" name="nama_pengirim" class="form-control form-purchase" placeholder="Nama Pengirim"></input>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-2">
				<div class="form-group" style="margin-left: 10px;">
					<label>Alamat Pengirim :</label>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="form-group">
					<input type="text" name="alamat_pengirim" class="form-control form-purchase" placeholder="Alamat Pengirim"></input>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-2">
				<div class="form-group" style="margin-left: 10px;">
					<label>No HP Pengirim :</label>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="form-group">
					<input type="number" min="0" name="no_hp_pengirim" class="form-control form-purchase" placeholder="081xxxxxx"></input>
				</div>
			</div>
		</div>
		<hr>
		<!--End Data Pengirim-->
		<!--Data Penerima-->
		<div class="row">
			<div class="col-lg-12">
				<h4 style="margin-left: 10px">Data Penerima</h4>
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-2">
				<div class="form-group" style="margin-left: 10px;">
					<label>Nama Penerima :</label>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="form-group">
					<input type="text" name="nama_penerima" class="form-control form-purchase" placeholder="Nama Penerima"></input>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-2">
				<div class="form-group" style="margin-left: 10px;">
					<label>Alamat Penerima :</label>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="form-group">
					<input type="text" name="alamat_penerima" class="form-control form-purchase" placeholder="Alamat Penerima"></input>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-2">
				<div class="form-group" style="margin-left: 10px;">
					<label>No HP Penerima :</label>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="form-group">
					<input type="number" min="0" name="no_hp_penerima" class="form-control form-purchase" placeholder="081xxxxxx"></input>
				</div>
			</div>
		</div>
		<hr>
		<!--End Data Penerima-->
		<!--Data Paket-->
		<div class="row">
			<div class="col-lg-12">
				<h4 style="margin-left: 10px">Data Paket</h4>
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="row">
					<div class="col-lg-3">
						<div class="form-group" style="margin-left: 10px;">
							<label>Jumlah Koli :</label>
						</div>
					</div>
					<div class="col-lg-5">
						<input type="number" min="0" name="koli" class="form-control form-purchase"></input>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3">
						<div class="form-group" style="margin-left: 10px;">
							<label>Berat :</label>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="form-group">
							<input type="number" min="0" name="berat" class="form-control form-purchase"></input>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3">
						<div class="form-group" style="margin-left: 10px;">
							<label>Jenis Barang :</label>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="form-group">
							<select class="form-control form-purchase">
								<option>Dokumen</option>
								<option>Paket</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3">
						<div class="form-group" style="margin-left: 10px;">
							<label>Isi Barang :</label>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="form-group">
							<input type="text" name="isi_paket" class="form-control form-purchase" placeholder="Isi Paket"></input>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3">
						<div class="form-group" style="margin-left: 10px;">
							<label>Instruksi Khusus : </label>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="form-group">
							<input type="text" name="instruksi" class="form-control form-purchase" placeholder="Hati-hati...."></input>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="row">
					<div class="col-lg-3">
						<div class="form-group">
							<label>Jenis Layanan :</label>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="form-group">
							<select class="form-control form-purchase">
								<option>Gold</option>
								<option>Platinum</option>
								<option>Internal</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3">
						<div class="form-group">
							<label>Cara Bayar :</label>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="form-group">
							<select class="form-control form-purchase">
								<option>Cash</option>
								<option>Transfer</option>
								<option>Berlangganan</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3">
						<div class="form-group">
							<label>Discount :</label>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="form-group">
							<input type="text" name="discount" class="form-control form-purchase" placeholder="10%" readonly=""></input>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3">
						<div class="form-group">
							<label>Total Bayar :</label>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="form-group">
							<input type="text" name="total_bayar" class="form-control form-purchase" placeholder="Rp. 90.000" readonly=""></input>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="box-footer">
		<div class="input-group pull-right">
            <!-- <button type="button" class="btn btn-primary btn-flat">Lanjut</button> -->
            <a href="{{ url('') }}" class="btn btn-primary btn-flat">Next</a>
        </div>
	</div>
</div>

@endsection