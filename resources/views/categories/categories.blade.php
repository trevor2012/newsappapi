@extends('layouts.app')


@section('content')
        <div class="container">
        <div class="row">
                <form action="{{route('save-category')}}" method="post">
                        @csrf
                        <div class="form-group">
                                <label for="category_title">Category</label>
                                <input type="text" name="category_title" class="form-control" required="">
                        </div>
                        <div class="form-group">
                                <label for="category_color">Color</label>
                                <input type="color" name="category_color" class="form-control" id="exampleInputPassword1">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit New Category</button>
                </form>
        </div>
       <div class="row">
               @foreach($categories as $category)
                       <div class="col-md-3 mt-2 mb-2">
                               <div class="card">
                                       <div class="card-body">
                                               <h5>{{$category->title}} <div style="background-color:{{$category->color}}; width: 50px;height: 25px; "></div></h5>


                                       </div>
                               </div>
                       </div>
               @endforeach
       </div>
        </div>
@endsection
