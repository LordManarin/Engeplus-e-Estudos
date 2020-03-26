<h1></h1>
<pre>
<?php
require_once "Book.php";
require_once "People.php";
require_once "Post.php";

$leitor[0]= new People("Talita", 22, "Feminino");
$leitor[1]= new People("Rafael", 24, "Masculino");

$livro[0]= new Book("Harry Potter", "JKR", 400, $leitor[0]);
$livro[1]= new Book("Hobbit", "Tolkien", 410, $leitor[1] );

$livro[0]->open();
$livro[0]->folhar(80);
$livro[0]->avancarPag();
$livro[0]->details();

$livro[1]->folhar(100);
$livro[1]->details();

?>
</pre>