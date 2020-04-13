@extends('layouts.default')

@section('title', 'ToDoの編集')


@section('content')
<h1>
    <i class="far fa-edit"></i> ToDoの編集
    <div class="header-menu"><a href="/"><i class="far fa-sticky-note"></i></a></div>
</h1>

<div class="currentPost">
    <div class="oneTodo">
        <div class="basicInfo">
            <p><b>{{ $task->title }}</b></p>
            <p>
                <div class="boxed">期限</div> {{ date('Y年m月d日', strtotime($task->deadline)) }}
            </p>
            <p>
                <div class="boxed">作成日
                </div> {{ date('Y年m月d日', strtotime($task->created_at)) }}
            </p>
        </div>
    </div>
</div>

<div class="message"><i class="fas fa-arrow-down"></i> ToDoを編集</div>

<div class="createForm">
    <div class="oneTodo" id="edit">
        <form method="post" action="/update/{{ $task->id }}">
            {{ csrf_field() }}
            {{ method_field('patch') }}
            <div class="basicInfo">
                <p>
                    <input type="text" name="title" placeholder="ToDoのタイトルを入力して下さい" value="{{ old('title', $task->title) }}">
                    @if ( $errors->has('title') )
                    <div class="error">{{ $errors->first('title') }}</div>
                    @endif
                </p>
                <p>
                    <div class="boxed">期限</div>
                    <input type="text" name="deadline" id="flatpickr" placeholder="期限を入力して下さい" value="{{ old('deadline', $task->deadline) }}">
                    @if ( $errors->has('deadline') )
                    <div class="error">{{ $errors->first('deadline') }}</div>
                    @endif
                </p>
                <p>
                    <div class="boxed">作成日</div> {{ date('Y年m月d日', strtotime($task->created_at)) }}
                </p>

            </div>
            <div class="iconButton">
                <button type="submit">
                    <a><i class="fas fa-sync-alt"></i></a>
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
