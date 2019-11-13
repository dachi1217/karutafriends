@extends('layouts.app')

@section('content')
<div class="card-header">Board</div>
<div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
<div class="card">
　<div class="card-body">
@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
@endif
        <form action="{{ route('articles.store') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
            <label for="exampleInputEmail1">タイトル</label>
            <input type="text" class="form-control" id="articles_title" placeholder="title" name="articles_title">
            </div>
            
            <div class="form-group">
             <label for="comment">内容</label>
             <textarea class="form-control" rows="5" id="articles.body" name="articles_body"></textarea>
            </div>
            
            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
             

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
                    </div>
                    </div>                   
                 
                </div>
@endsection
