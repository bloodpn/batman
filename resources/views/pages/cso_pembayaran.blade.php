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
      <form action="/invoice_cso" method="POST">
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
                      <select class="form-control" style="width: 100%;" id="asal" name="type_payment">
                        <option value="cash">Cash</option>
                        <option value="debit">Debit</option>
                        <option value="credit">Credit</option>
                      </select>
                  </td>
                </tr>
                <tr>
                  <td>Voucher</td>
                  <td>
                    <input type="number" name="voucher" id="vouchercode" class="form-control" placeholder="Kode Voucher">
                    <input type="hidden" name="id_reservation" value="{{$id_reservation}}">
                  </td>
                  <td><button class="btn btn-primary btn-flat">Cek</button></td>
                </tr>
                <tr>
                  <td>Discount</td>
                  <td colspan="2"><input type="text"  class="form-control" name="discount" id="discount" value="0" readonly=""></td>
                </tr>
                <tr>
                  <td>Total Pembayaran</td>
                  <td colspan="2"><input type="text"  class="form-control" name="total_biaya" value="{{$total_price}}" readonly=""></td>
                </tr>
              </table>
            </div>
          </div>

          <div class="row" id="printInvoice">
            <div class="col-lg-4">
              <div class="row">
                <div class="col-lg-12 text-center" style="font-size: 30px;">Xtrans</div>
              </div>
              <div class="row">
                <div class="col-lg-12 text-center">Pelopor Ontime Shuttle</div>
              </div>
              <br>
              <div class="row">
                <div class="col-lg-12">{{$origin->name}} - {{$destination->name}}</div>
              </div>
              <div class="row">
                <div class="col-lg-12">{{$depart_date}} - {{$time}} WIB</div>
              </div>
              <div class="row">
                <div class="col-lg-12">{{$ticketnumber}}</div>
              </div>
              <br>
              <table>
                <tr>
                  <td class="col-md-3">Name</td>
                  <td>: {{$name}}</td>
                </tr>
                <tr>
                @foreach ($seat as $seats)
                  <td class="col-md-3">Seat</td>
                  <td>: {{$seats}}</td>
                @endforeach
                </tr>
                <tr>
                  <td class="col-md-3">Price</td>
                  <td>: {{$price}}</td>
                </tr>
                <tr>
                  <td class="col-md-3">Discount</td>
                  <td>:</td>
                </tr>
                <tr>
                  <td class="col-md-3">Total</td>
                  <td>: {{$total_price}}</td>
                </tr>
              </table>
            </div>
          </div>

          <div class="row">
            <div class="col-md-1 pull-right">
              <input type="submit" class="btn btn-primary btn-flat" name="Submit" value="create">
              {{csrf_field()}}
            </div>
          </div>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
      </form>
    </section>
    <!-- /.content -->
  </div>
 @endsection

@section('script')
 function printContent(divName) {
    var printInvoice = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printInvoice;
    window.print();
    window.location.href= '{{url("invoice_cso")}}';
    
  }
@endsection