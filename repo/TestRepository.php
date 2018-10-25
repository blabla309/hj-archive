<?php
/**
 * Created by PhpStorm.
 * User: 김형주
 * Date: 2018-10-25
 * Time: 오후 5:09
 */

$postRepo = new PostRepository();
$post = $postRepo->get(1);

print_r($post);

?>