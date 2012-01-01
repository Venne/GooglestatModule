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

use Nette\DI\Container;

/**
 * @author Josef Kříž
 */
class Module extends \Venne\Module\AutoModule {



	public function getName()
	{
		return "googlestat";
	}



	public function getDescription()
	{
		return "Module for connection to google analytics.";
	}



	public function getVersion()
	{
		return "1.0";
	}



	public function configure(Container $container, \App\CoreModule\CmsManager $manager)
	{
		parent::configure($container, $manager);

		$manager->addEventSubscriber(new \App\GooglestatModule\RenderListener($container->parameters["modules"]["googlestat"]["code"]));
	}
	
	public function getForm(Container $container)
	{
		return new \App\GooglestatModule\ModuleForm($container->configFormMapper, $this->getName());
	}

}
