<?php

declare(strict_types=1);

namespace AbstractFactory\Repository;

use AbstractFactory\Db\MySql;

/**
 * Class BaseMySqlRepository Абстрактный класс для каждого репозитория,
 * который будет работать с mysql-БД. Здесь будет храниться соединение с БД.
 * @package Repository
 */
abstract class BaseMySqlRepository
{
    /**
     * @var MySql
     */
    private $mysqlConnection;

    /**
     * BaseMySqlRepository constructor.
     * @param MySql $mysqlConnection
     */
    public function __construct(MySql $mysqlConnection)
    {
        $this->mysqlConnection = $mysqlConnection;
    }

    /**
     * @return MySql
     */
    public function getMySqlConnection(): MySql
    {
        return $this->mysqlConnection;
    }
}