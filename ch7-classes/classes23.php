<?php
/*
7.23 Instantiating an Object Dynamically
Problem
You want to instantiate an object, but you don’t know the name of the class until your
code is executed. For example, you want to localize your site by creating an object belonging
to a specific language. However, until the page is requested, you don’t know
which language to select.
*/
class language {
  private $lang;
  public function __construct($lang) {
    $this->lang = $lang;
  }
  public function dump() {
    print("I am language class for $this->lang\n");
  }
}
$_REQUEST['language'] = 'en_US';
$language = $_REQUEST['language'];
$valid_langs = array('en_US' => 'US English',
  'en_UK' => 'British English',
  'es_US' => 'US Spanish',
  'fr_CA' => 'Canadian French');
if (isset($valid_langs[$language])) {
  print("The language $language translates to {$valid_langs[$language]}\n");
  $lang = new language($language);
  $lang->dump();
}

?>