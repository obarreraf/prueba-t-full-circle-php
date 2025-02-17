# prueba-t-full-circle-php

# Prueba Técnica PHP Senior Developer

## Pregunta 1

Escribe una función en PHP que reciba un array de números enteros y devuelva el segundo número más grande.

**Restricciones:**
- No se permite el uso de funciones nativas como `max()` o `sort()`.

## Pregunta 2

Dado el siguiente array:

```php
$orders = [
    ['id' => 1, 'status' => 'completed', 'total' => 200],
    ['id' => 2, 'status' => 'pending', 'total' => 150],
    ['id' => 3, 'status' => 'completed', 'total' => 300],
];
```

## Pregunta 3

Prueba técnica PHP senior dev 1

Imagina que estás desarrollando una funcionalidad para una aplicación financiera que analiza transacciones bancarias. Escribe un script en PHP que:

1. Reciba como entrada un array de transacciones. Cada transacción incluye:
   - `id` (número de identificación único).
   - `amount` (cantidad, puede ser positiva o negativa).
   - `date` (fecha en formato `YYYY-MM-DD`).
   - `cat` (ejemplo: `"groceries"`, `"entertainment"`, etc.).

2. Devuelva un resumen con:
   - El balance total.
   - La categoría con mayor gasto acumulado.
   - Las transacciones más recientes (últimos 3 días a partir de la fecha actual).

### Ejemplo de Input:
```php
$transactions = [
    ['id' => 1, 'amount' => -50, 'date' => '2025-01-01', 'cat' => 'groceries'],
    ['id' => 2, 'amount' => -20, 'date' => '2025-01-03', 'cat' => 'entertainment'],
    ['id' => 3, 'amount' => 100, 'date' => '2025-01-02', 'cat' => 'groceries'],
    ['id' => 4, 'amount' => -10, 'date' => '2025-01-04', 'cat' => 'groceries'],
];
```
### Output Esperado
Un array con el balance total, la categoría con mayor gasto y las transacciones
recientes.


# Para Ejecutar
Puedes utilizxar el servidor incluido de PHP con el comando
```
php -S localhost:8000
```