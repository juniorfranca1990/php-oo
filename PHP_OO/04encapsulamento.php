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
					<li><a href="03construtor.php">Voltar</a></li>
					<li><a href="05set_get.php">Avançar</a></li>
					<li><a href="00definicaoOO.php">Inicio</a></li>
				</ul>
			</nav>
		</header>
		<section>
		<article>
			<h2>Encapsulamento</h2>

			<p>O encapsulamento é o ato de você provê uma proteção de acesso aos membros internos de um objeto. A classe é responsável por seus atributos, e dessa forma podemos acessar esses atributos apenas com métodos da própria classe, ou seja, criamos métodos dentro dessa classe para alterar os atributos. Os atributos (propriedades) nunca devem ser acessadas de fora da classe, pois assim temos uma segurança maior sobre seus valores.<br/>
			Para trabalharmos com o encapsulamento devemos entender como funciona a visibilidade dos atributos e métodos de um objeto.</p>
		</article>
		<article>
			<h2>Visibilidade</h2>

			<p>No PHP existem três tipos de visibilidade:</p>

			<p><strong>PUBLIC:</strong> Atributos ou métodos como public podem ser acessados de forma livre, a partir da própria classe, a partir de classes descendentes e a partir de programas que fazem uso dessa classe</p>

			<p><strong>PRIVATE:</strong> Atributos ou métodos declarados como private só podem ser acessados dentro do escopo da própria classe em que foram declarados. Ou seja, não podemos acessar a partir de outras classes descendentes. Essa visibilidade é muito comum em atributos e raro em métodos.</p>

			<p><strong>PROTECTED:</strong> Atributos ou métodos declarados com protected somente podem ser acessadas dentro da própria classe ou a partir de classes descendentes (herdadas). </p>
		</article>
<pre>
	class Funcionario{

		<strong>public</strong> $codigo;
		<strong>private</strong> $salario;
		<strong>protected</strong> $nome;
		
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