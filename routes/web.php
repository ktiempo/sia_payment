<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['pprefix' => 'api'], function () use ($router){
    $router->get('/payment', 'PaymentController@getAllPayment');
    $router->get('/payment{id}', 'PaymentController@getPaymentDetails');
    $router->post('/payment', 'PaymentController@createPayment');
    $router->post('/payment/gcash', 'PaymentController@makeGcashPayment');
    $router->post('/payment/card', 'PaymentController@makeCardPayment');
    $router->put('/payment/{id}', 'PaymentController@updatePayment');
    $router->patch('/payment/{id}', 'PaymentController@updatePayment');
    $router->put('/payment/{id}/cancel', 'PaymentController@cancelPayment');
    $router->delete('/payment/{id}', 'PaymentController@deletePayment');
});
