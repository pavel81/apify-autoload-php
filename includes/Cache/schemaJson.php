$validator = new \Opis\JsonSchema\Validator();

$schema = json_decode($schemaJson);
if ($schema === null) {
    error_log('[Apify][Schema] Invalid schema JSON');
    return false;
}

$result = $validator->validate($data, $schema);

if ($result->isValid()) {
    return true;
}

$error = $result->error();

if ($error !== null) {
    $formatter = new \Opis\JsonSchema\Errors\ErrorFormatter();
    $errors = $formatter->format($error);

    error_log('[Apify][Schema] ' . wp_json_encode($errors));
}

return false;