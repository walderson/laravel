<?php
use Illuminate\Support\Facades\Http;

$response = Http::get('https://jsonplaceholder.typicode.com/posts/');

switch (rand(0, 6)) {
    case 0:
        echo 'Status';
        dd($response->status());
        break;
    case 1:
        echo 'Response';
        dd($response);
        break;
    case 2:
        echo 'Body';
        dd($response->body());
        break;
    case 3:
        echo 'JSON';
        dd($response->json());
        break;
    case 4:
        echo 'print_r<br>';
        print_r($response->json());
        break;
    case 6:
        $response = Http::post('https://jsonplaceholder.typicode.com/posts/', [
            'title'=>'foo',
            'body'=>'bar',
            'userId'=>1
        ]);
        echo 'POST HTTP Status '.$response->status();
        dd($response->json());
        break;
}
