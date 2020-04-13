<div class="oneTodo">
    <div class="basicInfo">
        <p><b>{{ $task->title }}</b></p>
        <p>
            <div class="boxed">期限</div> {{ date('Y年m月d日', strtotime($task->deadline) ) }}
        </p>
        <p>
            <div class="boxed">作成日
            </div> {{ date('Y年m月d日', strtotime($task->created_at) ) }}
        </p>
    </div>

    <div class="iconButton">
        <a href="/edit/{{ $task->id }}"><i class="far fa-edit"></i></a>
        <a href="#" class="del" data-id="{{ $task->id }}"><i class="far fa-trash-alt"></i></a>
        <form method="post" action="/delete/{{ $task->id }}" id="form_{{ $task->id }}">
            {{ csrf_field() }}
            {{ method_field('delete') }}
        </form>
        <form method="post" action="/changeStatus/{{ $task->id }}">
            {{ csrf_field() }}
            {{ method_field('patch') }}
            <input type="submit" class="<?php
                        if( $task->status ){
                            echo "button done";
                        }
                        else{
                            echo "button yet";
                        }?>" value="<?php
                        if( $task->status ){
                            echo "完了";
                        }
                        else{
                            echo "未完了";
                        }
                       ?>">
        </form>
    </div>
</div>
