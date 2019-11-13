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
                        <h5 class="card-title">{{ $article->articles_title }}</h5>
                        <h5 class="card-title">
                            投稿者:{{ $article->User_id->name }}
                        </h5>
                        <p class="card-text">{{ $article->articles_body }}</p>
                        <small>投稿日：{{ date("Y年 m月 d日",strtotime($article->created_at)) }}</small>
                    </div>
                    </div>                   
                 
        <div class="p-3">
        <h3 class="card-title">コメント一覧</h3>
        @foreach($article->comments as $comment)
          <div class="card">
            <div class="card-body">
                <p class="card-text">{{ $comment->comment }}</p>
                <p class="card-text">
                   投稿者:
                   <a href="{{ route('users.show',$comment->user->id) }}">
                             {{ $comment->user->name }}
                       </a>
                       </p>
                  </div>
               </div>
           @endforeach                   
  <a href="{{ route('comments.create', ['article_id' => $article->id])}}" class="btn btn-primary">コメントする</a>　　　　　　
 </div>



</div>
@endsection
