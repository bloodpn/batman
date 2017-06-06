@extends('customer.default')

@section('title','Master Kendaraan')

@section('content')

<div class="box box-primary box-solid direct-chat direct-chat-primary">
	<div class="box-header">
		<a href="/"><i class="fa fa-home fa-lg"></i></a> | 
		<h3 class="box-title">Master Kendaraan</h3>
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
                        <li class="active"><a href="#datakendaraan" data-toggle="tab">Data Kendaraan</a></li>
                        <li><a href="#tambahkendaraan" data-toggle="tab">Tambah Baru</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>
        <div class="tab-content">
            <div class="tab-pane fade in active" id="datakendaraan">
                <div class="panel-body" style="font-size: 12px;">
                  <table class="table table-striped table-bordered table-paginate" cellspacing="0" width="100%" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>No Body</th>
                                <th>Seat</th>
                                <th>Nama Supir</th>
                                <th>Merk Mobil</th>
                                <th>Warna</th> 
                                <th>Tahun</th>
                                <th>No Polisi</th>
                                <th width ="11%">Action</th>
                            </tr>
                        </thead>
                    <tbody>
                    <?php $no = 0; ?>
                    @foreach ($cars as $cars)
                    <?php $no++; ?>
                        <tr class="odd gradeX">
                            <td>{{$no}}</td>
                            <td>{{$cars->no_body}}</td>
                            <td>{{$cars->seat->name}} <b> {{$cars->seat->jumlah}}</td>
                            <td>{{$cars->drivers->name}}</td>
                            <td>{{$cars->merk}}</td>
                            <td>{{$cars->warna}}</td>
                            <td>{{$cars->tahun_kendaraan}}</td>
                            <td>{{$cars->plat_number}}</td>
                            <td>
                                <a href="/masterkendaraan/edit/{{$cars->id}}">Edit</a> |
                                <a href="">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>    
                  </table>  
                </div>
             </div>
             <div class="tab-pane fade" id="tambahkendaraan">
             <form action="/masterkendaraan" method="post">
             {{ csrf_field() }}
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="row">
                             <div class="col-lg-2" style="margin-left: 10px;">
                                 <label style="padding-bottom: 5px; font-size: 12px;">No Body :</label>
                             </div>
                             <div class="col-lg-3">
                                 <div class="form-group input-group">
                                     <input type="text" name="no_body" class="form-control form-purchase">
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
                                        <option value="{{$seat->id}}">{{$seat->name}} <b> {{$seat->jumlah}}</option>
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
                                        <option value="{{$drivers->id}}">{{$drivers->name}}</option>
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
	</div>
</div>

@endsection