<?php $_dl0="\061.8.0.\060"; if (!class_exists("\113oolSc\162\151pting",FALSE)) { class koolscripting { static function start() { ob_start(); return ""; } static function end() { $_dO0=ob_get_clean(); $_dl1=""; $_dO1=new domdocument(); $_dO1->loadxml($_dO0); $_dl2=$_dO1->documentElement; $id=$_dl2->getattribute("id"); $name=$_dl2->nodeName; $id=($id == "") ? "\144ump": $id; if (class_exists($name,FALSE)) { eval ("\044".$id."\040= new ".$name."('".$id."\047);"); $$id->loadxml($_dl2); $_dl1=$$id->render(); } else { $_dl1.=$_dO0; } return $_dl1; } } } function _dO2($_dl3,$_dO3,$_dl4) { return str_replace($_dl3,$_dO3,$_dl4); } function _dO4() { $_dl5=_dO2("\134","\057",strtolower($_SERVER["\123\103RIPT_N\101\115E"])); $_dl5=_dO2(strrchr($_dl5,"\057"),"",$_dl5); $_dO5=_dO2("\134","/",realpath("\056")); $_dl6=_dO2($_dl5,"",strtolower($_dO5)); return $_dl6; } function _dO6($_dl7) { return md5($_dl7); } class _di10 { static $_di10="\1730}<div \151\144='\173\151\144}' c\154\141\163s='\173\163tyle\175\113CB'\040\163tyl\145\075'z-in\144\145x:400\060\073width\072\173wid\164\150};'><d\151\166>\173c\157\155bo}\173\142\157x}</d\151\166>\1731}\074\144iv i\144\075'\173i\144\175_item\164\145mpla\164\145' sty\154\145='di\163\160lay:n\157\156e'>\173\151\164emte\155\160late}\074\057div>\074\057div\076\1732}"; } function _dO7() { header("\103\157ntent-\164\171pe: t\145\170t/jav\141\163cript"); } function _dl8() { echo "var _di\117\061=0;"; } function _dO8() { return exit (); } function _dl9() { return _di10::$_di10; } function _dO9( &$_dla) { for ($_dOa=0; $_dOa<3; $_dOa ++) $_dla=_dO2("\173".$_dOa."\175","",$_dla); return TRUE; } if ( isset ($_GET[_dO6("\152s")])) { _dO7(); ?> function _dO(_do){return (_do!=null);}if (!_dO(_dY)){var _dY=0; }function _dy(){_dY++; return _dY; }function _dI(_di){return document.getElementById(_di); }function _dA(_da,_dE){var _de=document.createElement(_da); _dE.appendChild(_de); return _de; }function _dU(_do,_du){if (!_dO(_du))_du=1; for (var i=0; i<_du; i++)_do=_do.firstChild; return _do; }function _dZ(_do,_du){if (!_dO(_du))_du=1; for (var i=0; i<_du; i++)_do=_do.nextSibling; return _do; }function _dz(_do,_du){if (!_dO(_du))_du=1; for (var i=0; i<_du; i++)_do=_do.parentNode; return _do; }function _dX(_do,_dx){_do.style.height=_dx+"px"; }function _dW(_do,_dx){_do.style.width=_dx+"px"; }function _dw(_dV,_dv,_dT){_dT=_dO(_dT)?_dT:document.body; var _dt=_dT.getElementsByTagName(_dV); var _dS=new Array(); for (var i=0; i<_dt.length; i++)if (_dt[i].className.indexOf(_dv)>=0){_dS.push(_dt[i]); }return _dS; }function _ds(){return (typeof(_diO1)=="undefined");}function _dR(_do,_dx){_do.style.display=(_dx)?"block": "none"; }function _dr(_do){return (_do.style.display!="none"); }function _dQ(_do){return _do.className; }function _dq(_do,_dx){_do.className=_dx; }function _dP(_dp,_dN,_dn){_dq(_dn,_dQ(_dn).replace(_dp,_dN)); }function _dM(_do,_dv){if (_do.className.indexOf(_dv)<0){var _dm=_do.className.split(" "); _dm.push(_dv); _do.className=_dm.join(" "); }}function _dL(_do,_dv){if (_do.className.indexOf(_dv)>-1){_dP(_dv,"",_do);var _dm=_do.className.split(" "); _do.className=_dm.join(" "); }}function _dl(_dK,_dk,_dJ,_dj){if (_dK.addEventListener){_dK.addEventListener(_dk,_dJ,_dj); return true; }else if (_dK.attachEvent){if (_dj){return false; }else {var _dH= function (){_dJ.apply(_dK,[window.event]); };if (!_dK["ref"+_dk])_dK["ref"+_dk]=[]; else {for (var _dh in _dK["ref"+_dk]){if (_dK["ref"+_dk][_dh]._dJ === _dJ)return false; }}var _dG=_dK.attachEvent("on"+_dk,_dH); if (_dG)_dK["ref"+_dk].push( {_dJ:_dJ,_dH:_dH } ); return _dG; }}else {return false; }} ; function _dg(_dF){var a=_dF.attributes,i,_df,_dD; if (a){_df=a.length; for (i=0; i<_df; i+=1){_dD=a[i].name; if (typeof _dF[_dD] === "function"){_dF[_dD]=null; }}}a=_dF.childNodes; if (a){_df=a.length; for (i=0; i<_df; i+=1){_dg(_dF.childNodes[i]); }}}function _dd(_dn){var _dC=""; for (var _dc in _dn){switch (typeof(_dn[_dc])){case "string":if (_dO(_dn.length))_dC+="'"+_dn[_dc]+"',"; else _dC+="'"+_dc+"':'"+_dn[_dc]+"',"; break; case "number":if (_dO(_dn.length))_dC+=_dn[_dc]+","; else _dC+="'"+_dc+"':"+_dn[_dc]+","; break; case "object":if (_dO(_dn.length))_dC+=_dd(_dn[_dc])+","; else _dC+="'"+_dc+"':"+_dd(_dn[_dc])+","; break; }}if (_dC.length>0)_dC=_dC.substring(0,_dC.length-1); _dC=(_dO(_dn.length))?"["+_dC+"]": "{"+_dC+"}"; if (_dC=="{}")_dC="null"; return _dC; }function _dB(_db){var _do0=navigator.appVersion.match(/MSIE/); var _dO0=navigator.userAgent; var _dl0=_dO0.match(/firefox/i); var _di0=_dl0 && (_dO0.match(/firefox\/2./i) || _dO0.match(/firefox\/1./i)); var _dI0=_dl0 && !_di0; var _do1=new Object(); _do1.x=0; _do1.y=0; if (_db !== null){_do1.x=_db.offsetLeft; _do1.y=_db.offsetTop; var offsetParent=_db.offsetParent; var parentNode=_db.parentNode; var borderWidth=null; while (offsetParent!=null){_do1.x+=offsetParent.offsetLeft; _do1.y+=offsetParent.offsetTop; var _dO1=offsetParent.tagName.toLowerCase(); if ((_do0 && _dO1!="table") || (_dI0 && _dO1=="td")){borderWidth=_dl1(offsetParent); _do1.x+=borderWidth.left; _do1.y+=borderWidth.top; }if (offsetParent!=document.body && offsetParent!=document.documentElement){_do1.x-=offsetParent.scrollLeft; _do1.y-=offsetParent.scrollTop; }if (!_do0){while (offsetParent!=parentNode && parentNode !== null){_do1.x-=parentNode.scrollLeft; _do1.y-=parentNode.scrollTop; if (_di0){borderWidth=_dl1(parentNode); _do1.x+=borderWidth.left; _do1.y+=borderWidth.top; }parentNode=parentNode.parentNode; }}parentNode=offsetParent.parentNode; offsetParent=offsetParent.offsetParent; }}return _do1; }function _di1(_dn){return _dB(_dn).x; var _dI1=0; if (_dn.offsetParent)while (1){_dI1+=_dn.offsetLeft; if (!_dn.offsetParent)break; _dn=_dn.offsetParent; }else if (_dn.x)_dI1+=_dn.x; return _dI1; }function _do2(_dn){return _dB(_dn).y; var _dO2=0; if (_dn.offsetParent)while (1){_dO2+=_dn.offsetTop; if (!_dn.offsetParent)break; _dn=_dn.offsetParent; }else if (_dn.y)_dO2+=_dn.y; return _dO2; }function _dl2(_dp,_di2){return _di2.indexOf(_dp); }function _dI2(_do3){if (_do3.preventDefault)_do3.preventDefault(); else event.returnValue= false; return false; }function KoolComboboxItem(_di){ this._di=_di; this.id=_di; }KoolComboboxItem.prototype= {_dO3:function (){return eval(this._di.substring(0,_dl2(".",this._di))); } ,getData:function (){var _dl3=eval("__="+_dU(_dI(this._di)).value); for (var i in _dl3){if (typeof _dl3[i]!="function"){try {_dl3[i]=decodeURIComponent(_dl3[i]); }catch (_di3){_dl3[i]=unescape(_dl3[i]); }}}return _dl3; } ,enable:function (_dI3){var _do4=_dI(this._di); if (_ds())return; (_dI3)?_dL(_do4,"kcbDisable"):_dM(_do4,"kcbDisable"); } ,isEnabled:function (){return _dl2("kcbDisable",_dQ(_dI(this._di)))<0; } ,isSelected:function (){return _dl2("kcbSelected",_dQ(_dI(this._di)))>-1; } ,setVisible:function (_dO4){if (_ds())return; _dR(_dI(this._di),_dO4); } ,select:function (){var _dl4=this._dO3(); if (_ds())return; if (!_dl4._di4("OnBeforeSelect", { "Item": this } ))return; var _do4=_dI(this._di); _dl4._dI4(); _dM(_do4,"kcbSelected"); var _do5=_dI(_dl4._di+"_selectedText"); var _dO5=_dI(_dl4._di+"_selectedValue"); var _dl5=this.getData(); _do5.value=_dl5["text"]; _dO5.value=_dl5["value"]; _dl4._di4("OnSelect", { "Item": this } ); } ,unselect:function (){var _dl4=this._dO3(); if (!_dl4._di4("OnBeforeUnselect", { "Item": this } ))return; var _do4=_dI(this._di); _dl4._dI4(); _dL(_do4,"kcbSelected"); var _do5=_dI(_dl4._di+"_selectedText"); var _dO5=_dI(_dl4._di+"_selectedValue"); _do5.value=""; _dO5.value=""; _dl4._di4("OnUnselect", { "Item": this } ); } ,_di5:function (_do3){if (this.isEnabled()){ this.select(); var _dl4=this._dO3(); var _dI5=_dl4._do6; _dl4.close(); _dl4._do6=_dI5; }else {var _do5=_dI(this._dO3()._di+"_selectedText"); _do5.focus(); }} ,_dO6:function (_do3){ this._dO3()._dl6(); if (this.isEnabled()){var _do4=_dI(this._di); _dM(_do4,"kcbSelectFocus"); }} ,_di6:function (_do3){var _do4=_dI(this._di); _dL(_do4,"kcbSelectFocus"); }};function KoolCombobox(_di,_dI6,_do7,_dO7,_dl7,_di7,_do6,_dI7,_do8,_dO8){ this._di=_di; this.id=_di; this._dI6=_dI6; this._do7=(_do7=="auto")?-1:parseInt(_do7); this._dO7=(_dO7=="auto")?-1:parseInt(_dO7); this._dl7=(_dl7=="auto")?-1:parseInt(_dl7); this._di7=(_di7=="auto")?-1:parseInt(_di7); this._do6=_do6; this._dI7=_dI7; this._do8=_do8; this._dO8=(_dO8!="")?_dO8:null; this._dl8=new Array(); this._di8(); }KoolCombobox.prototype= {_di8:function (){var _dI8=_dI(this._di); var _do9=_dU(_dI8,2); var _dO9=_dZ(_do9); _dl(_do9,"mouseover",_dl9, false); _dl(_do9,"mouseout",_di9, false); _dl(_do9,"mousedown",_dI9, false); _dl(_do9,"mouseup",_doa, false); _dl(_do9,"click",_dOa, false); _dl(document,"mousedown",eval("___=function(){if ("+this._di+".isOpening())"+this._di+".close()}"), false); _dl(_dO9,"mousedown",_dla, false); this._dia(1); var _do5=_dI(this._di+"_selectedText"); _dl(_do5,"keydown",_dIa, false); _dl(_do5,"focus",_dob, false); var _dOb=navigator.userAgent.toLowerCase(); var _dlb=((_dl2("msie",_dOb)!=-1) && (_dl2("opera",_dOb)==-1)); if (_dlb){var _dib=_do5.value; _do5.value=""; if (_do5.offsetWidth>0){_dW(_do5,_do5.offsetWidth); }_do5.value=_dib; }var _dIb=_dw("div","kcbItemBox",_dI(this._di))[0]; var _doc=_dw("li","kcbItem",_dIb); var _do5=_dI(this._di+"_selectedText"); var _dO5=_dI(this._di+"_selectedValue"); _do5.value=""; _dO5.value=""; for (var i=0; i<_doc.length; i++){_doc[i].id=this._di+".i"+_dy(); if (_dl2("Selected",_dQ(_doc[i]))>0){_dl5=(new KoolComboboxItem(_doc[i].id)).getData(); _do5.value=_dl5["text"]; _dO5.value=_dl5["value"]; }}} ,_dia:function (_dOc){var _dIb=_dw("div","kcbItemBox",_dI(this._di))[0]; var _doc=_dw("li","kcbItem",_dIb); var _dlc=(_dOc)?_dl:_dic; for (var i=0; i<_doc.length; i++){_dlc(_doc[i],"click",_dIc, false); _dlc(_doc[i],"mouseover",_dod, false); _dlc(_doc[i],"mouseout",_dOd, false); }} ,_dI4:function (){var _dIb=_dw("div","kcbItemBox",_dI(this._di))[0]; var _doc=_dw("li","kcbItem",_dIb); for (var i=0; i<_doc.length; i++){_dL(_doc[i],"kcbSelected"); }} ,getItemIds:function (){var _dIb=_dw("div","kcbItemBox",_dI(this._di))[0]; var _doc=_dw("li","kcbItem",_dIb); var _dld=new Array(); if (_ds())return _dld; for (var i=0; i<_doc.length; i++){_dld.push(_doc[i].id); }return _dld; } ,getItem:function (_did){return new KoolComboboxItem(_did); } ,getText:function (){return _dI(this._di+"_selectedText").value; } ,getValue:function (){return _dI(this._di+"_selectedValue").value; } ,open:function (){if (!this._di4("OnBeforeOpen", {} ))return; var _dId=_dU(_dI(this._di)); var _dl4=_dU(_dId); var _doe=_dZ(_dU(_dId)); var _dOe=_dZ(_doe); var _dle=(this._do7>0)?this._do7:_dl4.offsetWidth; _dW(_doe,_dle); var _die=_dw("div","kcbItemBox",_dId)[0]; _die.style.height="auto"; _dM(_dId,"kcbOpen"); _dId.style.position="relative"; if (this._dO7>0){_dX(_die,this._dO7); }else {if (_die.offsetHeight<this._dl7 && this._dl7>0){_dX(_die,this._dl7); }else if (_die.offsetHeight>this._di7 && this._di7>0){_dX(_die,this._di7); }}_die.scrollTop=0; var _dIe=_dl4.offsetTop; var _dof=_dl4.offsetLeft; switch (this._dI7){case "up":_doe.style.top=_dIe-_doe.offsetHeight+"px"; break; case "auto":case "down":default:_doe.style.top=_dIe+_dl4.offsetHeight+"px"; break; }_doe.style.left=((this._do8=="right")?_dof+_dl4.offsetWidth-_dle:_dof)+"px"; if (_dO(_dOe)){_dW(_dOe,_doe.offsetWidth); _dX(_dOe,_doe.offsetHeight); _dOe.style.top=_doe.style.top; _dOe.style.left=_doe.style.left; }_do5=_dI(this._di+"_selectedText"); _do5.focus(); _do5.select(); this._di4("OnOpen", {} ); } ,isOpening:function (){var _dId=_dU(_dI(this._di)); return _dl2("Open",_dQ(_dId))>0; } ,close:function (){if (!this._di4("OnBeforeClose", {} ))return; var _dId=_dU(_dI(this._di)); _dL(_dId,"kcbOpen"); _dId.style.position="static"; this._dl6(); var _do5=_dI(this._di+"_selectedText"); var _dib=_do5.value; if (this._do6){for (var i=0; i<=_dib.length; i++){var _dOf=_dib.substr(0,_dib.length-i); var _dIf=this._dog(_dOf,"text",1, false); if (_dIf.length>0){break; }}if (_dIf.length>0){var _dOg=new KoolComboboxItem(_dIf[0]); if (i>0){_dOg.select(); }else {if (_dOg.getData()["text"]!=_dib){_dOg.select(); }}}else {_do5.value=""; }} this._di4("OnClose", {} ); } ,removeItem:function (_di){var _do4=_dI(_di); if (_ds())return; if (_dO(_do4) && _dl2("Item",_dQ(_do4))>0 && _dl2(this._di,_di)==0){var _dlg=_dz(_do4); _dg(_do4); _dlg.removeChild(_do4); }} ,addItem:function (_dib,_dig,_dIg){var _dl3=new Object(); _dl3["text"]=_dib; _dl3["value"]=_dig; for (var i in _dIg){if (typeof _dIg[i]!="function"){_dl3[i]=_dIg[i]; }}if (_ds())return; var _die=_dw("div","kcbItemBox",_dI(this._di))[0]; var _dlg=_dU(_die); var _do4=_dA("li",_dlg); _do4.id=this._di+".i"+_dy(); _dq(_do4,"kcbLI kcbItem"); var _doh=_dI(this._di+"_itemtemplate").innerHTML; var _dOh=unescape(_doh); for (var _dlh in _dl3){if (typeof _dl3[_dlh]!="function"){_dOh=_dOh.replace(eval("/{"+_dlh+"}/g"),_dl3[_dlh]); _dl3[_dlh]=encodeURIComponent(_dl3[_dlh]); }}_do4.innerHTML="\x3cinput type=\'hidden\' value=\""+_dd(_dl3)+"\"/>\x3ca class=\'kcbA\' href=\'javascript:void 0\'>\x3cdiv class=\'kcbIn\'>"+_dOh+"</div></a>"; _dl(_do4,"click",_dIc, false); _dl(_do4,"mouseover",_dod, false); _dl(_do4,"mouseout",_dOd, false); return (new KoolComboboxItem(_do4.id)); } ,sort:function (_dih,_dIh){} ,registerEvent:function (_dc,_doi){if (_ds())return; this._dl8[_dc]=_doi; } ,_di4:function (_dc,_dOi){if (_ds())return true; return (_dO(this._dl8[_dc]))?this._dl8[_dc](this,_dOi): true; } ,_dli:function (_do3){} ,_di5:function (_do3){ this.open(); } ,_dii:function (_dIi){var _doj=-1; var _doc=_dw("li","kcbItem",_dI(this._di)); for (var i=0; i<_doc.length; i++){if (_dl2("kcbSelectFocus",_dQ(_doc[i]))>-1){_doj=i; break; }}if (_doj<0 && _dIi<0){_doj=_doc.length; }var _dOj=0,_dlj=Math.abs(_dIi); var _dij=_dIi/_dlj; var _dIj=_doj+_dij; while (_dIj>-1 && _dIj<_doc.length && _dOj<_dlj){if (_dl2("Disable",_dQ(_doc[_dIj]))<0 && _dr(_doc[_dIj])){_dOj++; }_dIj+=_dij; }if (_dOj==_dlj){if (_doj>-1 && _doj<_doc.length){_dL(_doc[_doj],"kcbSelectFocus"); }_doj=_dIj-_dij; _dM(_doc[_doj],"kcbSelectFocus"); var _dok=_doc[_doj]; (new KoolComboboxItem(_dok.id)).select(); var _die=_dz(_dok,2); if (_dok.offsetTop+_dok.offsetHeight>_die.scrollTop+_die.offsetHeight){_die.scrollTop=_dok.offsetTop; }else if (_dok.offsetTop<_die.scrollTop && _die.scrollTop>0){_die.scrollTop=_dok.offsetTop+_dok.offsetHeight-_die.offsetHeight; }var _do5=_dI(this._di+"_selectedText"); _do5.select(); }} ,_dl6:function (){var _doc=_dw("li","kcbItem",_dI(this._di)); for (var i=0; i<_doc.length; i++)if (_dl2("kcbSelectFocus",_dQ(_doc[i])))_dL(_doc[i],"kcbSelectFocus"); } ,_dOk:function (){if (this.isOpening())this._dii(-1); else this.open(); } ,_dlk:function (){if (this.isOpening())this._dii(1); else this.open(); } ,_dik:function (){var _doj=-1; var _doc=_dw("li","kcbItem",_dI(this._di)); for (var i=0; i<_doc.length; i++){if (_dl2("kcbSelectFocus",_dQ(_doc[i]))>-1){_doj=i; break; }}if (_doj>-1 && _doj<_doc.length){_dL(_doc[i],"kcbSelectFocus"); (new KoolComboboxItem(_doc[i].id)).select(); } this.close(); } ,_dIk:function (){ this.close(); } ,_dog:function (_dOf,_dol,_dih,_dll){var _dl5=new Array(); var _dIf=new Array(); var _doc=_dw("li","kcbItem",_dI(this._di)); for (var i=0; i<_doc.length; i++){var _dOg=new KoolComboboxItem(_doc[i].id); _dIf.push(_dOg._di); _dl5.push((_dll)?_dOg.getData()[_dol]:_dOg.getData()[_dol].toLowerCase()); }if (!_dll)_dOf=_dOf.toLowerCase(); var _dS=new Array(); switch (_dih){case 0:break; case 1:for (var i=0; i<_dIf.length; i++)if (_dl2(_dOf,_dl5[i])==0)_dS.push(_dIf[i]); break; case 2:for (var i=0; i<_dIf.length; i++)if (_dl2(_dOf,_dl5[i])>-1)_dS.push(_dIf[i]); break; }return _dS; } ,HT:function (){var _do5=_dI(this._di+"_selectedText"); var _dib=_do5.value; if (!_dO(this._dO8)){if (this._do6){for (var i=0; i<=_dib.length; i++){var _dOf=_dib.substr(0,_dib.length-i); var _dIf=this._dog(_dOf,"text",1, false); if (_dIf.length>0){break; }}if (_dIf.length>0){ this._dI4(); (new KoolComboboxItem(_dIf[0])).select(); _do5.selectionStart=_dOf.length; _do5.selectionEnd=_do5.value.length; }}}else {if (!this._di4("OnBeforeSendUpdateRequest", { "Text":_dib } ))return; koolajax.callback(eval(this._dO8)(_dib),eval("__=function (_r){"+this._di+".SFR(_r)}")); var _die=_dw("div","kcbItemBox",_dI(this._di))[0]; var _dlg=_dU(_die); _dg(_dlg); _dlg.innerHTML=""; _dlg.innerHTML="<li id='"+this._di+".loading' class='kcbLI'><div class='kcbLoading'>Loading...</div></li>"; this._di4("OnSendUpdateRequest", { "Text":_dib } ); }} ,SFR:function (_dC){if (!this._di4("OnBeforeUpdateItemList", { "Data":_dC } ))return; var _die=_dw("div","kcbItemBox",_dI(this._di))[0]; var _dlg=_dU(_die); _dlg.innerHTML=""; var _doh=_dI(this._di+"_itemtemplate").innerHTML; var _dil=""; for (i in _dC){if (typeof _dC[i]!="function"){var _dl5=new Object(); _dl5["text"]=""; _dl5["value"]=""; var _dIl=unescape(_doh); for (_dlh in _dC[i]){if (typeof _dC[i][_dlh]!="function"){_dl5[_dlh]=_dC[i][_dlh]; _dIl=_dIl.replace(eval("/{"+_dlh+"}/g"),_dl5[_dlh]); _dl5[_dlh]=encodeURIComponent(_dl5[_dlh]); }}_dil+="<li id='"+this._di+".i"+_dy()+"\' class=\'kcbLI kcbItem\'>\x3cinput type=\'hidden\' value=\""+_dd(_dl5)+"\"/>\x3ca class=\'kcbA\' href=\'javascript:void 0\'>\x3cdiv class=\'kcbIn\'>"+_dIl+"</div></a></li>"; }}_dlg.innerHTML=_dil; this._dia(1); this._di4("OnUpdateItemList", {} ); }};function _dl9(){_dM(this,"kcbOver"); }function _di9(){_dL(this,"kcbOver"); }function _dI9(_do3){var _dI8=_dz(this,2); var _dId=_dU(_dI8); _dM(_dId,"kcbDown"); var _dom=eval(_dI8.id); _dom._dli(_do3); return false; }function _dOa(_do3){var _dI8=_dz(this,2); var _dom=eval(_dI8.id); _dom._di5(_do3); }function _doa(){var _dId=_dz(this ); _dL(_dId,"kcbDown"); }function _dla(_do3){if (_do3.stopPropagation)_do3.stopPropagation(); else _do3.cancelBubble= true; }function _dIc(_do3){ (new KoolComboboxItem(this.id))._di5(_do3); }function _dod(_do3){ (new KoolComboboxItem(this.id))._dO6(_do3); }function _dOd(_do3){ (new KoolComboboxItem(this.id))._di6(_do3); }function _dIa(_do3){var _dl4=eval("__="+this.id.replace("_selectedText","")); var _dlh=_do3.keyCode; if (!_dl4._di4("OnBeforeKeyPress", { "keyCode":_dlh } )){return _dI2(_do3); }switch (_dlh){case 40:_dl4._dlk(); return _dI2(_do3); break; case 38:_dl4._dOk(); return _dI2(_do3); break; case 13:_dl4._dik(); return _dI2(_do3); break; case 27:_dl4._dIk(); return _dI2(_do3); case 39:case 37:case 16:case 17:case 18:case 8:break; case 9:_dl4.close(); _dl4._dl6(); break; default:setTimeout(_dl4._di+".HT()",1); break; }_dl4._di4("OnKeyPress", { "KeyCode":_dlh } ); }function _dob(_do3){ this.select(); }if (typeof(__KCBInits)!="undefined" && _dO(__KCBInits)){for (var i=0; i<__KCBInits.length; i++){__KCBInits[i](); }} <?php _dl8(); _dO8(); } if (!class_exists("\113\157olCombo\142\157x",FALSE)) { function _dlb($_dOb) { return _dO2("+"," ",urlencode($_dOb)); } function _dlc($_dOc,$_dld) { $_dOd=""; foreach ($_dOc->childNodes as $_dle) { $_dOd.=$_dld->savexml($_dle); } return trim($_dOd); } class koolcomboboxitem { var $enabled=TRUE; var $selected=FALSE; var $data; function __construct() { $this->data =array("\164ext" => "\113\157olCom\142\157box It\145\155","va\154\165\145" => ""); } } class koolcombobox { var $_dl0="\061\0568.0.\060"; var $id; var $styleFolder; var $_dOe; var $scriptFolder=""; var $openDirection="\144own"; var $superAbove=TRUE; var $effect="no\156\145"; var $width="\141\165to"; var $boxWidth="auto"; var $boxHeight="au\164\157"; var $maxBoxHeight="2\060\060px"; var $minBoxHeight="\065\060px"; var $mode="combobo\170"; var $align="lef\164"; var $headerTemplate=""; var $itemTemplate="\173text\175"; var $footerTemplate=""; var $inputValidate=TRUE; var $serviceFunction; var $_dlf; function __construct($_dOf) { $this->id =$_dOf; $this->_dlf =array(); } function additem($_dl7="",$_dlg="",$_dOg=array(),$_dlh=FALSE,$_dOh=TRUE) { $_dOi=new koolcomboboxitem(); $_dOi->enabled =( isset ($_dOh)) ? $_dOh: FALSE; $_dOi->selected =( isset ($_dlh)) ? $_dlh: FALSE; if ($_dl7 != "") $_dOi->data["text"]=$_dl7; $_dOi->data["va\154\165e"]=$_dlg; if ( isset ($_dOg)) { foreach ($_dOg as $_dlj => $_dOj) { $_dOi->data[$_dlj]=$_dOj; } } array_push($this->_dlf ,$_dOi); return $_dOi; } function loadxml($_dlk) { if (gettype($_dlk) == "\163\164ring") { $_dOk=new domdocument(); $_dOk->loadxml($_dlk); $_dlk=$_dOk->documentElement; } $_dOf=$_dlk->getattribute("\151d"); if ($_dOf != "") $this->id =$_dOf; $_dll=$_dlk->getattribute("\163\164yleFo\154\144er"); if ($_dll != "") $this->styleFolder =$_dll; $_dlm=$_dlk->getattribute("sc\162\151\160tFol\144\145r"); if ($_dlm != "") $this->scriptFolder =$_dlm; $_dOm=$_dlk->getattribute("boxHe\151\147\150t"); if ($_dOm != "") $this->boxHeight =$_dOm; $_dln=$_dlk->getattribute("\155axBoxH\145\151ght"); if ($_dln != "") $this->maxBoxHeight =$_dln; $_dOn=$_dlk->getattribute("minB\157\170\110eigh\164"); if ($_dOn != "") $this->minBoxHeight =$_dOn; $_dlo=$_dlk->getattribute("\157\160enDir\145\143tion"); if ($_dlo != "") $this->openDirection =$_dlo; $_dOo=$_dlk->getattribute("effect"); if ($_dOo != "") $this->effect =$_dOo; $_dlp=$_dlk->getattribute("\167idth"); if ($_dlp != "") $this->width =$_dlp; $_dOp=$_dlk->getattribute("\142oxWi\144\164\150"); if ($_dOp != "") $this->boxWidth =$_dOp; $_dlq=$_dlk->getattribute("ser\166\151ceFunct\151\157n"); if ($_dlq != "") $this->serviceFunction =$_dlq; $_dOq=$_dlk->getattribute("\141lign"); if ($_dOq != "") $this->align =$_dOq; $_dlr=$_dlk->getattribute("mode"); if ($_dlr != "") $this->mode =$_dlr; $_dls=strtolower($_dlk->getattribute("\151nputVa\154\151\144ate")); if ($_dls != "") $this->inputValidate =($_dls == "\164rue") ? TRUE: FALSE; $_dOs=strtolower($_dlk->getattribute("\163\165perAbo\166\145")); if ($_dOs != "") $this->superAbove =($_dOs == "\164\162ue") ? TRUE: FALSE; foreach ($_dlk->childNodes as $_dlt) { switch (strtolower($_dlt->nodeName)) { case "\151\164ems": foreach ($_dlt->childNodes as $_dOt) { if (strtolower($_dOt->nodeName) == "item") { $_dOh=$_dOt->getattribute("enabled"); $_dOh=($_dOh != "") ? $_dOh: "t\162\165e"; $_dlh=$_dOt->getattribute("sele\143\164\145d"); $_dlh=($_dlh != "") ? $_dlh: "\146\141lse"; $_dOg=array("text" => "","valu\145" => ""); foreach ($_dOt->attributes as $_dlu) { if ($_dlu->name != "ena\142\154ed" && $_dlu->name != "\163\145lecte\144") { $_dOg[$_dlu->name ]=$_dlu->value; } } $this->additem($_dOg["text"],$_dOg["\166alue"],$_dOg,($_dlh == "true") ? TRUE: FALSE,($_dOh == "tru\145") ? TRUE: FALSE); } } break; case "templa\164\145\163": foreach ($_dlt->childNodes as $_dOu) { switch (strtolower($_dOu->nodeName)) { case "\150eadert\145\155\160lat\145": $this->headerTemplate =_dlc($_dOu,$_dlk->parentNode); break; case "itemte\155\160\154ate": $this->itemTemplate =_dlc($_dOu,$_dlk->parentNode); break; case "foot\145\162templa\164\145": $this->footerTemplate =_dlc($_dOu,$_dlk->parentNode); break; } } break; } } } function _dlv() { $this->styleFolder =_dO2("\134","\057",$this->styleFolder); $_dll=trim($this->styleFolder ,"/"); $_dOv=strrpos($_dll,"/"); $this->_dOe =substr($_dll,($_dOv ? $_dOv: -1)+1); } function render() { $_dlw="\n<!\055\055KoolCo\155\142obox \166\145rsio\156\040".$this->_dl0."\040- www\056\153oolphp\056\156et -\055\076\n"; $_dlw.=$this->registercss(); $_dlw.=$this->rendercombobox(); $_dOw= isset ($_POST["\137_koolaj\141\170"]) || isset ($_GET["__koo\154\141\152ax"]); $_dlw.=($_dOw) ? "": $this->registerscript(); $_dlw.="\074scrip\164\040type=\047\164ext/j\141\166ascri\160\164'>"; $_dlw.=$this->startupscript(); $_dlw.="\074/scrip\164\076"; return $_dlw; } function rendercombobox() { $this->_dlv(); $tpl_bound="\173\142\157undco\156\164\145nt}"; $tpl_box="\173boxcon\164\145nt}"; $tpl_item="\173\151temco\156\164ent}"; include "\163\164yles"."\057".$this->_dOe."\057".$this->_dOe."\056\164pl"; $_dlx="<\144\151\166 clas\163\075'kcb\173\155\157de}\047\076\173tp\154\137bou\156\144}</\144\151v>"; $_dOx="<\164\141ble><tr\076\074td st\171\154e='wi\144\164h:100\045\073'>\173\151nput\175\074/td>\074\164d>\173a\162\162ow}</\164\144></t\162\076</ta\142\154e>"; $_dly="<input\040\151d='\173\151\144\175_se\154\145cted\124\145xt' n\141\155e='\173\151d}_se\154\145ctedT\145\170t' ty\160\145='text\047\040cla\163\163='kcb\111\156put n\157\144ecor'\040\141utoc\157\155\160let\145\075'off'\040\057><in\160\165t ty\160\145='hid\144\145n' \151\144='\173\151\144}_se\154\145ctedV\141\154ue' \156\141me='\173\151\144}_s\145\154ected\126\141lue'\040\057>"; $_dOy="<im\147\040id='\173\151\144}_arr\157\167' src\075\047\173s\164\171lefo\154\144er}/\156\157ne.gi\146\047 clas\163\075'kcb\101\162row'\040\141lt=''\040\057>"; $_dlz="<div \143\154\141ss='\153\143bBox'\076\173tpl_b\157\170}</d\151\166>\173b\157\170_ifr\141\155\145}"; $_dOz="<i\146\162ame cla\163\163='kcbI\146\162ame' \163\162c='j\141\166ascr\151\160t:fa\154\163e;'> \074\057ifram\145\076"; $_dl10="\173\150\145ader}\173\151\164em}\173\146\157ote\162\175"; $_dO10="<di\166\040class='\153\143bHead\145\162'>\173h\145\141derco\156\164ent\175\040</di\166\076"; $_dl11="<\144\151\166 clas\163\075'kcbF\157\157ter'>\173\146ooter\143\157nten\164\175 </\144\151\166>"; $_dO11="\074div cla\163\163\075'kc\142\111temBo\170\047 styl\145\075'hei\147\150t:\173\142\157xHei\147\150t}'>\173\151\164emsc\157\156tent\175\074/div>"; $_dl12="<ul \143\154\141ss=\047\153cbUL'\076\173items\175\074/ul>"; $_dO12="<li c\154\141\163s='k\143\142LI kc\142\111\164em \173\144isabl\145\175 \173\163\145lect\145\144\175'>\173\151\164em_d\141\164a}<a \150\162ef='j\141\166ascri\160\164:void\040\060' cl\141\163s='kc\142\101'><sp\141\156 clas\163\075'kcbI\156\047>\173t\160\154_it\145\155}</sp\141\156></a\076\074/li>"; $_dl13="<in\160\165\164 typ\145\075'hidd\145\156' val\165\145=\042\173\144\141ta\175\042 />"; $_dO13=_dO2("\173tp\154\137\142ox}",$tpl_box,$_dlz); $_dO13=_dO2("\173box_\151\146r\141me}",($this->superAbove) ? $_dOz: "",$_dO13); $_dO13=_dO2("\173box\143\157ntent\175",$_dl10,$_dO13); $_dl14=""; if ($this->headerTemplate != "") { $_dl14=_dO2("\173headerc\157\156\164ent\175",$this->headerTemplate ,$_dO10); } $_dO13=_dO2("\173heade\162\175",$_dl14,$_dO13); $_dO14=""; if ($this->footerTemplate != "") { $_dO14=_dO2("\173\146\157oter\143\157\156ten\164\175",$this->footerTemplate ,$_dl11); } $_dO13=_dO2("\173footer\175",$_dO14,$_dO13); $_dlf=""; foreach ($this->_dlf as $_dOi) { $_dl15=$this->itemTemplate; foreach ($_dOi->data as $_dO15 => $_dlg) { $_dl15=_dO2("\173".$_dO15."}",$_dlg,$_dl15); } $_dl16=_dO2("\173\164\160l_ite\155\175",$tpl_item,$_dO12); $_dl16=_dO2("\173it\145\155conte\156\164}",$_dl15,$_dl16); $_dl16=_dO2("\173d\151\163\141ble\175",($_dOi->enabled) ? "": "kc\142\104isable",$_dl16); $_dl16=_dO2("\173s\145\154\145cted\175",($_dOi->selected) ? "\153cbSele\143\164ed": "",$_dl16); $_dO16=""; foreach ($_dOi->data as $_dO15 => $_dlg) { $_dO16.=",'".$_dO15."\047:'"._dlb($_dlg)."'"; } $_dO16="\173".substr($_dO16,1)."\175"; $_dl17=_dO2("\173data\175",$_dO16,$_dl13); $_dl16=_dO2("\173item_d\141\164a}",$_dl17,$_dl16); $_dlf.=$_dl16; } $_dO17=_dO2("\173item\163\175",$_dlf,$_dl12); $_dl18=_dO2("\173\151temsco\156\164ent}",$_dO17,$_dO11); $_dl18=_dO2("\173\142\157xHeigh\164\175",$this->boxHeight ,$_dl18); $_dO13=_dO2("\173\151tem}",$_dl18,$_dO13); $_dO18=_dO2("\173\151\144}",$this->id ,$_dly); $_dl19=_dO2("\173id}",$this->id ,$_dOy); $_dl19=_dO2("\173\163\164yl\145\146ol\144\145r}",$this->_dO19()."/".$this->_dOe ,$_dl19); $_dl1a=_dO2("\173id}",$this->id ,$_dlx); $_dl1a=_dO2("\173\164pl_bo\165\156d}",$tpl_bound,$_dl1a); $_dl1a=_dO2("\173\142\157undcon\164\145nt}",$_dOx,$_dl1a); $_dl1a=_dO2("\173\151\156put}",$_dO18,$_dl1a); $_dl1a=_dO2("\173\141\162row}",($this->mode == "\143ombobo\170") ? $_dl19: "",$_dl1a); $_dl1a=_dO2("\173mode}",($this->mode == "combobo\170") ? "Combobo\170": "Te\170\164\142ox",$_dl1a); $_dla=_dO2("\173\151\144\175",$this->id ,_dl9()); $_dla=_dO2("\173\163tyle}",$this->_dOe ,$_dla); $_dla=_dO2("\173wid\164\150}",$this->width ,$_dla); $_dla=_dO2("\173\151temtemp\154\141te}",$tpl_item,$_dla); $_dla=_dO2("\173\151\164emco\156\164ent}",$this->itemTemplate ,$_dla); if (_dO9($_dla)) { $_dla=_dO2("\173\143\157\155bo}",$_dl1a,$_dla); } $_dla=_dO2("\173\166ersion}",$this->_dl0 ,$_dla); $_dla=_dO2("\173b\157\170\175",$_dO13,$_dla); return $_dla; } function registercss() { $this->_dlv(); $_dO1a="<scrip\164\040type=\047\164ext/j\141\166as\143\162ipt\047\076i\146 (d\157\143um\145\156t.\147\145tEl\145\155en\164\102yI\144\050'\137\137\173\163\164yl\145\175K\103\102')=\075null)\173\166ar _h\145\141d \075\040doc\165\155e\156\164.g\145\164Ele\155\145nts\102yTa\147\116ame('\150\145ad')\133\060];va\162\040_link\040\075 doc\165\155ent.\143\162eateE\154\145ment\050\047link\047\051;\040\137li\156\153.\151\144 =\040\047_\137\173\163tyle\175\113CB';\137\154ink.r\145\154='st\171\154eshe\145\164'; _\154\151nk.h\162\145f=\047\173styl\145\160ath}\057\173styl\145\175/\173\163\164yle}\056\143ss';\137\150ead.\141\160pend\103\150ild(\137\154ink)\073\175</s\143\162ipt>"; $_dlw=_dO2("\173\163\164yle}",$this->_dOe ,$_dO1a); $_dlw=_dO2("\173\163\164ylepat\150\175",$this->_dO19(),$_dlw); return $_dlw; } function registerscript() { $_dO1a="\074script\040\164ype='t\145\170t/jav\141\163cript\047\076if(t\171\160eof\040\137libK\103\102=='un\144\145fined\047\051\173d\157\143umen\164\056writ\145\050unes\143\141pe(\042\045\063Cscr\151\160t ty\160\145='tex\164\057javas\143\162ipt' \163\162c='\173\163\162c}'\045\063E %3\103\057scri\160\164%3E\042\051\051;_l\151\142KCB=\061\073}</s\143\162ipt>"; $_dlw=_dO2("\173src}",$this->_dl1b()."?".md5("\152\163"),$_dO1a); return $_dlw; } function startupscript() { $_dO1a="var \173\151d}; f\165\156ction\040\173id}\137\151nit()\173\040\173i\144\175=ne\167\040KoolC\157\155bobox\050\047\173id\175\047,'\173\155\157de}\047\054'\173b\157\170Widt\150\175\047,'\173\142\157xHe\151\147\150t}'\054\047\173mi\156\102oxHei\147\150t}',\047\173maxB\157\170Heig\150\164}',\173\151\156putV\141\154idate\175\054'\173o\160\145nDir\145\143tion}\047\054'\173\141\154ign}'\054\047\173s\145\162viceF\165\156ctio\156\175');}"; $_dO1a.="if \050\164ypeof(\113\157\157lCo\155\142obox)\075\075'fun\143\164ion\047\051\173\173\151\144}_in\151\164();}"; $_dO1a.="else\173\151\146(typeo\146\050__KC\102\111nits)\075\075'und\145\146ine\144\047)\173\137\137\113CBI\156\151ts=ne\167\040Array\050\051;} \137\137KCBIn\151\164s.pus\150\050\173id\175\137init)\073\173regi\163\164er_sc\162\151pt}}"; $_dO1b="if(t\171\160\145of(\137\154\151bKC\102\051=='un\144\145fine\144\047)\173\166\141r _he\141\144 = do\143\165ment.\147\145\164Ele\155\145ntsB\171\124\141gNa\155\145('hea\144\047)[0];\166\141r _sc\162\151pt = \144\157cumen\164\056crea\164\145Eleme\156\164('scr\151\160t')\073\040_scr\151\160t.typ\145\075'tex\164\057javas\143\162ipt'\073\040_scr\151\160t.sr\143\075'\173s\162\143}'; _\150\145ad.a\160\160endC\150\151ld(_s\143\162ipt)\073\137libK\103\102=1;}"; $_dl1c=_dO2("\173src}",$this->_dl1b()."?".md5("j\163"),$_dO1b); $_dlw=_dO2("\173\151d}",$this->id ,$_dO1a); $_dlw=_dO2("\173\155\157de}",$this->mode ,$_dlw); $_dlw=_dO2("\173\142\157xWidth\175",$this->boxWidth ,$_dlw); $_dlw=_dO2("\173boxHeig\150\164}",$this->boxHeight ,$_dlw); $_dlw=_dO2("\173\155\151nBoxH\145\151\147ht}",$this->minBoxHeight ,$_dlw); $_dlw=_dO2("\173\155\141xBoxH\145\151ght}",$this->maxBoxHeight ,$_dlw); $_dlw=_dO2("\173\151nputVa\154\151date}",($this->inputValidate) ? "1": "0",$_dlw); $_dlw=_dO2("\173\157penDi\162\145\143tion\175",$this->openDirection ,$_dlw); $_dlw=_dO2("\173\141lign}",$this->align ,$_dlw); $_dlw=_dO2("\173\163\145rviceF\165\156ction}",$this->serviceFunction ,$_dlw); $_dlw=_dO2("\173\162egis\164\145\162_scr\151\160t}",$_dl1c,$_dlw); return $_dlw; } function _dl1b() { if ($this->scriptFolder == "") { $_dl6=_dO4(); $_dO1c=substr(_dO2("\134","/",__FILE__),strlen($_dl6)); return $_dO1c; } else { $_dO1c=_dO2("\134","\057",__FILE__); $_dO1c=$this->scriptFolder.substr($_dO1c,strrpos($_dO1c,"\057")); return $_dO1c; } } function _dO19() { $_dl1d=$this->_dl1b(); $_dO1d=_dO2(strrchr($_dl1d,"\057"),"",$_dl1d)."/st\171\154es"; return $_dO1d; } } } ?> 
