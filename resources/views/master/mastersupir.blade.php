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
<!--box header-->

<div class="halaman">
	<div class="box-body"><br>
		<div class="col-lg-1">
            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modalsupir">Supir Baru</button>
        </div>
		  <div class="tab-pane fade in active" id="detail">
	        <div class="panel-body" style="font-size: 12px;">
              <table class="table table-striped table-bordered table-paginate" cellspacing="0" width="100%" id="dataTables-example">
                	<thead>
                    	<tr>
                        	<th>No.</th>
							<th>Nama Supir</th>
							<th>No Ktp</th>
                        	<th>Alamat</th> 
							<th>No Telp</th>
							<th>Keterangan</th>
                        	<th>Foto</th>
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
<div class="modal fade" id="modalsupir">
	      <form action="sparepart/proses_modal_supplier.php" method="POST">'
	      <div class="modal-dialog">
	          <div class="modal-content">
	              <div class="modal-header">
    	                <button type="button" class="close" data-dismiss="modal"></button>
                        <h4 class="modal-title">Tambah Supir</h4>
	              </div>
	              <div class="modal-body">
	                  <div class="row">
                        <div class="col-md-2">
                            <label style="padding-bottom: 4px; font-size: 10.5px;">Nama Supir</label><br><br>
                            <label style="padding-bottom: 4px; font-size: 10.5px;">No Ktp</label><br>
            				<label style="padding-bottom: 4px; font-size: 10.5px;">Alamat</label><br>
                            <label style="padding-bottom: 4px; font-size: 10.5px;">No Telp</label><br><br>
                            <label style="padding-bottom: 4px; font-size: 10.5px;">Keterangan</label><br>
                            <label style="padding-bottom: 4px; font-size: 10.5px;">Foto</label><br>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group input-group" style="margin-bottom: 0px">
                                <input type="text" name="nama_supplier" class="form-control form-purchase" placeholder="Nama Supir">
                            </div>
                            <div class="form-group input-group" style="margin-bottom: 2px">
                                <input type="text" name="npwp_vendor" class="form-control form-purchase" placeholder="No Ktp">
                            </div>
        					<div class="form-group input-group" style="margin-bottom: 0px">
                                <input type="text" name="contact_name" class="form-control form-purchase" placeholder="Alamat">
                            </div>
                            <div class="form-group input-group" style="margin-bottom: 0px;">
                                <input type="text" name="alamat" class="form-control form-purchase" placeholder="No Telp">
                            </div>
                            <div class="form-group input-group" style="margin-bottom: 0px;">
                                <input type="text" name="alamat" class="form-control form-purchase" placeholder="Keterangan">
                            </div>
                            
                        	<div class="form-group input-group" style="margin-bottom: 0px;">
                        	<input type="file" name="file_foto" class="form-control-file" onchange="PreviewImage();" id="uploadImage" required="" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Maximum File Upload 2MB with extension .jpg .jpeg .gif .png</small>
                        </div>
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