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
                <div class="col-lg-8 col-lg-offset-2">
                  <table class="table table-striped">
                    <tr>
                      <td><input type="checkbox" class="cekKursi" id="kSatu">
                        <label id="label_oneone">1</label>
                        <label id="label_one_val"></label>
                      </td>
                      <td><input type="checkbox" name="" class="cekKursi" id="kNol">
                        <label id="label_one">0</label>
                        <label id="label_one_val"></label>
                      </td>
                      <td>Supir</td>
                    </tr>
                    <tr>
                      <td><input type="checkbox" name="" class="cekKursi" id="kDua">
                        <label id="label_one">2</label>
                      </td>
                      <td><input type="checkbox" name="" class="cekKursi" id="kTiga">
                        <label id="label_one">3</label>
                      </td>
                      <td><input type="checkbox" name="" class="cekKursi" id="kEmpat">
                        <label id="label_one">4</label>
                      </td>
                    </tr>
                     <tr>
                      <td><input type="checkbox" name="" class="cekKursi" id="kLima">
                        <label id="label_one">5</label>
                      </td>
                      <td><input type="checkbox" name="" class="cekKursi" id="kEnam">
                        <label id="label_one">6</label>
                      </td>
                      <td><input type="checkbox" name="" class="cekKursi" id="kTujuh">
                        <label id="label_one">7</label>
                      </td>
                    </tr>
                    <tr>
                      <td><input type="checkbox" name="" class="cekKursi" id="kDelapan">
                        <label id="label_one">8</label>
                      </td>
                      <td><input type="checkbox" name="" class="cekKursi" id="kSembilan">
                        <label id="label_one">9</label>
                      </td>
                      <td><input type="checkbox" name="" class="cekKursi" id="kSepuluh">
                      <label id="label_one">10</label>
                      </td>
                    </tr>
                     <tr>
                      <td><input type="checkbox" name="" class="cekKursi" id="kSebelas">
                      <label id="label_one">11</label>
                      </td>
                      <td><input type="checkbox" name="" class="cekKursi" id="kDubelas">
                      <label id="label_one">12</label>
                      </td>
                      <td><input type="checkbox" name="" class="cekKursi" id="kTigabelas">
                      <label id="label_one">13</label>
                      </td>
                    </tr>
                    <tr>
                      <td><input type="checkbox" name="" class="cekKursi" id="kEmpatbelas">
                      <label id="label_one">14</label>
                      </td>
                      <td><input type="checkbox" name="" class="cekKursi" id="kLimabelas">
                      <label id="label_one">15</label>
                      </td>
                      <td><input type="checkbox" name="" class="cekKursi" id="kEnambelas">
                      <label id="label_sixteen">16</label>
                      </td>
                    </tr>
                  </table>
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
              var list = '<tr><td>'+a+' <input type="hidden" value="'+desObj[0].id+'" name="" id="listJadwal'+desObj[0].id+'"></td><td>'+desObj[0].time+'</td><td>'+desObj[0].jumlah+' '+"Kursi"+'</td><td>'+"Rp"+' '+desObj[0].ticket+'</td><td><button class="btn btn-primary btn-flat" onclick="pJadwal('+desObj[0].id+')">Pilih</button></td></tr>';
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
    
  })
<!-- end search customer -->

