<?php
namespace App\Controller;

use App\Model\NoteTypeModel;

class NoteTypeController extends BaseController
{
    public function __construct()
    {
        $this->model= new NoteTypeModel();
    }

    public function getAll()
    {
        $noteTypes = $this->model->getAll();
        include_once "App/View/Notetype/list.php";
    }

    public function getById($id)
    {
        $noteType = $this->model->getById($id);
        include_once "App/View/Notetype/detail.php";
    }

    public function delete($id)
    {
        $this->model->deleteNoteType($id);
        header("location:index.php?page=notetype-list");
    }

    public function create($request)
    {
        if ($_SERVER['REQUEST_METHOD']=="GET"){
            include_once "App/View/Notetype/create.php";
        }else{
            $this->model->create($request);
            header("location:index.php?page=notetype-list");
        }
    }

    public function update($request,$id)
    {
        if ($_SERVER['REQUEST_METHOD']=="GET"){
            $noteType = $this->model->getById($id);
            include_once "App/View/Notetype/edit.php";
        }else{
            $this->model->update($request,$id);
            header("location:index.php?page=notetype-list");
        }
    }
}