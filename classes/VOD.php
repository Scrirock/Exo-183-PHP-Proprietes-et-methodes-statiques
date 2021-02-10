<?php


class VOD{

    private static Int $subCount = 0;

    private Array $film = [];
    private Int $tarif;

    /**
     * VOD constructor.
     * @param array $film
     * @param Int $tarif
     */
    public function __construct(array $film, int $tarif)
    {
        $this->film = $film;
        $this->tarif = $tarif;
        self::addSubCount();
    }

    /**
     * Return the sub's number
     * @return int
     */
    public static function getSubCount(): int
    {
        return self::$subCount;
    }

    /**
     * Increment the sub
     */
    public static function addSubCount(): void
    {
        self::$subCount++;
    }

    /**
     * Return the film's name
     * @return array
     */
    public function getFilm(): array
    {
        return $this->film;
    }

    /**
     * Set the film's name
     * @param array $film
     */
    public function setFilm(array $film): void
    {
        $this->film = $film;
    }

    /**
     * Return the sub price
     * @return Int
     */
    public function getTarif(): int
    {
        return $this->tarif;
    }

    /**
     * Set the sub price
     * @param Int $tarif
     */
    public function setTarif(int $tarif): void
    {
        $this->tarif = $tarif;
    }




}