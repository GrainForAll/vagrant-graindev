<?php

// Build the message.
$message = '';
while(($line = fgets(STDIN)) !== FALSE) {
  $message .= $line;
}

// Generate the filename. Use the current microtime as entropy.
$filename = date('Y-m-d_H-i-s_') . microtime();

// Create the .eml file.
file_put_contents(__DIR__ . '/' . $filename . '.eml', $message);

// Wait 1 microsecond before returning TRUE, so that subsequent calls to this
// script can't have the same filename.
usleep(1);
return true;
