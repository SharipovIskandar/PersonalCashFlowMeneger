<?php

declare(strict_types=1);

use Controller\UserDashboard;
use PM\Router;

Router::get('/', fn()=> (new UserDashboard())->dashboard());

Router::get('/login', fn() => (new UserDashboard())->login());
Router::get('/signup', fn() => (new UserDashboard())->signup());
Router::get('/logout', fn() => (new \Controller\AuthController())->logout());
Router::post('/signup', fn() => (new \Controller\AuthController())->signup());
Router::post('/login', fn() => (new \Controller\AuthController())->login());

Router::get('/inc/exp', fn() => (new UserDashboard())->incAndExp());
Router::get('/budget/planning', fn() => (new UserDashboard())->budgetPlanning());
Router::get('/set/goal', fn() => (new UserDashboard())->setGoal());
Router::get('/summary', fn() => (new UserDashboard())->summaryPage());
Router::get('/profile', fn() => (new UserDashboard())->profile());
Router::get('/settings', fn() => (new UserDashboard())->settings());

Router::post('/inc/exp', fn()=> (new \Controller\CashFlowController())->incomeOrExpensesCashFlow());