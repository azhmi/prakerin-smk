<?php

namespace App\Http\Controllers;

use App\nilai;
use App\magang;
use Illuminate\Http\Request;
use Session;
class NilaiController extends Controller
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
        $magang = nilai::rightjoin('magangs','magangs.mgid','=','nilais.nilmagid')->join('users','users.id','=','magsisid')->join('tempatmagangs','tmid','=','magtemid')->join('pembimbings','pbid','=','magpemid')->get();
       

        return view('nilai.index',compact('magang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        $mg = magang::join('users','users.id','=','magsisid')->join('tempatmagangs','tmid','=','magtemid')->join('pembimbings','pbid','=','magpemid')->where('magangs.mgid','=',$id)->get();
      
        return view('nilai.add', compact('mg'));
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
        $nl= new nilai;
        $nl->nil1=$request['nil1'];
        $nl->nil2=$request['nil2'];
        $nl->nil3=$request['nil3'];
        $nl->nil4=$request['nil4'];
        $nl->nil5=$request['nil5'];
        $nl->nil6=$request['nil6'];
        $nl->nil7=$request['nil7'];
        $nl->nil8=$request['nil8'];
        $nl->nil9=$request['nil9'];
        $nl->nilmagid=$request['nilmagid'];
        $nl->save();
        
        Session::flash('success','Data sukses di tambahkan');
        return redirect('/nilai');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function show( $nilai)
    {
        //
        $nl = nilai::find($nilai);

        return view('nilai.edit', compact('nl'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function edit(nilai $nilai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $nilai)
    {
        //
        $nl= nilai::find($nilai);
        $nl->nil1=$request['nil1'];
        $nl->nil2=$request['nil2'];
        $nl->nil3=$request['nil3'];
        $nl->nil4=$request['nil4'];
        $nl->nil5=$request['nil5'];
        $nl->nil6=$request['nil6'];
        $nl->nil7=$request['nil7'];
        $nl->nil8=$request['nil8'];
        $nl->nil9=$request['nil9'];
        $nl->save();
        
        Session::flash('success','Data sukses di ubah');
        return redirect('/nilai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function destroy( $nilai)
    {
        //
        $nl= nilai::find($nilai);
        $nl->delete();
        
        Session::flash('success','Data sukses di hapus');
        return redirect('/nilai');
    }
}
