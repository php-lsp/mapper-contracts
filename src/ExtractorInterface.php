<?php

declare(strict_types=1);

namespace Lsp\Contracts\Mapper;

use Lsp\Contracts\Mapper\Exception\ExtractionExceptionInterface;
use Lsp\Contracts\Mapper\Exception\MapperExceptionInterface;

/**
 * The implementation of this interface provides the ability to transform
 * specific objects into generic data.
 */
interface ExtractorInterface
{
    /**
     * Method for converting specific objects to generic ones.
     *
     * An example:
     * ```php
     * $dto = new ExampleDTO(
     *     id: 42,
     *     name: 'Vasya',
     * );
     *
     * $data = $extractor->extract($dto);
     *
     * // array(2) [
     * //   id => int(42),
     * //   name => string("Vasya"),
     * // ]
     * ```
     *
     * @throws MapperExceptionInterface The general exception that occurs
     *          in case of internal error has been throws.
     * @throws ExtractionExceptionInterface An exception that occurs in case
     *         of errors during denormalizing process.
     */
    public function extract(mixed $data): mixed;
}
