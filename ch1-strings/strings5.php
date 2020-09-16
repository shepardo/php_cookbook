<?php
$divClass = 'class1';
$ulClass = 'class2';
$listItem = 'myitem';
$html = <<< END
<div class="$divClass">
<ul class="$ulClass">
<li>
END
. $listItem . '</li></div>';
print $html;
print nl2br('\n');
print nl2br('divclass is $divClass\n');
print nl2br("divclass is $divClass\n");

$js = <<<'__JS__'
$.ajax({
'url': '/api/getStock',
'data': {
'ticker': 'LNKD'
},
'success': function( data ) {
$( "#stock-price" ).html( "<strong>$" + data + "</strong>" );
}
});

__JS__;
print $js;
