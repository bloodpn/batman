@extends('customer.default')

@section('title','Tiket')

@section('content')

<div class="box box-solid">
  <div class="box-header">
     <div class="row">
      <div class="col-xs-8">
        <h1>Asal - Tujuan</h1>
      </div>
      <div class="col-xs-2">
      <br>
      	 <a class="btn btn-info" data-toggle="collapse" data-parent="#accordion" href="#caritiket">Ubah Keberangkatan</a>
      </div>
      <div class="col-xs-2">
        <h4><i class="fa fa-calendar"></i> 5/10/2017</h4>
        <h4><i class="fa fa-clock-o"></i> 20.00 WIB</h4>
        <!-- <h4><i class="fa fa-money"></i> Rp. 90.000</h4> -->
      </div>
    </div>
    <div class="row">
    	<div id="caritiket" class="panel-collapse collapse">
          <br>
            <div class="row" style="margin-left: 0px;">
              	<div class="col-lg-2 col-md-offset-6">
	              	<div class="form-group">
	                <label>Tanggal Keberangkatan</label>
		                <div class="input-group date">
			                <div class="input-group-addon">
			                    <i class="fa fa-calendar"></i>
			                </div>
		                  	<input type="text" class="form-control pull-right" id="tgl_berangkat">
		                </div>
	                <!-- /.input group -->
	              	</div>
	            </div>
	            <div class="col-lg-2">
	              	<div class="form-group">
	                <label>Tanggal Kembali</label>
		                <div class="input-group date">
		                  	<div class="input-group-addon">
		                    	<i class="fa fa-calendar"></i>
		                  	</div>
		                  	<input type="text" class="form-control pull-right" id="tgl_kembali">
		                </div>
	                <!-- /.input group -->
	              </div>
	            </div>
	            <div class="col-md-1">
	            <br>
	            	<a href="ubahjadwal" class="btn btn-primary">Cari</a>
	            </div>
            </div>
             
          </div>
    </div>
  </div><!-- /.box-header -->
  <div class="box-body">
   <br>
   <div class="row">
   	<div class="col-sm-6" >
        <!-- <div class="box" style="margin-left: 3px;"> -->
            <table class="table table-striped table-bordered">
              <tr>
              	<th>No. Pemesanan</th>
              	<th>2017102111</th>
              </tr>
            </table>
        <!-- </div> -->
      </div>
   </div>
    <div class="row">
      <div class="col-sm-6" >
        <!-- <div class="box" style="margin-left: 3px;"> -->
            <table class="table table-striped table-bordered">
              <tr>
                <td class="col-md-2"><b>Pemesan</b></td>
                <td class="col-md-10">Adam</td>
              </tr>
              <tr>
                <td class="col-md-2"><b>Telepon</b></td>
                <td class="col-md-10">0890908</td>
              </tr>
              <tr>
                <td class="col-md-2"><b>Email</b></td>
                <td class="col-md-10">adam92@mail.com</td>
              </tr>
              <tr>
                <td class="col-md-2"><b>Alamat</b></td>
                <td class="col-md-10">jl. kemana saja no 19</td>
              </tr>
            </table>
        <!-- </div> -->
      </div>
       <div class="col-sm-6" >
        <!-- <div class="box" style="margin-left: 3px;"> -->
            <table class="table table-striped table-bordered">
              <tr>
              	<th>Penumpang</th>
              	<th>Tempat duduk</th>
              </tr>
              <tr>
              	<td>Adam</td>
              	<td>8</td>
              </tr>
            </table>
        <!-- </div> -->
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12" >
          <table class="table table-striped table-bordered">
              <tr>
                <th class="col-md-2 text-center">Biaya</th>
                <th class="col-md-2 text-center">Diskon</th>
                <th class="col-md-2 text-center">Total Bayar</th>
                <th class="col-md-3 text-center">Metode Pembayaran</th>
                <th class="col-md-3 text-center">Status Pembayaran</th>
              </tr>
              <tr>
                <td class="col-md-2">Rp. 90.000</td>
                <td class="col-md-2">Rp. 5.000</td>
                <td class="col-md-2">Rp. 85.000</td>
                <td class="col-md-3">ATM / Internet Banking</td>
                <td class="col-md-3">Lunas</td>
              </tr>
            </table>
      </div>
    </div>
  </div>

  <div class="box-footer">
    <div class="row">
      <div class="col-sm-2 pull-right">
        <div class="input-group pull-right">
            <!-- <button type="button" class="btn btn-primary btn-flat">Lanjut</button> -->
            <a href="carijadwal" class="btn btn-primary btn-flat">Selesai</a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection