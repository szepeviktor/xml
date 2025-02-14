<?php

declare(strict_types=1);

namespace VeeWee\Xml\Dom\Locator;

use DOMDocument;
use DOMElement;
use VeeWee\Xml\Dom\Collection\NodeList;
use function VeeWee\Xml\Dom\Locator\Element\locate_by_namespaced_tag_name;

/**
 * @return callable(DOMDocument): NodeList<DOMElement>
 */
function elements_with_namespaced_tagname(string $namespace, string $localTagName): callable
{
    return
        /**
         * @return NodeList<DOMElement>
         */
        static fn (DOMDocument $document): NodeList
            => locate_by_namespaced_tag_name($document->documentElement, $namespace, $localTagName);
}
