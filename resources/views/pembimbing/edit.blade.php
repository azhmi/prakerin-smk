@extends('layout.app')

@section('siswa')
    active
@endsection

@section('header')
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#description">Edit pembimbing</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                    <form method="POST" action="/pembimbing/edit/{{$pb->pbid}}/save">
                        @csrf {{ method_field('patch')}}
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <input name="name" type="text" class="form-control" placeholder="Nama" required value="{{$pb->pbnam}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="pbnip" type="number" class="form-control" placeholder="NIP"  required value="{{$pb->pbnip}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="pbtemla" type="text" class="form-control" placeholder="tempat lahir" required  value="{{$pb->pbtemla}}">
                                                    </div>
                                                   
                                                    <div class="form-group">
                                                        <input name="pbtangla" type="date" class="form-control" placeholder="tangla" required value="{{$pb->pbtangla}}">
                                                    </div>
                                                
                                                    
                                                    <div class="form-group">
                                                    <select data-placeholder="Choose a Country..." class="chosen-select" tabindex="-1" name="pbjk" required>
														<option value="">Jenis kelamin </option>
													
                                                        <option value="perempuan" <?php if($pb->pbjk=="perempuan") { echo"selected";} ?>>perempuan</option>
                                                        <option value="laki-laki" <?php if($pb->pbjk=="laki-laki") { echo"selected";} ?>>laki-laki</option>
                                                        </select>
                                                    </div>
                                                    <div class="row">
                                                    
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