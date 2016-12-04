<?php
class Home extends MW_Controller {
	
	public function _init() {
		
		$this->load->model('advert_model','advert');
	}
 	
	 /**
	 * 移动端首页幻灯片
	 */
	public function advert() {
		
		
	}
}