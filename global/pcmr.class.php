<?php
define("PCMR_HEADER",1);
define("PCMR_NAVIGATION",2);
define("PCMR_FOOTER",4);
// content.php
class pcmr 
{
	private $header = false;
	private $navigation = false;
	private $sidebar = false;
	private $footer = false;

	private function getSidebarContent ($sidebarContentRequest)
	{
		if (file_exists('./global/sidebar'.$sidebarContentRequest.'.php'))
		{
			return file_get_contents('./global/sidebar'.$sidebarContentRequest.'.php');
		}
		else
		{
			return false;
		}
	}

	public function __construct($bits, $sidebar)
	{
		if ($bits && PCMR_HEADER == PCMR_HEADER)
			$this->header = true;

		if ($bits && PCMR_NAVIGATION == PCMR_NAVIGATION)
			$this->navigation = true;

		$this->sidebar = $sidebar;

		if ($bits && PCMR_FOOTER == PCMR_FOOTER)
			$this->footer = true;
	}

	public function displayContent($content)
	{
		if ($this->header)
		{
			echo file_get_contents('./global/header.php');
		}
		if ($this->navigation)
		{
			echo file_get_contents('./global/navigation.php');
		}
		if ($this->sidebar !== false)
		{
			if ($side = $this->getSidebarContent($this->sidebar))
			{
				echo $side;
			}
		}
		echo '<div class="content" id="summary">';
		echo $content;
		echo '</div>';
		if ($this->footer)
		{
			echo file_get_contents('./global/footer.php');
		}
	}
}