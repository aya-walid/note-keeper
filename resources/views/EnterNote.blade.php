@extends('main')


@section('NoteKeeper')
  @parent
  <br>
  <p>Enter Your Note</p>
@endsection


@section('content')

<form action="{{ route('notes.store') }}" method="POST">
  @csrf
  title
  <input type="text" name="title"><br>
  content
  <textarea  name="content"></textarea>
  <input name="AddNote" value="Add Note" type="submit">
</form>

@endsection
