<?php

class Movie
{
    public string $title;
    public string $director;
    public string $year;
    public string $genre;
    public string $duration;

    public function __construct(string $title, string  $director, string $year, string $genre, string $duration)
    {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
        $this->genre = $genre;
        $this->duration = $duration;
    }

    public function getMovieData()
    {
        return $this->title . ' ' . $this->director . ' ' . $this->year . ' ' . $this->genre . ' ' . $this->duration;
    }
}
