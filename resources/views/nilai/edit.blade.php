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
                        <li class="active"><a href="#description">Edit Nilai </a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                    
                                        <form id="add-department" method="post" action="/nilai/edit/{{ $nl->nilid}}/save" class="add-department">
                                        @csrf {{ method_field('patch')}}
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <label for="budget">Nilai Disiplin Kerja </label>
                                                    <div class="form-group">
                                                        <input name="nil1" type="number" class="form-control" placeholder="Nilai Disiplin Kerja" required value="{{$nl->nil1}}">
                                                    </div>
                                                    <label for="budget">Penampilan dan Sikap  </label>
                                                    <div class="form-group">
                                                        <input name="nil2" type="number" class="form-control" placeholder="Penampilan dan Sikap" required value="{{$nl->nil2}}">
                                                    </div>
                                                    <label for="budget">Hubungan Kerja Terhadap Atasan dan Sesama Rekan </label>
                                                    <div class="form-group">
                                                        <input name="nil3" type="number" class="form-control" placeholder="Hubungan Kerja Terhadap Atasan dan Sesama Rekan" required value="{{$nl->nil3}}">
                                                    </div>
                                                    <label for="budget">Kesehatan Fisik</label>
                                                    <div class="form-group">
                                                        <input name="nil4" type="number" class="form-control" placeholder="Kesehatan Fisik" required value="{{$nl->nil4}}">
                                                    </div>
                                                    <label for="budget">Kerajinan dan Ketekunan Kerja </label>
                                                    <div class="form-group">
                                                        <input name="nil5" type="number" class="form-control" placeholder="Kerajinan dan Ketekunan Kerja " required value="{{$nl->nil5}}">
                                                    </div>
                                                    <label for="budget">Tanggung Jawab Terhadap Pekerjaan dan Kebersihan Lingkungan Kerja </label>
                                                    <div class="form-group">
                                                        <input name="nil6" type="number" class="form-control" placeholder="Tanggung Jawab Terhadap Pekerjaan dan Kebersihan Lingkungan Kerja" required value="{{$nl->nil6}}">
                                                    </div>
                                                    <label for="budget">Inisiatif dan Kreatifitas Kerja </label>
                                                    <div class="form-group">
                                                        <input name="nil7" type="number" class="form-control" placeholder="Inisiatif dan Kreatifitas Kerja" required value="{{$nl->nil7}}">
                                                    </div>
                                                    <label for="budget">Kecekatan dan Produktivitas Kerja </label>
                                                    <div class="form-group">
                                                        <input name="nil8" type="number" class="form-control" placeholder="Kecekatan dan Produktivitas Kerja" required value="{{$nl->nil8}}">
                                                    </div>
                                                    <label for="budget">Kualitas Kerja </label>
                                                    <div class="form-group">
                                                        <input name="nil9" type="number" class="form-control" placeholder="Kualitas Kerja" value="{{$nl->nil9}}" required>
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