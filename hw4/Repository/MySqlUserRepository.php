<?php

declare(strict_types=1);

namespace AbstractFactory\Repository;

use AbstractFactory\Contract\UserRepositoryInterface;
use AbstractFactory\Entity\User;

/**
 * Class MySqlUserRepository Реализация репозитория пользователей, который
 * работает с mysql-БД.
 * @package Repository
 */
class MySqlUserRepository extends BaseMySqlRepository
    implements UserRepositoryInterface
{
    /**
     * @param User $user
     */
    public function add(User $user)
    {
        // Для коннекта к mysql используется $this->getMySqlConnection().
        echo 'Добавляем в mysql пользователя $user.' . PHP_EOL;
    }

    /**
     * @param User $user
     */
    public function delete(User $user)
    {
        // Для коннекта к mysql используется $this->getMySqlConnection().
        echo 'Удаляем в mysql пользователя $user.' . PHP_EOL;
    }

    /**
     * @param User $user
     */
    public function update(User $user)
    {
        // Для коннекта к mysql используется $this->getMySqlConnection().
        echo 'Обновляем в mysql пользователя $user.' . PHP_EOL;
    }
}