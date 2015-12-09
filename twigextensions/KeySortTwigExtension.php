<?php

namespace Craft;

class KeySortTwigExtension extends \Twig_Extension
{

	protected $env;

	public function getName()
	{
		return 'KeySort Filter';
	}

	public function getFilters()
	{
		return array('keysort' => new \Twig_Filter_Method($this, 'keysort'));
	}

	public function initRuntime(\Twig_Environment $env)
	{
		$this->env = $env;
	}

	public function keysort($array, $key='date')
	{

		if ( is_array($array) && isset($key) )
		{
			$sort = function($arrayA, $arrayB) use ($key) {
	       return ($arrayA[$key] < $arrayB[$key]);
	    };
			
			usort($array, $sort);
		}

		return $array;
	}

}
