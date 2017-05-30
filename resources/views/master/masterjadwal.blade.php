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
                        <th class="col-md-1">No. Body</th>
                        <th class="col-md-2">Asal</th>
                        <th class="col-md-2">Tujuan</th> 
                        <th class="col-md-1">Jam</th>
                        <th class="col-md-1">Harga</th>
                        <th class="col-md-1">Tipe</th>
                        <th class="col-md-2">Jadwal Utama</th>
                        <th class="col-md-1">status</th>
                        <th class="col-md-1">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $no = 0;?>
                  @foreach($jadwal as $jadwal)
                  <?php $no++ ;?>
                    <tr class="odd gradeX">
                      <td>{{$no}}</td>
                      <td>{{$jadwal->car->no_body}}</td>
                      <td>({{$jadwal->origin->city}}) <b>{{$jadwal->origin->name}}</b></td>
                      <td>({{$jadwal->destination->city}}) <b>{{$jadwal->destination->name}}</b></td>
                      <td>{{date('H:i', strtotime($jadwal->time)) }} WIB</td>
                      <td>{{$jadwal->price->umum}}</td>
                      <td>{{$jadwal ->schedule_type }}</td>
                      <td>
                        @if ($jadwal->id_schedule_utama=" ")
                          {{"Tidak Ada"}}
                        @else
                          {{$jadwal->id_schedule_utama}}
                        @endif
                      </td>
                      <td>{{$jadwal ->stats }}</td>
                      <td>
                        <button type="submit" class="btn btn-info btn-sm pull-center">Edit</button>
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
        <div class="modal fade" id="modaljadwal">
          <form action="createjadwal" method="post">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">x</button>
                    <h4 class="modal-title">Tambah Jadwal</h4>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-3">
                      <label style="padding-bottom: 8px; font-size: 13px;">No. Body</label><br>
                      <label style="padding-bottom: 8px; font-size: 13px;">Asal</label><br>
                      <label style="padding-bottom: 8px; font-size: 13px;">Tujuan</label><br>
                      <label style="padding-bottom: 8px; font-size: 13px;">Jam Berangkat</label><br>
                      <label style="padding-bottom: 8px; font-size: 13px;">Tipe Jadwal</label><br>
                      <label style="padding-bottom: 8px; font-size: 13px;">Jadwal Utama</label><br>
                      <label style="padding-bottom: 8px; font-size: 13px;">Harga</label><br>
                    </div>
                    <div class="col-md-9">
                      <div class="form-group" style="margin-bottom: 0px">
                        <select class="form-control" style="width: 100%;">
                          <option>Pilih Mobil</option>
                          @foreach ($car as $Car)
                          <option value="{{$Car->id}}" name="car" id="car">{{$Car->no_body}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group" style="margin-bottom: 0px">
                        <select class="form-control" style="width: 100%;">
                          <option>Pilih Asal</option>
                          @foreach ($counter as $Counter)
                          <option value="{{$Counter->id}}" name="asal" id="asal">{{$Counter->name}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group" style="margin-bottom: 0px">
                        <select class="form-control" style="width: 100%;">
                          <option>Pilih Asal</option>
                          @foreach ($counter as $Counter)
                          <option value="{{$Counter->id}}" name="tujuan" id="tujuan">{{$Counter->name}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group" style="margin-bottom: 0px;">
                            <input type="text" name="time" id="time" class="form-control timepicker">
                      </div>
                      <div class="form-group" style="margin-bottom: 0px;">
                          <input type="text" name="tipe_jadwal" id="tipe_jadwal" class="form-control form-purchase" placeholder="Tipe Jadwal">
                      </div>
                      <div class="form-group" style="margin-bottom: 0px;">
                          <input type="text" name="j_utama" id="j_utama" class="form-control form-purchase" placeholder="Jadwal Utama">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-default" value="save" id="save">Submit</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
                </div>
              </div>
            </div>
          </form>
        </div>

      </div>
    </div>
  </section>
 @endsection

@section('script')
  $('#modaljadwal').on('submit', function(e){
    e.preventDefault();
    var form     =$('#modaljadwal');
    var formData =form.serialize();
    var url      = form.attr('action');
    $.ajax({
      type  : 'post',
      url   : url,
      data  : formData,
      success: function(data){
        console.log(data);
      }
    });
  });
@endsection