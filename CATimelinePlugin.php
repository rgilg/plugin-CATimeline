<?php

class CATimelinePlugin extends Omeka_Plugin_AbstractPlugin
{

   protected $_hooks = array('public_head');

   public function setUp()
    {
        add_shortcode('timeline', array('CATimelinePlugin', 'timeline'));
        parent::setUp();
    }

    public function hookPublicHead($args)
    {
		queue_js_file('timelinejs');
		queue_css_file('timelinejs');
		queue_css_file('timeline');
    }


    /**
     * Build HTML for the timeline
     * @param array $args
     * @param Zend_View $view
     * @return string HTML to display
    */
  public static function timeline($args, $view)
    {
		 $configs = array('timeline' => array());
		 if(isset($args['data'])) {
            $configs['timeline']['data'] = $args['data']	;
			$html = $view->partial('timeline.php', array('configs' => $configs));
			return $html;
		} else {

			echo "No data file.";
		}

    }

}
