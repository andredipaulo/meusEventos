<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/queries/', function (){
//   $events = \App\Models\Event::all();
//   $events = \App\Models\Event::all(['title', 'description']);

//    $events = \App\Models\Event::where('id', 1)->get(); [{}]
//    $events = \App\Models\Event::where('id', 1)->first(); {}
//    $events = \App\Models\Event::find(1);

//    $event = \App\Models\Event::find($event);  //Route::get('/queries/{event?}', function ($event){

    //Atribuição Massa ou Mass Assignment

    $eventData = [
        'title' => 'Evento atribuição em massa',
        'description' => 'Evento Atualizado.',
        'body' => 'Conteúdo do evendo',
        'slug' => 'evento-atribuicao-em-massa',
        'start_event' => date('Y-m-d H:i:s'),
    ];

    // Criar
    //return \App\Models\Event::create($eventData);

    //Atualizar
    //$event = \App\Models\Event::find(2);
    //$event->update($eventData);
    //return $event;

    //Delete
    $event = \App\Models\Event::find(2);
    return $event->delete();


});
