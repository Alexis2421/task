@extends('layouts.app')
@section('content')
<section class="content container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-success mb-3" style="max-width: 80rem;">
                <div class="card card-default">
                    <div class="card-header border-success">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span class="card-title">Add New List Of Tasks</span>
                            <a href="{{ route('task.index') }}" class="btn btn-primary btn-lg active"  role="button" aria-pressed="true">
                                {{ __('Back') }}
                            </a>
                        </div>
                    </div>
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
                        {!! Form::open(['route' => 'task.store']) !!}
                            @include('task.form')
                            {!! Form::submit('Add List Of Task', ['class'=>'btn btn-success mt-2'])!!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection