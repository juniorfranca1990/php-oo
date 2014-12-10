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
					<li><a href="01classe.php">Voltar</a></li>
					<li><a href="03construtor.php">Avançar</a></li>
					<li><a href="00definicaoOO.php">Inicio</a></li>
				</ul>
			</nav>
		</header>
		<section>
		<article>
			<h2>Objeto</h2>

			<p>Um objeto tem a mesma estrutura real de uma classe, mas sua estrutura é concreta(real).
			Como falei no conteúdo anterior. 
			Classe é um modelo, exemplo, uma planta de uma casa.
			Objeto é a casa construida, a estrutura real</p>
		</article>
		<article>
			<p><center>INSTANCIAR é transformar um modelo (classe) em algo real, concreto (objeto)</center></p>

			<pre>
				$carro = new Carro(); //utilizamos o new para criarmos um objeto
				$carro->modelo = "Gol";
				$carro->ano = 2005;
				$carro->cor = "Prata";
				$carro->fabricante = "Fiat";

				echo "Modelo: ".$carro->modelo;
				echo "Ano: ".$carro->ano;
				echo "Cor: ".$carro->cor;
				echo "Fabricante: ".$carro->fabricante;
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