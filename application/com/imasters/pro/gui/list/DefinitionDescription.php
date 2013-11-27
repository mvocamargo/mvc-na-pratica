<?php
/**
 * Classes e objetos de listagem da marcação HTML
 * @package	com.imasters.pro.gui.list
 */

require_once 'com/imasters/pro/gui/HTMLComposite.php';

/**
 * Implementação do elemento DD
 * @author	João Batista Neto
 */
class DefinitionDescription extends HTMLComposite {
	/**
	 * @return	string
	 * @see		HTMLComposite::nodeName()
	 */
	protected function nodeName() {
		return 'dd';
	}
}