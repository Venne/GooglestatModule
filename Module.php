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

namespace App\GooglestatModule;

use Nette\DI\Container;

/**
 * @author Josef Kříž <pepakriz@gmail.com>
 */
class Module extends \Venne\Module\BaseModule {


	/** @var string */
	protected $description = "Module for connection to google analytics.";

	/** @var string */
	protected $version = "2.0";



	public function getForm(Container $container)
	{
		return new \App\GooglestatModule\ModuleForm($container->configFormMapper, $this->getName());
	}

}
