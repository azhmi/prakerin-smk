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
                            <h1> <span class="table-project-n"> Magang </span> </h1>
                            <a href="/magang/add"><i class="fa fa-pencil-square-o"></i> tambah</a>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                data-cookie-id-table="saveId" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="nama">nama</th>
                                        <th data-field="berkas1" >tempat</th>
                                       
                                        
                                        <th data-field="berkas3" >tahun</th>
                                 
                                     
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($magang as $t)
                                    <tr>
                                        <td>{{ $t->name}}</td>
                                        <td>{{ $t->tmnam}}</td>
                                        <td>{{ $t->tahun}}</td>
                                       
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