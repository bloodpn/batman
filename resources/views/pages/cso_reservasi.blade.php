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
                        <input type="text" class="form-control pull-right" id="tgl_kembali"  placeholder="Tanggal Kembali">
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
                      <input type="number" name="phone" id="phoneCustomer" class="form-control" placeholder="Telepon">
                    </div>
                  </div>  
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" name="q" id="nameCustomer" class="form-control" placeholder="Nama">
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

@section('script')

<!--Date Picker-->
  $('#tgl_berangkat').datepicker({
      autoclose: true
    });
    $('#tgl_kembali').datepicker({
      autoclose: true
    });
<!-- end date -->


<!-- Pulang pergi -->
  $('.input_class_checkbox').each(function(){
    $(this).hide().after('<div class="class_checkbox" />');

  });

  $('.class_checkbox').on('click',function(){
      $(this).toggleClass('checked').prev().prop('checked',$(this).is('.checked'))
  });

  function pepe(){
        if($('.pp').is(":checked"))
        $("#tgl11").show();
    }

    function seje(){
        if($('.sj').is(":checked"))
        $("#tgl11").hide();
    }
<!-- end pulang Pergi -->

<!--Asal Dan Tujuan-->
  $('#asal').on('change', function(e){
    var id_asal= e.target.value;
    //console.log(id_asal);
    $.get('/search-destination?id=' +id_asal, function(data){
    //console.log(data);
      $('#ctujuan').empty();

      $.each(data, function(index, destObj){
        $('#ctujuan').append('<option value="'+destObj.id_route+'">'+destObj.counter_name+'</option>');
      });
    });
  });
<!-- end asal -->

<!-- Search list -->
$(document).ready(function() {
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
          var a=1;
          $.each(data, function(index, desObj){
          console.log(data.length);
            var list = '<tr><td>'+a+' <input type="hidden" value="'+desObj[0].id+'" name="" id="listJadwal.'+desObj[0].id+'"></td><td>'+desObj[0].time+'</td><td>'+desObj[0].jumlah+' '+"Kursi"+'</td><td>'+"Rp"+' '+desObj[0].ticket+'</td><td><button class="btn btn-primary btn-flat" onclick="pJadwal('+desObj[0].id+')">Pilih</button></td></tr>';
             $('#scheduleList').append(list);
             a=a+1;
            });
          },
          error: function (data) {
              console.log('Error:', data);
          }
      });
  });
});

<!-- search customer -->
$('document').ready(function(){
  $('#phoneCustomer').on('change', function () {
        var phone = $('#phoneCustomer').val();
        $.ajax({
            type: 'GET',
            url: '/searchCustomer',
            data : 'phone='+ phone,
            dataType: 'json',
            success: function (data) {
              if (data== ""){
                alert("adasdasd");
              }else{
                $('#nameCustomer').val(data[0].name);
              }
            }
        })
    });
  
});

<!-- end search customer -->

<!-- Search Seat -->
  function pJadwal($i){
      var schedule = $('#listJadwal'+$i).val();

      console.log(schedule);
  }
  <!-- seat -->

  

@endsection