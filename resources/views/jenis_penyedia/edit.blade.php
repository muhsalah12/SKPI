@extends('layouts.default')
@section('title', __( 'Edit Jenis Jenis Penyedia' ))
@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
        	<div class="card">
                <div class="header">
                    <h2>
                        Edit Jenis Jenis Penyedia
                    </h2>
                    <ul class="header-dropdown m-r--5">
                    </ul>
                </div>
                <div class="body">
                	@include('layouts.partials.notification')
                    <form method="POST" action="{{ URL::to('/do-update-jenis-penyedia/'.$data->id) }}">
                    	@csrf
                        <div class="col-md-6">
                            <label>Jenis Penyedia</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Jenis Penyedia" name="jenis_penyedia" required="" value="{{ $data->jenis_penyedia }}">
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