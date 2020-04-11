@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h2>Edit Question</h2>
                            <div class="ml-auto">
                                <a href="{{ route('question.index') }}" class="btn btn-outline-secondary">Browse
                                    Questions</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('question.update',$question->id) }}" method="post">
                            {{ method_field('PUT') }}
                            @include('questions._form',['buttonText' => "Update Question"])
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
