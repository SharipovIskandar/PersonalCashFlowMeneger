<?php

namespace Controller;

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
        $date = $_POST['date'];
        if (($incType == 'income') && $category)
        {
            $category_id = (new Income_categories())->create($category);
            $user_id = (new User())->getUserId($_SESSION['user']['email']);
            $income = (new Incomes())->recordIncome($amount, $description, $category_id, $user_id);
            if($income){
                echo "Muvofaqiyatli qoshildi!";
            }else{
                echo "Nimadur xato ketdi!";
            }
        }elseif (($incType == 'expense') && $category)
        {
            $category_id = (new Expense_categories())->create($category);
            $user_id = (new User())->getUserId($_SESSION['user']['email']);
            $expense = (new Expenses())->recordExpenses($amount, $description, $category_id, $user_id);
            if($expense){
                echo "Muvofaqiyatli qoshildi!";
            }else{
                echo "Nimadur xato ketdi!";
            }
        }

    }
}