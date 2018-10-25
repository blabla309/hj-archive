<?php
/**
 * Created by PhpStorm.
 * User: 김형주
 * Date: 2018-10-25
 * Time: 오전 10:29
 */
require_once 'Domain.php';

class Post
{
  public $no;
  public $title;
  public $content;
  public $regDate;
  public $updDate;
  public $categoryNo;
  public $hitCount;
  public $likeCount;
  public $commentCount;
  public $useTf;
  public $publicTf;
}