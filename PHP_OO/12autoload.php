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
					<li><a href="11__relacionamento_entre_objetos.php">Voltar</a></li>
					<li><a href="13tratamento_erros.php">Avançar</a></li>
					<li><a href="00definicaoOO.php">Inicio</a></li>
				</ul>
			</nav>
		</header>
		<section>
			<article>
				<h3>Autoload</h3>

				<p>A função autoload é utilizada no PHP para fazer o carregamento automático das classes.<br/>
				Sempre que desejarmos criar um objeto, temos que ter obrigatoriamente a classe responsável pela criação do objeto carregada na memória, caso contrário o PHP retornará um erro. Para carregar classes na memória podemos carregar todas as classes no inicio do documento utilizando o comando include_once ou com o mesmo comando imediatamente antes de instanciar um objeto.</p>

				<p>A função autoload é utilizada no PHP para fazer o carregamento automático das classes<br/>
				O grande problema é que o include_once carrega na memória as classes mesmo que você não use. Muitas vezes uma classe só é utilizada se o usuário fizer alguma requisição no sistema, um determinado passo, ou se o usuário der um clique em um botão, etc. Para resolver e simplificar tal procedimento o PHP disponibiliza a função de “carregamento automático”, que é a função autoload, que carrega a classe apenas quando um objeto dessa classe for criada, tornando o processo de carregamento das classes para a memória dinâmico.</p>
				<p><strong>
					<center>///////////////////////// INFORMAÇÃO IMPORTANTE \\\\\\\\\\\\\\\\\\\\\\\\\\\</center> <br/>
					<center>// <em>O NOME DA CLASSE TEM QUE SER O MESMO NOME DO ARQUIVO .PHP NO AUTOLOAD</em> \\</center> <br/>
					<center>//////////////////////// SE NÃO, ELE NÃO FUNCIONA \\\\\\\\\\\\\\\\\\\\\\\\\\</center> <br/>
				</strong></p>
			</article>
<article>
<p><strong>Crie um arquivo com o nome teste1.php</strong></p>
<pre>
	class teste1{

		public function exibeNome(){
			echo "Fulano";
		}
	}
</pre>
</article>

<article>
<p><strong>Crie outro arquivo com o nome teste2.php</strong></p>
<pre>
	class teste2 extends teste1{

		public function exibeIdade(){
			echo "40";
		}
	}
</pre>
</article>

<article>
<p><strong>Crie outro arquivo com o nome autoload.php</strong></p>
<pre>
	function __autoload($classe){
		include_once("{$classe}.php");
	}

	$nome = new teste1();
	$nome->exibeNome();
	
	$idade = new teste2();
	$idade->exibeIdade();
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