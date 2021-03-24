<?php


namespace App;




class Rooms extends Connect
{
    public static function create($name)
    {
        if ($name === ""){
            return false;
        }
        $SQL = "INSERT INTO `rooms` (`id`, `title`) VALUES (NULL, '$name')";
        $room = mysqli_query(self::db(), $SQL);
        return $room ? true : false ;
    }

    public static function addMember($name, $room_id){
        if ($name === " || $room_id === 0"){
            return false;
        }
        $SQL = "INSERT INTO `members` (`id`, `title`, `room_id`) VALUES (NULL, '$name', '$room_id')";

    }

}