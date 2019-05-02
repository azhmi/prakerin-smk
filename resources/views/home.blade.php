@extends('layout.app')

@section('status-beranda')
    active
@endsection

@section('header')

<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="profile-info-inner">
                    <div class="profile-img">
                        <img src="img/profile/2.jpg" alt="" />
                    </div>
                    <div class="profile-details-hr">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                <div class="address-hr">
                                    <p><b>Nama</b><br /> {{ Auth::user()->name }}</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                    <p><b>Status</b><br /> {{ Auth::user()->level }} </p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="address-hr">
                                    <p><b>SMK PGRI Pekanbaru</b><br /> Harapan Raya, Jalan brigjend Katamso/Pandan No. 46 Pekanbaru</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#reviews"> Informasi Magang</a></li>
                        <li><a href="#INFORMATION"> Berkas-berkas</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">

                        <div class="product-tab-list tab-pane fade active in" id="reviews">
                         
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="content-profile">
                                                <p>Yayasan Pembina Lembaga Pendidikan SMK PGRI Pekanbaru merupakan lembaga pendidikan dan latihan yang menghasilkan tenaga kerja yang profesional, memiliki kecerdasan inteligensia, emosional, spiritual serta mampu bersaing di tingkat nasional /internasional yang berwawasan lingkungan. Oleh karena itu Yayasan Pembina Lembaga Pendidikan SMK PGRI Pekanbaru melaksanakan program PKL (Praktik Kerja Lapangan). PKL mengharuskan peserta didik belajar di dua tempat, yaitu di SMK dan di Dunia Usaha/Lapangan. Karena itu, evaluasi prestasi belajar peserta didik pun harus dilakukan di dua tempat, yaitu di SMK dan Dunia Usaha/Lapangan. Semua pembelajaran yang berlangsung di SMK dievaluasi oleh SMK, serta pelatihan yang berlangsung di Dunia Usaha/Lapangan dievaluasi oleh Dunia Usaha/Lapangan.
<p>Pada saat ini prosedur pelaksanaan PKL di Yayasan Pembina Lembaga Pendidikan SMK PGRI Pekanbaru masih sulit di pantau oleh para siswa, siswa hanya bisa mengetahui informasi sebelum melaksanakan PKL melalui pengumuman saja. Dan prosedur pelaksanaan sesudah PKL dalam segi pengambilan nilai dan sertifikat diberatkan pada siswa untuk ke instansi masing-masing dan diserahkan kembali ke pihak sekolah. 
</div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-tab-list tab-pane fade" id="INFORMATION">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="skill-title">
                                                            <h2>Berkas</h2>
                                                            <hr />
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="basic-list">
                                                <a href="berkas/unduh">
                                                    <li>Form penilaian <span class="pull-right label-danger label-1 label">Unduh</span></li>
                                                    </a>
                                                </ul>
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
    </div>
</div>
@endsection
           