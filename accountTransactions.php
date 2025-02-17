<?php 

$transactions = [
    ['id' => 1, 'amount' => -50, 'date' => '2025-01-01', 'cat' => 'groceries'],
    ['id' => 2, 'amount' => -20, 'date' => '2025-01-03', 'cat' => 'fun'],
    ['id' => 3, 'amount' => 100, 'date' => '2025-01-02', 'cat' => 'salary'],
    ['id' => 4, 'amount' => -10, 'date' => '2025-01-04', 'cat' => 'groceries']
];
$categoryExpenses= [];

$totalBalance = array_sum(array_column($transactions,'amount'));

foreach ($transactions as $transaction) {
    if ($transaction['amount'] < 0) {
        $categoryExpenses[$transaction['cat']] =
            ($categoryExpenses[$transaction['cat']] ?? 0) + abs($transaction['amount']);
    }
}
$totalCategoryExpenses = max($categoryExpenses);
$topCategoryExpenses = array_search($totalCategoryExpenses, $categoryExpenses);

echo "Balance actual de la cuenta: $totalBalance<br />";
echo "La categoria con más gasto es: $topCategoryExpenses , con un gasto de $totalCategoryExpenses";

?>