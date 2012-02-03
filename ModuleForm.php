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

/**
 * @author Josef Kříž <pepakriz@gmail.com>
 */ class ModuleForm extends \App\CoreModule\Forms\ModuleForm {


	public function startup()
	{
		parent::startup();

		$this->addGroup("Google");
		$this->addText("code", "Google analytics ID");
	}

}
