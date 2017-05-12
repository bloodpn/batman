@extends('customer.default')

@section('title','booking')

@section('content')
<div class="box box-primary box-solid direct-chat direct-chat-primary">
        <div class="box-header">
          <a href="home"><i class="fa fa-home"></a></i>
          <h3 class="box-title">Cari Tiket</h3>
          <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle">Bantuan</button>
          </div>
        </div><!-- /.box-header -->
        <div class="box-body">
        <br>
         <div class="row"  style="margin-left: 0px;">
           <div class="col-lg-5">
             <div class="form-group">
                <label>Keberangkatan</label>
                <select class="form-control" style="width: 100%;">
                  <option>Pilih Keberangkatan</option>
                  <option>Alabama</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
              </div>
           </div>
            <div class="col-lg-4">
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
           <div class="col-lg-3">
           <br>
             <div class="form-group">
                <label>
                  Sekali Jalan
                  <input type="radio" name="r1" class="minimal" checked>
                </label>
                <label>
                  Pulang Pergi
                  <input type="radio" name="r1" class="minimal">
                </label>
              </div>
           </div>
         </div>
         <div class="row"  style="margin-left: 0px;">
           <div class="col-lg-5">
             <div class="form-group">
                <!-- <label>Tujuan</label> -->
                <select class="form-control" style="width: 100%;">
                  <option>Pilih Tujuan</option>
                  <option>Alabama</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
              </div>
           </div>
            <div class="col-sm-4">
             <div class="form-group">
                <!-- <label>Tanggal Kembali</label> -->
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="tgl_kembali" placeholder="Tanggal Kembali">
                </div>
                <!-- /.input group -->
              </div>
           </div>
           <div class="col-sm-2">
           <div class="input-group" >
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <select class="form-control">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                </select>
              </div>
           </div>
         </div>


          <!-- Contacts are loaded here -->
          <div class="direct-chat-contacts">
            <ul class="contacts-list">
              <li>
                <a href="#">
                  <img class="contacts-list-img" src="../dist/img/user1-128x128.jpg" alt="Contact Avatar">
                  <div class="contacts-list-info">
                    <span class="contacts-list-name">
                      Count Dracula
                      <small class="contacts-list-date pull-right">2/28/2015</small>
                    </span>
                    <span class="contacts-list-msg">How have you been? I was...</span>
                  </div><!-- /.contacts-list-info -->
                </a>
              </li><!-- End Contact Item -->
            </ul><!-- /.contatcts-list -->
          </div><!-- /.direct-chat-pane -->
        </div><!-- /.box-body -->
        <div class="box-footer">
            <div class="input-group pull-right">
                <!-- <button type="button" class="btn btn-primary btn-flat">Lanjut</button> -->
                <a href="{{ url('/pilihjadwal') }}" class="btn btn-primary btn-flat">Lanjut</a>
            </div>
        </div><!-- /.box-footer-->
      </div><!--/.direct-chat -->
@endsection