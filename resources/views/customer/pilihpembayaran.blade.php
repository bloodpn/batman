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
   <hr>
  <div class="row ">
     <div class="col-sm-2 pull-right">
     <h4><i class="fa fa-money"></i> Rp. 90.000</h4>
     </div>
     <div class="col-sm-1 pull-right">
     <h4><i class="fa fa-user"></i> 1</h4>
     </div>
   </div>
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
      <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
        <span class="sr-only">40% Complete (success)</span>
      </div>
    </div>
  </div>
</div>

<div class="box box-primary box-solid direct-chat direct-chat-primary">
  <div class="box-header">
    <h3 class="box-title">Pilih Metode Pembayaran</h3>
    <!-- <div class="box-tools pull-right">
      <button class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle">Bantuan</button>
    </div> -->
  </div><!-- /.box-header -->
  <div class="box-body">
  <br>
    <div class="row">
      <div class="col-sm-6" >
        <div class="box" style="margin-left: 10px;">
            <div class="box-body no-padding" >
              <table class="table table-striped table-bordered">
                <tr>
                  <td class="text-left col-sm-6">Harga Tiket</td>
                  <td></td>
                </tr>
                <tr>
                  <td class="text-left col-sm-6">Diskon</td>
                  <td></td>
                </tr>
                <tr>
                  <td class="text-left col-sm-6">Total Biaya</td>
                  <td></td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
      </div>

      <div class="col-sm-4">
        <div class="form-group">
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukan Kode Voucher">
        </div>
      </div>
      <div class="col-sm-2">
         <button type="button" class="btn btn-primary .btn-xs">validasi</button>
      </div>
    </div>

    <div class="row" style="margin-left: 10px;">
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
    
  </div><!--/.direct-chat -->
  <div class="box-footer">
    <div class="row">
      <div class="col-sm-2">
        <div class="input-group">
            <!-- <button type="button" class="btn btn-primary btn-flat">Lanjut</button> -->
            <a href="{{ url('/pilihkursi') }}" class="btn btn-primary btn-flat">Kembali</a>
        </div>
      </div>
      <div class="col-sm-2 pull-right">
        <div class="input-group pull-right">
            <!-- <button type="button" class="btn btn-primary btn-flat">Lanjut</button> -->
            <a href="{{ url('/invoice') }}" class="btn btn-primary btn-flat">Lanjut</a>
        </div>
      </div>
    </div>
  </div><!-- /.box-footer-->

</div>
@endsection