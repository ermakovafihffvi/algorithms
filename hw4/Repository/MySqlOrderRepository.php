<?php

declare(strict_types=1);

namespace AbstractFactory\Repository;

use AbstractFactory\Contract\OrderRepositoryInterface;
use AbstractFactory\Entity\Order;

/**
 * Class MySqlOrderRepository Реализация репозитория заказов, который
 * работает с mysql-БД.
 * @package Repository
 */
class MySqlOrderRepository extends BaseMySqlRepository
    implements OrderRepositoryInterface
{
    /**
     * @param Order $order
     */
    public function add(Order $order)
    {
        // Для коннекта к mysql используется $this->getMySqlConnection().
        echo 'Добавляем в mysql заказ $order.' . PHP_EOL;
    }

    /**
     * @param Order $order
     */
    public function delete(Order $order)
    {
        // Для коннекта к mysql используется $this->getMySqlConnection().
        echo 'Удаляем в mysql заказ $order.' . PHP_EOL;
    }

    /**
     * @param Order $order
     */
    public function update(Order $order)
    {
        // Для коннекта к mysql используется $this->getMySqlConnection().
        echo 'Обновляем в mysql заказ $order.' . PHP_EOL;
    }
}