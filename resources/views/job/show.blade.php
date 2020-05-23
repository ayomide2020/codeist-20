@extends('layouts.auth')

@section('content')
    <div id="app" class="container-fluid mt-5">
        <single_job-component :job="{{ $job }}"></single_job-component>
    </div>
@endsection