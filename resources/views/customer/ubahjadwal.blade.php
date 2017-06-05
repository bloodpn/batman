@extends('customer.layouts.main')

@section('title','Ubah Jadwal')

@section('content')
<br>
<div class="box box-solid">
  <div class="box-body row">
    <div class="col-6">
      <h3>Keberangkatan<br>
      Tujuan</h3>
    </div>
    <div class="col-6">
      <h3>
        <i class="fa fa-calendar"></i> 5/10/2017<br>
      </h3>
    </div>
  </div>
  <div class="box-body">
    <div class="row">
      <div class="col-sm-6" >
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
      </div>
      <div class="col-sm-6" >
        <table class="table table-striped table-bordered">
          <tr>
          	<td class="col-md-4"><b>Penumpang</b></td>
          	<td>Adam</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>

<div class="box box-primary box-solid direct-chat direct-chat-primary">
  <div class="box-header">
    <h3 class="box-title"></h3>
    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="pull-right">
      Ubah Jadwal Keberangkatan Disini
    </a>
  </div>
	<div id="collapseThree" class="panel-collapse collapse">
    	<div class="row">
        <div class="col-4">&nbsp;</div>
        <div class="col-3">
          <div class="form-group">
            <label>Tanggal Keberangkatan</label>
            <div class="input-group date">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
              <input type="text" class="form-control pull-right" id="tgl_berangkat">
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="form-group">
            <label>Tanggal Kembali</label>
            <div class="input-group date">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
              <input type="text" class="form-control pull-right" id="tgl_kembali">
            </div>
          </div>
        </div>
        <div class="col-2">
          <div class="form-group">
            <br>
            <label>&nbsp;</label>
            <a href="ubahjadwal" class="btn btn-primary">Cari</a>
          </div>
        </div>
      </div>
  </div>

  <div class="box-body">
    <div class="row">
    	<div class="col-md-12">
    		<br>
	        <table class="table table-striped">
	            <tr>
	              <th style="width: 10px"></th>
	              <th>Jam Keberangkatan</th>
	              <th>Tersedia</th>
	              <th>Harga</th>
	              <th></th>
	            </tr>
	            <tr>
	              <td>1.</td>
	              <td>09.00 WIB</td>
	              <td>3 Kursi</td>
	              <td>Rp. 90.000</td>
	              <td><a href="ubahkursi" class="btn btn-primary btn-flat">Pilih</a></td>
	              <!-- <td><button type="button" class="btn btn-primary btn-flat">Pilih</button></td> -->
	            </tr>
	            <tr>
	              <td>2.</td>
	              <td>12.00 WIB</td>
	              <td>3 Kursi</td>
	              <td>Rp. 90.000</td>
	              <td><a href="ubahkursi" class="btn btn-primary btn-flat">Pilih</a></td>
	            </tr>
	            <tr>
	              <td>3.</td>
	              <td>15.00 WIB</td>
	              <td>3 Kursi</td>
	              <td>Rp. 90.000</td>
	              <td><a href="ubahkursi" class="btn btn-primary btn-flat">Pilih</a></td>
	            </tr>
	      	</table>
    	</div>
    </div>
  </div>
</div><!--/.direct-chat -->
@endsection