<!-- Search Seat -->
  function pJadwal($i){

      var dataJadwal = {
        schedule: $('#listJadwal'+$i+'').val(),
        depart_date: $('#tgl_berangkat').val()
      }
      $.ajax({
            type: 'GET',
            url: '/searchSeat',
            data : dataJadwal,
            dataType: 'json',
            success: function (data) {
              if (data[0].one == 0){
                $('#labeloneone').hide();
                $('#kSatu').hide();
              } else{
                $('#kSatu').hide().after('<div class="class_checkbox" />');
              }
              if (data[0].sixteen == 0){
                $('#labelsixteen').hide();
                $('#kEnambelas').hide();
              } else{
                $('#kEnambelas').hide().after('<div class="class_checkbox" />');
              }

            }
            
        
        })

  }
  <!-- seat -->
      $('#zero').each(function(){
      var seat = document.getElementById("label_zero_val").innerHTML;
      if (seat === "0") {
        $('#zero').hide();
        $('#label_zero').hide();
      } else if (seat === "1"){
        $('#zero').hide().after('<div class="class_checkbox_cs" />');
      }
    });

    $('#one').each(function(){
      var seat = document.getElementById("label_one_val").innerHTML;
      if (seat === "0") {
        $('#one').hide();
        $('#label_one').hide();
      } else if (seat === "1"){
        $('#one').hide().after('<div class="class_checkbox_cs" />');
      }
    });

    $('#two').each(function(){
      var seat = document.getElementById("label_two_val").innerHTML;
      if (seat === "0") {
        $('#two').hide();
        $('#label_two').hide();
      } else if (seat === "1"){
        $('#two').hide().after('<div class="class_checkbox_cs" />');
      }
    });

    $('#three').each(function(){
      var seat = document.getElementById("label_three_val").innerHTML;
      if (seat === "0") {
        $('#three').hide();
        $('#label_three').hide();
      } else if (seat === "1"){
        $('#three').hide().after('<div class="class_checkbox_cs" />');
      }
    });

    $('#four').each(function(){
      var seat = document.getElementById("label_four_val").innerHTML;
      if (seat === "0") {
        $('#four').hide();
        $('#label_four').hide();
      } else if (seat === "1"){
        $('#four').hide().after('<div class="class_checkbox_cs" />');
      }
    });

    $('#five').each(function(){
      var seat = document.getElementById("label_five_val").innerHTML;
      if (seat === "0") {
        $('#five').hide();
        $('#label_five').hide();
      } else if (seat === "1"){
        $('#five').hide().after('<div class="class_checkbox_cs" />');
      }
    });

    $('#six').each(function(){
      var seat = document.getElementById("label_six_val").innerHTML;
      if (seat === "0") {
        $('#six').hide();
        $('#label_six').hide();
      } else if (seat === "1"){
        $('#six').hide().after('<div class="class_checkbox_cs" />');
      }
    });

    $('#seven').each(function(){
      var seat = document.getElementById("label_seven_val").innerHTML;
      if (seat === "0") {
        $('#seven').hide();
        $('#label_seven').hide();
      } else if (seat === "1"){
        $('#seven').hide().after('<div class="class_checkbox_cs" />');
      }
    });

    $('#eight').each(function(){
      var seat = document.getElementById("label_eight_val").innerHTML;
      if (seat === "0") {
        $('#eight').hide();
        $('#label_eight').hide();
      } else if (seat === "1"){
        $('#eight').hide().after('<div class="class_checkbox_cs" />');
      }
    });

    $('#nine').each(function(){
      var seat = document.getElementById("label_nine_val").innerHTML;
      if (seat === "0") {
        $('#nine').hide();
        $('#label_nine').hide();
      } else if (seat === "1"){
        $('#nine').hide().after('<div class="class_checkbox_cs" />');
      }
    });

    $('#ten').each(function(){
      var seat = document.getElementById("label_ten_val").innerHTML;
      if (seat === "0") {
        $('#ten').hide();
        $('#label_ten').hide();
      } else if (seat === "1"){
        $('#ten').hide().after('<div class="class_checkbox_cs" />');
      }
    });

    $('#eleven').each(function(){
      var seat = document.getElementById("label_eleven_val").innerHTML;
      if (seat === "0") {
        $('#eleven').hide();
        $('#label_eleven').hide();
      } else if (seat === "1"){
        $('#eleven').hide().after('<div class="class_checkbox_cs" />');
      }
    });

    $('#twelve').each(function(){
      var seat = document.getElementById("label_twelve_val").innerHTML;
      if (seat === "0") {
        $('#twelve').hide();
        $('#label_twelve').hide();
      } else if (seat === "1"){
        $('#twelve').hide().after('<div class="class_checkbox_cs" />');
      }
    });

    $('#thirteen').each(function(){
      var seat = document.getElementById("label_thirteen_val").innerHTML;
      if (seat === "0") {
        $('#thirteen').hide();
        $('#label_thirteen').hide();
      } else if (seat === "1"){
        $('#thirteen').hide().after('<div class="class_checkbox_cs" />');
      }
    });

    $('#fourteen').each(function(){
      var seat = document.getElementById("label_fourteen_val").innerHTML;
      if (seat === "0") {
        $('#fourteen').hide();
        $('#label_fourteen').hide();
      } else if (seat === "1"){
        $('#fourteen').hide().after('<div class="class_checkbox_cs" />');
      }
    });

    $('#fifteen').each(function(){
      var seat = document.getElementById("label_fifteen_val").innerHTML;
      if (seat === "0") {
        $('#fifteen').hide();
        $('#label_fifteen').hide();
      } else if (seat === "1"){
        $('#fifteen').hide().after('<div class="class_checkbox_cs" />');
      }
    });

    $('#sixteen').each(function(){
      var seat = document.getElementById("label_sixteen_val").innerHTML;
      if (seat === "0") {
        $('#sixteen').hide();
        $('#label_sixteen').hide();
      } else if (seat === "1"){
        $('#sixteen').hide().after('<div class="class_checkbox_cs" />');
      }
    });

    $('#label_zero_val').hide();
    $('#label_one_val').hide();
    $('#label_two_val').hide();
    $('#label_three_val').hide();
    $('#label_four_val').hide();
    $('#label_five_val').hide();
    $('#label_six_val').hide();
    $('#label_seven_val').hide();
    $('#label_eight_val').hide();
    $('#label_nine_val').hide();
    $('#label_ten_val').hide();
    $('#label_eleven_val').hide();
    $('#label_twelve_val').hide();
    $('#label_thirteen_val').hide();
    $('#label_fourteen_val').hide();
    $('#label_fifteen_val').hide();
    $('#label_sixteen_val').hide();


  $('.cekKursi').each(function(){
    $(this).hide().after('<div class="class_checkbox_cso" />');

  });

@endsection