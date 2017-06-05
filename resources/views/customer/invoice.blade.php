@extends('customer.layouts.main')

@section('title','Invoice')

@section('content')
<br>
<div class="box box-solid">
  <div class="box-body">
    <div class="progress">
        <div class="progress-bar bg-success" role="progressbar" style="width: 20%; height: 40px;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><h6>Pilih Jadwal</h6></div>
        <div class="progress-bar bg-success" role="progressbar" style="width: 20%; height: 40px;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><h6>Informasi Penumpang</h6></div>
        <div class="progress-bar bg-success" role="progressbar" style="width: 20%; height: 40px;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><h6>Pilih Tempat Duduk</h6></div>
        <div class="progress-bar bg-success" role="progressbar" style="width: 20%; height: 40px;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><h6>Pembayaran</h6></div>
        <div class="progress-bar bg-success" role="progressbar" style="width: 20%; height: 40px;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><h6>Selesai</h6></div>
    </div>
  </div>
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
</div>

<div class="box">
  <div class="box-body">
    <table class="table table-striped table-bordered">
      <tr>
        <th class="col-2">Pemesan</th>
        <th class="col-2">Telepon</th>
        <th class="col-2">Email</th>
        <th class="col-5">Alamat</th>
      </tr>
      <tr>
        <td class="col-2">Adam</td>
        <td class="col-2">0899876421</td>
        <td class="col-2">adam21@mail.com</td>
        <td class="col-5">Jl. sukabumi 2 no 19</td>
      </tr>
    </table>
    <br>
    <div class="row">
      <div class="col-4" >
          <table class="table table-striped table-bordered">
            <tr>
              <td class="col-2">Penumpang</td>
              <td class="col-10">Adam</td>
            </tr>
          </table>
      </div>
    </div>
    <table class="table table-striped table-bordered">
      <tr>
        <th class="col-3">Biaya</th>
        <th class="col-3">Diskon</th>
        <th class="col-3">Total Bayar</th>
        <th class="col-3">Metode Pembayaran</th>
      </tr>
      <tr>
        <td class="col-3">Rp. 90.000</td>
        <td class="col-3">Rp. 5.000</td>
        <td class="col-3">Rp. 85.000</td>
        <td class="col-3">ATM / Internet Banking</td>
      </tr>
    </table>
  </div>
  <div class="box-footer">
    <div class="row">
      <div class="col-12" align="right">
        <a href="carijadwal" class="btn btn-primary btn-flat">Selesai &nbsp;&nbsp;<i class="fa fa-angle-double-right"></i></a>
      </div>
    </div>
  </div>
</div>
@endsection
