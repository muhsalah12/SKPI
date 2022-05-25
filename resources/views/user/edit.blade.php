@extends('layouts.default')
@section('title', __( 'Edit Admin' ))
@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
        	<div class="card">
                <div class="header">
                    <h2>
                        Edit Admin
                    </h2>
                    <ul class="header-dropdown m-r--5">
                    </ul>
                </div>
                <div class="body">
                	@include('layouts.partials.notification')
                    <form method="POST" action="{{ URL::to('/do-update-user/'.$data->id) }}" enctype="multipart/form-data">
                    	@csrf
                        <div class="col-md-6">
                            <label>Nama Admin</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Nama" name="nama" required="" value="{{ $data->nama }}">
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="check_email" value="{{ $data->email }}">
                        <div class="col-md-6">
                            <label>Jenis Kelamin</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <select class="form-control" name="jk">
                                        <option value="" disabled selected>-- Pilih Jenis Kelamin --</option>
                                        <option value="L" <?php if($data->jk == 'L'){echo 'selected';}?>>Laki laki</option>
                                        <option value="P" <?php if($data->jk == 'P'){echo 'selected';}?>>Perempuan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Username</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Username" name="username" required="" value="{{ $data->username }}">
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            
                            <label>Password</label>
                            <label style="color: red; font-size: 12px; font-weight: normal; margin-left: 15px;">*Isi field dibawah untuk merubah password</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="password" class="form-control" placeholder="Password" name="password">
                                </div>
                            </div>
                        </div>
                         <div class="col-md-12">
                            <label>Foto</label> 
                            <label style="color: red; font-size: 12px; font-weight: normal; margin-left: 15px;">*Isi field dibawah untuk merubah Foto</label>
                            <div class="form-group">
                                <input type="file" name="image" class="form-control">
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