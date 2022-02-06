<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = \App\Models\User::all();
        return view('users.index', ['People'=>$users]);
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
        $user = \App\Models\User::find($id);
        $contacts  =  $this->fetchContacts($id);
        $Cases = $this->casesInNetwork($contacts);
        $organizations = \App\Models\User::find($id)->organizations;
        //dd($Cases);  
        return view('users.show', ['User'=>$user, 'Network'=>$contacts, 'NetworkOrg'=>$organizations,
    'Reports'=>$Cases]);
    }

    public function casesInNetwork($Network){
        $Cases = 0;
        foreach($Network as $person){
            $Cases = $Cases + $person->cases->count();
        }

        return $Cases;
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

    /** 
     * Cesar: This function fetches the user contacts from sent
     * and recieved requests.
     * 
     * @param int $id
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function fetchContacts($id){
        $userReq = \App\Models\User::find($id)->contactsOfMine;
        $userAcc= \App\Models\User::find($id)->contactsOf;
        return $userReq->merge($userAcc);
    }
}
