# Routes
Classe simples para tratar de rotas no PHP.
O objetivo é tornar a escrita de regras no .htaccess mais simplificada e deixar o controle diretamente como o PHP.

É necessário adicionar os parâmetros da URl, utilizando o método add();

````php
$url = $_SERVER["PATH_INFO"];
$param_a = "/{section}/{module}/{action}/{id}";

$myRoute = new FriendlyURl();
$myRoute->add($param_a);

$p = $myRoute->get($url);
````

Imprimindo o vetor de retorno, o resultado será parecido como:

````php
print_r($p);
````
````
Array
    (
        [section] => admin
        [module] => users
        [action] => add
        [id] => 35
    )
````
