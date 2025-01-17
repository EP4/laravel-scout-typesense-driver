<?php

namespace Typesense\LaravelTypesense\Interfaces;

/**
 * Interface TypesenseSearch
 *
 * @package Typesense\LaravelTypesense\Interfaces
 */
interface TypesenseDocument
{
    public function typesenseQueryBy(): array;

    public function typesenseQueryByWeights(): array;

    public function typesenseNumTypos(): array;

    public function getCollectionSchema(): array;
}
