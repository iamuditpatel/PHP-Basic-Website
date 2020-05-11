# PHP-Basic
My First PHP Page

<h2>Documentation</h2>

<p><a href="http://php.net/manual/en/function.date.php" target="_blank">date()</a></p>

<h5>Creating a Timestamp</h5>

<p><a href="http://php.net/manual/en/function.getlastmod.php" target="_blank">getlastmod()</a> - Gets timestamp of last page modification of current page</p>

<p><a href="http://php.net/manual/en/function.filemtime.php" target="_blank">filemtime()</a> - Allows you to get the timestamp of the last modification date of a specified file.</p>

<p><a href="http://php.net/manual/en/function.mktime.php" target="_blank">mktime()</a> - Allows you to get the timestamp for a specific date and time</p>

<p><a href="http://php.net/manual/en/function.strtotime.php" target="_blank">strtotime()</a> - Parse about any English textual datetime description into a timestamp</p>

<p><strong>How includes work</strong></p>

<p>Included files act as if you had pasted the code directly into the file. Any variables that have already been defined in the main file such as display_name can be utilized and CHANGED. If the file cannot be included PHP will give an error, but continue to process the script. If you want to guarantee that the file is included before continuing on, you should use 'require'.</p>

<p><a href="http://php.net/manual/en/function.include.php" target="_blank">include</a> - includes and evaluates the specified file.</p>

<p><a href="http://php.net/manual/en/function.include-once.php" target="_blank">include_once</a> - the only difference being that if the code from a file has already been included, it will not be included again, and include_once returns TRUE. As the name suggests, the file will be included just once.</p>

<p><a href="http://php.net/manual/en/function.require.php" target="_blank">require</a> - is identical to include except upon failure it will also produce a fatal error. In other words, it will stop the script whereas include only emits a warning which allows the script to continue.</p>

<p><a href="http://php.net/manual/en/function.require-once.php" target="_blank">require_once</a> - identical except PHP will check if the file has already been included, and if so, not include it.</p>

<h4>Additional Project Ideas</h4>

<ol>
<li>
<strong>Change a message based on time of day.</strong> If can be helpful to tell customers  looking at your site if your store is closing soon or closed for the day. The <a href="http://www.php.net/date" target="_blank">date()</a> function will also give you the current hour so you can use that to customize a message. If the time is not displaying properly for you timezone, you can also look at the <a href="http://php.net/manual/en/function.date-default-timezone-set.php" target="_blank">date_default_timezone_set</a> function</li>
<li>
<strong>Additional Conversions.</strong> Try additional conversions such as Length... Area... Liquid... Volume... Energy... Acceleration... Mass... Pressure... Velocity.</li>
<li>
<strong>Create a <a href="https://en.wikipedia.org/wiki/Mad_Libs" target="_blank">Mad Libs</a> game</strong> by replacing a string with your own variables.</li>
</ol>
    
