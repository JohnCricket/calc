<?php

/**
 * This Class Utils is a utility class.
 *
 * Author: John Cricket
 * Web Site: https://projetoverde.cf
 * E-mail: twelveholes@gmail.com
 * Version: 1.0
 * Date: 2019-07-14
 *
 **/

class Utils
{
  private $path;
  private $year;
  private $title;
  private $footer;

  public function path() {
    if($_SERVER['DOCUMENT_ROOT'] == Config::DOC_ROOT) {
      $this->path = 'http://' . $_SERVER['HTTP_HOST'] . '/' . Config::DOMAIN_DIR;
    } else {
      $this->path = Config::DOMAIN_NAME;
    }
    return $this->path;
  }
public function header($var) {
    $this->title = explode("-", $var);
    $this->title[0] = ucfirst($this->title[0]);
    $this->title = implode(" ", $this->title);
    return $this->title;
  }
  public function title() {
    $this->title = Config::DOMAIN_TITLE;
    return $this->title;
  }
  public function subTitle() {
    $this->title = "";
    return $this->title;
  }
  public function cmsTitle() {
    $this->title = Config::CMS_TITLE;
    return $this->title;
  }
  public function subCmsTitle() {
    $this->title = "O CMS de Todo Dia";
    return $this->title;
  }
  public function year() {
    $this->year = date('Y');
    return $this->year;
  }
  public function footer() {
    $this->footer = "<a target=\"_blank\" href=\"https://bamboolinux.com.br\">Bamboolinux</a> &reg; 2019 &#150; " . self::year();
    return $this->footer;
  }
  public function cc() {
    $this->cc = '<i class="fab fa-creative-commons"></i>';
    $creative = ['by', 'nc', 'nd', 'sa'];
    foreach($creative as $icon) {
      $this->cc .= ' <i class="fab fa-creative-commons-' . $icon . '"></i>';
    }
    return $this->cc;
  }
  public function copyleft() {
    $this->copyleft = "&#x1F12F;";
    return $this->copyleft;
  }
  public function redirect($page, $query=null) {
    /* Ushering out our user */
    header('Location: ' . $this->path() . '/' . $query);
    exit;
  }
}
