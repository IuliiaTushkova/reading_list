<?php


namespace App\Model\Entity;
use Cake\ORM\Entity;



class User extends Entity
{
    public $hasAndBelongsToMany = array(
        'Book' =>
            array(
                'className' => 'Book',
                'joinTable' => 'ingredients_recipes',
                'foreignKey' => 'recipe_id',
                'associationForeignKey' => 'ingredient_id',
                'unique' => true,
                'conditions' => '',
                'fields' => '',
                'order' => '',
                'limit' => '',
                'offset' => '',
                'finderQuery' => '',
                'with' => ''
            )
    );
}
