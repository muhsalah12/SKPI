@extends('layouts.default')
@section('title', __( 'Tambah Jenis Swab Test' ))
@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
        	<div class="card">
                <div class="header">
                    <h2>
                        Tambah Jenis Swab Test
                    </h2>
                    <ul class="header-dropdown m-r--5">
                    </ul>
                </div>
                <div class="body">
                	@include('layouts.partials.notification')
                    <form method="POST" action="{{ URL::to('/do-add-jenis-swab') }}" enctype="multipart/form-data">
                    	@csrf
                        <div class="col-md-6">
                            <label>Nama Swab Test</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Nama Swab Test" name="nama_layanan" required="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Harga</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" class="form-control" placeholder="Harga" name="harga" required="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label>Info Swab</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Info Swab" name="info_swab" required="">
                                </div>
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary waves-effect">
                        	<i class="material-icons">save</i> 
	                        <span>SIMPAN</span>
	                    </button>
                    </form>
                </div>
            </div>
    	</div>
    </div>
</div>
@endsection