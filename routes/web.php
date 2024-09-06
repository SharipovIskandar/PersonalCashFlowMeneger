<?php

declare(strict_types=1);

use Controller\UserDashboard;
use PM\Router;

Router::get('/', fn()=> (new UserDashboard())->dashboard());

Router::get('/login', fn() => (new UserDashboard())->login(), 'guest');
Router::get('/signup', fn() => (new UserDashboard())->signup(), 'guest');
Router::get('/logout', fn() => (new \Controller\AuthController())->logout());
Router::post('/signup', fn() => (new \Controller\AuthController())->signup());
Router::post('/login', fn() => (new \Controller\AuthController())->login());

Router::get('/inc/exp', fn() => (new UserDashboard())->incAndExp(), 'auth');
Router::get('/budget/planning', fn() => (new UserDashboard())->budgetPlanning());
Router::post('/budget/planning', fn() => (new \Controller\CashFlowController())->budgetPlanning());

Router::post('/budget/delete', fn() => (new \Controller\CashFlowController())->budgetDelete());

Router::get('/set/goal', fn() => (new UserDashboard())->setGoal(), 'auth');
Router::post('/set/goal', fn() => (new \Controller\CashFlowController())->setGoal());

Router::get('/summary', fn() => (new UserDashboard())->summaryPage(), 'auth');

Router::get('/profile', fn() => (new UserDashboard())->profile(), 'auth');
Router::get('/settings', fn() => (new UserDashboard())->settings(), 'auth');

Router::post('/inc/exp', fn()=> (new \Controller\CashFlowController())->incomeOrExpensesCashFlow());

Router::errorResponse(404, 'Not Found');
