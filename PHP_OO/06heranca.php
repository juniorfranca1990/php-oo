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
					<li><a href="05set_get.php">Voltar</a></li>
					<li><a href="07__polimorfismo.php">Avançar</a></li>
					<li><a href="00definicaoOO.php">Inicio</a></li>
				</ul>
			</nav>
		</header>
		<section>
			<article>
				<h3>Herança</h3>
			</article>
			<p>Assim como no mundo real, a palavra se refere ao conceito de receber algo, herança aqui pode ser entendida como um mecanismo que permite construir uma nova classe com base em uma classe previamente existente, em que a nova herda automaticamente todos os atributos, comportamentos e implementações da classe-pai. </p>

			<p>Para estender uma nova classe (chamaremos de subclasse), utilizamos a palavra reservada extends. <br/>
			Quando criamos uma subclasse, todos os métodos pertencentes a classe pai podem ser executados. Também é possível sobrescrever os seus métodos e propriedades, a fim de criar novos, com outras características.</p>
	<pre>
	class Pessoa{
		public $nome;
		public $idade;
		public $email;

		public function __construct($nome, $idade, $email){
			$this->nome = $nome;
			$this->idade = $idade;
			$this->email = $email;
		}
	}
	$pessoa = new Pessoa("Fulano", 18, "teste@teste.com");
	echo "Nome: ".$pessoa->nome;
	echo "Idade: ".$pessoa->idade;
	echo "Email: ".$pessoa->email;

	class Funcionario extends Pessoa{
		
	}
	$func = new Funcionario("Cicrano", 23, "testando@testando.com");
	echo "Funcionario";
	echo "Nome: ".$func->nome;
	echo "Idade: ".$func->idade;
	echo "Email: ".$func->email;
	?>
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