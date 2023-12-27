<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;
use Illuminate\Support\Facades\Validator;

class ProdukController extends Controller
{
    public function index(){
        $produk = produk::get();
        return view('produk.index', compact('produk'));        
    }

    public function create(){
        return view('produk.create');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'produk'    =>'required|min:12',
            'price'     =>'required',
            'stock'     =>'required',
        ], [
            'produk.required'   => 'nama produk harus diisi.',
        ]);

        $validator->validate();

       produk::create([
        'produk'    => $request->produk,
        'price'     => $request->price,
        'stock'     => $request->stock,
       ]);

       return redirect('/produk');
    }

    public function edit($id){
        $produk = Produk::find($id);
        return view('produk.Edit', compact('produk'));
    }

    
}
