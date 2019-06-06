<?php

Route::get('/', function () {
    return view('pages.home.index');
});

Route::post('sentence/send', 'SentenceController@sendSentence')->name('sentence.send');
