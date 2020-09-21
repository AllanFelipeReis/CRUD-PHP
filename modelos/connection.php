<?php
class Conn {
	private $servidor;
	private $usuario;
	private $clave;
	private $base;
	private $conn;

	public function __construct () {
		$this->servidor = 'localhost';
		$this->usuario = 'root';
		$this->clave = 'admin';
		$this->base = 'crud';

		$this->conn = new mysqli($this->servidor, $this->usuario, $this->clave, $this->base);
	}

	public function search ($sql) {
		$contenedor = $this->conn->query($sql);
		return $contenedor->fetch_all();
	}

	public function update ($sql) {
		$this->conn->query($sql);
	}

	public function close () {
		$this->conn->close();
	}
}
