<?php

require_once '../domain/Post.php';
/**
 * User: 김형주
 * Date: 2018-10-25
 * Time: 오전 9:27
 */

class PostRepository extends Repository{
  public function get($key) : Post {
    // TODO: Implement get() method.
    return new Post();
  }


  public function insert($post){
    // TODO: Implement insert() method.
  }


  public function listAll() : array {
  // TODO: Implement listAll() method.
  }


  public function listByParam($param) : array {
    // TODO: Implement listByParam() method.
  }


  public function delete($keys) : boolean {
    // TODO: Implement delete() method.
  }

  public function update($object)
  {
    // TODO: Implement update() method.
  }
}