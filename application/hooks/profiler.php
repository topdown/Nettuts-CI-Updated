<?php //defined('VW_SCRIPT') OR die('No direct access allowed.');
/**
 * @author Jeff a.k.a. (topdown / phpbbxpert)
 * @package
 * @version $Id$
 * Created Aug 8, 2010, 7:12:36 PM
 * @copyright (c) 2009-10 Valid-Webs.com
 * @license
 */

function profiler_hook()
{
	if($_SERVER['REMOTE_ADDR'] == '::1')
	{
		$CI =& get_instance();
		$CI->output->enable_profiler(true);
	}

}