\# PHP-Basic My First PHP Page

![Output of Basic Php Website](https://thumbs.spee.ch/view/1/922f7a22e2343506.png)

Documentation
-------------

[date()](http://php.net/manual/en/function.date.php)

##### Creating a Timestamp

[getlastmod()](http://php.net/manual/en/function.getlastmod.php) - Gets
timestamp of last page modification of current page

[filemtime()](http://php.net/manual/en/function.filemtime.php) - Allows
you to get the timestamp of the last modification date of a specified
file.

[mktime()](http://php.net/manual/en/function.mktime.php) - Allows you to
get the timestamp for a specific date and time

[strtotime()](http://php.net/manual/en/function.strtotime.php) - Parse
about any English textual datetime description into a timestamp

**How includes work**

Included files act as if you had pasted the code directly into the file.
Any variables that have already been defined in the main file such as
display\_name can be utilized and CHANGED. If the file cannot be
included PHP will give an error, but continue to process the script. If
you want to guarantee that the file is included before continuing on,
you should use 'require'.

[include](http://php.net/manual/en/function.include.php) - includes and
evaluates the specified file.

[include\_once](http://php.net/manual/en/function.include-once.php) -
the only difference being that if the code from a file has already been
included, it will not be included again, and include\_once returns TRUE.
As the name suggests, the file will be included just once.

[require](http://php.net/manual/en/function.require.php) - is identical
to include except upon failure it will also produce a fatal error. In
other words, it will stop the script whereas include only emits a
warning which allows the script to continue.

[require\_once](http://php.net/manual/en/function.require-once.php) -
identical except PHP will check if the file has already been included,
and if so, not include it.

#### Additional Project Ideas

1.  **Change a message based on time of day.** If can be helpful to tell
    customers looking at your site if your store is closing soon or
    closed for the day. The [date()](http://www.php.net/date) function
    will also give you the current hour so you can use that to customize
    a message. If the time is not displaying properly for you timezone,
    you can also look at the
    [date\_default\_timezone\_set](http://php.net/manual/en/function.date-default-timezone-set.php)
    function
2.  **Additional Conversions.** Try additional conversions such as
    Length... Area... Liquid... Volume... Energy... Acceleration...
    Mass... Pressure... Velocity.
3.  **Create a [Mad Libs](https://en.wikipedia.org/wiki/Mad_Libs) game**
    by replacing a string with your own variables.

