<?php


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');
*/
Route::group(['prefix'=>'/book-service', 'middleware'=>'auth:api', 'as'=>'bookService::'], function() {
	
	/**
	 * Show all books
	 *
	 * @return Object result
	 */
	Route::get('/',['as'=>'listBooks', 'uses'=>'Services\BooksController@index']);
	
	/**
	 * Search books by title, description or ISBN
	 *
	 * @param string $keyword
	 * @return Object result
	 */
	Route::post('/search', ['as'=>'searchBooks', 'uses'=>'Services\BooksController@index']);

	/**
	 * Search books by keywords, publishing date, publisher, author, format or availability
	 */
	//Route::post('/advance-search', ['as'=>'advanceSearchBooks', 'uses'=>'Services\BooksController@index']);
});