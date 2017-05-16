@extends('customer.default')

@section('title','Pilih Tempat Duduk')

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
      </div>
    </div>
   <hr>
  <div class="row ">
     <div class="col-sm-2 pull-right">
     <h4><i class="fa fa-money"></i> Rp. 90.000</h4>
     </div>
     <div class="col-sm-1 pull-right">
     <h4><i class="fa fa-user"></i> 1</h4>
     </div>
   </div>
  </div>
  <div class="box-body">
    <div class="col-sm-12" >
        <!-- <div class="box" style="margin-left: 3px;"> -->
            <table class="table table-striped table-bordered">
              <tr>
                <th class="col-md-2">Pemesan</th>
                <th class="col-md-2">Telepon</th>
                <th class="col-md-2">Email</th>
                <th class="col-md-5">Alamat</th>
              </tr>
              <tr>
                <td class="col-md-2">Adam</td>
                <td class="col-md-2">0899876421</td>
                <td class="col-md-2">adam21@mail.com</td>
                <td class="col-md-5">Jl. sukabumi 2 no 19</td>
              </tr>
            </table>
        <!-- </div> -->
      </div>
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
      <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
        <span class="sr-only">40% Complete (success)</span>
      </div>
    </div>
  </div>
</div>

<div class="box box-primary box-solid direct-chat direct-chat-primary">
  <div class="box-header">
    <a href="/"><i class="fa fa-home fa-lg"></a></i> | 
    <h3 class="box-title">Pilih Tempat Duduk</h3>
    <!-- <div class="box-tools pull-right">
      <button class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle">Bantuan</button>
    </div> -->
  </div><!-- /.box-header -->
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
            <input type="checkbox" id="inputOne" />
            <label for="5"></label>
          </div>
          <div class="col-md-4">
            <input type="checkbox" id="inputOne" />
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