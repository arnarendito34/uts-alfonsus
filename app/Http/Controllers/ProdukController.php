<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Models\Satuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{

    public function index()
    {
        $pageTitle = 'Product List';

        // RAW SQL QUERY
        $produks = DB::select('
            select *, produks.id as produks_id
            from produks
            left join satuans on produks.satuan_id = satuans.id
        ');

        return view('produk.index', [
            'pageTitle' => $pageTitle,
            'produks' => $produks
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Create Product';
        //RAW SQL QUERY
        $testing = DB::select('select * from produks');
        $satuans = DB::table('satuans')
                    ->select('*')
                    ->get();

        return view('produk.create', compact('pageTitle','satuans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $messages = [
                'required' => ':Attribute harus diisi.',
                'numeric' => 'Isi :attribute dengan angka',
            ];

            $validator = Validator::make($request->all(), [
                'kodebarang' => 'required|numeric',
                'namabarang' => 'required',
                'hargabarang' => 'required|numeric',
                'deskripsibarang' => 'required',

            ], $messages);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            DB::table('produks')->insert([
                'kodebarang' => $request->kodebarang,
                'namabarang' => $request->namabarang,
                'hargabarang' => $request->hargabarang,
                'deskripsibarang' => $request->deskripsibarang,
                'satuan_id' => $request->satuan_id,
            ]);

            return redirect()->route('produk.index');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'edit barang';
        $produk = produk::find($id);
        $satuan = Satuan::all();
        return view('produk.edit',[
            'pagetitle' => $pageTitle,
            'produks' => $produk,
            'satuans' => $satuan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :attribute dengan angka',
        ];

        $validator = Validator::make($request->all(), [
            'kodebarang' => 'required',
            'namabarang' => 'required',
            'hargabarang' => 'required|numeric',
            'deskripsibarang' => 'required',

        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $update = produk::find($id);
        $update->kodebarang = $request->kodebarang;
        $update->namabarang = $request->namabarang;
        $update->hargabarang = $request->hargabarang;
        $update->deskripsibarang = $request->deskripsibarang;
        $update->satuan_id = $request->satuan;
        $update->save();
        return redirect()->route('produk.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
