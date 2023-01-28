<?php
namespace App\View\Helper;
use Cake\ORM\TableRegistry;
use Cake\View\Helper;
class FormatHelper extends Helper{
    public function getName($id, $resource){  
       $records = TableRegistry::get($resource); 
        $query = $records->find()->where(['id' => $id]); 
        return $query->first()->name; 
    }
}
