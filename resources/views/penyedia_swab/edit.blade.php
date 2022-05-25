@extends('layouts.default')
@section('title', __( 'Edit Jenis Barang' ))
@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
        	<div class="card">
                <div class="header">
                    <h2>
                        Edit Jenis Barang
                    </h2>
                    <ul class="header-dropdown m-r--5">
                    </ul>
                </div>
                <div class="body">
                	@include('layouts.partials.notification')
                    <form method="POST" action="{{ URL::to('/do-update-penyedia-swab/'.$data->id) }}">
                    	@csrf
                        <div class="col-md-6">
                            <label>Jenis Swab</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <select name="id_jenis_swab" class="form-control">
                                        <option value="" disabled selected>-- Pilih Jenis Swab --</option>
                                        @foreach($dataSwab as $value)
                                        <option value="{{ $value->id }}" <?php if($data->id_jenis_swab == $value->id){echo 'selected';}?>>{{ $value->nama_layanan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Jenis Penyedia</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <select name="id_jenis_penyedia" class="form-control">
                                        <option value="" disabled selected>-- Pilih Jenis Penyedia --</option>
                                        @foreach($dataPenyedia as $value)
                                        <option value="{{ $value->id }}" <?php if($data->id_jenis_penyedia == $value->id){echo 'selected';}?>>{{ $value->jenis_penyedia }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Nama Penyedia Test</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Nama Penyedia Test" name="nama_penyedia" required="" value="{{ $data->nama_penyedia }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Info Penyedia</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Info Penyedia" name="info_penyedia" required="" value="{{ $data->info_penyedia }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Kecamatan</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <select name="id_kecamatan" class="form-control">
                                        <option value="" disabled selected>-- Pilih Kecamatan --</option>
                                        @foreach($dataKecamatan as $value)
                                        <option value="{{ $value->id }}" <?php if($data->id_kecamatan == $value->id){echo 'selected';}?>>{{ $value->nama_kecamatan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Alamat</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Alamat" name="alamat" required="" value="{{ $data->alamat }}">
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