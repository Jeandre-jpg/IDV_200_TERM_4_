<?php
//src/Entity/User.php
namespace App\Entity;
class User
{
    private $id;
    private $name;
    private $clients;
    public function getId() { return $this->id; }
    public function setId($id) { $this->id = $id; }
    public function getName() { return $this->name; }
    public function setName($name) { $this->name = $name; }

    public function getClients() {
        if ($this->clients == null) {
            $this->clients = array();
            }
        return $this->clients;
    }

    public function addClient($client) {
        if ($this->clients == null) {
            $this->clients = array();
        }
        array_push($this->clients, $client);
    }
}
?>