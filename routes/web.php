<!--  <?php

        use Illuminate\Support\Facades\Route;

        /**
         * Show Listdata Dashboard
         */

        Route::get('/', 'ListDataController@index');

        Route::get("/test", function () {
                return view("test");
        });

        /**
         *  Show create Listdata form
         */
        Route::get('/listdata/create', 'ListDataController @create');

        /**
         * Add Listdata
         */
        Route::post('listdata/store', 'ListDataController @store');

        /**
         * Show edit Listdata
         */
        Route::get('listdata/{listdata}/edit', 'ListDataController @edit');

        /**
         * update Listdata
         */
        Route::put('listdata/{listdata}', 'ListDataController @update');

        /**
         * Delete Listdata
         */
        Route::get('/listdata/{listdata}/delete', 'ListDataController @delete');
