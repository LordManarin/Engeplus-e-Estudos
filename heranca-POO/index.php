<pre>
<?php
require_once 'people.php';
require_once  'student.php';
require_once 'teacher.php';
require_once  'funcionary.php';

$pessoa1 = new student();
$pessoa2 = new people();
$pessoa3= new teacher();
$pessoa4 = new funcionary();

$pessoa1->setName("Rafael");
$pessoa2->setName("Talita");
$pessoa3->setName("Alice");
$pessoa4->setName("Bruna");

$pessoa1->setCourse("Programacao");
$pessoa1->setAge(24);
$pessoa1->setSex('Masculino');
$pessoa1->setIdent(944621);
print_r($pessoa1);

?>
</pre>
