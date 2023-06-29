@extends("layouts.app")
@section("title", "To do List")

@section("content")

@isset($x)
  {{ $x }}
@endisset
<ul>
  @foreach ($tasks as $task)
    
    <li 
      @if ($task->completed == 1)
        style="color: red;"
      @endif
    >
      
      <form method="POST" action="{{ route("todoapp.update", $task) }}">
        @csrf
        @method("PUT")
        <input type="text" name="content" value="{{ $task->content }}">
        <button type="submit">EDIT</button>
      </form>
      <form method="POST" action="{{ route("todoapp.destroy", $task->id) }}">
        @csrf
        @method("DELETE")
        <button type="submit">DELETE</button>
      </form>
      <form method="POST" action="{{ route("todoapp.complete", $task->id) }}">
        @csrf
        @method("PUT")
        <input type="hidden" name="completed" value="1">
        <button type="submit">Mark as complete</button>
      </form>
    </li>
  @endforeach
</ul>

<form method="POST">
  @csrf
  <div>
    <input type="text" name="content" placeholder="Enter a to-do item">
    <input type="submit" value="Add">
  </div>
</form>
@endsection
