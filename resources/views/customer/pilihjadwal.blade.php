@extends('customer.default')

@section('title','Pilih Jadwal')

@section('content')
<div class="box box-primary box-solid direct-chat direct-chat-primary">
  <div class="box-header">
    <h3 class="box-title">Pilih Jadwal</h3>
    <div class="box-tools pull-right">
      <button class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle">Bantuan</button>
    </div>
  </div><!-- /.box-header -->
  <div class="box-body">
    <br>
    <div class="panel">
      <div class="box-header with-border">
        <h4 class="box-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
            Ubah Jadwal Keberangkatan
          </a>
        </h4>
      </div>
      <div id="collapseThree" class="panel-collapse collapse">
        <div class="box-body">
          <div class="row"  style="margin-left: 0px;">
            <div class="col-sm-2">
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
            <div class="col-sm-2">
              <div class="form-group">
                <label>Tujuan</label>
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
            <div class="col-lg-2">
              <div class="form-group">
                <label>Tanggal Keberangkatan</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="tgl_berangkat">
                </div>
                <!-- /.input group -->
              </div>
            </div>
            <div class="col-lg-2">
              <div class="form-group">
                <label>Tanggal Kembali</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="tgl_kembali">
                </div>
                <!-- /.input group -->
              </div>
            </div>
            <div class="col-sm-1">
              <label>Penumpang</label>
              <div class="input-group" >
                <!-- <span class="input-group-addon"><i class="fa fa-user"></i></span> -->
                <select class="form-control">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                </select>
              </div>
            </div>
            <div class="col-sm-1">
            <br/>
              <button type="button" class="btn btn-primary btn-flat">Cari</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="box">
            <div class="box-header">
              <!-- <h3 class="box-title">Jadwal Keberangkatan</h3> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding" style="margin-left: 0px;">
              <table class="table table-striped">
                <tr>
                  <th style="width: 10px"></th>
                  <th>Jam Keberangkatan</th>
                  <th>Tersedia</th>
                  <th>Harga</th>
                  <th></th>
                </tr>
                <tr>
                  <td>1.</td>
                  <td>09.00 WIB</td>
                  <td>3 Kursi</td>
                  <td>Rp. 90.000</td>
                  <td><a href="{{ url('/datapenumpang') }}" class="btn btn-primary btn-flat">Pilih</a></td>
                  <!-- <td><button type="button" class="btn btn-primary btn-flat">Pilih</button></td> -->
                </tr>
                <tr>
                  <td>2.</td>
                  <td>12.00 WIB</td>
                  <td>3 Kursi</td>
                  <td>Rp. 90.000</td>
                  <td><button type="button" class="btn btn-primary btn-flat">Pilih</button></td>
                </tr>
                <tr>
                  <td>3.</td>
                  <td>15.00 WIB</td>
                  <td>3 Kursi</td>
                  <td>Rp. 90.000</td>
                  <td><button type="button" class="btn btn-primary btn-flat">Pilih</button></td>
                </tr>
                <tr>
                  <td>4.</td>
                  <td>20.00 WIB</td>
                  <td>3 Kursi</td>
                  <td>Rp. 100.000</td>
                  <td><button type="button" class="btn btn-primary btn-flat">Pilih</button></td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
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
      </div><!--/.direct-chat -->
@endsection