<?php
$_SESSION['id_actor'] = $_GET['id_actor'];
$id_actor=$_SESSION['id_actor'];

$req = $bdd->prepare('SELECT COUNT(vote) FROM votes WHERE id_actor = :id_actor AND vote = 1');
$req->execute(array(
    'id_actor'=>$id_actor
    'vote'=>$vote));
$likes = $req->fetch();


$req = $bdd->prepare('SELECT COUNT(vote) FROM votes WHERE id_actor = :id_actor AND vote = 0');
$req->execute(array(
    'id_actor'=>$id_actor
    'vote'=>$vote
));
$dislikes = $req->fetch();
