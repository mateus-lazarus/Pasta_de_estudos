<?php

namespace Alura\Doctrine\Helper;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Setup;


class EntityManagerFactory
{
    /** @return EntityManagerInterface */
    public function getEntityManager() : EntityManagerInterface
    {
        $rootDir = __DIR__ . '/../..';
        $config = Setup::createAnnotationMetadataConfiguration(
            [$rootDir . '/src'],
            isDevMode: true
        );

        $connection = [
            /* Para o banco sqlite
            "driver" => 'pdo_sqlite',
            "path" => $rootDir . '/var/data/banco.sqlite' */

            /* Para o Mysql */
            "driver" => 'pdo_mysql',
            "host" => 'localhost',
            "dbname" => 'dbteste',
            "user" => 'root',
            "password" => 'euseidetudo'
        ];

        return EntityManager::create($connection, $config);
    }
}
