@extends('layout.app')

@section('siswa')
    active
@endsection

@section('header')
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row"> 
        @foreach($user as $u )
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" style="margin-bottom:10px;">
                <div class="hpanel hblue contact-panel contact-panel-cs responsive-mg-b-30">
                   
                    <div class="panel-body custom-panel-jw">
                        <div class="social-media-in">
                            <a href="/siswa/edit/{{$u->id}}"><i class="fa fa-pencil-square-o"></i></a>
                            <form method="POST" action="/siswa/delete/{{$u->id}}"> 
										{{csrf_field()}} {{method_field('DELETE')}}
										
										<button  type="submit"> <a ><i class="fa fa-trash"></i></a></button>
									</form>
                        </div>
                        <!-- <img alt="logo" class="img-circle m-b" src="img/contact/1.jpg"> -->
                        <h3><a href="">{{$u->name}}</a></h3>
                        <p class="all-pro-ad">{{$u->email}}</p>
                        <div class="course-des">
                            
                            <p><span><i class="fa fa-clock"></i></span> <b>NISN:</b> {{$u->nins}}</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Jenis Kelamin:</b> {{$u->jk}}</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Jurusan:</b> {{$u->jurusan}}</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>TTL:</b> {{$u->temla}},{{$u->tangla}}</p>
                        </div>
                    </div>
               
        </div>
    </div>
     @endforeach
    
</div> {{$user->links()}}
@endsection