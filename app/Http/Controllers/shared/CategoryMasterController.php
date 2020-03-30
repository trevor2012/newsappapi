<?php


namespace App\Http\Controllers\shared;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryApiController extends Controller
{
    //GET ALL
    public function index()
    {
        return new \App\Http\Resources\CategoriesResource(\App\Category::paginate());
    }



    //GET ID
    public function show($id)
    {
        //
    }


    //POST
    public function store(Request $request){
        //
    }




}