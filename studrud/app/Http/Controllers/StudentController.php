<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student=DB::table('student')->get();
        return view('welcome',['student'=>$student]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        DB::table('student')->insert([
            'name'=> $request->name,
            'city'=> $request->city,
            'marks'=> $request->marks,

        ]);return redirect(route('index'))->with('status','Student Added!!');
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student =DB::table('student')->find($id);
        return view('edit',['student'=>$student]);
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
        DB::table('student')->where('id',$id)->update([
            'name'=>$request->name,
            'city'=>$request->city,
            'marks'=>$request->marks,

        ]); return redirect(route('index'))->with('status','Student Updated !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('student')->where('id',$id)->delete();
           return redirect(route('index'))->with('status','Student Deleted!!');
    }
}
