<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $person = Person::all();
        // return
        return response($person, 200)->header('Content-Type', 'application/json');
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
        $person = new Person();
        $person->name = $request->name;
        $person->email = $request->email;
        $person->phone = $request->phone;
        $person->address = $request->address;
        if($person->save()){
          $data = array("status" => "Ok", "msg" => "Data ".$request->name." saved successfully.", );
        } else {
          $data = array("status" => "Nok", "msg" => "Failed to save data ".$request->name);
        }
        return response($data, 201)->header('Content-Type', 'application/json');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $person = Person::find($id);
        return response($person, 200)->header('Content-Type', 'application/json');
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
        $person = Person::find($id);
        $person->name = $request->name;
        $person->email = $request->email;
        $person->phone = $request->phone;
        $person->address = $request->address;
        if($person->update()){
          $data = array("status" => "Ok", "msg" => "Data ".$request->name." updated success.");
        } else {
          $data = array("status" => "Nok", "msg" => "Failed to updated data ".$request->name);
        }
        return response($data, 200)->header('Content-Type', 'application/json');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $person = Book::find($id);
      if($person->delete()){
        $data = array("status" => "Ok", "msg" => "Data deleted successfully.");
      } else {
        $data = array("status" => "Nok", "msg" => "Failed to deleted data ");
      }
      return response($data, 200)->header('Content-Type', 'application/json');
    }

    // public function token()
    // {
    //   echo csrf_token();
    // }
}
