<?php
namespace Grav\Common\GPM\Remote;

use Grav\Common\Iterator;

class Packages extends Iterator {
    private $plugins, $themes;

    public function __construct() {
        $plugins = new Plugins();
        $themes  = new Themes();

        $this->plugins = $plugins->toArray();
        $this->themes  = $themes->toArray();

        $this->append(['plugins' => $this->plugins]);
        $this->append(['themes' => $this->themes]);
    }
}
