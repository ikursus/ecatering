<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Product;

class ProductsController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    // Dapatkan semua rekod dari table products
    // $senarai_products = DB::table('products')->orderBy('id', 'desc')->paginate(2);
    $senarai_products = Product::orderBy('id', 'desc')->paginate(2);
    // Paparkan template
    return view('template_senarai_products', compact('senarai_products') );
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return view('template_borang_tambah_product');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
      // Validate data
      $this->validate($request, [
          'name' => 'required|string',
          'price' => 'required|numeric'
      ]);

      // Terima data dari borang
      // $data = $request->only(['name', 'price']);
      $data = $request->all();

      // Tetapkan variable product dan simpan data ke dalam database
      // DB::table('products')->insert($data);
      Product::create($data);

      return redirect()->route('showProducts')->with('alert-success', 'Data has been added!');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      // Dapatkan 1 data dari table user berdasarkan ID yang dipilih
      // $product = DB::table('products')->where('id', '=', $id)->first();
      $product = Product::where('id', '=', $id)->first();

      // Paparkan borang kemaskini user
      return view('template_borang_kemaskini_product', compact('product') );
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    // Validate data
    $this->validate($request, [
        'name' => 'required|string',
        'price' => 'required|numeric'
    ]);

    // Terima data dari borang
    $data = $request->only(['name', 'price']);

    // Simpan data ke dalam database
    // DB::table('products')->where('id', '=', $id)->update($data);
    // Product::where('id', '=', $id)->update($data);
    Product::find($id)->update($data);

    return redirect()->back()->with('alert-success', 'Data sudah dikemaskini!');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      // Dapatkan rekod user yang ingin dihapuskan
      // DB::table('products')
      // ->where('id', '=', $id)
      // ->delete();

      Product::find($id)->delete();

      return redirect()->back()->with('alert-success', 'Data sudah dihapuskan!');
  }
}
