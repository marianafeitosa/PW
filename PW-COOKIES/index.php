<?php
include 'Cookies.php';
$usuarioAtual = getUsuarioCookie();
$usuarioLogado = ($usuarioAtual !== null);
?>
<!DOCTYPE html>
<html lang="pt">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/favicon.png" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="cookies.css"/>
</head>
<body>
        <div class="sseccao-de-cookies" id="sseccao-de-cookies">
            <div  class="aviso-de-cookie">
            <img src="imagens/oculostaylor.png">
                <div class="ck-tt">
                    <h3>Aviso de Cookies</h3>
                </div>            
                    <form method="post" action="index.php">
                <label for="usuario">Usuário:</label>
                <input type="text" id="usuario" name="usuario" value="<?= $usuarioAtual ?>">
                <?php if ($usuarioLogado) : ?>
                    <button class="btn-button"type="submit" name="definirCookie">Editar</button>
                <?php else : ?>
                    <button class="btn-button" type="submit" name="definirCookie">Definir</button>
                <?php endif; ?>
            </form>
            <?php if ($usuarioLogado) : ?>
                <p>Bem-vindo de volta, <?= $usuarioAtual ?></p>
            <?php else : ?>
                <p>Bem-vindo(a)</p>
            <?php endif; ?>
                <a  href="javascript:void(0)" onclick="aceiteicookies()">Aceitar Cookies</a>
                <form method="post" action="index.php">
                <?php if ($usuarioLogado) : ?>
                <?php endif; ?>
            </form>
            </div>
        </div>
  
    <h1> <strong>ERAS TOUR</strong> </h1>
	
	<h2>Reputation</h2>
		<img class="UN" src="imagens/taylor1.jpg">	
		<p>Reputation é o sexto álbum de estúdio da artista musical estadunidense Taylor Swift, lançado em 10 de novembro de 2017, através da gravadora Big Machine.Após seu quinto álbum de estúdio 1989 (2014), Swift se envolveu em disputas altamente divulgadas com várias celebridades e tornou-se constantemente alvo de escrutínio em tablóides. Ela, portanto, isolou-se da imprensa e da mídia social, onde mantinha uma presença ativa, e passou a desenvolver Reputation como um esforço para renovar seu estado de espírito, visando abordar duas temáticas principais; um baseado nas fofocas excessivas que a cercam, visto no tema declarativo do álbum, e o outro sobre como encontrar o amor em meio aos eventos tumultuosos.

	<h2>Lover</h2>
		<img class="UN" src="imagens/taylor2.png">	
		<p>Lover é o sétimo álbum de estúdio da artista musical estadunidense Taylor Swift. O seu lançamento ocorreu em 23 de agosto de 2019, através da Republic Records. Após o lançamento de seu álbum anterior Reputation (2017), descrito como um "mecanismo de defesa" para lidar com a experiência tumultuosa de sua vida pública, Swift finalizou seu contrato de doze anos com a Big Machine Records. Enquanto excursionava pelo mundo com a Reputation Stadium Tour (2018), a artista pôde experimentar o amor de seus fãs o que a ajudou a recuperar sua saúde mental após as controvérsias que levaram a Reputation. Com base nisso, ela começou a conceituar um álbum que apresentasse seu lado pessoal e vulnerável, conectando-a com seu público e mostrando seus pontos fortes como artista, além de canalizar sua vida pessoal reajustada e a libertação de sua percepção pública. 

	<h2>Folklore</h2>
		<img class="UN" src="imagens/taylor3.jpg">	
		<p>Folklore é o oitavo álbum de estúdio da artista musical estadunidense Taylor Swift, lançado em 24 de julho de 2020 através da editora discográfica Republic Records. A concepção de Folklore se deu no contexto da pandemia de COVID-19, quando Swift foi obrigada a entrar em quarentena, findando por abortar os planos de embarcar em uma turnê mundial para promover seu disco anterior, Lover (2019), bem recebido comercial e criticamente. Nesse período, a artista idealizou Folklore como "uma coleção de canções e histórias que fluíam como um fluxo de consciência de sua imaginação", dedicando-se a trabalhar virtualmente com os produtores musicais Aaron Dessner e Jack Antonoff. Swift gravou os vocais do álbum em um estúdio embutido na residência dela em Los Angeles, enquanto Dessner e Antonoff trabalharam em Hudson Valley e Nova Iorque, respectivamente.

	<h2>Evermore</h2>
		<img class="UN" src="imagens/taylor4.jpg">	
		<p>Evermore é o nono álbum de estúdio da cantora e compositora estadunidense Taylor Swift. O seu lançamento ocorreu em 11 de dezembro de 2020, através da gravadora Republic Records, menos de cinco meses após Folklore, seu oitavo álbum de estúdio. Descrito por Swift como uma ramificação da "floresta folclórica"—uma direção escapista e inspirada em cottagecore que ela idealizou pela primeira vez com Folklore durante a pandemia de COVID-19, Evermore foi um projeto espontâneo da extensa colaboração de Swift com seu colaborador do Folklore, Aaron Dessner, gravado principalmente em seu estúdio Long Pond no Hudson Valley.
		
	<h2>Midnights</h2>
		<img class="UN" src="imagens/taylor5.jpg">	
		<p>Midnights é o décimo álbum de estúdio da cantora e compositora estadunidense Taylor Swift, lançado em 21 de outubro de 2022 através da Republic Records. O álbum foi anunciado durante o MTV Video Music Awards de 2022, marcando o primeiro lançamento inédito de Swift após seus álbuns de folk alternativo Folklore e Evermore (2020), e as duas primeiras regravações dos álbuns Fearless (Taylor's Version) e Red (Taylor's Version) (2021). Midnights é um álbum conceitual que explora reflexões noturnas inspirada pelas "noites de insônia" de Swift e aborda temas como ansiedade, insegurança, autocrítica, autoconsciência, insônia e autoconfiança, utilizando letras confessionais e ao mesmo tempo enigmáticas. O disco foi desenvolvido e gravado entre 2021 e 2022 e a artista trabalhou com o seu colaborador de longa data, Jack Antonoff.
  
  </div>

  
  <script src="cookies.js"></script>

</body>
</html>