@extends('front.default')
@section('title', __( 'Daftar Penyedia Swab Test' ))
@section('content')


<section class="section section-l bg-light section-spread pb-0 ov-h has-overlay" id="spread">
    <div class="overlay bg-white h-40 bottom"></div>
    <div class="container">
        <div class="section-head text-center wide-lg">
            <h5 class="title">Daftar Penyedia Swab Test</h5>
        </div>
        <div class="section-content">
            <div class="row g-gs justify-content-center">
                @foreach($data as $key => $value)
                    <?php 
                    if(@$data[$key+1]->nama_penyedia != $value->nama_penyedia){?>

                    <div class="col-md-8 col-lg-4">
                        <div class="box box-alt">
                            <a href="{{ URL::to('detail-penyedia-swab-test/'.$value->id) }}">
                                <div class="box-gfx">
                                    <img src="{{ asset('images') }}/pcr.jpg" alt="">
                                </div>
                                <div class="box-content">
                                    <h4 class="title">{{ $value->nama_penyedia }}</h4>
                                    <p>{{ $value->info_penyedia }}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php }?>
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection