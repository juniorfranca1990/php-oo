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
					<li><a href="09constante.php">Voltar</a></li>
					<li><a href="11__relacionamento_entre_objetos.php">Avançar</a></li>
					<li><a href="00definicaoOO.php">Inicio</a></li>
				</ul>
			</nav>
		</header>
		<section>
			<article>
				<h3>Propriedades e métodos estáticos</h3>
				<p>Podemos considerar que propriedades e métodos estáticos podem ser acessados sem a necessidade de instanciar um objeto. Utilizamos este recurso quando, por exemplo, temos um método que é acessado diversas vezes na mesma aplicação, e queremos economizar algumas linhas de código a fim de não ter que criar um objeto a todo momento. É importante destacar que um método estático não pode fazer referencia a propriedades internas pelo operador $this, pois este operador é usado para referenciar instâncias da classe ou seja, objetos.</p>

				<p>Utilizamos a palavra chave static para definir a declaração de membros estáticos.</p>

				<p>Membros estáticos também podem ser acessados internamente utilizando o operador self</p>
			</article>
<pre>
	class Conexao{

		private static $conexao;

		private function __construct(){

		}
		public static function conectar(){
			if(!isset(self::$conexao)){
				try{
					self::$conexao = new PDO('mysql:host=localhost;dbname=imersaophp','root','');
				}catch(PDOException $e){
					echo $e->getMessage();
				}
			}
			return self::$conexao;
		}
	}
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