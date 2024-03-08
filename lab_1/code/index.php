<?php
echo "Task №1 (Access by link)";

$very_bad_unclear_name = "15 chicken wings";

$order = &$very_bad_unclear_name;
$order .= " and a large soda";

echo "\nYour order is: $very_bad_unclear_name.";
