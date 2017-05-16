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
      <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 22%">
        <span class="sr-only">40% Complete (success)</span>
      </div>
    </div>
  </div>
</div>

<div class="box box-primary box-solid">
  <div class="box-header">
    <a href="/"><i class="fa fa-home fa-lg"></a></i> | 
    <h3 class="box-title">Data Pemesan dan Penumpang</h3>
    <div class="box-tools pull-right">
      <button class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle">Bantuan</button>
    </div>
  </div><!-- /.box-header -->
  <div class="box-body">
    <br>
      <div class="row"  style="margin-left: 0px;">
        <div class="col-sm-3">
          <div class="form-group">
            <label>Nama Pemesan</label>
            <input type="text" name="q" class="form-control" placeholder="Nama">
          </div>
        </div>
        <div class="col-sm-2">
          <div class="form-group">
            <label>No. Telepon</label>
            <input type="text" name="q" class="form-control" placeholder="No. Telepon">
          </div>
        </div>
        <div class="col-lg-3">
          <div class="form-group">
            <label>Email</label>
            <input type="text" name="q" class="form-control" placeholder="Alamat Email">
          </div>
        </div>
        <div class="col-lg-3">
          <div class="form-group"><br>
            <label class="control-sidebar-subheading">
              Pemesan Adalah Penumpang
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
        </div>
      </div>

      <div class="row"  style="margin-left: 0px;">
        <div class="col-sm-3">
          <div class="form-group">
            <label>Penumpang 1</label>
            <input type="text" name="q" class="form-control" placeholder="Nama">
          </div>
        </div>
      </div>
         
  </div><!--/.direct-chat -->
  <div class="box-footer">
    <div class="row">
      <div class="col-sm-2">
        <div class="input-group">
            <!-- <button type="button" class="btn btn-primary btn-flat">Lanjut</button> -->
            <a href="{{ url('/pilihjadwal') }}" class="btn btn-primary btn-flat">Kembali</a>
        </div>
      </div>
      <div class="col-sm-2 pull-right">
        <div class="input-group pull-right">
            <!-- <button type="button" class="btn btn-primary btn-flat">Lanjut</button> -->
            <a href="{{ url('/pilihkursi') }}" class="btn btn-primary btn-flat">Lanjut</a>
        </div>
      </div>
    </div>
  </div><!-- /.box-footer-->

</div>
@endsection