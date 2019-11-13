@extends('layouts.app')

@section('content')

                <div class="card-header">Board</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @foreach($articles as $article)
                    <div class="card">
  
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->articles_title }}</h5>
                        <h5 class="card-title">
                            投稿者:
                            <a href="{{ route('users.show', $article->user_id) }}">{{ $article->User_id->name }}</a>
 
                        </h5>
                        <p class="card-text">{{ $article->articles_body }}</p>
                        <small>投稿日：{{ date("Y年 m月 d日",strtotime($article->created_at)) }}</small>
                        
                        <a href="{{ route('articles.show',$article->id) }}" class="btn btn-primary">詳細</a>
                    </div>
                    </div>                   
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
