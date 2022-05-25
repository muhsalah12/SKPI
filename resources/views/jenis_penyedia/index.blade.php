@extends('layouts.default')
@section('title', __( 'Jenis Penyedia' ))
@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Daftar Jenis Penyedia
                </h2>
                
                <ul class="header-dropdown m-r--5">
                    <a href="{{ URL::to('/tambah-jenis-penyedia') }}" class="btn btn-success">Tambah Jenis Penyedia</a>
                </ul> 
                
            </div>
            <div class="body">
            	@include('layouts.partials.notification')
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-exportable dataTable">
                        <thead>
                            <tr>
                            	<th style="width: 10px;">No</th>
                                <th>Jenis Penyedia</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($data AS $key => $value)
                        		<tr>
                        			<td>{{ $loop->iteration }}</td>
                                    <td>{{ $value->jenis_penyedia }}</td>
                                    <td>
                                        <a href="{{ URL::to('edit-jenis-penyedia/'.$value->id) }}" class="btn btn-warning">Edit</a>
                                        <a href="{{ URL::to('delete-jenis-penyedia/'.$value->id) }}" class="btn btn-danger" onclick="return confirm('Apakah anda yakin.?')">Hapus</a>
                                    </td>
                        		</tr>
                        	@endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


