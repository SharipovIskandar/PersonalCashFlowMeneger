<?php

namespace Controller;

use Couchbase\User;
use PM\Budget;
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
        $email = $_SESSION['user']['email'];
        if($email) {
            $incomes = (new Incomes())->getIncomesAmount($email);
            $expenses = (new Expenses())->getExpensesAmount($email);
        }
        loadView('dashboard/home', ['incomes' => $incomes, 'expenses' => $expenses]);
    }

    public function profile()
    {
        $email = $_SESSION['user']['email'];
        $userId = (new \PM\User())->getUserId($email);
        $user = (new \PM\User())->getUser($userId);

        loadView('view/profile', ['user' => $user]);
    }

    public function incAndExp()
    {
        $email = $_SESSION['user']['email'];
        if($email) {
            $incomes_amount = (new Incomes())->getIncomesAmount($email);
            $expenses_amount = (new Expenses())->getExpensesAmount($email);
            $incomes = (new Incomes())->getIncomes($email);
            $expenses = (new Expenses())->getExpenses($email);
        }
        loadView('dashboard/incAndExp', ['incomes_amount' => $incomes_amount, 'expenses_amount' => $expenses_amount, 'incomes'=> $incomes, 'expenses'=> $expenses ]);
    }

    public function settings()
    {
        loadView('view/settings');
    }
    public function budgetPlanning()
    {
        $budgets = (new Budget())->getBudgets();

        loadView('dashboard/budgetPlanning', ['budgets' => $budgets]);
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