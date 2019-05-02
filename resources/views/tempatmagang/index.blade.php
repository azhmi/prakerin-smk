@extends('layout.app')

@section('tempat')
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
                            <h1>Data <span class="table-project-n"> tempat </span> Magang</h1>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                data-cookie-id-table="saveId" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="nama">nama</th>
                                        <th data-field="alamat" >alamat</th>
                                        <th data-field="profil" >profil</th>
                                        <th data-field="history" >history</th>
                                        <th data-field="action" >aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($tm as $id => $t)
                                    <tr>
                                        <td>{{ $t->tmnam}}</td>
                                        <td>{{ $t->tamalt}}</td>
                                        <td>{{ $t->tamprof}}</td>
                                        <td>
                                        <a class="Primary mg-b-10" href="/tempat-magang/history/{{$t->tmid}}"><i class=" educate-icon educate-course icon-wrap"></i> detail</a>
                                        </td>
                                        <td class="datatable-ct">
                                                    <a href="/tempat-magang/edit/{{ $t->tmid }}"><i class="fa fa-pencil-square-o"></i></a>
                                        <form method="POST" action="/tempat-magang/delete/{{ $t->tmid }}"> 
                                                    {{csrf_field()}} {{method_field('DELETE')}}
                                                    
                                                    <button  type="submit"> <a ><i class="fa fa-trash"></i></a></button>
                                                </form>
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