<?php

/**
 * This File is part of the Selene\Components\Xml package
 *
 * (c) Thomas Appel <mail@thomas-appel.com>
 *
 * For full copyright and license information, please refer to the LICENSE file
 * that was distributed with this package.
 */

namespace Selene\Components\Xml\Traits;

/**
 * @trait XmlHelperTrait
 *
 * @package Selene\Components\Xml\Traits
 * @version $Id$
 * @author Thomas Appel <mail@thomas-appel.com>
 * @license MIT
 */
trait XmlHelperTrait
{
    /**
     * isXmlElement
     *
     * @param mixed $element
     *
     * @access public
     * @return boolean
     */
    public function isXmlElement($element)
    {
        return $element instanceof \DOMNode || $element instanceof \SimpleXmlElement;
    }
}
