@extends('layouts.master')

@section('title','Paket')

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
    	
    	<!--Default Box-->
    	<div class="box">
    		<div class="box-header with-border">
	          	<h3 class="box-title">Hello Rob!</h3>
	        </div>
	        <div class="box-body">
	        	<div class="row">
	        		<div class="col-md-4">
	        			<div class="box">
	        				<div class="row">
	        					<div class="col-lg-12">
	        						<div class="form-group">
	        							<!--Label untuk Kota asal-->
	        							<select class="form-control" style="width: 100%" name="asal" id="asal">
	        								<option value="">Cabang Asal</option>
	        								@foreach ($counter as $Counter)
	        								<option value="{{$Counter->id}}">{{$Counter->name}}</option>
	        								@endforeach
	        							</select>
	        						</div>
	        					</div>
	        				</div>
	        				<div class="row">
	        					<div class="col-lg-12">
	        						<div class="form-group">
	        							<select class="form-control" style="width: 100%" class="ctujuan" id="ctujuan">
	        								<option value="">Cabang Tujuan</option>
	        							</select>
	        						</div>
	        					</div>
	        				</div>
	        				<div class="row">
			                  	<div class="col-sm-12">
			                   		<div class="form-group">
			                      	<!-- <label>Tanggal Kembali</label> -->
			                      		<div class="input-group date">
			                        		<div class="input-group-addon">
			                          			<i class="fa fa-calendar"></i>
			                        		</div>
			                        		<input type="text" class="form-control pull-right" id="tgl_pengiriman" placeholder="Tanggal Pengiriman">
			                      		</div>
			                      		<!-- /.input group -->
			                    	</div>
			                  	</div>
			                </div>
			                <div class="row">
			                	<div class="col-lg-12">
			                		<div class="form-group">
			                			<select class="form-control" style="width: 100%" id="jadwal">
			                				<option>Pilih Jadwal</option>
			                			</select>
			                		</div>
			                	</div>
			                </div>
	        			</div>
	        		</div>
	        		<div class="col-md-4">
	        			<div class="box">
	        				<div class="row">
	        					<div class="col-lg-12">
	        						<div class="form-group">
	        							<label><strong>Data Pengirim</strong></label>
	        						</div>	        						
	        					</div>
	        				</div>
	        				<div class="row">
	        					<div class="col-lg-12">
	        						<div class="form-group">
	        							<input type="text" name="name_pengirim" class="form-control" placeholder="Nama Pengirim">
	        						</div>
	        					</div>
	        				</div>
	        				<div class="row">
	        					<div class="col-lg-12">
	        						<div class="form-group">
	        							<input type="text" name="alamat_pengirim" class="form-control" placeholder="Alamat Pengirim">
	        						</div>
	        					</div>
	        				</div>
	        				<div class="row">
		        				<div class="col-lg-12">
		        					<div class="form-group">
		        						<input type="text" name="no_telp_sender" class="form-control" placeholder="No. HP Pengirim">
		        					</div>
		        				</div>
		        			</div>
		        			<div class="row">
		        				<div class="col-lg-12">
		        					<div class="form-group">
		        						<label><strong>Data Penerima</strong></label>
		        					</div>
		        				</div>
		        			</div>
		        			<div class="row">
		        				<div class="col-lg-12">
		        					<div class="form-group">
		        						<input type="text" name="nama_penerima" class="form-control" placeholder="Nama Penerima">
		        					</div>
		        				</div>
		        			</div>
		        			<div class="row">
		        				<div class="col-lg-12">
		        					<div class="form-group">
		        						<input type="text" name="alamat_penerima" class="form-control" placeholder="Alamat Penerima">
		        					</div>
		        				</div>
		        			</div>
		        			<div class="row">
		        				<div class="col-lg-12">
		        					<div class="form-group">
		        						<input type="text" name="no_telp_penerima" class="form-control" placeholder="No HP">
		        					</div>
		        				</div>
		        			</div>
		        			<div class="row">
		        				<div class="col-lg-12">
		        					<div class="form-group">
		        						<label><strong>Data Paket</strong></label>
		        					</div>
		        				</div>
		        			</div>
		        			<div class="row">
		        				<div class="col-lg-12">
		        					<div class="form-group">
		        						<input type="text" name="jml_koli" class="form-control" placeholder="Jumlah Koli">
		        					</div>
		        				</div>
		        			</div>
		        			<div class="row">
		        				<div class="col-lg-12">
		        					<div class="form-group">
		        						<input type="text" name="berat" class="form-control" placeholder="Berat">
		        					</div>
		        				</div>
		        			</div>
		        			<div class="row">
		        				<div class="col-lg-12">
		        					<div class="form-group">
		        						<select class="form-control" name="jenis_doc">
		        							<option>Dokumen</option>
		        							<option>Paket</option>
		        						</select>
		        					</div>
		        				</div>
		        			</div>
		        			<div class="row">
		        				<div class="col-lg-12">
		        					<div class="form-group">
		        						<input type="text" name="isi_barang" class="form-control" placeholder="Isi Barang">
		        					</div>
		        				</div>
		        			</div>
		        			<div class="row">
		        				<div class="col-lg-12">
		        					<div class="form-group">
		        						<input type="text" name="instruksi_khusus" class="form-control" placeholder="Instruksi Khusus">
		        					</div>
		        				</div>
		        			</div>
		        			<div class="row">
		        				<div class="col-lg-12">
		        					<div class="form-group">
		        						<select class="form-control" name="jenis_layanan">
		        							<option>Jenis Layanan</option>
		        							<option>Gold</option>
											<option>Platinum</option>
											<option>Internal</option>
		        						</select>
		        					</div>
		        				</div>
		        			</div>
		        			<div class="row">
		        				<div class="col-lg-12">
		        					<div class="form-group">
		        						<select class="form-control" name="jenis_bayar">
		        							<option>Jenis Pembayaran</option>
		        							<option>Cash</option>
		        							<option>Transfer</option>
		        							<option>Berlangganan</option>
		        						</select>
		        					</div>
		        				</div>
		        			</div>
		        			<div class="row">
		        				<div class="col-lg-12">
		        					<div class="form-group">
		        						<input type="text" name="discount" class="form-control" placeholder="Discount" readonly="">
		        					</div>
		        				</div>
		        			</div>
		        			<div class="row">
		        				<div class="col-lg-12">
		        					<div class="form-group">
		        						<input type="text" name="total" class="form-control" placeholder="Total Harga" readonly="">
		        					</div>
		        				</div>
		        			</div>
	        			</div>
	        		</div>
	        		<div class="row">
	        			<div class="col-lg-12">
	        				<div class="form-group">
	        					<button type="submit" class="btn btn-primary pull-right">Submit</button>
	        				</div>
	        			</div>
	        		</div>
	        	</div>
	        </div>
    	</div>
    </section>
</div>
@endsection

@section('script')
 $('#tgl_pengiriman').datepicker({
      autoclose: true
  });

@endsection