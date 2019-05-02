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
                        <li class="active"><a href="#description">Add Siswa</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                    
                                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <input name="name" type="text" class="form-control" placeholder="Nama" required >
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="email" type="email" class="form-control" placeholder="email"required>
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="nins" type="number" class="form-control" placeholder="NISN" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="temla" type="text" class="form-control" placeholder="temla" required>
                                                    </div> 
                                                    <div class="form-group">
                                                        <input name="tangla" type="date" class="form-control" placeholder="tangla" required>
                                                    </div>
                                                   
                                                    <div class="form-group">
                                                        <input name="jurusan" type="text" class="form-control" placeholder="jurusan" required>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                    <select data-placeholder="Choose a Country..." class="chosen-select" tabindex="-1" name="jk" required>
														<option value="">Jenis kelamin</option>
													
                                                        <option value="perempuan">perempuan</option>
                                                        <option value="laki-laki">laki-laki</option>
                                                     
														</select>
                                                        
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