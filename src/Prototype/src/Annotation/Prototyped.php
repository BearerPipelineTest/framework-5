<?php

/**
 * Spiral Framework.
 *
 * @license   MIT
 * @author    Anton Titov (Wolfy-J)
 */

declare(strict_types=1);

namespace Spiral\Prototype\Annotation;

use Doctrine\Common\Annotations\Annotation\Attribute;
use Doctrine\Common\Annotations\Annotation\Attributes;
use Doctrine\Common\Annotations\Annotation\Target;
use Spiral\Attributes\NamedArgumentConstructor;

/**
 * @Annotation
 * @NamedArgumentConstructor
 * @Target("CLASS")
 * @Attributes({
 *      @Attribute("property", type="string", required=true),
 * })
 */
#[\Attribute(\Attribute::TARGET_CLASS), NamedArgumentConstructor]
class Prototyped
{
    /** @var string */
    public $property;

    /**
     * @psalm-param non-empty-string $property
     */
    public function __construct(string $property)
    {
        $this->property = $property;
    }
}
