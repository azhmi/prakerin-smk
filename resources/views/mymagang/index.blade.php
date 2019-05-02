@extends('layout.app')

@section('status-beranda')
    active
@endsection

@section('header')
<div class="library-book-area mg-t-30">
    <div class="container-fluid">
        <div class="row">
        
        @if(count($bp)==0)
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="white-box">
                    <h3 class="box-title">Status Pembayaraan kosong</h3>
                    <ul class="basic-list">
                        <li>Bukti SPP  - 
                        <a class="Primary mg-b-10" href="#" data-toggle="modal" data-target="#spp">Upload</a>
                            <span class="pull-right label-warning label-2 label">Belum selesai</span></li> 
                                <div id="spp" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header header-color-modal bg-color-1">
                                            <h4 class="modal-title">Upload bukti pembayaran SPP</h4>
                                            <div class="modal-close-area modal-close-df">
                                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                            <div class="file-upload-inner ts-forms">
                                            <form method="post" action="/bukti-pembayaran/add/save" enctype="multipart/form-data">
                                                    @csrf
                                                <div class="input prepend-big-btn">
                                                    <label class="icon-right" for="prepend-big-btn">
                                                            <i class="fa fa-download"></i>
                                                        </label>
                                                      
                                                    <input  type="file" id="prepend-big-btn" required placeholder="no file selected" name="berkas1">
                                                    
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="modal-footer">
                                            <a data-dismiss="modal" href="#">Cancel</a>
                                            <button type="submit">Upload</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                               
                            <!-- <span class="pull-right label-success label-1 label">Selesai</span>
                            <div id="spp" class="modal modal-edu-general fullwidth-popup-InformationproModal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-close-area modal-close-df">
                                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                            </div>
                                            <div class="modal-body">
                                                <span class="educate-icon educate-info modal-check-pro information-icon-pro"> </span>
                                                <h2>Form 1!</h2>
                                                <hr>
                                                <i class="educate-icon educate-checked modal-check-pro"></i>
                                                <h2>Awesome!</h2>
                                                <p>The Modal plugin is a dialog box/popup window that is displayed on top of the current page</p>
                                            </div>
                                            <div class="modal-footer info-md">
                                                <a data-dismiss="modal" href="#">Cancel</a>
                                                <a href="#">Process</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                        </li>
                        <li>Bukti Biaya <br> Pembangunan  - 
                            <a class="Primary mg-b-10" href="#" data-toggle="modal" data-target="#pembangunan">Upload</a>
                            <span class="pull-right label-warning label-2 label">Belum selesai</span></li>
                            <div id="pembangunan" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header header-color-modal bg-color-1">
                                            <h4 class="modal-title">Upload bukti pembayaran Pembangunan </h4>
                                            <div class="modal-close-area modal-close-df">
                                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                            </div>
                                        </div>
                                        <form method="post" action="/bukti-pembayaran/add/save" enctype="multipart/form-data">
                                                    @csrf
                                        <div class="modal-body">
                                            <div class="file-upload-inner ts-forms">
                                                <div class="input prepend-big-btn">
                                                    <label class="icon-right" for="prepend-big-btn">
                                                            <i class="fa fa-download"></i>
                                                        </label>
                                                        <input  type="file" id="prepend-big-btn"  required placeholder="no file selected" name="berkas2">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <a data-dismiss="modal" href="#">Cancel</a>
                                            <button type="submit">Upload</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                        <li>Bukti Biaya <br> pendaftaran awal <a class="Primary mg-b-10" href="#" data-toggle="modal" data-target="#pendaftaran">Upload</a>
                        <span class="pull-right label-warning label-2 label">Belum selesai</span>
                        <div id="pendaftaran" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header header-color-modal bg-color-1">
                                            <h4 class="modal-title">Upload bukti pembayaran pendaftaran awal</h4>
                                            <div class="modal-close-area modal-close-df">
                                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                            </div>
                                        </div>
                                        <form method="post" action="/bukti-pembayaran/add/save" enctype="multipart/form-data">
                                                    @csrf
                                        <div class="modal-body">
                                            <div class="file-upload-inner ts-forms">
                                                <div class="input prepend-big-btn">
                                                    <label class="icon-right" for="prepend-big-btn">
                                                            <i class="fa fa-download"></i>
                                                        </label>
                                                        <input  type="file" id="prepend-big-btn"  required placeholder="no file selected" name="berkas3">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <a data-dismiss="modal" href="#">Cancel</a>
                                            <button type="submit">Upload</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </li>
                        
                        <li>Bukti Biaya <br> pendaftaran magang <a class="Primary mg-b-10" href="#" data-toggle="modal" data-target="#magang">Upload</a>
                        <span class="pull-right label-warning label-2 label">Belum selesai</span>
                        <div id="magang" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header header-color-modal bg-color-1">
                                            <h4 class="modal-title">Upload bukti pembayaran magang </h4>
                                            <div class="modal-close-area modal-close-df">
                                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                            </div>
                                        </div>
                                        <form method="post" action="/bukti-pembayaran/add/save" enctype="multipart/form-data">
                                                    @csrf
                                        <div class="modal-body">
                                            <div class="file-upload-inner ts-forms">
                                                <div class="input prepend-big-btn">
                                                    <label class="icon-right" for="prepend-big-btn">
                                                            <i class="fa fa-download"></i>
                                                        </label>
                                                        <input  type="file" id="prepend-big-btn"  required placeholder="no file selected" name="berkas4">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <a data-dismiss="modal" href="#">Cancel</a>
                                            <button type="submit">Upload</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>Bukti Biaya <br> baju magang <a class="Primary mg-b-10" href="#" data-toggle="modal" data-target="#baju">Upload</a>
                            <span class="pull-right label-warning label-2 label">Belum selesai</span>
                            <div id="baju" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header header-color-modal bg-color-1">
                                            <h4 class="modal-title">Upload bukti pembayaran baja magang </h4>
                                            <div class="modal-close-area modal-close-df">
                                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                            </div>
                                        </div>
                                        <form method="post" action="/bukti-pembayaran/add/save" enctype="multipart/form-data">
                                                    @csrf
                                        <div class="modal-body">
                                            <div class="file-upload-inner ts-forms">
                                                <div class="input prepend-big-btn">
                                                    <label class="icon-right" for="prepend-big-btn">
                                                            <i class="fa fa-download"></i>
                                                        </label>
                                                    < <input  type="file" id="prepend-big-btn" required placeholder="no file selected" name="berkas5">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <a data-dismiss="modal" href="#">Cancel</a>
                                            <button type="submit">Upload</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                             </li>
                    </ul>
                </div>
            </div>

            @elseif(count($bp)>0)
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="white-box">
                    <h3 class="box-title">Status Pembayaran ada</h3>
                    <ul class="basic-list">
                        <li>Bukti SPP  -  @if($bp[0]->berkas1!="")
                        <a class="Information Information-color mg-b-10" href="#" data-toggle="modal" data-target="#berkas1"> Lihat</a>
                        
                        <a class="Primary mg-b-10" href="#" data-toggle="modal" data-target="#spp">ubah</a>  
                            <span class="pull-right label-success label-1 label">Selesai</span>
                           
                            <div id="berkas1" class="modal modal-edu-general fullwidth-popup-InformationproModal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-close-area modal-close-df">
                                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                            </div>
                                            <div class="modal-body">
                                                <span class="educate-icon educate-info modal-check-pro information-icon-pro"> </span>
                                                <h2>Bukti SPP !</h2>
                                                <hr>
                                                <i class="educate-icon educate-checked modal-check-pro"></i>
                                                <a href="#"><img src="/gambar/berkas/{{$bp[0]->siswaid}}/{{$bp[0]->berkas1}}" alt=""></a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div id="spp" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header header-color-modal bg-color-1">
                                            <h4 class="modal-title">Upload bukti pembayaran SPP</h4>
                                            <div class="modal-close-area modal-close-df">
                                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                            <div class="file-upload-inner ts-forms">
                                                <div class="input prepend-big-btn">
                                                    <label class="icon-right" for="prepend-big-btn">
                                                            <i class="fa fa-download"></i>
                                                        </label>
                                                        <form method="post" action="/bukti-pembayaran/edit/{{$bp[0]->bpid}}/save" enctype="multipart/form-data">
                                                    @csrf {{method_field('patch')}}
                                                <div class="input prepend-big-btn">
                                                    <label class="icon-right" for="prepend-big-btn">
                                                            <i class="fa fa-download"></i>
                                                        </label>
                                                      
                                                    <input  type="file" id="prepend-big-btn" placeholder="no file selected" name="berkas1">
                                                    
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="modal-footer">
                                            <a data-dismiss="modal" href="#">Cancel</a>
                                            <button type="submit">Upload</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                                
                                @else
                        <a class="Primary mg-b-10" href="#" data-toggle="modal" data-target="#spp">Upload</a>
                            <span class="pull-right label-warning label-2 label">Belum selesai</span>
                                <div id="spp" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header header-color-modal bg-color-1">
                                            <h4 class="modal-title">Upload bukti pembayaran SPP</h4>
                                            <div class="modal-close-area modal-close-df">
                                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                            <div class="file-upload-inner ts-forms">
                                                <div class="input prepend-big-btn">
                                                    <label class="icon-right" for="prepend-big-btn">
                                                            <i class="fa fa-download"></i>
                                                        </label>
                                                        <form method="post" action="/bukti-pembayaran/edit/{{$bp[0]->bpid}}/save" enctype="multipart/form-data">
                                                    @csrf {{method_field('patch')}}
                                                <div class="input prepend-big-btn">
                                                    <label class="icon-right" for="prepend-big-btn">
                                                            <i class="fa fa-download"></i>
                                                        </label>
                                                      
                                                    <input  type="file" id="prepend-big-btn" placeholder="no file selected" name="berkas1">
                                                    
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="modal-footer">
                                            <a data-dismiss="modal" href="#">Cancel</a>
                                            <button type="submit">Upload</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                                
                            </div>
                               @endif
                            
                        </li>
                        <li>Bukti Biaya <br> Pembangunan  - @if($bp[0]->berkas2!="")
                        <a class="Information Information-color mg-b-10" href="#" data-toggle="modal" data-target="#berkas2"> Lihat</a>  <a class="Primary mg-b-10" href="#" data-toggle="modal" data-target="#Pembangunan">ubah</a>
                         
                             
                            <span class="pull-right label-success label-1 label">Selesai</span>
                           
                            <div id="berkas2" class="modal modal-edu-general fullwidth-popup-InformationproModal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-close-area modal-close-df">
                                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                            </div>
                                            <div class="modal-body">
                                                <span class="educate-icon educate-info modal-check-pro information-icon-pro"> </span>
                                                <h2>Bukti Biaya  Pembangunan!</h2>
                                                <hr>
                                                <i class="educate-icon educate-checked modal-check-pro"></i>
                                                <a href="#"><img src="/gambar/berkas/{{$bp[0]->siswaid}}/{{$bp[0]->berkas2}}" alt=""></a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div id="Pembangunan" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header header-color-modal bg-color-1">
                                            <h4 class="modal-title">Upload bukti pembayaran Pembangunan</h4>
                                            <div class="modal-close-area modal-close-df">
                                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                            <div class="file-upload-inner ts-forms">
                                                <div class="input prepend-big-btn">
                                                    <label class="icon-right" for="prepend-big-btn">
                                                            <i class="fa fa-download"></i>
                                                        </label>
                                                        <form method="post" action="/bukti-pembayaran/edit/{{$bp[0]->bpid}}/save" enctype="multipart/form-data">
                                                    @csrf {{method_field('patch')}}
                                                <div class="input prepend-big-btn">
                                                    <label class="icon-right" for="prepend-big-btn">
                                                            <i class="fa fa-download"></i>
                                                        </label>
                                                      
                                                    <input  type="file" id="prepend-big-btn" placeholder="no file selected" name="berkas2">
                                                    
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="modal-footer">
                                            <a data-dismiss="modal" href="#">Cancel</a>
                                            <button type="submit">Upload</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                                @else
                        <a class="Primary mg-b-10" href="#" data-toggle="modal" data-target="#Pembangunan">Upload</a>
                            <span class="pull-right label-warning label-2 label">Belum selesai</span>
                                <div id="Pembangunan" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header header-color-modal bg-color-1">
                                            <h4 class="modal-title">Upload bukti pembayaran Pembangunan</h4>
                                            <div class="modal-close-area modal-close-df">
                                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                            <div class="file-upload-inner ts-forms">
                                                <div class="input prepend-big-btn">
                                                    <label class="icon-right" for="prepend-big-btn">
                                                            <i class="fa fa-download"></i>
                                                        </label>
                                                        <form method="post" action="/bukti-pembayaran/edit/{{$bp[0]->bpid}}/save" enctype="multipart/form-data">
                                                    @csrf {{method_field('patch')}}
                                                <div class="input prepend-big-btn">
                                                    <label class="icon-right" for="prepend-big-btn">
                                                            <i class="fa fa-download"></i>
                                                        </label>
                                                      
                                                    <input  type="file" id="prepend-big-btn" placeholder="no file selected" name="berkas2">
                                                    
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="modal-footer">
                                            <a data-dismiss="modal" href="#">Cancel</a>
                                            <button type="submit">Upload</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                               @endif
                        </li>
                        
                        <li>Bukti Biaya <br> pendaftaran awal @if($bp[0]->berkas3!="")
                        <a class="Information Information-color mg-b-10" href="#" data-toggle="modal" data-target="#berkas3"> Lihat</a>
                        <a class="Primary mg-b-10" href="#" data-toggle="modal" data-target="#pendaftaran">ubah</a>
                             
                            <span class="pull-right label-success label-1 label">Selesai</span>
                           
                            <div id="berkas3" class="modal modal-edu-general fullwidth-popup-InformationproModal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-close-area modal-close-df">
                                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                            </div>
                                            <div class="modal-body">
                                                <span class="educate-icon educate-info modal-check-pro information-icon-pro"> </span>
                                                <h2>Bukti Biaya pendaftaran awal !</h2>
                                                <hr>
                                                <i class="educate-icon educate-checked modal-check-pro"></i>
                                                <a href="#"><img src="/gambar/berkas/{{$bp[0]->siswaid}}/{{$bp[0]->berkas3}}" alt=""></a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div id="pendaftaran" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header header-color-modal bg-color-1">
                                            <h4 class="modal-title">Upload bukti pendaftaran awal </h4>
                                            <div class="modal-close-area modal-close-df">
                                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                            <div class="file-upload-inner ts-forms">
                                                <div class="input prepend-big-btn">
                                                    <label class="icon-right" for="prepend-big-btn">
                                                            <i class="fa fa-download"></i>
                                                        </label>
                                                        <form method="post" action="/bukti-pembayaran/edit/{{$bp[0]->bpid}}/save" enctype="multipart/form-data">
                                                    @csrf {{method_field('patch')}}
                                                <div class="input prepend-big-btn">
                                                    <label class="icon-right" for="prepend-big-btn">
                                                            <i class="fa fa-download"></i>
                                                        </label>
                                                      
                                                    <input  type="file" id="prepend-big-btn" placeholder="no file selected" name="berkas3">
                                                    
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="modal-footer">
                                            <a data-dismiss="modal" href="#">Cancel</a>
                                            <button type="submit">Upload</button>
                                        </div>
                                        </form> 
                                       </div>
                                </div>
                                @else
                        <a class="Primary mg-b-10" href="#" data-toggle="modal" data-target="#pendaftaran">Upload</a>
                            <span class="pull-right label-warning label-2 label">Belum selesai</span>
                                <div id="pendaftaran" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header header-color-modal bg-color-1">
                                            <h4 class="modal-title">Upload bukti pendaftaran awal </h4>
                                            <div class="modal-close-area modal-close-df">
                                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                            <div class="file-upload-inner ts-forms">
                                                <div class="input prepend-big-btn">
                                                    <label class="icon-right" for="prepend-big-btn">
                                                            <i class="fa fa-download"></i>
                                                        </label>
                                                        <form method="post" action="/bukti-pembayaran/edit/{{$bp[0]->bpid}}/save" enctype="multipart/form-data">
                                                    @csrf {{method_field('patch')}}
                                                <div class="input prepend-big-btn">
                                                    <label class="icon-right" for="prepend-big-btn">
                                                            <i class="fa fa-download"></i>
                                                        </label>
                                                      
                                                    <input  type="file" id="prepend-big-btn" placeholder="no file selected" name="berkas3">
                                                    
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="modal-footer">
                                            <a data-dismiss="modal" href="#">Cancel</a>
                                            <button type="submit">Upload</button>
                                        </div>
                                        </form> 
                                       </div>
                                </div>
                            </div>
                               @endif
                            
                        </li>
                        <li>Bukti Biaya <br> pendaftaran magang  @if($bp[0]->berkas4!="") <a class="Information Information-color mg-b-10" href="#" data-toggle="modal" data-target="#berkas4"> Lihat</a>
                        
                        <a class="Primary mg-b-10" href="#" data-toggle="modal" data-target="#magang">ubah</a>
                            
                            <span class="pull-right label-success label-1 label">Selesai</span>
                           
                            <div id="berkas4" class="modal modal-edu-general fullwidth-popup-InformationproModal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-close-area modal-close-df">
                                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                            </div>
                                            <div class="modal-body">
                                                <span class="educate-icon educate-info modal-check-pro information-icon-pro"> </span>
                                                <h2>Bukti pendaftaran magang !</h2>
                                                <hr>
                                                <i class="educate-icon educate-checked modal-check-pro"></i>
                                                <a href="#"><img src="/gambar/berkas/{{$bp[0]->siswaid}}/{{$bp[0]->berkas4}}" alt=""></a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div id="magang" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header header-color-modal bg-color-1">
                                            <h4 class="modal-title">Upload bukti pembayaran pendaftaran magang</h4>
                                            <div class="modal-close-area modal-close-df">
                                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                            <div class="file-upload-inner ts-forms">
                                                <div class="input prepend-big-btn">
                                                    <label class="icon-right" for="prepend-big-btn">
                                                            <i class="fa fa-download"></i>
                                                        </label>
                                                        <form method="post" action="/bukti-pembayaran/edit/{{$bp[0]->bpid}}/save" enctype="multipart/form-data">
                                                    @csrf {{method_field('patch')}}
                                                <div class="input prepend-big-btn">
                                                    <label class="icon-right" for="prepend-big-btn">
                                                            <i class="fa fa-download"></i>
                                                        </label>
                                                      
                                                    <input  type="file" id="prepend-big-btn" placeholder="no file selected" name="berkas4">
                                                    
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="modal-footer">
                                            <a data-dismiss="modal" href="#">Cancel</a>
                                            <button type="submit">Upload</button>
                                        </div>
                                        </form> 
                                    </div>
                                </div>

                                @else
                        <a class="Primary mg-b-10" href="#" data-toggle="modal" data-target="#magang">Upload</a>
                            <span class="pull-right label-warning label-2 label">Belum selesai</span>
                                <div id="magang" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header header-color-modal bg-color-1">
                                            <h4 class="modal-title">Upload bukti pembayaran pendaftaran magang</h4>
                                            <div class="modal-close-area modal-close-df">
                                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                            <div class="file-upload-inner ts-forms">
                                                <div class="input prepend-big-btn">
                                                    <label class="icon-right" for="prepend-big-btn">
                                                            <i class="fa fa-download"></i>
                                                        </label>
                                                        <form method="post" action="/bukti-pembayaran/edit/{{$bp[0]->bpid}}/save" enctype="multipart/form-data">
                                                    @csrf {{method_field('patch')}}
                                                <div class="input prepend-big-btn">
                                                    <label class="icon-right" for="prepend-big-btn">
                                                            <i class="fa fa-download"></i>
                                                        </label>
                                                      
                                                    <input  type="file" id="prepend-big-btn" placeholder="no file selected" name="berkas4">
                                                    
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="modal-footer">
                                            <a data-dismiss="modal" href="#">Cancel</a>
                                            <button type="submit">Upload</button>
                                        </div>
                                        </form> 
                                    </div>
                                </div>
                            </div>
                               @endif
                            
                        </li>
                        
                        <li>Bukti Biaya <br> baju magang 
                        @if($bp[0]->berkas5!="") 
                        <a class="Information Information-color mg-b-10" href="#" data-toggle="modal" data-target="#berkas5"> Lihat</a>
                        
                        <a class="Primary mg-b-10" href="#" data-toggle="modal" data-target="#baju">ubah</a>
                            
                             
                            <span class="pull-right label-success label-1 label">Selesai</span>
                           
                            <div id="berkas5" class="modal modal-edu-general fullwidth-popup-InformationproModal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-close-area modal-close-df">
                                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                            </div>
                                            <div class="modal-body">
                                                <span class="educate-icon educate-info modal-check-pro information-icon-pro"> </span>
                                                <h2>Bukti baju magang  !</h2>
                                                <hr>
                                                <i class="educate-icon educate-checked modal-check-pro"></i>
                                                <a href="#"><img src="/gambar/berkas/{{$bp[0]->siswaid}}/{{$bp[0]->berkas1}}" alt=""></a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div id="baju" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header header-color-modal bg-color-1">
                                            <h4 class="modal-title">Upload bukti pembayaran baju magang </h4>
                                            <div class="modal-close-area modal-close-df">
                                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                            <div class="file-upload-inner ts-forms">
                                                <div class="input prepend-big-btn">
                                                    <label class="icon-right" for="prepend-big-btn">
                                                            <i class="fa fa-download"></i>
                                                        </label>
                                                        <form method="post" action="/bukti-pembayaran/edit/{{$bp[0]->bpid}}/save" enctype="multipart/form-data">
                                                    @csrf {{method_field('patch')}}
                                                <div class="input prepend-big-btn">
                                                    <label class="icon-right" for="prepend-big-btn">
                                                            <i class="fa fa-download"></i>
                                                        </label>
                                                      
                                                    <input  type="file" id="prepend-big-btn" placeholder="no file selected" name="berkas5">
                                                    
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="modal-footer">
                                            <a data-dismiss="modal" href="#">Cancel</a>
                                            <button type="submit">Upload</button>
                                        </div>
                                        </form> 
                                    </div>
                                </div>
                                @else 
                                <a class="Primary mg-b-10" href="#" data-toggle="modal" data-target="#baju">Upload</a>
                            <span class="pull-right label-warning label-2 label">Belum selesai</span>
                                
                                <div id="baju" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header header-color-modal bg-color-1">
                                            <h4 class="modal-title">Upload bukti pembayaran baju magang </h4>
                                            <div class="modal-close-area modal-close-df">
                                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                            <div class="file-upload-inner ts-forms">
                                                <div class="input prepend-big-btn">
                                                    <label class="icon-right" for="prepend-big-btn">
                                                            <i class="fa fa-download"></i>
                                                        </label>
                                                        <form method="post" action="/bukti-pembayaran/edit/{{$bp[0]->bpid}}/save" enctype="multipart/form-data">
                                                    @csrf {{method_field('patch')}}
                                                <div class="input prepend-big-btn">
                                                    <label class="icon-right" for="prepend-big-btn">
                                                            <i class="fa fa-download"></i>
                                                        </label>
                                                      
                                                    <input  type="file" id="prepend-big-btn" placeholder="no file selected" name="berkas5">
                                                    
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="modal-footer">
                                            <a data-dismiss="modal" href="#">Cancel</a>
                                            <button type="submit">Upload</button>
                                        </div>
                                        </form> 
                                    </div>
                                </div>
                            </div>
                               @endif
                            
                             </li>
                    </ul>
                </div>
            </div>
            @endif
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="single-product-item res-mg-t-30 table-mg-t-pro-n tb-sm-res-d-n dk-res-t-d-n">
                    
                    <div class="single-product-text">
                        @if(count($bp)>0)

                        @if($bp[0]->status=="belum")
                        <h4><a href="#">Berkas Anda Belum di lengkap/Verifikasi </a></h4>
                        
                        <h5>silahkan hubungi admin</h5>
                        @else
                        
                            @if(count($magang)>0)
                        <h4><a href="#">Anda magang di </a>  {{$magang[0]->tmnam}}</h4>
                        <h5> alamat <br> {{$magang[0]->tamalt}} </h5>
                        <h5> profil <br>{{$magang[0]->tamprof}}</h5>
                        <h4><a class="cards-hd-dn" href="#">Guru pembimbing </a> {{$magang[0]->pbnam}}</h4>
                        <h5>NIP. {{$magang[0]->pbnip}}</h5>
                        <p class="ctn-cards">TTL : {{$magang[0]->pbtemla}} , {{$magang[0]->pbtangla}}</p>
                            @else
                            <h4><a href="#">Data Belum di inputkan</a></h4>
                            @endif
                            
                        @endif
                        @else
                        <h4><a href="#">Berkas Anda belum ada </a></h4>
                        
                        @endif
                    </div>
                </div>
            </div>
            @if(count($bp)>0)
            @if($bp[0]->status=="selesai")
                
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="single-cards-item">
                    
                    <div class="single-product-text">
                        
                        <h4><a class="cards-hd-dn" href="#">Nilai </a> </h4>
                            @if(count($magang)>0)
                                 @if($magang[0]->nil1!="" && $magang[0]->nil2!="" && $magang[0]->nil3!="" && $magang[0]->nil4!="" && $magang[0]->nil5!="" && $magang[0]->nil6!="" && $magang[0]->nil7!="" && $magang[0]->nil8!="" && $magang[0]->nil9!="")

                                
                            <p><span><i class="fa fa-clock"></i></span> <b>Disiplin Kerja :</b> {{$magang[0]->nil1}}</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Penampilan dan Sikap :</b> {{$magang[0]->nil2}}</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Hubungan Kerja Terhadap Atasan dan Sesama Rekan :</b> {{$magang[0]->nil3}} </p>
                            
                            <p><span><i class="fa fa-clock"></i></span> <b>Kesehatan Fisik :</b> {{$magang[0]->nil4}} </p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Kerajinan dan Ketekunan Kerja  :</b> {{$magang[0]->nil5}}</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Tanggung Jawab Terhadap Pekerjaan dan Kebersihan Lingkungan Kerja :</b> {{$magang[0]->nil6}}</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Inisiatif dan Kreatifitas Kerja :</b> {{$magang[0]->nil7}}</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Kecekatan dan Produktivitas Kerja :</b> {{$magang[0]->nil8}} </p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Kualitas Kerja :</b> {{$magang[0]->nil9}}</p>
                            <a href="/sertifikat/unduh/">
                            <p><span><i class="fa fa-clock"></i></span> <b>cetak sertifikat</b></p>   
                            </a>
                            @else 
                            <p><span><i class="fa fa-clock"></i></span> <b>NILAI BELUM ADA </b> </p>
                            
                            @endif
                            @endif
                    </div>
                </div>
            </div>
            
            @endif
            @endif
            
        </div>
        
    </div>
</div>
<br>

@endsection