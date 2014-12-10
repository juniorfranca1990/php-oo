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
					<li><a href="02objeto.php">Voltar</a></li>
					<li><a href="04encapsulamento.php">Avançar</a></li>
					<li><a href="00definicaoOO.php">Inicio</a></li>
				</ul>
			</nav>
		</header>
		<section>
		<article>
			<h3>CONSTRUTOR</h3>
			<p>O método construtor de uma classe sempre é executando quando um objeto da classe é instanciado. É um tipo especial de função do PHP. </p>

			<p>
			 que você deve saber sobre o método construtor:<br/>
			<ul>
		   	 	<li>O método construtor define os valores iniciais dos atributos de um objeto;</li>
		    	<li>Construtores são funções, logo aceitam passagem de parâmetros;</li>
		    	<li>Diferente de outras linguagens o PHP aceita apenas um construtor.</li>
		    </ul>
		    </p>
			<p>Caso o programador não defina um método construtor para a classe, automaticamente ao instanciar um objeto seus atributos serão inicializados com o valor NULL.</p>
		</article>
		<article>
			<h3>DESTRUTOR</h3>
			<p>Ao falarmos de método construtor não podemos deixar de falar, mesmo que brevemente, sobre o método destrutor do PHP.</p>
			<p>O método __destruct() funciona como um finalizador e, é executado ao finalizarmos um objeto, ou seja, quando o objeto é desalocado da memória, quando atribuímos NULL ao objeto, quando usamos a função unset() no objeto, ou também quando o programa é fechado.</p>
		</article>
		<article>
<pre>
	class Funcionario{

		public $nome;
		public $endereco;
		public $telefone;

		public function __construct($nome, $endereco, $telefone){
			$this->nome = $nome;
			$this->endereco = $endereco;
			$this->telefone = $telefone;
		}
		public function __destruct(){
			echo "Objeto finalizado";
		}
	}
	$func_fulano = new Funcionario("Fulano Lima", "Rua C", "(16) 1234-5678");
	echo "Nome: ".$func_fulano->nome;
	echo "Endereco: ".$func_fulano->endereco;
	echo "Telefone: ".$func_fulano->telefone;
</pre>
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