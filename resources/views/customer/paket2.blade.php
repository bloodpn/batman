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
    	
    	<!--Default Box-->
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
	        							<!--Label untuk Kota asal-->
	        							<select class="form-control" style="width: 100%" id="asal">
	        								<option value="">Cabang Asal</option>
	        								
	        								<option value=""></option>
	        								
	        							</select>
	        						</div>
	        					</div>
	        				</div>
	        				<div class="row">
	        					<div class="col-lg-12">
	        						<div class="form-group">
	        							<select class="form-control" style="width: 100%" id="tujuan">
	        								<option value="">Cabang Tujuan</option>
	        								
	        								<option value=""></option>
	        								
	        							</select>
	        						</div>
	        					</div>
	        				</div>
	        				<div>
	        					
	        				</div>
	        			</div>
	        		</div>
	        	</div>
	        </div>
    	</div>
    </section>
</div>
@endsection