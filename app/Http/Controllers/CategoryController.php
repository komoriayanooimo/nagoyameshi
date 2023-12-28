<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $category_id = $request->input('id');
       $category = stores::where('category_id',$category_id)->get();
       return view('categories.show',compact('category'));
    }
}
