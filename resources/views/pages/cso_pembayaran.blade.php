@extends('layouts.master')

@section('title','Payment')

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
            <div class="col-md-6">
             <table class="table table-striped">
                <tr>
                  <th class="text-center" colspan="2">{{$origin->name}} - {{$destination->name}}</th>
                </tr>
                <tr>
                  <td class="col-md-5">Tanggal Keberangkatan</td>
                  <td>{{$depart_date}}</td>
                </tr>
                <tr>
                  <td class="col-md-5">Nama</td>
                  <td>{{$name}}</td>
                </tr>
                <tr>
                  <td>No. Telepon</td>
                  <td>{{$phone}}</td>
                </tr>
                <tr>
                  <td>Jumlah Penumpang</td>
                  <td>{{$jumlah}}</td>
                </tr>
                <tr>
                  <td>Harga Tiket</td>
                  <td>{{$price}}</td>
                </tr>
                <tr>
                  <td class="col-md-5">Total Harga</td>
                  <td>{{$total_price}}</td>
                </tr>
                <tr></tr>
              </table>
            </div>
            <div class="col-md-6">
             <table class="table table-striped">
                <tr>
                  <th class="text-center" colspan="3">Pembayaran</th>
                </tr>
                <tr>
                  <td>Jenis Pembayaran</td>
                  <td colspan="2">
                      <select class="form-control" style="width: 100%;" id="asal">
                        <option>Cash</option>
                        <option>Debit</option>
                        <option>Credit</option>
                      </select>
                  </td>
                </tr>
                <tr>
                  <td>Voucher</td>
                  <td>
                    <input type="number" name="phone" id="phoneCustomer" class="form-control" placeholder="Kode Voucher" required="">
                    <input type="hidden" name="id_reservation" value="{{$id_reservation}}">
                  </td>
                  <td><button class="btn btn-primary btn-flat">Cek</button></td>
                </tr>
                <tr>
                  <td>Discount</td>
                  <td colspan="2">0</td>
                </tr>
                <tr>
                  <td>Total Pembayaran</td>
                  <td colspan="2">Budi</td>
                </tr>
              </table>
            </div>
          </div>
          <div class="row">
            <div class="col-md-1 pull-right">
              <input type="submit" class="btn btn-primary btn-flat" name="Submit">
            </div>
          </div>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
 @endsection