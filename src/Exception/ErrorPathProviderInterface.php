<?php

declare(strict_types=1);

namespace Lsp\Contracts\Mapper\Exception;

interface ErrorPathProviderInterface
{
    /**
     * Returns path to the failed field in the format:
     *
     * ```php
     *  ['path', 'to', 'fieldName']
     * ```
     *
     * In the case that the method {@see getPath()} returns
     * an empty {@see array}, then a mapping error occurred at the root.
     *
     * @return list<non-empty-string>
     */
    public function getPath(): array;
}
