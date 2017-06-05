@extends('customer.layouts.main')

@section('title','Ubah Tempat Duduk')

@section('content')
<br>
<div class="box box-solid">
  <div class="box-body row">
    <div class="col-6">
      <h3>Keberangkatan<br>
      Tujuan</h3>
    </div>
    <div class="col-6">
      <h3>
        <i class="fa fa-calendar"></i> 5/10/2017<br>
      </h3>
    </div>
  </div>
  <div class="box-body">
    <div class="row">
      <div class="col-sm-6" >
        <!-- <div class="box" style="margin-left: 3px;"> -->
            <table class="table table-striped table-bordered">
              <tr>
                <td class="col-md-2"><b>Pemesan</b></td>
                <td class="col-md-10">Adam</td>
              </tr>
              <tr>
                <td class="col-md-2"><b>Telepon</b></td>
                <td class="col-md-10">0890908</td>
              </tr>
              <tr>
                <td class="col-md-2"><b>Email</b></td>
                <td class="col-md-10">adam92@mail.com</td>
              </tr>
              <tr>
                <td class="col-md-2"><b>Alamat</b></td>
                <td class="col-md-10">jl. kemana saja no 19</td>
              </tr>
            </table>
        <!-- </div> -->
      </div>
       <div class="col-sm-6" >
        <!-- <div class="box" style="margin-left: 3px;"> -->
            <table class="table table-striped table-bordered">
              <!-- <tr>
              	<th>Penumpang</th>
              	<th>Tempat duduk</th>
              </tr> -->
              <tr>
              	<td class="col-md-4"><b>Penumpang</b></td>
              	<td>Adam</td>
              </tr>
            </table>
        <!-- </div> -->
      </div>
    </div>
  </div>
</div>

<div class="box box-solid">
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
  </div>

  <div class="box-footer">
    <div class="row">
      <div class="col-6">
        <a href="{{ url('/ubahjadwal') }}" class="btn btn-primary btn-flat"><i class="fa fa-angle-double-left"></i>&nbsp;&nbsp; Kembali</a>
      </div>
      <div class="col-6" align="right">
        <a href="{{ url('/cektiket') }}" class="btn btn-primary btn-flat">Lanjut &nbsp;&nbsp;<i class="fa fa-angle-double-right"></i></a>
      </div>
    </div>
  </div><!-- /.box-footer-->
</div>
@endsection
