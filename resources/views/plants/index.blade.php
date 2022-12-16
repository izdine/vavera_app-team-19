@extends('layouts/app')

@section('title')
    plants Lists
@endsection

@section('content')

            <h1 class="text-center py-5">plants</h1>
            <div class="row justify-content-center">
                <div class="col-md-8">
                        <div class="card border-primary">
                                <div class="card-header bg-secondary text-center">
                                    Tasks List
                                </div>
                                <div class="card-body">
                                     <ul class="list-group">
                                             @foreach ($plants as $plant)
                                             @if (!$plant->completed)
                                                <li class="list-group-item list-group-item-action">
                                                    {{ $plant->name }}

                                                    <a href="/plants/{{$plant->id}}/complete" class="btn btn-warning btn-sm ml-2 float-right">Complete</a>

                                                <a href="/plants/{{$plant->id}}" class="btn btn-primary btn-sm float-right">View</a>
                                                </li>
                                             @endif
                                             @endforeach
                                         </ul>
                                </div>
                            </div>
                </div>
            </div>


@endsection
