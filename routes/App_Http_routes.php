<?php

Route::get('/player', function () {
    $video = "video/qwe.mp4";
    $mime = "video/mp4";
    $title = "qwe";

    return view('player')->with(compact('video', 'mime', 'title'));
});

Route::get('/video/{filename}', function ($filename) {
    $videosDir = base_path('resources/assets/videos');

    if (file_exists($filePath = $videosDir."/".$filename)) {
        $stream = new \App\Http\VideoStream($filePath);

        return response()->stream(function() use ($stream) {
            $stream->start();
        });
    }

    return response("File doesn't exists", 404);
});