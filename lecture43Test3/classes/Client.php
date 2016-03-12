<?php

class Client extends Person
{
    private $assetsList;

    private $proxy;

    /**
     * Client constructor.
     * @param $name
     * @param $EGN
     * @param $assetsList
     * @param $proxy
     */
    public function __construct($name, $EGN, $assetsList, Client $proxy = null)
    {
        parent::__construct($name, $EGN);
        $this->assetsList = $assetsList;
        $this->proxy = $proxy;
    }

    /**
     * @return array
     */
    public function getAssetsList()
    {
        return $this->assetsList;
    }

    /**
     * @param array $assetsList
     */
    public function setAssetsList($assetsList)
    {
        $this->assetsList = $assetsList;
    }

    /**
     * @return Client
     */
    public function getProxy()
    {
        return $this->proxy;
    }

    /**
     * @param Client $proxy
     */
    public function setProxy($proxy)
    {
        $this->proxy = $proxy;
    }


}