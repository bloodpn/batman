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
      <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 98%">
        <!-- <span class="sr-only">98% Complete (success)</span> -->
      </div>
    </div>
  </div>
</div>
@endsection