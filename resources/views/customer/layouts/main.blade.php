<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="/css/bootstrap_4.min.css">
	<link rel="stylesheet" href="/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/ionicons.css">
	<link rel="stylesheet" href="/css/AdminLTE.min.css">
  	<link rel="stylesheet" href="/css/datepicker3.css">
	<link rel="stylesheet" href="/css/_all-skins.min.css">
	<link rel="stylesheet" href="/css/style.css">
</head>
<body class="hold-transition login-page">
 @include('customer.layouts.partials.header')
	<div class="container">
		@yield('content')
	</div>
@include('customer.layouts.partials.footer')
</body>
</html>
<script src="/js/jquery-2.2.3.min.js"></script>
<script src="/js/bootstrap_4.min.js"></script>
<script src="/js/apps.min.js"></script>
<script src="/js/demo.js"></script>
<script src="/js/bootstrap-datepicker.js"></script>
<script type="text/javascript">
	$('#tgl_berangkat').datepicker({
      autoclose: true
    });
    $('#tgl_kembali').datepicker({
      autoclose: true
    });

    function pp(){
        if($('.pp').is(":checked"))
        $("#tgl1").show();
    }

    function sj(){
        if($('.sj').is(":checked"))
        $("#tgl1").hide();
    }

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



    $('.class_checkbox_cs').on('click', function(){
      var person = document.getElementById("person").innerHTML;
      var seat_count = $(":checkbox:checked").length;

      console.log(person);
      console.log(seat_count);
      if ( seat_count == person) {
        alert("Jumlah kursi telah dengan jumlah penumpang");
      } else if( seat_count != person){
        // alert("Lebih woooy");
        // $(this).toggleClass('checked').prop('checked',$(this).is('.unchecked'))
        // $(this).prop('checked',$(this).is('.class_checkbox_cs'));
        $("input[type=checkbox]").each(function () {
            $(this).prop("checked", false);
            $(this).toggleClass('unchecked').prev().prop('unchecked', $(this).is('.unchecked'));
        });


      }
    });



    $('.class_checkbox_cs').on('click',function(){
        $(this).toggleClass('checked').prev().prop('checked',$(this).is('.checked'))
    });

    $('#departure1').on('change', function(e){
      var id_counter= e.target.value;
      console.log(id_counter);
      $.get('/search-destination?id=' +id_counter, function(data){
      console.log(data);
        $('#destination1').empty();

        $.each(data, function(index, destObj){
          $('#destination1').append('<option value="'+destObj.id_route+'">'+destObj.counter_name+'</option>');
        });
      });
    });

    $("#is_penumpang").change(function() {
        if(this.checked) {
          var nama_pemesan = $("#nama_pemesan").val();
          $("#nama_penumpang_1").val(nama_pemesan);
        } else{
          $("#nama_penumpang_1").val("");
        }
    });

</script>

<!-- <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script> -->
