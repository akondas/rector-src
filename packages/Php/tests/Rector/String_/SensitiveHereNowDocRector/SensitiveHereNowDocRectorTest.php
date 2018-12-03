<?php declare(strict_types=1);

namespace Rector\Php\Tests\Rector\String_\SensitiveHereNowDocRector;

use Rector\Php\Rector\String_\SensitiveHereNowDocRector;
use Rector\Testing\PHPUnit\AbstractRectorTestCase;

final class SensitiveHereNowDocRectorTest extends AbstractRectorTestCase
{
    public function test(): void
    {
        $this->doTestFiles([[__DIR__ . '/Wrong/wrong.php.inc', __DIR__ . '/Correct/correct.php.inc']]);
    }

    public function getRectorClass(): string
    {
        return SensitiveHereNowDocRector::class;
    }
}
