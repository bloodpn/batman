@extends('customer.layouts.main')

@section('title','Data Penumpang')

@section('content')
<br>
<div class="box box-solid">
  <div class="box-body">
    <div class="progress">
        <div class="progress-bar bg-success" role="progressbar" style="width: 20%; height: 40px;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><h6>Pilih Jadwal</h6></div>
        <div class="progress-bar bg-success" role="progressbar" style="width: 20%; height: 40px;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><h6>Informasi Penumpang</h6></div>
        <div class="progress-bar bg-success" role="progressbar" style="width: 20%; height: 40px;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><h6>Pilih Tempat Duduk</h6></div>
        <div class="progress-bar bg-success" role="progressbar" style="width: 20%; height: 40px;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><h6>Pembayaran</h6></div>
        <div class="progress-bar bg-secondary" role="progressbar" style="width: 20%; height: 40px;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><h6>Selesai</h6></div>
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

<div class="box box-primary box-solid direct-chat direct-chat-primary">
  <div class="box-header">
    <h3 class="box-title">Pilih Metode Pembayaran</h3>
  </div>
  <div class="box-body">
    <br>
    <div class="row">
      <div class="col-6">
        <table class="table table-striped">
          <tr>
            <td class="text-left col-6">Harga Tiket</td>
            <td></td>
          </tr>
          <tr>
            <td class="text-left col-6">Diskon</td>
            <td></td>
          </tr>
          <tr>
            <td class="text-left col-6">Total Biaya</td>
            <td></td>
          </tr>
        </table>
      </div>
      <div class="col-6">
        <form class="form-inline">
          <div class="form-group mx-sm-3">
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Kode Voucher">
          </div>
          <button type="submit" class="btn btn-primary">Validasi</button>
        </form>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3">
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
            ATM / Internet Banking
          </label>
        </div>
      </div>
      <div class="col-md-3">
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
            Option two can be something el
          </label>
        </div>
      </div>
      <div class="col-md-3">
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
            Option two can be something el
          </label>
        </div>
      </div>
      <div class="col-md-3">
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
            Option two can be something el
          </label>
        </div>
      </div>
    </div>
  </div>
  <div class="box-footer">
    <div class="row">
      <div class="col-6">
        <a href="{{ url('/pilihkursi') }}" class="btn btn-primary btn-flat"><i class="fa fa-angle-double-left"></i>&nbsp;&nbsp; Kembali</a>
      </div>
      <div class="col-6" align="right">
        <a href="{{ url('/invoice') }}" class="btn btn-primary btn-flat">Lanjut &nbsp;&nbsp;<i class="fa fa-angle-double-right"></i></a>
      </div>
    </div>
  </div>
</div>
@endsection
