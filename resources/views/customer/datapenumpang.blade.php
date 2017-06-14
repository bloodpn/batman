@extends('customer.layouts.main')

@section('title','Data Penumpang')

@section('content')
<br>
<div class="box box-solid">
  <div class="box-body">
    <div class="progress">
        <div class="progress-bar bg-success" role="progressbar" style="width: 20%; height: 40px;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><h6>Pilih Jadwal</h6></div>
        <div class="progress-bar bg-success" role="progressbar" style="width: 20%; height: 40px;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><h6>Informasi Penumpang</h6></div>
        <div class="progress-bar bg-secondary" role="progressbar" style="width: 20%; height: 40px;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><h6>Pilih Tempat Duduk</h6></div>
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
        <i class="fa fa-calendar"></i> {{ Session::get('depart_date')}}<br>
        <i class="fa fa-clock-o"></i> {{ Session::get('time')}} WIB
      </h3>
    </div>
    <div class="col-3">
      <h3>
        <i class="fa fa-user"></i> {{ Session::get('person')}}
      </h3>
    </div>
    <div class="col-3">
      <h3>
        <i class="fa fa-money"></i> Rp. {{ Session::get('ticket')}}
      </h3>
    </div>
  </div>
</div>

<form method="post" action="/pilihkursi" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="box box-primary box-solid">
  <div class="box-header">
    <h3 class="box-title">Data Pemesan dan Penumpang</h3>
  </div><!-- /.box-header -->
  <div class="box-body">
    <div class="row">
      <div class="col-3">
        <div class="form-group">
          <label>Nama Pemesan</label>
          <input type="text" name="nama_pemesan" class="form-control" placeholder="Nama" id="nama_pemesan">
        </div>
      </div>
      <div class="col-3">
        <div class="form-group">
          <label>No. Telepon</label>
          <input type="text" name="phone" class="form-control" placeholder="No. Telepon">
        </div>
      </div>
      <div class="col-3">
        <div class="form-group">
          <label>Email</label>
          <input type="text" name="email" class="form-control" placeholder="Alamat Email">
        </div>
      </div>
      <div class="col-3">
        <br><br>
        <div class="form-group">
          <label class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="is_penumpang">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Pemesan adalah penumpang</span>
          </label>
        </div>
      </div>
    </div>
    @if(Session::get('person') == 1)
      <div class="row">
        <div class="col-3">
          <div class="form-group">
            <label>Penumpang 1</label>
            <input type="text" name="nama_penumpang_1" class="form-control" placeholder="Nama" id="nama_penumpang_1">
          </div>
        </div>
        <div class="col-3">
          <div class="form-group">
            <label>Penumpang 2</label>
            <input type="text" name="nama_penumpang_2" class="form-control" placeholder="Nama" readonly="">
          </div>
        </div>
        <div class="col-3">
          <div class="form-group">
            <label>Penumpang 3</label>
            <input type="text" name="nama_penumpang_3" class="form-control" placeholder="Nama" readonly="">
          </div>
        </div>
        <div class="col-3">
          <div class="form-group">
            <label>Penumpang 4</label>
            <input type="text" name="nama_penumpang_4" class="form-control" placeholder="Nama" readonly="">
          </div>
        </div>
      </div>
    @elseif (Session::get('person') == 2)
    <div class="row">
      <div class="col-3">
        <div class="form-group">
          <label>Penumpang 1</label>
          <input type="text" name="nama_penumpang_1" class="form-control" placeholder="Nama" id="nama_penumpang_1">
        </div>
      </div>
      <div class="col-3">
        <div class="form-group">
          <label>Penumpang 2</label>
          <input type="text" name="nama_penumpang_2" class="form-control" placeholder="Nama">
        </div>
      </div>
      <div class="col-3">
        <div class="form-group">
          <label>Penumpang 3</label>
          <input type="text" name="nama_penumpang_3" class="form-control" placeholder="Nama" readonly="">
        </div>
      </div>
      <div class="col-3">
        <div class="form-group">
          <label>Penumpang 4</label>
          <input type="text" name="nama_penumpang_4" class="form-control" placeholder="Nama" readonly="">
        </div>
      </div>
    </div>

    @elseif (Session::get('person') == 3)
    <div class="row">
      <div class="col-3">
        <div class="form-group">
          <label>Penumpang 1</label>
          <input type="text" name="nama_penumpang_1" class="form-control" placeholder="Nama" id="nama_penumpang_1">
        </div>
      </div>
      <div class="col-3">
        <div class="form-group">
          <label>Penumpang 2</label>
          <input type="text" name="nama_penumpang_2" class="form-control" placeholder="Nama" >
        </div>
      </div>
      <div class="col-3">
        <div class="form-group">
          <label>Penumpang 3</label>
          <input type="text" name="nama_penumpang_3" class="form-control" placeholder="Nama" >
        </div>
      </div>
      <div class="col-3">
        <div class="form-group">
          <label>Penumpang 4</label>
          <input type="text" name="nama_penumpang_4" class="form-control" placeholder="Nama" readonly="">
        </div>
      </div>
    </div>
    @elseif (Session::get('person') == 4)
    <div class="row">
      <div class="col-3">
        <div class="form-group">
          <label>Penumpang 1</label>
          <input type="text" name="nama_penumpang_1" class="form-control" placeholder="Nama" id="nama_penumpang_1">
        </div>
      </div>
      <div class="col-3">
        <div class="form-group">
          <label>Penumpang 2</label>
          <input type="text" name="nama_penumpang_2" class="form-control" placeholder="Nama" >
        </div>
      </div>
      <div class="col-3">
        <div class="form-group">
          <label>Penumpang 3</label>
          <input type="text" name="nama_penumpang_3" class="form-control" placeholder="Nama" >
        </div>
      </div>
      <div class="col-3">
        <div class="form-group">
          <label>Penumpang 4</label>
          <input type="text" name="nama_penumpang_4" class="form-control" placeholder="Nama" >
        </div>
      </div>
    </div>
    @endif

  </div>
  <div class="box-footer">
    <div class="row">
      <div class="col-6">
        <a href="{{ url('/backpilihjadwal') }}" class="btn btn-primary btn-flat"><i class="fa fa-angle-double-left"></i>&nbsp;&nbsp; Kembali </a>
      </div>
      <div class="col-6" align="right">
        <button class="btn btn-primary btn-flat" type="submit">Lanjut &nbsp;&nbsp;<i class="fa fa-angle-double-right"></i></button>
      </div>
    </div>
  </div>
  </form>
</div>
@endsection
