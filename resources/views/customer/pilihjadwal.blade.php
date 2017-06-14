@extends('customer.layouts.main')

@section('title','Pilih Jadwal')

@section('content')
<div class="main">
  <div class="box box-primary box-solid direct-chat direct-chat-primary">
    <div class="box-header">
      <h3 class="box-title"></h3>
      <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="pull-right">
        Ubah Jadwal Keberangkatan Disini
      </a>
    </div><!-- /.box-header -->
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="box-body main">
       <div class="row">
         <div class="col-5">
           <div class="form-group">
              <label>Keberangkatan</label>
              <select class="form-control" style="width: 100%;" name="">
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
                <input type="text" class="form-control pull-right" id="tgl_berangkat" placeholder="Tanggal Berangkat">
              </div>
              <!-- /.input group -->
            </div>
         </div>
         <div class="col-3">
            <br>
            <div class="form-group">
              <label class="custom-control custom-radio">
                <input id="radio1" name="stats" type="radio" class="custom-control-input sj" checked="checked" onchange="sj()">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Sekali Jalan</span>
              </label>
              <label class="custom-control custom-radio">
                <input id="radio2" name="stats" type="radio" class="custom-control-input pp" onchange="pp()">
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
              <select class="form-control" style="width: 100%;">
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
                <input type="text" class="form-control pull-right" id="tgl_kembali" placeholder="Tanggal Kembali">
              </div>
            </div>
          </div>
          <div class="col-2">
            <label>Penumpang</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <select class="form-control">
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
            <a href="pilihjadwal" class="btn btn-primary btn-flat"> Cari Tiket</a>
          </div>
        </div>
      </div>
    </div>
    <div class="box-body">
      <div class="progress">
        <div class="progress-bar bg-success" role="progressbar" style="width: 20%; height: 40px;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><h6>Pilih Jadwal</h6></div>
        <div class="progress-bar bg-secondary" role="progressbar" style="width: 20%; height: 40px;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><h6>Informasi Penumpang</h6></div>
        <div class="progress-bar bg-secondary" role="progressbar" style="width: 20%; height: 40px;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><h6>Pilih Tempat Duduk</h6></div>
        <div class="progress-bar bg-secondary" role="progressbar" style="width: 20%; height: 40px;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><h6>Pembayaran</h6></div>
        <div class="progress-bar bg-secondary" role="progressbar" style="width: 20%; height: 40px;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><h6>Selesai</h6></div>
      </div>
      <table class="table table-striped">
        <tr>
          <th>Jam Keberangkatan</th>
          <th>Tersedia</th>
          <th>Harga</th>
          <th></th>
        </tr>
        @foreach($ticket as $tickets)
          <tr>
            <form action="/datapenumpang" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <td>
              {{ $tickets->time }} WIB
              <input type="hidden" name="time" value="{{ $tickets->time }}">
            </td>
            <td>
              {{ $tickets->jumlah }} Kursi
              <input type="hidden" name="available" value="{{ $tickets->jumlah }}">
            </td>
            <td>
              Rp.{{ $tickets->ticket }}
              <input type="hidden" name="price" value="{{ $tickets->ticket }}">
            </td>
            <td>
              <button class="btn btn-primary btn-flat" type="submit">Pilih</button>
              <input type="hidden" name="id_schedule" value="{{ $tickets->id_sche }}">
            </td>
            </form>
          </tr>
        @endforeach
      </table>
    </div>
  </div><!--/.direct-chat -->
</div>

@endsection
