<?php
function show_string ($txt)
{
    echo "<h1>{$txt}</h1>";
}
function tag_a ($url,$txt)
{
    echo "<a href='$url'>{$txt}</a>";
}
function link_page ($url,$txt)
{
    echo "<a href='/index.php?page=$url'>{$txt}</a>";
}