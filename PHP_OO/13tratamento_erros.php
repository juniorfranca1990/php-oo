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
					<li><a href="12autoload.php">Voltar</a></li>
					<li><a href="00definicaoOO.php">Inicio</a></li>
				</ul>
			</nav>
		</header>
		<section>
			<article>
				<h3>TRATAMENTO DE ERROS</h3>

				<p>No PHP existem três tipos de erros: Notices (notificações), Warnings (alertas) e os Fatals (fatais). Os erros fatais quando ocorrem fazem com que o script finalize de forma imediata. </p>
			</article>

			<article>
				<h3>Tratamento de exceções</h3>

				<p>Uma exceção é um objeto especial derivado da classe Exception que contêm alguns métodos que relatam ao programador o que aconteceu. <br/>
				Vamos agora conhecer estes métodos:</p>
				<ul>
				    <li>getMessage() – Retorna a mensagem de erro;</li>
				    <li>getCode() – Retorna o código de erro;</li>
				    <li>getFile() – Retorna o arquivo no qual o erro ocorreu;</li>
				    <li>getLine() – Retorna a linha na qual o erro ocorreu;</li>
				    <li>getTrace() – Retorna um array com as ações até o erro;</li>
				    <li>getTraceAsString() – Retorna as ações em forma de string.</li>
				</ul>

				<p>Quando executamos operações que podem resultar em erros, usamos o bloco try para monitorá-los. Dentro das operações críticas, quando ocorre um erro, usamos o comando throw para “lançar” uma exceção (Objeto Exception), para interromper a execução do bloco contido na clausula try, a qual recebe esta exceção e repassa para outro bloco de comandos catch. Dentro do bloco catch podemos definir o que fazer: Emitir uma mensagem de erro para o usuário e cancelar a execução do script ou armazenar os detalhes do erro em um arquivo de log e etc.</p>
			</article>
<pre>	
	try{
		$conexao = new PDO('mysql:host=localhost;dbname=naoExiste','root','');
	}catch(Exception $exc){
		echo "Error usando gee;
		echo "Error getFile ".$exc->getFile();

		echo "Error usando getLine";
		echo "Error getLine ".$exc->getLine();

		echo "Error usando getMessage ;
		echo "Error getMessage ".$exc->getMessage();
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