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

Route::get('language/{language}', function ($language) {
    Session()->put('locale', $language);

    return redirect()->back();
})->name('language');

Route::group(['middleware' => ['auth', 'verified', 'account.locked']], function () {

    Route::match(['GET', 'POST'], '/cart', \App\Http\Controllers\Ecommerce\CartController::class)->name('cart');

    Route::group(['prefix' => 'account', 'as' => 'account.'], function () {
        Route::post('lock', [\App\Http\Controllers\AccountController::class, 'lock']);
    });

    Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {

        Route::get('/', [\App\Http\Controllers\ProfileController::class, 'show'])->name('show');
        Route::get('/edit', [\App\Http\Controllers\ProfileController::class, 'edit'])->name('edit');
    });


    Route::group(['as' => 'ecommerce.', 'middleware' => ['auth.role:' . \App\Models\Role::AGENT]], function () {
        Route::get('/', \App\Http\Controllers\Ecommerce\HomeController::class)->name('index');

        Route::get('/product/{product:slug}', \App\Http\Controllers\Ecommerce\ProductController::class)->name('product.show');
        Route::get('/cart', \App\Http\Controllers\Ecommerce\CartController::class)->name('cart');
        Route::get('/checkout', \App\Http\Controllers\Ecommerce\CheckoutController::class)->name('checkout');
    });


    Route::get('/dashboard', fn () => inertia('Superuser/Index'))->middleware('auth.role:' . \App\Models\Role::ADMIN)->name('dashboard');



    Route::group(['prefix' => 'superuser', 'as' => 'superuser.', 'middleware' => ['auth.role:' . \App\Models\Role::ADMIN]], function () {

        Route::group(['prefix' => 'ec'], function () {

            Route::controller(\App\Http\Controllers\Superuser\EC\ProductsController::class)->prefix('products')->as('products.')->group(function () {

                Route::get('/', 'index')->name('index');
                Route::post('/', 'store')->name('store');

                Route::get('create', 'create')->name('create');

                Route::get('csv', 'csv')->name('csv');

                Route::post('{product}/gallery', 'galleryStore')->name('media.store');

                Route::get('{product}/edit', 'edit')->name('edit');
                Route::put('{product}', 'update')->name('update');

                Route::delete('{product}', 'destroy')->name('destroy');
            });


            Route::controller(\App\Http\Controllers\Superuser\EC\TagsController::class)->prefix('tags')->as('tags.')->group(function () {

                Route::get('/', 'index')->name('index');
                Route::post('/', 'store')->name('store');

                Route::post('sort', 'sort');
                Route::get('sort', 'sort')->name('sort');

                Route::get('create', 'create')->name('create');

                Route::put('{tag}', 'update')->name('update');
                Route::get('{tag}/edit', 'edit')->name('edit');

                Route::delete('{tag}', 'destroy')->name('destroy');
            });


            Route::controller(\App\Http\Controllers\Superuser\EC\FaqsController::class)->prefix('faqs')->as('faqs.')->group(function () {
                Route::get('/', 'index')->name('index');
                Route::post('/', 'store')->name('store');

                Route::post('sort', 'sort');
                Route::get('sort', 'sort')->name('sort');

                Route::get('create', 'create')->name('create');

                Route::put('{faq}', 'update')->name('update');
                Route::get('{faq}/edit', 'edit')->name('edit');

                Route::delete('{faq}', 'destroy')->name('destroy');
            });
        });

        Route::group(['prefix' => 'ecommerce'], function () {

            Route::get('/estimates', [\App\Http\Controllers\Superuser\Ecommerce\EstimatesController::class, 'index'])->name('estimates.index');

            Route::get('/orders', [\App\Http\Controllers\Superuser\Ecommerce\OrdersController::class, 'index'])->name('orders.index');

            Route::resource('models', \App\Http\Controllers\Superuser\Ecommerce\ProductModelsController::class);

            Route::delete('products/gallery/{media}', [\App\Http\Controllers\Superuser\EC\ProductsController::class, 'galleryDestroy'])->name('products.media.destroy');

            Route::resource('manufacturers', \App\Http\Controllers\Superuser\Ecommerce\ManufacturersController::class);
        });

        Route::group(['prefix' => 'administration'], function () {

            Route::resource('users', \App\Http\Controllers\Superuser\Administration\UsersController::class);

            Route::resource('tenants', \App\Http\Controllers\Superuser\Administration\TenantsController::class);

            Route::resource('tenants.announcements', \App\Http\Controllers\Superuser\Administration\AnnouncementsController::class)->shallow();

            Route::resource('departments', \App\Http\Controllers\Superuser\Administration\DepartmentsController::class);

            Route::resource('prefectures', \App\Http\Controllers\Superuser\Administration\PrefecturesController::class);

            Route::resource('groups', \App\Http\Controllers\Superuser\Administration\GroupsController::class);

            Route::resource('roles', \App\Http\Controllers\Superuser\Administration\RolesController::class);
        });

        Route::group(['prefix' => 'support'], function () {
            Route::resource('inquiries', \App\Http\Controllers\Superuser\Support\InquiriesController::class);
        });
    });
});






