@extends('layouts.master')

@section('title','Edit Master Supir')

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
        		<h3 class="box-title">Master Supir</h3>
        		<div class="box-tools pull-right">
        	      <button class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle">Bantuan</button>
        	    </div>
        	</div>
        	<br>
        	<div class="box-body">
        	<form action="/editmastersupir/{{$driver->id}}" method="post">
        		<input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}
        		<div class="row">
        			<div class="col-lg-12">
        				<div class="row">
        					<div class="col-lg-2" style="margin-left: 10px;">
                                    <label style="padding-bottom: 5px; font-size: 12px;">Nama Supir :</label>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group input-group">
                                        <input type="text" name="nama_supir" class="form-control form-purchase" value="{{ $driver->name }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2" style="margin-left: 10px;">
                                    <label style="padding-bottom: 5px; font-size: 12px;">Kode Supir :</label>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group input-group">
                                        <input type="text" name="kd_supir" class="form-control form-purchase" value="{{ $driver->kode }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2" style="margin-left: 10px;">
                                    <label style="padding-bottom: 5px; font-size: 12px;">Alamat :</label>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group input-group">
                                        <input type="text" name="alamat" class="form-control form-purchase" value="{{ $driver->address }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2" style="margin-left: 10px;">
                                    <label style="padding-bottom: 5px; font-size: 10px;">Telpon Supir :</label>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group input-group">
                                        <input type="number" min="0" name="tlp_supir" class="form-control form-purchase" value="{{ $driver->phone }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2" style="margin-left: 10px;">
                                    <label style="padding-bottom: 5px; font-size: 12px;">No SIM :</label>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group input-group">
                                        <input type="text" name="no_sim" class="form-control form-purchase" value="{{ $driver->license }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            	<div class="col-lg-11" style="margin-left: 30px;">
                            		<button type="submit" class="btn btn-primary pull-right">Sumbit</button>
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