<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\register;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = register::latest()->paginate(5);
        return view('home',compact('data'))->with('i',(request()->input('page', 1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
      $register = new register();

      $register->first_name = $request->input('fname');
      $register->last_name = $request->input('lname');
      $register->address = $request->input('address');
      $register->phone = $request->input('phone');
      
      if ($request->hasfile('image')) {
          $file = $request->file('image');
          $extension = $file->getClientOriginalExtension();
          $filename = time() .'.'. $extension;
          $file->move('uploads/register/', $filename);
          $register->image = $filename;
      }else{
          return $request;
          $register->image = '';
      }

      $register->save();

      return view('create')->with('success','Successfully Added register');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $registers = register::all();
        return view('home')->with('registers', $registers);
    }

    public function display($id)
    { 
        $data = register::find($id);
        return view('showimage',compact('data'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = register::find($id);
        return view('edit',compact('data'));  
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
        $registers = register::find($id);

        $registers->first_name = $request->input('fname');
        $registers->last_name = $request->input('lname');
        $registers->address = $request->input('address');
        $registers->phone = $request->input('phone');
        
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() .'.'. $extension;
            $file->move('uploads/register/', $filename);
            $registers->image = $filename;
        }
  
        $registers->save();
  
        return redirect ('home')->with('success','Successfully Added register');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $registers = register::find($id);
        $registers->delete();

        return redirect ('home')->with('success','Successfully Deleted register');
    }
}