/**
 * Below routes and it's pages will be deleted on project completion.
 */
Route::group(['prefix' => 'static', 'as' => 'static.'], function () {
    Route::group(['prefix' => 'agent', 'as' => 'agent.'], function () {

        Route::get('/orderList', [\App\Http\Controllers\Admin\PagesController::class, 'agentOrder']);
        Route::get('/quotationList', [\App\Http\Controllers\Admin\PagesController::class, 'quotationList']);
        Route::get('/changePassword', [\App\Http\Controllers\Admin\PagesController::class, 'changePassword']);
        Route::get('/changeProfile', [\App\Http\Controllers\Admin\PagesController::class, 'changeProfile']);
        Route::get('/changeEmail', [\App\Http\Controllers\Admin\PagesController::class, 'changeEmail']);
        Route::get('/productlist', [\App\Http\Controllers\Admin\PagesController::class, 'productlist']);
        Route::get('/noticelist', [\App\Http\Controllers\Admin\PagesController::class, 'noticelist']);
        Route::get('/faq', [\App\Http\Controllers\Admin\PagesController::class, 'faq']);
        Route::get('/top', [\App\Http\Controllers\Admin\PagesController::class, 'top']);
        Route::get('/inquiryList', [\App\Http\Controllers\Admin\PagesController::class, 'inquiryList']);
        Route::get('/inquiry', [\App\Http\Controllers\Admin\PagesController::class, 'inquiry']);
    });
    Route::group(['prefix' => 'estimates', 'as' => 'estimates.'], function () {

        Route::get('/', [\App\Http\Controllers\Admin\PagesController::class, 'estimatesIndex']);
        Route::get('/view', [\App\Http\Controllers\Admin\PagesController::class, 'estimateView']);
    });
    Route::group(['prefix' => 'orders', 'as' => 'orders.'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\PagesController::class, 'ordersIndex']);
        Route::get('/claim', [\App\Http\Controllers\Admin\PagesController::class, 'ordersClaim']);
        Route::get('/show', [\App\Http\Controllers\Admin\PagesController::class, 'ordersShow']);
    });
    Route::group(['prefix' => 'products', 'as' => 'products.'], function () {
        Route::get('/', [App\Http\Controllers\Admin\PagesController::class, 'productsIndex']);
        Route::get('/create', [App\Http\Controllers\Admin\PagesController::class, 'productsCreate']);
        Route::get('/edit', [App\Http\Controllers\Admin\PagesController::class, 'productsEdit']);
        Route::get('/tag', [App\Http\Controllers\Admin\PagesController::class, 'tag']);
        Route::get('/tagEdit', [App\Http\Controllers\Admin\PagesController::class, 'tagEdit']);
        Route::get('/tagCreate', [App\Http\Controllers\Admin\PagesController::class, 'tagCreate']);
    });
    Route::group(['prefix' => 'supports', 'as' => 'supports.'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\PagesController::class, 'supportsIndex']);
        Route::get('/show', [\App\Http\Controllers\Admin\PagesController::class, 'supportsShow']);
        Route::get('/create', [\App\Http\Controllers\Admin\PagesController::class, 'supportsCreate']);
    });
    Route::group(['prefix' => 'tenants', 'as' => 'tenants.'], function () {
        Route::get('/announcements', [\App\Http\Controllers\Admin\PagesController::class, 'indexNotice']);
        Route::get('/editnotice', [\App\Http\Controllers\Admin\PagesController::class, 'editNotice']);
        Route::get('/createnotice', [\App\Http\Controllers\Admin\PagesController::class, 'createNotice']);
        Route::get('/show', [\App\Http\Controllers\Admin\PagesController::class, 'tenantsShow']);
        Route::get('/accounts', [\App\Http\Controllers\Admin\PagesController::class, 'accountIndex']);
        Route::get('/createAccounts', [\App\Http\Controllers\Admin\PagesController::class, 'accountCreate']);
        Route::get('/editAccounts', [\App\Http\Controllers\Admin\PagesController::class, 'accountEdit']);
        Route::get('/notice', [\App\Http\Controllers\Admin\PagesController::class, 'noticeIndex']);
        Route::get('/noticeCreate', [\App\Http\Controllers\Admin\PagesController::class, 'noticeCreate']);
        Route::get('/noticeEdit', [\App\Http\Controllers\Admin\PagesController::class, 'noticeEdit']);
        Route::get('/media', [\App\Http\Controllers\Admin\PagesController::class, 'mediaIndex']);
        Route::get('/mediaCreate', [\App\Http\Controllers\Admin\PagesController::class, 'mediaCreate']);
        Route::get('/mediaEdit', [\App\Http\Controllers\Admin\PagesController::class, 'mediaEdit']);
        Route::get('/faq', [\App\Http\Controllers\Admin\PagesController::class, 'faqIndex']);
        Route::get('/faqCreate', [\App\Http\Controllers\Admin\PagesController::class, 'faqCreate']);
        Route::get('/faqEdit', [\App\Http\Controllers\Admin\PagesController::class, 'faqEdit']);
        Route::get('/faqcategory', [\App\Http\Controllers\Admin\PagesController::class, 'faqcategoryIndex']);
        Route::get('/faqcategoryCreate', [\App\Http\Controllers\Admin\PagesController::class, 'faqcategoryCreate']);
        Route::get('/faqcategoryEdit', [\App\Http\Controllers\Admin\PagesController::class, 'faqcategoryEdit']);
        Route::get('/manufacturer', [\App\Http\Controllers\Admin\PagesController::class, 'ManufacturerIndex']);
        Route::get('/manufacturerCreate', [\App\Http\Controllers\Admin\PagesController::class, 'ManufacturerCreate']);
        Route::get('/manufacturerEdit', [\App\Http\Controllers\Admin\PagesController::class, 'ManufacturerEdit']);
        Route::get('/model', [\App\Http\Controllers\Admin\PagesController::class, 'modelIndex']);
        Route::get('/modelCreate', [\App\Http\Controllers\Admin\PagesController::class, 'modelCreate']);
        Route::get('/codedefinition', [\App\Http\Controllers\Admin\PagesController::class, 'codedefinitionIndex']);
        Route::get('/codedefinitionCreate', [\App\Http\Controllers\Admin\PagesController::class, 'codedefinitionCreate']);
        Route::get('/consumption', [\App\Http\Controllers\Admin\PagesController::class, 'consumptionIndex']);
        Route::get('/consumptionCreate', [\App\Http\Controllers\Admin\PagesController::class, 'consumptionCreate']);
        Route::get('/emailto', [\App\Http\Controllers\Admin\PagesController::class, 'emailtoIndex']);
        Route::get('/automaticIndex', [\App\Http\Controllers\Admin\PagesController::class, 'automaticIndex']);
        Route::get('/roll', [\App\Http\Controllers\Admin\PagesController::class, 'rollIndex']);

        Route::get('/access', [\App\Http\Controllers\Admin\PagesController::class, 'accessIndex']);
        Route::get('/tenants', [\App\Http\Controllers\Admin\PagesController::class, 'indexTenant']);
        Route::get('/tenantsCreate', [\App\Http\Controllers\Admin\PagesController::class, 'createTenant']);
    });

    Route::group(['prfix' => 'settings', 'as' => 'settings.'], function () {

        Route::get('/settings', [\App\Http\Controllers\Admin\PagesController::class, 'index'])->name('show');
        Route::post('/settings', [\App\Http\Controllers\Admin\PagesController::class, 'store'])->name('create');
    });
});
