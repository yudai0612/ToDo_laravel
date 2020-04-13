<ul>
    <?php $i = 0; ?>
    @forelse( $tasks as $task )
    <li>
        <div class="num"><?php echo ++$i; ?></div>
        @include('layouts.oneTodo')
    </li>
    @empty
    <li>ToDoはありません</li>
    @endforelse
</ul>
