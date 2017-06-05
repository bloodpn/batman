@extends('customer.layouts.main')

@section('title','Tiket')

@section('content')
<br>
<div class="box box-solid">
  <div class="box-body row">
    <div class="col-3">
      <h3>Keberangkatan<br>
      Tujuan</h3>
    </div>
    <div class="col-3">
      <h3>
        <i class="fa fa-calendar"></i> 5/10/2017<br>
        <i class="fa fa-clock-o"></i> 20.00 WIB
      </h3>
    </div>
    <div class="col-3">
      <h3>
        <i class="fa fa-user"></i> 1
      </h3>
    </div>
    <div class="col-3">
      <h3>
        <i class="fa fa-money"></i> Rp. 90.000
      </h3>
    </div>
  </div>

  <div class="box-body">
   <div class="row">
   	<div class="col-6" >
      <table class="table table-striped table-bordered">
        <tr>
        	<th>No. Pemesanan</th>
        	<th>2017102111</th>
        </tr>
      </table>
    </div>
    <div class="col-6" align="right">
      <a class="btn btn-success" data-toggle="collapse" data-parent="#accordion" href="#ubah">Ubah Keberangkatan</a>
    </div>
   </div>
    <div class="row">
      <div class="col-6" >
        <!-- <div class="box" style="margin-left: 3px;"> -->
            <table class="table table-striped table-bordered">
              <tr>
                <td class="col-2"><b>Pemesan</b></td>
                <td class="col-10">Adam</td>
              </tr>
              <tr>
                <td class="col-2"><b>Telepon</b></td>
                <td class="col-10">0890908</td>
              </tr>
              <tr>
                <td class="col-2"><b>Email</b></td>
                <td class="col-10">adam92@mail.com</td>
              </tr>
              <tr>
                <td class="col-2"><b>Alamat</b></td>
                <td class="col-10">jl. kemana saja no 19</td>
              </tr>
            </table>
        <!-- </div> -->
      </div>
      <div class="col-6">
        <div id="ubah" class="panel-collapse collapse">
          <form>
          <div class="row">
              <div class="col-5">
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
            <div class="col-5">
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
                <label>&nbsp;</label>
                <a href="ubahjadwal" class="btn btn-primary">Cari</a>
              </div>
            </div>
          </div>
        </div>
        </form>
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
      </div>
    </div>

    <div class="row">
      <div class="col-12" >
          <table class="table table-striped table-bordered">
              <tr>
                <th class="col-2 text-center">Biaya</th>
                <th class="col-2 text-center">Diskon</th>
                <th class="col-2 text-center">Total Bayar</th>
                <th class="col-3 text-center">Metode Pembayaran</th>
                <th class="col-3 text-center">Status Pembayaran</th>
              </tr>
              <tr>
                <td class="col-2">Rp. 90.000</td>
                <td class="col-2">Rp. 5.000</td>
                <td class="col-2">Rp. 85.000</td>
                <td class="col-3">ATM / Internet Banking</td>
                <td class="col-3">Lunas</td>
              </tr>
            </table>
      </div>
    </div>
  </div>

  <div class="box-footer">
    <div class="row">
      <div class="col-12" align="right">
        <a href="carijadwal" class="btn btn-primary btn-flat">Selesai</a>
      </div>
    </div>
  </div>
</div>

@endsection
