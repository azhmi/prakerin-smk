@extends('layout.app')

@section('tempat')
    active
@endsection

@section('header')
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#description">edit Tempat</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <form id="add-department" method="post" action="/tempat-magang/edit/{{$tm->tmid}}/save" class="add-department">
                                @csrf {{method_field('patch')}}
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <input name="name" type="text" class="form-control" placeholder="Nama" name="tmnam" value="{{$tm->tmnam}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <input  type="text" class="form-control" placeholder="alamat" name="tamalt" required value="{{$tm->tamalt}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea type="text" class="form-control" required placeholder="profil" name="tamprof">{{$tm->tamprof}}</textarea>
                                                    </div>
                                                    
                                                </div>
                                                </div>
                                            </div>
                                            <br>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection