<!--  <?php

        use Illuminate\Support\Facades\Route;

        /**
         * Show Listdata Dashboard
         */

        Route::get('/', 'ListDataController @index');

        /**
         *  Show create Listdata form
         */
        Route::get('/listdatas/create', 'ListDataController @create');

        /**
         * Add Listdata
         */
        Route::post('listdata/store', 'ListDataController @store');

        /**
         * Show edit Listdata
         */
        Route::get('listdatas/{listdata}/edit', 'ListDataController @edit');

        /**
         * update Listdata
         */
        Route::put('listdatas/{listdata}', 'ListDataController @update');

        /**
         * Delete Listdata
         */
        Route::get('/listdatas/{listdata}/delete', 'ListDataController @delete');
