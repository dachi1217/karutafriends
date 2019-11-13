@extends('layouts.app')

@section('content')
                 
                
                
                
                
                
                <div class="card-header">{{ $user->name }}の投稿</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @foreach($user->articles as $article)
                    <div class="card">
  
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->articles_title }}</h5>
                        <h5 class="card-title">
                            投稿者:
                            <a href="{{ route('users.show', $article->user_id) }}"></a>
                            {{ $article->User_id->name }}
                        </h5>
                        <p class="card-text">{{ $article->articles_body }}</p>

                        
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
