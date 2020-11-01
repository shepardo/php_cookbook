<?php
/*
7.24 Program: whereis
Although tools such as phpDocumentor provide quite detailed information about an
entire series of classes, it can be useful to get a quick dump that lists all the functions
and methods defined in a list of files.
The program in Example 7-3 loops through a list of files, includes them, and then uses
the Reflection classes to gather information about them. Once the master list is compiled,
the functions and methods are sorted alphabetically and printed out.
*/
if ($argc < 2) {
  print "$argv[0]: classes1.php [, ...]\n";
  exit;
}
// Include the files
foreach (array_slice($argv, 1) as $filename) {
  include_once $filename;
}

// Get all the method and function information
// Start with the classes
$methods = array();
foreach (get_declared_classes() as $class) {
  $r = new ReflectionClass($class);
  // Eliminate built-in classes
  if ($r->isUserDefined()) {
    foreach ($r->getMethods() as $method) {
      // Eliminate inherited methods
      if ($method->getDeclaringClass()->getName() == $class) {
        $signature = "$class::" . $method->getName();
        $methods[$signature] = $method;
      }
    }
  }
}

// Then add the functions
$functions = array();
$defined_functions = get_defined_functions();
foreach ($defined_functions['user'] as $function) {
  $functions[$function] = new ReflectionFunction($function);
}
// Sort methods alphabetically by class
function sort_methods($a, $b) {
  list ($a_class, $a_method) = explode('::', $a);
  list ($b_class, $b_method) = explode('::', $b);
  if ($cmp = strcasecmp($a_class, $b_class)) {
    return $cmp;
  }
  return strcasecmp($a_method, $b_method);
}
uksort($methods, 'sort_methods');
// Sort functions alphabetically
// This is less complicated, but don't forget to
// remove the method sorting function from the list
unset($functions['sort_methods']);
// Sort 'em
ksort($functions);
// Print out information
foreach (array_merge($functions, $methods) as $name => $reflect) {
  $file = $reflect->getFileName();
  $line = $reflect->getStartLine();
  printf ("%-25s | %-40s | %6d\n", "$name()", $file, $line);
}

?>