<?php

namespace Controller;

use DateTime;
use Exception;
use PM\Budget;
use PM\Expense_categories;
use PM\Expenses;
use PM\Goals;
use PM\Income_categories;
use PM\User;
use PM\Incomes;

class CashFlowController
{
    public function incomeOrExpensesCashFlow()
    {
        $incType = $_POST['incomeType'];
        $amount = $_POST['amount'];
        $category = $_POST['category'];
        $description = $_POST['description'];
        $email = $_SESSION['user']['email'];
        $message = '';

        if (($incType === 'income') && $category)
        {
            $category_id = (new Income_categories())->create($category);
            $user_id = (new User())->getUserId($email);
            $income = (new Incomes())->recordIncome($amount, $description, $category_id, $user_id);
            if($income){
                $message = "Muvaffaqiyatli qo'shildi!";
            }else{
                $message = "Nimadur xato ketdi!";
            }
        }elseif (($incType === 'expense') && $category)
        {
            $category_id = (new Expense_categories())->create($category);
            $user_id = (new User())->getUserId($email);
            $expense = (new Expenses())->recordExpenses($amount, $description, $category_id, $user_id);
            if($expense){
                $message = "Muvaffaqiyatli qo'shildi!";
            }else{
                $message = "Nimadur xato ketdi!";
            }
        }

        $_SESSION['messages'] = [
            "incomeAndExpense" => $message
        ];

        redirect("Location: /inc/exp");
        exit;
    }

    public function budgetPlanning()
    {
        if($_POST['name']) {
            $name = $_POST['name'];
            $amount = $_POST['amount'];
            $start_date = $_POST['start_date'];
            $end_date = $_POST['end_date'];
            $description = $_POST['description'];
            $email = $_SESSION['user']['email'];
        }
        $message = '';
        if($name && $amount && $start_date && $end_date && $description)
        {
            try {
                $startDate = new DateTime($start_date);
                $endDate = new DateTime($end_date);

                $user_id = (new User())->getUserId($email);
                $budget = (new Budget())->create($name, $description, $amount, $startDate->format('Y-m-d'), $endDate->format('Y-m-d'), $user_id);

                if($budget){
                    $message = "Muvaffaqiyatli qo'shildi!";
                }else{
                    $message = "Nimadur xato ketdi!";
                }
            } catch (Exception $e) {
                $message = "Sana formatida xato: " . $e->getMessage();
            }
        } else {
            $message = "Barcha maydonlar to'ldirilishi kerak!";
        }

        $_SESSION['messages'] = [
            "budget" => $message
        ];
        redirect("/budget/planning");
    }

    public function budgetDelete()
    {
        $id = $_POST['delete'];
        $budget = (new Budget())->delete($id);
        if($budget === true){
            redirect("/budget/planning");
        }
    }


    public function setGoal()
    {
        if($_POST['goalTitle']) {
            $goalTitle = $_POST['goalTitle'];
            $goalDescription = $_POST['goalDescription'];
            $goalDueDate = new DateTime($_POST['goalDeadline']);
            $user_id = (new User())->getUserId($_SESSION['user']['email']);
            $goal = (new Goals())->create($goalTitle, $goalDescription, $user_id, $goalDueDate->format('Y-m-d'));
            if($goal){
                redirect("/set/goal");
            }
        }
    }


}