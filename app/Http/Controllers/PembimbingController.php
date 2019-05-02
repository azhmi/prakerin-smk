<?php

namespace App\Http\Controllers;
use Session;
use App\pembimbing;
use App\user;
use Illuminate\Http\Request;
use App\magang;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class PembimbingController extends Controller
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
        $batas=12;
        $pb=pembimbing::select('*')->paginate($batas);;

        
        return view('pembimbing.index', compact('pb'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('pembimbing.add');
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
     

        $pengguna = new user;
        $pengguna->name=$request['name'];
        $pengguna->email=$request['email'];

        $pengguna->level='guru';
        $pengguna->password = Hash::make($request['pbnip']);
        $pengguna->save();

        $pb = new pembimbing;
        $pb->pbnam=$request['name'];
        $pb->pbnip=$request['pbnip'];
        $pb->pbtemla=$request['pbtemla'];
        $pb->pbtangla=$request['pbtangla'];
        $pb->pbjk=$request['pbjk'];
        $pb->save();

        Session::flash('success','Data sukses di tambahkan');
        return redirect('/pembimbing');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pembimbing  $pembimbing
     * @return \Illuminate\Http\Response
     */
    public function show( $pembimbing)
    {
        //
        $pb = pembimbing::find($pembimbing);
        
        return view('pembimbing.edit', compact('pb'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pembimbing  $pembimbing
     * @return \Illuminate\Http\Response
     */
    public function edit( $pembimbing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pembimbing  $pembimbing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $pembimbing)
    {
        //
        $pb = pembimbing::find($pembimbing);
        $pb->pbnam=$request['name'];
        $pb->pbnip=$request['pbnip'];
        $pb->pbtemla=$request['pbtemla'];
        $pb->pbtangla=$request['pbtangla'];
        $pb->pbjk=$request['pbjk'];
        $pb->save();
        
        Session::flash('success','Data sukses di ubah');
        return redirect('/pembimbing');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pembimbing  $pembimbing
     * @return \Illuminate\Http\Response
     */
    public function destroy($pembimbing)
    {
        //
        $pb = pembimbing::find($pembimbing);
        $pb->delete();
        
        Session::flash('success','Data sukses di hapus');
        return redirect('/pembimbing');
    }
    public function mysiswa(){
        $magang = magang::join('users','users.id','=','magsisid')->join('tempatmagangs','tmid','=','magtemid')->join('pembimbings','pbid','=','magpemid')->where('pembimbings.pbnip','=',Auth::user()->nins)->get();
 
        return view('mysiswa.index', compact('magang'));
    }
}
