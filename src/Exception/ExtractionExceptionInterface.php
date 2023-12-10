<?php

declare(strict_types=1);

namespace Lsp\Contracts\Mapper\Exception;

/**
 * An exception that occurs in case of errors during mapping process.
 */
interface ExtractionExceptionInterface extends
    ErrorPathProviderInterface,
    MapperExceptionInterface {}
