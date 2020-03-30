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
    return view('dashboard');
});
Route::get('/home', function () {
    return view('dashboard');
});
//Route::get('/home', 'HomeController@index')->name('Home');

Auth::routes();
Route::get('/annualized_rate_of_return', 'Annualized_returnController@annualized_return')->name('annualized_return');
Route::get('/treasury_bill', 'HomeController@treasury_bill')->name('treasury_bill');
Route::get('/tax', 'TaxController@index')->name('index');
Route::post('/annualized_return_result', 'Annualized_returnController@annualized_return_result')->name('annualized_return_result');

Route::post('/treasury_bill_result', 'HomeController@treasury_bill_result')->name('treasury_bill_result');
Route::post('/tax_result', 'TaxController@tax_result')->name('tax_result');
Route::get('/tax_show', 'TaxController@tax_show')->name('tax_show');
Route::get('/share_reconstruction', 'Share_reconstructionController@share_reconstruction')->name('share_reconstruction');
Route::post('/share_reconstruction/result', 'Share_reconstructionController@share_reconstruction_result')->name('share_reconstruction_result');
Route::get('/bonus_share', 'Bonus_shareController@bonus_share')->name('bonus_share');
Route::post('/bonus_share_result', 'Bonus_shareController@bonus_share_result')->name('bonus_share_result');
Route::get('/percentage_change', 'Percentage_changeController@percentage_change')->name('percentage_change');
Route::post('/percentage_change_result', 'Percentage_changeController@percentage_change_result')->name('percentage_change_result');
Route::get('/wacc', 'WaccController@wacc')->name('wacc');
Route::post('/wacc_result', 'WaccController@wacc_result')->name('wacc_result');
Route::get('/interest_rate_checker', 'Interest_rate_checkerController@interest_rate_checker')->name('interest_rate_checker');
Route::post('/interest_rate_checker_result', 'Interest_rate_checkerController@interest_rate_checker_result')->name('interest_rate_checker_result');
Route::get('/annuity', 'AnnuityController@annuity')->name('annuity');
Route::post('/annuity_periodically_result', 'AnnuityController@periodically_result')->name('periodically_result');
Route::post('/annuity_period_any_result', 'AnnuityController@period_any_result')->name('period_any_result');
Route::post('/annuity_period_infinity_result', 'AnnuityController@period_infinity_result')->name('period_infinity_result');
Route::post('/annuity_yperiod_infinity_result', 'AnnuityController@yperiod_infinity_result')->name('yperiod_infinity_result');
Route::get('/dividend', 'DividendController@dividend')->name('dividend');
Route::post('/dividend_result', 'DividendController@dividend_result')->name('dividend_result');
Route::get('/treasury_bill_result', function () {
    return redirect()->to('/treasury_bill');
});
Route::get('/export_excel/excel', 'ExcelController@excel')->name('export_excel.excel');
Route::post('/delete_tax', 'TaxController@delete_tax')->name('tax.delete_tax');

Route::post('/inflation_result', 'InflationController@inflation_result')->name('inflation_result');
Route::get('/inflation', 'InflationController@inflation')->name('inflation');
// Admin controller starts
Route::get('/admin/treasury_bill', 'AdminController@treasury_bill')->name('Dashboard');
Route::get('/admin/tax', 'AdminController@tax')->name('Dashboard');
Route::get('/admin/annualized_rate_of_return', 'AdminController@annualized_rate_of_return')->name('Dashboard');
Route::get('/admin/inflation', 'AdminController@inflation')->name('Dashboard');
Route::get('/admin/share_reconstruction', 'AdminController@share_reconstruction')->name('Dashboard');
Route::get('/admin/bonus_share', 'AdminController@bonus_share')->name('Dashboard');
Route::get('/admin/percentage_change', 'AdminController@percentage_change')->name('Dashboard');
Route::get('/admin/wacc', 'AdminController@wacc')->name('Dashboard');
Route::get('/admin/interest_rate_checker', 'AdminController@interest_rate_checker')->name('Dashboard');
Route::get('/admin/annuity', 'AdminController@annuity')->name('Dashboard');
Route::get('/admin/dividend', 'AdminController@dividend')->name('Dashboard');

Route::get('/export/excel', 'TaxController@export')->name('export');
Route::get('/export/excel_head', 'TaxController@export_head')->name('export.excel_head');


// Admin controller ends




