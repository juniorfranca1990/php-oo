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
					<li><a href="07__polimorfismo.php">Voltar</a></li>
					<li><a href="09constante.php">Avançar</a></li>
					<li><a href="00definicaoOO.php">Inicio</a></li>
				</ul>
			</nav>
		</header>
		<section>
			<article>
				<h3>Abstração</h3>

				<p>Podemos considerar abstração uma forma de separar mentalmente, simplificar ou mesmo considerar isoladamente. Um sistema orientado a objetos não deve ser visto como uma única peça, devamos separá-lo em partes, concentrando nas peças mais importantes e ignorando os detalhes (em primeiro momento) para que possamos construir peças bem-definidas que possam ser reaproveitadas mais tarde, formando uma estrutura hierárquica.
				Sempre que estiver desenvolvendo um sistema OO, você deve aplicar este conceito, abstraia ao máximo, concentre-se em separar o sistema em módulos.</p>
			</article>
			<article>
				<h3>Classes Abstratas e Métodos Abstratos</h3>

				<p>Seguindo o conceito de abstração que acabamos de expor, encontraremos classes que irão servir como classes estruturais ou seja, que estão na nossa hierarquia de classes para servirem de base para outras classes, mas que nunca serão instanciadas em objetos, somente suas filhas. Neste contexto, é interessante definir está classe como abstrata, de modo que ninguém consiga instancia-la.<br/>
				A grosso modo, classe abstrata nada mais é do que um modelo comum, que deve ser seguido pelas classes filhas, nunca é instanciado em objeto ou seja, não existe isoladamente.</p>

				<p>Métodos abstratos possuem uma definição semelhante, não podem ser implementados nas classes abstratas, deve ser definido somente a assinatura do método e deve obrigatoriamente, ser implementado na integra pela classe filha que o estender. Em suma, um método abstrato é definido em uma classe abstrata, mas deve conter somente sua assinatura, o “corpo” do método fica por conta das classes filhas.</p>
<pre>
	abstract class Animal{

		public $nome;
		public $idade;

		function __construct($nome, $idade){
			$this->nome = $nome;
			$this->idade = $idade;
		}

		public function Descricao(){
			return $this->nome." , ".$this->idade." anos de idade";
		}

		abstract public function Falar();
	}

	class Cachorro extends Animal{

		public function Falar(){
			return "Au Au";
		}
		public function Descricao(){
			return parent::Descricao().", eu sou um cachorro";
		}
	}

	$animal = new Cachorro("Rex", 5);
	echo $animal->Descricao();
	echo $animal->Falar();
</pre>

		<p>Da mesma forma que criamos a classe Cachorro, poderíamos criar a classe Gato, Cavalo, Pato, todas herdando da classe Animal.</p>
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