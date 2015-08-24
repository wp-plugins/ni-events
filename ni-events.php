<?php

/*
Plugin Name: NI Events
Plugin URI: http://www.networkintellect.com
Description: Very simple Events Plugin Created By Network Intellect
Version: 1.0
Author: Network Intellect
Text Domain: ni-events
Author URI: http://www.networkintellect.com
License: GPL2
Tags: events, ni, event, ni events

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as 
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 
|--------------------------------------------------------------------------
| Bootstrap The Application
|--------------------------------------------------------------------------
|
| This bootstraps the NI Events Plugin and gets it ready for use, then it
| will load up the NI Events application so that we can run it.
|
*/

require_once 'app/bootstrap.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can simply call the run method,
| which will setup everything we need to display the NI Events
| straight out the box with no extra customisation needed.
|
*/

$app->run();