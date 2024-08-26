<?php

namespace Controller;

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
        loadView('dashboard/home');
    }
    public function incAndExp()
    {
        loadView('dashboard/incAndExp');
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