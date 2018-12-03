<?php declare(strict_types=1);

namespace Rector\CodeQuality\Tests\Rector\If_\SimplifyIfNotNullReturnRector;

use Rector\CodeQuality\Rector\If_\SimplifyIfNotNullReturnRector;
use Rector\Testing\PHPUnit\AbstractRectorTestCase;

final class SimplifyIfNotNullReturnRectorTest extends AbstractRectorTestCase
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
        return SimplifyIfNotNullReturnRector::class;
    }
}
