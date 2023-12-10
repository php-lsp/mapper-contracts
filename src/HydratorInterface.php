<?php

declare(strict_types=1);

namespace Lsp\Contracts\Mapper;

use Lsp\Contracts\Mapper\Exception\MapperExceptionInterface;
use Lsp\Contracts\Mapper\Exception\HydrationExceptionInterface;

/**
 * The implementation of this interface provides the ability to denormalize
 * arbitrary data into concrete objects.
 */
interface HydratorInterface
{
    /**
     * Method for converting arbitrary data into specific objects.
     *
     * An example:
     *
     * ```php
     * $dto = $hydrator->hydrate(ExampleDTO::class, [
     *      'id' => 42,
     *      'name' => 'Vasya',
     * ]);
     *
     * // object(ExampleDTO) {
     * //   id: int(42),
     * //   name: string("Vasya"),
     * // }
     * ```
     *
     * @template TObject of object
     *
     * @param class-string<TObject>|non-empty-string $type
     *
     * @return ($type is class-string ? TObject : mixed)
     *
     * @throws MapperExceptionInterface The general exception that occurs
     *         in case of internal error has been throws.
     * @throws HydrationExceptionInterface An exception that occurs in case
     *         of errors during mapping process.
     */
    public function hydrate(string $type, mixed $data): mixed;
}
