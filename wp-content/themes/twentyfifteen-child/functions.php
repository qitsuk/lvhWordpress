<?php
/**
 * Created by PhpStorm.
 * User: Ebbe Vang
 * Date: 21-09-2017
 * Time: 13:16
 */

// define a new function
function childTheme_writeCopright()
{
    // print p tag with css id
    print '<p id="childTemplateFooterText">';
    // pre-built function in wordpress
    print bloginfo("name");
    // similar to hello world.....
    print " is run by Cecilie Leth Karlsson";
    print "</p>";
}