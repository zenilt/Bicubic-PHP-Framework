<?php

/**
 * Bicubic PHP Framework
 *
 * @author     Juan Rodríguez-Covili <juan@bicubic.cl>
 * @copyright  2011 Bicubic Technology - http://www.bicubic.cl
 * @license    MIT
 * @framework  2.2
 */
class HomeApplication extends Application {

    /**
     * El panel principal
     * @param array $config el array de la configuracion
     * @param array $lang el array del lenguaje
     */
    function __construct($config, $lang) {
        parent::__construct($config, $lang, null, "home");
    }

    /**
     * Ejecuta la aplicación
     */
    public function execute() {
        parent::execute();
        //Navigation
        $this->navigation = $this->getUrlParam($this->config['param_navigation'], "letters");
        switch ($this->navigation) {
            case "hello" : {
                    require_once('nav/HelloNavigation.php');
                    $navigation = new HelloNavigation($this);
                    $navigation->hello();
                    break;
                }
            default : {
                    $this->redirect("home", "hello");
                    break;
                }
        }
    }

    /**
     * Setea la vista dentro del template
     * @param string $navigationFolder la carpeta de la vista
     * @param string $navigationFile el nombre de los archivos de la vista
     * @param string $title el titulo de la vista
     */
    public function setMainTemplate($navigationFolder, $navigationFile, $title="") {
        parent::setMainTemplate($navigationFolder, $navigationFile, $title);

        $this->setHTMLVariableTemplate('HELLO-TEMPLATE', $this->lang['text_helloworld']);
        $this->setHTMLVariableTemplate('LINK-LOGIN', $this->getSecureAppUrl("login", "login"));
    }

}

?>