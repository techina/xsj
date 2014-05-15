<?php
class Page{
	private $total;
	private $listRows;
	private $limit;
	private $uri;
	private $pageNum;
	private $page;
	private $config=array('head'=>'条','prev'=>'上页','next'=>'下页','first'=>'首页','last'=>'尾页');
	private $listNum=10;

	function __construct($total,$query='',$listRows=30,$ord=true){
		$this->total=$total;
		$this->listRows=$listRows;
		$this->uri=$this->getUri($query);
		$this->pageNum=ceil($this->total/$this->listRows);
		if (!empty($_GET['page'])) {
			$page=$_GET['page'];
		}else{
			if ($ord)
			$page=1;
			else
			$page=$this->pageNum;
		}

		if ($total>0) {
			if(preg_match('/\D/', $page)){
				$this->page=1;
			}else $this->page=$page;
		}else $this->page=0;
		$this->limit='LIMIT '.$this->setLimit();
	}

	//设置分页信息,可以连贯操作
	function set($param,$value){
		if(array_key_exists($param, $this->config)){
			$this->config[$param]=$value;
		}
		return $this;
	}


	//获取内部属性值
	function __get($args){
		if ($args=='limit' ||$args=='page')
		return $this->$args;
		else return null;
	}

	//输出分页
	function fpage(){
		
		/*$html[0]='&nbsp;共<b>'.$this->total.'</b>'.$this->config['head'].'&nbsp;';
		$html[1]='&nbsp;本页<b>'.$this->disnum().'</b> 条&nbsp;';
		$html[2]='&nbsp;本页从<b>'.$this->start().'_'.$this->end().'</b> 条&nbsp;';
		$html[3]='&nbsp;<b>'.$this->page/$this->pageNum.'</b> 页&nbsp;';
		$html[4]=$this->firstprev();
		$html[5]=$this->pageList();
		$html[6]=$this->nextlast();
		$html[7]=$this->goPage();*/

		$fpage='<div class="t_pagelink"><p class="page">';
		
		$fpage.=$this->firstprev();
		$fpage.=$this->pageList();
		$fpage.=$this->nextlast();
		$fpage.=$this->goPage();
		//$fpage.='<span class="cur">共<b style="color:#000"> '.$this->total.' </b>'.$this->config['head'].'</span>';
		$fpage.='</p></div>';
		return $fpage;
	}

	//
	private function setLimit(){
		if ($this->page>0)
		return ($this->page-1)*$this->listRows.','.$this->listRows;
		else return 0;
	}

	private function getUri($query){
		$request_uri=$_SERVER['REQUEST_URI'];
		$url=strstr($request_uri,'?')?$request_uri:$request_uri.'?';
		if (is_array($query)){
			$url.=http_build_query($query);
		}else if ($query!='')
		$url.='&'.trim($query,'?&');
		$arr=parse_url($url);
		if (isset($arr['query'])){
			parse_str($arr['query'],$arrs);	
			unset($arr['query']);
			unset($arrs['page']);
			$url=$arr['path'].'?'.http_build_query($arrs);
		}
		if (strstr($url, '?')) {
			if (substr($url, -1)!='?')
			$url=$url.'&';
		}else $url=$url.'?';
		return $url;
	}

	private function start(){
		if ($this->total==0)
		return 0;
		else
		return ($this->page-1)*$this->listRows+1;
	}

	private function end(){
		return min($this->page*$this->listRows,$this->total);
	}

	private function firstprev(){
		if ($this->page>1) {
			$str='<a href="'.$this->uri.'page='.($this->page-1).'" class="prev">'.$this->config["prev"].'</a>';
			return $str;
		}
	}

	private function pageList(){
		$linkPage='';
		$inum=floor($this->listNum/2);
		for ($i = $inum; $i >=1; $i--) {
			$page=$this->page-$i;
			if ($page>=1)
			$linkPage.='<a href="'.$this->uri.'page='.$page.'" class="cur">'.$page.'</a>';
		}
		if ($this->pageNum>=1){
			$linkPage.='<span class="cur">'.$this->page.'</span>';
		}

		for ($j = 1; $j < $inum; $j++) {
			$page=$this->page+$j;
			if ($page<=$this->pageNum) {
				$linkPage.='<a href="'.$this->uri.'page='.$page.'" class="cur">'.$page.'</a>';
			}else break;
		}
		return $linkPage;
	}

	private function nextlast(){
		if ($this->page!=$this->pageNum) {
			$str='<a href="'.$this->uri.'page='.($this->page+1).'" class="next">'.$this->config["next"].'</a>';
			return $str;
		}
	}


	private function goPage(){
		if ($this->pageNum>1) {
			$str='&nbsp;<input style="width:30px; height:26px !important; height:27px; border:1px solid #cccccc;line-height:26px;text-align:center" type="text" omkeydown="javascript:if(event.keyCode==13){var page=(this.value>'.
			$this->pageNum.')?'.$this->pageNum.':this.value;location=\''.$this->uri.'page=\'+page+\'\' }" value="'.$this->page.'">'.
			'<input style="cursor:pointer; width:30px; height:30px; border:1px solid #cccccc;line-height:26px;text-align:center" type="button" value="GO" onclick="javascript:var page=(this.previousSibling.value>'.$this->pageNum.
			')?'.$this->pageNum.':this.previousSibling.value;location=\''.$this->uri.'page=\'+page+\'\'">&nbsp;';
			return $str;
		}
	}

	private function disnum(){
		if ($this->total>0) {
			return $this->end()-$this->start()+1;
		}
		else return 0;
	}
}










?>