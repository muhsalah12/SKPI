<?php 
use App\Models\PenyediaSwab;
use App\Models\Jenis_swab;
use App\Models\Jenis_penyedia;
use App\Models\Kecamatan;
?>
@extends('front.default')
@section('title', __( 'Daftar Penyedia Swab Test' ))
@section('content')

<section class="section section-l bg-light section-spread pb-0 ov-h has-overlay" id="spread">
    <div class="overlay bg-white h-40 bottom"></div>
    <div class="container">
        <div class="section-content section-content-boxed">
            <div class="row g-gs justify-content-center align-items-center">
                <div class="col-lg-8">
                    <div class="list-block pr-lg-4">
                        <table class="table table-user-information">
                            <tbody>
                                <tr>
                                    <td>Nama Penyedia</td>
                                    <td>{{ $data->nama_penyedia }}</td>
                                </tr>
                                <tr>
                                    <td>Jenis Swab Test</td>
                                    @php
                                    $dataJenis = Jenis_swab::join('penyedia_swab as ps','ps.id_jenis_swab','=','jenis_swab.id')->select('jenis_swab.*')->where('ps.nama_penyedia', $data->nama_penyedia)->get()->all();
                                    @endphp
                                    <td>
                                        @foreach($dataJenis as $value)
                                            {{ $value->nama_layanan }} : {{ number_format($value->harga) }} <br>
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jenis Penyedia</td>
                                    @php
                                    $dataPe = Jenis_penyedia::join('penyedia_swab as ps','ps.id_jenis_penyedia','=','jenis_penyedia.id')->select('jenis_penyedia.*')->where('ps.nama_penyedia', $data->nama_penyedia)->get()->all();
                                    @endphp
                                    <td>
                                        @foreach($dataPe as $values)
                                            {{ $values->jenis_penyedia }} <br>
                                        @endforeach
                                    </td>
                                </tr>

                                <tr>
                                   
                                    <td>Alamat</td>
                                    <td>{{ $data->alamat }}</td>

                                </tr>
                                <tr>
                                   
                                    <td>Info</td>
                                    <td>{{ $data->info_penyedia }}</td>

                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class=" col-sm-10 col-md-8 col-lg-4">
                    <img src="{{ asset('images') }}/pcr.jpg" class="mb-2 mb-sm-0" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection