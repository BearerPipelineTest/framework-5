<?php

/**
 * Spiral Framework.
 *
 * @license   MIT
 * @author    Anton Titov (Wolfy-J)
 */

declare(strict_types=1);

namespace Spiral\Prototype;

use Spiral\Prototype\Traits\PrototypeTrait;
use Spiral\Tokenizer\ScopedClassesInterface;

final class PrototypeLocator
{
    private ScopedClassesInterface $classes;

    public function __construct(ScopedClassesInterface $classes)
    {
        $this->classes = $classes;
    }

    /**
     * Locate all classes requiring de-prototyping.
     *
     * @return \ReflectionClass[]
     */
    public function getTargetClasses(): array
    {
        return $this->classes->getScopedClasses('prototypes', PrototypeTrait::class);
    }
}
