<?php
  /**
   * Definir una clase de excepción personalizada
   */
  class MiExcepción extends Exception
  {
    // Redefinir la excepción, por lo que el mensaje no es opcional
    public function __construct($message, $code = 0, Exception $previous = null)
    {
      // algo de código

      // asegúrese de que todo está asignado apropiadamente
      parent::__construct($message, $code, $previous);
    }

    // representación de cadena personalizada del objeto
    public function __toString()
    {
      return __CLASS__ . ": [{$this->code}]: {$this->message}<br>";
    }

    public function funciónPersonalizada()
    {
      echo "Una función personalizada para este tipo de excepción<br>";
    }
  }

  /**
   * Crear una clase para probar la excepción
   */
  class ProbarExcepción
  {
    public $var;

    const THROW_NONE    = 0;
    const THROW_CUSTOM  = 1;
    const THROW_DEFAULT = 2;

    function __construct($avalue = self::THROW_NONE)
    {

      switch ($avalue) {
        case self::THROW_CUSTOM:
          // lanzar la excepción personalizada
          throw new MiExcepción('1 no es un parámetro válido', 5);
          break;

        case self::THROW_DEFAULT:
          // lanzar la predeterminada.
          throw new Exception('2 no está permitido como parámetro', 6);
          break;

        default:
          // No hay excepción, el objeto se creará.
          $this->var = $avalue;
          break;
      }
    }
  }

  ?>