<?php

return [
    [
        '#NAME?',
    ],
    [
        null,
        '#NAME?',
    ],
    [
        -1,
        true,
    ],
    [
        0,
        false,
    ],
    [
        9,
        true,
    ],
    [
        1.25,
        true,
    ],
    [
        1.5,
        true,
    ],
    [
        2.25,
        false,
    ],
    [
        2.5,
        false,
    ],
    [
        '',
        '#VALUE!',
    ],
    [
        '-1',
        true,
    ],
    [
        '2',
        false,
    ],
    [
        '-1.5',
        true,
    ],
    [
        '2.5',
        false,
    ],
    [
        'ABC',
        '#VALUE!',
    ],
    [
        '#VALUE!',
        '#VALUE!',
    ],
    [
        '#N/A',
        '#VALUE!',
    ],
    [
        'TRUE',
        '#VALUE!',
    ],
    [
        true,
        '#VALUE!',
    ],
    [
        false,
        '#VALUE!',
    ],
];
