<?php

class Administration
{
    private static $instance;

    private $employees;

    private $declarations;

    private $services;

    private $clients;

    /**
     * Administration constructor.
     */
    private function __construct()
    {
        self::initEmpl();
        $this->declarations = [];
        $this->services = [];
        $this->clients = [];
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function  initEmpl()
    {
        $this->employees[] = new Employee('Ivan Ivanov', 8845789865);
    }

    public function newDeclaration(Client $client)
    {
        $this->clients[] = $client;
        $this->declarations[] = new Declaration($client, $client->getAssetsList());
        $s = new Service($this->employees[0], $client, 'Declaration');
        $this->services[] = $s;
        self::store($s, 'Declaration', count($this->services));
        self::store($client, 'TaxPayers', count($this->clients));
    }

    public function payTaxes(Client $client, $assetName = null)
    {
        $haveDecl = false;

        foreach ($this->declarations as $k => $v) {
            if ($v->getClient() == $client) {
                $haveDecl = true;

                if (isset($assetName)) {
                    $haveAsset = false;

                    foreach ($v->getAssetsList() as $key => $value) {
                        if ($value->getName() === $assetName) {
                            $haveAsset = true;
                            $value->setTax(0);
                        }
                    }

                    if (!$haveAsset) {
                        throw new Exception('No Asset with that name !!');
                    }

                } else {
                    foreach ($v->getAssetsList() as $key => $value) {
                        $value->setTax(0);
                    }
                }
            }
        }

        if (!$haveDecl) {
            throw new Exception('No Declaration of this person !!');
        } else {
            $s = new Service($this->employees[0], $client, 'PayTaxes');
            $this->services[] = $s;
            self::store($s, 'PayTaxes', count($this->services));
        }
    }

    public function checkTaxes(Client $client)
    {
        $haveDecl = false;

        foreach ($this->declarations as $k => $v) {
            if ($v->getClient() == $client) {
                echo 'Check for ' . $client->getName() . ' EGN: ' . $client->getEGN() . PHP_EOL;
                $haveDecl = true;
                foreach ($v->getAssetsList() as $key => $value) {
                    echo 'Asset: ' . $value->getName() . ' Price: ' .
                        $value->getPrice() . ' Tax:' . $value->getTax() . PHP_EOL;
                }
                echo  PHP_EOL;
            }
        }

        if (!$haveDecl) {
            throw new Exception('No Declaration of this person !!');
        } else {
            $s = new Service($this->employees[0], $client, 'Check');
            $this->services[] = $s;
            self::store($s, 'Checks', count($this->services));
        }
    }

    private function store($file, $folder, $fileName)
    {
        $path = $folder . DIRECTORY_SEPARATOR . $fileName . '.txt';
        if (!is_dir(dirname($path))) {
            mkdir(dirname($path), 0777, true);
        }
        file_put_contents($path, serialize($file));
    }

    public function allNotPaid()
    {
        echo 'All clients who are not paid: ' . PHP_EOL;
        foreach ($this->clients as $keys => $val) {
            foreach ($this->declarations as $k => $v) {
                if ($v->getClient() == $val) {
                    $allTaxes = 0;
                    foreach ($v->getAssetsList() as $key => $value) {
                        $allTaxes += $value->getTax();
                    }
                    if ($allTaxes !== 0) {
                        echo $val->getName() . '---' . $allTaxes . PHP_EOL;
                    }
                }
            }
        }
        echo PHP_EOL;
    }

    public function allDeclarationsAtDate($day, $month, $year)
    {
        echo "All Declarations at $day/$month/$year :" . PHP_EOL;
        foreach ($this->declarations as $k => $v) {
            if (($v->getTime()->format('d') == $day) && ($v->getTime()->format('m') == $month)
                && ($v->getTime()->format('Y') == $year)) {
                $allAssets = 0;
                foreach ($v->getAssetsList() as $key => $value) {
                    $allAssets += $value->getPrice();
                }
                $allTaxes = 0;
                foreach ($v->getAssetsList() as $key => $value) {
                    $allTaxes += $value->getTax();
                }
                echo $v->getClient()->getName() . '---' . $allAssets . '---' . $allTaxes . PHP_EOL;
            }
        }
        echo PHP_EOL;
    }
}