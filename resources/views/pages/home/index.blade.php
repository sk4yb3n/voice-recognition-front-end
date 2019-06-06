@extends('layouts.default')
@section('content')
    <div class="col">
        <div id="info" class="info-content">
            @include('pages.home.infos')
        </div>
        <div class="row top-buffer">
            <div class="col text-center">
                <button type="button" id="start_button" class="pulse-button" onclick="startButton(event)">Push</button>
            </div>
        </div>
        <div class="row top-buffer">
            <div class="col text-center">
                <div id="results" class="results">
                    <blockquote class="blockquote">
                        <span id="final_span" class="final"></span>
                        <span id="interim_span" class="interim"></span>
                    </blockquote>
                </div>
                <div id="confirm-speech">
                    <h4>Is this what you said?</h4>
                    <button class="btn btn-success btn-lg" id="confirm-speech-btn">Confirm</button>
                    <button class="btn btn-danger btn-lg" id="decline-speech-btn">No, try again</button>
                </div>
                <div id="step-2-content" class="results"></div>
                <div id="downloadable"></div>
            </div>
        </div>
        
        <div class="row top-buffer">
            <div class="col text-center">
                <div id="div_language">
                    <select id="select_language" onchange="updateCountry()"></select>
                    &nbsp;&nbsp;
                    <select id="select_dialect"></select>
                </div>
            </div>
        </div>
        
    </div>
@endsection

@section('scripts')
    @include('pages.home.speech-to-text')
@endsection