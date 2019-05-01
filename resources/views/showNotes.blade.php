@extends('main')


@section('NoteKeeper')
  @parent
  <br>
  <p>All Notes</p>
@endsection


@section('content')
<table border="1">
  <tr>
  <th>Title</th>
  <th>Content</th>
</tr>

    <!-- @foreach ($notes as $note)


    <tr>
    <td>{{ $note->title }}</td>
    <td>{{ $note->content }}</td>
    </tr>


@endforeach -->

@forelse ($notes as $note)
  <tr>
    <td>{{ $note->title }}</td>
    <td>{{ $note->content }}</td>
  </tr>

@empty
    <tr>
      <td colspan="2">no notes</td>
    </tr>

@endforelse

</table>

<a href="{{route('notes.create')}}">Add New Note</a>
@endsection
