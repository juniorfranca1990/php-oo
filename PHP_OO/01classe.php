<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Orientação a Objetos | Júnior F.</title>
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
	<div id="interface">
		<header id="topo">
			<h1>ORIENTAÇÃO A OBJETOS</h1>
			<nav>
				<ul>
					<li><a href="00definicaoOO.php">Voltar</a></li>
					<li><a href="02objeto.php">Avançar</a></li>
					<li><a href="00definicaoOO.php">Inicio</a></li>
				</ul>
			</nav>
		</header>
		<section>
			<header>
				<h2>Classe é um modelo de algo</h2>
			</header>
			<article>
				Ex: Uma planta de uma casa.<br/>
				Da planta podem-se construir várias casas, a planta é a classe a casa pronta, construida seria o objeto.
			</article>
			<article>
				<p>Abaixo criei uma classe Carro, o carro ainda não existe, apenas um modelo do que eu preciso para construir o objeto</p>
			</article>

<pre>
< ?php
	class Carro{

		public $modelo;
		public $ano;
		public $cor;
		public $fabricante;
	}
?>
</pre>

<article>
<p>ATRIBUTOS são as variáveis de uma classe. As características que definem um objeto que será criado através dessa classe. Os atributos podem armazenar valores e até mesmo outros 
objetos que podem ser alterados durante a execução do programa.<br>

ATRIBUTOS DO CARRO: Modelo, Ano, Cor, Fabricante e etc...</p>
</article>


<article>
<p>MÉTODOS são as ações ou serviços que os objetos podem executar. São os comportamentos dos objetos. <br/>
MÉTODOS DO CARRO: Locomover, Buzinar, Parar e etc...</p>
</article>


		</section>
		
		<aside>
			<h3>Indice</h3>
			<ul>
				<li><a href="00definicaoOO.php">Definiçao</a></li>
				<li><a href="01classe.php">Classe</a></li>
				<li><a href="02objeto.php">Objeto</a></li>
				<li><a href="03construtor.php">Construtor e Destrutor</a></li>
				<li><a href="04encapsulamento.php">Encapsulamento</a></li>
				<li><a href="05set_get.php">Set e Get</a></li>
				<li><a href="06heranca.php">Herança</a></li>
				<li><a href="07__polimorfismo.php">Polimorfismo</a></li>
				<li><a href="08__classes_metodos_abstratos.php">Abstração</a></li>
				<li><a href="09constante.php">Constante</a></li>
				<li><a href="10propriedades_metodos_estaticos.php">Estatico</a></li>
				<li><a href="11__relacionamento_entre_objetos.php">Relacionamento entre objetos</a></li>
				<li><a href="12autoload.php">Autoload</a></li>
			</ul>
		</aside>

		<footer>
			<p>Júnior F.</p>
			<p>A maioria do conteúdo peguei no site <a href="http://cafeesoftware.com/curso-de-php-orientado-a-objetos/" target="_blank">Café e Software</a></p>
		</footer>	
	</div>
</body>
</html>