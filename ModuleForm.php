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

/**
 * @author Josef Kříž
 */
class ModuleForm extends \App\CoreModule\ModuleForm {



	public function startup()
	{
		parent::startup();

		$this->addGroup("Google");
		$this->addText("code", "Google analytics ID");
	}

}