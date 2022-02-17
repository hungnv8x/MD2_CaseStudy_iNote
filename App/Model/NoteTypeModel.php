<?php

namespace App\Model;
class NoteTypeModel extends BaseModel
{
    public $table = "note_type";

    public function create($data)
    {
        $sql = "insert into note_type(name,description) values (?,?)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1,$data['name']);
        $stmt->bindParam(2,$data['description']);
        $stmt->execute();
    }

    public function update($data, $id)
    {
        $sql = "update note_type set name = ?,description = ? where id= ?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1,$data['name']);
        $stmt->bindParam(2,$data['description']);
        $stmt->bindParam(3,$id);
        $stmt->execute();
    }

    public function deleteNoteType($id)
    {
        $noteModel = new NoteModel();
        $noteModel->deleteNoteByTypeId($id);
        $this->delete($id);
    }
}