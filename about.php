<?php 
	require_once 'data.php';
	require_once 'page.php';

	setPageTitle("About PARLEY!");

	$info = <<<EOT
	<h1>About PARLEY!</h1>
	<br />
	<div class="finetext" style="width: 400px; text-align: left">
<pre>
PARLEY! is the newest work from Locus Loft Creative Thinking.Forum Software
Copyright (C) 2021  locusloft.com

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU Affero General Public License as published
by the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU Affero General Public License for more details.
<br />
You should have received a copy of the GNU Affero General Public License
along with this program.  If not, see http://www.gnu.org/licenses/


</pre>
	</div>
	<br />
EOT;

	addToBody($info);
	finishPage();
?>