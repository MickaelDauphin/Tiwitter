<?php

//namespace Model\Gateway;
//
//use App\Src\App;
//
//class ObjectGateway
//{
//    /**
//     * @var \PDO
//     */
//    private $conn;
//
//    /**
//     * @var App
//     */
//    private $App;
//
//
//    private $id;
//
//    private $name;
//    private $currentState;
//
//
//    Public function __construct(App $App)
//    {
//        $this->conn = $App->getService('Database')->getConnection();
//    }
//
//
//    /**
//     * @return mixed
//     */
//    Public function getId()
//    {
//        return $this->id;
//    }
//
//    /**
//     * @return mixed
//     */
//    Public function getName()
//    {
//        return $this->name;
//    }
//
//    /**
//     * @param mixed $name
//     */
//    Public function setName($name): void
//    {
//        $this->name = $name;
//    }
//
//    /**
//     * @return mixed
//     */
//    Public function getCurrentState()
//    {
//        return $this->currentState;
//    }
//
//    /**
//     * @param mixed $currentState
//     */
//    Public function setCurrentState($currentState): void
//    {
//        $this->currentState = $currentState;
//    }
//
//
//    /**
//     * Insert an user
//     */
//    Public function insert() : void
//    {
//        $query = $this->conn->prepare('INSERT INTO tiwitter.objects (name, currentState)
//                                                VALUES (:name, :currentState)');
//        $executed = $query->execute([':name' => $this->name, ':currentState' => $this->currentState]);
//
//        if (!$executed)
//            throw new \Error('Insert Failed');
//        else
//            $this->id = $this->conn->lastInsertId();
//    }
//
//    Public function update() : void
//    {
//        if (!$this->id)
//            throw new \Error('Instance does not exist in base');
//
//        $query = $this->conn->prepare('UPDATE tiwitter.objects
//                                                SET name = :name,
//                                                currentState = :currentState
//                                                WHERE id = :id');
//        $executed = $query->execute([
//            ':id' => $this->id,
//            ':name' => $this->name,
//            ':currentState' => $this->currentState]);
//
//        if (!$executed)
//            throw new \Error('Update failed');
//    }
//
//    Public function delete() : void
//    {
//        $query = $this->conn->prepare('DELETE FROM tiwitter.object
//                                                WHERE id = :id AND name = :name');
//        $executed = $query->execute([
//            ':id' => $this->id,
//            ':name' => $this->name
//        ]);
//
//        if (!$executed)
//            throw new \Error('Delete failed');
//    }
//
//    Public function hydrate(array $elements)
//    {
//        $this->id = $elements['id'];
//        $this->name = $elements['name'];
//        $this->currentState = $elements['currentState'];
//    }
//
//}