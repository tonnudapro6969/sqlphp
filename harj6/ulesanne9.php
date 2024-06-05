<?php
class Auto {
    public $varv;
    public $tootja;
    public $kiirus;

    public function __construct($varv, $tootja) {
        $this->varv = $varv;
        $this->tootja = $tootja;
        $this->kiirus = 0;
    }

    public function kiirendus() {
        while ($this->kiirus < 100) {
            $this->kiirus += 10;
            echo "<br> kiirus: " . $this->kiirus . "\n";
            if ($this->kiirus >= 100) {
                break;
            }
        }
    }
}

// Loon uue auto
$minu_auto = new Auto("punane", "Audi");

// Kiirendan autot
echo "minu auto on tumepunane honda selle 0-100ni on 16tööpäeva";
$minu_auto->kiirendus();
echo " <br> mootor kadgi, kapitaalremont vajalik kohe";
echo '<br><img src="https://i.ytimg.com/vi/JjNvL1Z06zc/maxresdefault.jpg" alt="Image description">';

?>
