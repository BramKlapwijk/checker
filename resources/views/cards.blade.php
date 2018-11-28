@extends('layouts.app')

@section('content')
    <style>
    </style>
    <div class="card">
        <div class="card-content">
            <span class="card-title grey-text text-darken-4">Welcome </span>
            <div class="row">
                bla bla bla bla bla
            </div>
        </div>
    </div>
    @foreach($tasks as $task)
        <div class="row" data-content="{{ $task->id }}">
            <div class="col offset-l3 l6">
                <div class="card hoverable">
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">{{ $task->title }}</span>
                        <p>{{ $task->description }}</p>
                        <small>
                            {{ \Carbon\Carbon::parse($task->end)->diffForHumans() }}
                        </small>
                    </div>
                </div>
            </div>
            <a class='dropdown-trigger btn_dropdown_trigger btn btn-floating btn-large red' data-target='{{ $task->id }}'><i class="large material-icons">list</i></a>

            <ul id='{{ $task->id }}' class='dropdown-content btn_dropdown'>
                <li><a class="btn-floating blue modal-trigger waves" href="#modal" data-href="{{ url($task->id.'/edit') }}"><i class="material-icons">edit</i></a></li>
                <li><a class="btn-floating green"><i class="material-icons">check</i></a></li>
                <li><a class="btn-floating red darken-1"><i class="large material-icons">clear</i></a></li>
            </ul>
        </div>
    @endforeach
@stop

@section('script')
    <script>
        $('#search').on('keydown', function (e) {
            $.post(`{{ url('/search') }}`, {
                query: $(this).val(),
                _token: `{!! csrf_token() !!}`
            }).then(function (res) {
                let ids = {!! $tasks->pluck('id') !!};
                for (i=0; i < ids.length; i++) {
                    if ($.inArray(ids[i], res) < 0) {
                        $('[data-content="'+ids[i]+'"]').hide();
                    } else {
                        $('[data-content="'+ids[i]+'"]').show();
                    }
                }
            })
        });
    </script>
@stop