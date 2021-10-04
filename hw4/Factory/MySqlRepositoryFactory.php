<?php

declare(strict_types=1);

namespace AbstractFactory\Factory;

use AbstractFactory\Contract\OrderRepositoryInterface;
use AbstractFactory\Contract\RepositoryFactoryInterface;
use AbstractFactory\Contract\UserRepositoryInterface;
use AbstractFactory\Repository\MySqlUserRepository;
use AbstractFactory\Repository\MySqlOrderRepository;
use AbstractFactory\Db\MySql;

/**
 * Class MySqlRepositoryFactory Класс-фабрика, реализующий интерфейс
 * абстрактной фабрики. Данный класс будет создавать репозитории, которые
 * работают с mysql-БД.
 * @package Factory
 */
class MySqlRepositoryFactory implements RepositoryFactoryInterface
{
    /**
     * @var MySql
     */
    private $mysqlConnection;

    /**
     * MySqlRepositoryFactory constructor.
     * @param MySql $mysqlConnection
     */
    public function __construct(MySql $mysqlConnection)
    {
        $this->mysqlConnection = $mysqlConnection;
    }

    /**
     * @return UserRepositoryInterface
     */
    public function createUserRepository(): UserRepositoryInterface
    {
        return new MySqlUserRepository($this->mysqlConnection);
    }

    /**
     * @return OrderRepositoryInterface
     */
    public function createOrderRepository(): OrderRepositoryInterface
    {
        return new MySqlOrderRepository($this->mysqlConnection);
    }
}
