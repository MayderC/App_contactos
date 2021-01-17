<?php

class CurrentUser{
    private string $email;
    private string $user;
    private string $tipo;
    private string $fecha;

    function __construct($email, $user, $tipo, $fecha){
        $this->email = $email;
        $this->user = $user;
        $this->tipo = $tipo;
        $this->fecha = $fecha;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param string $user
     */
    public function setUser($user): void
    {
        $this->user = $user;
    }

    /**
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param string $tipo
     */
    public function setTipo($tipo): void
    {
        $this->tipo = $tipo;
    }

    /**
     * @return string
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * @param string $fecha
     */
    public function setFecha($fecha): void
    {
        $this->fecha = $fecha;
    }



}