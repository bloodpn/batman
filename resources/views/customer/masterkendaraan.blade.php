@extends('customer.default')

@section('title','Master Kendaraan')

@section('content')

<div class="box box-primary box-solid direct-chat direct-chat-primary">
	<div class="box-header">
		<h3 class="box-title">Master Kendaraan</h3>
		<div class="box-tools pull-right">
	      <button class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle">Bantuan</button>
	    </div>
	</div>
<!--box header-->

<div class="halaman">
	<div class="box-body"><br>
		<div class="col-lg-1">
            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modalkendaraan">Kendaraan Baru</button>
        </div>
		  <div class="tab-pane fade in active" id="detail">
	        <div class="panel-body" style="font-size: 12px;">
              <table class="table table-striped table-bordered table-paginate" cellspacing="0" width="100%" id="dataTables-example">
                	<thead>
                    	<tr>
                        	<th>No.</th>
							<th>No Body</th>
							<th>Merk Mobil</th>
                        	<th>Warna</th> 
							<th>Tahun</th>
							<th>No Polisi</th>
							<th>Keterangan</th>
							<th width ="11%">Action</th>
                    	</tr>
                	</thead>
            	<tbody>
                	<tr class="odd gradeX">
                    	<td></td>
						<td></td>
                    	<td></td>
                    	<td></td>
                    	<td></td>
                    	<td></td>
                    	<td></td>
                    	<td>
							<button type="submit" class="btn btn-info btn-sm pull-center">Edit</button>
							<button type="submit" class="btn btn-info btn-sm pull-center">Hapus</button>
						</td>
                	</tr>
                </tbody>
              </table>	
     		</div>
         </div>
	</div>
</div>

<!--Modal Tambah Jadwal-->
<div class="modal fade" id="modalkendaraan">
	      <form action="sparepart/proses_modal_supplier.php" method="POST">'
	      <div class="modal-dialog">
	          <div class="modal-content">
	              <div class="modal-header">
    	                <button type="button" class="close" data-dismiss="modal"></button>
                        <h4 class="modal-title">Tambah Kendaraan</h4>
	              </div>
	              <div class="modal-body">
	                  <div class="row">
                        <div class="col-md-2">
                            <label style="padding-bottom: 4px; font-size: 10.5px;">No Body</label><br><br>
                            <label style="padding-bottom: 4px; font-size: 10.5px;">Merk Mobil</label><br>
            				<label style="padding-bottom: 4px; font-size: 10.5px;">Warna</label><br>
                            <label style="padding-bottom: 4px; font-size: 10.5px;">Tahun</label><br><br>
                            <label style="padding-bottom: 4px; font-size: 10.5px;">No Polisi</label><br>
                            <label style="padding-bottom: 4px; font-size: 10.5px;">Keterangan</label><br>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group input-group" style="margin-bottom: 0px">
                                <input type="text" name="nama_supplier" class="form-control form-purchase" placeholder="No Body">
                            </div>
                            <div class="form-group input-group" style="margin-bottom: 2px">
                                <input type="text" name="npwp_vendor" class="form-control form-purchase" placeholder="Merk Mobil">
                            </div>
        					<div class="form-group input-group" style="margin-bottom: 0px">
                                <input type="text" name="contact_name" class="form-control form-purchase" placeholder="Warna">
                            </div>
                            <div class="form-group input-group" style="margin-bottom: 0px;">
                                <input type="text" name="alamat" class="form-control form-purchase" placeholder="Tahun">
                            </div>
                            <div class="form-group input-group" style="margin-bottom: 0px;">
                                <input type="text" name="alamat" class="form-control form-purchase" placeholder="No Polisi">
                            </div>
                            <div class="form-group input-group" style="margin-bottom: 0px;">
                                <input type="text" name="keterangan" class="form-control form-purchase" placeholder="Keterangan">
                            </div>
            			</div>
                    </div>
	              </div>
	              <div class="modal-footer">
                    <button type="submit" class="btn btn-default">Submit</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
                  </div>
	          </div>
	      </div>
	      </form>
	  </div>

@endsection