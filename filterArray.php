<?php

$ordersList = [
            ['id' => 1, 'status' => 'completed', 'total' => 150],
            ['id' => 2, 'status' => 'pending', 'total' => 200 ],
            ['id' => 3, 'status' => 'completed', 'total' => 100 ]
        ];

$statusOrder = 'completed';
$totalOrders = filterOrders($ordersList, $statusOrder);

echo "Total de pedidos completados: $totalOrders";

function filterOrders(array $orders, string $statusOrder): int
{
    $totalOrders = array_reduce($orders, function ($result, $order) use ($statusOrder){
        return $order['status'] === $statusOrder ? $result + $order['total']: $result;
    },0);

    return $totalOrders;
}
?>