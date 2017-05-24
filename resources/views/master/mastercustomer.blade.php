@extends('customer.default')

@section('title','Master Customer')

@section('content')

<div class="box box-primary box-solid direct-chat direct-chat-primary">
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
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <a href="">Edit</a> |
                                    <a href="">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="tambahbaru">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-2" style="margin-left: 10px;">
                                <label style="padding-bottom: 5px; font-size: 12px;">Nama Customers :</label>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group input-group">
                                    <input type="text" name="nama" class="form-control form-purchase" placeholder=".....">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2" style="margin-left: 10px;">
                                <label style="padding-bottom: 5px; font-size: 12px;">Alamat :</label>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group input-group">
                                    <input type="text" name="alamat" class="form-control form-purhcase" placeholder=".....">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2" style="margin-left: 10px;">
                                <label style="padding-bottom: 5px; font-size: 12px;">No telp :</label>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group input-group">
                                    <input type="number" min="0" name="telp" class="form-control form-purchase" placeholder="....">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2" style="margin-left: 10px;">
                                <label style="padding-bottom: 5px; font-size: 12px;">Status Pelanggan :</label>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group input-group">
                                    <select class="form-control form-purchase" name="status">
                                        <option>Pelanggan setia</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="box-footer">
        <div class="row">
            <div class="col-lg-12">
                <button type="button" class="btn btn-primary pull-right">Submit</button>
            </div>
        </div>
    </div>
</div>


@endsection