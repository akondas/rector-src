<?php declare(strict_types=1);

namespace Rector\PHPUnit\Tests\Rector\TryCatchToExpectExceptionRector;

use Rector\PHPUnit\Rector\TryCatchToExpectExceptionRector;
use Rector\Testing\PHPUnit\AbstractRectorTestCase;

final class TryCatchToExpectExceptionRectorTest extends AbstractRectorTestCase
{
    public function test(): void
    {
        $this->doTestFiles(
            [[__DIR__ . '/Wrong/wrong.php.inc', __DIR__ . '/Correct/correct.php.inc'], [
                __DIR__ . '/Wrong/wrong2.php.inc',
                __DIR__ . '/Correct/correct2.php.inc',
            ]]
        );
    }

    public function getRectorClass(): string
    {
        return TryCatchToExpectExceptionRector::class;
    }
}
