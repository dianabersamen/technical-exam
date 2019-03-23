<?php

require_once('preview.php');

$preview = new formPreview();

$result = $preview->previewForm();

echo $result;