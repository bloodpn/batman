<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/ionicons.css">
	<link rel="stylesheet" href="/css/AdminLTE.min.css">
	<link rel="stylesheet" href="/css/_all-skins.min.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

	@include('layouts.header') 

	@include('layouts.sidebar') 

	@yield('content')

	@include('layouts.footer') 
</div>
</body>
</html>
<script src="/js/jquery-2.2.3.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/apps.min.js"></script>
<script src="/js/demo.js"></script>
<script src="/js/table_paginate.js"></script>
<!-- <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script> -->