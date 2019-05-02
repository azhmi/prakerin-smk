<?php

namespace App\Http\Controllers;

use App\buktipembayaran;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\Auth;
class BuktipembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
        $bp = buktipembayaran::join('users','users.id','=','buktipembayarans.siswaid')->get();

        return view('mymagang.verifikasi', compact('bp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $pb = new buktipembayaran;
        $pb->siswaid=Auth::user()->id;
        
        $berkas1 = $request->file('berkas1');
       
        $berkas2 = $request->file('berkas2');
        
        $berkas3 = $request->file('berkas3');
       
        $berkas4 = $request->file('berkas4');
        
        $berkas5 = $request->file('berkas5');
       
        if($berkas1!=''){
            $namaFile1 = $berkas1->getClientOriginalName();
            $request->file('berkas1')->move('gambar/berkas/'.Auth::user()->id.'/', $namaFile1);
            $pb->berkas1= $namaFile1;
           
        }
        elseif($berkas2!=''){
            $namaFile2 = $berkas2->getClientOriginalName();
            $request->file('berkas2')->move('gambar/berkas/'.Auth::user()->id.'/', $namaFile2);
            $pb->berkas2= $namaFile2;          
        
        }
        elseif($berkas3!=''){
            $namaFile3 = $berkas3->getClientOriginalName();
            $request->file('berkas3')->move('gambar/berkas/'.Auth::user()->id.'/', $namaFile3);   
            $pb->berkas3= $namaFile3;
        }
        elseif($berkas4!=''){
            $namaFile4 = $berkas4->getClientOriginalName();
            $request->file('berkas4')->move('gambar/berkas/'.Auth::user()->id.'/', $namaFile4);
            $pb->berkas4= $namaFile4;
        }
        elseif($berkas5!=''){
            $namaFile5 = $berkas5->getClientOriginalName();
            $request->file('berkas5')->move('gambar/berkas/'.Auth::user()->id.'/', $namaFile5);
            $pb->berkas5= $namaFile5;
        }
        
        $pb->save();
        Session::flash('success','Data sukses di ubah');
        return redirect('/siswa/magang/saya');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\buktipembayaran  $buktipembayaran
     * @return \Illuminate\Http\Response
     */
    public function verifikasi( $buktipembayaran)
    {
        //
        $pb = buktipembayaran::find($buktipembayaran);
        $pb->status="selesai";
        $pb->save();
        Session::flash('success','Data sukses di verifikasi');
        return redirect('/bukti-pembayaran/verifikasi');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\buktipembayaran  $buktipembayaran
     * @return \Illuminate\Http\Response
     */
    public function edit(buktipembayaran $buktipembayaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\buktipembayaran  $buktipembayaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $buktipembayaran)
    {
        //
        $pb =  buktipembayaran::find($buktipembayaran);
        $berkas1 = $request->file('berkas1');
       
        $berkas2 = $request->file('berkas2');
        
        $berkas3 = $request->file('berkas3');
       
        $berkas4 = $request->file('berkas4');
        
        $berkas5 = $request->file('berkas5');
        if($request['berkas1']!=""){
            $image_path = $pb->berkas1;
            File::delete('gambar/berkas/'.$pb->siswaid.'/', $image_path);
            
            $namaFile1 = $berkas1->getClientOriginalName();
            $request->file('berkas1')->move('gambar/berkas/'.Auth::user()->id.'/', $namaFile1);
            $pb->berkas1= $namaFile1;
            
        }
        if($request['berkas2']!=""){
            $image_path = $pb->berkas2;
            File::delete('gambar/berkas/'.$pb->siswaid.'/', $image_path);
            $namaFile2 = $berkas2->getClientOriginalName();
            $request->file('berkas2')->move('gambar/berkas/'.Auth::user()->id.'/', $namaFile2);
            $pb->berkas2= $namaFile2;          
        
            
        }
        if($request['berkas3']!=""){
            $image_path = $pb->berkas3;
            File::delete('gambar/berkas/'.$pb->siswaid.'/', $image_path);
            $namaFile3 = $berkas3->getClientOriginalName();
            $request->file('berkas3')->move('gambar/berkas/'.Auth::user()->id.'/', $namaFile3);   
            $pb->berkas3= $namaFile3;
        }
        if($request['berkas4']!=""){
            $image_path = $pb->berkas1;
            File::delete('gambar/berkas/'.$pb->siswaid.'/', $image_path);
            $namaFile4 = $berkas4->getClientOriginalName();
            $request->file('berkas4')->move('gambar/berkas/'.Auth::user()->id.'/', $namaFile4);
            $pb->berkas4= $namaFile4;
           
        }
        if($request['berkas5']!=""){
            $image_path = $pb->berkas5;
            File::delete('gambar/berkas/'.$pb->siswaid.'/', $image_path);
            $namaFile5 = $berkas5->getClientOriginalName();
            $request->file('berkas5')->move('gambar/berkas/'.Auth::user()->id.'/', $namaFile5);
            $pb->berkas5= $namaFile5;
        }
        
        $pb->save();
        Session::flash('success','Data sukses di ubah');
        return redirect('/siswa/magang/saya');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\buktipembayaran  $buktipembayaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(buktipembayaran $buktipembayaran)
    {
        //
    }
}
