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
      <br>
        <h4><i class="fa fa-calendar"></i> 5/10/2017</h4>
        <!-- <h4><i class="fa fa-money"></i> Rp. 90.000</h4> -->
      </div>
    </div>
  </div><!-- /.box-header -->
   <hr>
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
  <div class="box-body text-center">
  <br>
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="row">
          <div class="col-md-4">
            <input type='checkbox' name='thing' value='valuable' id="1"/>
            <label for="1"></label>
          </div>
          <div class="col-md-4">
            <input type="checkbox" id="2" />
            <label for="2"></label>
          </div>
          <div class="col-md-4">
            <input type="checkbox" id="3" />
            <label for="3"></label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <input type='checkbox' name='thing' value='valuable' id="4"/>
            <label for="4"></label>
          </div>
          <div class="col-md-4">
            <input type="checkbox" id="5" />
            <label for="5"></label>
          </div>
          <div class="col-md-4">
            <input type="checkbox" id="6" />
            <label for="6"></label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <input type='checkbox' name='thing' value='valuable' id="thing"/>
            <label for="7"></label>
          </div>
          <div class="col-md-4">
            <input type="checkbox" id="inputOne" />
            <label for="8"></label>
          </div>
          <div class="col-md-4">
            <input type="checkbox" id="inputOne" />
            <label for="9"></label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <input type='checkbox' name='thing' value='valuable' id="thing"/>
            <label for="10"></label>
          </div>
          <div class="col-md-4">
            <input type="checkbox" id="inputOne" />
            <label for="11"></label>
          </div>
          <div class="col-md-4">
            <input type="checkbox" id="inputOne" />
            <label for="12"></label>
          </div>
        </div>
      </div>
    </div>
    
  </div><!--/.direct-chat -->
  <div class="box-footer">
    <div class="row">
      <div class="col-sm-2">
        <div class="input-group">
            <!-- <button type="button" class="btn btn-primary btn-flat">Lanjut</button> -->
            <a href="{{ url('/datapenumpang') }}" class="btn btn-primary btn-flat">Kembali</a>
        </div>
      </div>
      <div class="col-sm-2 pull-right">
        <div class="input-group pull-right">
            <!-- <button type="button" class="btn btn-primary btn-flat">Lanjut</button> -->
            <a href="{{ url('/metodepembayaran') }}" class="btn btn-primary btn-flat">Lanjut</a>
        </div>
      </div>
    </div>
  </div><!-- /.box-footer-->

</div>
@endsection