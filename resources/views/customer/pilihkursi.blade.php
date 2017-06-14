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
  <div class="box-body">
    <table class="table table-bordered">
      <tr>
        <td >Pemesan</td>
        <td >Telepon</td>
        <td >Email</td>
      </tr>
      <tr>
        <td >{{ Session::get('nama_pemesan')}}</td>
        <td >{{ Session::get('phone')}}</td>
        <td >{{ Session::get('email')}}</td>
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
            <input type="checkbox" class="input_class_checkbox_cs" value="{{ $seat->one }}">
            <label>1</label>
          </div>
          <div class="col-4">
            <input type="checkbox" class="input_class_checkbox_cs" value="{{ $seat->zero }}">
            <label>0</label>
          </div>
          <div class="col-4">
            <b class="kursi"></b>
            <label>Supir</label>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <input type="checkbox" class="input_class_checkbox_cs" value="{{ $seat->two }}">
            <label>2</label>
          </div>
          <div class="col-4">
            <input type="checkbox" class="input_class_checkbox_cs" value="{{ $seat->three }}">
            <label>3</label>
          </div>
          <div class="col-4">
            <input type="checkbox" class="input_class_checkbox_cs" value="{{ $seat->four }}">
            <label>4</label>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <input type="checkbox" class="input_class_checkbox_cs" value="{{ $seat->five }}">
            <label>5</label>
          </div>
          <div class="col-4">
            <input type="checkbox" class="input_class_checkbox_cs" value="{{ $seat->six }}">
            <label>6</label>
          </div>
          <div class="col-4">
            <input type="checkbox" class="input_class_checkbox_cs" value="{{ $seat->seven }}">
            <label>7</label>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <input type="checkbox" class="input_class_checkbox_cs" value="{{ $seat->eight }}">
            <label>8</label>
          </div>
          <div class="col-4">
            <input type="checkbox" class="input_class_checkbox_cs" value="{{ $seat->nine }}">
            <label>9</label>
          </div>
          <div class="col-4">
            <input type="checkbox" class="input_class_checkbox_cs" value="{{ $seat->ten }}">
            <label>10</label>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <input type="checkbox" class="input_class_checkbox_cs" value="{{ $seat->eleven }}">
            <label>11</label>
          </div>
          <div class="col-4">
            <input type="checkbox" class="input_class_checkbox_cs" value="{{ $seat->twelve }}">
            <label>12</label>
          </div>
          <div class="col-4">
            <input type="checkbox" class="input_class_checkbox_cs" value="{{ $seat->thirteen }}">
            <label>13</label>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <input type="checkbox" class="input_class_checkbox_cs" value="" >
            <input type="hidden" name="seat" value="{{ $seat->fourteen }}" class="seat">
            <label>14</label>
          </div>
          <div class="col-4">
            <input type="checkbox" class="input_class_checkbox_cs" value="{{ $seat->fifteen }}">
            <input type="hidden" name="seat" value="{{ $seat->fifteen }}" class="seat">
            <label>15</label>
          </div>
          <div class="col-4">
            <input type="checkbox" class="input_class_checkbox_cs" value="{{ $seat->sixteen }}">
            <input type="hidden" name="seat" value="{{ $seat->sixteen }}" class="seat">
            <label>16</label>
          </div>
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

<script type="text/javascript">

</script>
@endsection
