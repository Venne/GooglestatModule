<?php

/**
 * This file is part of the Venne:CMS (https://github.com/Venne)
 *
 * Copyright (c) 2011 Josef Kříž (pepakriz
 * @gmail.com)
 *
 * For the full copyright and license information, please view
 * the file license.txt that was distributed with this source code.
 */

namespace App\GooglestatModule\Subscribers;

use Venne;
use App\CoreModule\Events\RenderEvents;

/**
 * @author Josef Kříž <pepakriz@gmail.com>
 */
class RenderSubscriber implements \Doctrine\Common\EventSubscriber {


	/** @var string */
	protected $code;



	public function __construct(\Nette\DI\Container $container)
	{
		$this->code = $container->parameters["modules"]["googlestat"]["code"];
	}



	/**
	 * @return array
	 */
	public function getSubscribedEvents()
	{
		return array(RenderEvents::onHeadEnd);
	}



	/**
	 * @param \Doctrine\ORM\Event\OnFlushEventArgs $args
	 */
	public function onHeadEnd()
	{
		echo "	<script type=\"text/javascript\">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', '{$this->code}']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
";
	}

}
