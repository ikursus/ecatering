<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // Dapatkan semua rekod dari table users
      $senarai_users = DB::table('users')->orderBy('id', 'desc')->paginate(2);
      // Paparkan template
      return view('template_senarai_users', compact('senarai_users') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function paparBorangTambahUser()
    {
        return view('template_borang_tambah_user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function simpanRekodUserBaru(Request $request)
    {
        // Validate data
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:3|confirmed',
            'role' => 'required|in:user,admin'
        ]);

        // Terima data dari borang
        $data = $request->only(['name', 'email', 'role', 'phone', 'address']);

        // Dapatkan data dari field password dan bcrypt
        $data['password'] = bcrypt( $request->input('password'));

        // Simpan data ke dalam database
        DB::table('users')->insert( $data );

        return redirect('senarai-users')->with('alert-success', 'Data sudah ditambah!');
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
    public function paparBorangKemaskiniUser($id)
    {
        // Dapatkan 1 data dari table user berdasarkan ID yang dipilih
        $user = DB::table('users')->where('id', '=', $id)->first();

        // Paparkan borang kemaskini user
        return view('template_borang_kemaskini_user', compact('user') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function simpanRekodUserLama(Request $request, $id)
    {
      // Validate data
      $this->validate($request, [
          'name' => 'required|string',
          'email' => 'required|email|unique:users,email,' . $id,
          'role' => 'required|in:user,admin'
      ]);

      // Terima data dari borang
      $data = $request->only(['name', 'email', 'role', 'phone', 'address']);

      // Dapatkan data dari field password dan bcrypt sekiranya diisi
      if ( ! is_null( $request->input('password') ) AND ! empty( $request->input('password') ) )
      {
        $data['password'] = bcrypt( $request->input('password') );
      }

      // Simpan data ke dalam database
      DB::table('users')->where('id', '=', $id)->update( $data );

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
        $user = DB::table('users')
        ->where('id', '=', $id)
        ->delete();

        return redirect()->back()->with('alert-success', 'Data sudah dihapuskan!');
    }
}
