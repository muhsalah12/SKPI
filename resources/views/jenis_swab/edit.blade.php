@extends('layouts.default')
@section('title', __( 'Edit Jenis Swab' ))
@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
        	<div class="card">
                <div class="header">
                    <h2>
                        Edit Jenis Swab
                    </h2>
                    <ul class="header-dropdown m-r--5">
                    </ul>
                </div>
                <div class="body">
                	@include('layouts.partials.notification')
                    <form method="POST" action="{{ URL::to('/do-update-jenis-swab/'.$data->id) }}">
                    	@csrf
                        <div class="col-md-6">
                            <label>Nama Swab Test</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Nama Swab Test" name="nama_layanan" required="" value="{{ $data->nama_layanan }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Harga</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" class="form-control" placeholder="Harga" name="harga" required="" value="{{ $data->harga }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label>Info Swab</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Info Swab" name="info_swab" required="" value="{{ $data->info_swab }}">
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