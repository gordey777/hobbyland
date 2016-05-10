
(function (ph){
try{
var A = self['' || 'AdriverCounter'], 
	a = A(ph);
a.reply = {
ph:ph,
rnd:'934046',
bt:62,
sid:210076,
pz:0,
sz:'%2fproducts%2ftelevizor%2dsamsung%2dultra%2dhd%2due55ju7500u%2d10007781',
bn:0,
sliceid:0,
netid:0,
ntype:0,
tns:0,
pass:'',
adid:0,
bid:2864425,
geoid:100,
cgihref:'//ad.adriver.ru/cgi-bin/click.cgi?sid=210076&ad=0&bid=2864425&bt=62&bn=0&pz=0&xpid=CtvbkixvqGPLKenIEw0HUcyNmKe__-H_2&ref=http:%2f%2fwww.mvideo.ru%2fproducts%2ftelevizor%2dsamsung%2dultra%2dhd%2due55ju7500u%2d10007781&custom=10%3D10007781%3B154%3DCityCZ_975',
target:'_blank',
width:'0',
height:'0',
alt:'AdRiver',
mirror:A.httplize('//edp1.adriver.ru'), 
comp0:'0/script.js',
custom:{"10":"10007781","154":"CityCZ_975"},
cid:'AE3CysR7_UeUXT0ryJ_l85Q',
uid:42972414441,
xpid:'CtvbkixvqGPLKenIEw0HUcyNmKe__-H_2'
}
var r = a.reply;

r.comppath = r.mirror + '/images/0002864/0002864425/' + (/^0\//.test(r.comp0) ? '0/' : '');
r.comp0 = r.comp0.replace(/^0\//,'');
if (r.comp0 == "script.js" && r.adid){
	A.defaultMirror = r.mirror; 
	A.loadScript(r.comppath + r.comp0 + '?v' + ph) 
}

({
	t:10,
	init:function(){
		var b = document.body, t = this, i;
		if (b){
			i = document.createElement('iframe');
			i.setAttribute('src', A.httplize('//content.a'+'driver.ru/banners/0002186/0002186173/0/1.html?0&0&0&0&934046&0&42972414441&100&217.20.176.89&counter')); 
			with(i.style){width = height = '10px'; position = 'absolute'; top = left = '-10000px'}
			b.appendChild(i);
		}else{if(this.t--){setTimeout(function(){t.init()},100);}}
	}
}.init());
}catch(e){} 
}('1'));
