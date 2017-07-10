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
      <form action="/reservasiCso" method="POST">
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
                      <select class="form-control" style="width: 100%;" id="asal">
                        <option>Cabang Asal</option>
                        @foreach($counter as $Counter)
                        <option value="{{$Counter->id}}" name="origin">{{$Counter->name}}</option>
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
                        <input type="text" class="form-control pull-right" id="tgl_berangkat" placeholder="Tanggal Berangkat" name="departure_date">
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
                        <input type="text" class="form-control pull-right" id="tgl_kembali"  placeholder="Tanggal Kembali" name="date_back">
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
                    <table class="table table-striped" id="table_list">
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
                      <input type="number" name="phone" id="phoneCustomer" class="form-control" placeholder="Telepon" required="">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" name="name" id="nameCustomer" class="form-control" placeholder="Nama" required="">
                    </div>
                  </div>
                </div>
              <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                  <table class="table table-striped">
                    <tr>
                      <td>
                        <div class="kSatu">
                            <input type="checkbox" name="seat_passanger[]" value="one" class="cekKursi" id="kSatu">
                            <label id="label_one">1</label>
                            <label id="label_one_val"></label>
                        </div>
                      </td>
                      <td>
                        <input type="checkbox" name="seat_passanger[]" value="zero" class="cekKursi" id="kNol">
                        <label id="label_one">0</label>
                        <label id="label_one_val"></label>
                      </td>
                      <td>Supir</td>
                    </tr>
                    <tr>
                      <td>
                        <div class="kDua">
                          <input type="checkbox" name="seat_passanger[]" value="two" class="cekKursi" id="kDua">
                          <label id="label_one">2</label>
                        </div>
                      </td>
                      <td>
                        <div class="kTiga">
                          <input type="checkbox" name="seat_passanger[]" value="three" class="cekKursi" id="kTiga">
                          <label id="label_one">3</label>
                        </div>
                      </td>
                      <td>
                        <div class="kEmpat">
                          <input type="checkbox" name="seat_passanger[]" value="four" class="cekKursi" id="kEmpat">
                          <label id="label_one">4</label>
                        </div>
                      </td>
                    </tr>
                     <tr>
                      <td>
                        <div class="kLima">
                          <input type="checkbox" name="seat_passanger[]" value="five" class="cekKursi" id="kLima">
                          <label id="label_one">5</label>
                        </div>
                      </td>
                      <td>
                        <div class="kEnam">
                          <input type="checkbox" name="seat_passanger[]" value="six" class="cekKursi" id="kEnam">
                          <label id="label_one">6</label>
                        </div>
                      </td>
                      <td>
                        <div class="kTujuh">
                          <input type="checkbox" name="seat_passanger[]" value="seven" class="cekKursi" id="kTujuh">
                          <label id="label_one">7</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="kDelapan">
                          <input type="checkbox" name="seat_passanger[]" value="eight" class="cekKursi" id="kDelapan">
                          <label id="label_one">8</label>
                        </div>
                      </td>
                      <td>
                        <div class="kSembilan">
                          <input type="checkbox" name="seat_passanger[]" value="nine" class="cekKursi" id="kSembilan">
                          <label id="label_one">9</label>
                        </div>
                      </td>
                      <td>
                        <div class="kSepuluh">
                          <input type="checkbox" name="seat_passanger[]" value="ten" class="cekKursi" id="kSepuluh">
                          <label id="label_one">10</label>
                        </div>
                      </td>
                    </tr>
                     <tr>
                      <td>
                        <div class="kSebelas">
                          <input type="checkbox" name="seat_passanger[]" value="eleven" class="cekKursi" id="kSebelas">
                          <label id="label_one">11</label>
                        </div>
                      </td>
                      <td>
                        <div class="DuaBelas">
                          <input type="checkbox" name="seat_passanger[]" value="twelve" class="cekKursi" id="kDubelas">
                          <label id="label_one">12</label>
                        </div>
                      </td>
                      <td>
                        <div class="TigaBelas">
                          <input type="checkbox" name="seat_passanger[]" value="thirteen" class="cekKursi" id="kTigabelas">
                          <label id="label_one">13</label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="EmpatBelas">
                          <input type="checkbox" name="seat_passanger[]" value="fourteen" class="cekKursi" id="kEmpatbelas">
                          <label id="label_one">14</label>
                        </div>
                      </td>
                      <td>
                        <div class="LimaBelas">
                          <input type="checkbox" name="seat_passanger[]" value="fifteen" class="cekKursi" id="kLimabelas">
                          <label id="label_sixteen">15</label>
                        </div>
                      </td>
                      <td>
                        <div class="EnamBelas">
                          <input type="checkbox" name="seat_passanger[]" value="sixteen" class="cekKursi" id="kEnambelas">
                          <label id="label_sixteen">16</label>
                        </div>
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
              </div>
            </div>
          </div>
          <!-- /.box-footer-->
          <div class="col-lg-offset-10 col-lg-2 ">
            <input type="submit" class="btn btn-primary btn-flat btn-lg" name="Submit" value="create">
            {{csrf_field()}}
          </div>
        </div>
      <!-- /.box -->


      </form>
      </div>
    </section>
    <!-- /.content -->

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
        $('#ctujuan').append('<option value="'+destObj.id_route+'" name="counter_tujuan">'+destObj.counter_name+'</option>');
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
        var banyak = $('#scheduleList tr').length;
        if (banyak > 0)
        {
        $('#scheduleList tr').remove();
        }

        $.ajax({
            type: 'get',
            url: '/searchDeparture',
            data: formData,
            dataType: 'json',
            success: function (data) {
            var a=1;
              $.each(data, function(index, desObj){

                var list = '<tr><td>'+a+' <input type="hidden" value="'+desObj[0].id+'" name="schedule" id="listJadwal'+desObj[0].id+'"><input type="hidden" value="'+desObj[0].seat+'" name="jumlah"></td><td>'+desObj[0].time+'</td><td>'+desObj[0].seat+' '+"Kursi"+'</td><td>'+"Rp"+' '+desObj[0].ticket+'</td><td><input type="button" class="btn btn-primary btn-flat" onclick="pJadwal('+desObj[0].id+')" value="Pilih" /></td></tr>';
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
            for ($i=0; $i < data.length ; $i++) {
              if (data[$i].one == 0){
                $('.kSatu').hide();
              }
              else if (data[$i].one == 1) {
                $('.kSatu').show();
                  if (data[$i].seat_number == 'one')
                  {
                   console.log('satu');
                  }
              }

              if (data[$i].two == 0){
                $('.kDua').hide();
              }
              else if (data[$i].two == 1){
                $('.kDua').show();
                  if (data[$i].seat_number == 'two')
                  {
                   console.log('dua');
                  }
              }

              if (data[$i].three == 0){
                $('.kTiga').hide();
              }
              else if (data[$i].three == 1){
                $('.kTiga').show();
                if (data[$i].seat_number == 'three')
                  {
                   console.log('tiga');
                  }
              }

              if (data[$i].four == 0){
                $('.kEmpat').hide();
              }
              else if (data[$i].four == 1){
                $('.kEmpat').show();
                if (data[$i].seat_number == 'four')
                  {
                   console.log('empat');
                  }
              }

              if (data[$i].five == 0){
                $('.kLima').hide();
              }
              else if (data[$i].five == 1){
                $('.kLima').show();
                if (data[$i].seat_number == 'five')
                {
                  console.log('lima');
                }
              }

              if (data[$i].six == 0){
                $('.kEnam').hide();
              }
              else if (data[$i].six == 1){
                $('.kEnam').show();
                  if (data[$i].seat_number == 'six')
                  {
                   console.log('six');
                  }
              }

              if (data[$i].seven == 0){
                $('.kTujuh').hide();
              }
              else if (data[$i].seven == 1){
                $('.kTujuh').show();
                if (data[$i].seat_number == 'seven')
                  {
                   console.log('tujuh');
                  }
              }

              if (data[$i].eight == 0){
                $('.kDelapan').hide();
              }
              else if (data[$i].eight == 1){
                $('.kDelapan').show();
              }

              if (data[$i].nine == 0){
                $('.kSembilan').hide();
              }
              else if (data[$i].nine == 1){
                $('.kSembilan').show();
              }

              if (data[$i].ten == 0){
                $('.kSepuluh').hide();
              }
              else if (data[$i].ten == 1){
                $('.kSepuluh').show();
              }

              if (data[$i].eleven == 0){
                $('.kSebelas').hide();
              }
              else if (data[$i].eleven == 1){
                $('.kSebelas').show();
              }

              if (data[$i].twelve == 0){
                $('.DuaBelas').hide();
              }
              else if (data[$i].twelve == 1){
                $('.DuaBelas').show();
              }

              if (data[$i].thirteen == 0){
                $('.TigaBelas').hide();
              }
              else if (data[$i].thirteen == 1){
                $('.TigaBelas').show();
              }

              if (data[$i].fourteen == 0){
                $('.EmpatBelas').hide();
              }
              else if (data[$i].fourteen == 1){
                $('.EmpatBelas').show();
              }

              if (data[$i].fifteen == 0){
                $('.LimaBelas').hide();
              }
              else if (data[$i].fifteen == 1){
                $('.LimaBelas').show();
              }

              if (data[$i].sixteen == 0){
                $('.EnamBelas').hide();
              }
              else if (data[$i].sixteen == 1){
                $('.EnamBelas').show();
              }
            }
          }


        })

  }
<!-- seat -->

$('.cekKursi').each(function(){
    $(this).hide().after('<div class="class_checkbox_cso" />');

});

$('.class_checkbox_cso').on('click',function(){
    $(this).toggleClass('checked').prev().prop('checked',$(this).is('.checked'))
});

@endsection
