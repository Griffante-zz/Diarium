<?php
return array (
  'admin' => 
  array (
    'type' => 2,
    'description' => 'Can only read a post',
    'bizRule' => '',
    'data' => '',
    'assignments' => 
    array (
      1 => 
      array (
        'bizRule' => NULL,
        'data' => NULL,
      ),
    ),
  ),
  'aluno' => 
  array (
    'type' => 2,
    'description' => 'Can post a comment',
    'bizRule' => '',
    'data' => '',
  ),
  'professor' => 
  array (
    'type' => 2,
    'description' => 'Can read a post and post a comment',
    'bizRule' => '',
    'data' => '',
  ),
  'secretario' => 
  array (
    'type' => 2,
    'description' => 'Can read a post and post a comment',
    'bizRule' => '',
    'data' => '',
    'assignments' => 
    array (
      2 => 
      array (
        'bizRule' => NULL,
        'data' => NULL,
      ),
    ),
  ),
);
