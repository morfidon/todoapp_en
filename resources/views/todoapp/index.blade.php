@extends("layouts.app")
@section("title", "To do List")

@section("content")

@isset($x)
  {{ $x }}
@endisset
<ul>
  @foreach ($tasks as $task)
    <li>
      {{ $task->content }} 
      <form method="POST" action="{{ route("todoapp.destroy", $task->id) }}">
        @csrf
        @method("DELETE")
        <button type="submit">DELETE</button>
      </form>
    </li>
  @endforeach
</ul>

<form method="POST">
  @csrf
  <div>
    <input type="text" name="content" placeholder="Enter a to-do item" required>
    <input type="submit" value="Add">
  </div>
</form>
@endsection
