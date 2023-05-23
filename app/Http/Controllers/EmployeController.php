<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Employe::all();
        return view('admin.employe',compact('data'));
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
        $employ = new Employe();
        
        $name = $request->name;
        $email = $request->email;
        $role = $request->role;
        $department = $request->department;
        // dd($name, $email, $role, $department );
        $employ->name = $name;
        $employ->email = $email;
        $employ->role = $role;
        $employ->department = $department;
        $employ->save();
        

        return redirect()->route('employe.index');
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

        $data = Employe::find($id);
        echo "<pre>";
        print_r($data->toArray());
        echo "</pre>";

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Employe::find($id);
        return view('admin.employe_update',compact('data'));
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
        $employ = Employe::find($id);
        
        $name = $request->name;
        $email = $request->email;
        $role = $request->role;
        $department = $request->department;
        // dd($name, $email, $role, $department );
        $employ->name = $name;
        $employ->email = $email;
        $employ->role = $role;
        $employ->department = $department;
        $employ->save();
        
        $data = Employe::all();
        return view('admin.employe',compact('data'));
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
        $data = Employe::find($id);
        $data->delete();
        return redirect()->route('employe.index');
    }
}
