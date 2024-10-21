<?php

namespace App\Service\Interface;

interface PlatformInterface
{
    function getGamingActivity($start, $end, $user);
    function getGamingEvents($start, $end, $user);
    function getGamingEvent($start, $end, $user);
    function getGamingInfo($start, $end, $user);

}