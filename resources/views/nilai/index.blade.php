@extends('layout.app')

@section('siswa')
    active
@endsection

@section('header')

    <div class="container-fluid">
        <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="sparkline13-list">
                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                                data-cookie-id-table="saveId" data-click-to-select="true" data-toolbar="#toolbar">
                                                <thead>
                                    <tr>
                                        <th data-field="nama">nama</th>
                                        <th data-field="berkas1" >NIM</th>
                                        <th data-field="berkas2" >Tempat Magang</th>
                                        <th data-field="berkas3" >Nilai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $a=1;?>
                                @foreach($magang as $u )
                                    <tr>
                                     <td>{{$u->name}}</td> 
                                     <td>{{$u->nins}}</td>
                                     <td> {{$u->tmnam}}</td>
                                     
                                     <td> 
                                     @if($u->nil1!="" && $u->nil2!="" && $u->nil3!="" && $u->nil4!="" && $u->nil5!="" && $u->nil6!="" && $u->nil7!="" && $u->nil8!="" && $u->nil9!="")
                                    
                                     <a class="Primary mg-b-10" href="#" data-toggle="modal" data-target="#detail{{$a}}"><i class=" educate-icon educate-course icon-wrap"></i> Detail Nilai</a>
                                     <div id="detail{{$a}}" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header header-color-modal bg-color-1">
                                            <h4 class="modal-title">Nilai Magang {{$u->name}}</h4>
                                            <div class="modal-close-area modal-close-df">
                                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                        <p><span><i class="fa fa-clock"></i></span> <b>Disiplin Kerja :</b> {{$u->nil1}}</p>
                      <p><span><i class="fa fa-clock"></i></span> <b>Penampilan dan Sikap :</b> {{$u->nil2}}</p>
                      <p><span><i class="fa fa-clock"></i></span> <b>Hubungan Kerja Terhadap Atasan dan Sesama Rekan :</b> {{$u->nil3}} </p>
                      
                      <p><span><i class="fa fa-clock"></i></span> <b>Kesehatan Fisik :</b> {{$u->nil4}} </p>
                      <p><span><i class="fa fa-clock"></i></span> <b>Kerajinan dan Ketekunan Kerja  :</b> {{$u->nil5}}</p>
                      <p><span><i class="fa fa-clock"></i></span> <b>Tanggung Jawab Terhadap Pekerjaan dan Kebersihan Lingkungan Kerja :</b> {{$u->nil6}}</p>
                      <p><span><i class="fa fa-clock"></i></span> <b>Inisiatif dan Kreatifitas Kerja :</b> {{$u->nil7}}</p>
                      <p><span><i class="fa fa-clock"></i></span> <b>Kecekatan dan Produktivitas Kerja :</b> {{$u->nil8}} </p>
                      <p><span><i class="fa fa-clock"></i></span> <b>Kualitas Kerja :</b> {{$u->nil9}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                     
                                     @else 
                                     <a href="/nilai/add/{{$u->mgid}}"><i class="fa fa-pencil-square-o"></i> inputkan nilai?</a>
                      
                      @endif
                                     </td>
                                    </tr>
                                    <?php $a++?>
                                @endforeach
                                </tbody>
                            </table>
                            
                            
                            
                  </div>
                 </div>
      </div>
</div>
                            
       

@endsection