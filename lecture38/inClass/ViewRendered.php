<?php

define('DS', DIRECTORY_SEPARATOR);

class ViewRendered
{
    const TEMPLATE_PATH = 'templates';

    public static function render($view, $data, $layout=null)
    {
        $content = static::renderView($view, $data);
        return $content;
    }

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
        return __DIR__ . DS . self::TEMPLATE_PATH . DS . $view . '.php';
    }
}