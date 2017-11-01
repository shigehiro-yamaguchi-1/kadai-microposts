@if (Auth::user()->is_favoriting($micropost->id))
    {!! Form::open(['route' => ['user.unfavorite', $micropost->id], 'method' => 'delete']) !!}
        {!! Form::submit('★', ['class' => "btn btn-danger btn-xs"]) !!}
    {!! Form::close() !!}
@else
    {!! Form::open(['route' => ['user.favorite', $micropost->id]]) !!}
        {!! Form::submit('★', ['class' => "btn btn-success btn-xs"]) !!}
    {!! Form::close() !!}
@endif
