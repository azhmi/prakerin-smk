@extends('layout.app')

@section('status-beranda')
    active
@endsection

@section('header')
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#description">Magang</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <form id="add-department" method="post" action="/magang/add/save" class="add-department">
                                        @csrf
                                            <div class="row">
                                            
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="chosen-select-single mg-b-20">
                                                <label>Nama Siswa</label>
                                                <select data-placeholder="Choose a Country..."  required class="chosen-select" tabindex="-1" name="magsisid">
														<option value="">Select</option>
														@foreach($siswa as $a)
                                                        <option value="{{$a->id}}">{{$a->name}}</option>
                                                        @endforeach
														</select>
                                            </div>
                                            <div class="chosen-select-single mg-b-20">
                                                <label>Tempat Magang</label>
                                                <select data-placeholder="Choose a Country..."  required class="chosen-select" tabindex="-1" name="magtemid">
														<option value="">Select</option>
														@foreach($tm as $a)
                                                        <option value="{{$a->tmid}}">{{$a->tmnam}}</option>
                                                        @endforeach
														</select>
                                            </div>
                                            <div class="chosen-select-single mg-b-20">
                                                <label>Guru Pembimbing</label>
                                                <select data-placeholder="Choose a Country..." class="chosen-select" tabindex="-1" name="magpemid" required>
														<option value="">Select</option>
														@foreach($pb as $a)
                                                        <option value="{{$a->pbid}}">{{$a->pbnam}}</option>
                                                        @endforeach
														</select>
                                            </div>
                                           
                                                
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Nama" name="tahun" value="<?php echo date('Y')?>" readonly>
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