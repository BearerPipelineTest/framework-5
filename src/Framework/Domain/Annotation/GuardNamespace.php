<?php

/**
 * Spiral Framework.
 *
 * @license   MIT
 * @author    Anton Titov (Wolfy-J)
 */

declare(strict_types=1);

namespace Spiral\Domain\Annotation;

use Doctrine\Common\Annotations\Annotation\Attribute;
use Doctrine\Common\Annotations\Annotation\Attributes;
use Doctrine\Common\Annotations\Annotation\Target;
use Spiral\Attributes\NamedArgumentConstructor;

/**
 * @Annotation
 * @NamedArgumentConstructor
 * @Target({"CLASS"})
 * @Attributes({
 *     @Attribute("namespace", required=true, type="string")
 * })
 */
#[\Attribute(\Attribute::TARGET_CLASS), NamedArgumentConstructor]
final class GuardNamespace
{
    /**
     * @type string
     */
    public $namespace;

    /**
     * @psalm-param non-empty-string $namespace
     */
    public function __construct(string $namespace)
    {
        $this->namespace = $namespace;
    }
}
