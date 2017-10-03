<?php

switch ($options[xPDOTransport::PACKAGE_ACTION]) {
    case xPDOTransport::ACTION_INSTALL:
    case xPDOTransport::ACTION_UPGRADE:

        $isContextAware = $modx->getOption('clientconfig.context_aware', null, false);
        $globalChecked = $isContextAware ? '' : 'checked="checked"';
        $contextChecked = $isContextAware ? 'checked="checked"' : '';

        return <<<HTML
<p>ClientConfig 2.0 comes in two different flavours: global, and multi context mode. </p>
<br>
<ul style="list-style: disc; padding-left: 2em; padding-bottom: 1em;">
    <li>In global mode, your users can manage settings that <b>affect the entire website</b>.</li>
    <li>In multi-context mode, a context selector is added to the top right of the configuration screen, allowing the user to set <b>different values for each independent context</b>.</li>
</ul>

<p>Which mode would you like to use?</p>

<label>
    <input type="radio" name="clientconfig_context_aware" value="0" {$globalChecked}>
    Global mode
</label>
<label>
    <input type="radio" name="clientconfig_context_aware" value="1" {$contextChecked}>
    Multi-context mode
</label>

<p>You can change the mode later through the <code>clientconfig.context_aware</code> system setting.</p>

HTML;
    break;
}

return '';
