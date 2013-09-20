<?php
$snippets = array();

/* create the plugin object */
$snippets[0] = $modx->newObject('modSnippet');
$snippets[0]->set('id',1);
$snippets[0]->set('name','cgSettings');
$snippets[0]->set('description','Outputs ClientConfig settings using parseChunk.');
$snippets[0]->set('snippet', getSnippetContent($sources['snippets'] . 'cgSettings.snippet.php'));
$snippets[0]->set('category', 0);

return $snippets;
