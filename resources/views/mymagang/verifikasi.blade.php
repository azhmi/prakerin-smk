@extends('layout.app')

@section('status-beranda')
    active
@endsection

@section('header')
<div class="courses-area">
    <div class="container-fluid">
        <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1> <span class="table-project-n"> verifikasi </span> berkas</h1>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                data-cookie-id-table="saveId" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="nama">nama</th>
                                        <th data-field="berkas1" >berkas 1</th>
                                        <th data-field="berkas2" >berkas 2</th>
                                        <th data-field="berkas3" >berkas 3</th>
                                        <th data-field="berkas4" >berkas 4</th>
                                        <th data-field="berkas5" >berkas 5</th>
                                        <th data-field="action" >aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($bp as $t)
                                    <tr>
                                        <td>{{ $t->name}}</td>
                                        <td>
                                        @if($t->berkas1=='')
                                            <p> data kosong</p>
                                        @else
                                        <a class="Information Information-color mg-b-10" href="#" data-toggle="modal" data-target="#berkas1"> Lihat</a>
                                        
                                        <div id="berkas1" class="modal modal-edu-general fullwidth-popup-InformationproModal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-close-area modal-close-df">
                                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                            </div>
                                            <div class="modal-body">
                                                <span class="educate-icon educate-info modal-check-pro information-icon-pro"> </span>
                                                <h2>Bukti Bayar SPP !</h2>
                                                <hr>
                                                <i class="educate-icon educate-checked modal-check-pro"></i>
                                                <a href="#"><img src="/gambar/berkas/{{$t->siswaid}}/{{$t->berkas1}}" alt=""></a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                @endif
                                        </td>
                                        <td>@if($t->berkas2=='')
                                            <p> data kosong</p>
                                        @else
                                        <a class="Information Information-color mg-b-10" href="#" data-toggle="modal" data-target="#berkas2"> Lihat</a>
                                        
                                        <div id="berkas2" class="modal modal-edu-general fullwidth-popup-InformationproModal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-close-area modal-close-df">
                                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                            </div>
                                            <div class="modal-body">
                                                <span class="educate-icon educate-info modal-check-pro information-icon-pro"> </span>
                                                <h2>Bukti Biaya  Pembangunan !</h2>
                                                <hr>
                                                <i class="educate-icon educate-checked modal-check-pro"></i>
                                                <a href="#"><img src="/gambar/berkas/{{$t->siswaid}}/{{$t->berkas2}}" alt=""></a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                @endif </td>
                                        <td>@if($t->berkas3=='')
                                            <p> data kosong</p>
                                        @else
                                        <a class="Information Information-color mg-b-10" href="#" data-toggle="modal" data-target="#berkas3"> Lihat</a>
                                        
                                        <div id="berkas3" class="modal modal-edu-general fullwidth-popup-InformationproModal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-close-area modal-close-df">
                                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                            </div>
                                            <div class="modal-body">
                                                <span class="educate-icon educate-info modal-check-pro information-icon-pro"> </span>
                                                <h2>Bukti Biaya   pendaftaran awal !</h2>
                                                <hr>
                                                <i class="educate-icon educate-checked modal-check-pro"></i>
                                                <a href="#"><img src="/gambar/berkas/{{$t->siswaid}}/{{$t->berkas3}}" alt=""></a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                @endif</td>
                                        <td>@if($t->berkas4=='')
                                            <p> data kosong</p>
                                        @else
                                        <a class="Information Information-color mg-b-10" href="#" data-toggle="modal" data-target="#berkas4"> Lihat</a>
                                        
                                        <div id="berkas4" class="modal modal-edu-general fullwidth-popup-InformationproModal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-close-area modal-close-df">
                                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                            </div>
                                            <div class="modal-body">
                                                <span class="educate-icon educate-info modal-check-pro information-icon-pro"> </span>
                                                <h2>Bukti Biaya   Magang !</h2>
                                                <hr>
                                                <i class="educate-icon educate-checked modal-check-pro"></i>
                                                <a href="#"><img src="/gambar/berkas/{{$t->siswaid}}/{{$t->berkas4}}" alt=""></a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                @endif</td>
                                        <td>
                                        
                                         @if($t->berkas5=='')
                                            <p> data kosong</p>
                                        @else
                                        <a class="Information Information-color mg-b-10" href="#" data-toggle="modal" data-target="#berkas5"> Lihat</a>
                                        
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
                                                <a href="#"><img src="/gambar/berkas/{{$t->siswaid}}/{{$t->berkas1}}" alt=""></a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                @endif
                                        </td>
                                        <td class="datatable-ct">
                                            @if($t->status=="belum")
                                               
                                                    <form method="POST" action="/bukti-pembayaran/verifikasi/{{ $t->bpid }}"> 
                                                    {{csrf_field()}} {{method_field('patch')}}
                                                    
                                                    <button  type="submit"> <i class="fa fa-pencil-square-o"></i> verifikasi berkas</button>
                                                </form>
                                            @else
                                                telah di verifikasi
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </div>
</div>
@endsection