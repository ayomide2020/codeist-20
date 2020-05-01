@extends('layouts.auth')

@section('content')
    <div id="app" class="container-fluid mt-5">
        <single_question-component :question="{{ $question }}"></single_question-component>
    </div>
@endsection
