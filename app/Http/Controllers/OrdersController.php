<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Order;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function borangTempahan()
    {
      // Dapatkan senarai products
      $products = Product::select( 'id', 'name', 'price')->get();

      // Paparkan borang tempahan product
      return view('template_borang_tempahan', compact('products') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function simpanRekodTempahan(Request $request)
    {
        $this->validate($request, [
          'product_id' => 'required|integer',
          'customer_name' => 'required|string',
          'customer_email' => 'required|email'
        ]);

        // Terima semua data dari borang
        $data = $request->all();
        $data['status'] = 'pending';

        Order::create($data);

        return redirect()->back()->with('alert-success', 'Tempahan anda telah diterima!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function borangStatusTempahan()
    {
      // Paparkan borang tempahan product
      return view('template_borang_status_tempahan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function paparStatusTempahan(Request $request)
    {
        $this->validate( $request, [
          'customer_email' => 'required|email'
        ]);

        $order = Order::where('customer_email', '=', $request->input('customer_email') )->first();

        return view('template_status_tempahan', compact('order') );
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
