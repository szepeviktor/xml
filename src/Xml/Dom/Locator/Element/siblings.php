<?php

declare(strict_types=1);

namespace VeeWee\Xml\Dom\Locator\Element;

use DOMElement;
use DOMNode;
use VeeWee\Xml\Dom\Collection\NodeList;
use function Psl\Vec\filter;
use function VeeWee\Xml\Dom\Predicate\is_element;

/**
 * @psalm-suppress RedundantConditionGivenDocblockType - Seems better to do an additional check here psalm!
 *
 * @return NodeList<DOMElement>
 */
function siblings(DOMNode $node): NodeList
{
    return new NodeList(...filter(
        $node->parentNode?->childNodes?->getIterator() ?? [],
        static fn (DOMNode $sibling): bool => is_element($sibling) && $sibling !== $node
    ));
}
