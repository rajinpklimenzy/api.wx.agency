<?php

namespace App\Http\Controllers\Gx;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gx\Kirim;
use App\Service\Gx\kirimService;

use Artisan;
use Session;

class KirimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(kirimService $kirim)
    {
        $contacts = Kirim::all();
        return view('Gx.Kirim.list',compact('contacts'));
    }
    public function getKirimContacts()
    {
        return $contacts = Kirim::all();
    }





    public function sync()
    {
            $a = Artisan::call('kirim:sync');
            dd($a);
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
        //
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
     * @param  int  $email
     * @return \Illuminate\Http\Response
     */
    public function destroy(kirimService $kirim ,$email)
    {

        $result = $kirim->deleteEmail($email);
        dd($result);


    }
}
