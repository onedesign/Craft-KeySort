<?php

/**
 * @package   KeySort
 * @author    One Design Company
 * @copyright Copyright 2015
 * @link      #
 */

namespace Craft;

class KeySortPlugin extends BasePlugin
{

    function getName()
    {
         return Craft::t('KeySort');
    }

    function getVersion()
    {
        return '0.0.1';
    }

    function getDeveloper()
    {
        return 'One Design Company';
    }

    function getDeveloperUrl()
    {
        return 'http://onedesigncompany.com';
    }

    function addTwigExtension()
    {
        Craft::import('plugins.keysort.twigextensions.KeySortTwigExtension');
        return new KeySortTwigExtension();
    }

}
