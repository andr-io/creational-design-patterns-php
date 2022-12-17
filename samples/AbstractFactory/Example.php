<?php

interface NPC
{
    public function giveQuest();
}

interface Shop
{
    public function listPrices();
}

interface House
{

}

interface Settlement
{
    public function createNPC();
    public function createShop();
    public function createHouse();
}

class Villager implements NPC
{

    public function giveQuest()
    {
        // TODO: Implement giveQuest() method.
    }
}

class Market implements Shop
{

    public function listPrices()
    {
        // TODO: Implement listPrices() method.
    }
}

class VillageHouse implements House
{

}

class Citizen implements NPC
{

    public function giveQuest()
    {
        // TODO: Implement giveQuest() method.
    }
}

class Mall implements Shop
{

    public function listPrices()
    {
        // TODO: Implement listPrices() method.
    }
}

class Skyscraper implements House
{

}

class VillageFactory implements Settlement
{
    public function createNPC(): NPC
    {
        return new Villager();
    }

    public function createShop(): Shop
    {
        return new Market();
    }

    public function createHouse(): House
    {
        return new VillageHouse();
    }
}

class CityFactory implements Settlement
{
    public function createNPC(): NPC
    {
        return new Citizen();
    }

    public function createShop(): Shop
    {
        return new Mall();
    }

    public function createHouse(): House
    {
        return new Skyscraper();
    }
}