@extends('layouts.default')

@section('title', 'ToDoの検索')


@section('content')
<h1>
    <i class="fas fa-search"></i> ToDoの検索
    <div class="header-menu"><a href="/"><i class="far fa-sticky-note"></i></a></div>
</h1>

<div class="searchWrapper">
    <div class="oneTodo" id="search">
        <form action="/search" method="GET">
            <p><input type="text" name="keyword" placeholder="キーワードを入力してください" value="{{ $keyword }}"></p>
            <p><input type="submit" value="検索" id="searchButton"></p>
        </form>
    </div>
</div>

@if( $tasks->count() )
<div class="message"><i class="fas fa-arrow-down"></i> {{ $tasks->count() }}件のToDoが見つかりました</div>
<div class="listWrapper">
    @include('layouts.listUp')
</div>

@else
<div class="message"><i class="fas fa-exclamation-circle"></i> 未完了のToDoは見つかりませんでした</div>
@endif

@endsection
