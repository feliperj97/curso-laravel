<?php

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

Route::get('client', 'ClientsController@store');

Route::post('client', function(\Illuminate\Http\Request $request){
    return $request->get('value');
})->name('client.store');

/*Route::get('minharota', function(){
    return view('helloworld');
});

Route::get('minharota/rota1', function(){
    return view('helloworld1');
});

Route::get('client', function () {
    return view('client');
});

Route::post('client', function(\Illuminate\Http\Request $request){
    return $request->get('value');
})->name('client.store');

Route::get('client/{id}/{name?}', function($id, $name = 'felipe lamim'){
    return view('client-name', [
        'id' => $id,
        'name' => $name
    ]);
});*/

Route::get('if-for', function(){
    return view('if-for');
});

/*Route::get('minharota', function(){
    return "Hello world";
});

Route::get('minharota/rota1', function(){
    return "Hello world - Rota 1";
});

Route::get('client', function () {
    $csrfToken = csrf_token();
    $action = route('client.store');
    $html = <<<HTML
    <html>
        <body>
            <form method="post" action="$action">
                <input type = "hidden" name = "_token" value = "$csrfToken"/>
                <input type="text" name="value">
                <button type="submit">Enviar</button>
            </form>
        </body>
    </html>
HTML;

    return $html;
});
Route::post('cliente', function(\Illuminate\Http\Request $request){
    return $request->get('value');
})->name('client.store');
Route::get('client/{id}/{name?}', function($id, $name = 'felipe lamim'){
    return "Cliente $id, $name";
});*/