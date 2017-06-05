@extends('customer.layouts.main')

@section('title','Pilih Tempat Duduk')

@section('content')
<br>
<div class="box box-solid">
  <div class="box-body">
    <div class="progress">
        <div class="progress-bar bg-success" role="progressbar" style="width: 20%; height: 40px;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><h6>Pilih Jadwal</h6></div>
        <div class="progress-bar bg-success" role="progressbar" style="width: 20%; height: 40px;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><h6>Informasi Penumpang</h6></div>
        <div class="progress-bar bg-success" role="progressbar" style="width: 20%; height: 40px;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><h6>Pilih Tempat Duduk</h6></div>
        <div class="progress-bar bg-secondary" role="progressbar" style="width: 20%; height: 40px;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><h6>Pembayaran</h6></div>
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
  <div class="box-body">
    <table class="table table-bordered">
      <tr>
        <td class="col-2">Pemesan</td>
        <td class="col-2">Telepon</td>
        <td class="col-2">Email</td>
        <td class="col-6">Alamat</td>
      </tr>
      <tr>
        <td class="col-2">Adam</td>
        <td class="col-2">0899876421</td>
        <td class="col-2">adam21@mail.com</td>
        <td class="col-6">Jl. sukabumi 2 no 19</td>
      </tr>
    </table>
  </div>
</div>

<div class="box box-primary box-solid direct-chat direct-chat-primary">
  <div class="box-header">
    <h3 class="box-title">Pilih Tempat Duduk</h3>
    <!-- <div class="box-tools pull-right">
      <button class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle">Bantuan</button>
    </div> -->
  </div><!-- /.box-header -->
  <div class="box-body">
    <br>
    <div class="row" align="center">
      <div class="col-4 offset-4">
        <div class="row">
          <div class="col-4">
           <input type="checkbox" class="input_class_checkbox_cs" value="1">
            <label>1</label>
          </div>
          <div class="col-4">
            <input type="checkbox" class="input_class_checkbox_cs" value="2">
            <label>2</label>
          </div>
          <div class="col-4">
            <b class="kursi"></b>
           <label>Supir</label>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
           <input type="checkbox" class="input_class_checkbox_cs" value="1">
           <label>3</label>
          </div>
          <div class="col-4">
            <input type="checkbox" class="input_class_checkbox_cs" value="2">
            <label>4</label>
          </div>
          <div class="col-4">
           <input type="checkbox" class="input_class_checkbox_cs" value="3">
           <label>5</label>
          </div>
        </div>
      <div class="row">
          <div class="col-4">
           <input type="checkbox" class="input_class_checkbox_cs" value="1">
           <label>6</label>
          </div>
          <div class="col-4">
            <input type="checkbox" class="input_class_checkbox_cs" value="2" disabled="">
            <label>7</label>
          </div>
          <div class="col-4">
           <input type="checkbox" class="input_class_checkbox_cs" value="3">
           <label>8</label>
          </div>
        </div>
      <div class="row">
          <div class="col-4">
           <input type="checkbox" class="input_class_checkbox_cs" value="1">
           <label>9</label>
          </div>
          <div class="col-4">
            <input type="checkbox" class="input_class_checkbox_cs" value="2">
            <label>10</label>
          </div>
          <div class="col-4">
           <input type="checkbox" class="input_class_checkbox_cs" value="3">
           <label>11</label>
          </div>
      </div>
    </div>
  </div><!--/.direct-chat -->
  <div class="box-footer">
    <div class="row">
      <div class="col-6">
        <a href="{{ url('/datapenumpang') }}" class="btn btn-primary btn-flat"><i class="fa fa-angle-double-left"></i>&nbsp;&nbsp; Kembali</a>
      </div>
      <div class="col-6" align="right">
        <a href="{{ url('/metodepembayaran') }}" class="btn btn-primary btn-flat">Lanjut &nbsp;&nbsp;<i class="fa fa-angle-double-right"></i></a>
      </div>
    </div>
  </div><!-- /.box-footer-->

</div>
@endsection
