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
					<li><a href="06heranca.php">Voltar</a></li>
					<li><a href="08__classes_metodos_abstratos.php">Avançar</a></li>
					<li><a href="00definicaoOO.php">Inicio</a></li>
				</ul>
			</nav>
		</header>
		<section>
			<article>
				<h3>Polimorfismo</h3>
				<p>O polimorfismo significa muitas formas ou algo que pode mudar sua forma. Em termos de programação, polimorfismo pode ser entendido como um único nome de classe ou métodos que represente um código diferente.<br/>
				Lembre-se: mesmo nome, porém código diferente.</p>
			</article>
			<article>
				<h4>Vantagens:</h4>
				<p>O polimorfismo facilita a reutilização de código.
				Facilita a manutenção, visto que não é preciso utilizar várias estruturas condicionais para simular situações diferentes.</p>
			</article>
<pre>
	class Veiculo{

		public $andar;
		public $parar;
		public $kmHora;

		public function __construct($andar, $parar, $kmHora){
			$this->andar = $andar;
			$this->parar = $parar;
			$this->kmHora = $kmHora;
		}
	}
	class Bicleta extends Veiculo{

	}

	$bike = new Bicleta("andou", "parou", 40);
	echo "Veiculo Bicleta";
	echo "A bicileta ".$bike->andar;
	echo "A bicileta ".$bike->parar;
	echo "A bicileta andou a ".$bike->kmHora." Km/h";

	class Carro extends Veiculo{

	}

	$carro = new Carro("andou", "parou", 300);
	echo "Veiculo Carro";
	echo "O carro ".$carro->andar;
	echo "A carro ".$carro->parar;
	echo "O carro andou a ".$carro->kmHora." Km/h";
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