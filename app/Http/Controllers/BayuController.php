<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bayu;

class BayuController extends Controller
{
    public function index(){
        $data = Bayu::all();
        
        return view('index',compact('data'));
    }

    public function tambahbayu(){
        return view('tambahdata');
    }

    public function insertdata(Request $request){
        $this->validate($request, [
            'nama' => 'required',
            'nim' => 'required',
            'jurusan' => 'required',
            'semester' => 'required',
            
        ]);
        
        Bayu::create($request->all());
        return redirect()->route('bayu')->with('success',' Data Berhasil Di Tambahkan');
    }

    public function tampildata($id){
        
        $data = Bayu::find($id);
        //dd($data);
        return view('tampildata', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Bayu::find($id);
        $data->update($request->all());
        return redirect()->route('bayu')->with('success',' Data Berhasil Di Update');
    }

    public function delete($id){
        $data = Bayu::find($id);
        $data->delete();
        return redirect()->route('bayu')->with('success',' Data Berhasil Di Hapus');
    }
}
