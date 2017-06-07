@extends('customer.default')

@section('title','Edit Master Cabang')

@section('content')

<div class="box box-primary box-solid direct-chat direct-chat-primary">
	<div class="box-header">
		<a href="/"><i class="fa fa-home fa-lg"></i></a> | 
		<h3 class="box-title">Master Cabang</h3>
		<div class="box-tools pull-right">
	      <button class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle">Bantuan</button>
	    </div>
	</div>
	<br>
	<div class="box-body">
	 <form action="/editmastercabang/{{$counter->id}}" method="post">
        <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-lg-2" style="margin-left: 20px;">
						<label style="padding-bottom: 5px; font-size: 12px;">Kode Cabang :</label>
					</div>
					<div class="col-lg-5">
						<div class="form-group input-group">
							<input type="text" name="kd_cabang" class="form-control form-purchase" value="{{ $counter->code }}">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-2" style="margin-left: 20px;">
						<label style="padding-bottom: 5px; font-size: 12px;">Nama Cabang :</label>
					</div>
					<div class="col-lg-5">
						<div class="form-group input-group">
							<input type="text" name="nama_cabang" class="form-control form-purchase" value="{{ $counter->name }}">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-2" style="margin-left: 20px;">
						<label style="padding-bottom: 5px; font-size: 12px">Alamat :</label>
					</div>
					<div class="col-lg-5">
						<div class="form-group input-group">
							<input type="text" name="alamat" class="form-control form-purchase" value="{{ $counter->address }}">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-2" style="margin-left: 20px;">
						<label style="padding-bottom: 5px; font-size: 12px">Kota :</label>
					</div>
					<div class="col-lg-5">
						<div class="form-group input-group">
							<input type="text" name="kota" class="form-control form-purchase" value="{{ $counter->city }}">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-2" style="margin-left: 20px">
						<label style="padding-bottom: 5px; font-size: 12px;">Telp :</label>
					</div>
					<div class="col-lg-5">
						<div class="form-group input-group">
							<input type="number" min="0" name="telp" class="form-control form-purchase" value="{{ $counter->phone }}">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-2" style="margin-left: 20px;">
						<label style="padding-bottom: 5px; font-size: 12px;">Tipe :</label>
					</div>
					<div class="col-lg-5">
						<div class="form-group input-group">
							<select class="form-control form-purchase" name="tipe">
						
								<option value="{{ $counter->type }}" {{ $counter->type == 'Agen' ? 'selected="selected"' : '' }} >Agen</option>
								<option value="{{ $counter->type }}" {{ $counter->type == 'Cabang' ? 'selected="selected"' : '' }}>Cabang</option>
							
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-11" style="margin-left: 20px;">
						<button type="submit" class="btn btn-primary pull-right">Submit</button>
					</div>
				</div>
				<br>
			</div>
		</div>
		</form>
	</div>
	<div class="box-footer">
		<div class="row">
			
		</div>
	</div>
</div>

@endsection