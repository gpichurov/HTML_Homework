<?php

class Declaration
{
    private $client;

    private $assetsList;

    private $time;

    /**
     * Declaration constructor.
     * @param $client
     * @param $assetsList
     */
    public function __construct(Client $client, $assetsList)
    {
        $this->client = $client;
        $this->assetsList = $assetsList;
        $this->time = new DateTime();
    }

    /**
     * @return Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param Client $client
     */
    public function setClient($client)
    {
        $this->client = $client;
    }

    /**
     * @return mixed
     */
    public function getAssetsList()
    {
        return $this->assetsList;
    }

    /**
     * @param mixed $assetsList
     */
    public function setAssetsList($assetsList)
    {
        $this->assetsList = $assetsList;
    }

    /**
     * @return DateTime
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param DateTime $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }


}