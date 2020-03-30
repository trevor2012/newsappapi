<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoriesResource;
use Illuminate\Http\Request;

class CategoryApiController extends Controller
{
    public $masterController;


    public function __construct()
    {
        $this->masterController = new CategoriesMasterController();
    }


    public function index(){
        return new CategoriesResource($this->masterController->index());
    }

    public function show($id){
        //
    }

    public function store(Request $request){
        //
    }



}
