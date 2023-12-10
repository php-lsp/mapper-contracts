<?php

declare(strict_types=1);

namespace Lsp\Contracts\Mapper\Exception;

interface ErrorTypeProviderInterface
{
    /**
     * Expected type string representation.
     *
     * @return non-empty-string
     */
    public function getExpectedType(): string;

    /**
     * Actual type string representation.
     *
     * In the case that the method {@see getActualType()} returns {@see null},
     * then the value for the required field was not passed.
     *
     * @return non-empty-string|null
     */
    public function getActualType(): ?string;
}
