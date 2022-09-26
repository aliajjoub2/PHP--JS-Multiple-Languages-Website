<?php 
function make_language(){
	if(isset($_POST['ar'])){
		$_SESSION['arabic']=true;
		unset($_SESSION['english']);
		unset($_SESSION['deutsch']);
	}
	
	

	if(isset($_POST['en'])){
		$_SESSION['english']=true;
	
		unset($_SESSION['arabic']);
        unset($_SESSION['deutsch']);
		
	}
	
	if(isset($_POST['de'])){
		$_SESSION['deutsch']=true;
		unset($_SESSION['arabic']);
		unset($_SESSION['english']);
		
	}
	


}

function lang_path(){

	if(!isset($_SESSION['english']) && !isset($_SESSION['deutsch']) && !isset($_SESSION['arabic'])){
		$lang_website_user= substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);
		if($lang_website_user=='en'){
		$_SESSION['english']=true;
			}
			elseif($lang_website_user=='ar'){
				$_SESSION['arabic']=true;
					}
					elseif($lang_website_user=='de'){
						$_SESSION['deutsch']=true;
							}
							else{
								$_SESSION['english']=true;

							}
	}

	if(isset($_SESSION['arabic'])){
		$lang="arabic";
	}
	if(isset($_SESSION['english'])){
		$lang="english";
	}
	if(isset($_SESSION['deutsch'])){
		$lang="deutsch";
	}
	$path="languages/".$lang.".php";
	echo $path;
	return $path;
	
}