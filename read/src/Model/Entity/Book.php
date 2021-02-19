<?php


namespace App\Model\Entity;


use Cake\ORM\Entity;

class Book extends Entity
{
    private $id;
    private $name;

    public $hasOne = array(
        'Author',
        'State'
    );

    public $hasAndBelongsToMany = array(
        'Readers' =>
            array(
                'className' => 'User',
                'joinTable' => 'ingredients_recipes',
                'foreignKey' => 'recipe_id',
                'associationForeignKey' => 'ingredient_id',
                'unique' => true
            )
    );
}
