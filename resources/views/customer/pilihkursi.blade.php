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
        <i class="fa fa-user"></i> <strong id="person">{{ Session::get('person')}}</strong>
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
<form method="post" action="pembayaran">

{{ csrf_field() }}
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
            <input type="checkbox" class="input_class_checkbox_cs" value="1" id="one" name="seat[]">
            <label id="label_one">1</label>
            <label id="label_one_val">{{ $seat->one }}</label>
          </div>
          <div class="col-4">
            <input type="checkbox" class="input_class_checkbox_cs" value="0" id="zero" name="seat[]">
            <label id="label_zero">0</label>
            <label id="label_zero_val">{{ $seat->zero }}</label>
          </div>
          <div class="col-4">
            <b class="kursi"></b>
            <label>Supir</label>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <input type="checkbox" class="input_class_checkbox_cs" value="2" id="two" name="seat[]">
            <label id="label_two">2</label>
            <label id="label_two_val">{{ $seat->two }}</label>
          </div>
          <div class="col-4">
            <input type="checkbox" class="input_class_checkbox_cs" value="3" id="three" name="seat[]">
            <label id="label_three">3</label>
            <label id="label_three_val">{{ $seat->three }}</label>
          </div>
          <div class="col-4">
            <input type="checkbox" class="input_class_checkbox_cs" value="4" id="four" name="seat[]">
            <label id="label_four">4</label>
            <label id="label_four_val">{{ $seat->four }}</label>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <input type="checkbox" class="input_class_checkbox_cs" value="5" id="five" name="seat[]">
            <label id="label_five">5</label>
            <label id="label_five_val">{{ $seat->five }}</label>
          </div>
          <div class="col-4">
            <input type="checkbox" class="input_class_checkbox_cs" value="6" id="six" name="seat[]">
            <label id="label_six">6</label>
            <label id="label_six_val">{{ $seat->six }}</label>
          </div>
          <div class="col-4">
            <input type="checkbox" class="input_class_checkbox_cs" value="7" id="seven" name="seat[]">
            <label id="label_seven">7</label>
            <label id="label_seven_val">{{ $seat->seven }}</label>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <input type="checkbox" class="input_class_checkbox_cs" value="8" id="eight" name="seat[]">
            <label id="label_eight">8</label>
            <label id="label_eight_val">{{ $seat->eight }}</label>
          </div>
          <div class="col-4">
            <input type="checkbox" class="input_class_checkbox_cs" value="9" id="nine" name="seat[]">
            <label id="label_nine">9</label>
            <label id="label_nine_val">{{ $seat->nine }}</label>
          </div>
          <div class="col-4">
            <input type="checkbox" class="input_class_checkbox_cs" value="10" id="ten" name="seat[]">
            <label id="label_ten">10</label>
            <label id="label_ten_val">{{ $seat->ten }}</label>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <input type="checkbox" class="input_class_checkbox_cs" value="11" id="eleven" name="seat[]">
            <label id="label_eleven">11</label>
            <label id="label_eleven_val">{{ $seat->eleven }}</label>
          </div>
          <div class="col-4">
            <input type="checkbox" class="input_class_checkbox_cs" value="12" id="twelve" name="seat[]">
            <label id="label_twelve">12</label>
            <label id="label_twelve_val">{{ $seat->twelve }}</label>
          </div>
          <div class="col-4">
            <input type="checkbox" class="input_class_checkbox_cs" value="13" id="thirteen" name="seat[]">
            <label id="label_thirteen">13</label>
            <label id="label_thirteen_val">{{ $seat->thirteen }}</label>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <input type="checkbox" class="input_class_checkbox_cs" value="14" id="fourteen" name="seat[]">
            <label id="label_fourteen">14</label>
            <label id="label_fourteen_val">{{ $seat->fourteen }}</label>
          </div>
          <div class="col-4">
            <input type="checkbox" class="input_class_checkbox_cs" value="15" id="fifteen" name="seat[]">
            <label id="label_fifteen">15</label>
            <label id="label_fifteen_val">{{ $seat->fifteen }}</label>
          </div>
          <div class="col-4">
            <input type="checkbox" class="input_class_checkbox_cs" value="16" id="sixteen" name="seat[]">
            <label id="label_sixteen">16</label>
            <label id="label_sixteen_val">{{ $seat->sixteen }}</label>
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
        <button class="btn btn-primary btn-flat" type="submit">Lanjut &nbsp;&nbsp;<i class="fa fa-angle-double-right"></i></button>
      </div>
    </div>
  </div><!-- /.box-footer-->
</div>
</form>

<script type="text/javascript">

</script>
@endsection
