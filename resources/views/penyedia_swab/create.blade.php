@extends('layouts.default')
@section('title', __( 'Tambah Barang' ))
@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
        	<div class="card">
                <div class="header">
                    <h2>
                        Tambah Barang
                    </h2>
                    <ul class="header-dropdown m-r--5">
                    </ul>
                </div>
                <div class="body">
                	@include('layouts.partials.notification')
                    <form method="POST" action="{{ URL::to('/do-add-penyedia-swab') }}">
                    	@csrf
                        <div class="col-md-6">
                            <label>Jenis Swab</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <select name="id_jenis_swab" class="form-control">
                                        <option value="" disabled selected>-- Pilih Jenis Swab --</option>
                                        @foreach($dataSwab as $value)
                                        <option value="{{ $value->id }}">{{ $value->nama_layanan }}</option>
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
                                        <option value="{{ $value->id }}">{{ $value->jenis_penyedia }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Nama Penyedia Test</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Nama Penyedia Test" name="nama_penyedia" required="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Info Penyedia</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Info Penyedia" name="info_penyedia" required="">
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
                                        <option value="{{ $value->id }}">{{ $value->nama_kecamatan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Alamat</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Alamat" name="alamat" required="">
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