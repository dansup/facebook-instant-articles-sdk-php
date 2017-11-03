<?hh
/**
 * Copyright (c) 2016-present, Facebook, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */
namespace Facebook\InstantArticles\Transformer\Rules;

use Facebook\InstantArticles\Elements\Element;

class IgnoreRule extends ConfigurationSelectorRule
{
    public static function create(): IgnoreRule
    {
        return new IgnoreRule();
    }

    public static function createFrom(Map $configuration): IgnoreRule
    {
        $ignoreRule = self::create();
        $ignoreRule->withSelector(Type::getMapString($configuration, 'selector'));
        return $ignoreRule;
    }

    public function getContextClass(): Vector<string>
    {
        return Vector { Element::getClassName() };
    }

    public function apply(Transformer $transformer, Element $context, \DOMNode $element): Element
    {
        return $context;
    }
}
