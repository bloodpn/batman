@extends('customer.default')

@section('title','Master Supir')

@section('content')

<div class="box box-primary box-solid direct-chat direct-chat-primary">
	<div class="box-header">
		<a href="/"><i class="fa fa-home fa-lg"></i></a> | 
		<h3 class="box-title">Master Supir</h3>
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
                        <li class="active"><a href="#datasupir" data-toggle="tab">Data Supir</a></li>
                        <li><a href="#tambahsupir" data-toggle="tab">Tambah Baru</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>
        <div class="tab-content">
            <div class="tab-pane fade in active" id="datasupir">
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kode</th>
                                <th>Alamat</th>
                                <th>No Telpon</th>
                                <th>No SIM</th>
                                <th>Aktif</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no = 0; ?>
                        @foreach ($driver as $driver)
                        <?php $no++; ?>
                            <tr>
                                <td>{{$no}}</td>
                                <td>{{$driver->name}}</td>
                                <td>{{$driver->kd_driver}}</td>
                                <td>{{$driver->address}}</td>
                                <td>{{$driver->phone}}</td>
                                <td>{{$driver->card_number}}</td>
                                <td>{{$driver->status}}</td>
                                <td>
                                    <a href="">Edit</a> |
                                    <a href="">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="tambahsupir">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-2" style="margin-left: 10px;">
                                <label style="padding-bottom: 5px; font-size: 12px;">Nama Supir :</label>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group input-group">
                                    <input type="text" name="nama_supir" class="form-control form-purchase" placeholder="...">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2" style="margin-left: 10px;">
                                <label style="padding-bottom: 5px; font-size: 12px;">Kode Supir :</label>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group input-group">
                                    <input type="text" name="kd_supir" class="form-control form-purchase" placeholder="...">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2" style="margin-left: 10px;">
                                <label style="padding-bottom: 5px; font-size: 12px;">Alamat :</label>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group input-group">
                                    <input type="text" name="alamat" class="form-control form-purchase" placeholder="...">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2" style="margin-left: 10px;">
                                <label style="padding-bottom: 5px; font-size: 10px;">Telpon Supir :</label>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group input-group">
                                    <input type="number" min="0" name="tlp_supir" class="form-control form-purchase" placeholder="08xxxxxxxx">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2" style="margin-left: 10px;">
                                <label style="padding-bottom: 5px; font-size: 12px;">No SIM :</label>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group input-group">
                                    <input type="text" name="no_sim" class="form-control form-purchase" placeholder="....">
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