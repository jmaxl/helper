<?php

function germanDatetime(string $dateString): string
{
    return date('d.m.Y H:i', strtotime($dateString)) . ' Uhr';
}

function germanDate(string $dateString): string
{
    return date('d.m.Y', strtotime($dateString));
}
