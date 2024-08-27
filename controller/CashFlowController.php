<?php

namespace Controller;

use DateTime;
use PM\Expense_categories;
use PM\Expenses;
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

        header("Location: /inc/exp");
        exit;
    }

}