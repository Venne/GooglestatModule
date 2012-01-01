<?php

/**
 * Venne:CMS (version 2.0-dev released on $WCDATE$)
 *
 * Copyright (c) 2011 Josef Kříž pepakriz@gmail.com
 *
 * For the full copyright and license information, please view
 * the file license.txt that was distributed with this source code.
 */

namespace App\GooglestatModule;

use Venne;

/**
 * @author Josef Kříž
 */
class RenderListener implements \Doctrine\Common\EventSubscriber {


	/** @var string */
	protected $code;


	public function __construct($code)
	{
		$this->code = $code;
	}


	/**
	 * @return array
	 */
	public function getSubscribedEvents()
	{
		return array(
		\App\CoreModule\RenderEvents::onHeadEnd
		);
	}


	/**
	 * @param \Doctrine\ORM\Event\OnFlushEventArgs $args 
	 */
	public function onHeadEnd()
	{
		echo "
	<script type=\"text/javascript\">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', '{$this->code}']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>";
	}

}
