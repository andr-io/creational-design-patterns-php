<?php

final class Universe
{
    private static ?Universe $universe = null;

    public static function getUniverse(): Universe
    {
        if (self::$universe == null)
            self::$universe = new self();

        return self::$universe;
    }

    private function __construct()
    {
        echo "Creating the universe\n";
    }

    private function __clone()
    {
        // No cloning
    }

    public function __wakeup()
    {
        throw new Exception("Cannot deserialize a singleton");
    }
}