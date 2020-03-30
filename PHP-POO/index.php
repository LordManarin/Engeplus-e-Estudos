<pre>
<?php
require_once "video.php";
require_once "aluno.php";
require_once "view.php";

// criando alunos e videos
$video[1]= new video("Aula 1");
$video[2]= new video("Aula 2");
$video[3]= new video("Aula 3");

$aluno[1]= new aluno("Rafael",24,"masculino",77789);
$aluno[2]= new aluno("Talita", 22,"feminino",  24878);

// testando codigo
$vis[0] = new view($aluno[1], $video[2]);
$vis[1] = new view($aluno[1], $video[1]);

$vis[1] -> reviewNote(5);
$vis[0] -> reviewPercent(92);

print_r($vis);

?>
</pre>
