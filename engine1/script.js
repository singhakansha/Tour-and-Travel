// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Generated by WOW Slider 3.4
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
function ws_blur(p,n,c){var h=jQuery;var b=!p.noCanvas&&!window.opera&&!!document.createElement("canvas").getContext;if(b){try{document.createElement("canvas").getContext("2d").getImageData(0,0,1,1)}catch(m){b=0}}var d;function k(q,e,r){q.css({opacity:0,visibility:"visible"});q.animate({opacity:1},e,"linear",r)}function i(q,e,r){q.animate({opacity:0},e,"linear",r)}var l;this.go=function(e,q){if(l){return -1}l=1;var u=h(n.get(q)),s=h(n.get(e));var t;if(b){if(!d){d='<canvas width="'+c.width()+'" height="'+c.height()+'"/>';d=h(d+d).css({"z-index":8,position:"absolute",width:"100%",height:"100%",left:0,top:0,visibility:"hidden"}).appendTo(c)}t=g(u,30,d.get(0))}if(b&&t){var r=g(s,30,d.get(1));k(t,p.duration/3,function(){c.find("ul").css({visibility:"hidden"});i(t,p.duration/6);k(r,p.duration/6,function(){t.css({visibility:"hidden"});c.find("ul").css({left:-e+"00%"}).css({visibility:"visible"});i(r,p.duration/2,function(){l=0})})})}else{b=0;t=g(u,8);t.fadeIn(p.duration/3,"linear",function(){c.find("ul").css({left:-e+"00%"});t.fadeOut(p.duration/3,"linear",function(){t.remove();l=0})})}return e};function g(v,u,q){var A=(parseInt(v.parent().css("z-index"))||0)+1;if(b){var D=q.getContext("2d");D.drawImage(v.get(0),0,0);if(!j(D,0,0,q.width,q.height,u)){return 0}return h(q)}var E=h("<div></div>").css({position:"absolute","z-index":A,left:0,top:0,width:"100%",height:"100%",display:"none"}).appendTo(c);var C=(Math.sqrt(5)+1)/2;var s=1-C/2;for(var t=0;s*t<u;t++){var w=Math.PI*C*t;var e=(s*t+1);var B=e*Math.cos(w);var z=e*Math.sin(w);h(document.createElement("img")).attr("src",v.attr("src")).css({opacity:1/(t/1.8+1),position:"absolute","z-index":A,left:Math.round(B)+"px",top:Math.round(z)+"px",width:"100%",height:"100%"}).appendTo(E)}return E}var o=[512,512,456,512,328,456,335,512,405,328,271,456,388,335,292,512,454,405,364,328,298,271,496,456,420,388,360,335,312,292,273,512,482,454,428,405,383,364,345,328,312,298,284,271,259,496,475,456,437,420,404,388,374,360,347,335,323,312,302,292,282,273,265,512,497,482,468,454,441,428,417,405,394,383,373,364,354,345,337,328,320,312,305,298,291,284,278,271,265,259,507,496,485,475,465,456,446,437,428,420,412,404,396,388,381,374,367,360,354,347,341,335,329,323,318,312,307,302,297,292,287,282,278,273,269,265,261,512,505,497,489,482,475,468,461,454,447,441,435,428,422,417,411,405,399,394,389,383,378,373,368,364,359,354,350,345,341,337,332,328,324,320,316,312,309,305,301,298,294,291,287,284,281,278,274,271,268,265,262,259,257,507,501,496,491,485,480,475,470,465,460,456,451,446,442,437,433,428,424,420,416,412,408,404,400,396,392,388,385,381,377,374,370,367,363,360,357,354,350,347,344,341,338,335,332,329,326,323,320,318,315,312,310,307,304,302,299,297,294,292,289,287,285,282,280,278,275,273,271,269,267,265,263,261,259];var a=[9,11,12,13,13,14,14,15,15,15,15,16,16,16,16,17,17,17,17,17,17,17,18,18,18,18,18,18,18,18,18,19,19,19,19,19,19,19,19,19,19,19,19,19,19,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24];function j(ah,P,N,q,r,Y){if(isNaN(Y)||Y<1){return}Y|=0;var ac;try{ac=ah.getImageData(P,N,q,r)}catch(ag){console.log("error:unable to access image data: "+ag);return false}var v=ac.data;var W,V,ae,ab,E,H,B,t,u,M,C,O,K,S,X,F,A,G,I,R;var af=Y+Y+1;var T=q<<2;var D=q-1;var aa=r-1;var z=Y+1;var Z=z*(z+1)/2;var Q=new f();var L=Q;for(ae=1;ae<af;ae++){L=L.next=new f();if(ae==z){var w=L}}L.next=Q;var ad=null;var U=null;B=H=0;var J=o[Y];var s=a[Y];for(V=0;V<r;V++){S=X=F=t=u=M=0;C=z*(A=v[H]);O=z*(G=v[H+1]);K=z*(I=v[H+2]);t+=Z*A;u+=Z*G;M+=Z*I;L=Q;for(ae=0;ae<z;ae++){L.r=A;L.g=G;L.b=I;L=L.next}for(ae=1;ae<z;ae++){ab=H+((D<ae?D:ae)<<2);t+=(L.r=(A=v[ab]))*(R=z-ae);u+=(L.g=(G=v[ab+1]))*R;M+=(L.b=(I=v[ab+2]))*R;S+=A;X+=G;F+=I;L=L.next}ad=Q;U=w;for(W=0;W<q;W++){v[H]=(t*J)>>s;v[H+1]=(u*J)>>s;v[H+2]=(M*J)>>s;t-=C;u-=O;M-=K;C-=ad.r;O-=ad.g;K-=ad.b;ab=(B+((ab=W+Y+1)<D?ab:D))<<2;S+=(ad.r=v[ab]);X+=(ad.g=v[ab+1]);F+=(ad.b=v[ab+2]);t+=S;u+=X;M+=F;ad=ad.next;C+=(A=U.r);O+=(G=U.g);K+=(I=U.b);S-=A;X-=G;F-=I;U=U.next;H+=4}B+=q}for(W=0;W<q;W++){X=F=S=u=M=t=0;H=W<<2;C=z*(A=v[H]);O=z*(G=v[H+1]);K=z*(I=v[H+2]);t+=Z*A;u+=Z*G;M+=Z*I;L=Q;for(ae=0;ae<z;ae++){L.r=A;L.g=G;L.b=I;L=L.next}E=q;for(ae=1;ae<=Y;ae++){H=(E+W)<<2;t+=(L.r=(A=v[H]))*(R=z-ae);u+=(L.g=(G=v[H+1]))*R;M+=(L.b=(I=v[H+2]))*R;S+=A;X+=G;F+=I;L=L.next;if(ae<aa){E+=q}}H=W;ad=Q;U=w;for(V=0;V<r;V++){ab=H<<2;v[ab]=(t*J)>>s;v[ab+1]=(u*J)>>s;v[ab+2]=(M*J)>>s;t-=C;u-=O;M-=K;C-=ad.r;O-=ad.g;K-=ad.b;ab=(W+(((ab=V+z)<aa?ab:aa)*q))<<2;t+=(S+=(ad.r=v[ab]));u+=(X+=(ad.g=v[ab+1]));M+=(F+=(ad.b=v[ab+2]));ad=ad.next;C+=(A=U.r);O+=(G=U.g);K+=(I=U.b);S-=A;X-=G;F-=I;U=U.next;H+=q}}ah.putImageData(ac,P,N);return true}function f(){this.r=0;this.g=0;this.b=0;this.a=0;this.next=null}};// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Generated by WOW Slider 3.4
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
jQuery("#wowslider-container1").wowSlider({effect:"blur",prev:"",next:"",duration:20*100,delay:20*100,width:640,height:360,autoPlay:true,stopOnHover:false,loop:false,bullets:0,caption:false,captionEffect:"slide",controls:false,onBeforeStep:0,images:0});