<?php declare(strict_types=1);

namespace Rector\Php\Tests\Rector\ConstFetch\BarewordStringRector;

use Rector\Php\Rector\ConstFetch\BarewordStringRector;
use Rector\Testing\PHPUnit\AbstractRectorTestCase;

final class BarewordStringRectorTest extends AbstractRectorTestCase
{
    public function test(): void
    {
        $this->doTestFiles([[__DIR__ . '/Wrong/wrong.php.inc', __DIR__ . '/Correct/correct.php.inc']]);
    }

    public function getRectorClass(): string
    {
        return BarewordStringRector::class;
    }
}
