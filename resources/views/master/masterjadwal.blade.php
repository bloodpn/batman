@extends('layouts.master')

@section('title','Master Jadwal')

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

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Hello Rob!</h3>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-lg-1">
              <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modaljadwal">Jadwal Baru</button>
            </div>
          </div>

          <div class="row">
            <div class="tab-pane fade in active" id="detail">
              <div class="panel-body" style="font-size: 12px;">
                <table class="table table-striped table-bordered table-paginate" cellspacing="0" width="100%" id="dataTables-example">
                  <thead>
                    <tr>
                        <th>No.</th>
                        <th class="col-md-1">No. Body</th>
                        <th class="col-md-2">Asal</th>
                        <th class="col-md-2">Tujuan</th> 
                        <th class="col-md-1">Jam</th>
                        <th class="col-md-1">Harga</th>
                        <th class="col-md-1">Tipe</th>
                        <th class="col-md-2">Jadwal Utama</th>
                        <th class="col-md-1">status</th>
                        <th class="col-md-1">Action</th>
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
                      <td></td>
                      <td></td>
                      <td>
                        <button type="submit" class="btn btn-info btn-sm pull-center">Edit</button>
                        <!-- <button type="submit" class="btn btn-info btn-sm pull-center">Hapus</button> -->
                      </td>
                    </tr>
                  </tbody>  
                </table>
              </div>
           </div>
          </div>
        </div>
      </div>

<!--Modal Tambah Jadwal-->
        <div class="modal fade" id="modaljadwal">
          <form action="sparepart/proses_modal_supplier.php" method="POST">'
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">x</button>
                    <h4 class="modal-title">Tambah Jadwal</h4>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-3">
                      <label style="padding-bottom: 5px; font-size: 10.5px;">No. Body</label><br>
                      <label style="padding-bottom: 6px; font-size: 10.5px;">Asal</label><br>
                      <label style="padding-bottom: 5px; font-size: 10.5px;">Tujuan</label><br>
                      <label style="padding-bottom: 5px; font-size: 10.5px;">Jam Berangkat</label><br>
                      <label style="padding-bottom: 5px; font-size: 10.5px;">Tipe Jadwal</label><br>
                      <label style="padding-bottom: 5px; font-size: 10.5px;">Jadwal Utama</label><br>
                      <label style="padding-bottom: 5px; font-size: 10.5px;">Harga</label><br>
                    </div>
                    <div class="col-md-9">
                      <div class="form-group" style="margin-bottom: 0px">
                        <input type="text" name="nama_supplier" class="form-control form-purchase" placeholder="No. Body">
                      </div>
                      <div class="form-group" style="margin-bottom: 0px">
                          <input type="text" name="npwp_vendor" class="form-control form-purchase" placeholder="Asal">
                      </div>
                      <div class="form-group" style="margin-bottom: 0px">
                          <input type="text" name="contact_name" class="form-control form-purchase" placeholder="Tujuan">
                      </div>
                      <div class="form-group" style="margin-bottom: 0px;">
                          <input type="text" name="alamat" class="form-control form-purchase" placeholder="Jam Berangkat">
                      </div>
                      <div class="form-group" style="margin-bottom: 0px;">
                          <input type="text" name="alamat" class="form-control form-purchase" placeholder="Tipe Jadwal">
                      </div>
                      <div class="form-group" style="margin-bottom: 0px;">
                          <input type="text" name="keterangan" class="form-control form-purchase" placeholder="Jadwal Utama">
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

      </div>
    </div>
  </section>
 @endsection