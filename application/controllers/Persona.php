<?php

class Persona extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model("PersonaModel");
    }

    public function index()
    {
        $this->load->view("persona/home");
    }

    public function createpersona()
    {
        $data["nombre"] = $_POST["nombre"];
        $data["apellido_paterno"] = $_POST["apellidop"];
        $data["apellido_materno"] = $_POST["apellidom"];
        $data["edad"] = $_POST["edad"];
        $response = $this->PersonaModel->create($data);
        if ($response) {
            echo 1;
        } else {
            echo 2;
        }
    }

    public function listadopersonas()
    {
        $data["personas"] =  $this->PersonaModel->findAll();
        $this->load->view("persona/listado", $data);
    }

    public function viewupdate($id)
    {
        $data['persona'] = $this->PersonaModel->findPerson($id);
        $this->load->view("persona/viewupdate", $data);
    }

    public function updatepersona()
    {
        $id = $_POST['id'];
        $data['nombre'] = $_POST['nombre'];
        $data['apellido_paterno'] = $_POST['apellidop'];
        $data['apellido_materno'] = $_POST['apellidom'];
        $data['edad'] = $_POST['edad'];
        $response = $this->PersonaModel->update($id, $data);
        if ($response) {
            echo 1;
        } else {
            echo 2;
        }
    }

    public function deletepersona($id)
    {
        $data["estado"] = 1;
        $response =  $this->PersonaModel->deletelogic($id, $data);
        if ($response) {
            echo 1;
        } else {
            echo 2;
        }
    }
}
