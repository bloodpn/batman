@extends('customer.layouts.main')

@section('title','Booking')

@section('content')
<form action="pilihjadwal" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="main">
  <div class="box box-primary box-solid direct-chat-primary">
    <div class="box-header">
      <i class="fa fa-ticket" aria-hidden="true"></i> Cari Tiket
      <div class="box-tools pull-right">
        Bantuan
      </div>
    </div><!-- /.box-header -->
    <div class="box-body">
     <div class="row">
       <div class="col-5">
         <div class="form-group">
            <label>Keberangkatan</label>
            <select class="form-control" style="width: 100%;" name="departure" id="departure1">
              @foreach($counter as $count)
                <option value="{{ $count->id }}">{{ $count->name }}</option>
              @endforeach
            </select>
          </div>
       </div>
        <div class="col-4">
         <div class="form-group">
            <label>Tanggal Keberangkatan</label>
            <div class="input-group date">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
              <input type="text" class="form-control pull-right" id="tgl_berangkat" placeholder="Tanggal Berangkat" name="depart_date">
            </div>
          </div>
       </div>
       <div class="col-3">
          <br>
          <div class="form-group">
            <label class="custom-control custom-radio">
              <input id="radio1" name="stats" type="radio" class="custom-control-input sj" checked="checked" onchange="sj()" value="sk">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description">Sekali Jalan</span>
            </label>
            <label class="custom-control custom-radio">
              <input id="radio2" name="stats" type="radio" class="custom-control-input pp" onchange="pp()" value="pp">
              <span class="custom-control-indicator"></span>
              <span class="custom-control-description">Pulang Pergi</span>
            </label>
          </div>
       </div>
     </div>
     <div class="row">
       <div class="col-5">
         <div class="form-group">
            <label>Tujuan</label>
            <select class="form-control" style="width: 100%;" name="destination" id="destination1">
              <option>Pilih Tujuan</option>
            </select>
          </div>
       </div>
        <div class="col-4">
         <div class="form-group tgl" id="tgl1" style="display: none;">
            <label>Tanggal Kembali</label>
            <div class="input-group date">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
              <input type="text" class="form-control pull-right" id="tgl_kembali" placeholder="Tanggal Kembali" name="round_trip_date">
            </div>
          </div>
        </div>
        <div class="col-2">
          <label>Penumpang</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-user"></i></span>
            <select class="form-control" name="person">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
          </div>
       </div>
     </div>
    </div><!-- /.box-body -->
    <div class="box-footer">
      <div class="row">
        <div class="col-12" align="right">
          <button class="btn btn-primary btn-flat" type="submit"> Lanjut &nbsp;&nbsp;<i class="fa fa-angle-double-right"></i></button>
        </div>
      </div>
    </div><!-- /.box-footer-->
  </div><!--/.direct-chat -->
</div>
</form>

<script type="text/javascript">

</script>
@endsection
