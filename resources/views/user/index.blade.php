@extends('layouts.default')
@section('title', __( 'Admin' ))
@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Daftar Admin
                </h2>
                
                <ul class="header-dropdown m-r--5">
                    <a href="{{ URL::to('/tambah-user') }}" class="btn btn-success">Tambah Admin</a>
                </ul> 
                
            </div>
            <div class="body">
            	@include('layouts.partials.notification')
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-exportable dataTable">
                        <thead>
                            <tr>
                            	<th style="width: 10px;">No</th>
                                <th>Nama Admin</th>
                                <th>Jenis Kelamin</th>
                                <th>Username</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($data AS $key => $value)
                        		<tr>
                        			<td>{{ $loop->iteration }}</td>
                        			<td>{{ $value->nama }}</td>
                                    <td>@if($value->jk == 'L')
                                            Laki laki
                                        @else
                                            Perempuan
                                        @endif
                                    </td>
                                    <td>{{ $value->username }}</td>
                                    <td>
                                        <a href="{{ URL::to('edit-user/'.$value->id) }}" class="btn btn-warning">Edit</a>
                                        <a href="{{ URL::to('delete-user/'.$value->id) }}" class="btn btn-danger" onclick="return confirm('Apakah anda yakin.?')">Hapus</a>
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


