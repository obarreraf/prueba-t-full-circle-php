<?php 

$transactions = [
    ['id' => 1, 'amount' => -50, 'date' => '2025-02-15', 'cat' => 'groceries'],
    ['id' => 2, 'amount' => -20, 'date' => '2025-02-16', 'cat' => 'fun'],
    ['id' => 3, 'amount' => 100, 'date' => '2025-02-12', 'cat' => 'salary'],
    ['id' => 4, 'amount' => -10, 'date' => '2025-02-17', 'cat' => 'groceries'],
];

$accountBalanceResult = accountBalance($transactions);

list($totalCategoryExpenses, $topCategoryExpenses) = categoryExpenses($transactions);

$filteredTransactionResult = filteredTransactions($transactions);

$result = [
    'balance' => $accountBalanceResult,
    'top_category' => [
        'category' => $topCategoryExpenses,
        'total_expenses' => $totalCategoryExpenses
    ],
    'recent_transactions' => []
];

foreach($filteredTransactionResult as $filtered){
    $result['recent_transactions'][] = [
        'id' => $filtered['id'],
        'category' => $filtered['cat'],
        'date' => $filtered['date'],
        'amount' => $filtered['amount']
    ];
}

echo "<pre>";
print_r($result);
echo "</pre>";

function accountBalance(array $transactions): int
{
    return array_sum(array_column($transactions,'amount'));
}

function categoryExpenses(array $transactions): array
{
    $categoryExpenses= [];

    foreach ($transactions as $transactionItem) {
        if ($transactionItem['amount'] < 0) {
            $categoryExpenses[$transactionItem['cat']] =
                ($categoryExpenses[$transactionItem['cat']] ?? 0) + abs($transactionItem['amount']);
        }
    }
    $totalCategoryExpenses = max($categoryExpenses);
    $topCategoryExpenses = array_search($totalCategoryExpenses, $categoryExpenses);

    return [$totalCategoryExpenses,$topCategoryExpenses ];
}

function filteredTransactions(array $transactions): array
{
    $today = date('Y-m-d');
    $dateLimit = date('Y-m-d', strtotime('-3 days', strtotime($today)));

    $filtered = array_filter($transactions, function ($transaction) use ($today, $dateLimit) {
        return $transaction['date'] >= $dateLimit && $transaction['date'] <= $today;
    });

    return $filtered;
}
?>