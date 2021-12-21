<?php

namespace Alura\Pdo\Domain\Repository;

interface StudentRepository {

    public function allStudents(): array;
    public function studentsBirthAt(\DateTimeInterface $birthDate): array;
    public function save(): bool;
    public function remove(): bool;

}

?>