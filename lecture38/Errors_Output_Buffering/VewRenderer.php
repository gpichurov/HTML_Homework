<?php

define('DS', DIRECTORY_SEPARATOR);

class ViewRenderer
{
	protected static $templatesPath = 'templates';
	
	public static function setTemplatesPath($path)
	{
		static::$templatesPath = $path;
	}
	
	public static function render($view, $data, $layout = null) 
	{
		$content = static::renderView($view, $data);
		
		if ($layout) {
			$data['content'] = $content;
			$content = static::renderView($layout, $data);
		}
		
		return $content;
	}
	
	/**
	 * 
	 * @param unknown $view
	 * @param unknown $data = [ 'title' => 'San Frnacisko']
	 * @throws Exception
	 */
	
	protected static function renderView($view, $data)
	{
		$file = static::getTemplatePath($view);
		if (!is_file($file)) {
			throw new Exception(sprintf('View %s does not exist', $file));
		}
		ob_start();
		
		extract($data);
		
		require $file;
		
		return ob_get_clean();
	}
	
	
	protected static function getTemplatePath($view)
	{
		return  __DIR__ . DS . self::$templatesPath . DS . $view . '.php';
	}
}