<?php
class clip {
	public $clip;
	
	public function get_box($clip) {
		$clip = Input::get('textbox');
	}
	
	public function set_new_cookie ($clip) {
		$cookie = Cookie::forever('clip_'.$i, $clip);
		return $this->cookie = $cookie;
	}
	private function find_cookies() {
		strstr(, 'clip_')
	}
	public function find_cookies_main() {
		if (Input::get('clip_1')) {
			find_cookies();
		}
	}
	public function load_cookie($cookie, $is) {
		$cookieJar = Cookie::get('clip_'.$i);
		return '<div class="clip"><p>'.$cookieJar[0].'</p></div>';
	}
}