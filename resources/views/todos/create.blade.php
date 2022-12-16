@extends('layouts/app')

@section('title')
    Create a new Plant
@endsection

@section('content')
<h1 class="text-center my-5">Create a Plant</h1>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card border-primary">
            <div class="card-header bg-info"></div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                        </ul>
                    </div>
                @endif
                
            <form action="/store-todo" method="post">
                @csrf
                <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Plant Name" value="">
                </div>
                <div class="form-group">
                        <textarea name="description" cols="5" rows="5" class="form-control" placeholder="task"></textarea>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn-success">Create</button>
                    <button class="btn-secondary">Cancel</button>
            </div>
            </form>
        </div>
    </div>
</div>

<section class="mb-32 text-center text-gray-800">
    <div class="max-w-[700px] mx-auto px-3 lg:px-6">
        <h2 class="text-3xl font-bold mb-12 text-purple-800">Input Plant</h2>

        <form  action="/store-todo"method="post">
            @csrf
            <div class="form-group mb-6">
                <input type="text"
                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Plant Name" />
            </div>
            <div class="form-group mb-6">
                <input type="number"
                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Input days of the plant" />
            </div>
            <div class="form-group mb-6">
                <input type="text"
                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" rows="3" placeholder="Type plant">
            </div>
            <button type="submit"
                class="w-full px-6 py-2.5 bg-green-700 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-800 hover:shadow-lg transition duration-150 ease-in-out">
                Send
            </button>
        </form>
    </div>
</section>
@endsection
