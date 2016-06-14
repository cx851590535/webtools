/**
 * Created by ThinkPad on 2016/4/5.
 */
var lineObjOffsetTop = 6;

/*Sfdump = window.Sfdump || (function (doc) { var refStyle = doc.createElement('style'), rxEsc = /([.*+?^${}()|\[\]\/\\])/g, idRx = /\bsf-dump-\d+-ref[012]\w+\b/, keyHint = 0 <= navigator.platform.toUpperCase().indexOf('MAC') ? 'Cmd' : 'Ctrl', addEventListener = function (e, n, cb) { e.addEventListener(n, cb, false); }; (doc.documentElement.firstElementChild || doc.documentElement.children[0]).appendChild(refStyle); if (!doc.addEventListener) { addEventListener = function (element, eventName, callback) { element.attachEvent('on' + eventName, function (e) { e.preventDefault = function () {e.returnValue = false;}; e.target = e.srcElement; callback(e); }); }; } function toggle(a, recursive) { var s = a.nextSibling || {}, oldClass = s.className, arrow, newClass; if ('sf-dump-compact' == oldClass) { arrow = '&#9660;'; newClass = 'sf-dump-expanded'; } else if ('sf-dump-expanded' == oldClass) { arrow = '&#9654;'; newClass = 'sf-dump-compact'; } else { return false; } a.lastChild.innerHTML = arrow; s.className = newClass; if (recursive) { try { a = s.querySelectorAll('.'+oldClass); for (s = 0; s < a.length; ++s) { if (a[s].className !== newClass) { a[s].className = newClass; a[s].previousSibling.lastChild.innerHTML = arrow; } } } catch (e) { } } return true; }; return function (root) { root = doc.getElementById(root); function a(e, f) { addEventListener(root, e, function (e) { if ('A' == e.target.tagName) { f(e.target, e); } else if ('A' == e.target.parentNode.tagName) { f(e.target.parentNode, e); } }); }; function isCtrlKey(e) { return e.ctrlKey || e.metaKey; } addEventListener(root, 'mouseover', function (e) { if ('' != refStyle.innerHTML) { refStyle.innerHTML = ''; } }); a('mouseover', function (a) { if (a = idRx.exec(a.className)) { try { refStyle.innerHTML = 'pre.sf-dump .'+a[0]+'{background-color: #B729D9; color: #FFF !important; border-radius: 2px}'; } catch (e) { } } }); a('click', function (a, e) { if (/\bsf-dump-toggle\b/.test(a.className)) { e.preventDefault(); if (!toggle(a, isCtrlKey(e))) { var r = doc.getElementById(a.getAttribute('href').substr(1)), s = r.previousSibling, f = r.parentNode, t = a.parentNode; t.replaceChild(r, a); f.replaceChild(a, s); t.insertBefore(s, r); f = f.firstChild.nodeValue.match(indentRx); t = t.firstChild.nodeValue.match(indentRx); if (f && t && f[0] !== t[0]) { r.innerHTML = r.innerHTML.replace(new RegExp('^'+f[0].replace(rxEsc, '\\$1'), 'mg'), t[0]); } if ('sf-dump-compact' == r.className) { toggle(s, isCtrlKey(e)); } } if (doc.getSelection) { try { doc.getSelection().removeAllRanges(); } catch (e) { doc.getSelection().empty(); } } else { doc.selection.empty(); } } }); var indentRx = new RegExp('^('+(root.getAttribute('data-indent-pad') || ' ').replace(rxEsc, '\\$1')+')+', 'm'), elt = root.getElementsByTagName('A'), len = elt.length, i = 0, t = []; while (i < len) t.push(elt[i++]); elt = root.getElementsByTagName('SAMP'); len = elt.length; i = 0; while (i < len) t.push(elt[i++]); root = t; len = t.length; i = t = 0; while (i < len) { elt = root[i]; if ("SAMP" == elt.tagName) { elt.className = "sf-dump-expanded"; a = elt.previousSibling || {}; if ('A' != a.tagName) { a = doc.createElement('A'); a.className = 'sf-dump-ref'; elt.parentNode.insertBefore(a, elt); } else { a.innerHTML += ' '; } a.title = (a.title ? a.title+'\n[' : '[')+keyHint+'+click] Expand all children'; a.innerHTML += '<span>&#9660;</span>'; a.className += ' sf-dump-toggle'; if ('sf-dump' != elt.parentNode.className) { toggle(a); } } else if ("sf-dump-ref" == elt.className && (a = elt.getAttribute('href'))) { a = a.substr(1); elt.className += ' '+a; if (/[\[{]$/.test(elt.previousSibling.nodeValue)) { a = a != elt.nextSibling.id && doc.getElementById(a); try { t = a.nextSibling; elt.appendChild(a); t.parentNode.insertBefore(a, t); if (/^[@#]/.test(elt.innerHTML)) { elt.innerHTML += ' <span>&#9654;</span>'; } else { elt.innerHTML = '<span>&#9654;</span>'; elt.className = 'sf-dump-ref'; } elt.className += ' sf-dump-toggle'; } catch (e) { if ('&' == elt.innerHTML.charAt(0)) { elt.innerHTML = '&#8230;'; elt.className = 'sf-dump-ref'; } } } } ++i; } }; })(document);*/


function createTextAreaWithLines(id){
    var el = document.createElement('DIV');
    var ta = document.getElementById(id);
    ta.parentNode.insertBefore(el,ta);
    el.appendChild(ta);
    el.className='textAreaWithLines';
    el.style.width = (ta.offsetWidth + 30) + 'px';
    ta.style.position = 'absolute';
    ta.style.left = '30px';
    el.style.height = (ta.offsetHeight + 2) + 'px';
    el.style.overflow='hidden';
    el.style.position = 'relative';
    el.style.width = (ta.offsetWidth + 30) + 'px';
    var lineObj = document.createElement('DIV');
    lineObj.style.position = 'absolute';
    lineObj.style.top = lineObjOffsetTop + 'px';
    lineObj.style.left = '0px';
    lineObj.style.width = '27px';
    el.insertBefore(lineObj,ta);
    lineObj.style.textAlign = 'right';
    lineObj.className='lineObj';
    var string = '';
    for(var no=1;no<parseInt($("#"+id).height()/12);no++){
        if(string.length>0)string = string + '<br>';
        string = string + no;
    }
    ta.onkeydown = function() { positionLineObj(lineObj,ta); };
    ta.onmousedown = function() { positionLineObj(lineObj,ta); };
    ta.onscroll = function() { positionLineObj(lineObj,ta); };
    ta.onblur = function() { positionLineObj(lineObj,ta); };
    ta.onfocus = function() { positionLineObj(lineObj,ta); };
    ta.onmouseover = function() { positionLineObj(lineObj,ta); };
    lineObj.innerHTML = string;
}
function positionLineObj(obj,ta)
{
    obj.style.top = (ta.scrollTop * -1 + lineObjOffsetTop) + 'px';
}