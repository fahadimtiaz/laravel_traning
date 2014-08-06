<?php

class Album extends Eloquent {
    
    protected $table = 'album';
    protected $fillable = array('title', 'tags', 'image','created_at','updated_at');
    
  
     
    
	 
}