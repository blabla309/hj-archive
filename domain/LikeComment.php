<?php
/**
 * User: hjkim
 * Date: 2018-10-25
 */

class LikeComment
{
  public $memberNo;
  public $commentNo;

  public function __construct($memberNo, $commentNo){
    $this->memberNo = $memberNo;
    $this->commentNo = $commentNo;
  }
}