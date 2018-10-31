<?php
/**
 * User: hjkim
 * Date: 2018-10-25
 */

$postRepo = new PostRepository();
$post = $postRepo->get(1);

print_r($post);

?>