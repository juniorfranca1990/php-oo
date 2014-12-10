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
					<li><a href="08__classes_metodos_abstratos.php">Voltar</a></li>
					<li><a href="10propriedades_metodos_estaticos.php">Avançar</a></li>
					<li><a href="00definicaoOO.php">Inicio</a></li>
				</ul>
			</nav>
		</header>
		<section>
			<article>
				<h3>Constantes</h3>

 				<p>Primeiro vamos definir o que é constante.<p>
				
				<p>Uma constante é exatamente o oposto de uma variável, ou seja, algo que mantém seu valor até o final do script (salvo alguma exceções). Geralmente definimos uma constante perto do início do código ou em uma função.
				A declaração de constantes é feita através da palavra-chave const. Para acessar constantes de classe fora do escopo dela, a seguinte notação é utilizada NomeClasse::Constante; e já dentro da classe, utilizamos a notação self::Constante. A palavra-chave self também pode ser utilizada para referenciar a própria classe</p>
			</article>

<pre>
	class Funcoes{

		const Pi = 3.14;
	}
	class Aplicacao extends Funcoes{

		const Versao = 3.8;

		function __construct($nome){
			echo $nome;
			echo self::Versao;
			echo parent::Pi;
			echo Funcoes::Pi;
		}
	}

	$sistema = new Aplicacao("desenvolvimento web");
</pre>

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