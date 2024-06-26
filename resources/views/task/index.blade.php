@extends('layouts.app')
@section('content')

    <div class="container-fluid mt-5 ">
        <div class="row justify-content-center">
            <div class="col-sm-10">
                <div class="card border-success mb-3" style="max-width: 80rem;">
                    <div class="card">
                        <div class="card-header border-success">
                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <span id="card_title">
                                    {{ __('Barbershop') }}
                                </span>
                                <div class="float-none">
                                    <a href="{{ url('/') }}" class="btn btn-primary btn-lg active"  role="button" aria-pressed="true">
                                      {{ __('Back') }}
                                    </a>
                                </div>
                                 <div class="float-right">
                                    <a href="{{route('task.create')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">
                                        {{ __('Add task') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                        @if (session('info'))
                        <div class="alert alert-primary" role="alert">
                            <strong>¡Success!. </strong>{{session('info')}}
                        </div>
                        @endif
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead class="thead">
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th colspan="2">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($tasks as $task)
                                            <tr>
                                                <td>{{ ++$i}}</td>
                                                <td>{{$task->name}}</td>
                                                <td>
                                                    <a href="{{route('task.edit', $task)}}" class="btn btn-primary">edit</a>
                                                </td>
                                               
                                                <td>
                                                    <form action="{{route('task.destroy', $task)}}" method="POST">
                                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                        <input type="hidden"  name="_method" value="DELETE">
                                                        <button class="btn btn-danger" onclick="return confirm('¿Quieres Borrar?')">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="4">There is no registered task</td>
                                                </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection