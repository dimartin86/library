@extends('layouts.app')

@section('content')
    <div class="home_container" style="padding-top: 220px;">
        <div id="welcome_main_section" align="center">
            <h1>Welcome</h1>
            <p>
                To Diego Martin's virtual library
            </p>

            <button class="btn btn-warning" onclick="window.location='library'">List books!</button>
        </div>
    </div>
@endsection
