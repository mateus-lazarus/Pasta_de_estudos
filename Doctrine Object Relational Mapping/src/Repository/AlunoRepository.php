<?php

namespace Alura\Doctrine\Repository;

use Doctrine\ORM\EntityRepository;
use Alura\Doctrine\Entity\Aluno;


class AlunoRepository extends EntityRepository          // extends "EntityRepository" para facilitar o uso BÁSICO de algumas funções necessárias do entityManager
{
    public function buscarCursosPorAluno()
    {
        $entityManager = $this->getEntityManager();

        $classeAluno = Aluno::class;
        $dql = "SELECT aluno, telefones, cursos FROM $classeAluno aluno JOIN aluno.telefones telefones JOIN aluno.cursos cursos";

        $query = $entityManager->createQuery($dql);

        return $query->getResult();
    }

    public function buscarCursosPorAlunoDoJeitoBurro(bool $exibeCursos)              // Do modo sem saber SQL, do jeito burro
    {
        $builder = $this->createQueryBuilder(alias:'a')
        ->join(join:'a.telefones', alias:'t')
        ->addSelect(select:'t');
        
        if ($exibeCursos) {                                                         // Uma forma bem inteligente de se pesquisar apenas os dados que desejar
            $builder->join(join:'a.cursos', alias:'c')
            ->addSelect(select:'c');
        }

        $query = $builder->getQuery();


        return $query->getResult();
    }
}


?>