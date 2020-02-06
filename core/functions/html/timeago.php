<?php

function timeAgo($time_ago)
{
    $cur_time = time();
    $time_elapsed = $cur_time - $time_ago;

    $seconds = $time_elapsed;
    $minutes = round($time_elapsed / 60);
    $hours = round($time_elapsed / 3600);
    $days = round($time_elapsed / 86400);
    $weeks = round($time_elapsed / 604800);
    $months = round($time_elapsed / 2600640);
    $years = round($time_elapsed / 31207680);

    if ($seconds <= 60) {
        return "just a moment ago";

    } else if ($minutes <= 60) {
        if ($minutes == 1) {
            return "a minute ago";
        } else {
            return "$minutes minutes ago";
        }
    } else if ($hours <= 24) {
        if ($hours == 1) {
            return "an hour ago";
        } else {
            return "$hours hours ago";
        }
    } else if ($days <= 7) {
        if ($days == 1) {
            return "yesterday";
        } else {
            return "$days days ago";
        }
    } else if ($weeks <= 4) {
        if ($weeks == 1) {
            return "last week";
        } else {
            return "$weeks weeks ago";
        }
    } else if ($months <= 12) {
        if ($months == 1) {
            return "last month";
        } else {
            return "$months";
        }
    } else {
        if ($years == 1) {
            return "a year ago";
        } else {
            return "$years years ago";
        }
    }
}