@extends('layouts.master')

@section('title','Edit Master Kendaraan')

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

		<div class="box">
			<div class="box-header">
				<a href="/"><i class="fa fa-home fa-lg"></i></a> | 
				<h3 class="box-title">Master Kendaraan</h3>
				<div class="box-tools pull-right">
			      <button class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle">Bantuan</button>
			    </div>
			</div>
			<br>
			<div class="box-body">
				<form action="/editmasterkendaraan/{{$cars->id}}" method="post">
					<input type="hidden" name="_method" value="PUT">
		        	{{ csrf_field() }}
		        	<div class="row">
			             <div class="col-lg-12">
			                 <div class="row">
			                     <div class="col-lg-2" style="margin-left: 10px;">
			                         <label style="padding-bottom: 5px; font-size: 12px;">No Body :</label>
			                     </div>
			                     <div class="col-lg-3">
			                         <div class="form-group input-group">
			                             <input type="text" name="no_body" class="form-control form-purchase" value="{{$cars->no_body}}">
			                         </div>
			                     </div>
			                 </div>
			                 <div class="row">
			                     <div class="col-lg-2" style="margin-left: 10px;">
			                         <label style="padding-bottom: 5px; font-size: 12px;">Seat :</label>
			                     </div>
			                     <div class="col-lg-3">
			                         <div class="form-group input-group">
			                            <select class="form-control form-purchase" name="seat">
			                                @foreach ($seat as $seat)
			                                <option value="{{$seat->id}}" {{ $seat->id == $cars->seat->id ? 'selected="selected"' : '' }}>{{$seat->name}} <b> {{$seat->jumlah}}</option>
			                                @endforeach
			                            </select>
			                         </div>
			                     </div>
			                 </div>
			                 <div class="row">
			                     <div class="col-lg-2" style="margin-left: 10px;">
			                         <label style="padding-bottom: 5px; font-size: 12px;">Nama Supir</label>
			                     </div>
			                     <div class="col-lg-3">
			                         <div class="form-group input-group">
			                             <select class="form-control form-purchase" name="pengemudi">
			                                 @foreach ($drivers as $drivers)
			                                <option value="{{$drivers->id}}" {{ $drivers->id == $cars->driver->id ? 'selected="selected"' : ''}}>{{$drivers->name}}</option>
			                                 @endforeach
			                             </select>
			                         </div>
			                     </div>
			                 </div>
			                 <div class="row">
			                     <div class="col-lg-2" style="margin-left: 10px;">
			                         <label style="padding-bottom: 5px; font-size: 12px;">Merk Kendaraan :</label>
			                     </div>
			                     <div class="col-lg-3">
			                         <div class="form-group input-group">
			                             <input type="text" name="merk" class="form-control form-purchase">
			                         </div>
			                     </div>
			                 </div>
			                 <div class="row">
			                     <div class="col-lg-2" style="margin-left: 10px;">
			                         <label style="padding-bottom: 5px; font-size: 12px;">Warna Kendaraan :</label>
			                     </div>
			                     <div class="col-lg-3">
			                         <div class="form-group input-group">
			                             <input type="text" name="warna" class="form-control form-purchase">
			                         </div>
			                     </div>
			                 </div>
			                 <div class="row">
			                     <div class="col-lg-2" style="margin-left: 10px;">
			                         <label style="padding-bottom: 5px; font-size: 12px">Tahun Kendaraan :</label>
			                     </div>
			                     <div class="col-lg-3">
			                         <div class="form-group input-group">
			                             <input type="text" name="tahun" class="form-control form-purchase">
			                         </div>
			                     </div>
			                 </div>
			                 <div class="row">
			                     <div class="col-lg-2" style="margin-left: 10px;">
			                         <label style="padding-bottom: 5px; font-size: 12px;">No Polisi :</label>
			                     </div>
			                     <div class="col-lg-3">
			                         <div class="form-group input-group">
			                             <input type="text" name="plat_number" class="form-control form-purchase">
			                         </div>
			                     </div>
			                 </div>
			                 <div class="row">
			                     <div class="col-lg-12">
			                         <button type="submit" class="btn btn-primary pull-right">Submit</button>
			                     </div>
			                 </div>
			                 <br>
			             </div>
			         </div>
				</form>
			</div>
		</div>
	</section>
</div>

@endsection