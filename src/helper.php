<?php

function germanDatetime(string $dateString): string
{
    return date('d.m.Y H:i', strtotime($dateString));
}
