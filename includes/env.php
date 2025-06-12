<?php
function getEnvVariable($key) {
    $lines = file(__DIR__ . '/../.env');
    foreach ($lines as $line) {
        if (str_starts_with(trim($line), "#") || !str_contains($line, '=')) continue;
        list($envKey, $envValue) = explode('=', trim($line), 2);
        if ($envKey === $key) {
            return trim($envValue);
        }
    }
    return null;
}