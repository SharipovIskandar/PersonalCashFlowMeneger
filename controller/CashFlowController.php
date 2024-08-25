<?php

namespace Controller;

use PM\Incomes;

class CashFlowController
{
    public function income()
    {
        $incType = $_POST['incomeType'];
        $amount = $_POST['amount'];
        $description = $_POST['description'];
        $date = $_POST['date'];
        if ($incType == 'income')
        {
            $income = (new Incomes())->recordIncome($incType);
            if($income === true)
            {
                $stmt = $this->pdo->preare
            }
        }
    }
}