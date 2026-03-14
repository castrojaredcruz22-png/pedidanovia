<?php
// puedes usar PHP aquí si quieres en el futuro
?>

<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Nuestra Historia ❤️</title>

<link rel="stylesheet" href="Styles.css/styles.css">

</head>

<body>

<audio id="musica" loop>
<source src="Audio/mirrors.mp3" type="Audio/mpeg">
</audio>

<section onclick="iniciarMusica()">

<h1>Nuestra Historia ❤️</h1>

<p class="historia">

Todo comenzó de una manera sencilla… como amigos.
Sin darnos cuenta, cada conversación, cada risa y cada momento compartido
fueron creando algo especial entre nosotros.

Hubo un momento difícil en mi vida, y tú estuviste ahí.
Tu apoyo, tu forma de escuchar y tu manera de estar presente
hicieron que empezara a verte de una forma diferente.

Poco a poco, día tras día,
ese cariño fue creciendo hasta convertirse en algo mucho más profundo.

Y hoy, después de todo lo que hemos vivido,
solo hay una cosa que quiero preguntarte.

</p>

<a href="#fotos">
<button class="si">Continuar</button>
</a>

</section>

<section id="fotos">

<h1>Nuestros Momentos 📸</h1>

<div class="galeria">

<div class="foto">
<img src="IMG/Foto1.jpeg">
<div class="mensaje">Te amo, los besos tuyos son y siempre van a ser los mejores</div>
</div>

<div class="foto">
<img src="IMG/Foto2.jpeg">
<div class="mensaje">Aquí entendí que contigo quiero vivir muchos momentos más.</div>
</div>

<div class="foto">
<img src="IMG/Foto3.jpeg">
<div class="mensaje">TAL PARA CUAL NOS VEMOS HERMOSOOSSS</div>
</div>

<div class="foto">
<img src="IMG/Foto4.jpeg">
<div class="mensaje">Tu perfecto ser en este instante fue una de las razones por las que me enamoré más de ti</div>
</div>

<div class="foto">
<img src="IMG/Foto5.jpeg">
<div class="mensaje">Un momento simple… pero contigo todo se vuelve inolvidable.</div>
</div>

<div class="foto">
<img src="IMG/Foto6.jpeg">
<div class="mensaje">No es solo una foto… es un pedacito de nuestra historia.</div>
</div>

<div class="foto">
<img src="IMG/Foto7.jpeg">
<div class="mensaje">Un momento… un beso… y un recuerdo que quiero repetir toda la vida.</div>
</div>

<div class="foto">
<img src="IMG/Foto8.jpeg">
<div class="mensaje">Aquí empezó algo que jamás imaginé que sería tan especial</div>
</div>

</div>

<a href="#mensaje">
<button class="si">Hay algo más...</button>
</a>

</section>

<section id="mensaje">

<h1>Antes de preguntarte algo...</h1>

<p class="mensaje-especial">

Quiero empezar dándote las gracias, porque desde el primer momento me miraste diferente… y también me hiciste sentir diferente.

Llegaste a mi vida de una manera sencilla, pero con el tiempo te convertiste en alguien demasiado especial para mí. Me encantas en todos los sentidos, en tu forma de ser, en tu forma de hablar, en tu manera de estar presente.

Sin darme cuenta, comenzaste a transformar mi vida de maneras que nunca imaginé. Incluso me has acercado más a Dios, y eso es algo que valoro profundamente. A tu lado he aprendido muchas cosas y, por primera vez, he sentido emociones muy distintas a todo lo que había vivido antes.

Contigo entendí que el amor puede ser tranquilo, sincero y lleno de propósito.

Por eso he tomado una de las decisiones más importantes de mi vida: quererte a mi lado. Quiero que seas esa mujer con la que despierte cada mañana, la que camine conmigo en cada etapa de la vida, la que algún día me regale hijos y con quien pueda construir un hogar lleno de amor.

Solo puedo decirte algo con todo mi corazón: te amo.
Y deseo que lo que estamos empezando hoy dure para siempre… para toda la eternidad.

Hay historias que empiezan por casualidad, Y si todo esto que hemos construido significa lo mismo para ti que para mí… entonces quiero preguntarte algo que podría cambiar nuestra historia para siempre.

</p>

<a href="#pregunta">
<button class="si">Continuar</button>
</a>

</section>

<section id="pregunta">

<h1>¿Quieres ser mi novia? ❤️</h1>

<button class="si" onclick="acepto()">Sí</button>
<button class="no" id="no">No</button>

<div class="final" id="final">
Oficialmente has tenido el privilegio  
de comenzar a llamarte mi novia ❤️
</div>

</section>

<script src="Script.js/script.js"></script>

</body>
</html>