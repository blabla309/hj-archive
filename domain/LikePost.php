<?php
/**
 * User: hjkim
 * Date: 2018-10-25
 */

class LikePost
{
  public $memberNo;
  public $postNo;

  public function __construct($memberNo, $postNo){
    $this->memberNo = $memberNo;
    $this->postNo = $postNo;
  }
}