<?php

spl_autoload_register(function ($className) {
    if (file_exists('Classes/' . $className . '.php')) {
        include_once 'Classes/' . $className . '.php';
    } elseif (file_exists('Database/' . $className . '.php')) {
        include_once 'Database/' . $className . '.php';
    } elseif (file_exists('Service/' . $className . '.php')) {
        include_once 'Service/' . $className . '.php';
    }
});
