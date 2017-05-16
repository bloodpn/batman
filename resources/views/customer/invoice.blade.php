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
        <h4><i class="fa fa-calendar"></i> 5/10/2017</h4>
        <h4><i class="fa fa-clock-o"></i> 20.00 WIB</h4>
        <!-- <h4><i class="fa fa-money"></i> Rp. 90.000</h4> -->
      </div>
    </div>
  </div><!-- /.box-header -->
  <div class="box-body">
   
  </div>

  <div class="box-footer">
    <div class="row">
      <div class="col-md-5">
        <div class="row">
          <div class="col-lg-6">
            <h4>Pilih Jadwal</h4>
          </div>
          <div class="col-lg-6">
            <h4>Isi Data</h4>
          </div>
        </div>
      </div>
      <div class="col-md-5">
        <div class="row">
          <div class="col-lg-6">
            <h4>Tempat Duduk</h4>
          </div>
          <div class="col-lg-6">
            <h4>Metode Pembayaran</h4>
          </div>
        </div>
      </div>
      <div class="col-md-2">
        <h4>Selesai</h4>
      </div>
    </div>
    <div class="progress">
      <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 98%">
      </div>
    </div>
  </div>
</div>

<div class="box">
 <!--  <div class="box-header">
    <h3 class="box-title">Pilih Metode Pembayaran</h3> 
  </div> -->
  <div class="box-body">
    <br>
    <div class="row">
      <div class="col-sm-12" >
        <!-- <div class="box" style="margin-left: 3px;"> -->
            <table class="table table-striped table-bordered">
              <tr>
                <th class="col-md-2">Pemesan</th>
                <th class="col-md-2">Telepon</th>
                <th class="col-md-2">Email</th>
                <th class="col-md-5">Alamat</th>
              </tr>
              <tr>
                <td class="col-md-2">Adam</td>
                <td class="col-md-2">0899876421</td>
                <td class="col-md-2">adam21@mail.com</td>
                <td class="col-md-5">Jl. sukabumi 2 no 19</td>
              </tr>
            </table>
        <!-- </div> -->
      </div>
    </div>

    <div class="row">
      <div class="col-sm-4" >
            <table class="table table-striped table-bordered">
              <tr>
                <td class="col-md-2">Penumpang</td>
                <td class="col-md-10">Adam</td>
              </tr>
            </table>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12" >
          <table class="table table-striped table-bordered">
              <tr>
                <th class="col-md-3">Biaya</th>
                <th class="col-md-3">Diskon</th>
                <th class="col-md-3">Total Bayar</th>
                <th class="col-md-3">Metode Pembayaran</th>
              </tr>
              <tr>
                <td class="col-md-3">Rp. 90.000</td>
                <td class="col-md-3">Rp. 5.000</td>
                <td class="col-md-3">Rp. 85.000</td>
                <td class="col-md-3">ATM / Internet Banking</td>
              </tr>
            </table>
      </div>
    </div>
    
  </div><!--/.direct-chat -->
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