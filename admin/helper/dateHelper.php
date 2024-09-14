<?php
// dateHelper.php

function isValidDate($date, $format = 'Y-m-d') {
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) === $date;
}

function calculateDuration($startDate) {
    $timezone = new DateTimeZone('Asia/Manila'); // Set the desired timezone
    $start = DateTime::createFromFormat('Y-m-d', $startDate, $timezone);
    $end = new DateTime('now', $timezone); // Current date with timezone

    $interval = $start->diff($end);
    $years = $interval->y;
    $months = $interval->m;
    $days = $interval->d;

    // Construct the output
    $output = '';
    if ($years > 0) {
        $output .= $years . ' year' . ($years > 1 ? 's' : '');
    }
    if ($months > 0) {
        if (!empty($output)) {
            $output .= ' & ';
        }
        $output .= $months . ' month' . ($months > 1 ? 's' : '');
    }

    // If less than one month, display in days
    if ($years == 0 && $months == 0 && $days > 0) {
        if (!empty($output)) {
            $output .= ' & ';
        }
        $output .= $days . ' day' . ($days > 1 ? 's' : '');
    }

    // Add the timezone information to the output
    // $output .= ' (GMT+8 Asia/Manila)';

    return $output;
}
?>
