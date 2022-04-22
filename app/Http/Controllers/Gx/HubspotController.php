<?php

namespace App\Http\Controllers\Gx;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HubspotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {


            $query['hapikey'] = '133c6406-8fea-4358-a36a-e78a1555336c';

            $query['count']= 500;
            // if(Session::get('offset')!='0'){

            //     $query['vidOffset']=Session::get('offset');

            // }


            $client = new \GuzzleHttp\Client();
            $request = $client->get('https://api.hubapi.com/contacts/v1/contact/email/paula.michaels@fuelyourworld.com/profile', [
                'headers' => [
                    'Accept' => 'application/json',
                    'Content-type' => 'application/x-www-form-urlencoded'
                    ],
                'query' => $query,

            ]);


            $response = $request->getBody()->getContents();
            $json = json_decode($response, true);

            } catch (\Exception $e) {

            $response = ['status' => false, 'message' => $e->getMessage()];

            }
            dd($json);
            dd($json);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
