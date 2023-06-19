<?php

$genres = [
    1 => "thriller",
    2 => "war",
    3 => "gangster",
    4 => "drama",
    5 => "action",
    6 => "noir",
    7 => "history",
    8 => "horror",
    9 => "satiric",
    10 => "comedy",
];

$movies = [
    new Movie(
        'The Diparted',
        'Martin Scorsese',
        '2006',
        '151 min',
        [
            new Genre($genres[1]),
            new Genre($genres[4]),
            new Genre($genres[5]),
            new Genre($genres[3]),
        ]
    ),
    new Movie(
        'The Diparted',
        'Martin Scorsese',
        '2006',
        '151 min',
        [
            new Genre($genres[1]),
            new Genre($genres[4]),
            new Genre($genres[5]),
            new Genre($genres[3]),
        ]
    ),
    new Movie(
        'The Diparted',
        'Martin Scorsese',
        '2006',
        '151 min',
        [
            new Genre($genres[1]),
            new Genre($genres[4]),
            new Genre($genres[5]),
            new Genre($genres[3]),
        ]
    ),
    new Movie(
        'The Diparted',
        'Martin Scorsese',
        '2006',
        '151 min',
        [
            new Genre($genres[1]),
            new Genre($genres[4]),
            new Genre($genres[5]),
            new Genre($genres[3]),
        ]
    ),
    new Movie(
        'The Diparted',
        'Martin Scorsese',
        '2006',
        '151 min',
        [
            new Genre($genres[1]),
            new Genre($genres[4]),
            new Genre($genres[5]),
            new Genre($genres[3]),
        ]
    ),
];
