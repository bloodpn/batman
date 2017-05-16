@extends('customer.default')

@section('title','Data Penumpang')

@section('content')
<div class="box box-solid">
  <div class="box-header">
     <div class="row">
      <div class="col-xs-10">
        <h1>Asal - Tujuan</h1>
      </div>
      <div class="col-xs-2">
      <br>
        <h4><i class="fa fa-calendar"></i> 5/10/2017</h4>
        <!-- <h4><i class="fa fa-money"></i> Rp. 90.000</h4> -->
      </div>
    </div>
  </div><!-- /.box-header -->
   <hr>
  <div class="box-body">
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
              <!-- <tr>
              	<th>Penumpang</th>
              	<th>Tempat duduk</th>
              </tr> -->
              <tr>
              	<td class="col-md-4"><b>Penumpang</b></td>
              	<td>Adam</td>
              </tr>
            </table>
        <!-- </div> -->
      </div>
    </div>
  </div>
</div>

<div class="box box-primary">
    <div class="row" style="margin-left: 0px;">
    	<div class="col-md-4">
    		<h4>
	          <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
	            Ubah Jadwal Keberangkatan
	          </a>
	        </h4>
    	</div>  
	</div>

  	<div id="collapseThree" class="panel-collapse collapse">
      	<div class="row"  style="margin-left: 0px;">
            <div class="col-lg-3">
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
            <div class="col-lg-3">
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
            <div class="col-sm-1">
            <br/>
              <button type="button" class="btn btn-primary btn-flat">Cari</button>
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