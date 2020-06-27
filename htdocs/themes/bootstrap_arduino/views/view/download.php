<?php
header('Content-type: text/x-c++src');
header('Content-disposition: attachment; filename=' . $title);
echo htmlspecialchars_decode($raw);
