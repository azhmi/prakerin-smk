@extends('layout.app')

@section('pembimbing')
active
@endsection

@section('header')
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            @foreach($pb as $p)
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" style="margin-bottom:10px;">
                <div class="hpanel hblue contact-panel contact-panel-cs responsive-mg-b-30">
                    <div class="panel-body custom-panel-jw">
                        <div class="social-media-in">
                            <a href="/pembimbing/edit/{{$p->pbid}}"><i class="fa fa-pencil-square-o"></i></a>
                            <form method="POST" action="/pembimbing/delete/{{$p->pbid}}">
                                {{csrf_field()}} {{method_field('DELETE')}}

                                <button type="submit"> <a><i class="fa fa-trash"></i></a></button>
                            </form>
                        </div>
                        <!-- <img alt="logo" class="img-circle m-b" src="img/contact/1.jpg"> -->
                        <h3><a href="">{{$p->pbnam}}</a></h3>
                        <div class="course-des">
                            <p><span><i class="fa fa-clock"></i></span> <b>NIP:</b>{{$p->pbnip}}</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>jenis kelamin .:</b> {{$p->pbjk}}</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>TTL:</b> {{$p->pbtemla}}, {{$p->pbtangla}}
                            </p>
                        </div>
                    </div>
                    <!-- <div class="panel-footer contact-footer">
                        <div class="professor-stds-int">
                            <div class="professor-stds">
                                <div class="contact-stat"><span>Pembimbing sekarang: </span> <strong>8 Siswa</strong></div>
                            </div>
                            <div class="professor-stds">
                                <div class="contact-stat"><span>Total: </span> <strong>28 Siswa</strong></div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            @endforeach
        </div>
        {{$pb->links()}}
    </div>
</div>
@endsection
