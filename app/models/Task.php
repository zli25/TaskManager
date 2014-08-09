<?php 

class Task extends Eloquent { 
	
	# The guarded properties specifies which attributes should *not* be mass-assignable
	protected $guarded = array('id', 'created_at', 'updated_at');
	
	# Relationship method...
    public function user() {
    
    	# tasks belong to user
	    return $this->belongsTo('User');
    }
    

    public static function searchAll($id) {

    	$tasks = Task::whereRaw('user_id ='.$id)->get();

    	return $tasks;

    }

    public static function searchDone($id) {

    	$tasks = Task::whereRaw('user_id ='.$id.' and completeness = 1')->get();
    	//$tasks = Task::whereRaw('completeness = 1')->get();

    	return $tasks;

    }

    public static function searchTodo($id) {

    	$tasks = Task::whereRaw('user_id ='.$id.' and completeness = 0')->get();

    	return $tasks;

    }	
	    
}