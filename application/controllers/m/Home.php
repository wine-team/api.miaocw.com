<?php
class Home extends MW_Controller {
	
	public function _init() {
		
		$this->load->model('advert_model','advert');
	}
 	
	 /**
	 * 移动端首页幻灯片
	 */
	public function advert() {
		
		$result = $this->advert->findBySourceState(4);
		if ($result->num_rows()<=0) {
			$this->jsonMessage('暂无幻灯片');
		}
		$advert = $result->result();
		$this->jsonMessage('',$advert);
	}
}