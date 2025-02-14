<?php

declare(strict_types=1);

namespace VeeWee\Xml\Dom\Xpath\Configurator;

use DOMXPath;

/**
 * @param array<string, string> $namespaces
 *
 * @return callable(DOMXPath): DOMXPath
 */
function namespaces(array $namespaces): callable
{
    return static function (DOMXPath $xpath) use ($namespaces) : DOMXPath {
        foreach ($namespaces as $prefix => $namespaceURI) {
            $xpath->registerNamespace($prefix, $namespaceURI);
        }

        return $xpath;
    };
}
