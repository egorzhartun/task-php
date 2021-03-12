<?php

class Task {

    public $array;
    public $lastKey;
    
    function __construct() {
        $this->array = [
            ['address' => 'г. Минск, ул. Восточнаяя, д. 33', 'date_from' => '31-12-2002', 'date_to' => '31-12-2005'],
            ['address' => 'г. Минск, ул. Восточнаяя, д. 34', 'date_from' => '31-12-2005', 'date_to' => '31-12-2006'],
            ['address' => 'г. Минск, ул. Восточнаяя, д. 34', 'date_from' => '31-12-2006', 'date_to' => '31-12-2008'],
            ['address' => 'г. Минск, ул. Тихая, д. 33', 'date_from' => '31-12-2000', 'date_to' => '31-12-2002'],
            ['address' => 'г. Минск, ул. Ленина, д. 33', 'date_from' => '31-12-2008', 'date_to' => '31-12-2010'],
            ['address' => 'г. Минск, ул. Ленина, д. 33', 'date_from' => '31-12-2010', 'date_to' => '31-12-2011'],
            ['address' => 'г. Минск, ул. Тихая, д. 33', 'date_from' => '31-12-2012'],
            ['address' => 'г. Минск, ул. Ленина, д. 33', 'date_from' => '31-12-2011', 'date_to' => '31-12-2012'],
        ];
    }

    function nowDate() {
        return $this->today = date("d.m.Y");
    }

    function setData() {
        $this->lastKey = array_key_last($this->array);
        $this->array[$this->lastKey]["date_to"] = $this->nowDate();
    }

    function sortArray($colName, $sort = SORT_ASC) {
        foreach ($this->array as $k => $value) {
            $column[$k]  = $value[$colName];
          }
      
          array_multisort($column, $sort, $this->array);

          $this->setData();
          return $this->array;
    }

    function __destruct() {

    }

}