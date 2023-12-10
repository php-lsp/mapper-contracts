<?php

declare(strict_types=1);

namespace Lsp\Contracts\Mapper\Tests;

use Lsp\Contracts\Mapper\Exception\ErrorPathProviderInterface;
use Lsp\Contracts\Mapper\Exception\ErrorTypeProviderInterface;
use Lsp\Contracts\Mapper\Exception\ExtractionExceptionInterface;
use Lsp\Contracts\Mapper\Exception\HydrationExceptionInterface;
use Lsp\Contracts\Mapper\Exception\MapperExceptionInterface;
use Lsp\Contracts\Mapper\ExtractorInterface;
use Lsp\Contracts\Mapper\HydratorInterface;
use PHPUnit\Framework\Attributes\Group;

/**
 * Note: Changing the behavior of these tests is allowed ONLY when updating
 *       a MAJOR version of the package.
 */
#[Group('php-lsp/mapper-contracts')]
final class InterfaceCompatibilityTest extends TestCase
{
    public function testHydratorCompatibility(): void
    {
        self::expectNotToPerformAssertions();

        new class () implements HydratorInterface {
            public function hydrate(string $type, mixed $data): mixed {}
        };
    }

    public function testExtractorCompatibility(): void
    {
        self::expectNotToPerformAssertions();

        new class () implements ExtractorInterface {
            public function extract(mixed $data): mixed {}
        };
    }

    public function testErrorPathProviderCompatibility(): void
    {
        self::expectNotToPerformAssertions();

        new class () implements ErrorPathProviderInterface {
            public function getPath(): array {}
        };
    }

    public function testErrorTypeProviderCompatibility(): void
    {
        self::expectNotToPerformAssertions();

        new class () implements ErrorTypeProviderInterface {
            public function getExpectedType(): string {}
            public function getActualType(): ?string {}
        };
    }

    public function testExtractionExceptionCompatibility(): void
    {
        self::expectNotToPerformAssertions();

        new class () extends \Exception implements ExtractionExceptionInterface {
            public function getPath(): array {}
        };
    }

    public function testHydrationExceptionCompatibility(): void
    {
        self::expectNotToPerformAssertions();

        new class () extends \Exception implements HydrationExceptionInterface {
            public function getPath(): array {}
            public function getExpectedType(): string {}
            public function getActualType(): ?string {}
        };
    }

    public function testMapperExceptionCompatibility(): void
    {
        self::expectNotToPerformAssertions();

        new class () extends \Exception implements MapperExceptionInterface {};
    }
}
