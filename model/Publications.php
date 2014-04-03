<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Publications
 *
 * @author Artem Mihelson <artem.mihelson@gmail.com>
 */
final class Publications {

    /** @var int */
    private $id;

    /** @var string */
    private $text;

    /** @var string */
    private $sub_text;

    /** @var string */
    private $type;

    /** @var string */
    private $title;

    /** @var DateTime */
    private $date_publ;

    /** @var int */
    private $author;

    const PUBL_NEWS = "NEWS";
    const PUBL_DIETS = "DIETS";
    const PUBL_TRAINING_METHODS = "TR_METHODS";

    //publication types
    public static function allTypes() {
        return array(
        self::PUBL_NEWS,
        self::PUBL_DIETS,
        self::PUBL_TRAINING_METHODS
        );
    }
    
    public function __construct() {}

    public function getId(){
        return $this->id;
    }
    
    public function setId($id){
        if (null !== $this->id && $this->id != $id){
            throw new Exception('Cannot change identifier to ' . $id . ', already set to ' . $this->id);
        }
        $this->id = $id;
    }
    
    public function getText(){
        return $this->text;
    }
    
    public function setText($text){
        $this->text = $text;
    }
    
    public function getSubText(){
        return $this->sub_text;
    }
    
    public function setSubText($sub_text){
        $this->sub_text = $sub_text;
    }
    
    public function getType(){
        return $this->type;
    }
    
    public function setType($type){
        PublicationsValidator::validatePublicationsType($type);
        $this->type = $type;
    }
    
    public function getTitle(){
        return $this->title;
    }
    
    public function setTitle($title){
        $this->title = $title;
    }
    
    public function getDate_publ(){
        return $this->date_publ;
    }
    
    public function setDate_publ(DateTime $date_publ){
        $this->date_publ = $date_publ;
    }
    
    public function getAuthor(){
        return $this->author;
    }
    
    public function setAuthor($author){
        $this->author = (int) $author;
    }
    
    
}
