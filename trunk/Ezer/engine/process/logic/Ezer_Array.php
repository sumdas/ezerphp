<?php
/**
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 * For questions, help, comments, discussion, etc., please send
 * e-mail to tan-tan@simple.co.il
 */


require_once 'Ezer_Loadable.php';


/**
 * Purpose:     Store in the memory the definitions of array, used to array variables, steps and so on
 * @author Tan-Tan
 * @package Engine
 * @subpackage Process.Logic
 */
class Ezer_Array extends ArrayObject
{
	public $id;
	private $data;
	
	public function __construct($id = 0)
	{
		$this->id = $id;
	}
	
	public function add($value)
	{
		$this[] = $value;
	}
	
	public function __set($name, $value)
	{
		$this[] = $value;
	}
}

?>