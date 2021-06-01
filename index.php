<?php
include_once('./includes/head-calc.php');

$_add = $calc->mm_add(23, 51);

$_sub = $calc->mm_sub(35, 19);

$_mul = $calc->mm_mul(47, 28);

$_div = $calc->mm_div(27657749, 47);

$_mod = $calc->mm_mod(2769, 64);

$_format = $calc->mm_div(27657749, 47, 3);

$_fact = $calc->mm_fact(5);

$_powers = $calc->mm_powers(3, 5);

$_square_root = $calc->mm_square_root(450);

$_cubic_root = $calc->mm_cubic_root(450);

$_eu_format = $calc->mm_format($_div, 2, ',', '.');

$_pcent = $calc->mm_pcent(250, 2.5);

$_add_pcent = $calc->mm_add_pcent(250, 2.5);

$_sub_pcent = $calc->mm_sub_pcent(256.25, 2.5);

$_juro_composto = $calc->mm_format($calc->mm_juro_composto(3000, 3, 4), 2, ',', '.');

$_juro_valor = $calc->mm_format($calc->mm_juro_valor(3000, 3, 4, 2), 2, ',', '.');

$_log = $calc->mm_log(81, 3);

$_fibo = $calc->mm_fibonacci(20);

?>
<body>
  <!-- starts wrapper -->
  <div class="wrapper">
    <h1>Cálculos com a Classe MyMath()</h1>
    <div class="main">
      <p>Esta é uma classe que escrevi para ter mais controle sobre os pequenos cálculos que, vez ou outra, preciso fazer em meus scripts.</p>
      <p>O PHP em sua versão 7.4 não fornece mais de default a classe <strong class="code">bcmath</strong>, com todas suas funcionalidades. Uma pena!</p>
      <p>Assim, decidi escrever minha própria classe para, desta forma, assumir total controle sobre assuntos como paginação, preços de imóveis e muito mais.</p>
      <p>Sendo assim, criei minha pequena classe chamada <strong class="code">MyMath</strong>. É muito simples, por enquanto tem somente dezesseis funções:</p>
      <dl>
        <dt><strong>mm_format($number, $dec, $del, $gd)</strong>:</dt>
        <dd>
          <ul>
            <li><strong>$number</strong>: o número que queremos formatar,</li>
            <li><strong>$dec</strong>: o número de casas decimais que queremos,</li>
            <li><strong>$del</strong>: o delimitador que queremos usar para separar os decimais,</li>
            <li><strong>$gd</strong>: o delimitador que queremos usar para separar os grupos de dezenas, centenas e milhares.</li>
          </ul>
        </dd>
        <dt><strong>mm_add($a, $b, $d=null)</strong>:</dt>
        <dd>
          <ul>
            <li><strong>$a</strong> é a primeira parcela,</li>
            <li><strong>$b</strong> é a segunda parcela e</li>
            <li><strong>$d</strong> é o eventual número de decimais que queremos que apareça, se não houver decimais, em seu lugar será escrito o zero.</li>
          </ul>
        </dd>
        <dt><strong>mm_sub($a, $b, $d=null)</strong>:</dt>
        <dd>
          <ul>
            <li><strong>$a</strong> é o minuendo,</li>
            <li><strong>$b</strong> é o subtraendo e</li>
            <li><strong>$d</strong> é o eventual número de decimais que queremos que apareça, se não houver decimais, em seu lugar será escrito o zero.</li>
          </ul>
        </dd>
        <dt><strong>mm_mul($a, $b, $d=null)</strong>:</dt>
        <dd>
          <ul>
            <li><strong>$a</strong> é o primeiro fator,</li>
            <li><strong>$b</strong> é o segundo fator e</li>
            <li><strong>$d</strong> é o eventual número de decimais que queremos que apareça, se não houver decimais, em seu lugar será escrito o zero.</li>
          </ul>
        </dd>
        <dt><strong>mm_div($a, $b, $d=null)</strong>:</dt>
        <dd>
          <ul>
            <li><strong>$a</strong> é o dividendo,</li>
            <li><strong>$b</strong> é o divisor e</li>
            <li><strong>$d</strong> é o eventual número de decimais que queremos que apareça, se não houver decimais, em seu lugar será escrito o zero.</li>
          </ul>
        </dd>
        <dt><strong>mm_mod($a, $b, $d=null)</strong>:</dt>
        <dd>
          <ul>
          <li><strong>$a</strong> é o dividendo,</li>
            <li><strong>$b</strong> é o divisor e</li>
            <li><strong>$d</strong> é o eventual número de decimais que queremos que apareça, se não houver decimais, em seu lugar será escrito o zero.</li>
          </ul>
        </dd>
        <dt><strong>mm_fact($a)</strong>:</dt>
        <dd>
          <ul>
            <li><strong>$a</strong> é o número de que queremos o factorial</li>
          </ul>
        </dd>
        <dt><strong>mm_powers($a, $n, $d=null)</strong></dt>
        <dd>
          <ul>
            <li><strong>$a</strong> é a base,</li>
            <li><strong>$b</strong> é o esponente e</li>
            <li><strong>$d</strong> é o eventual número de decimais que queremos que apareça, se não houver decimais, em seu lugar será escrito o zero.</li>
          </ul>
        </dd>
        <dt><strong>mm_log($a, $b, $d=null)</strong></dt>
        <dd>
          <ul>
            <li><strong>$a</strong> é a base do logaritmo</li>
            <li><strong>$b</strong> é o argumento do logaritmo</li>
            <li><strong>$d</strong> é o eventual número de decimais que queremos que apareça, se não houver decimais, em seu lugar será escrito o zero.</li>
            <li>A função retorna o <em>log<sub>a</sub>(b)</em></li>
          </ul>
        </dd>
        <dt><strong>mm_square_root($a, $d=null)</strong></dt>
        <dd>
          <ul>
            <li><strong>$a</strong> é o radicando</li>
            <li><strong>$d</strong> é o eventual número de decimais que queremos que apareça, se não houver decimais, em seu lugar será escrito o zero.</li>
            <li>A função retorna <em>&#8730;<sub>$a</sub></em></li>
          </ul>
        </dd>
        <dt><strong>mm_pcent($a, $b)</strong></dt>
        <dd>
          <ul>
            <li><strong>$a</strong> é o valor do qual queremos saber o valor da porcentagem.</li>
            <li><strong>$b</strong> é o valor da porcentageme e pode ser <strong class="code">float</strong></li>
          </ul>
        </dd>
        <dt><strong>mm_add_pcent($a, $b)</strong></dt>
        <dd>
          <ul>
            <li><strong>$a</strong> é o valor do qual queremos saber o valor da porcentagem que adicionaremos ao montante total.</li>
            <li><strong>$b</strong> é o valor da porcentagem a ser adicionada e pode ser <strong class="code">float</strong></li>
          </ul>
        </dd>
        <dt><strong>mm_sub_pcent($a, $b)</strong></dt>
        <dd>
          <ul>
            <li><strong>$a</strong> é o valor do qual queremos saber o valor da porcentagem que subtrairemos do montante total.</li>
            <li><strong>$b</strong> é o valor da porcentagem a ser subtraída e pode ser <strong class="code">float</strong></li>
          </ul>
        </dd>
        <dt><strong>mm_juro_composto($cap, $jur, $time)</strong></dt>
        <dd>
          <ul>
            <li><strong>$cap</strong> é o montante inicial de que queremos saber quanto se tornará em uma simulação da qual decidimos a porcentagem do juro aplicado e o tempo de aplicação</li>
            <li><strong>$jur</strong> é a porcentagem do juro composto aplicado ao montante.</li>
            <li><strong>$time</strong> é o tempo de aplicação do montante inicial.</li>
          </ul>
        </dd>
        <dt><strong>mm_juro_valor($cap, $jur, $time)</strong></dt>
        <dd>
          <ul>
            <li><strong>$cap</strong> é o montante inicial do qual queremos saber quanto será o lucro em uma simulação da qual decidimos a porcentagem do juro aplicado e o tempo de aplicação</li>
            <li><strong>$jur</strong> é a porcentagem do juro composto aplicado ao montante.</li>
            <li><strong>$time</strong> é o tempo de aplicação do montante inicial.</li>
          </ul>
        </dd>
        <dt><strong>mm_fibonacci($num)</strong></dt>
        <dd>
          <ul>
            <li><strong>$num</strong> é o número de elementos que se quer que apareçam na Sequência de Fibonacci.</li>
          </ul>
        </dd>
      </dl>
    </div>
    <div class="main">
      <div class="calc">
        <p> <em>// Inicializo a Classe </em> <pre>$calc = new MyMath();</pre></p>
      </div>
      <div class="calc">
        <p> <em>// Crio uma soma </em> <pre>$_add = $calc->mm_add(23, 51);</pre> Soma de 23 + 51 = <?php echo $_add; ?></p>
      </div>
      <div class="calc">
        <p> <em>// Performo uma subtração </em> <pre>$_sub = $calc->mm_sub(35, 19);</pre> Subtração de 35 - 19 = <?php echo $_sub; ?></p>
      </div>
      <div class="calc">
        <p> <em>// Executo uma multiplicação </em> <pre>$_mul = $calc->mm_mul(47, 28);</pre> Multiplicação de 47 * 28 = <?php echo $_mul; ?></p>
      </div>
      <div class="calc">
        <p> <em>// Obtenho o módulo </em> <pre>$_mod = $calc->mm_mod(2769, 64);</pre> Módulo de 2769 % 64 = <?php echo $_mod; ?></p>
      </div>
      <div class="calc">
        <p> <em>// Calculo uma divisão </em> <pre>$_div = $calc->mm_div(27657749, 47);</pre> Divisão de 27657749 / 47 = <?php echo $_div; ?></p>
      </div>
      <div class="calc">
        <p> <em>// Formato o número e mostro somente três casas decimais </em> <pre>$_format = $calc->mm_div(27657749, 47, 3);</pre> A mesma divisão, porém com o resultado com três casas decimais: <?php echo $_format; ?></p>
      </div>
      <div class="calc">
        <p> <pre>$_format = $calc->mm_format($_div, 2, ',', '.');</pre> A mesma divisão, porém com o resultado com duas casas decimais, no formato europeu de número: <?php echo $_eu_format; ?></p>
      </div>
      <div class="calc">
        <p> <em>// Calculo o factorial de um número</em> <pre>$_fact = $calc->mm_fact(5);</pre> <strong>5!</strong> = <?php echo $_fact; ?></p>
      </div>
      <div class="calc">
        <p> <em>// Calculo a potência de um número</em> <pre>$_powers = $calc->mm_powers(3, 5);</pre> 3<sup>5</sup> = <?php echo $_powers; ?></p>
      </div>
      <div class="calc">
        <p> <em>// Extraio a raiz quadrada de um número</em> <pre>$_square_root = $calc->mm_square_root(450);</pre> &#8730;450 = <?php echo $_square_root; ?></p>
      </div>
      <div class="calc">
        <p> <em>// Extraio a raiz cúbica de um número</em> <pre>$_cubic_root = $calc->mm_cubic_root(450);</pre> &#8730;450 = <?php echo $_cubic_root; ?></p>
      </div>
      <div class="calc">
        <p> <em>// Calcula o logaritmo de um número, dada sua base</em> <pre>$_log = $calc->log(81, 3);</pre> <em>log<sub>3</sub>(81)</em> = <?php echo $_log; ?></p>
      </div>
      <div class="calc">
        <p> <em>// Obtenho a porcentagem de um valor em dinheiro</em> <pre>$_pcent = $calc->mm_pcent(250, 2.5);</pre> 2.5% de 250 = <?php echo $_pcent; ?></p>
      </div>
      <div class="calc">
        <p> <em>// Obtenho a porcentagem de um valor em dinheiro e a somo ao mesmo</em> <pre>$_add_pcent = $calc->mm_add_pcent(250, 2.5);</pre> 250 + 2.5% = <?php echo $_add_pcent; ?></p>
      </div>
      <div class="calc">
        <p> <em>// Obtenho a quantia original em dinheiro, sem a porcentagem que foi acrescentada</em> <pre>$_sub_pcent = $calc->mm_sub_pcent(256.25, 2.5);</pre> 256.25 - 2.5% = <?php echo $_sub_pcent; ?></p>
      </div>
      <div class="calc">
        <p> <em>// Calculo o juro composto de R$3000,00 aplicados por 4 anos ao 3%</em> <pre>$_juro_composto = $calc->mm_format($calc->mm_juro_composto(3000, 3, 4), 2, ',', '.');</pre> R$3.000,00 aplicados por 4 anos ao juro de 3% ao ano: <?php echo $_juro_composto; ?></p>
      </div>
      <div class="calc">
        <p> <em>// Calculo o valor do juro composto de R$3000,00 aplicados por 4 anos ao 3%</em> <pre>$_juro_valor = $calc->mm_format($calc->mm_juro_valor(3000, 3, 4), 2, ',', '.');</pre> O valor do juro sobre R$3.000,00 aplicados por 4 anos ao juro de 3% ao ano: <?php echo $_juro_valor; ?></p>
      </div>
      <div class="calc">
        <p> <em>// Calculo os valores da Sequência de Fibonacci. Neste caso $num = 20.</em> <pre>$_fibonacci = $calc->mm_fibonacci(20);</pre> Os primeiros <strong>20</strong> números da Sequência de Fibonacci.</p>
        <p><?php echo $_fibo; ?></p>
      </div>
    </div>
  </div>
<?php
include('./includes/footer-calc.php');
?>