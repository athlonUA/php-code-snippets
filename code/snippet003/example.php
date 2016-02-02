<?php

/**
 * Seconds in hours like 12h 55min 47sec
 * @param $seconds
 *
 * @return string
 */
function s2h($seconds){
    return sprintf('%02dh %02dmin %02dsec', floor($seconds/3600), floor($seconds/60)%60, $seconds%60);
}
