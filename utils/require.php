<?php


require_once "lib/requireLibs.php";
require_once "utils/randomHash.php";
require_once "utils/devLogs.php";
require_once "utils/DatabaseConnection.php";
require_once  "utils/JsonUtils.php";


// Models
require_once "model/DatabaseEntity.php";
require_once "model/Repository.php";

    // User
    require_once "model/User/User.php";
    require_once "model/User/UserRepository.php";

    // Home
    require_once  "model/Home/Home.php";
    require_once "model/Home/HomeRepository.php";

    // Room
    require_once  "model/Room/Room.php";
    require_once "model/Room/RoomRepository.php";

    // SensorType
    require_once  "model/Sensortype/SensorType.php";
    require_once "model/Sensortype/SensorTypeRepository.php";

    // Effector
    require_once  "model/Effector/Effector.php";
    require_once "model/Effector/EffectorRepository.php";

    // EffectorType
    require_once  "model/Effectortype/EffectorType.php";
    require_once "model/Effectortype/EffectorTypeRepository.php";

    // Sensor
    require_once  "model/Sensor/Sensor.php";
    require_once "model/Sensor/SensorRepository.php";

    // SensorValue
    require_once  "model/Sensorvalue/SensorValue.php";
    require_once "model/Sensorvalue/SensorValueRepository.php";



// Controllers
require_once "controller/Controller.php";

    // User





// Error Logging Facilities
require_once "LoggerException.php";
class logException extends LoggerException {}


