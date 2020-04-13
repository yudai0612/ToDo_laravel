@extends('layouts.default')

@section('title', 'ToDoリスト')


@section('content')
<h1>
    <i class="far fa-sticky-note"></i> ToDoリスト
    <div class="header-menu"><a href="/search"><i class="fas fa-search"></i></a></div>
</h1>
<div class="createForm">
    <div class="oneTodo" id="create">
        <form method="post" action="/create">
            {{ csrf_field() }}
            <div class="basicInfo">
                <p>
                    <input type="text" name="title" placeholder="ToDoのタイトルを入力して下さい" value="{{ old('title') }}">
                    @if ( $errors->has('title') )
                    <div class="error"><i class="fas fa-exclamation-circle"></i> {{ $errors->first('title') }}</div>
                    @endif
                </p>
                <p>
                    <div class="boxed">期限</div>
                    <input type="text" name="deadline" id="flatpickr" placeholder="期限を入力して下さい" value="{{ old('deadline') }}">
                    @if ( $errors->has('deadline') )
                    <div class="error"><i class="fas fa-exclamation-circle"></i> {{ $errors->first('deadline') }}</div>
                    @endif
                </p>
                <p>
                    <div class="boxed">作成日</div> {{ date('Y年m月d日', strtotime(today()) ) }}
                </p>

            </div>
            <div class="iconButton">
                <button type="submit">
                    <a><i class="fas fa-toilet-paper"></i></a>
                </button>
            </div>
        </form>
    </div>
</div>
<div class="listWrapper">
    @include('layouts.listUp')
</div>

<script src="{{ asset('/js/main.js') }}"></script>
@endsection
