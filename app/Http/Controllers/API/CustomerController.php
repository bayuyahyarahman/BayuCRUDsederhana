<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Validator;


class CustomerController extends Controller
{
    public function index(){
        $data = Customer::all();
        return response()->json($data, 200);
    }

     // cara menampilkan detail data
     public function show($id)
     {
         $data = Customer::where('id', $id)->first();
         if (empty($data)) {
             return response()->json([
                 'pesan' => 'Data tidak ditemukan',
                 'data' => $data
             ], 404);
         }
 
         return response()->json([
             'pesan' => 'Data ditemukan',
             'data' => $data
         ], 200);
     }

     //Cara Delete data
     public function delete($id)
     {
         $data = Customer::where('id', $id)->first();
         // cek data dengan id yg dikirimkan
         if (empty($data)) {
             return response()->json([
                 'pesan' => 'Data tidak ditemukan',
                 'data' => $data
             ], 404);
         }
 
         $data->delete();
 
         return response()->json([
             'pesan' => 'Data berhasil di hapus',
             'data' => $data
         ], 200);
     }

     //Cara Tambah Data
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'nama' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required'
        ]);
        if ($validate->passes()) {
            return Customer::create($request->all());
            return response()->json(['message' => 'data berhasil disimpan']);
        }
        return response()->json([
            'message' => 'data gagal disimpan',
            'status' => $validate->errors()->all()
        ]);
    }

    //Cara Update data
    public function update(Request $request, $id)
    {
        $data = Customer::where('id', $id)->first();

        // cek data dengan id yg dikirimkan
        if (empty($data)) {
            return response()->json([
                'pesan' => 'Data tidak ditemukan',
                'data' => $data
            ], 404);
        }

        // proses validasi
        $validate = Validator::make($request->all(), [
            'nama' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required|min:5',
        ]);

        if ($validate->fails()) {
            return $validate->errors();
        }

        // proses simpan perubahan data
        $data->update($request->all());

        return response()->json([
            'pesan' => 'Data berhasil di update',
            'data' => $data
        ], 201);
    }
}
