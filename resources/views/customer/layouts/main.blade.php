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

    $('.input_class_checkbox_cs').each(function(){
    $(this).hide().after('<div class="class_checkbox_cs" />');

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



    // $('.seat').each(function(){
    var seat = $('#fourteen').val();
    var el = document.getElementsByName("class_checkbox_cs");



    if (seat == "0") {
      // $(".").hide();
      el.classList.add("tes");
    }

    // });

</script>

<!-- <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script> -->
