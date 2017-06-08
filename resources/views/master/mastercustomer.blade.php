@extends('layouts.master')

@section('title','Master Customers')

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
        <!--box header-->
            <div class="box-body">
                <div class="row">
                    <div class="col-lg-10" style="margin-left: 10px;">
                        <div class="form-group input-group">
                            <ul class="nav nav-pills">
                                <li class="active"><a href="#datacustomers" data-toggle="tab">Data Customers</a></li>
                                <li><a href="#tambahbaru" data-toggle="tab">Tambah Baru</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="datacustomers">
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>No Telp</th>
                                        <th>Status Pelanggan</th>
                                        <th>Tanggal Bergabung</th>
                                        <th>Tanggal Expired</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $no = 0; ?>
                                @foreach ($customer as $customers)
                                <?php $no++; ?>
                                    <tr>
                                        <td>{{$no}}</td>
                                        <td>{{$customers->name}}</td>
                                        <td>{{$customers->address}}</td>
                                        <td>{{$customers->phone}}</td>
                                        <td>{{$customers->customer_type}}</td>
                                        <td>{{$customers->join_date}}</td>
                                        <td>{{$customers->expired}}</td>
                                        <td>
                                            <a href="/mastercustomer/edit/{{$customers->id}}">Edit</a> |
                                            <a href="">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tambahbaru">
                    <form action="/mastercustomer" method="post">
                    {{ csrf_field() }}
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-2" style="margin-left: 10px;">
                                        <label style="padding-bottom: 5px; font-size: 12px;">Nama Customers :</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="form-group input-group">
                                            <input type="text" name="name" class="form-control form-purchase" placeholder=".....">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2" style="margin-left: 10px;">
                                        <label style="padding-bottom: 5px; font-size: 12px;">Alamat :</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="form-group input-group">
                                            <input type="text" name="address" class="form-control form-purhcase" placeholder=".....">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2" style="margin-left: 10px;">
                                        <label style="padding-bottom: 5px; font-size: 12px;">No telp :</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="form-group input-group">
                                            <input type="number" min="0" name="phone" class="form-control form-purchase" placeholder="....">
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
                                                <option value="umum">Umum</option>
                                                <option value="anak-anak">Anak-anak</option>
                                                <option value="lansia">Lansia</option>
                                                <option value="pelanggan-setia">Pelanggan Setia</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2" style="margin-left: 10px;">
                                        <label style="padding-bottom: 5px; font-size: 12px;">Tanggal Bergabung :</label>
                                    </div>
                                    <div class="col-lg-2">
                                        <input type="date" name="join_date" class="form-control form-purchase">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2" style="margin-left: 10px;">
                                        <label style="padding-bottom: 5px; font-size: 12px;">Expired :</label>
                                    </div>
                                    <div class="col-lg-2">
                                        <input type="date" name="expired" class="form-control form-purchase">
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
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


@endsection