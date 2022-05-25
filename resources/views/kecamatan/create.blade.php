@extends('layouts.default')
@section('title', __( 'Tambah Kecamatan' ))
@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
        	<div class="card">
                <div class="header">
                    <h2>
                        Tambah Kecamatan
                    </h2>
                    <ul class="header-dropdown m-r--5">
                    </ul>
                </div>
                <div class="body">
                	@include('layouts.partials.notification')
                    <form method="POST" action="{{ URL::to('/do-add-kecamatan') }}" enctype="multipart/form-data">
                    	@csrf
                        <div class="col-md-6">
                            <label>Kecamatan</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Kecamatan" name="nama_kecamatan" required="">
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