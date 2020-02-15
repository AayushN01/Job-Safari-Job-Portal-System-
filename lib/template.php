<?php class Template{
	//path to template
	protected $template;
	// vars passed in
	protected $vars = array();

	//constructor
	public function __construct($template){
	$this->template = $template;
	}

	public function __get($key){  //get template variables
		return $this->vars[$key];
	}

	public function __set($key, $value){
		$this->vars[$key] = $value;
		}

		public function __toString(){
			extract($this->vars);//instead of template->name==$name can be used
			chdir(dirname($this->template));
			ob_start();//start buffer

			include basename($this->template);

			return ob_get_clean();
		}
}