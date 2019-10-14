<?php

require 'TwigGravatar.php';

/**
 * Pico Pagination Plugin
 *
 * @author Andrew Meyer
 * @link http://rewdy.com
 * @license http://opensource.org/licenses/MIT
 * @version 1.4
 */
class PicoGravatar extends AbstractPicoPlugin
{	
	const API_VERSION = 2;

	protected $enabled = true;

	public function onTwigRegistered(Twig_Environment &$twig)
	{
		$twig->addExtension(new \TwigGravatar());		
	}
}
