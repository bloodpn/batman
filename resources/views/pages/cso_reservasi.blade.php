@extends('layouts.master')

@section('title','Reservasi')

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
            <div class="col-md-4">
              <div class="box">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <!-- <label>Keberangkatan</label> -->
                      <select class="form-control" style="width: 100%;" id="asal">
                        <option>Cabang Asal</option>
                        @foreach($counter as $Counter)
                        <option value="{{$Counter->id}}">{{$Counter->name}}</option>
                        @endforeach
                      </select>
                    </div>
                 </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <!-- <label>Keberangkatan</label> -->
                      <select class="form-control" style="width: 100%;" class="ctujuan" id="ctujuan">
                        <option>Cabang Tujuan</option>
                      </select>
                    </div>
                 </div>
                </div>
                <div class="row">
                  <div class="form-group">
                    <label class="custom-control custom-radio">
                      <input id="radio1" name="stats" type="radio" class="custom-control-input pilihan1 sj" checked="checked" onchange="seje()" value="sk">
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description">Sekali Jalan</span>
                    </label>
                    <label class="custom-control custom-radio">
                      <input id="radio2" name="stats" type="radio" class="custom-control-input pilihan1 pp" onchange="pepe()" value="pp">
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description">Pulang Pergi</span>
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                   <div class="form-group">
                      <!-- <label>Tanggal Kembali</label> -->
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" id="tgl_berangkat" placeholder="Tanggal Berangkat">
                      </div>
                      <!-- /.input group -->
                    </div>
                  </div>
                </div>
                <div class="row" id="tgl11" style="display: none;">
                  <div class="col-sm-12">
                   <div class="form-group" >
                      <!-- <label>Tanggal Kembali</label> -->
                      <div class="input-group date" >
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right"  placeholder="Tanggal Kembali">
                      </div>
                      <!-- /.input group -->
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2 col-md-offset-9">
                    <!-- <button type="button" class="btn btn-primary btn-flat">Lanjut</button> -->
                    <button class="btn btn-primary btn-flat" id="next1">Cari</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box">
                <div class="row">
                  <div class="col-md-12">
                    <table class="table table-striped">
                    <thead>
                      <tr>
                        <th style="width: 10px"></th>
                        <th>Jam</th>
                        <th>Tersedia</th>
                        <th>Harga</th>
                        <th></th>
                      </tr>
                    </thead>
                      <tbody id="scheduleList">
                        <tr>
                          <td>1.</td>
                          <td>09.00 WIB</td>
                          <td>3 Kursi</td>
                          <td>Rp. 90.000</td>
                          <td><a href="{{ url('/datapenumpang') }}" class="btn btn-primary btn-flat">Pilih</a></td>
                          <!-- <td><button type="button" class="btn btn-primary btn-flat">Pilih</button></td> -->
                        </tr>
                      </tbody>
                      
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" name="q" class="form-control" placeholder="Telepon">
                    </div>
                  </div>  
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" name="q" class="form-control" placeholder="Nama">
                    </div>
                  </div>  
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" name="q" class="form-control" placeholder="No. Telepon">
                    </div>
                  </div>  
                </div>
                <div class="row">
                  <div class="col-md-4 col-md-offset-4">
                    <div class="row">
                      <div class="col-md-4">
                       <input type="checkbox" class="input_class_checkbox" value="1">
                        <label>1</label>
                      </div>
                      <div class="col-md-4">
                        <input type="checkbox" class="input_class_checkbox" value="2">
                        <label>2</label>
                      </div>
                      <div class="col-md-4">
                        <b class="kursi"></b>
                       <label>Supir</label>
                      </div>
                    </div>
                  <div class="row">
                      <div class="col-md-4">
                       <input type="checkbox" class="input_class_checkbox" value="1">
                       <label>3</label>
                      </div>
                      <div class="col-md-4">
                        <input type="checkbox" class="input_class_checkbox" value="2">
                        <label>4</label>
                      </div>
                      <div class="col-md-4">
                       <input type="checkbox" class="input_class_checkbox" value="3">
                       <label>5</label>
                      </div>
                    </div>
                  <div class="row">
                      <div class="col-md-4">
                       <input type="checkbox" class="input_class_checkbox" value="1">
                       <label>6</label>
                      </div>
                      <div class="col-md-4">
                        <input type="checkbox" class="input_class_checkbox" value="2" disabled="">
                        <label>7</label>
                      </div>
                      <div class="col-md-4">
                       <input type="checkbox" class="input_class_checkbox" value="3">
                       <label>8</label>
                      </div>
                    </div>
                  <div class="row">
                      <div class="col-md-4">
                       <input type="checkbox" class="input_class_checkbox" value="1">
                       <label>9</label>
                      </div>
                      <div class="col-md-4">
                        <input type="checkbox" class="input_class_checkbox" value="2">
                        <label>10</label>
                      </div>
                      <div class="col-md-4">
                       <input type="checkbox" class="input_class_checkbox" value="3">
                       <label>11</label>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
@endsection
<!--Date Picker-->
@section('script')
 $('#tgl_berangkat').datepicker({
      autoclose: true
    });
    $('#tgl_kembali').datepicker({
      autoclose: true
    });

<!--Asal Dan Tujuan-->
$('#asal').on('change', function(e)
  {
  var id_asal= e.target.value;
  $.get('/searchDestination?id=' +id_asal, function(data){
  //console.log(data);
    $('#ctujuan').empty();

    $.each(data, function(index, destObj){
      $('#ctujuan').append('<option value="'+destObj.id+'">'+destObj.name+'</option>');
    });
  });
});

<!-- Search list -->
$("#next1").click(function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })

        e.preventDefault(); 

        var formData = {
            rute: $('#ctujuan').val(),
            depart_date: $('#tgl_berangkat').val(),
            stats: $('.pilihan1').val()
        }

        $.ajax({

            type: 'get',
            url: '/searchDeparture',
            data: formData,
            dataType: 'json',
            success: function (data) {
            $.each(data, function(index, desObj){
            //console.log(data);
              var list = '<tr>$i<td></td><td>'+desObj[0].time+'</td><td>'+desObj[0].jumlah+'</td><td>'+desObj[0].ticket+'</td></tr>';
               $('#scheduleList').append(list);
              });
            console.log(data);
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });

});

@endsection