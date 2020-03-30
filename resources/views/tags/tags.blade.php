

@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <form action="{{route('save-tag')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="tag_title">Tag</label>
                    <input type="text" name="tag_title" class="form-control" required="">
                </div>

                <button type="submit" class="btn btn-primary">Submit New Tag</button>
            </form>
        </div>
        <div class="row">
            @foreach($tags as $tag)
                <div class="col-md-2 mt-2 mb-2">
                    <div class="card">
                        <div class="card-body">
                            <h5>{{$tag->title}}</h5>


                        </div>
                    </div>
                </div>
            @endforeach
        </div>0
    </div>
@endsection