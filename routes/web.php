<?php

<<<<<<< HEAD
use App\Http\Controllers\NewsController;
=======
>>>>>>> 7b75587569b42e86effbccfce53afd8051535105
use Dotenv\Util\Str;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
Route::group(['prefix' => ''], static function () {

    Route::get('/news', [NewsController::class, 'index'])->name('news');

    Route::get('/news/{id}/show', [NewsController::class, 'show'])
        ->where('id', '\d+')->name('news.show');

    Route::get('/news/category/{id}/show', [CategoriesNewsTrait::class, 'category'])
        ->where('id', '\d+')->name('news.category');

    Route::get('/', 'WelcomeController@index');
    Route::get('/categories', 'CategoryController@index');
    Route::get('/categories/{categoryId}', 'CategoryController@show');
    Route::get('/news/{newsId}', 'NewsController@show');
    Route::get('/news/add', 'NewsController@add');
=======
Route::get('/hello/{name}', static function (string $name): string {
    return "Hello, {$name}";
});

Route::get('/info/{info}', static function (string $info): string {
    return "Information abot us {$info}";
});

Route::get('/news/{all}', static function (string $all): string {
    return "Page with all news, {$all}";
});

Route::get('/new/{id}', static function (int $id): string {
    return "News with #ID {$id}";
});

Route::get('/special/{text}', static function (): string {
    return '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hello</title>
    </head>
    <body>
        <h1 style = color:red>Hello friend!!! It\'s your first route page</h1>
    </body>
    </html>
    ';
>>>>>>> 7b75587569b42e86effbccfce53afd8051535105
});
