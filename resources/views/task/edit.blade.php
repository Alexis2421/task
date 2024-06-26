@extends('layouts.app')
@section('content')
     
    <section class="content container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-success mb-3" style="max-width: 80rem;">
                    <div class="card card-default">
                        <div class="card-header border-success">
                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <span class="card-title">Edit Task</span>
                                <a href="{{ route('task.index') }}" class="btn btn-primary btn-lg active"  role="button" aria-pressed="true">
                                    {{ __('Back') }}
                                </a>
                            </div>
                        </div>
                        @if (session('info'))
                            <div class="alert alert-primary" role="alert">
                                <strong>¡Success!. </strong>{{session('info')}}
                            </div>
                        @endif
                        <div class="card-body">
                            @if(count($errors)>0)
                            <div class="alert alert-danger" role="alert">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            {!! Form::model($task,['route' => ['task.update', $task], 'method' => 'put']) !!}
                                @include('task.form')
                                {!! Form::submit('Update task', ['class'=>'btn btn-success mt-2'])!!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection