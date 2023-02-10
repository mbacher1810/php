<?php
namespace Bacher;

class Auto
{

    public function __construct($farbe) {
        // echo 'Auto wird erstellt.';
        // $this->farbe = $farbe;
        $this->setFarbe($farbe);
    }

    private $farbe = 'rot';

    /**
     * @return string
     */
    public function getFarbe(): string
    {
        return $this->farbe;
    }

    /**
     * @param string $farbe
     */
    public function setFarbe(string $farbe): void
    {
        $this->farbe = $farbe;
    }



    public function fahre()
    {
        echo "Brum Brum Brum ... ich bin $this->farbe<br />";
    }
}

