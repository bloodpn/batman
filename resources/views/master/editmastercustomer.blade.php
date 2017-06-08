@extends('layouts.master')

@section('title','Edit Master Customers')

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
        		<h3 class="box-title">Master Customer</h3>
        		<div class="box-tools pull-right">
        	      <button class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle">Bantuan</button>
        	    </div>
        	</div>
            <br>
            <div class="box-body">
            	<div class="row">
            		<div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-2" style="margin-left: 10px;">
                                <label style="padding-bottom: 5px; font-size: 12px;">Nama Customers :</label>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group input-group">
                                    <input type="text" name="name" class="form-control form-purchase" value="{{$customer->name}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2" style="margin-left: 10px;">
                                <label style="padding-bottom: 5px; font-size: 12px;">Alamat :</label>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group input-group">
                                    <input type="text" name="address" class="form-control form-purhcase" value="{{$customer->address}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2" style="margin-left: 10px;">
                                <label style="padding-bottom: 5px; font-size: 12px;">No telp :</label>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group input-group">
                                    <input type="number" min="0" name="phone" class="form-control form-purchase" value="{{$customer->phone}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2" style="margin-left: 10px;">
                                <label style="padding-bottom: 5px; font-size: 12px;">Status Pelanggan :</label>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group input-group">
                                    <select class="form-control form-purchase" name="customer_type">
                                        <option value="{{ $customer->customer_type }}" {{ $customer->customer_type == 'umum' ? 'selected="selected"' : '' }} >Umum</option>
                                        <option value="{{ $customer->customer_type }}" {{ $customer->customer_type == 'anak-anak' ? 'selected="selected"' : '' }} >Anak - Anak</option>
                                        <option value="{{ $customer->customer_type }}" {{ $customer->customer_type == 'lansia' ? 'selected="selected"' : '' }} >Lansia</option>
                                        <option value="{{ $customer->customer_type }}" {{ $customer->customer_type == 'pelanggan-setia' ? 'selected="selected"' : '' }} >Pelanggan Setia</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2" style="margin-left: 10px;">
                                <label style="padding-bottom: 5px; font-size: 12px;">Tanggal Bergabung :</label>
                            </div>
                            <div class="col-lg-2">
                                <input type="text" name="join_date" class="form-control form-purchase" value="{{ $customer->join_date}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2" style="margin-left: 10px;">
                                <label style="padding-bottom: 5px; font-size: 12px;">Expired :</label>
                            </div>
                            <div class="col-lg-2">
                                <input type="date" name="expired" class="form-control form-purchase" value="{{$customer->expired}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-10" style="margin-left: 30px;">
                                <button type="submit" class="btn btn-primary pull-right">Submit</button>
                            </div>
                        </div>
                        <br>
                    </div>
            	</div>
            </div>
        </div>
    </section>
</div>

@endsection