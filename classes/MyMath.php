<?php

/**
 *
 * Small Class to:
 * 1) perform arithmetical operations
 *  - Sum
 *  - Subtraction
 *  - Multiplication
 *  - Division
 *  - Module
 *  - Factorial
 *  - Exponenciação
 *  - Raiz quadrada
 *  - Logaritmo
 * 2) Format numbers flexibly
 * 3) Calculate and add percentages
 * 4) Sequência de Fibonacci
 *
 **/

class MyMath
{
  // Attributes
  private $format;
  private $res;
  private $pcent;
  private $powers;

  // Formatting Number of decimals and place delimiters
  public function mm_format($number, $dec, $dd=null, $gd=null) {
    $this->format = number_format($number, $dec, $dd, $gd);
    return $this->format;
  }
  // Algoritmo
  public function mm_add($a, $b, $d=null) {
    if($d != null) {
      $this->res = number_format(( $a + $b ), $d);
    } else {
      $this->res = $a + $b;
    }
    return $this->res;
  }
  public function mm_sub($a, $b, $d=null) {
    if($d != null) {
      $this->res = number_format(( $a - $b ), $d);
    } else {
      $this->res = $a - $b;
    }
    return $this->res;
  }
  public function mm_mul($a, $b, $d=null) {
    if($d != null) {
      $this->res = number_format(( $a * $b ), $d);
    } else {
      $this->res = $a * $b;
    }
    return $this->res;
  }
  public function mm_div($a, $b, $d=null) {
    if($d != null) {
      $this->res = number_format(($a / $b), $d);
    } else {
      $this->res = $a / $b;
    }
    return $this->res;
  }
  public function mm_mod($a, $b, $d=null) {
    if($d != null) {
      $this->res = number_format(( $a % $b ), $d);
    } else {
      $this->res = $a % $b;
    }
    return $this->res;
  }
  // Get the factorial of a number
  public function mm_fact($a) {
    $count = $a;
    $fact = 1;
    while ($count > 0) {
      $fact *= $count;
      $count -= 1;
    }
    return $fact;
  }
  // Get the powers of a number, i.e. "exponentiation" of a number
  public function mm_powers($a, $n, $d=null) {
    if($d != null) {
      $this->res = number_format(( $a ** $n ), $d);
    } else {
      $this->res = $a ** $n;
    }
    return $this->res;
  }
  // Get the square root of a number
  public function mm_square_root($a, $d=null) {
    if($d != null) {
      $this->res = number_format($a ** (1/2), $d);
    } else {
      $this->res = $a ** (1/2);
    }
    return $this->res;
  }
  // Get the cubic root of a number
  public function mm_cubic_root($a, $d=null) {
    if($d != null) {
      $this->res = number_format($a ** (1/3), $d);
    } else {
      $this->res = $a ** (1/3);
    }
    return $this->res;
  }

  // Calcula o logaritmo de $a com base $b, os dígitos decimais ($d) podem ser formatados
  public function mm_log($a, $b, $d=null) {
    if($d != null) {
      $this->res = number_format(log($a, $b), $d);
    } else {
      $this->res = log($a, $b);
    }
    return $this->res;
  }

  // Calcula a porcentagem $b de um número $a
  public function mm_pcent($a, $b) {
    $this->pcent = self::mm_mul($a, (self::mm_div($b, 100)));
    return $this->pcent;
  }

  // Calcula a porcentagem $b de um número $a e soma $a + $b
  public function mm_add_pcent($a, $b) {
    $this->pcent = self::mm_add($a, self::mm_mul($a, (self::mm_div($b, 100))));
    return $this->pcent;
  }

  // Calcula o número $a sem a porcentagem $b deste mesmo número
  public function mm_sub_pcent($a, $b) {
    $this->pcent = self::mm_mul(self::mm_div($a, (self::mm_add(100, $b))), 100);
    return $this->pcent;
  }
  // Formula to calculate composite interest rate
  // M = C * (1 + n/100)p
  public function mm_juro_composto($cap, $jur, $time) {
    $this->res = self::mm_mul($cap, self::mm_powers(self::mm_add(1, self::mm_div($jur, 100)), $time));
    return $this->res;
  }
  // Formula to calculate the amount of composite interest rate
  // M = C * (1 + n/100)p - C
  public function mm_juro_valor($cap, $jur, $time) {
    $this->res = self::mm_sub(self::mm_juro_composto($cap, $jur, $time), $cap);
    return $this->res;
  }

  public function mm_fibonacci($num) {
  /**
   * Função que retorna a Sequência de Fibonacci até o limite decidido por um input do usuário.
   *  $num = input('Diga de quantos números você quer que tenha a sequência: ')
   * 
   * Args:
   *  $num ([int]): input dado pelo usuário para decidir até onde vai a sequência
   * 
   * Returns:
   *  $fibonacci [list]: A sequência de Fibonacci em uma lista.
   * 
   */
    // os primeiros dois termos em um array
    $_fibonacci = '';
    $fibonacci = [0, 1];
    // inicio meu while loop
    for($count = 2; $count < $num; $count += 1) {
        // viro o array e adiciono seus 2 primeiros termos, que são os últimos adicionados
        $fibo = array_reverse($fibonacci);
        $res = self::mm_add($fibo[0], $fibo[1]);
        // acrescento mais um elemento ao array, o resultado da soma anterior
        array_push($fibonacci, $res);
        $fibo = array_reverse($fibo);
        // incremento o meu contador
    }
    // retorno a sequência
    foreach($fibonacci as $k => $v) {
      if($k < array_key_last($fibonacci)) {
        $_fibonacci .= $v . ', ';
      } else {
        $_fibonacci .= $v;
      }
    }
    return $_fibonacci;
  }
}