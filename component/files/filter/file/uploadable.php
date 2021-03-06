<?php
/**
 * Nooku Framework - http://www.nooku.org
 *
 * @copyright	Copyright (C) 2011 - 2013 Johan Janssens and Timble CVBA. (http://www.timble.net)
 * @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link		git://git.assembla.com/nooku-framework.git for the canonical source repository
 */

namespace Nooku\Component\Files;

use Nooku\Library;

/**
 * File Uploadable Filter
 *
 * @author  Ercan Ozkaya <http://nooku.assembla.com/profile/ercanozkaya>
 * @package Nooku\Component\Files
 */
class FilterFileUploadable extends Library\FilterChain
{
	public function __construct(Library\ObjectConfig $config)
	{
		parent::__construct($config);

		$this->addFilter($this->getObject('com:files.filter.file.name'), self::PRIORITY_HIGH);

		//$this->addFilter($this->getObject('com:files.filter.file.extension'));
		//$this->addFilter($this->getObject('com:files.filter.file.mimetype'));
		$this->addFilter($this->getObject('com:files.filter.file.size'));
	}
}
