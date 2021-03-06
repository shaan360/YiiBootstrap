<?php 

/*
 * Class for creating a button
 * 
 * @author Tim Helfensdörfer <tim@visualappeal.de>
 * @version 0.3.2
 * @package bootstrap
 */
class EBootstrapButton {
	/*
	 * Button text
	 */
	public $text;
	
	/*
	 * URL
	 */
	public $url;
	
	/*
	 * Button type
	 *
	 * Possible values: primary|info|success|warning|danger|inverse. Leave empty for default
	 */
	public $type;
	
	/*
	 * Size of the button
	 *
	 * Possible values: large|small|mini. Leave empty for default
	 */
	public $size;
	
	/*
	 * Set true to disable the button
	 */
	public $disabled;
	
	/*
	 * Icon
	 */
	public $icon;
	
	/*
	 * Invert the icon color
	 */
	public $iconWhite;
	
	/*
	 * HTML options
	 */
	public $htmlOptions;
	
	/*
	 * Construct a button element
	 *
	 * http://twitter.github.com/bootstrap/base-css.html#buttons
	 *
	 * @param string $text Label of the button
	 * @param string $url Url
	 * @param string $type primary|info|success|warning|danger|inverse. Leave empty for default
	 * @param string $size large|small|mini. Leave empty for default
	 * @param bool $disabled Default: false
	 * @param string $icon http://twitter.github.com/bootstrap/base-css.html#icons (e.g. 'shopping-cart', 'user', 'ok', etc.)
	 * @param bool $iconWhite Invert the icon color. Default: false
	 * @param array $htmlOptions
	 */
	public function __construct($text, $url = '#', $type = '', $size = '', $disabled = false, $icon = '', $iconWhite = false, $htmlOptions = array()) {
		$this->text = $text;
		$this->url = $url;
		$this->type = $type;
		$this->size = $size;
		$this->disabled = $disabled;
		$this->icon = $icon;
		$this->iconWhite = $iconWhite;
		$this->htmlOptions = $htmlOptions;
		
		$class = array('btn');
		
		EBootstrap::mergeClass($this->htmlOptions, $class);
	}
	
	/*
	 * Outputs the button
	 */
	public function __tostring() {
		$class = array();
		
		if (!empty($this->size))
			$class[] = 'btn-'.$this->size;
		
		if (!empty($this->type))
			$class[] = 'btn-'.$this->type;
		
		if ($this->disabled)
			$class[] = 'disabled';
		
		if (!empty($this->icon))
			$this->text = EBootstrap::icon($this->icon, $this->iconWhite).' '.$this->text;
		
		EBootstrap::mergeClass($this->htmlOptions, $class);
		
		return EBootstrap::link($this->text, $this->url, $this->htmlOptions)."\n";
	}
}

?>