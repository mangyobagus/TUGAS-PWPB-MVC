<?php
public function __construct() {
    echo "Web MVC Siap Dijalankan!";
  }


  public function __construct() {
    $url = $this->parseURL();
    var_dump($url);
    }
    public function parseURL() {
    if(isset($_GET[‘url’])) {
    $url = $_GET[‘url’];return $url;
    }
    }

    public function parseURL() {
      if(isset($_GET[‘url’])) {
      $url = rtrim($_GET[‘url’],”/”);
      $url = filter_var($url, FILTER_SANITIZE_URL);
      $url = explode(‘/’, $url);
      return $url;
      }
      }
?>


