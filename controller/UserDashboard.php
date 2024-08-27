<?php

namespace Controller;

use PM\Expenses;
use PM\Incomes;

class UserDashboard
{
    public function home()
    {
        loadView('view/home');
    }
    public function login()
    {
        loadView('auth/login');
    }
    public function signup()
    {
        loadView('auth/signup');
    }
    public function dashboard()
    {
        $incomes = (new Incomes())->getIncomesAmount();
        $expenses = (new Expenses())->getExpensesAmount();

        loadView('dashboard/home', ['incomes' => $incomes, 'expenses' => $expenses]);
    }

    public function profile()
    {
        $incomes = (new Incomes())->getIncomesAmount();
        $expenses = (new Expenses())->getExpensesAmount();
        loadView('view/profile', ['incomes' => $incomes, 'expenses' => $expenses]);
    }

    public function incAndExp()
    {
        $incomes_amount = (new Incomes())->getIncomesAmount();
        $expenses_amount = (new Expenses())->getExpensesAmount();
        $incomes = (new Incomes())->getIncomes();
        $expenses = (new Expenses())->getExpenses();

        loadView('dashboard/incAndExp', ['incomes_amount' => $incomes_amount, 'expenses_amount' => $expenses_amount, 'incomes'=> $incomes, 'expenses'=> $expenses ]);
    }

    public function settings()
    {
        loadView('view/settings');
    }
    public function budgetPlanning()
    {
        loadView('dashboard/budgetPlanning');
    }
    public function setGoal()
    {
        loadView('dashboard/setGoal');
    }
    public function summaryPage()
    {
        loadView('dashboard/summaryPage');
    }
    public function idc()
    {
        loadView('dashboard/idc');
    }
}