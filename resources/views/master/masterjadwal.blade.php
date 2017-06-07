@extends('layouts.master')

@section('title','Master Jadwal')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <small>7 Mei 2017 - 16.40 wib</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Hello Rob!</h3>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-lg-1">
              <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modaljadwal">Jadwal Baru</button>
            </div>
          </div>

          <div class="row">
            <div class="tab-pane fade in active" id="detail">
              <div class="panel-body" style="font-size: 12px;">
                <table class="table table-striped table-bordered table-paginate" cellspacing="0" width="100%" id="dataTables-example">
                  <thead>
                    <tr>
                        <th>No.</th>
                        <th class="col-md-3">Kode Jadwal</th>
                        <th class="col-md-2">Jurusan</th>
                        <th class="col-md-1">Jam</th>
                        <th class="col-md-1">Kursi</th>
                        <th class="col-md-1">Status</th>
                        <th class="col-md-2">Online</th>
                        <th class="col-md-1">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $no = 0;?>
                  @foreach($data_ as $data)
                  <?php $no++;?>
                    <tr class="odd gradeX">
                      <td>{{$no}}</td>
                      <td>{{$data->code_schedule}}</td>
                      <td>{{$data->kd_route}}</td>
                      <td>{{date('H:i', strtotime($data->time)) }} WIB</td>
                      <td>{{$data->name}}</td>
                      <td>{{$data->stats}}</td>
                      <td>{{$data->via}}</td>
                      <td>
                         <button class="btn btn-default btn-detail edit_jadwal" value="{{$data->id}}">Edit</button>
                        <!-- <button type="submit" class="btn btn-info btn-sm pull-center">Hapus</button> -->
                      </td>
                    </tr>
                    @endforeach
                  </tbody>  
                </table>
              </div>
           </div>
          </div>
        </div>
      </div>

    <!--Modal Tambah Jadwal-->
     <div class="modal fade" id="createjadwal">
        <!-- <form action="createjadwal" method="post"> -->
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">x</button>
                  <h4 class="modal-title">Tambah Jadwal</h4>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-3">
                    <label style="padding-top: 5px; padding-bottom: 9px; font-size: 13px;">Pilih Jurusan</label><br>
                    <label style="padding-bottom: 9px; font-size: 13px;">Nama Jurusan</label><br>
                    <label style="padding-bottom: 9px; font-size: 13px;">Jam</label><br>
                    <label style="padding-bottom: 9px; font-size: 13px;">Kursi</label><br>
                    <label style="padding-bottom: 9px; font-size: 13px;">Online</label><br>
                    <label style="padding-bottom: 9px; font-size: 13px;">Status</label><br>
                  </div>
                  <div class="col-md-9">
                    <div class="form-group" style="margin-bottom: 0px">
                      <select class="form-control" style="width: 100%;" name="car" id="car">
                        <option value="0">Pilih Jurusan</option>
                        @foreach ($route as $Route)
                        <option value="{{$Route->id}}" >{{$Route -> kd_route}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group" style="margin-bottom: 0px;">
                          <input type="text" name="time" class="form-control">
                    </div>
                     <div class="form-group" style="margin-bottom: 0px;">
                          <input type="text" name="time" id="time" class="form-control timepicker">
                    </div>
                    <div class="form-group" style="margin-bottom: 0px">
                      <select class="form-control" style="width: 100%;" name="asal" id="asal">
                        <option>Pilih Kursi</option>
                        @foreach ($seat as $Seat)
                        <option value="{{$Seat->id}}" >{{$Seat->name}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group" style="margin-bottom: 0px;">
                      <select class="form-control" id="tipe_jadwal">
                        <option value="on jadwal">Online</option>
                        <option value="off">Offline</option>
                      </select>
                    </div>
                    <div class="form-group" style="margin-bottom: 0px;">
                      <select class="form-control" id="tipe_jadwal">
                        <option value="on jadwal">Aktif</option>
                        <option value="off">Non Aktif</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" value="save" id="cJadwal">Submit</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
              </div>
            </div>
          </div>
        <!-- </form> -->
      </div>
    <!--end Modal-->

    <!--Modal Edit Jadwal-->
     <div class="modal fade" id="editjadwal">
        <!-- <form action="createjadwal" method="post"> -->
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">x</button>
                  <h4 class="modal-title" id="modalTitle"></h4>
              </div>
              <div class="modal-body" id="bodyEdit">
                <div class="row">
                  <div class="col-md-3">
                    <label style="padding-top: 5px; padding-bottom: 9px; font-size: 13px;">Pilih Jurusan</label><br>
                    <label style="padding-bottom: 9px; font-size: 13px;">Nama Jurusan</label><br>
                    <label style="padding-bottom: 9px; font-size: 13px;">Jam</label><br>
                    <label style="padding-bottom: 9px; font-size: 13px;">Kursi</label><br>
                    <label style="padding-bottom: 9px; font-size: 13px;">Online</label><br>
                    <label style="padding-bottom: 9px; font-size: 13px;">Status</label><br>
                  </div>
                  <div class="col-md-9">
                    <div class="form-group" style="margin-bottom: 0px">
                      <select class="form-control" style="width: 100%;" name="car" id="car">
                        <option value="0">Pilih Jurusan</option>
                        @foreach ($route as $Route)
                        <option value="{{$Route->id}}" >{{$Route -> kd_route}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group" style="margin-bottom: 0px;">
                          <input type="text" name="times" id="codeSche" class="form-control">
                    </div>
                    <div class="form-group" style="margin-bottom: 0px">
                      <select class="form-control" style="width: 100%;" name="asal" id="asal">
                        <option>Pilih Kursi</option>
                        @foreach ($seat as $Seat)
                        <option value="{{$Seat->id}}" >{{$Seat->name}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group" style="margin-bottom: 0px;">
                      <select class="form-control" id="tipe_jadwal">
                        <option value="on jadwal">Online</option>
                        <option value="off">Offline</option>
                      </select>
                    </div>
                    <div class="form-group" style="margin-bottom: 0px;">
                      <select class="form-control" id="tipe_jadwal">
                        <option value="on jadwal">Aktif</option>
                        <option value="off">Non Aktif</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" value="save" id="cJadwal">Submit</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
              </div>
            </div>
          </div>
        <!-- </form> -->
      </div>
    <!--end Modal-->

    </section>
</div>
 @endsection

@section('script')


//Edit Schedule  
$(document).on('click','.edit_jadwal',function(){
        var id_jadwal = $(this).val();
       
        $.get('/editjadwal?id=' +id_jadwal, function(index, jadwaObj) {
           
           console.log(data_jadwal);
            //$('#modalTitle').val($(this).jadwal_edit('code_schedule'));
            $('#codeSche').val(jadwaObj.code_schedule);
            //$('#times').html(data_jadwal.time);
            $('#editjadwal').modal('show');
           
        }) 
    });
@endsection