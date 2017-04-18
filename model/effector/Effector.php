<?php
/**
 * Created by PhpStorm.
 * User: home
 * Date: 18/04/2017
 * Time: 08:46
 */
class Effector extends DatabaseEntity{


    /**
     * @var EffectorType $effectorType;
     */
    private $effectorType;

    /**
     * @var string $name
     */
    private $name;


    /**
     * @var Room $room;
     */
    private $room;

    /**
     * @return EffectorType
     */
    public function getEffectorType(): EffectorType
    {
        return $this->effectorType;
    }

    /**
     * @param EffectorType $effectorType
     * @return Effector
     */
    public function setEffectorType(EffectorType $effectorType)
    {
        $this->effectorType = $effectorType;
        return $this;
    }



    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return Room
     */
    public function getRoom()
    {
        return $this->room;
    }

    /**
     *
     * @param Room $room
     *
     */
    public function setRoom(Room $room)
    {
        $this->room = $room;
    }


    public function getValid(){

    }


}