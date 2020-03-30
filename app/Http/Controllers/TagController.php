<?php

namespace App\Http\Controllers;

use App\Tag;

use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index(){
        return view('tags.tags')->with(
            [
                'tags' => Tag::all(),
            ]
        );
    }

    public function show($id){
        return view('tags.tag')->with(
            [
                'tags' => Tag::find($id),
            ]
        );
    }

    public function store(Request $request){
        $request->validate([
            'tag_title' => 'required',
        ]);

        $tag = new Tag();

        $tag->title = $request->get('tag_title');

        $tag->save();

        return redirect()->back()->with('message', 'Tag created' );

    }
}
