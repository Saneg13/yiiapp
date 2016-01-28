<?php

/**
 * Created by PhpStorm.
 * User: Артем
 * Date: 24.12.2015
 * Time: 14:25
 */
class Table extends CActiveRecord
{
    //переменные
    public $row;
    public $col;
    // конструктор запроса
    public function __construct($row, $col){
        //echo "Table constructor";
        $this->row = $row;
        $this->col = $col;
    }
    //геттеры и сеттеры
    private function getRow(){
        return $this->row;
    }
    private function getCol(){
        return $this->col;
    }
    /*private function setRow($row){
        $this->row = $row;
    }
    private function setCol($col){
        $this->col = $col;
    }*/

    //начало и конец таблицы
    private function start_table(){
        echo '<table border="1">';
    }
    private function end_table(){
        echo '</table>';
    }
    //начало и конец ряда
    private function start_row(){
        echo '<tr>';
    }
    private function end_row(){
        echo '</tr>';
    }
    //начало и конец столбца
    private function start_col(){
        echo '<td>';
    }
    private function end_col(){
        echo '</td>';
    }
    //вывод таблицы
    public function show_table(){
        $this->start_table();
        for ($i=1; $i<=$this->getRow(); $i++){
            $this->start_row();
            for ($j=1; $j<=$this->getCol(); $j++){
                $this->start_col();
                echo "ряд=$i , столбец=$j";
                $this->end_col();
            }
            $this->end_row();
        }
        $this->end_table();
    }
}