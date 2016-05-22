/*! jQuery UI - v1.10.1 - 2013-02-20
* http://jqueryui.com
* Includes: jquery.ui.core.js, jquery.ui.widget.js, jquery.ui.mouse.js, jquery.ui.draggable.js
* Copyright (c) 2013 jQuery Foundation and other contributors Licensed MIT */

(function(e,t){function i(t,n){var r,i,o,u=t.nodeName.toLowerCase();return"area"===u?(r=t.parentNode,i=r.name,!t.href||!i||r.nodeName.toLowerCase()!=="map"?!1:(o=e("img[usemap=#"+i+"]")[0],!!o&&s(o))):(/input|select|textarea|button|object/.test(u)?!t.disabled:"a"===u?t.href||n:n)&&s(t)}function s(t){return e.expr.filters.visible(t)&&!e(t).parents().addBack().filter(function(){return e.css(this,"visibility")==="hidden"}).length}var n=0,r=/^ui-id-\d+$/;e.ui=e.ui||{};if(e.ui.version)return;e.extend(e.ui,{version:"1.10.1",keyCode:{BACKSPACE:8,COMMA:188,DELETE:46,DOWN:40,END:35,ENTER:13,ESCAPE:27,HOME:36,LEFT:37,NUMPAD_ADD:107,NUMPAD_DECIMAL:110,NUMPAD_DIVIDE:111,NUMPAD_ENTER:108,NUMPAD_MULTIPLY:106,NUMPAD_SUBTRACT:109,PAGE_DOWN:34,PAGE_UP:33,PERIOD:190,RIGHT:39,SPACE:32,TAB:9,UP:38}}),e.fn.extend({_focus:e.fn.focus,focus:function(t,n){return typeof t=="number"?this.each(function(){var r=this;setTimeout(function(){e(r).focus(),n&&n.call(r)},t)}):this._focus.apply(this,arguments)},scrollParent:function(){var t;return e.ui.ie&&/(static|relative)/.test(this.css("position"))||/absolute/.test(this.css("position"))?t=this.parents().filter(function(){return/(relative|absolute|fixed)/.test(e.css(this,"position"))&&/(auto|scroll)/.test(e.css(this,"overflow")+e.css(this,"overflow-y")+e.css(this,"overflow-x"))}).eq(0):t=this.parents().filter(function(){return/(auto|scroll)/.test(e.css(this,"overflow")+e.css(this,"overflow-y")+e.css(this,"overflow-x"))}).eq(0),/fixed/.test(this.css("position"))||!t.length?e(document):t},zIndex:function(n){if(n!==t)return this.css("zIndex",n);if(this.length){var r=e(this[0]),i,s;while(r.length&&r[0]!==document){i=r.css("position");if(i==="absolute"||i==="relative"||i==="fixed"){s=parseInt(r.css("zIndex"),10);if(!isNaN(s)&&s!==0)return s}r=r.parent()}}return 0},uniqueId:function(){return this.each(function(){this.id||(this.id="ui-id-"+ ++n)})},removeUniqueId:function(){return this.each(function(){r.test(this.id)&&e(this).removeAttr("id")})}}),e.extend(e.expr[":"],{data:e.expr.createPseudo?e.expr.createPseudo(function(t){return function(n){return!!e.data(n,t)}}):function(t,n,r){return!!e.data(t,r[3])},focusable:function(t){return i(t,!isNaN(e.attr(t,"tabindex")))},tabbable:function(t){var n=e.attr(t,"tabindex"),r=isNaN(n);return(r||n>=0)&&i(t,!r)}}),e("<a>").outerWidth(1).jquery||e.each(["Width","Height"],function(n,r){function u(t,n,r,s){return e.each(i,function(){n-=parseFloat(e.css(t,"padding"+this))||0,r&&(n-=parseFloat(e.css(t,"border"+this+"Width"))||0),s&&(n-=parseFloat(e.css(t,"margin"+this))||0)}),n}var i=r==="Width"?["Left","Right"]:["Top","Bottom"],s=r.toLowerCase(),o={innerWidth:e.fn.innerWidth,innerHeight:e.fn.innerHeight,outerWidth:e.fn.outerWidth,outerHeight:e.fn.outerHeight};e.fn["inner"+r]=function(n){return n===t?o["inner"+r].call(this):this.each(function(){e(this).css(s,u(this,n)+"px")})},e.fn["outer"+r]=function(t,n){return typeof t!="number"?o["outer"+r].call(this,t):this.each(function(){e(this).css(s,u(this,t,!0,n)+"px")})}}),e.fn.addBack||(e.fn.addBack=function(e){return this.add(e==null?this.prevObject:this.prevObject.filter(e))}),e("<a>").data("a-b","a").removeData("a-b").data("a-b")&&(e.fn.removeData=function(t){return function(n){return arguments.length?t.call(this,e.camelCase(n)):t.call(this)}}(e.fn.removeData)),e.ui.ie=!!/msie [\w.]+/.exec(navigator.userAgent.toLowerCase()),e.support.selectstart="onselectstart"in document.createElement("div"),e.fn.extend({disableSelection:function(){return this.bind((e.support.selectstart?"selectstart":"mousedown")+".ui-disableSelection",function(e){e.preventDefault()})},enableSelection:function(){return this.unbind(".ui-disableSelection")}}),e.extend(e.ui,{plugin:{add:function(t,n,r){var i,s=e.ui[t].prototype;for(i in r)s.plugins[i]=s.plugins[i]||[],s.plugins[i].push([n,r[i]])},call:function(e,t,n){var r,i=e.plugins[t];if(!i||!e.element[0].parentNode||e.element[0].parentNode.nodeType===11)return;for(r=0;r<i.length;r++)e.options[i[r][0]]&&i[r][1].apply(e.element,n)}},hasScroll:function(t,n){if(e(t).css("overflow")==="hidden")return!1;var r=n&&n==="left"?"scrollLeft":"scrollTop",i=!1;return t[r]>0?!0:(t[r]=1,i=t[r]>0,t[r]=0,i)}})})(jQuery);(function(e,t){var n=0,r=Array.prototype.slice,i=e.cleanData;e.cleanData=function(t){for(var n=0,r;(r=t[n])!=null;n++)try{e(r).triggerHandler("remove")}catch(s){}i(t)},e.widget=function(t,n,r){var i,s,o,u,a={},f=t.split(".")[0];t=t.split(".")[1],i=f+"-"+t,r||(r=n,n=e.Widget),e.expr[":"][i.toLowerCase()]=function(t){return!!e.data(t,i)},e[f]=e[f]||{},s=e[f][t],o=e[f][t]=function(e,t){if(!this._createWidget)return new o(e,t);arguments.length&&this._createWidget(e,t)},e.extend(o,s,{version:r.version,_proto:e.extend({},r),_childConstructors:[]}),u=new n,u.options=e.widget.extend({},u.options),e.each(r,function(t,r){if(!e.isFunction(r)){a[t]=r;return}a[t]=function(){var e=function(){return n.prototype[t].apply(this,arguments)},i=function(e){return n.prototype[t].apply(this,e)};return function(){var t=this._super,n=this._superApply,s;return this._super=e,this._superApply=i,s=r.apply(this,arguments),this._super=t,this._superApply=n,s}}()}),o.prototype=e.widget.extend(u,{widgetEventPrefix:s?u.widgetEventPrefix:t},a,{constructor:o,namespace:f,widgetName:t,widgetFullName:i}),s?(e.each(s._childConstructors,function(t,n){var r=n.prototype;e.widget(r.namespace+"."+r.widgetName,o,n._proto)}),delete s._childConstructors):n._childConstructors.push(o),e.widget.bridge(t,o)},e.widget.extend=function(n){var i=r.call(arguments,1),s=0,o=i.length,u,a;for(;s<o;s++)for(u in i[s])a=i[s][u],i[s].hasOwnProperty(u)&&a!==t&&(e.isPlainObject(a)?n[u]=e.isPlainObject(n[u])?e.widget.extend({},n[u],a):e.widget.extend({},a):n[u]=a);return n},e.widget.bridge=function(n,i){var s=i.prototype.widgetFullName||n;e.fn[n]=function(o){var u=typeof o=="string",a=r.call(arguments,1),f=this;return o=!u&&a.length?e.widget.extend.apply(null,[o].concat(a)):o,u?this.each(function(){var r,i=e.data(this,s);if(!i)return e.error("cannot call methods on "+n+" prior to initialization; "+"attempted to call method '"+o+"'");if(!e.isFunction(i[o])||o.charAt(0)==="_")return e.error("no such method '"+o+"' for "+n+" widget instance");r=i[o].apply(i,a);if(r!==i&&r!==t)return f=r&&r.jquery?f.pushStack(r.get()):r,!1}):this.each(function(){var t=e.data(this,s);t?t.option(o||{})._init():e.data(this,s,new i(o,this))}),f}},e.Widget=function(){},e.Widget._childConstructors=[],e.Widget.prototype={widgetName:"widget",widgetEventPrefix:"",defaultElement:"<div>",options:{disabled:!1,create:null},_createWidget:function(t,r){r=e(r||this.defaultElement||this)[0],this.element=e(r),this.uuid=n++,this.eventNamespace="."+this.widgetName+this.uuid,this.options=e.widget.extend({},this.options,this._getCreateOptions(),t),this.bindings=e(),this.hoverable=e(),this.focusable=e(),r!==this&&(e.data(r,this.widgetFullName,this),this._on(!0,this.element,{remove:function(e){e.target===r&&this.destroy()}}),this.document=e(r.style?r.ownerDocument:r.document||r),this.window=e(this.document[0].defaultView||this.document[0].parentWindow)),this._create(),this._trigger("create",null,this._getCreateEventData()),this._init()},_getCreateOptions:e.noop,_getCreateEventData:e.noop,_create:e.noop,_init:e.noop,destroy:function(){this._destroy(),this.element.unbind(this.eventNamespace).removeData(this.widgetName).removeData(this.widgetFullName).removeData(e.camelCase(this.widgetFullName)),this.widget().unbind(this.eventNamespace).removeAttr("aria-disabled").removeClass(this.widgetFullName+"-disabled "+"ui-state-disabled"),this.bindings.unbind(this.eventNamespace),this.hoverable.removeClass("ui-state-hover"),this.focusable.removeClass("ui-state-focus")},_destroy:e.noop,widget:function(){return this.element},option:function(n,r){var i=n,s,o,u;if(arguments.length===0)return e.widget.extend({},this.options);if(typeof n=="string"){i={},s=n.split("."),n=s.shift();if(s.length){o=i[n]=e.widget.extend({},this.options[n]);for(u=0;u<s.length-1;u++)o[s[u]]=o[s[u]]||{},o=o[s[u]];n=s.pop();if(r===t)return o[n]===t?null:o[n];o[n]=r}else{if(r===t)return this.options[n]===t?null:this.options[n];i[n]=r}}return this._setOptions(i),this},_setOptions:function(e){var t;for(t in e)this._setOption(t,e[t]);return this},_setOption:function(e,t){return this.options[e]=t,e==="disabled"&&(this.widget().toggleClass(this.widgetFullName+"-disabled ui-state-disabled",!!t).attr("aria-disabled",t),this.hoverable.removeClass("ui-state-hover"),this.focusable.removeClass("ui-state-focus")),this},enable:function(){return this._setOption("disabled",!1)},disable:function(){return this._setOption("disabled",!0)},_on:function(t,n,r){var i,s=this;typeof t!="boolean"&&(r=n,n=t,t=!1),r?(n=i=e(n),this.bindings=this.bindings.add(n)):(r=n,n=this.element,i=this.widget()),e.each(r,function(r,o){function u(){if(!t&&(s.options.disabled===!0||e(this).hasClass("ui-state-disabled")))return;return(typeof o=="string"?s[o]:o).apply(s,arguments)}typeof o!="string"&&(u.guid=o.guid=o.guid||u.guid||e.guid++);var a=r.match(/^(\w+)\s*(.*)$/),f=a[1]+s.eventNamespace,l=a[2];l?i.delegate(l,f,u):n.bind(f,u)})},_off:function(e,t){t=(t||"").split(" ").join(this.eventNamespace+" ")+this.eventNamespace,e.unbind(t).undelegate(t)},_delay:function(e,t){function n(){return(typeof e=="string"?r[e]:e).apply(r,arguments)}var r=this;return setTimeout(n,t||0)},_hoverable:function(t){this.hoverable=this.hoverable.add(t),this._on(t,{mouseenter:function(t){e(t.currentTarget).addClass("ui-state-hover")},mouseleave:function(t){e(t.currentTarget).removeClass("ui-state-hover")}})},_focusable:function(t){this.focusable=this.focusable.add(t),this._on(t,{focusin:function(t){e(t.currentTarget).addClass("ui-state-focus")},focusout:function(t){e(t.currentTarget).removeClass("ui-state-focus")}})},_trigger:function(t,n,r){var i,s,o=this.options[t];r=r||{},n=e.Event(n),n.type=(t===this.widgetEventPrefix?t:this.widgetEventPrefix+t).toLowerCase(),n.target=this.element[0],s=n.originalEvent;if(s)for(i in s)i in n||(n[i]=s[i]);return this.element.trigger(n,r),!(e.isFunction(o)&&o.apply(this.element[0],[n].concat(r))===!1||n.isDefaultPrevented())}},e.each({show:"fadeIn",hide:"fadeOut"},function(t,n){e.Widget.prototype["_"+t]=function(r,i,s){typeof i=="string"&&(i={effect:i});var o,u=i?i===!0||typeof i=="number"?n:i.effect||n:t;i=i||{},typeof i=="number"&&(i={duration:i}),o=!e.isEmptyObject(i),i.complete=s,i.delay&&r.delay(i.delay),o&&e.effects&&e.effects.effect[u]?r[t](i):u!==t&&r[u]?r[u](i.duration,i.easing,s):r.queue(function(n){e(this)[t](),s&&s.call(r[0]),n()})}})})(jQuery);(function(e,t){var n=!1;e(document).mouseup(function(){n=!1}),e.widget("ui.mouse",{version:"1.10.1",options:{cancel:"input,textarea,button,select,option",distance:1,delay:0},_mouseInit:function(){var t=this;this.element.bind("mousedown."+this.widgetName,function(e){return t._mouseDown(e)}).bind("click."+this.widgetName,function(n){if(!0===e.data(n.target,t.widgetName+".preventClickEvent"))return e.removeData(n.target,t.widgetName+".preventClickEvent"),n.stopImmediatePropagation(),!1}),this.started=!1},_mouseDestroy:function(){this.element.unbind("."+this.widgetName),this._mouseMoveDelegate&&e(document).unbind("mousemove."+this.widgetName,this._mouseMoveDelegate).unbind("mouseup."+this.widgetName,this._mouseUpDelegate)},_mouseDown:function(t){if(n)return;this._mouseStarted&&this._mouseUp(t),this._mouseDownEvent=t;var r=this,i=t.which===1,s=typeof this.options.cancel=="string"&&t.target.nodeName?e(t.target).closest(this.options.cancel).length:!1;if(!i||s||!this._mouseCapture(t))return!0;this.mouseDelayMet=!this.options.delay,this.mouseDelayMet||(this._mouseDelayTimer=setTimeout(function(){r.mouseDelayMet=!0},this.options.delay));if(this._mouseDistanceMet(t)&&this._mouseDelayMet(t)){this._mouseStarted=this._mouseStart(t)!==!1;if(!this._mouseStarted)return t.preventDefault(),!0}return!0===e.data(t.target,this.widgetName+".preventClickEvent")&&e.removeData(t.target,this.widgetName+".preventClickEvent"),this._mouseMoveDelegate=function(e){return r._mouseMove(e)},this._mouseUpDelegate=function(e){return r._mouseUp(e)},e(document).bind("mousemove."+this.widgetName,this._mouseMoveDelegate).bind("mouseup."+this.widgetName,this._mouseUpDelegate),t.preventDefault(),n=!0,!0},_mouseMove:function(t){return e.ui.ie&&(!document.documentMode||document.documentMode<9)&&!t.button?this._mouseUp(t):this._mouseStarted?(this._mouseDrag(t),t.preventDefault()):(this._mouseDistanceMet(t)&&this._mouseDelayMet(t)&&(this._mouseStarted=this._mouseStart(this._mouseDownEvent,t)!==!1,this._mouseStarted?this._mouseDrag(t):this._mouseUp(t)),!this._mouseStarted)},_mouseUp:function(t){return e(document).unbind("mousemove."+this.widgetName,this._mouseMoveDelegate).unbind("mouseup."+this.widgetName,this._mouseUpDelegate),this._mouseStarted&&(this._mouseStarted=!1,t.target===this._mouseDownEvent.target&&e.data(t.target,this.widgetName+".preventClickEvent",!0),this._mouseStop(t)),!1},_mouseDistanceMet:function(e){return Math.max(Math.abs(this._mouseDownEvent.pageX-e.pageX),Math.abs(this._mouseDownEvent.pageY-e.pageY))>=this.options.distance},_mouseDelayMet:function(){return this.mouseDelayMet},_mouseStart:function(){},_mouseDrag:function(){},_mouseStop:function(){},_mouseCapture:function(){return!0}})})(jQuery);(function(e,t){e.widget("ui.draggable",e.ui.mouse,{version:"1.10.1",widgetEventPrefix:"drag",options:{addClasses:!0,appendTo:"parent",axis:!1,connectToSortable:!1,containment:!1,cursor:"auto",cursorAt:!1,grid:!1,handle:!1,helper:"original",iframeFix:!1,opacity:!1,refreshPositions:!1,revert:!1,revertDuration:500,scope:"default",scroll:!0,scrollSensitivity:20,scrollSpeed:20,snap:!1,snapMode:"both",snapTolerance:20,stack:!1,zIndex:!1,drag:null,start:null,stop:null},_create:function(){this.options.helper==="original"&&!/^(?:r|a|f)/.test(this.element.css("position"))&&(this.element[0].style.position="relative"),this.options.addClasses&&this.element.addClass("ui-draggable"),this.options.disabled&&this.element.addClass("ui-draggable-disabled"),this._mouseInit()},_destroy:function(){this.element.removeClass("ui-draggable ui-draggable-dragging ui-draggable-disabled"),this._mouseDestroy()},_mouseCapture:function(t){var n=this.options;return this.helper||n.disabled||e(t.target).closest(".ui-resizable-handle").length>0?!1:(this.handle=this._getHandle(t),this.handle?(e(n.iframeFix===!0?"iframe":n.iframeFix).each(function(){e("<div class='ui-draggable-iframeFix' style='background: #fff;'></div>").css({width:this.offsetWidth+"px",height:this.offsetHeight+"px",position:"absolute",opacity:"0.001",zIndex:1e3}).css(e(this).offset()).appendTo("body")}),!0):!1)},_mouseStart:function(t){var n=this.options;return this.helper=this._createHelper(t),this.helper.addClass("ui-draggable-dragging"),this._cacheHelperProportions(),e.ui.ddmanager&&(e.ui.ddmanager.current=this),this._cacheMargins(),this.cssPosition=this.helper.css("position"),this.scrollParent=this.helper.scrollParent(),this.offset=this.positionAbs=this.element.offset(),this.offset={top:this.offset.top-this.margins.top,left:this.offset.left-this.margins.left},e.extend(this.offset,{click:{left:t.pageX-this.offset.left,top:t.pageY-this.offset.top},parent:this._getParentOffset(),relative:this._getRelativeOffset()}),this.originalPosition=this.position=this._generatePosition(t),this.originalPageX=t.pageX,this.originalPageY=t.pageY,n.cursorAt&&this._adjustOffsetFromHelper(n.cursorAt),n.containment&&this._setContainment(),this._trigger("start",t)===!1?(this._clear(),!1):(this._cacheHelperProportions(),e.ui.ddmanager&&!n.dropBehaviour&&e.ui.ddmanager.prepareOffsets(this,t),this._mouseDrag(t,!0),e.ui.ddmanager&&e.ui.ddmanager.dragStart(this,t),!0)},_mouseDrag:function(t,n){this.position=this._generatePosition(t),this.positionAbs=this._convertPositionTo("absolute");if(!n){var r=this._uiHash();if(this._trigger("drag",t,r)===!1)return this._mouseUp({}),!1;this.position=r.position}if(!this.options.axis||this.options.axis!=="y")this.helper[0].style.left=this.position.left+"px";if(!this.options.axis||this.options.axis!=="x")this.helper[0].style.top=this.position.top+"px";return e.ui.ddmanager&&e.ui.ddmanager.drag(this,t),!1},_mouseStop:function(t){var n,r=this,i=!1,s=!1;e.ui.ddmanager&&!this.options.dropBehaviour&&(s=e.ui.ddmanager.drop(this,t)),this.dropped&&(s=this.dropped,this.dropped=!1),n=this.element[0];while(n&&(n=n.parentNode))n===document&&(i=!0);return!i&&this.options.helper==="original"?!1:(this.options.revert==="invalid"&&!s||this.options.revert==="valid"&&s||this.options.revert===!0||e.isFunction(this.options.revert)&&this.options.revert.call(this.element,s)?e(this.helper).animate(this.originalPosition,parseInt(this.options.revertDuration,10),function(){r._trigger("stop",t)!==!1&&r._clear()}):this._trigger("stop",t)!==!1&&this._clear(),!1)},_mouseUp:function(t){return e("div.ui-draggable-iframeFix").each(function(){this.parentNode.removeChild(this)}),e.ui.ddmanager&&e.ui.ddmanager.dragStop(this,t),e.ui.mouse.prototype._mouseUp.call(this,t)},cancel:function(){return this.helper.is(".ui-draggable-dragging")?this._mouseUp({}):this._clear(),this},_getHandle:function(t){var n=!this.options.handle||!e(this.options.handle,this.element).length?!0:!1;return e(this.options.handle,this.element).find("*").addBack().each(function(){this===t.target&&(n=!0)}),n},_createHelper:function(t){var n=this.options,r=e.isFunction(n.helper)?e(n.helper.apply(this.element[0],[t])):n.helper==="clone"?this.element.clone().removeAttr("id"):this.element;return r.parents("body").length||r.appendTo(n.appendTo==="parent"?this.element[0].parentNode:n.appendTo),r[0]!==this.element[0]&&!/(fixed|absolute)/.test(r.css("position"))&&r.css("position","absolute"),r},_adjustOffsetFromHelper:function(t){typeof t=="string"&&(t=t.split(" ")),e.isArray(t)&&(t={left:+t[0],top:+t[1]||0}),"left"in t&&(this.offset.click.left=t.left+this.margins.left),"right"in t&&(this.offset.click.left=this.helperProportions.width-t.right+this.margins.left),"top"in t&&(this.offset.click.top=t.top+this.margins.top),"bottom"in t&&(this.offset.click.top=this.helperProportions.height-t.bottom+this.margins.top)},_getParentOffset:function(){this.offsetParent=this.helper.offsetParent();var t=this.offsetParent.offset();this.cssPosition==="absolute"&&this.scrollParent[0]!==document&&e.contains(this.scrollParent[0],this.offsetParent[0])&&(t.left+=this.scrollParent.scrollLeft(),t.top+=this.scrollParent.scrollTop());if(this.offsetParent[0]===document.body||this.offsetParent[0].tagName&&this.offsetParent[0].tagName.toLowerCase()==="html"&&e.ui.ie)t={top:0,left:0};return{top:t.top+(parseInt(this.offsetParent.css("borderTopWidth"),10)||0),left:t.left+(parseInt(this.offsetParent.css("borderLeftWidth"),10)||0)}},_getRelativeOffset:function(){if(this.cssPosition==="relative"){var e=this.element.position();return{top:e.top-(parseInt(this.helper.css("top"),10)||0)+this.scrollParent.scrollTop(),left:e.left-(parseInt(this.helper.css("left"),10)||0)+this.scrollParent.scrollLeft()}}return{top:0,left:0}},_cacheMargins:function(){this.margins={left:parseInt(this.element.css("marginLeft"),10)||0,top:parseInt(this.element.css("marginTop"),10)||0,right:parseInt(this.element.css("marginRight"),10)||0,bottom:parseInt(this.element.css("marginBottom"),10)||0}},_cacheHelperProportions:function(){this.helperProportions={width:this.helper.outerWidth(),height:this.helper.outerHeight()}},_setContainment:function(){var t,n,r,i=this.options;i.containment==="parent"&&(i.containment=this.helper[0].parentNode);if(i.containment==="document"||i.containment==="window")this.containment=[i.containment==="document"?0:e(window).scrollLeft()-this.offset.relative.left-this.offset.parent.left,i.containment==="document"?0:e(window).scrollTop()-this.offset.relative.top-this.offset.parent.top,(i.containment==="document"?0:e(window).scrollLeft())+e(i.containment==="document"?document:window).width()-this.helperProportions.width-this.margins.left,(i.containment==="document"?0:e(window).scrollTop())+(e(i.containment==="document"?document:window).height()||document.body.parentNode.scrollHeight)-this.helperProportions.height-this.margins.top];if(!/^(document|window|parent)$/.test(i.containment)&&i.containment.constructor!==Array){n=e(i.containment),r=n[0];if(!r)return;t=e(r).css("overflow")!=="hidden",this.containment=[(parseInt(e(r).css("borderLeftWidth"),10)||0)+(parseInt(e(r).css("paddingLeft"),10)||0),(parseInt(e(r).css("borderTopWidth"),10)||0)+(parseInt(e(r).css("paddingTop"),10)||0),(t?Math.max(r.scrollWidth,r.offsetWidth):r.offsetWidth)-(parseInt(e(r).css("borderLeftWidth"),10)||0)-(parseInt(e(r).css("paddingRight"),10)||0)-this.helperProportions.width-this.margins.left-this.margins.right,(t?Math.max(r.scrollHeight,r.offsetHeight):r.offsetHeight)-(parseInt(e(r).css("borderTopWidth"),10)||0)-(parseInt(e(r).css("paddingBottom"),10)||0)-this.helperProportions.height-this.margins.top-this.margins.bottom],this.relative_container=n}else i.containment.constructor===Array&&(this.containment=i.containment)},_convertPositionTo:function(t,n){n||(n=this.position);var r=t==="absolute"?1:-1,i=this.cssPosition!=="absolute"||this.scrollParent[0]!==document&&!!e.contains(this.scrollParent[0],this.offsetParent[0])?this.scrollParent:this.offsetParent,s=/(html|body)/i.test(i[0].tagName);return{top:n.top+this.offset.relative.top*r+this.offset.parent.top*r-(this.cssPosition==="fixed"?-this.scrollParent.scrollTop():s?0:i.scrollTop())*r,left:n.left+this.offset.relative.left*r+this.offset.parent.left*r-(this.cssPosition==="fixed"?-this.scrollParent.scrollLeft():s?0:i.scrollLeft())*r}},_generatePosition:function(t){var n,r,i,s,o=this.options,u=this.cssPosition!=="absolute"||this.scrollParent[0]!==document&&!!e.contains(this.scrollParent[0],this.offsetParent[0])?this.scrollParent:this.offsetParent,a=/(html|body)/i.test(u[0].tagName),f=t.pageX,l=t.pageY;return this.originalPosition&&(this.containment&&(this.relative_container?(r=this.relative_container.offset(),n=[this.containment[0]+r.left,this.containment[1]+r.top,this.containment[2]+r.left,this.containment[3]+r.top]):n=this.containment,t.pageX-this.offset.click.left<n[0]&&(f=n[0]+this.offset.click.left),t.pageY-this.offset.click.top<n[1]&&(l=n[1]+this.offset.click.top),t.pageX-this.offset.click.left>n[2]&&(f=n[2]+this.offset.click.left),t.pageY-this.offset.click.top>n[3]&&(l=n[3]+this.offset.click.top)),o.grid&&(i=o.grid[1]?this.originalPageY+Math.round((l-this.originalPageY)/o.grid[1])*o.grid[1]:this.originalPageY,l=n?i-this.offset.click.top>=n[1]||i-this.offset.click.top>n[3]?i:i-this.offset.click.top>=n[1]?i-o.grid[1]:i+o.grid[1]:i,s=o.grid[0]?this.originalPageX+Math.round((f-this.originalPageX)/o.grid[0])*o.grid[0]:this.originalPageX,f=n?s-this.offset.click.left>=n[0]||s-this.offset.click.left>n[2]?s:s-this.offset.click.left>=n[0]?s-o.grid[0]:s+o.grid[0]:s)),{top:l-this.offset.click.top-this.offset.relative.top-this.offset.parent.top+(this.cssPosition==="fixed"?-this.scrollParent.scrollTop():a?0:u.scrollTop()),left:f-this.offset.click.left-this.offset.relative.left-this.offset.parent.left+(this.cssPosition==="fixed"?-this.scrollParent.scrollLeft():a?0:u.scrollLeft())}},_clear:function(){this.helper.removeClass("ui-draggable-dragging"),this.helper[0]!==this.element[0]&&!this.cancelHelperRemoval&&this.helper.remove(),this.helper=null,this.cancelHelperRemoval=!1},_trigger:function(t,n,r){return r=r||this._uiHash(),e.ui.plugin.call(this,t,[n,r]),t==="drag"&&(this.positionAbs=this._convertPositionTo("absolute")),e.Widget.prototype._trigger.call(this,t,n,r)},plugins:{},_uiHash:function(){return{helper:this.helper,position:this.position,originalPosition:this.originalPosition,offset:this.positionAbs}}}),e.ui.plugin.add("draggable","connectToSortable",{start:function(t,n){var r=e(this).data("ui-draggable"),i=r.options,s=e.extend({},n,{item:r.element});r.sortables=[],e(i.connectToSortable).each(function(){var n=e.data(this,"ui-sortable");n&&!n.options.disabled&&(r.sortables.push({instance:n,shouldRevert:n.options.revert}),n.refreshPositions(),n._trigger("activate",t,s))})},stop:function(t,n){var r=e(this).data("ui-draggable"),i=e.extend({},n,{item:r.element});e.each(r.sortables,function(){this.instance.isOver?(this.instance.isOver=0,r.cancelHelperRemoval=!0,this.instance.cancelHelperRemoval=!1,this.shouldRevert&&(this.instance.options.revert=!0),this.instance._mouseStop(t),this.instance.options.helper=this.instance.options._helper,r.options.helper==="original"&&this.instance.currentItem.css({top:"auto",left:"auto"})):(this.instance.cancelHelperRemoval=!1,this.instance._trigger("deactivate",t,i))})},drag:function(t,n){var r=e(this).data("ui-draggable"),i=this;e.each(r.sortables,function(){var s=!1,o=this;this.instance.positionAbs=r.positionAbs,this.instance.helperProportions=r.helperProportions,this.instance.offset.click=r.offset.click,this.instance._intersectsWith(this.instance.containerCache)&&(s=!0,e.each(r.sortables,function(){return this.instance.positionAbs=r.positionAbs,this.instance.helperProportions=r.helperProportions,this.instance.offset.click=r.offset.click,this!==o&&this.instance._intersectsWith(this.instance.containerCache)&&e.contains(o.instance.element[0],this.instance.element[0])&&(s=!1),s})),s?(this.instance.isOver||(this.instance.isOver=1,this.instance.currentItem=e(i).clone().removeAttr("id").appendTo(this.instance.element).data("ui-sortable-item",!0),this.instance.options._helper=this.instance.options.helper,this.instance.options.helper=function(){return n.helper[0]},t.target=this.instance.currentItem[0],this.instance._mouseCapture(t,!0),this.instance._mouseStart(t,!0,!0),this.instance.offset.click.top=r.offset.click.top,this.instance.offset.click.left=r.offset.click.left,this.instance.offset.parent.left-=r.offset.parent.left-this.instance.offset.parent.left,this.instance.offset.parent.top-=r.offset.parent.top-this.instance.offset.parent.top,r._trigger("toSortable",t),r.dropped=this.instance.element,r.currentItem=r.element,this.instance.fromOutside=r),this.instance.currentItem&&this.instance._mouseDrag(t)):this.instance.isOver&&(this.instance.isOver=0,this.instance.cancelHelperRemoval=!0,this.instance.options.revert=!1,this.instance._trigger("out",t,this.instance._uiHash(this.instance)),this.instance._mouseStop(t,!0),this.instance.options.helper=this.instance.options._helper,this.instance.currentItem.remove(),this.instance.placeholder&&this.instance.placeholder.remove(),r._trigger("fromSortable",t),r.dropped=!1)})}}),e.ui.plugin.add("draggable","cursor",{start:function(){var t=e("body"),n=e(this).data("ui-draggable").options;t.css("cursor")&&(n._cursor=t.css("cursor")),t.css("cursor",n.cursor)},stop:function(){var t=e(this).data("ui-draggable").options;t._cursor&&e("body").css("cursor",t._cursor)}}),e.ui.plugin.add("draggable","opacity",{start:function(t,n){var r=e(n.helper),i=e(this).data("ui-draggable").options;r.css("opacity")&&(i._opacity=r.css("opacity")),r.css("opacity",i.opacity)},stop:function(t,n){var r=e(this).data("ui-draggable").options;r._opacity&&e(n.helper).css("opacity",r._opacity)}}),e.ui.plugin.add("draggable","scroll",{start:function(){var t=e(this).data("ui-draggable");t.scrollParent[0]!==document&&t.scrollParent[0].tagName!=="HTML"&&(t.overflowOffset=t.scrollParent.offset())},drag:function(t){var n=e(this).data("ui-draggable"),r=n.options,i=!1;if(n.scrollParent[0]!==document&&n.scrollParent[0].tagName!=="HTML"){if(!r.axis||r.axis!=="x")n.overflowOffset.top+n.scrollParent[0].offsetHeight-t.pageY<r.scrollSensitivity?n.scrollParent[0].scrollTop=i=n.scrollParent[0].scrollTop+r.scrollSpeed:t.pageY-n.overflowOffset.top<r.scrollSensitivity&&(n.scrollParent[0].scrollTop=i=n.scrollParent[0].scrollTop-r.scrollSpeed);if(!r.axis||r.axis!=="y")n.overflowOffset.left+n.scrollParent[0].offsetWidth-t.pageX<r.scrollSensitivity?n.scrollParent[0].scrollLeft=i=n.scrollParent[0].scrollLeft+r.scrollSpeed:t.pageX-n.overflowOffset.left<r.scrollSensitivity&&(n.scrollParent[0].scrollLeft=i=n.scrollParent[0].scrollLeft-r.scrollSpeed)}else{if(!r.axis||r.axis!=="x")t.pageY-e(document).scrollTop()<r.scrollSensitivity?i=e(document).scrollTop(e(document).scrollTop()-r.scrollSpeed):e(window).height()-(t.pageY-e(document).scrollTop())<r.scrollSensitivity&&(i=e(document).scrollTop(e(document).scrollTop()+r.scrollSpeed));if(!r.axis||r.axis!=="y")t.pageX-e(document).scrollLeft()<r.scrollSensitivity?i=e(document).scrollLeft(e(document).scrollLeft()-r.scrollSpeed):e(window).width()-(t.pageX-e(document).scrollLeft())<r.scrollSensitivity&&(i=e(document).scrollLeft(e(document).scrollLeft()+r.scrollSpeed))}i!==!1&&e.ui.ddmanager&&!r.dropBehaviour&&e.ui.ddmanager.prepareOffsets(n,t)}}),e.ui.plugin.add("draggable","snap",{start:function(){var t=e(this).data("ui-draggable"),n=t.options;t.snapElements=[],e(n.snap.constructor!==String?n.snap.items||":data(ui-draggable)":n.snap).each(function(){var n=e(this),r=n.offset();this!==t.element[0]&&t.snapElements.push({item:this,width:n.outerWidth(),height:n.outerHeight(),top:r.top,left:r.left})})},drag:function(t,n){var r,i,s,o,u,a,f,l,c,h,p=e(this).data("ui-draggable"),d=p.options,v=d.snapTolerance,m=n.offset.left,g=m+p.helperProportions.width,y=n.offset.top,b=y+p.helperProportions.height;for(c=p.snapElements.length-1;c>=0;c--){u=p.snapElements[c].left,a=u+p.snapElements[c].width,f=p.snapElements[c].top,l=f+p.snapElements[c].height;if(!(u-v<m&&m<a+v&&f-v<y&&y<l+v||u-v<m&&m<a+v&&f-v<b&&b<l+v||u-v<g&&g<a+v&&f-v<y&&y<l+v||u-v<g&&g<a+v&&f-v<b&&b<l+v)){p.snapElements[c].snapping&&p.options.snap.release&&p.options.snap.release.call(p.element,t,e.extend(p._uiHash(),{snapItem:p.snapElements[c].item})),p.snapElements[c].snapping=!1;continue}d.snapMode!=="inner"&&(r=Math.abs(f-b)<=v,i=Math.abs(l-y)<=v,s=Math.abs(u-g)<=v,o=Math.abs(a-m)<=v,r&&(n.position.top=p._convertPositionTo("relative",{top:f-p.helperProportions.height,left:0}).top-p.margins.top),i&&(n.position.top=p._convertPositionTo("relative",{top:l,left:0}).top-p.margins.top),s&&(n.position.left=p._convertPositionTo("relative",{top:0,left:u-p.helperProportions.width}).left-p.margins.left),o&&(n.position.left=p._convertPositionTo("relative",{top:0,left:a}).left-p.margins.left)),h=r||i||s||o,d.snapMode!=="outer"&&(r=Math.abs(f-y)<=v,i=Math.abs(l-b)<=v,s=Math.abs(u-m)<=v,o=Math.abs(a-g)<=v,r&&(n.position.top=p._convertPositionTo("relative",{top:f,left:0}).top-p.margins.top),i&&(n.position.top=p._convertPositionTo("relative",{top:l-p.helperProportions.height,left:0}).top-p.margins.top),s&&(n.position.left=p._convertPositionTo("relative",{top:0,left:u}).left-p.margins.left),o&&(n.position.left=p._convertPositionTo("relative",{top:0,left:a-p.helperProportions.width}).left-p.margins.left)),!p.snapElements[c].snapping&&(r||i||s||o||h)&&p.options.snap.snap&&p.options.snap.snap.call(p.element,t,e.extend(p._uiHash(),{snapItem:p.snapElements[c].item})),p.snapElements[c].snapping=r||i||s||o||h}}}),e.ui.plugin.add("draggable","stack",{start:function(){var t,n=this.data("ui-draggable").options,r=e.makeArray(e(n.stack)).sort(function(t,n){return(parseInt(e(t).css("zIndex"),10)||0)-(parseInt(e(n).css("zIndex"),10)||0)});if(!r.length)return;t=parseInt(e(r[0]).css("zIndex"),10)||0,e(r).each(function(n){e(this).css("zIndex",t+n)}),this.css("zIndex",t+r.length)}}),e.ui.plugin.add("draggable","zIndex",{start:function(t,n){var r=e(n.helper),i=e(this).data("ui-draggable").options;r.css("zIndex")&&(i._zIndex=r.css("zIndex")),r.css("zIndex",i.zIndex)},stop:function(t,n){var r=e(this).data("ui-draggable").options;r._zIndex&&e(n.helper).css("zIndex",r._zIndex)}})})(jQuery);
/*
 *  lazydom
 *  @author suoyong@leju.sina.com.cn
 *  @version    $Id$
 */
(function($){
    $.tools = $.tools || {version: '1.0'};
    $.tools.lazydom = {
        items : null,  //需要延时的DOM集合,传入数组或表达式。默认$(".lazydom")
        render : function(){
                var textarea = this.children('textarea');
                if(textarea.length>0){
					var self = this;
                    setTimeout(function(){self.html(textarea.val())},100);
                }
            }, //渲染处理 ,默认处理函数为提前item中textarea值
        direction : "y", //方向 x,y,xy
        delay : 0, //延时响应时间，压力比较大时，可设置scroll时多少时间响应一次
        before : 50 //提前量
    };
    var instances = [];
    function Lazydom(handle,conf){
        var self = handle,
              taskbox= [] ,
              items = [],
              m = 1,
              xycounter = 0,
              before = Number(conf.before),
              dir = [],
              win = window,
              isWindow = self[0].setTimeout ? true : false ;

        //deal data
        if(conf.items != null){
            if(conf.items.jquery || $.isArray(conf.items)){
                taskbox = conf.items;
            }else if(typeof conf.items == "string"){
                taskbox = $(conf.items);
            }
        }else {
            taskbox = $(".lazydom");
        }
        if(taskbox.length<=0)return;
        //set position
        if(!isWindow){
            var position = self.css("position");
            if(position != "absolute" && position !="relative"){
                self.css("position","relative");
            }
        }

        $.each(taskbox,function(i,n){
            var n = $(n);
            items.push({
                left : isWindow ? n.offset().left : n.position().left,
                top : isWindow ? n.offset().top : n.position().top,
                w : n.outerWidth(true),
                h : n.outerHeight(true),
                obj : n
            })
        });
        
        //set direction
        var direction = conf.direction.toUpperCase();
        if(direction == "Y"){
            dir = "top";
        }else if(direction == "X"){
            dir = "left";
        }else {
            dir = 0;
        }

        $.extend(self,{
            getOffset : function(){
                if(isWindow && !jQuery.support.boxModel){
                    //hack for jquery $(window).scrollTop() bug in IE
                    jQuery.support.boxModel = true;
                    var obj = {
                        top : self.scrollTop()+self.height(),
                        left : self.scrollLeft()+self.width()
                    };
                    jQuery.support.boxModel = false;
                    return obj;
                }else {
                    return {
                        top : self.scrollTop()+self.height(),
                        left : self.scrollLeft()+self.width()
                    };
                }
                
            },
            monitor : function(){
                var offset = self.getOffset();
                if(dir){
                    var i = 0,len = items.length;
                    if(len<=0){
                        self.unbindEvent();
                        return;
                    }
                    for(;i<len;i++){
                        var it = items[0];
                        if(offset[dir]+before>=it[dir]){
                            conf.render.call(items.shift().obj);
                        }else {
                            return false;
                        }
                    }
                }else {
                    //xy direction
                    var i = 0,len = items.length;
                    if(xycounter>=len){
                        self.unbindEvent();
                        return;
                    }
                    for(;i<len;i++){
                        var it = items[i];
                        if(it !=undefined && offset["top"]+before>=it["top"] && offset["left"]+before>=it["left"]){
                            conf.render.call(it.obj);
                            items[i] = undefined;
                            xycounter++;
                        }
                    }
                }
            },
            limitTimes : function(fn){
                    if(!m){return;}
                    m = 0;
                    setTimeout(function(){
                        m = 1;
                        fn();
                    }, conf.delay);
            },
            unbindEvent : function(){
                self.unbind("scroll.lazydom");
                $(window).unbind("resize.lazydom");
            }
        });
        $(window).bind("resize.lazydom",function(){
            self.monitor();
        });

        self.ready(function(){
            self.monitor();
        });
        if(conf.delay<=0){
            self.bind("scroll.lazydom",function(){
                self.monitor();
            });
        }else {
            self.bind("scroll.lazydom",function(){
                self.limitTimes(self.monitor);
            });
        }
    }



    $.fn.lazydom = function(options,fn){
        var el = this.data("lazydom");
        if(el)return;
        if($.isFunction(options)){
            fn = options;
            options = $.extend({}, $.tools.lazydom);
        }else {
            options = $.extend({}, $.tools.lazydom, options);
        }
        this.each(function() {
            el = new Lazydom($(this), options);
            instances.push(el);
            $(this).data("lazydom", el);
        });

        return options.api ? el: this;
    }
   
    $.extend({
        lazydom : function(options,fn){
            return $(window).lazydom(options,fn);
        }
    });
})(jQuery);
/*! Lazy Load 1.9.3 - MIT license - Copyright 2010-2013 Mika Tuupola */
!function(a,b,c,d){var e=a(b);a.fn.lazyload=function(f){function g(){var b=0;i.each(function(){var c=a(this);if(!j.skip_invisible||c.is(":visible"))if(a.abovethetop(this,j)||a.leftofbegin(this,j));else if(a.belowthefold(this,j)||a.rightoffold(this,j)){if(++b>j.failure_limit)return!1}else c.trigger("appear"),b=0})}var h,i=this,j={threshold:0,failure_limit:0,event:"scroll",effect:"show",container:b,data_attribute:"original",skip_invisible:!0,appear:null,load:null,placeholder:"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"};return f&&(d!==f.failurelimit&&(f.failure_limit=f.failurelimit,delete f.failurelimit),d!==f.effectspeed&&(f.effect_speed=f.effectspeed,delete f.effectspeed),a.extend(j,f)),h=j.container===d||j.container===b?e:a(j.container),0===j.event.indexOf("scroll")&&h.bind(j.event,function(){return g()}),this.each(function(){var b=this,c=a(b);b.loaded=!1,(c.attr("src")===d||c.attr("src")===!1)&&c.is("img")&&c.attr("src",j.placeholder),c.one("appear",function(){if(!this.loaded){if(j.appear){var d=i.length;j.appear.call(b,d,j)}a("<img />").bind("load",function(){var d=c.attr("data-"+j.data_attribute);c.hide(),c.is("img")?c.attr("src",d):c.css("background-image","url('"+d+"')"),c[j.effect](j.effect_speed),b.loaded=!0;var e=a.grep(i,function(a){return!a.loaded});if(i=a(e),j.load){var f=i.length;j.load.call(b,f,j)}}).attr("src",c.attr("data-"+j.data_attribute))}}),0!==j.event.indexOf("scroll")&&c.bind(j.event,function(){b.loaded||c.trigger("appear")})}),e.bind("resize",function(){g()}),/(?:iphone|ipod|ipad).*os 5/gi.test(navigator.appVersion)&&e.bind("pageshow",function(b){b.originalEvent&&b.originalEvent.persisted&&i.each(function(){a(this).trigger("appear")})}),a(c).ready(function(){g()}),this},a.belowthefold=function(c,f){var g;return g=f.container===d||f.container===b?(b.innerHeight?b.innerHeight:e.height())+e.scrollTop():a(f.container).offset().top+a(f.container).height(),g<=a(c).offset().top-f.threshold},a.rightoffold=function(c,f){var g;return g=f.container===d||f.container===b?e.width()+e.scrollLeft():a(f.container).offset().left+a(f.container).width(),g<=a(c).offset().left-f.threshold},a.abovethetop=function(c,f){var g;return g=f.container===d||f.container===b?e.scrollTop():a(f.container).offset().top,g>=a(c).offset().top+f.threshold+a(c).height()},a.leftofbegin=function(c,f){var g;return g=f.container===d||f.container===b?e.scrollLeft():a(f.container).offset().left,g>=a(c).offset().left+f.threshold+a(c).width()},a.inviewport=function(b,c){return!(a.rightoffold(b,c)||a.leftofbegin(b,c)||a.belowthefold(b,c)||a.abovethetop(b,c))},a.extend(a.expr[":"],{"below-the-fold":function(b){return a.belowthefold(b,{threshold:0})},"above-the-top":function(b){return!a.belowthefold(b,{threshold:0})},"right-of-screen":function(b){return a.rightoffold(b,{threshold:0})},"left-of-screen":function(b){return!a.rightoffold(b,{threshold:0})},"in-viewport":function(b){return a.inviewport(b,{threshold:0})},"above-the-fold":function(b){return!a.belowthefold(b,{threshold:0})},"right-of-fold":function(b){return a.rightoffold(b,{threshold:0})},"left-of-fold":function(b){return!a.rightoffold(b,{threshold:0})}})}(jQuery,window,document);
/**
 * @license 
 * jQuery Tools @VERSION Tabs- The basics of UI design.
 * 
 * NO COPYRIGHTS OR LICENSES. DO WHAT YOU LIKE.
 * 
 * http://flowplayer.org/tools/tabs/
 *
 * Since: November 2008
 * Date: @DATE 
 */  
(function ($) {

    // static constructs
    $.tools = $.tools || { version: '@VERSION' };

    $.tools.tabs = {

        conf: {
            tabs: 'a',
            current: 'current',
            onBeforeClick: null,
            onClick: null,
            effect: 'default',
            initialIndex: 0,
            event: 'click',
            rotate: false,

            // slide effect
            slideUpSpeed: 400,
            slideDownSpeed: 400,

            // 1.2
            history: false
        },

        addEffect: function (name, fn) {
            effects[name] = fn;
        }

    };

    var effects = {

        // simple "toggle" effect
        'default': function (i, done) {
            this.getPanes().hide().eq(i).show();
            done.call();
        },

        /*
        configuration:
        - fadeOutSpeed (positive value does "crossfading")
        - fadeInSpeed
        */
        fade: function (i, done) {

            var conf = this.getConf(),
				 speed = conf.fadeOutSpeed,
				 panes = this.getPanes();

            if (speed) {
                panes.fadeOut(speed);
            } else {
                panes.hide();
            }

            panes.eq(i).fadeIn(conf.fadeInSpeed, done);
        },

        // for basic accordions
        slide: function (i, done) {
            var conf = this.getConf();

            this.getPanes().slideUp(conf.slideUpSpeed);
            this.getPanes().eq(i).slideDown(conf.slideDownSpeed, done);
        },

        /**
        * AJAX effect
        */
        ajax: function (i, done) {
            var tab = this.getTabs().eq(i);
            var href = tab.attr("href");
            if (typeof (tab.attr("url")) != "undefined") {
                href = tab.attr("url");
            }
            if (href.indexOf("?") != -1) {
                href += "&tmptime" + (new Date()).getTime()
            } else {
                href += "?tmptime" + (new Date()).getTime()
            }
            //this.getPanes().eq(0).load(this.getTabs().eq(i).attr("href"), done);
            this.getPanes().eq(0).load(href, done);
        }
    };

    /**
    * Horizontal accordion
    * 
    * @deprecated will be replaced with a more robust implementation
    */

    var 
    /**
    *   @type {Boolean}
    *
    *   Mutex to control horizontal animation
    *   Disables clicking of tabs while animating
    *   They mess up otherwise as currentPane gets set *after* animation is done
    */
	  animating,
    /**
    *   @type {Number}
    *   
    *   Initial width of tab panes
    */
	  w;

    $.tools.tabs.addEffect("horizontal", function (i, done) {
        if (animating) return;    // don't allow other animations

        var nextPane = this.getPanes().eq(i),
	      currentPane = this.getCurrentPane();

        // store original width of a pane into memory
        w || (w = this.getPanes().eq(0).width());
        animating = true;

        nextPane.show(); // hidden by default

        // animate current pane's width to zero
        // animate next pane's width at the same time for smooth animation
        currentPane.animate({ width: 0 }, {
            step: function (now) {
                nextPane.css("width", w - now);
            },
            complete: function () {
                $(this).hide();
                done.call();
                animating = false;
            }
        });
        // Dirty hack...  onLoad, currentPant will be empty and nextPane will be the first pane
        // If this is the case, manually run callback since the animation never occured, and reset animating
        if (!currentPane.length) {
            done.call();
            animating = false;
        }
    });


    function Tabs(root, paneSelector, conf) {

        var self = this,
			 trigger = root.add(this),
			 tabs = root.find(conf.tabs),
			 panes = (paneSelector &&  paneSelector.jquery) ? paneSelector : root.children(paneSelector),
			 current;


        // make sure tabs and panes are found
        if (!tabs.length) { tabs = root.children(); }
        if (!panes.length) { panes = root.parent().find(paneSelector); }
        if (!panes.length) { panes = $(paneSelector); }


        // public methods
        $.extend(this, {
            click: function (i, e) {
                var tab = tabs.eq(i);

                if (typeof i == 'string' && i.replace("#", "")) {
                    tab = tabs.filter("[href*=" + i.replace("#", "") + "]");
                    i = Math.max(tabs.index(tab), 0);
                }

                if (conf.rotate) {
                    var last = tabs.length - 1;
                    if (i < 0) { return self.click(last, e); }
                    if (i > last) { return self.click(0, e); }
                }

                if (!tab.length) {
                    if (current >= 0) { return self; }
                    i = conf.initialIndex;
                    tab = tabs.eq(i);
                }

                // possibility to cancel click action
                e = e || $.Event();
                e.type = "onBeforeClick";
                trigger.trigger(e, [i]);
                if (e.isDefaultPrevented()) { return; }
                // current tab is being clicked
                if (i === current) { return self; }
                // call the effect
                effects[conf.effect].call(self, i, function () {
                    current = i;
                    // onClick callback
                    e.type = "onClick";
                    trigger.trigger(e, [i]);
                });

                // default behaviour
                tabs.removeClass(conf.current);
                tab.addClass(conf.current);

                return self;
            },

            getConf: function () {
                return conf;
            },

            getTabs: function () {
                return tabs;
            },

            getPanes: function () {
                return panes;
            },

            getCurrentPane: function () {
                return panes.eq(current);
            },

            getCurrentTab: function () {
                return tabs.eq(current);
            },

            getIndex: function () {
                return current;
            },

            next: function () {
                return self.click(current + 1);
            },

            prev: function () {
                return self.click(current - 1);
            },

            destroy: function () {
                tabs.unbind(conf.event).removeClass(conf.current);
                panes.find("a[href^=#]").unbind("click.T");
                return self;
            }

        });

        // callbacks
        $.each("onBeforeClick,onClick".split(","), function (i, name) {

            // configuration
            if ($.isFunction(conf[name])) {
                $(self).bind(name, conf[name]);
            }

            // API
            self[name] = function (fn) {
                if (fn) { $(self).bind(name, fn); }
                return self;
            };
        });


        if (conf.history && $.fn.history) {
            $.tools.history.init(tabs);
            conf.event = 'history';
        }

        // setup click actions for each tab
        tabs.each(function (i) {
            $(this).bind(conf.event, function (e) {
                self.click(i, e);
                e.stopPropagation();
                return e.preventDefault();
            });
        });

        // cross tab anchor link
        panes.find("a[href^=#]").bind("click.T", function (e) {
            self.click($(this).attr("href"), e);
        });

        // open initial tab
        /*if (location.hash && conf.tabs == "a" && root.find("[href=" + location.hash + "]").length) {
        self.click(location.hash);

        } else {*/
        if (conf.initialIndex === 0 || conf.initialIndex > 0) {
            self.click(conf.initialIndex);
        }
        /*}*/

    }


    // jQuery plugin implementation
    $.fn.tabs = function (paneSelector, conf) {

        // return existing instance
        var el = this.data("tabs");
        if (el) {
            el.destroy();
            this.removeData("tabs");
        }

        if ($.isFunction(conf)) {
            conf = { onBeforeClick: conf };
        }

        // setup conf
        conf = $.extend({}, $.tools.tabs.conf, conf);


        this.each(function () {
            el = new Tabs($(this), paneSelector, conf);
            $(this).data("tabs", el);
        });

        return conf.api ? el : this;
    };

})(jQuery); 
/*!
 * jquery-powerFloat.js
 * jQuery 万能浮动层插件
 * http://www.zhangxinxu.com/wordpress/?p=1328
 * © by zhangxinxu  
 * 2010-12-06 v1.0.0	插件编写，初步调试
 * 2010-12-30 v1.0.1	限定尖角字符字体，避免受浏览器自定义字体干扰
 * 2011-01-03 v1.1.0	修复连续获得焦点显示后又隐藏的bug
 						修复图片加载正则判断不准确的问题
 * 2011-02-15 v1.1.1	关于居中对齐位置判断的特殊处理
 * 2011-04-15 v1.2.0	修复浮动层含有过高select框在IE下点击会隐藏浮动层的问题，同时优化事件绑定			
 * 2011-09-13 v1.3.0 	修复两个菜单hover时间间隔过短隐藏回调不执行的问题
 * 2012-01-13 v1.4.0	去除ajax加载的存储
                    	修复之前按照ajax地址后缀判断是否图片的问题
						修复一些脚本运行出错
						修复hover延时显示时，元素没有显示但鼠标移出依然触发隐藏回调的问题
 * 2012-02-27 v1.5.0	为无id容器创建id逻辑使用错误的问题
 						修复无事件浮动出现时同页面点击空白区域浮动层不隐藏的问题
						修复点击与hover并存时特定时候o.trigger报为null错误的问题
 * 2012-03-29 v1.5.1	修复连续hover时候后面一个不触发显示的问题
 * 2012-05-02 v1.5.2	点击事件 浮动框再次点击隐藏的问题修复
 * 2012-11-02 v1.6.0	兼容jQuery 1.8.2
 * 2012-01-28 v1.6.1	target参数支持funtion类型，以实现类似动态Ajax地址功能
 */

(function ($) {
    $.fn.powerFloat = function (options) {
        return $(this).each(function () {
            var s = $.extend({}, defaults, options || {});
            var init = function (pms, trigger) {
                if (o.target && o.target.css("display") !== "none") {
                    o.targetHide();
                }
                o.s = pms;
                o.trigger = trigger;
            }, hoverTimer;

            switch (s.eventType) {
                case "hover": {
                    $(this).hover(function () {
                        if (o.timerHold) {
                            o.flagDisplay = true;
                        }

                        var numShowDelay = parseInt(s.showDelay, 10);

                        init(s, $(this));
                        //鼠标hover延时
                        if (numShowDelay) {
                            if (hoverTimer) {
                                clearTimeout(hoverTimer);
                            }
                            hoverTimer = setTimeout(function () {
                                o.targetGet.call(o);
                            }, numShowDelay);
                        } else {
                            o.targetGet();
                        }
                    }, function () {
                        if (hoverTimer) {
                            clearTimeout(hoverTimer);
                        }
                        if (o.timerHold) {
                            clearTimeout(o.timerHold);
                        }

                        o.flagDisplay = false;

                        o.targetHold();
                    });
                    if (s.hoverFollow) {
                        //鼠标跟随	
                        $(this).mousemove(function (e) {
                            o.cacheData.left = e.pageX;
                            o.cacheData.top = e.pageY;
                            o.targetGet.call(o);
                            return false;
                        });
                    }
                    break;
                }
                case "degHover": {
                    $(this).on("mouseover", s.degElem,function (ev) {
                        if (o.timerHold) {
                            o.flagDisplay = true;
                        }
                        var numShowDelay = parseInt(s.showDelay, 10);
                        init(s, $(this));
                        if (numShowDelay) {
                            if (hoverTimer) {
                                clearTimeout(hoverTimer);
                            }
                            hoverTimer = setTimeout(function () {
                                o.targetGet.call(o);
                            }, numShowDelay);
                        } else {
                            o.targetGet();
                        }
                    });

                    $(this).on("mouseout",s.degElem, function () {
                        if (hoverTimer) {
                            clearTimeout(hoverTimer);
                        }
                        if (o.timerHold) {
                            clearTimeout(o.timerHold);
                        }

                        o.flagDisplay = false;

                        o.targetHold();
                    });
                    break;
                }
                case "click": {
                    $(this).click(function (e) {
                        if (o.display && o.trigger && e.target === o.trigger.get(0)) {
                            o.flagDisplay = false;
                            o.displayDetect();
                        } else {
                            init(s, $(this));
                            o.targetGet();

                            if (!$(document).data("mouseupBind")) {
                                $(document).bind("mouseup", function (e) {
                                    var flag = false;
                                    if (o.trigger) {
                                        var idTarget = o.target.attr("id");
                                        if (!idTarget) {
                                            idTarget = "R_" + Math.random();
                                            o.target.attr("id", idTarget);
                                        }
                                        $(e.target).parents().each(function () {
                                            if ($(this).attr("id") === idTarget) {
                                                flag = true;
                                            }
                                        });
                                        if (s.eventType === "click" && o.display && e.target != o.trigger.get(0) && !flag) {
                                            o.flagDisplay = false;
                                            o.displayDetect();
                                        }
                                    }
                                    return false;
                                }).data("mouseupBind", true);
                            }
                        }
                    });

                    break;
                }
                case "focus": {
                    $(this).focus(function () {
                        var self = $(this);
                        setTimeout(function () {
                            init(s, self);
                            o.targetGet();
                        }, 200);
                    }).blur(function () {
                        o.flagDisplay = false;
                        setTimeout(function () {
                            o.displayDetect();
                        }, 190);
                    });
                    break;
                }
                case "custom":
                    {
                        this.showpl = function () {

                            var self = $(this);
                            setTimeout(function () {
                                init(s, self);
                                o.targetGet();
                            }, 200);
                        };

                        this.hidepl = function () {
                            o.flagDisplay = false;
                            setTimeout(function () {
                                o.displayDetect();
                            }, 190);
                        };

                        this.clear = function () {
                            this.showpl = function () { };
                            this.hidepl = function () { };
                        }

                        break;
                    }

                default: {
                    init(s, $(this));
                    o.targetGet();
                    // 放置页面点击后显示的浮动内容隐掉
                    $(document).unbind("mouseup").data("mouseupBind", false);
                }
            }
        });
    };

    var o = {
        targetGet: function () {
            //一切显示的触发来源
            if (!this.trigger) { return this; }
            var attr = this.trigger.attr(this.s.targetAttr), target = typeof this.s.target == "function" ? this.s.target.call(this.trigger) : this.s.target;

            switch (this.s.targetMode) {
                case "common": {
                    if (target) {
                        var type = typeof (target);
                        if (type === "object") {
                            if (target.size()) {
                                o.target = target.eq(0);
                            }
                        } else if (type === "string") {
                            if ($(target).size()) {
                                o.target = $(target).eq(0);
                            }
                        }
                    } else {
                        if (attr && $("#" + attr).size()) {
                            o.target = $("#" + attr);
                        }
                    }
                    if (o.target) {
                        o.targetShow();
                    } else {
                        return this;
                    }

                    break;
                }
                case "ajax": {
                    //ajax元素，如图片，页面地址
                    var url = target || attr;
                    this.targetProtect = false;

                    if (!url) { return; }

                    if (!o.cacheData[url]) {
                        o.loading();
                    }

                    //优先认定为图片加载
                    var tempImage = new Image();

                    tempImage.onload = function () {
                        var w = tempImage.width, h = tempImage.height;
                        var winw = $(window).width(), winh = $(window).height();
                        var imgScale = w / h, winScale = winw / winh;
                        if (imgScale > winScale) {
                            //图片的宽高比大于显示屏幕
                            if (w > winw / 2) {
                                w = winw / 2;
                                h = w / imgScale;
                            }
                        } else {
                            //图片高度较高
                            if (h > winh / 2) {
                                h = winh / 2;
                                w = h * imgScale;
                            }
                        }
                        var imgHtml = '<img class="float_ajax_image" src="' + url + '" width="' + w + '" height = "' + h + '" />';
                        o.cacheData[url] = true;
                        o.target = $(imgHtml);
                        o.targetShow();
                    };
                    tempImage.onerror = function () {
                        //如果图片加载失败，两种可能，一是100%图片，则提示；否则作为页面加载
                        if (/(\.jpg|\.png|\.gif|\.bmp|\.jpeg)$/i.test(url)) {
                            o.target = $('<div class="float_ajax_error">图片加载失败。</div>');
                            o.targetShow();
                        } else {
                            $.ajax({
                                url: url,
                                success: function (data) {
                                    if (typeof (data) === "string") {
                                        o.cacheData[url] = true;
                                        o.target = $('<div class="float_ajax_data">' + data + '</div>');
                                        o.targetShow();
                                    }
                                },
                                error: function () {
                                    o.target = $('<div class="float_ajax_error">数据没有加载成功。</div>');
                                    o.targetShow();
                                }
                            });
                        }
                    };
                    tempImage.src = url;

                    break;
                }
                case "list": {
                    //下拉列表
                    var targetHtml = '<ul class="float_list_ul">', arrLength;
                    if ($.isArray(target) && (arrLength = target.length)) {
                        $.each(target, function (i, obj) {
                            var list = "", strClass = "", text, href;
                            if (i === 0) {
                                strClass = ' class="float_list_li_first"';
                            }
                            if (i === arrLength - 1) {
                                strClass = ' class="float_list_li_last"';
                            }
                            if (typeof (obj) === "object" && (text = obj.text.toString())) {
                                if (href = (obj.href || "javascript:")) {
                                    list = '<a href="' + href + '" class="float_list_a">' + text + '</a>';
                                } else {
                                    list = text;
                                }
                            } else if (typeof (obj) === "string" && obj) {
                                list = obj;
                            }
                            if (list) {
                                targetHtml += '<li' + strClass + '>' + list + '</li>';
                            }
                        });
                    } else {
                        targetHtml += '<li class="float_list_null">列表无数据。</li>';
                    }
                    targetHtml += '</ul>';
                    o.target = $(targetHtml);
                    this.targetProtect = false;
                    o.targetShow();
                    break;
                }
                case "remind": {
                    //内容均是字符串
                    var strRemind = target || attr;
                    this.targetProtect = false;
                    if (typeof (strRemind) === "string") {
                        o.target = $('<span>' + strRemind + '</span>');
                        o.targetShow();
                    }
                    break;
                }
                default: {
                    var objOther = target || attr, type = typeof (objOther);
                    if (objOther) {
                        if (type === "string") {
                            //选择器
                            if (/^.[^:#\[\.,]*$/.test(objOther)) {
                                if ($(objOther).size()) {
                                    o.target = $(objOther).eq(0);
                                    this.targetProtect = true;
                                } else if ($("#" + objOther).size()) {
                                    o.target = $("#" + objOther).eq(0);
                                    this.targetProtect = true;
                                } else {
                                    o.target = $('<div>' + objOther + '</div>');
                                    this.targetProtect = false;
                                }
                            } else {
                                o.target = $('<div>' + objOther + '</div>');
                                this.targetProtect = false;
                            }

                            o.targetShow();
                        } else if (type === "object") {
                            if (!$.isArray(objOther) && objOther.size()) {
                                o.target = objOther.eq(0);
                                this.targetProtect = true;
                                o.targetShow();
                            }
                        }
                    }
                }
            }
            return this;
        },
        container: function () {
            //容器(如果有)重装target
            var cont = this.s.container, mode = this.s.targetMode || "mode";
            if (mode === "ajax" || mode === "remind") {
                //显示三角
                this.s.sharpAngle = true;
            } else {
                this.s.sharpAngle = false;
            }
            //是否反向
            if (this.s.reverseSharp) {
                this.s.sharpAngle = !this.s.sharpAngle;
            }

            if (mode !== "common") {
                //common模式无新容器装载
                if (cont === null) {
                    cont = "plugin";
                }
                if (cont === "plugin") {
                    if (!$("#floatBox_" + mode).size()) {
                        $('<div id="floatBox_' + mode + '" class="float_' + mode + '_box"></div>').appendTo($("body")).hide();
                    }
                    cont = $("#floatBox_" + mode);
                }

                if (cont && typeof (cont) !== "string" && cont.size()) {
                    if (this.targetProtect) {
                        o.target.show().css("position", "static");
                    }
                    o.target = cont.empty().append(o.target);
                }
            }
            return this;
        },
        setWidth: function () {
            var w = this.s.width;
            if (w === "auto") {
                if (this.target.get(0).style.width) {
                    this.target.css("width", "auto");
                }
            } else if (w === "inherit") {
                this.target.width(this.trigger.width());
            } else {
                this.target.css("width", w);
            }
            return this;
        },
        position: function () {
            if (!this.trigger || !this.target) {
                return this;
            }
            var pos, tri_h = 0, tri_w = 0, cor_w = 0, cor_h = 0, tri_l, tri_t, tar_l, tar_t, cor_l, cor_t,
				tar_h = this.target.data("height"), tar_w = this.target.data("width"),
				st = $(window).scrollTop(),

				off_x = parseInt(this.s.offsets.x, 10) || 0, off_y = parseInt(this.s.offsets.y, 10) || 0,
				mousePos = this.cacheData;
            //缓存目标对象高度，宽度，提高鼠标跟随时显示性能，元素隐藏时缓存清除
            if (!tar_h) {
                tar_h = this.target.outerHeight();
                if (this.s.hoverFollow) {
                    this.target.data("height", tar_h);
                }
            }
            if (!tar_w) {
                tar_w = this.target.outerWidth();
                if (this.s.hoverFollow) {
                    this.target.data("width", tar_w);
                }
            }

            pos = this.trigger.offset();
            tri_h = this.trigger.outerHeight();
            tri_w = this.trigger.outerWidth();
            tri_l = pos.left;
            tri_t = pos.top;

            var funMouseL = function () {
                if (tri_l < 0) {
                    tri_l = 0;
                } else if (tri_l + tri_h > $(window).width()) {
                    tri_l = $(window).width() - tri_w;
                }
            }, funMouseT = function () {
                if (tri_t < 0) {
                    tri_t = 0;
                } else if (tri_t + tri_h > $(document).height()) {
                    tri_t = $(document).height() - tri_h;
                }
            };
            //如果是鼠标跟随
            if (this.s.hoverFollow && mousePos.left && mousePos.top) {
                if (this.s.hoverFollow === "x") {
                    //水平方向移动，说明纵坐标固定
                    tri_l = mousePos.left
                    funMouseL();
                } else if (this.s.hoverFollow === "y") {
                    //垂直方向移动，说明横坐标固定，纵坐标跟随鼠标移动
                    tri_t = mousePos.top;
                    funMouseT();
                } else {
                    tri_l = mousePos.left;
                    tri_t = mousePos.top;
                    funMouseL();
                    funMouseT();
                }
            }


            var arrLegalPos = ["4-1", "1-4", "5-7", "2-3", "2-1", "6-8", "3-4", "4-3", "8-6", "1-2", "7-5", "3-2"],
				align = this.s.position, alignMatch = false, strDirect;
            $.each(arrLegalPos, function (i, n) {
                if (n === align) {
                    alignMatch = true;
                    return;
                }
            });
            if (!alignMatch) {
                align = "4-1";
            }

            var funDirect = function (a) {
                var dir = "bottom";
                //确定方向
                switch (a) {
                    case "1-4": case "5-7": case "2-3": {
                        dir = "top";
                        break;
                    }
                    case "2-1": case "6-8": case "3-4": {
                        dir = "right";
                        break;
                    }
                    case "1-2": case "8-6": case "4-3": {
                        dir = "left";
                        break;
                    }
                    case "4-1": case "7-5": case "3-2": {
                        dir = "bottom";
                        break;
                    }
                }
                return dir;
            };

            //居中判断
            var funCenterJudge = function (a) {
                if (a === "5-7" || a === "6-8" || a === "8-6" || a === "7-5") {
                    return true;
                }
                return false;
            };

            var funJudge = function (dir) {
                var totalHeight = 0, totalWidth = 0, flagCorner = (o.s.sharpAngle && o.corner) ? true : false;
                if (dir === "right") {
                    totalWidth = tri_l + tri_w + tar_w + off_x;
                    if (flagCorner) {
                        totalWidth += o.corner.width();
                    }
                    if (totalWidth > $(window).width()) {
                        return false;
                    }
                } else if (dir === "bottom") {
                    totalHeight = tri_t + tri_h + tar_h + off_y;
                    if (flagCorner) {
                        totalHeight += o.corner.height();
                    }
                    if (totalHeight > st + $(window).height()) {
                        return false;
                    }
                } else if (dir === "top") {
                    totalHeight = tar_h + off_y;
                    if (flagCorner) {
                        totalHeight += o.corner.height();
                    }
                    if (totalHeight > tri_t - st) {
                        return false;
                    }
                } else if (dir === "left") {
                    totalWidth = tar_w + off_x;
                    if (flagCorner) {
                        totalWidth += o.corner.width();
                    }
                    if (totalWidth > tri_l) {
                        return false;
                    }
                }
                return true;
            };
            //此时的方向
            strDirect = funDirect(align);

            if (this.s.sharpAngle) {
                //创建尖角
                this.createSharp(strDirect);
            }

            //边缘过界判断
            if (this.s.edgeAdjust) {
                //根据位置是否溢出显示界面重新判定定位
                if (funJudge(strDirect)) {
                    //该方向不溢出
                    (function () {
                        if (funCenterJudge(align)) { return; }
                        var obj = {
                            top: {
                                right: "2-3",
                                left: "1-4"
                            },
                            right: {
                                top: "2-1",
                                bottom: "3-4"
                            },
                            bottom: {
                                right: "3-2",
                                left: "4-1"
                            },
                            left: {
                                top: "1-2",
                                bottom: "4-3"
                            }
                        };
                        var o = obj[strDirect], name;
                        if (o) {
                            for (name in o) {
                                if (!funJudge(name)) {
                                    align = o[name];
                                }
                            }
                        }
                    })();
                } else {
                    //该方向溢出
                    (function () {
                        if (funCenterJudge(align)) {
                            var center = {
                                "5-7": "7-5",
                                "7-5": "5-7",
                                "6-8": "8-6",
                                "8-6": "6-8"
                            };
                            align = center[align];
                        } else {
                            var obj = {
                                top: {
                                    left: "3-2",
                                    right: "4-1"
                                },
                                right: {
                                    bottom: "1-2",
                                    top: "4-3"
                                },
                                bottom: {
                                    left: "2-3",
                                    right: "1-4"
                                },
                                left: {
                                    bottom: "2-1",
                                    top: "3-4"
                                }
                            };
                            var o = obj[strDirect], arr = [];
                            for (name in o) {
                                arr.push(name);
                            }
                            if (funJudge(arr[0]) || !funJudge(arr[1])) {
                                align = o[arr[0]];
                            } else {
                                align = o[arr[1]];
                            }
                        }
                    })();
                }
            }

            //已确定的尖角
            var strNewDirect = funDirect(align), strFirst = align.split("-")[0];
            if (this.s.sharpAngle) {
                //创建尖角
                this.createSharp(strNewDirect);
                cor_w = this.corner.width(), cor_h = this.corner.height();
            }

            //确定left, top值
            if (this.s.hoverFollow) {
                //如果鼠标跟随
                if (this.s.hoverFollow === "x") {
                    //仅水平方向跟随
                    tar_l = tri_l + off_x;
                    if (strFirst === "1" || strFirst === "8" || strFirst === "4") {
                        //最左
                        tar_l = tri_l - (tar_w - tri_w) / 2 + off_x;
                    } else {
                        //右侧
                        tar_l = tri_l - (tar_w - tri_w) + off_x;
                    }

                    //这是垂直位置，固定不动
                    if (strFirst === "1" || strFirst === "5" || strFirst === "2") {
                        tar_t = tri_t - off_y - tar_h - cor_h;
                        //尖角
                        cor_t = tri_t - cor_h - off_y - 1;

                    } else {
                        //下方
                        tar_t = tri_t + tri_h + off_y + cor_h;
                        cor_t = tri_t + tri_h + off_y + 1;
                    }
                    cor_l = pos.left - (cor_w - tri_w) / 2;
                } else if (this.s.hoverFollow === "y") {
                    //仅垂直方向跟随
                    if (strFirst === "1" || strFirst === "5" || strFirst === "2") {
                        //顶部
                        tar_t = tri_t - (tar_h - tri_h) / 2 + off_y;
                    } else {
                        //底部
                        tar_t = tri_t - (tar_h - tri_h) + off_y;
                    }

                    if (strFirst === "1" || strFirst === "8" || strFirst === "4") {
                        //左侧
                        tar_l = tri_l - tar_w - off_x - cor_w;
                        cor_l = tri_l - cor_w - off_x - 1;
                    } else {
                        //右侧
                        tar_l = tri_l + tri_w - off_x + cor_w;
                        cor_l = tri_l + tri_w + off_x + 1;
                    }
                    cor_t = pos.top - (cor_h - tri_h) / 2;
                } else {
                    tar_l = tri_l + off_x;
                    tar_t = tri_t + off_y;
                }

            } else {
                switch (strNewDirect) {
                    case "top": {
                        tar_t = tri_t - off_y - tar_h - cor_h;
                        if (strFirst == "1") {
                            tar_l = tri_l - off_x;
                        } else if (strFirst === "5") {
                            tar_l = tri_l - (tar_w - tri_w) / 2 - off_x;
                        } else {
                            tar_l = tri_l - (tar_w - tri_w) - off_x;
                        }
                        cor_t = tri_t - cor_h - off_y - 1;
                        cor_l = tri_l - (cor_w - tri_w) / 2;
                        break;
                    }
                    case "right": {
                        tar_l = tri_l + tri_w + off_x + cor_w;
                        if (strFirst == "2") {
                            tar_t = tri_t + off_y;
                        } else if (strFirst === "6") {
                            tar_t = tri_t - (tar_h - tri_h) / 2 + off_y;
                        } else {
                            tar_t = tri_t - (tar_h - tri_h) + off_y;
                        }
                        cor_l = tri_l + tri_w + off_x + 1;
                        cor_t = tri_t - (cor_h - tri_h) / 2;
                        break;
                    }
                    case "bottom": {
                        tar_t = tri_t + tri_h + off_y + cor_h;
                        if (strFirst == "4") {
                            tar_l = tri_l + off_x;
                        } else if (strFirst === "7") {
                            tar_l = tri_l - (tar_w - tri_w) / 2 + off_x;
                        } else {
                            tar_l = tri_l - (tar_w - tri_w) + off_x;
                        }
                        cor_t = tri_t + tri_h + off_y + 1;
                        cor_l = tri_l - (cor_w - tri_w) / 2;
                        break;
                    }
                    case "left": {
                        tar_l = tri_l - tar_w - off_x - cor_w;
                        if (strFirst == "2") {
                            tar_t = tri_t - off_y;
                        } else if (strFirst === "8") {
                            tar_t = tri_t - (tar_h - tri_h) / 2 - off_y;
                        } else {
                            tar_t = tri_t - (tar_h - tri_h) - off_y;
                        }
                        cor_l = tar_l + tar_w - 1;
                        cor_t = tri_t + (tri_h - cor_h) / 2;
                        break;
                    }
                }
            }
            //尖角的显示
            if (cor_h && cor_w && this.corner) {
                this.corner.css({
                    left: cor_l+this.s.offsets.x,
                    top: cor_t+this.s.offsets.y,
                    zIndex: this.s.zIndex + 1
                });
            }
            //浮动框显示
            this.target.css({
                position: "absolute",
                left: tar_l,
                top: tar_t,
                zIndex: this.s.zIndex
            });
            return this;
        },
        createSharp: function (dir) {
            var bgColor, bdColor, color1 = "", color2 = "";
            var objReverse = {
                left: "right",
                right: "left",
                bottom: "top",
                top: "bottom"
            }, dirReverse = objReverse[dir] || "top";

            if (this.target) {
                bgColor = this.target.css("background-color");
                if (parseInt(this.target.css("border-" + dirReverse + "-width")) > 0) {
                    bdColor = this.target.css("border-" + dirReverse + "-color");
                } 
                
                if (bdColor && bdColor !== "transparent") {
                    color1 = 'style="color:' + bdColor + ';"';
                } else {
                    color1 = 'style="display:none;"';
                }
                if (bgColor && bgColor !== "transparent") {
                    color2 = 'style="color:' + bgColor + ';"';
                } else {
                    color2 = 'style="display:none;"';
                }
            }

            var html = '<div id="floatCorner_' + dir + '" class="float_corner float_corner_' + dir + '">' +
					'<span class="corner corner_1" ' + color1 + '>◆</span>' +
					'<span class="corner corner_2" ' + color2 + '>◆</span>' +
				'</div>';
            if (!$("#floatCorner_" + dir).size()) {
                $("body").append($(html));
            }
            this.corner = $("#floatCorner_" + dir);
            return this;
        },
        targetHold: function () {
            if (this.s.hoverHold) {
                var delay = parseInt(this.s.hideDelay, 10) || 200;
                if (this.target) {
                    this.target.hover(function () {
                        o.flagDisplay = true;
                    }, function () {
                        if (o.timerHold) {
                            clearTimeout(o.timerHold);
                        }
                        o.flagDisplay = false;
                        o.targetHold();
                    });
                }

                o.timerHold = setTimeout(function () {
                    o.displayDetect.call(o);
                }, delay);
            } else {
                this.displayDetect();
            }
            return this;
        },
        loading: function () {
            this.target = $('<div><img src="'+staticFileRoot + '/PortalSite2/Images/loading.gif/></div>');
            this.targetShow();
            this.target.removeData("width").removeData("height");
            return this;
        },
        displayDetect: function () {
            //显示与否检测与触发
            if (!this.flagDisplay && this.display) {
                this.targetHide();
                this.timerHold = null;
            }
            return this;
        },
        targetShow: function () {
            o.cornerClear();
            this.display = true;
            this.container().setWidth().position();
            this.target.show();
            if ($.isFunction(this.s.showCall)) {
                this.s.showCall.call(this.trigger, this.target);
            }
            return this;
        },
        targetHide: function () {
            this.display = false;
            this.targetClear();
            this.cornerClear();
            if ($.isFunction(this.s.hideCall)) {
                this.s.hideCall.call(this.trigger);
            }
            this.target = null;
            this.trigger = null;
            this.s = {};
            this.targetProtect = false;
            return this;
        },
        targetClear: function () {
            if (this.target) {
                if (this.target.data("width")) {
                    this.target.removeData("width").removeData("height");
                }
                if (this.targetProtect) {
                    //保护孩子
                    this.target.children().hide().appendTo($("body"));
                }
                this.target.unbind().hide();
            }
        },
        cornerClear: function () {
            if (this.corner) {
                //使用remove避免潜在的尖角颜色冲突问题
                this.corner.remove();
            }
        },
        target: null,
        trigger: null,
        s: {},
        cacheData: {},
        targetProtect: false
    };

    $.powerFloat = {};
    $.powerFloat.hide = function () {
        o.targetHide();
    };
    $.powerFloat.refresh = function () {
        if (o.target) {
            o.targetShow();
        }
    }
    var defaults = {
        width: "auto", //可选参数：inherit，数值(px)
        offsets: {
            x: 0,
            y: 0
        },
        zIndex: 999,

        eventType: "hover", //事件类型，其他可选参数有：click, focus

        showDelay: 0, //鼠标hover显示延迟
        hideDelay: 0, //鼠标移出隐藏延时

        hoverHold: true,
        hoverFollow: false, //true或是关键字x, y

        targetMode: "common", //浮动层的类型，其他可选参数有：ajax, list, remind
        target: null, //target对象获取来源，优先获取，如果为null，则从targetAttr中获取。
        targetAttr: "rel", //target对象获取来源，当targetMode为list时无效

        container: null, //转载target的容器，可以使用"plugin"关键字，则表示使用插件自带容器类型
        reverseSharp: false, //是否反向小三角的显示，默认ajax, remind是显示三角的，其他如list和自定义形式是不显示的

        position: "4-1", //trigger-target
        edgeAdjust: true, //边缘位置自动调整

        showCall: $.noop,
        hideCall: $.noop

    };
})(jQuery);
/*
* Topmenu zhangjingwei V1.2
* Released under the MIT, BSD, and GPL Licenses.
*/
(function($){
    $.tools = $.tools ||{version: '1.2'};
	
	var tool = $.tools.menu = {
		node: "li",
		hoverClass: "hover",
		col:"data-col",
		content: "data-rel"
    }
	
	// show content
	function show( $wrap, $content, hoverclass ){
		$wrap.addClass(hoverclass);
		$content.css("visibility","visible");
	}
	
	// hide content
	function hide( $wrap, $content, hoverclass ){
		$wrap.removeClass();
        $content.css("visibility","hidden");
	}
	
	// reflow content html and fix tabs height
	function reflowHTML( $wrap, col, $content, node ){
		var widthResult,wrapPos;
		
		$content.html($content.find("textarea").val());
		widthResult = $content.find(node).eq(0).outerWidth(true) * col;
		$content.width(widthResult);
		
		wrapPos = $wrap.position(),
		contentCss = {
			position:"absolute",
			top: wrapPos.top + $wrap.height(),
			left: wrapPos.left
		};
		
		$content.css(contentCss);
		
		return true;
	}
	
	function Menu($wrap, conf){
	   var self = this,
	   col = $wrap.attr(conf.col),
	   hoverclass = conf.hoverClass,
	   $currentContent = $($wrap.attr(conf.content)),
	   contentCurrent = false,
	   init = false,
	   time = null;
	   
	   // setTimeout and clearTimeout
	   function startTimer( fn ){
			time = setTimeout(function(){
			     fn.call(this);
			},30);
	   }
	   
	   function stopTimer(){
          if(time){
            clearTimeout(time);
            time = null;
          }
	   }
	   
	   // do hover
	   $wrap.hover(
	       function(){
				// TODO 判断节点是否已经打开了
				if( $currentContent.css("visibility") == "hidden" ){
					show( $wrap, $currentContent, hoverclass ); 
				}else{
					 stopTimer();
				}
				
			    // init
			    if(!init){
					init = reflowHTML( $wrap, col, $currentContent, conf.node );
				}
	       },
		   function(){
				startTimer(function(){
				    hide( $wrap, $currentContent, hoverclass );
				});
		   }
	   );
	   
	   $currentContent.hover(
	       function(){
                stopTimer();
		   },
		   function(){
			  startTimer(function(){
			  	  hide( $wrap, $currentContent, hoverclass );
			  });
		   }
	   )
	   
	   // bind self api
	   $.extend(self,{
	   	   getWrap: function(){
		   	  return $wrap;
		   },
		   getContent: function(){
              return $currentContent;
           },
		   getConf: function(){
		   	  return conf;
		   }
	   })
	}
	
	$.fn.menu = function(conf){
        if (this.data("menu")) { return this; }
        conf = $.extend(true, {}, tool, conf);
        var els;
        this.each(function(){
            var el = new Menu($(this), conf);
            var wrap = el.getWrap().data("menu", el);
            els = els ? els.add(wrap) : wrap;
        });
        return els ? els : this;
    }
	
})(jQuery);
/*
* DateInput zhangjingwei V1.0
* Released under the MIT, BSD, and GPL Licenses.
*/
(function ($, undefined) {

    /* TODO: 
    *  剔除键盘功能、选择日期、弹出速度、字符国际化、休息日样式
    *  增加双日历
    */

    $.tools = $.tools || { version: '1.3' };

    var instances = [],
         tool,
         LABELS = {};

    tool = $.tools.dateinput = {

        conf: {
            format: 'yyyy-mm-dd',
            monthRange: [0, 12],
            lang: 'zh-cn',
            offset: [0, 0],
            firstDay: 0, // The first day of the week, Sun = 0, Mon = 1, ...
            min: 0,
            max: undefined,
            trigger: 0,
            toggle: 0,
            editable: 0,
            houseData: null,
            mindate: null,
            editable: true,
            checkin: true,  // The date is checkin or checkout

            css: {
                prefix: 'cal',
                input: 'date',

                // ids
                root: 0,
                head: 0,
                title: 0,
                prev: 0,
                next: 0,
                days: 0,

                body: 0,
                weeks: 0,
                today: 0,
                current: 0,

                // classnames
                week: 0,
                off: "disabled",
                sunday: 0,
                focus: "current",
                disabled: "disabled",
                deleted: "delete",
                trigger: 0
            }
        },

        localize: function (language, labels) {
            $.each(labels, function (key, val) {
                labels[key] = val.split(",");
            });
            LABELS[language] = labels;
        }

    };
    //@配置支持其他语言映射表
    // 多语言支持
    tool.localize("zh-cn", {
        months: '1月,2月,3月,4月,5月,6月,7月,8月,9月,10月,11月,12月',
        shortMonths: '1,2,3,4,5,6,7,8,9,10,11,12',
        days: '星期日,星期一,星期二,星期三,星期四,星期五,星期六',
        shortDays: '日,一,二,三,四,五,六'
    });


    //{{{ private functions


    // @return amount of days in certain month
    function dayAm(year, month) {
        return new Date(year, month + 1, 0).getDate();
    }

    function zeropad(val, len) {
        val = '' + val;
        len = len || 2;
        while (val.length < len) { val = "0" + val; }
        return val;
    }

    // thanks: http://stevenlevithan.com/assets/misc/date.format.js 
    var Re = /d{1,4}|m{1,4}|yy(?:yy)?|"[^"]*"|'[^']*'/g, tmpTag = $("<a/>");

    function format(date, fmt, lang) {
        var d = date.getDate(),
            D = date.getDay(),
            m = date.getMonth(),
            y = date.getFullYear(),

            flags = {
                d: d,
                dd: zeropad(d),
                ddd: LABELS[lang].shortDays[D],
                dddd: LABELS[lang].days[D],
                m: m + 1,
                mm: zeropad(m + 1),
                mmm: LABELS[lang].shortMonths[m],
                mmmm: LABELS[lang].months[m],
                yy: String(y).slice(2),
                yyyy: y
            };

        var ret = fmt.replace(Re, function ($0) {
            return $0 in flags ? flags[$0] : $0.slice(1, $0.length - 1);
        });

        // a small trick to handle special characters
        return tmpTag.html(ret).html();

    }

    function integer(val) {
        return parseInt(val, 10);
    }

    function isSameDay(d1, d2) {
        return d1.getFullYear() === d2.getFullYear() &&
            d1.getMonth() == d2.getMonth() &&
            d1.getDate() == d2.getDate();
    }

    function parseDate(val, date) {
        if (val === undefined) { return; }
        if (val.constructor == Date) { return val; }

        if (typeof val == 'string') {

            // rfc3339?
            var els = val.split("-");
            if (els.length == 3) {
                return new Date(integer(els[0]), integer(els[1]) - 1, integer(els[2]));
            }

            // invalid offset
            if (!(/^-?\d+$/).test(val)) { return; }

            // convert to integer
            val = integer(val);
        }

        date.setDate(date.getDate() + val);
        return date;
    }

    //}}}


    function Dateinput(input, conf) {
        // variables
        var self = this,
             now = parseDate(input.val()) || conf.value || new Date,
			 yearNow = now.getFullYear(),
             monthNow = now.getMonth(),
             css = conf.css,
             labels = LABELS[conf.lang],
             root = $("#" + css.root),
             title = root.find("#" + css.title),
             trigger,
             pm, nm,
             currYear, currMonth, currDay,
             value = input.attr("value") || conf.value || input.val(),
             min = input.attr("min") || conf.min,
             max = input.attr("max") || conf.max,
             opened,
             original,
             scrolltimer;
        // zero min is not undefined     
        if (min === 0) { min = "0"; }
        // use sane values for value, min & max
        value = parseDate(value) || now;
        //min，max使用来设置日历控件的现实范围
        min = parseDate(min || new Date(yearNow + Math.floor((monthNow + conf.monthRange[0]) / 12), monthNow + conf.monthRange[0] % 12, 1), value);
        max = parseDate(max || new Date(yearNow + Math.floor((monthNow + conf.monthRange[1]) / 12), monthNow + conf.monthRange[1] % 12, 0), value);

        // Replace built-in date input: NOTE: input.attr("type", "text") throws exception by the browser
        if (input.attr("type") == 'date') {// 如果是原生的date控件，则替换为text控件
            var original = input.clone(),
	          def = original.wrap("<div/>").parent().html(),
	          clone = $(def.replace(/type/i, "type=text data-orig-type"));

            if (conf.value) clone.val(conf.value);   // jquery 1.6.2 val(undefined) will clear val()

            input.replaceWith(clone);
            input = clone;
        }

        input.addClass(css.input);
        //console.log(self);
        var fire = input.add(self); //将构造函数new对象加入到jquery对象中.

        // construct layout
        /*
        * 将原来一次绘制日历的方式分为两个部分
        * 先绘制外围DOM节点
        * 日历部分构件完成后，插入到外围节点中
        */
        if (!root.length) { //如果是第一次使用控件，则先创建外部html结构

            // root
            root = $('<div><a/><a/><div/></div>')
                .hide().css({ position: 'absolute' }).attr("id", css.root).addClass("calendarBox");

            // elements
            root.children() //给初始化的html结构添加class和id属性
                .eq(0).attr("id", css.prev).addClass("calPrev").end()
                .eq(1).attr("id", css.next).addClass("calNext").end()
                    .eq(2).attr("id", "calcontent");

            $("body").append(root);
        }


        // layout elements
        var weeks = root.find("#" + css.weeks);  //没发现weeks元素???

        //{{{ pick

        function select(date, conf, e) {
            // current value
            value = date;
            currYear = date.getFullYear();
            currMonth = date.getMonth();
            currDay = date.getDate();

            // beforChange
            e = e || $.Event("api");
            e.type = "beforeChange";

            fire.trigger(e, [date]);
            if (e.isDefaultPrevented()) { return; }

            // formatting           
            input.val(format(date, conf.format, conf.lang));

            // change
            e.type = "change";
            fire.trigger(e, [date]);

            // store value into input
            input.data("date", date);

            self.hide(e);
        }


        function selectNoShow(date, conf, e)
        {
            value = date;
            currYear = date.getFullYear();
            currMonth = date.getMonth();
            currDay = date.getDate();
            
            input.data("date", date);
            input.val("");

            self.hide(e);
        }
        //}}}


        //{{{ onShow

        function onShow(ev) {

            ev.type = "onShow";
            fire.trigger(ev);

            // click outside dateinput
            $(document).bind("click.d", function (e) {
                var el = e.target;

                if (!$(el).parents("#" + css.root).length && $(el).attr("id") != css.root && el != input[0] && (!trigger || el != trigger[0])) {
                    self.hide(e);
                }

            });
        }
        //}}}

        // 获取所在月份的日历HTML
        //noOpen 设置为不打开界面
        function getCalHtml(year, month, day, noOpen,noInput) {
            var date = integer(month) >= -2 ? new Date(integer(year), integer(month), integer(day == undefined || isNaN(day) ? 1 : day)) : year || value;//,
            //noOpen = noOpen ? true : false;

            if (date < min) {
                date = min;
            } else if (date > max) {
                date = max;
            }

            if (typeof year == 'string') { date = parseDate(year); }

            year = date.getFullYear(),
            month = date.getMonth(),
            day = date.getDate();

            // roll year & month
            if (month == -1) {
                month = 11;
                year--;
            } else if (month == 12) {
                month = 0;
                year++;
            }
            if (noInput)
            {
                selectNoShow(date, conf);
                return self;
            }
            
            if (!opened || noOpen) {
                select(date, conf);
                return self;
            }/* else {
                // formatting           
                input.val(format(date, conf.format, conf.lang));
                input.data("date", date);
                value = date;
            }*/

            currMonth = month;
            currYear = year;
            currDay = day;

            var targetMonth = currMonth + 1,
            daysInTargetMonth = dayAm(currYear, targetMonth),
            targetDay = daysInTargetMonth,
			targetYear = currYear;

            // roll next year & next month
            if (targetMonth == -1) {
                targetMonth = 11;
                targetYear--;
            } else if (targetMonth == 12) {
                targetMonth = 0;
                targetYear++;
            }

            var dateNext = new Date(targetYear, targetMonth, targetDay);

            var $calendarRoot = $("<div class='calendar'><h2/><table><thead><tr/></thead><tbody></tbody></table></div>"),
                    days = $calendarRoot.children().eq(1).children().eq(0).children();

            // days of the week
            for (var d = 0; d < 7; d++) {
                days.append($("<th/>").text(labels.shortDays[(d + conf.firstDay) % 7]));
            }

            var $calendarNextRoot = $calendarRoot.clone();
            pm.add(nm).removeClass(css.disabled);  //删除向前向后按钮disable状态

            $.each([$calendarRoot, $calendarNextRoot], function (i, $n) {
                var d = i ? dateNext : date,
				   title = $n.children().eq(0),//tbody
				   weeks = $n.children().eq(1).children().eq(1),
				   dd,
                   caldata;

                var year = d.getFullYear(),
                month = d.getMonth(),
                day = d.getDate();

                if (conf.houseData) {
                    if ((year - min.getFullYear()) == 0) {
                        caldata = conf.houseData[month - conf.mindate.getMonth()];
                    } else {
                        caldata = conf.houseData[month + 12 - conf.mindate.getMonth()];
                    }
                }

                // variables
                var tmp = new Date(year, month, 1 - conf.firstDay), begin = tmp.getDay(),
                     days = dayAm(year, month);
                //prevDays = dayAm(year, month - 1);

                title.html(year + "年" + labels.shortMonths[month] + '月');

                // !begin === "sunday"
                //for (var j = !begin ? -7 : 0, a, num; j < (!begin ? 35 : 42); j++) {
                for (var j = 0, a, num; j < 42; j++) {
                    if (j % 7 == 0) {
                        var $curRow = $("<tr/>").appendTo(weeks);
                    }
                    $td = $("<td/>");

                    //  前后
                    //num = prevDays - begin + j + 1;
                    //date = new Date(year, month - 1, num);
                    //num = j - days - begin + 1;
                    //date = new Date(year, month + 1, num);
                    if (j < begin || j >= begin + days) {
                        $td.addClass(css.off);
                        num = "";
                        dd = null;
                    } else {
                        num = j - begin + 1;
                        dd = new Date(year, month, num);

                        // 对选中日期\今日进行样式处理
                        if (isSameDay(value, dd)) {
                            $td.attr("id", css.current).addClass(css.focus);
                        } else if (isSameDay(now, dd)) {
                            $td.attr("id", css.today);
                        }
                    }

                    // 日期正确则压入
                    $td.text(num).data("date", dd);

                    // 对不可选日期作出样式处理
                    if (min && dd < min && dd != null) {
                        $td.add(pm).addClass(css.disabled);
                    }
                    if (max && dd > max) {
                        $td.add(nm).addClass(css.disabled);
                    }

                    // 对房态进行处理
                    if (num && caldata) {
                        if (caldata[num - 1]) {
                            var type = caldata[num - 1][0];
                            if (type == 0) {
                                $td.addClass(css.deleted);
                            } else {
                                if (conf.checkin) {
                                    if (type == 2 || type == 3) {
                                        $td.addClass(css.deleted);
                                    }
                                } else {
                                    if (type == 3 || type == 2) {
                                        $td.addClass(css.deleted);
                                    }
                                }
                            }
                        }
                    }
                    $curRow.append($td);
                }
            });

            return $("<div/>").append($calendarRoot).append($calendarNextRoot);
        }

        //给构造函数new出的对象绑定一些方法
        $.extend(self, {


            /**
            *   @public
            *   展开日历
            */
            show: function (e) {
                if (input.attr("readonly") || input.attr("disabled") || opened) { return; }

                // onBeforeShow
                e = e || $.Event();
                e.type = "onBeforeShow";
                fire.trigger(e);
                if (e.isDefaultPrevented()) { return; }

                $.each(instances, function () {
                    this.hide();
                });

                opened = true;

                // prev / next month
                pm = root.find("#" + css.prev).unbind("click").click(function (e) {
                    if (!pm.hasClass(css.disabled)) {
                        self.addMonth(-2);
                    }
                    return false;
                });

                nm = root.find("#" + css.next).unbind("click").click(function (e) {
                    if (!nm.hasClass(css.disabled)) {
                        self.addMonth();
                    }
                    return false;
                });

                // set date
                self.setValue(value);

                // show calendar
                var pos = input.offset();

                // iPad position fix
                if (/iPad/i.test(navigator.userAgent)) {
                    pos.top -= $(window).scrollTop();
                }

                var bodyWidth = $(document.body).outerWidth(true);
                var posLeft = pos.left + conf.offset[1] + root.outerWidth(true);
                if ((posLeft - bodyWidth) > 0) {
                    posLeft = posLeft - (posLeft - bodyWidth)
                }

                root.css({
                    top: pos.top + input.outerHeight({ margins: true }) + conf.offset[0],
                    left: posLeft - root.outerWidth(true)
                });

                root.show();
                onShow(e);

                $(window).bind("resize.dateinput", function () {
                    var pos = input.offset(),
                     bodyWidth = $(document.body).outerWidth(true),
                     posLeft = pos.left + conf.offset[1] + root.outerWidth(true);

                    if ((posLeft - bodyWidth) > 0) {
                        posLeft = posLeft - (posLeft - bodyWidth)
                    }

                    root.css({
                        top: pos.top + input.outerHeight({ margins: true }) + conf.offset[0],
                        left: posLeft - root.outerWidth(true)
                    });
                }).bind("scroll.dateinput", function () {
                    clearTimeout(scrolltimer);
                    scrolltimer = setTimeout(function () {
                        var pos = input.offset(),
                             bodyWidth = $(document.body).outerWidth(true),
                             posLeft = pos.left + conf.offset[1] + root.outerWidth(true);

                        if ((posLeft - bodyWidth) > 0) {
                            posLeft = posLeft - (posLeft - bodyWidth)
                        }

                        root.css({
                            top: pos.top + input.outerHeight({ margins: true }) + conf.offset[0],
                            left: posLeft - root.outerWidth(true)
                        });
                    }, 10);
                });

                return self;
            },

            /**
            *   @public
            *
            *   设置日历输入框的值
            */
            setValue: function (year, month, day, noOpen,noInput) {
                var calHtml = getCalHtml(year, month, day, noOpen,noInput);
                // date picking
                $("#calcontent").html(calHtml).find("td").unbind("click").bind("click", function (e) {
                    var el = $(this);
                    if (!(el.hasClass(css.disabled) || el.hasClass(css.deleted))) {
                        $("#" + css.current).removeAttr("id");
                        el.attr("id", css.current);
                        select(el.data("date"), conf, e);
                        //console.log(el.data("date"));
                    }
                    return false;
                });

                return self;
            },
            // 设置日历的值，并且不打开日历
            setValueNoOpen: function (year, month, day) {
                var date = integer(month) >= -2 ? new Date(integer(year), integer(month), integer(day == undefined || isNaN(day) ? 1 : day)) : year || value;//,
                //noOpen = noOpen ? true : false;

                if (date < min) {
                    date = min;
                } else if (date > max) {
                    date = max;
                }

                input.val(format(date, conf.format, conf.lang));
                input.data("date", date);
                value = date;

                return self;
            },

            //}}}

            setMin: function (val, fit) {
                min = parseDate(val);
                if (fit && value < min) { self.setValue(min); }
                return self;
            },

            setMax: function (val, fit) {
                max = parseDate(val);
                if (fit && value > max) { self.setValue(max); }
                return self;
            },

            today: function () {
                return self.setValue(now);
            },

            addDay: function (amount) {
                return this.setValue(currYear, currMonth, currDay + (amount || 1));
            },

            addMonth: function (amount) {
                var targetMonth = currMonth + (amount || 2),
                daysInTargetMonth = dayAm(currYear, targetMonth),
                targetDay = currDay <= daysInTargetMonth ? currDay : daysInTargetMonth;

                return this.setValue(currYear, targetMonth, targetDay);
            },

            addYear: function (amount) {
                return this.setValue(currYear + (amount || 2), currMonth, currDay);
            },

            destroy: function () {
                input.add(document).unbind("click.d");
                root.add(trigger).remove();
                input.removeData("dateinput").removeClass(css.input);
                if (original) { input.replaceWith(original); }
            },

            hide: function (e) {

                if (opened) {

                    // onHide 
                    e = $.Event();
                    e.type = "onHide";
                    fire.trigger(e);

                    // cancelled ?
                    if (e.isDefaultPrevented()) { return; }

                    $(document).unbind("click.d").unbind("keydown.d");

                    // do the hide
                    root.hide();
                    opened = false;

                    $(window).unbind("resize.dateinput").unbind("scroll.dateinput");
                }

                return self;
            },

            getConf: function () {
                return conf;
            },

            getInput: function () {
                return input;
            },

            getCalendar: function () {
                return root;
            },

            getValue: function (dateFormat) {
                return dateFormat ? format(value, dateFormat, conf.lang) : value;
            },

            isOpen: function () {
                return opened;
            }

        });

        // callbacks    //这里用于给self绑定事件,在each方法中可以存储遍历的值
        $.each(['onBeforeShow', 'onShow', 'change', 'onHide', 'onEmpty'], function (i, name) {

            // configuration
            if ($.isFunction(conf[name])) {
                $(self).bind(name, conf[name]);
            }

            // API methods              
            self[name] = function (fn) {
                if (fn) { $(self).bind(name, fn); }
                return self;
            };
        });

        // show dateinput & assign keyboard shortcuts
        input.bind("focus.d click.d", self.show).keydown(function (e) {

            var key = e.keyCode;

            // open dateinput with navigation keyw
            if (!opened && $(KEYS).index(key) >= 0) {
                self.show(e);
                return e.preventDefault();
            }

            if (conf.editable) {
                if (opened && (key == 8 || key == 46)) {
                    input.val("");
                    e = e || $.Event();
                    e.type = "onEmpty";
                    fire.trigger(e);
                    if (e.isDefaultPrevented()) { return; }
                }
            }

            if (key == 9) {
                self.hide();
            }

            // allow tab
            return key == 9 ? true : e.preventDefault();

        });

        input.attr({
            "autocomplete": "off",
            "spellcheck": "false",
            "dir": "ltr"//,
            //"draggable": "false"
        })

        // initial value        
        if (parseDate(input.val())) {
            select(value, conf);
        }

    }
    //@自定义一个:date选择器，用于选择日历控件元素
    $.expr[':'].date = function (el) {
        var type = el.getAttribute("type");
        return type && type == 'date' || !!$(el).data("dateinput");
    };


    $.fn.dateinput = function (conf) {

        // already instantiated
        if (this.data("dateinput")) { return this; }

        // configuration
        conf = $.extend(true, {}, tool.conf, conf);

        // CSS prefix @修改日历控件中的类名
        $.each(conf.css, function (key, val) {
            if (!val && key != 'prefix') {
                conf.css[key] = (conf.css.prefix || '') + (val || key);
            }
        });

        var els;

        this.each(function () {
            var el = new Dateinput($(this), conf);
            instances.push(el);
            var input = el.getInput().data("dateinput", el);
            els = els ? els.add(input) : input;
        });

        return els ? els : this;
    };


})(jQuery);
/*
 * Select zhangjingwei V1.3
 * Released under the MIT, BSD, and GPL Licenses.
 */
(function ($) {

    $.tools = $.tools || {
        version: '1.3'
    };

    var instances = [],
        // down=40, left=37, up=38, right=39
        KEYS = [38, 39, 40, 37],
tool = $.tools.selectinput = {
    conf: {
        offset: [0, 0], // 弹出菜单偏移量
        trigger: false, // 默认触发
        pinyin: false,  // 是否需要拼音
        autowidth: false, // 是否需要自动定义宽度
        reload: false, //是否每次都重新加载
        doChange:true, //是否执行trigger的change事件,
		onChanging: function(merchantID) { return true;},
        css: {
            // ids
            root: 0,
            head: 0,

            // classnames
            rootclass: 0,
            headclass: 0,
            list: 0,
            off: 0,     // 鼠标移动上的样式
            focus: 0,   // 获取焦点样式
            disabled: 0, // 禁止选择样式
            trigger: 0, // 触发后的样式
            current: 0, // 节点被选中的样式
            mouseon: 0  // 鼠标移动触发样式
        }
    }
}

    function Selects(select, conf, i) {
        var self = this,
        css = conf.css,
        hid = css.head || "selhead_jQuery" + i,
        rid = css.root || "selroot_jQuery" + i,
        root = $("#" + rid),
        head = $("#" + hid),
		selLength = select.find("option").length - 1,
        currentClass = css.current,
        opened,
        selstyle = select.offset(),
        fire = select.add(self);

        var listArray, listArrayIndex, listArrayLength, $rootlis, rootTime;

        // 容灾处理
        if (!root.length && !head.length) {
            var body = $("body"),
				index = getSelectIndex(),
				title = getSelectText();

            root = $('<ul/>').css({ "position": "absolute", "z-index": 100000000, "height": "auto" }).addClass(css.rootclass).attr("id", rid).hide();

            select.find("option").each(function (i, n) {
                /*  var val = n.value, text = n.text, py = (n.getAttribute("name") || n.name) || "";*/
                var val = $(this).attr("value"), text = $(this).text(), py = $(this).attr("name") || "";
                root.append("<li data-value='" + val + "' data-index='" + i + "' data-name='" + py + "' data-text='" + text + "'><strong>" + text + "</strong><!--<span>" + py + "</span>--></li>");
            });

            root.find("li").eq(index).addClass(currentClass);

            head = $("<span/>").html(title).addClass(css.headclass).attr({
                "id": hid,
                "tabIndex": 0
            }).click(function (e) {
                if (!opened) {
                    self.show();
                } else {
                    self.hide();
                }
                return e.preventDefault();
            });
            select.after(head).css({
                "display": "none"
            });

            body.append(root);
        }

        if (conf.trigger) {
            self.show();
        }

        function onShow(ev) {
            $(document).bind("keydown.sel", function (e) {
                if (e.ctrlKey) { return true; }
                var key = e.keyCode;

                clearTimeout(rootTime);

                rootTime = setTimeout(function () {
                    self.reset();

                    // esc or tab key exits
                    if (key == 27 || key == 9) {
                        self.setValue($rootlis.filter("[data-index='" + listArray[listArrayIndex] + "']"), e);
                        return self.hide(e);
                    }

                    if ($(KEYS).index(key) >= 0) {
                        if (!opened) {
                            self.show(e);
                            return e.preventDefault();
                        }

                        if (key == 40 || key == 39) {
                            listArrayIndex = ++listArrayIndex < listArrayLength ? listArrayIndex : 0;
                        } else if (key == 38 || key == 37) {
                            listArrayIndex = --listArrayIndex >= 0 ? listArrayIndex : listArrayLength - 1;
                        }

                        self.setValue($rootlis.filter("[data-index='" + listArray[listArrayIndex] + "']"), e);
                        return e.preventDefault();
                    }

                    // enter
                    if (key == 13) {
                        self.setValue($rootlis.filter("[data-index='" + listArray[listArrayIndex] + "']"), e);
                        self.hide(e);
                        return false;
                    }
                }, 50);

                if ($(KEYS).index(key) >= 0) {
                    return e.preventDefault();
                }
            });

            // resize window
            $(window).bind("resize.sel", function () {

                var headCssNow = getPosition(head);
                if (conf.IsNotSelectState) {
                    root.css({
                        top: headCssNow.bottom,
                        left: headCssNow.left
                    });
                } else {
                    root.css({
                        top: headCssNow.bottom,
                        left: head.offset().left
                    });
                }
            });

            // click outside select
            $(document).bind("click.sel", function (e) {
                var el = e.target;

                if (el != head[0]) {
                    self.hide(e);
                }
            });

            ev.type = "onShow";
            fire.trigger(ev);
        }

        // 选择函数
        function selected(currentElem, e) {
            var currentText = currentElem.attr("data-text");

            root.find("li").removeClass(css.current);
            currentElem.addClass(css.current);
            head.html(currentText);
            setSelected(currentElem.attr("data-index"));

            // change
            e = e || $.Event("api");
            e.type = "change";

            if (conf != undefined && conf.doChange) {
                fire.trigger(e, currentElem)
            }

            // fix bug on validation, when choose a valuse, jqvalidate will validate after click event
            //fire.trigger("click");

            if (e.isDefaultPrevented()) {
                return;
            }
        }

        /*
        * 设置selectindex
        */
        function setSelected(index) {
            select[0].selectedIndex = index;
            $(select[0]).trigger('change');
        }

        /*
        * 获取选中项值
        */
        function getSelectVal() {
            return select.find("option:selected").val();
        }

        /*
        * 获取选中项文本
        */
        function getSelectText() {
            return select.find("option:selected").text();
        }

        /*
        * 获取selectindex
        */
        function getSelectIndex() {
            return select[0].selectedIndex;
        }

        /*
        * 获取节点位置
        */
        function getPosition(elem) {
            var bodyWidth = $(document.body).outerWidth(true);
            var offset = elem.offset(), elemW = elem.innerWidth(), elemH = elem.innerHeight();
            var posLeft = offset.left + conf.offset[1] + root.outerWidth(true);
            if ((posLeft - bodyWidth) > 0) {
                posLeft = posLeft - (posLeft - bodyWidth)
            }       
            return {
                left: posLeft - root.outerWidth(true),
                top: elem.offset().top,
                right: offset.left + elemW,
                bottom: offset.top + elemH + conf.offset[0]
            }
        }

        $.extend(self, {
            show: function (e) {
                if (select.attr("disabled") || opened) {
                    return;
                }
                // onBeforeShow
                e = e || $.Event();
                e.type = "onBeforeShow";
                fire.trigger(e);
                if (e.isDefaultPrevented()) {
                    return;
                }

                // 关闭所有已打开select
                $.each(instances, function () {
                    this.hide();
                });
                opened = true;

                root.undelegate("li", "click mouseenter mouseleave").delegate("li", "click", function (e) {
					var sIndex = parseInt($(this).attr("data-index"), 10);
					var r = conf.onChanging(parseInt(select.find("option").eq(sIndex).val(), 10));
					if(r) {
						self.setValue($(this), e);
					}
					self.hide(e);
                    return false;
                }).delegate("li", "mouseenter", function () {
                    $(this).addClass(css.mouseon);
                }).delegate("li", "mouseleave", function () {
                    $(this).removeClass(css.mouseon);
                });

                // show select
                var pos = select.offset();

                // iPad position fix
                if (/iPad/i.test(navigator.userAgent)) {
                    pos.top -= $(window).scrollTop();
                }

                if (conf.offset) {
                    root.css({
                        top: pos.top + conf.offset[0],
                        left: pos.left + conf.offset[1]
                    });
                }
                var headCssNow = getPosition(head);
                root.css({
                    top: headCssNow.bottom,
                    left: headCssNow.left,
                    width: conf.autowidth ? head.innerWidth() : false
                });

                root.show();
                onShow(e);

                return self;
            },
            hide: function (e) {
                if (opened) {
                    // onHide
                    e = $.Event();
                    e.type = "onHide";
                    fire.trigger(e);

                    $(document).unbind("click.sel").unbind("keydown.sel");
                    $(window).unbind("resize.sel");

                    // cancelled ?
                    if (e.isDefaultPrevented()) {
                        return;
                    }

                    // do the hide
                    root.hide();
                    root.find("li").unbind("click");
                    opened = false;
                }

                return self;
            },
            getData: function () {
                var $options = select.find("option"), data = {}, optionname;
                $options.each(function (i, n) {
                    optionname = $(this).attr("name");
                    /*optionname = n.getAttribute("name") || n.name;*/
                    if (optionname) {
                        data[$(this).attr("value")] = optionname + "|||" + $(this).text() + "|||" + i;
                      /*  data[n.value] = optionname + "|||" + (n.firstChild.nodeValue || n.innerText) + "|||" + i;*/
                    }
                });
                return data;
            },

            repaint: function () {
                $('li', root).each(function () {
                    $(this).remove();
                });
                var index = getSelectIndex();
                // alert(index);
                select.find("option").each(function (i, n) {
                   /* var val = n.value, text = n.firstChild.nodeValue || n.innerText, py = (n.getAttribute("name") || n.name) || "";*/
                    var val = $(this).attr("value"), text = $(this).text(), py = $(this).attr("name") || "";
                    root.append("<li data-value='" + val + "' data-index='" + i + "' data-name='" + py + "' data-text='" + text + "'><strong>" + text + "</strong><!--<span>" + py + "</span>--></li>");
                });
                root.find("li").eq(index).addClass(currentClass);

                $head = head;


                $head.text(select.find("option:selected").text());
                head.find("input").remove();
            },

            reset: function () {  // select 改变时重置菜单
                var index = getSelectIndex();   // 原生select中被选中项的索引;

                $rootlis = root.find("li");
                listArray = [];

                $rootlis.each(function () {
                    listArray.push($(this).attr("data-index"));    // 将当先的option对应的索引压入一个数组
                });

                listArrayLength = listArray.length;

                // 计算原生select的索引值在模拟select中索引数组的位置
                $.each(listArray, function (i, n) {
                    if (index == n) {
                        listArrayIndex = i;
                        return false;
                    }
                });

                return self;
            },
            setValue: function (elem, evt,strongFresh) { // lxq 添加参数，强制触发selected 
                evt = evt || $.Event("api");
				
				//判断当前要切换的index是不是没有变化，如果没有变化则不触发selected
				if(strongFresh == true || getSelectIndex().toString(10) != elem.attr("data-index")) {
					selected(elem, evt);
				}
				
                return self;
            },
            getValue: function () {
                return getSelectVal();
            },
            setIndex: function (index) {
                setSelected(index);
                return self;
            },
            setHeadText: function (text) {
                head.html(text);
                return self;
            },
            getConf: function () {
                return conf;
            },
            getRoot: function () {
                return root;
            },
            getHead: function () {
                return head;
            },
            getSelect: function () {
                return select;
            },
            getIndex: function () {
                return getSelectIndex();
            },
            isOpen: function () {
                return opened;
            }
        });

        // callbacks
        $.each(['onBeforeShow', 'onShow', 'change', 'onHide'], function (i, name) {

            // configuration
            if ($.isFunction(conf[name])) {
                $(self).bind(name, conf[name]);
            }

            // API methods
            self[name] = function (fn) {
                if (fn) {
                    $(self).bind(name, fn);
                }
                return self;
            };
        });
    }

    $.fn.selectinput = function (conf) {
        // 单例
        if (this.data("selectinput") && conf != undefined && !conf.reload) {
            return this;
        }
        if (conf != undefined && conf.reload) {
            $("#" + conf.css.root).remove();
            $("#" + conf.css.head).remove();
        }

        conf = $.extend(true, {}, tool.conf, conf);

        var els;
        this.each(function (key) {
            var el = new Selects($(this), conf, $.now() + Math.random());
            instances.push(el);
            var sel = el.getSelect().data("selectinput", el);
            els = els ? els.add(sel) : sel;
        });
        return els ? els : this;
    };
})(jQuery);
/*
 * Select Enter zhangjingwei
 * Released under the MIT, BSD, and GPL Licenses.
 * Version: 2.1
 */
(function ($) {
    var t = $.tools.selectinput,
	    checkTime,
        normalShowForce,
        inputNochange,
		checkVal;


    // 默认展示数据
    function areaNormalShow(api) {
        var data = api.getSelect().find("option"),
		root = api.getRoot();
        root.empty().removeClass("select-list");
        root.append('<div class="address_hotcity"><strong>请选择您要入住的城市</strong></div>');
        $.each(data, function (i, n) {
            /*  var val = n.value, text = n.firstChild.nodeValue || n.innerText, py = (n.getAttribute("name") || n.name) || "";*/
            var val = $(this).attr("value"), text = $(this).text(), py = $(this).attr("name") || "";
            root.append("<li data-value='" + val + "' data-index='" + i + "' data-name='" + py + "' data-text='" + text + "'><strong>" + text + "</strong><span>" + py + "</span></li>");
        });
        root.find("li").eq(0).addClass(api.getConf().css.current);
        api.setIndex(root.find("li").eq(0).attr("data-index"));
    }

    // 初始化原始内容
    function initCheckVal($ipt) {
        checkVal = $ipt.val();
        inputNochange = true;
    }

    // 比对输入内容是否改变
    function checkIpt($ipt) {
        var iptVal = $ipt.val(),
		    result = checkVal != iptVal;
        if (normalShowForce && inputNochange) {
            return -1;
        }
        if (result && iptVal == "") {
            checkVal = iptVal;
            result = -1; // 有变化，输入值为空值
        } else if (result) {
            checkVal = iptVal;
            result = 0; // 有变化，输入值不为空
        } else if (!result && checkVal == "") {
            result = 1; // 无变化，默认值为空
        } else {
            result = 2; // 无变化
        }

        return result;
    }

    // 开启文字输入检查
    function openCheckIpt(ipt, api, fn) {
        var $ipt = $(ipt), root = api.getRoot(), conf = api.getConf();
        checkTime = setTimeout(function () {
            var checkResult = checkIpt($ipt);   // 检查输入内容
            if (checkResult == 0) { // 如果检索到输入内容展示检索内容
                // added by liuyu 20131030
                api.getConf().IsNotSelectState = false;
                root.css('left', api.getSelect().parent().offset().left);
                fn.call(this);
            } else if (checkResult == -1) { // 如果没有检索到输入内容则展示默认数据
                // added by liuyu 20131030
                api.getConf().IsNotSelectState = false;
                root.css('left', api.getSelect().parent().offset().left);
                normalShow(api);
            }
            checkResult = undefined;
            openCheckIpt.call(this, ipt, api, fn);
        }, 80);
    }

    // 关闭文字输入检查
    function closeCheckIpt() {
        clearTimeout(checkTime)
    }


    // 获取进入输入框的文字
    function getIptVal($ipt) {
        return $ipt.val();
    }

    // 写入输入框的文字
    function setIptVal($elem, $ipt, innerText) {
        $elem.text(innerText);
        $ipt.remove();
    }

    // 检索输入属于是否在属于源内
    function checkValInData(data, val) {
        var searchResult = [];
        if (val) {
            // 为了允许屏东(垦丁)这类带括号地区能够正确匹配，需要替换掉值内的括号
            var reg = new RegExp("(?=.*" + val.toLowerCase().replace(/\(/g, "\\\(").replace(/\)/g, "\\\)") + ").+");
            $.each(data, function (i, n) {
                if (reg.test(n)) {
                    searchResult.push(i + "|||" + n);
                }
            });
        } else {
            searchResult = null;
        }

        return searchResult;
    }

    // 默认展示数据
    function normalShow(api) {
        var flag = inputNochange;
        inputNochange = false;
        var data = api.getSelect().find("option"),
		root = api.getRoot();
        root.empty().removeClass("select-list");
        root.append('<div class="address_hotcity"><strong>请选择您要入住的城市</strong></div>');
        $.each(data, function (i, n) {
            /* var val = n.value, text = n.firstChild.nodeValue || n.innerText, py = (n.getAttribute("name") || n.name) || "";*/
            var val = $(this).attr("value"), text = $(this).text(), py = $(this).attr("name") || "";
            root.append("<li data-value='" + val + "' data-index='" + i + "' data-name='" + py + "' data-text='" + text + "'><strong>" + text + "</strong><span>" + py + "</span></li>");
        });
        if (normalShowForce && flag) {
            var lis = root.find("li").filter(function () { return $(this).data("text") == checkVal })
            if (lis.length > 0) {
                lis.eq(0).addClass(api.getConf().css.current);
                api.setIndex(lis.eq(0).attr("data-index"));
                return;
            }
        }
        root.find("li").eq(0).addClass(api.getConf().css.current);
        api.setIndex(root.find("li").eq(0).attr("data-index"));
    }

    // 初始化展示数据
    function initShow(api) {
        var data = api.getSelect().find("option[data-show]"),
        index = api.getIndex(),
        root = api.getRoot(),
        info;

        try {
            info = cityInfo;
        } catch (e) {
            //   console.log("城市信息不存在，请检查");
            return false;
        }

        root.empty().append('<div><div class="address_tabs"></div><div class="address_content"></div></div>');
        // get cityinfo and group by tabs

        var rootDiv = root.find("div"), $tabElem = rootDiv.eq(1), $tabInfoElem = rootDiv.eq(2);

        if (api.getSelect().attr("fewItems") == "true") {//只有很少的城市的，则区域不用分组了。全部显示即可
            $tabElem.hide();
            data.each(function (i) {
                var $span = $("<span/>").text($(this).text()).attr("data-value", $(this).val());
                $span.unbind().bind("click", function () {
                    api.setHeadText($(this).text()).setIndex(i);
                });
                $tabInfoElem.append($span);
            });
        }
        else {

            // add tab of hot group
            $tabElem.append($("<span/>").text(info.hotgroup.name).attr("data-cityids", info.hotgroup.cityids).addClass("current"));

            // add tab of lettergroups
            $.each(info.lettergroups, function (i, n) {
                var $span = $("<span/>").text(n.name).attr("data-cityids", n.cityids);
                $tabElem.append($span);
            });

            var $tabElemSpan = $tabElem.find("span");
            $tabElemSpan.unbind().bind("click", function () {
                drawContent($(this).attr("data-cityids"), info.citys, $tabInfoElem, api);
                $tabElemSpan.removeClass("current");
                $(this).addClass("current");
                return false;
            })

            drawContent(info.hotgroup.cityids, info.citys, $tabInfoElem, api);
        }
        // added by liuyu 20131030
        api.getConf().IsNotSelectState = true;
    }

    //新页面地址输入，初始化显示
    function initShowHouse(api) {
        var data = api.getSelect().find("option"),
        index = api.getIndex(),
        root = api.getRoot(),
        info;

        try {
            info = cityInfo_tehui;
        } catch (e) {
            //   console.log("城市信息不存在，请检查");
            return false;
        }

        root.empty().append('<div><div class="address_tabs"></div><div class="address_content"></div></div>');
        // get cityinfo and group by tabs

        var rootDiv = root.find("div"), $tabElem = rootDiv.eq(1), $tabInfoElem = rootDiv.eq(2);

        if (api.getSelect().attr("fewItems") == "true") {//只有很少的城市的，则区域不用分组了。全部显示即可
            $tabElem.hide();
            data.each(function (i) {
                var $span = $("<span/>").text($(this).text()).attr("data-value", $(this).val()).attr("data-housenum", $(this).attr("data-housenum"));
                $span.unbind().bind("click", function () {
                    // api.setHeadText($(this).text() + "(" + $(this).attr("data-housenum") + ")").setIndex(i);
                    api.setHeadText($(this).text()).setIndex(i);
                });
                $tabInfoElem.append($span);
            });
        }
        else {

            // add tab of hot group
            $tabElem.append($("<span/>").text(info.hotgroup.name).attr("data-cityids", info.hotgroup.cityids).addClass("current"));

            // add tab of lettergroups
            $.each(info.lettergroups, function (i, n) {
                var $span = $("<span/>").text(n.name).attr("data-cityids", n.cityids);
                $tabElem.append($span);
            });

            var $tabElemSpan = $tabElem.find("span");
            $tabElemSpan.unbind().bind("click", function () {
                drawContentHouse($(this).attr("data-cityids"), info.citys, $tabInfoElem, api);
                $tabElemSpan.removeClass("current");
                $(this).addClass("current");
                return false;
            })

            drawContentHouse(info.hotgroup.cityids, info.citys, $tabInfoElem, api);
        }
        // added by liuyu 20131030
        api.getConf().IsNotSelectState = true;

    }

    // 获取关键词数据
    function getKeyData() {
        var data = {};
        if (typeof cityInfo != "undefined" && cityInfo.citys) {
            $.each(cityInfo.citys, function (i, n) {
                data[i] = n.pinyin + "|||" + n.name + "|||" + n.keyword.join("|||") + "|||" + i; // 注意这里有顺序：拼音，汉字，关键词
            });
        } else {
            data = undefined;
        }

        return data;
    }
    function getKeyDataC(obj) {
        var data = {}, citys = obj.citys;

        if (citys) {
            $.each(citys, function (i, n) {
                data[i] = n.pinyin + "|||" + n.name + "|||" + n.provinceid + "|||" + n.id + "|||" + n.keyword.join("|||") + "|||" + i; // 注意这里有顺序：拼音，汉字，关键词
            });
        } else {
            data = undefined;
        }

        return data;
    }

    function getWorldKeyData(cityInfo) {
        var data = {}, citys = cityInfo.citys;

        if (citys) {
            $.each(citys, function (i, n) {
                data[i] = n.pinyin + "|||" + n.name + "|||" + n.keyword.join("|||") + "|||" + i; // 注意这里有顺序：拼音，汉字，关键词
            });
        } else {
            data = undefined;
        }

        return data;
    }

    // draw tab content
    function drawContent(ids, citys, elem, api) {
        var cityids = typeof ids == "string" ? ids.split(",") : ids;

        elem.empty();
        $.map(cityids, function (i) {
            $.map(cityInfo.citys, function (n) {
                if (n.id == i) {
                    elem.append($("<span/>").text(n.name).attr("data-value", i));
                }
            })
        });

        // bind chose city event
        elem.find("span").unbind().bind("click", function () {
            var self = $(this), v = self.attr("data-value");
            $.each(cityInfo.citys, function (i, n) {
                if (n.id == v) {
                    api.setHeadText(self.text()).setIndex(i);
                }
            })
        });
    }

    //新页面地址输入需求
    function drawContentHouse(ids, citys, elem, api) {
        var cityids = typeof ids == "string" ? ids.split(",") : ids;

        elem.empty();
        $.map(cityids, function (i) {
            $.map(cityInfo_tehui.citys, function (n) {
                if (n.id == i) {
                    elem.append($("<span/>").text(n.name).attr({ "data-value": i, "data-url": n.url }));
                }
            })
        });

        // bind chose city event
        elem.find("span").unbind().bind("click", function () {
            var self = $(this), v = self.attr("data-value");
            $.each(cityInfo.citys, function (i, n) {
                if (n.id == v) {
                    api.setHeadText(self.text()).setIndex(i);
                }
            });
            window.location.href = self.attr("data-url");
        });
    }


    // jQuery plugin implementation
    $.fn.selEnter = function (conf) {
        var api = $(this).data("selectinput");  // 获取selectApi
        var $head = api.getHead(),  // 获取模拟select的 Head DOM  
        backHtml,
        $headIpt = $("<input/>").attr("type", "text");

        // configuration
        conf = api.getConf();

        api.onBeforeShow(function () {
            $head.html($headIpt.attr("value", $head.text()));
            $headIpt.css({
                width: $head.width()
            }).addClass("selectInput")[0].select();
            initShow(api);
            api.getRoot().addClass("select-list").show();
        });


        api.onShow(function () {
            initCheckVal($headIpt);
            openCheckIpt($headIpt[0], api, function () {
                var iptval = getIptVal($headIpt);
                var data = getKeyData(), data = !!data ? data : api.getData();
                if (api.getSelect().attr("fewItems") == "true") //只有很少的城市的，则直接在select的数据里面检索
                {
                    data = api.getData();
                }
                var searchResult = checkValInData(data, iptval);
                if (searchResult != null && searchResult.length > 0) {
                    var root = api.getRoot();
                    root.empty().removeClass("select-list");
                    root.append('<div class="address_hotcity"><strong>请选择您要入住的城市</strong></div>');
                    $.map(searchResult, function (n) {
                        n = n.split("|||");
                        //root.append("<li data-value='" + n[0] + "' data-index='" + n[4] + "' data-name='" + n[1] + "' data-text=" + n[2] + "><strong>" + n[2] + "</strong><span>" + n[1] + "</span></li>");
                        root.append("<li data-value='" + n[0] + "' data-index='" + n[n.length - 1] + "' data-name='" + n[1] + "' data-text=" + n[2] + "><strong>" + n[2] + "</strong><span>" + n[1] + "</span></li>");
                    });
                    root.find("li").eq(0).addClass(conf.css.current);
                    api.setIndex(root.find("li").eq(0).attr("data-index"));
                } else {
                    var root = api.getRoot();
                    root.empty().removeClass("select-list");
                    root.append('<div class="address_hotcity"><strong>对不起，没有找到 ' + iptval + '</strong></div>');
                }
            })
        });

        api.change(function (e, elem) {
            var innerText = $(elem).attr("data-text");
            setIptVal($head, $headIpt, innerText);
        });

        api.onHide(function () {
            var selectIpt = api.getHead().find("input"),
			    $head = api.getHead(),
				$current = api.getRoot().find("li." + conf.css.current);

            closeCheckIpt();

            if ($current.length) {
                api.setValue($current);
            } else {
                var checkResult = checkIpt(selectIpt);
                if (checkResult == 1) {
                    setIptVal($head, selectIpt, "中文/拼音");
                } else if (checkResult == 2) {
                    if (checkValInData(api.getData(), selectIpt.val()).length) {
                        setIptVal($head, selectIpt, selectIpt.val());
                    } else {
                        setIptVal($head, selectIpt, "中文/拼音");
                    }
                }
            }
        });

        return api;
    };

    // 新页面地址支持房屋数量需求情况插件
    $.fn.selHouseEnter = function (conf) {
        var api = $(this).data("selectinput");  // 获取selectApi
        var $head = api.getHead(),  // 获取模拟select的 Head DOM  
        backHtml,
      //  $headIpt = $("<input/>").attr("type", "text");
        // configuration
        conf = api.getConf();

        api.onBeforeShow(function () {
            //   $head.html($headIpt.attr("value", $head.text()));
            //$headIpt.css({
            //    width: $head.width()
            //}).addClass("selectInput")[0].select();
            initShowHouse(api);
            api.getRoot().addClass("select-list").show();
        });

        var $curSel = api.getSelect().find("[sel]");

        if ($curSel.length > 0) {
            // api.setHeadText($curSel.text() + "(" + $curSel.attr("data-housenum") + ")");
            api.setHeadText($curSel.text());
            $head.addClass("title-cur");
        } else {
            api.setHeadText("更多城市");
            $head.removeClass("title-cur");
        }

        api.onShow(function () {
            // initCheckVal($headIpt);
            /*    openCheckIpt($headIpt[0], api, function () {
                    var iptval = getIptVal($headIpt);
                    var data = getKeyData(), data = !!data ? data : api.getData();
                    if (api.getSelect().attr("fewItems") == "true") //只有很少的城市的，则直接在select的数据里面检索
                    {
                        data = api.getData();
                    }
                    var searchResult = checkValInData(data, iptval);
                    if (searchResult != null && searchResult.length > 0) {
                        var root = api.getRoot();
                        root.empty().removeClass("select-list");
                        root.append('<div class="address_hotcity"><strong>请选择您要入住的城市</strong></div>');
                        $.map(searchResult, function (n) {
                            n = n.split("|||");
                            //root.append("<li data-value='" + n[0] + "' data-index='" + n[4] + "' data-name='" + n[1] + "' data-text=" + n[2] + "><strong>" + n[2] + "</strong><span>" + n[1] + "</span></li>");
                            root.append("<li data-value='" + n[0] + "' data-index='" + n[n.length - 1] + "' data-name='" + n[1] + "' data-text=" + n[2] + "><strong>" + n[2] + "</strong><span>" + n[1] + "</span></li>");
                        });
                        root.find("li").eq(0).addClass(conf.css.current);
                        api.setIndex(root.find("li").eq(0).attr("data-index"));
                    } else {
                        var root = api.getRoot();
                        root.empty().removeClass("select-list");
                        root.append('<div class="address_hotcity"><strong>对不起，没有找到 ' + iptval + '</strong></div>');
                    }
                })*/
        });

        api.change(function (e, elem) {
            var innerText = $(elem).attr("data-text");
            //        setIptVal($head, $headIpt, innerText);
        });

        api.onHide(function () {
            var selectIpt = api.getHead().find("input"),
			    $head = api.getHead(),
				$current = api.getSelect().find("[selected]");

            closeCheckIpt();

            if ($current.length) {
                // api.setHeadText($current.text() + "(" + $current.attr("data-housenum") + ")");
                api.setHeadText($current.text());
                // api.setValue($current);
            } else {
                /* var checkResult = checkIpt(selectIpt);
                 if (checkResult == 1) {
                     setIptVal($head, selectIpt, "更多城市");
                 } else if (checkResult == 2) {
                     if (checkValInData(api.getData(), selectIpt.val()).length) {
                         setIptVal($head, selectIpt, selectIpt.val());
                     } else {
                         setIptVal($head, selectIpt, "更多城市");
                     }
                 }*/
            }
        });

        return api;
    };
    // 默认展示数据
    function LandlordEnternormalShow(api) {
        var data = api.getSelect().find("option"),
		root = api.getRoot();
        root.empty().removeClass("select-list");
        root.append('<div class="address_hotcity"><strong>请选择您要入住的城市</strong></div>');
        $.each(data, function (i, n) {
            /*var val = n.value, text = n.firstChild.nodeValue || n.innerText, py = (n.getAttribute("name") || n.name) || "", province = (n.getAttribute("data-province"));*/
            var val = $(this).attr("value"), text = $(this).text(), py = $(this).attr("name") || "", province = $(this).attr("data-province");
            root.append("<li data-value='" + val + "' data-index='" + i + "' data-name='" + py + "' data-text='" + text + "' data-province='" + province + "'><strong>" + text + "</strong><span>" + py + "</span></li>");
        });
        root.find("li").eq(0).addClass(api.getConf().css.current);
        api.setIndex(root.find("li").eq(0).attr("data-index"));
    }
    $.fn.selLandlordEnter = function (conf) {
        var api = $(this).data("selectinput");  // 获取selectApi
        var $apiid = $(this).attr("id");
        var $head = api.getHead(),  // 获取模拟select的 Head DOM  
        backHtml,
        $headIpt = $("<input/>").attr("type", "text");

        // configuration
        conf = api.getConf();
        normalShowForce = conf.normalShowForce ? true : false;

        api.onBeforeShow(function () {
            $head.html($headIpt.attr("value", $head.text()));
            $headIpt.css({
                width: $head.width()
            }).addClass("selectInput")[0].select();
            //  initShow(api);
            //  api.getRoot().addClass("select-list").show();
            // LandlordEnternormalShow(api);
            // setIptVal($head, $headIpt, "支持自动匹配");



            var iptval = getIptVal($headIpt);
            var data = getKeyDataC(cityInfoc), data = !!data ? data : api.getData();

            var searchResult = checkValInData(data, iptval);
            if (searchResult != null && searchResult.length > 0) {
                var root = api.getRoot();
                root.empty().removeClass("select-list");
                root.append('<div class="address_hotcity"><strong>请选择您要入住的城市</strong></div>');
                $.map(searchResult, function (n) {
                    n = n.split("|||");
                    //root.append("<li data-value='" + n[0] + "' data-index='" + n[4] + "' data-name='" + n[1] + "' data-text=" + n[2] + "><strong>" + n[2] + "</strong><span>" + n[1] + "</span></li>");
                    root.append("<li data-value='" + n[4] + "' data-index='" + n[n.length - 1] + "' data-name='" + n[1] + "' data-province='" + n[3] + "' data-text=" + n[2] + "><strong>" + n[2] + "</strong><span>" + n[1] + "</span></li>");
                });
                root.find("li").eq(0).addClass(conf.css.current);
                //api.setIndex(root.find("li").eq(0).attr("data-index"));
            } else {
                LandlordEnternormalShow(api);
            }


        });
        setIptVal($head, api.getHead().find("input"), api.getSelect().find("option[selected=selected]").text());

        api.onShow(function () {
            initCheckVal($headIpt);
            openCheckIpt($headIpt[0], api, function () {
                var iptval = getIptVal($headIpt);
                var data = getKeyDataC(cityInfoc), data = !!data ? data : api.getData();

                var searchResult = checkValInData(data, iptval);
                if (searchResult != null && searchResult.length > 0) {
                    var root = api.getRoot();
                    root.empty().removeClass("select-list");
                    root.append('<div class="address_hotcity"><strong>请选择您要入住的城市</strong></div>');
                    $.map(searchResult, function (n) {
                        n = n.split("|||");
                        //root.append("<li data-value='" + n[0] + "' data-index='" + n[4] + "' data-name='" + n[1] + "' data-text=" + n[2] + "><strong>" + n[2] + "</strong><span>" + n[1] + "</span></li>");
                        root.append("<li data-value='" + n[4] + "' data-index='" + n[n.length - 1] + "' data-name='" + n[1] + "' data-province='" + n[3] + "' data-text=" + n[2] + "><strong>" + n[2] + "</strong><span>" + n[1] + "</span></li>");
                    });
                    root.find("li").eq(0).addClass(conf.css.current);
                    api.setIndex(root.find("li").eq(0).attr("data-index"));
                } else {
                    var root = api.getRoot();
                    root.empty().removeClass("select-list");
                    root.append('<div class="address_hotcity"><strong>对不起，没有找到 ' + iptval + '</strong></div>');
                }
            })
        });

        api.change(function (e, elem) {
            var innerText = $(elem).attr("data-text");
            var innerValue = $(elem).attr("data-value");
            var innerprovince = $(elem).attr("data-province");
            $("#CityID" + $apiid).val(innerValue);
            $("#CityName" + $apiid).val(innerText);
            $("#ProvinceID" + $apiid).val(innerprovince);

            setIptVal($head, $headIpt, innerText);
        });

        api.onHide(function () {
            var selectIpt = api.getHead().find("input"),
			    $head = api.getHead(),
				$current = api.getRoot().find("li." + conf.css.current);

            closeCheckIpt();

            if ($current.length) {
                api.setValue($current);
            } else {
                var checkResult = checkIpt(selectIpt);
                if (checkResult == 1) {
                    setIptVal($head, selectIpt, "中文/拼音");
                } else if (checkResult == 2) {
                    if (checkValInData(api.getData(), selectIpt.val()).length) {
                        setIptVal($head, selectIpt, selectIpt.val());
                    } else {
                        setIptVal($head, selectIpt, "中文/拼音");
                    }
                }
            }
        });

        return api;
    };

    // jQuery plugin implementation
    /*  $.fn.areaSelect = function (conf) {
          var api = $(this).data("selectinput");  // 获取selectApi
          var $head = api.getHead(),  // 获取模拟select的 Head DOM  
          backHtml,
          $headIpt = $("<input/>").attr("type", "text");
  
          // configuration
          conf = api.getConf();
  
          api.onBeforeShow(function () {
              $head.html($headIpt.attr("value", $head.text()));
              $headIpt.css({
                  width: $head.width()
              }).addClass("selectInput")[0].select();
              areaInitShow(api);
              api.getRoot().addClass("select-list").show();
          });
  
  
          api.onShow(function () {
              initCheckVal($headIpt);
              openCheckIpt($headIpt[0], api, function() {
                  var iptval = getIptVal($headIpt);
             //     console.log(getKeyData());
                  var data = getKeyData(), data = !!data ? data : api.getData();
  
                  var searchResult = checkValInData(data, iptval);
                  if (searchResult != null && searchResult.length > 0) {
                      var root = api.getRoot();
                      root.empty().removeClass("select-list");
                      root.append('<div class="address_hotcity"><strong>请选择您要入住的城市</strong></div>');
                      $.map(searchResult, function(n) {
                          n = n.split("|||");
                          root.append("<li data-value='" + n[0] + "' data-index='" + n[4] + "' data-name='" + n[1] + "' data-text=" + n[2] + "><strong>" + n[2] + "</strong><span>" + n[1] + "</span></li>");
                      });
                      root.find("li").eq(0).addClass(conf.css.current);
                      api.setIndex(root.find("li").eq(0).attr("data-index"));
                  } else {
                      areaNormalShow(api);
                  }
              });
          });
  
          api.change(function (e, elem) {
              var innerText = $(elem).attr("data-text");
              setIptVal($head, $headIpt, innerText);
          });
  
          api.onHide(function () {
              var selectIpt = api.getHead().find("input"),
                  $head = api.getHead(),
                  $current = api.getRoot().find("li." + conf.css.current);
  
              closeCheckIpt();
  
              if ($current.length) {
                  api.setValue($current);
              } else {
                  var checkResult = checkIpt(selectIpt);
                  if (checkResult == 1) {
                      setIptVal($head, selectIpt, "中文/拼音");
                  } else if (checkResult == 2) {
                      if (checkValInData(api.getData(), selectIpt.val()).length) {
                          setIptVal($head, selectIpt, selectIpt.val());
                      } else {
                          setIptVal($head, selectIpt, "中文/拼音");
                      }
                  }
              }
          });
      };*/

    $.fn.worldAreaSelect = function (conf, cityInfo) {
        var api = $(this).data("selectinput");  // 获取selectApi
        var $head = api.getHead(),  // 获取模拟select的 Head DOM  
        backHtml,
        $headIpt = $("<input/>").attr("type", "text");

        // configuration
        conf = api.getConf();

        api.onBeforeShow(function () {
            $head.html($headIpt.attr("value", $head.text()));
            $headIpt.css({
                width: $head.width()
            }).addClass("selectInput")[0].select();
            areaInitShow(api, cityInfo);
            api.getRoot().addClass("select-list").show();
        });


        api.onShow(function () {
            initCheckVal($headIpt);
            openCheckIpt($headIpt[0], api, function () {
                var iptval = escape(getIptVal($headIpt));
                var data = getWorldKeyData(cityInfo), data = !!data ? data : api.getData();
                var root = api.getRoot();
                var searchResult = checkValInData(data, iptval);
                if (searchResult != null && searchResult.length > 0) {
                    root.empty().removeClass("select-list");
                    root.append('<div class="address_hotcity"><strong>请选择您要入住的城市</strong></div>');
                    $.map(searchResult, function (n) {
                        n = n.split("|||");
                        root.append("<li data-value='" + n[0] + "' data-index='" + n[4] + "' data-name='" + n[1] + "' data-text=" + n[2] + "><strong>" + n[2] + "</strong><span>" + n[1] + "</span></li>");
                    });
                    root.find("li").eq(0).addClass(conf.css.current);
                    api.setIndex(root.find("li").eq(0).attr("data-index"));
                } else {
                    root.empty().removeClass("select-list");
                    root.append('<div class="address_hotcity"><strong class="error-info">对不起，找不到:' + iptval + '</strong></div>');
                    // areaNormalShow(api);
                }
            });
        });

        api.change(function (e, elem) {
            var innerText = $(elem).attr("data-text");
            setIptVal($head, $headIpt, innerText);
        });

        api.onHide(function () {
            var selectIpt = api.getHead().find("input"),
                $head = api.getHead(),
                $current = api.getRoot().find("li." + conf.css.current);

            closeCheckIpt();

            if ($current.length) {
                api.setValue($current);
            } else {
                var checkResult = checkIpt(selectIpt);
                if (checkResult == 1) {
                    setIptVal($head, selectIpt, "中文/拼音");
                } else if (checkResult == 2) {
                    if (checkValInData(api.getData(), selectIpt.val()).length) {
                        setIptVal($head, selectIpt, selectIpt.val());
                    } else {
                        setIptVal($head, selectIpt, "中文/拼音");
                    }
                }
            }
        });
        return this;
    };

    // 初始化展示数据
    /* function areaInitShow(api,cityInfo) {
         var data = api.getSelect().find("option[data-show]"),
         index = api.getIndex(),
         root = api.getRoot(),
         info;
 
         try {
             info = cityInfo;
         } catch (e) {
             console.log("城市信息不存在，请检查");
             return false;
         }
 
         root.empty().append('<div id="m-area-drop" class="m-area-drop"></div>');
         var rootDiv = root.find("div");
 
 
         // add area
         $.each(info.areagroups, function (i, n) {
             var $div = $("<div class='area-item'><h2 class='area-name'>" + n.name + "</h2><div class='area-list'></div></div>");
             rootDiv.append($div);
 
             if (i % 2 == 1) {
                 $div.addClass("current");
             }
 
             if (i + 1 == info.areagroups.length) {
                 $div.css("border", "0px");
             }
 
             $div.hover(function () {
                 //$div.addClass("current");
             }, function () {
                 //$div.removeClass("current");
             })
 
             areaDrawContent(n.cityids, info.citys, $div.find("div.area-list"), api);
         })
     }*/

    function areaInitShow(api, cityInfo) {
        var data = api.getSelect().find("option[data-show]"),
        index = api.getIndex(),
        root = api.getRoot(),
        info;
        // draw tab content
        function drawContent(ids, citys, elem, api) {
            var cityids = typeof ids == "string" ? ids.split(",") : ids;

            elem.empty();
            $.map(cityids, function (i) {
                $.map(cityInfo.citys, function (n) {
                    if (n.id == i) {
                        elem.append($("<span/>").text(n.name).attr("data-value", i));
                    }
                })
            });

            // bind chose city event
            elem.find("span").unbind().bind("click", function () {
                var self = $(this), v = self.attr("data-value");
                $.each(cityInfo.citys, function (i, n) {
                    if (n.id == v) {
                        api.setHeadText(self.text()).setIndex(i);
                    }
                })
            });
        }
        try {
            info = cityInfo;
        } catch (e) {
            //   console.log("城市信息不存在，请检查");
            return false;
        }

        root.empty().append('<div><div class="address_tabs"></div><div class="address_content"></div></div>');
        // get cityinfo and group by tabs

        var rootDiv = root.find("div"), $tabElem = rootDiv.eq(1), $tabInfoElem = rootDiv.eq(2);

        // add tab of lettergroups
        $.each(info.areagroups, function (i, n) {
            var $span = $("<span/>").text(n.name).attr("data-cityids", n.cityids);
            $tabElem.append($span);
        });

        var $tabElemSpan = $tabElem.find("span");
        $tabElemSpan.first().addClass("current");
        $tabElemSpan.unbind().bind("click", function () {
            drawContent($(this).attr("data-cityids"), info.citys, $tabInfoElem, api);
            $tabElemSpan.removeClass("current");
            $(this).addClass("current");
            return false;
        });

        drawContent(info.areagroups[0].cityids, info.citys, $tabInfoElem, api);

        // added by liuyu 20131030
        api.getConf().IsNotSelectState = true;
    }

    // draw tab content
    function areaDrawContent(ids, citys, elem, api) {

        var cityids = typeof ids == "string" ? ids.split(",") : ids;

        elem.empty();
        $.map(cityids, function (i) {
            $.map(citys, function (n) {
                if (n.id == i) {
                    elem.append($("<span/>").text(n.name).attr("data-value", i));
                }
            })
        });

        // bind chose city event
        elem.find("span").unbind().bind("click", function () {
            var self = $(this), v = self.attr("data-value");
            $.each(citys, function (i, n) {
                if (n.id == v) {
                    api.setHeadText(self.text()).setIndex(i);
                }
            })
        });
    }



})(jQuery);
/*
* Tooltip zhangjingwei V1.1
* Released under the MIT, BSD, and GPL Licenses.
*/
(function ($) {
    $.tools = $.tools || { version: '1.0' };

    var tool = $.tools.tooltip = {
        position: "right",
        arrow: ".arrow", // aroow elem filter
        html: "",
        tip: null,
        tipclass: "tipbox",
        layout: "<div/>",
        targetMode: null,
        targetAttr: "href",
        cancelDefault: true,
        timeout: 50
    }

    // 根据弹出方向获取节点位置
    function getOffset($elem1, $elem2, dire) {
        var $win = $(window),
		windowWH = { w: $win.outerWidth(), h: $win.outerHeight() }, // 浏览器窗口宽高
		elemoffset = $elem1.offset(),
		elem1W = $elem1.innerWidth(),
		elem1H = $elem1.innerHeight(),
		elem2W = $elem2.outerWidth(true),
        elem2H = $elem2.outerHeight(true),
        scrollLeft = $win.scrollLeft(),
		scrollTop = $win.scrollTop(),
		offsetAll = {
		    top: elemoffset.top - scrollTop,
		    bottom: windowWH.h - elemoffset.top - scrollTop - elem1H,
		    left: elemoffset.left - scrollLeft,
		    right: windowWH.w - elemoffset.left - scrollLeft - elem1W,
		    win: windowWH
		},
        
		pos = {
		    "position": "absolute"
		},
		$arrow = $elem2.find("div[data-arrow]");

        dire = getDire(dire, offsetAll, elem1W, elem1H, elem2W, elem2H);
        //tooltip初次显示时，$elem2元素还未加载进来，所以高度没有计算在内，此时
        //要加上这个高度，目前为240，否则初次显示时位置会偏下。
        
        if (elem2H < 50 && $elem1.text()=="[地图]") {
            elem2H = 245;
            //alert(elem2H + "," + $elem1.text());
        }
        switch (dire) {
            case "left":
                $arrow.removeClass().addClass("tipbox-direction tipbox-right");
                pos.top = verticalmiddle(elemoffset.top, elem1H, elem2H);
                pos.left = elemoffset.left - elem2W - Math.abs(parseInt($arrow.css("right")));
                break;
            case "right":
                $arrow.removeClass().addClass("tipbox-direction tipbox-left");
                pos.top = verticalmiddle(elemoffset.top, elem1H, elem2H);
                pos.left = elemoffset.left + elem1W + Math.abs(parseInt($arrow.css("left")));
                //alert(elemoffset.top +"," + elem1H + "," + elem2H);
                break;
            case "top":
                $arrow.removeClass().addClass("tipbox-direction tipbox-down");
                pos.left = horizontallymiddle(elemoffset.left, elem1W, elem2W);
                pos.top = elemoffset.top - elem2H - Math.abs(parseInt($arrow.css("bottom")));
                break;
            case "bottom":
                $arrow.removeClass().addClass("tipbox-direction tipbox-up");
                pos.left = horizontallymiddle(elemoffset.left, elem1W, elem2W);
                pos.top = elemoffset.top + elem1H + Math.abs(parseInt($arrow.css("top"))); ;
                break;
            default:
                break;
        }
        return pos;
    }

    // 计算正确弹出方向
    function getDire(dire, offsetAll, w1, h1, w2, h2) {
        // 简单判断，抛弃循环
        var allDire, direResult = false;
        if (dire == "right") {
            allDire = ["right", "left", "top", "bottom"];
        } else if (dire == "top") {
            allDire = ["top", "bottom", "left", "right"];
        } else if (dire == "left") {
            allDire = ["left", "right", "top", "bottom"];
        } else {
            allDire = ["bottom", "top", "left", "right"];
        }

        for (var i = 0; i < 4; i++) {
            var v = allDire[i];
            if (v == "right") {
                if (w2 <= offsetAll.right && h2 / 2 <= offsetAll.top + h1 / 2) {
                    direResult = v;
                    break;
                }
            } else if (v == "top") {
                if (h2 <= offsetAll.top && w2 <= offsetAll.win.w) {
                    direResult = v;
                    break;
                }
            } else if (v == "left") {
                if (w2 <= offsetAll.left && h2 / 2 <= offsetAll.top + h1 / 2) {
                    direResult = v;
                    break;
                }
            } else {
                if (h2 <= offsetAll.bottom && w2 <= offsetAll.win.w) {
                    direResult = v;
                    break;
                }
            }
        }

        // 如果所有方向均不符合则采用默认方向
        return direResult = direResult ? direResult : dire;
    }

    // 计算垂直居中
    function verticalmiddle(elemtop, elem1H, elem2H) {
        return elemtop + parseInt(elem1H - elem2H) / 2;
    }

    // 计算水平居中
    function horizontallymiddle(elemleft, elem1W, elem2W) {
        return elemleft + parseInt(elem1W - elem2W) / 2;
    }

    // 插入节点
    function innerTip($wrap, tipclassname, dire, htmlval, targetAttr) {
        var $tipElem = $("<div/>").addClass(tipclassname).html('<div class="cntBox" data-innerElem="true">' + htmlval + '</div><div class="tipbox-direction tipbox-left" data-arrow="true"><em>◆</em><span>◆</span></div>').hide().appendTo("body"),
		offset = null;

        return $tipElem.css(getOffset($wrap, $tipElem, dire)).show();
    }

    // 删除节点
    function delTip($elem) {
        $elem.remove();
    }

    // 增加scroll&resize事件
    function addEvent($wrap, $tipelem, dire) {
        $(window).bind("resize.tip", function () {
            $tipelem.css(getOffset($wrap, $tipelem, dire));
        }).bind("scroll.tip", function () {
            $tipelem.css(getOffset($wrap, $tipelem, dire));
        })
    }

    // 取消scroll&&resize事件
    function removeEvent() {
        $(window).unbind("resize.tip").unbind("scroll.tip");
    }

    function Tooltip($wrap, conf) {
        var self = this,
			dire = conf.position,
			tipclass = conf.tipclass,
			inerHTMLVAL = conf.targetMode || conf.html,
			tipelem,
			time,
            title = $wrap.attr("title"),
            alt = $wrap.attr("alt");

        // setTimeout and clearTimeout
        function startTimer(fn, t) {
            t = t || 100
            time = setTimeout(function () {
                fn.call(this);
            }, t);
        }

        function stopTimer() {
            if (time) {
                clearTimeout(time);
                time = null;
            }
        }

        // 绑定TIP上的事件
        function bindTipEvent($tipelem) {
            $tipelem.hover(
	           function () {
	               stopTimer();
	           },
	           function () {
	               startTimer(function () {
	                   delTip($tipelem);
	                   tipelem = undefined;
	               }, 50);
	           }
	       )
        }

        // remove default title && alt
        if (conf.cancelDefault) {
            if (title) {
                $wrap.removeAttr("title");
                $wrap.data("title", title);
            }

            if (alt) {
                $wrap.removeAttr("alt");
                $wrap.data("alt", alt);
            }
        }

        $wrap.mouseenter(function (e) {
            stopTimer();
            if (!tipelem) {
                tipelem = innerTip($wrap, tipclass, dire, inerHTMLVAL, conf.targetAttr);
                addEvent($wrap, tipelem, dire);
                //bindTipEvent(tipelem);
            }
        }).mouseleave(function (e) {
            if (tipelem) {
                startTimer(function () {
                    delTip(tipelem);
                    tipelem = undefined;
                    removeEvent()
                }, conf.timeout);
            }
        })

        $.extend(self, {
            reset: function () {
                $("." + tipclass).remove();
                return self;
            },
            getWrap: function () {
                return $wrap;
            },
            getContent: function () {
                return tipelem;
            },
            getConf: function () {
                return conf;
            }
        });
    }

    $.fn.tooltip = function (conf) {
        if (this.data("tooltip")) { return this; }

        conf = $.extend(true, {}, tool, conf);
        var els;
        var el = new Tooltip($(this), conf);
        var wrap = el.getWrap().data("tooltip", el);

        els = els ? els.add(wrap) : wrap;
        return this;
    }
})(jQuery);
$.easing.jswing = $.easing.swing;

$.extend($.easing,
{
    def: 'easeOutQuad',
    swing: function (x, t, b, c, d) {
        //alert($.easing.default);
        return $.easing[$.easing.def](x, t, b, c, d);
    },
    easeInQuad: function (x, t, b, c, d) {
        return c * (t /= d) * t + b;
    },
    easeOutQuad: function (x, t, b, c, d) {
        return -c * (t /= d) * (t - 2) + b;
    },
    easeInOutQuad: function (x, t, b, c, d) {
        if ((t /= d / 2) < 1) return c / 2 * t * t + b;
        return -c / 2 * ((--t) * (t - 2) - 1) + b;
    },
    easeInCubic: function (x, t, b, c, d) {
        return c * (t /= d) * t * t + b;
    },
    easeOutCubic: function (x, t, b, c, d) {
        return c * ((t = t / d - 1) * t * t + 1) + b;
    },
    easeInOutCubic: function (x, t, b, c, d) {
        if ((t /= d / 2) < 1) return c / 2 * t * t * t + b;
        return c / 2 * ((t -= 2) * t * t + 2) + b;
    },
    easeInQuart: function (x, t, b, c, d) {
        return c * (t /= d) * t * t * t + b;
    },
    easeOutQuart: function (x, t, b, c, d) {
        return -c * ((t = t / d - 1) * t * t * t - 1) + b;
    },
    easeInOutQuart: function (x, t, b, c, d) {
        if ((t /= d / 2) < 1) return c / 2 * t * t * t * t + b;
        return -c / 2 * ((t -= 2) * t * t * t - 2) + b;
    },
    easeInQuint: function (x, t, b, c, d) {
        return c * (t /= d) * t * t * t * t + b;
    },
    easeOutQuint: function (x, t, b, c, d) {
        return c * ((t = t / d - 1) * t * t * t * t + 1) + b;
    },
    easeInOutQuint: function (x, t, b, c, d) {
        if ((t /= d / 2) < 1) return c / 2 * t * t * t * t * t + b;
        return c / 2 * ((t -= 2) * t * t * t * t + 2) + b;
    },
    easeInSine: function (x, t, b, c, d) {
        return -c * Math.cos(t / d * (Math.PI / 2)) + c + b;
    },
    easeOutSine: function (x, t, b, c, d) {
        return c * Math.sin(t / d * (Math.PI / 2)) + b;
    },
    easeInOutSine: function (x, t, b, c, d) {
        return -c / 2 * (Math.cos(Math.PI * t / d) - 1) + b;
    },
    easeInExpo: function (x, t, b, c, d) {
        return (t == 0) ? b : c * Math.pow(2, 10 * (t / d - 1)) + b;
    },
    easeOutExpo: function (x, t, b, c, d) {
        return (t == d) ? b + c : c * (-Math.pow(2, -10 * t / d) + 1) + b;
    },
    easeInOutExpo: function (x, t, b, c, d) {
        if (t == 0) return b;
        if (t == d) return b + c;
        if ((t /= d / 2) < 1) return c / 2 * Math.pow(2, 10 * (t - 1)) + b;
        return c / 2 * (-Math.pow(2, -10 * --t) + 2) + b;
    },
    easeInCirc: function (x, t, b, c, d) {
        return -c * (Math.sqrt(1 - (t /= d) * t) - 1) + b;
    },
    easeOutCirc: function (x, t, b, c, d) {
        return c * Math.sqrt(1 - (t = t / d - 1) * t) + b;
    },
    easeInOutCirc: function (x, t, b, c, d) {
        if ((t /= d / 2) < 1) return -c / 2 * (Math.sqrt(1 - t * t) - 1) + b;
        return c / 2 * (Math.sqrt(1 - (t -= 2) * t) + 1) + b;
    },
    easeInElastic: function (x, t, b, c, d) {
        var s = 1.70158; var p = 0; var a = c;
        if (t == 0) return b; if ((t /= d) == 1) return b + c; if (!p) p = d * .3;
        if (a < Math.abs(c)) { a = c; var s = p / 4; }
        else var s = p / (2 * Math.PI) * Math.asin(c / a);
        return -(a * Math.pow(2, 10 * (t -= 1)) * Math.sin((t * d - s) * (2 * Math.PI) / p)) + b;
    },
    easeOutElastic: function (x, t, b, c, d) {
        var s = 1.70158; var p = 0; var a = c;
        if (t == 0) return b; if ((t /= d) == 1) return b + c; if (!p) p = d * .3;
        if (a < Math.abs(c)) { a = c; var s = p / 4; }
        else var s = p / (2 * Math.PI) * Math.asin(c / a);
        return a * Math.pow(2, -10 * t) * Math.sin((t * d - s) * (2 * Math.PI) / p) + c + b;
    },
    easeInOutElastic: function (x, t, b, c, d) {
        var s = 1.70158; var p = 0; var a = c;
        if (t == 0) return b; if ((t /= d / 2) == 2) return b + c; if (!p) p = d * (.3 * 1.5);
        if (a < Math.abs(c)) { a = c; var s = p / 4; }
        else var s = p / (2 * Math.PI) * Math.asin(c / a);
        if (t < 1) return -.5 * (a * Math.pow(2, 10 * (t -= 1)) * Math.sin((t * d - s) * (2 * Math.PI) / p)) + b;
        return a * Math.pow(2, -10 * (t -= 1)) * Math.sin((t * d - s) * (2 * Math.PI) / p) * .5 + c + b;
    },
    easeInBack: function (x, t, b, c, d, s) {
        if (s == undefined) s = 3.70158;
        return c * (t /= d) * t * ((s + 1) * t - s) + b;
    },
    easeOutBack: function (x, t, b, c, d, s) {
        if (s == undefined) s = 1.70158;
        return c * ((t = t / d - 1) * t * ((s + 1) * t + s) + 1) + b;
    },
    easeInOutBack: function (x, t, b, c, d, s) {
        if (s == undefined) s = 1.70158;
        if ((t /= d / 2) < 1) return c / 2 * (t * t * (((s *= (1.525)) + 1) * t - s)) + b;
        return c / 2 * ((t -= 2) * t * (((s *= (1.525)) + 1) * t + s) + 2) + b;
    },
    easeInBounce: function (x, t, b, c, d) {
        return c - $.easing.easeOutBounce(x, d - t, 0, c, d) + b;
    },
    easeOutBounce: function (x, t, b, c, d) {
        if ((t /= d) < (1 / 2.75)) {
            return c * (7.5625 * t * t) + b;
        } else if (t < (2 / 2.75)) {
            return c * (7.5625 * (t -= (1.5 / 2.75)) * t + .75) + b;
        } else if (t < (2.5 / 2.75)) {
            return c * (7.5625 * (t -= (2.25 / 2.75)) * t + .9375) + b;
        } else {
            return c * (7.5625 * (t -= (2.625 / 2.75)) * t + .984375) + b;
        }
    },
    easeInOutBounce: function (x, t, b, c, d) {
        if (t < d / 2) return $.easing.easeInBounce(x, t * 2, 0, c, d) * .5 + b;
        return $.easing.easeOutBounce(x, t * 2 - d, 0, c, d) * .5 + c * .5 + b;
    }
});
/*!
* jQuery Cookie Plugin
* https://github.com/carhartl/jquery-cookie
*
* Copyright 2011, Klaus Hartl
* Dual licensed under the MIT or GPL Version 2 licenses.
* http://www.opensource.org/licenses/mit-license.php
* http://www.opensource.org/licenses/GPL-2.0
*/
(function ($) {
    $.cookie = function (key, value, options) {

        // key and at least value given, set cookie...
        if (arguments.length > 1 && (!/Object/.test(Object.prototype.toString.call(value)) || value === null || value === undefined)) {
            options = $.extend({}, options, {path:'/'});

            if (value === null || value === undefined) {
                options.expires = -1;
            }

            if (typeof options.expires === 'number') {
                var days = options.expires, t = options.expires = new Date();
                t.setDate(t.getDate() + days);
            }

            value = String(value);

            return (document.cookie = [
                encodeURIComponent(key), '=', options.raw ? value : encodeURIComponent(value),
                options.expires ? '; expires=' + options.expires.toUTCString() : '', // use expires attribute, max-age is not supported by IE
                options.path ? '; path=' + options.path : '',
                options.domain ? '; domain=' + options.domain : '',
                options.secure ? '; secure' : ''
            ].join(''));
        }

        // key and possibly options given, get cookie...
        options = value || {
            path: '/'
        };
        var decode = options.raw ? function (s) { return s; } : decodeURIComponent;

        var pairs = document.cookie.split('; ');
        for (var i = 0, pair; pair = pairs[i] && pairs[i].split('='); i++) {
            if (decode(pair[0]) === key) return decode(pair[1] || ''); // IE saves cookies with empty string as "c; ", e.g. without "=" as opposed to EOMB, thus pair[1] may be undefined
        }
        return null;
    };
})(jQuery);
/*
HHcookie = {
    // --- ����cookie
    set: function (sName, sValue, expireHours) {
        var cookieString = sName + "=" + escape(sValue);
        //;�ж��Ƿ����ù���ʱ��
        if (expireHours > 0) {
            var date = new Date();
            date.setTime(date.getTime + expireHours * 3600 * 1000);
            cookieString = cookieString + "; expire=" + date.toGMTString();
        }
        document.cookie = cookieString + "; path=/";
    },
    //--- ��ȡcookie
    get: function (sName) {
        var aCookie = document.cookie.split("; ");
        for (var j = 0; j < aCookie.length; j++) {
            var aCrumb = aCookie[j].split("=");
            if (escape(sName) == aCrumb[0])
                return unescape(aCrumb[1]);
        }
        return null;
    }
}*/
function getTujiacodeCookie(name) {
    var domain = getCookieDomain();
    var beforestr;
    if (domain.length > 1 && domain[0] == ".") {
        beforestr = domain.substring(1) + "_PortalContext_";
    } else {
        beforestr = domain + "_PortalContext_";
    }
    var nameEQ =beforestr+ name + "=";    
    var ca = document.cookie.split(';');       
    for(var i=0;i < ca.length;i++) {    
        var c = ca[i];                      
        while (c.charAt(0)==' ') {             
            c = c.substring(1,c.length);      
        }    
        if (c.indexOf(nameEQ) == 0) {     
            return unescape(c.substring(nameEQ.length,c.length));   
        }    
    }    
    return false;    
}

function getCookieDomain() {
    var pos = document.domain.indexOf(".");
    if (pos > 0) {
        return document.domain.substring(pos);
    } else {
        return document.domain;
    }
}
    
  
function clearTujiacodeCookie(name) {
    setTujiacodeCookie(name, "", -1);
}    
    
   
function setTujiacodeCookie(name, value, seconds) {
    if (document.domain == "localhost") {
        document.cookie = "localhost_PortalContext_" + name + "=" + escape(value);
        return;
    }

    var domain = getCookieDomain();
    var beforestr;
    if (domain.length > 1 && domain[0] == ".") {
        beforestr = domain.substring(1) + "_PortalContext_";
    } else {
        beforestr = domain + "_PortalContext_";
    }
    seconds = seconds || 0;   
    var expires = "";    
    if (seconds != 0 ) {      
        var date = new Date();    
        date.setTime(date.getTime()+(seconds*1000));    
        expires = "; expires="+date.toGMTString();    
    }
    document.cookie = beforestr + name + "=" + escape(value) + expires + "; path=/;domain=" + domain;
}  


var TujiaCookieName = ["OriginalCustomerSourceChannelID", "OriginalCustomerSourceChannelCode", "PromotionChannelID", "PromotionChannelCode", "SubCustomerSourceChannelCode", "HisPromotionChannelCode", "HisSubCustomerSourceChannelCode"];
var TujiaCookiehour = [0, 0, 0, 0, 0, 2592000, 2592000];

for(var cookieindex=0;cookieindex<TujiaCookieName.length;cookieindex++)
{
    if (getTujiacodeCookie("Temp" + TujiaCookieName[cookieindex]) != false)
    {
        var tujiacookievalue = getTujiacodeCookie("Temp" + TujiaCookieName[cookieindex]);
        setTujiacodeCookie(TujiaCookieName[cookieindex], tujiacookievalue, TujiaCookiehour[cookieindex])
    }
}
/**
* jQuery Validation Plugin 1.9.0
*
* http://bassistance.de/jquery-plugins/jquery-plugin-validation/
* http://docs.jquery.com/Plugins/Validation
*
* Copyright (c) 2006 - 2011 Jörn Zaefferer
*
* Dual licensed under the MIT and GPL licenses:
*   http://www.opensource.org/licenses/mit-license.php
*   http://www.gnu.org/licenses/gpl.html
*
*  此控件使用的是jQuery官网推荐的验证组件，但在本版本中针对 select 进行了修改（全部）
*  因此，不要轻易替换此控件，若替换则一定要多多测试，多谢！ jingweiz
*/

(function ($) {

    $.extend($.fn, {
        // http://docs.jquery.com/Plugins/Validation/validate
        validate: function (options) {

            // if nothing is selected, return nothing; can't chain anyway
            if (!this.length) {
                options && options.debug && window.console && console.warn("nothing selected, can't validate, returning nothing");
                return;
            }

            // check if a validator for this form was already created
            var validator = $.data(this[0], 'validator');
            if (validator) {
                return validator;
            }

            // Add novalidate tag if HTML5.
            this.attr('novalidate', 'novalidate');

            validator = new $.validator(options, this[0]);
            $.data(this[0], 'validator', validator);

            if (validator.settings.onsubmit) {

                var inputsAndButtons = this.find("input, button");

                // allow suppresing validation by adding a cancel class to the submit button
                inputsAndButtons.filter(".cancel").click(function () {
                    validator.cancelSubmit = true;
                });

                // when a submitHandler is used, capture the submitting button
                if (validator.settings.submitHandler) {
                    inputsAndButtons.filter(":submit").click(function () {
                        validator.submitButton = this;
                    });
                }

                // validate the form on submit
                this.submit(function (event) {
                    if (validator.settings.debug)
                    // prevent form submit to be able to see console output
                        event.preventDefault();

                    function handle() {
                        if (validator.settings.submitHandler) {
                            if (validator.submitButton) {
                                // insert a hidden input as a replacement for the missing submit button
                                var hidden = $("<input type='hidden'/>").attr("name", validator.submitButton.name).val(validator.submitButton.value).appendTo(validator.currentForm);
                            }
                            validator.settings.submitHandler.call(validator, validator.currentForm);
                            if (validator.submitButton) {
                                // and clean up afterwards; thanks to no-block-scope, hidden can be referenced
                                hidden.remove();
                            }
                            return false;
                        }
                        return true;
                    }

                    // prevent submit for invalid forms or custom submit handlers
                    if (validator.cancelSubmit) {
                        validator.cancelSubmit = false;
                        return handle();
                    }
                    if (validator.form()) {
                        if (validator.pendingRequest) {
                            validator.formSubmitted = true;
                            return false;
                        }
                        return handle();
                    } else {
                        validator.focusInvalid();
                        return false;
                    }
                });
            }

            return validator;
        },
        // http://docs.jquery.com/Plugins/Validation/valid
        valid: function () {
            if ($(this[0]).is('form')) {
                return this.validate().form();
            } else {
                var valid = true;
                var validator = $(this[0].form).validate();
                this.each(function () {
                    valid &= validator.element(this);
                });
                return valid;
            }
        },
        // attributes: space seperated list of attributes to retrieve and remove
        removeAttrs: function (attributes) {
            var result = {},
			$element = this;
            $.each(attributes.split(/\s/), function (index, value) {
                result[value] = $element.attr(value);
                $element.removeAttr(value);
            });
            return result;
        },
        // http://docs.jquery.com/Plugins/Validation/rules
        rules: function (command, argument) {
            var element = this[0];

            if (command) {
                var settings = $.data(element.form, 'validator').settings;
                var staticRules = settings.rules;
                var existingRules = $.validator.staticRules(element);
                switch (command) {
                    case "add":
                        $.extend(existingRules, $.validator.normalizeRule(argument));
                        staticRules[element.name] = existingRules;
                        if (argument.messages)
                            settings.messages[element.name] = $.extend(settings.messages[element.name], argument.messages);
                        break;
                    case "remove":
                        if (!argument) {
                            delete staticRules[element.name];
                            return existingRules;
                        }
                        var filtered = {};
                        $.each(argument.split(/\s/), function (index, method) {
                            filtered[method] = existingRules[method];
                            delete existingRules[method];
                        });
                        return filtered;
                }
            }

            var data = $.validator.normalizeRules(
		$.extend(
			{},
			$.validator.metadataRules(element),
			$.validator.classRules(element),
			$.validator.attributeRules(element),
			$.validator.staticRules(element)
		), element);

            // make sure required is at front
            if (data.required) {
                var param = data.required;
                delete data.required;
                data = $.extend({ required: param }, data);
            }

            return data;
        }
    });

    // Custom selectors
    $.extend($.expr[":"], {
        // http://docs.jquery.com/Plugins/Validation/blank
        blank: function (a) { return !$.trim("" + a.value); },
        // http://docs.jquery.com/Plugins/Validation/filled
        filled: function (a) { return !!$.trim("" + a.value); },
        // http://docs.jquery.com/Plugins/Validation/unchecked
        unchecked: function (a) { return !a.checked; }
    });

    // constructor for validator
    $.validator = function (options, form) {
        this.settings = $.extend(true, {}, $.validator.defaults, options);
        this.currentForm = form;
        this.init();
    };

    $.validator.format = function (source, params) {
        if (arguments.length == 1)
            return function () {
                var args = $.makeArray(arguments);
                args.unshift(source);
                return $.validator.format.apply(this, args);
            };
        if (arguments.length > 2 && params.constructor != Array) {
            params = $.makeArray(arguments).slice(1);
        }
        if (params.constructor != Array) {
            params = [params];
        }
        $.each(params, function (i, n) {
            source = source.replace(new RegExp("\\{" + i + "\\}", "g"), n);
        });
        return source;
    };

    $.extend($.validator, {

        defaults: {
            messages: {},
            groups: {},
            rules: {},
            errorClass: "error",
            validClass: "valid",
            errorElement: "label",
            focusInvalid: true,
            errorContainer: $([]),
            errorLabelContainer: $([]),
            onsubmit: true,
            ignore: ":hidden",
            ignoreTitle: false,
            onfocusin: function (element, event) {
                this.lastActive = element;

                // hide error label and remove error class on focus if enabled
                if (this.settings.focusCleanup && !this.blockFocusCleanup) {
                    this.settings.unhighlight && this.settings.unhighlight.call(this, element, this.settings.errorClass, this.settings.validClass);
                    this.addWrapper(this.errorsFor(element)).hide();
                }
            },
            onfocusout: function (element, event) {
                if (!this.checkable(element) && (element.name in this.submitted || !this.optional(element))) {
                    this.element(element);
                }
            },
            onkeyup: function (element, event) {
                if (element.name in this.submitted || element == this.lastElement) {
                    this.element(element);
                }
            },
            onclick: function (element, event) {
                // click on selects, radiobuttons and checkboxes
                if (element.name in this.submitted)
                    this.element(element);
                // or option elements, check parent select in that case
                else if (element.parentNode.name in this.submitted)
                    this.element(element.parentNode);
            },
            highlight: function (element, errorClass, validClass) {
                if (element.type === 'radio') {
                    this.findByName(element.name).addClass(errorClass).removeClass(validClass);
                } else if (element.tagName == "SELECT" || element.nodeName == "SELECT" || element.localName == "select") {
                    $(element).next().addClass(errorClass).removeClass(validClass);
                } else {
                    $(element).addClass(errorClass).removeClass(validClass);
                }
            },
            unhighlight: function (element, errorClass, validClass) {
                if (element.type === 'radio') {
                    this.findByName(element.name).removeClass(errorClass).addClass(validClass);
                } else if (element.tagName == "SELECT" || element.nodeName == "SELECT" || element.localName == "select") {
                    $(element).next().removeClass(errorClass).addClass(validClass);
                } else {
                    $(element).removeClass(errorClass).addClass(validClass);
                }
            }
        },

        // http://docs.jquery.com/Plugins/Validation/Validator/setDefaults
        setDefaults: function (settings) {
            $.extend($.validator.defaults, settings);
        },

        messages: {
            required: "必选字段",
            remote: "请修正该字段",
            email: "您输入的邮箱格式不正确",
            url: "请输入合法的网址",
            date: "请输入合法的日期",
            dateISO: "请输入合法的日期 (ISO).",
            number: "请输入合法的数字",
            digits: "只能输入整数",
            creditcard: "请输入合法的信用卡号",
            equalTo: "请再次输入相同的值",
            accept: "请输入拥有合法后缀名的字符串",
            maxlength: jQuery.validator.format("请输入一个长度最多是 {0} 的字符串"),
            minlength: jQuery.validator.format("请输入一个长度最少是 {0} 的字符串"),
            rangelength: jQuery.validator.format("请输入一个长度介于 {0} 和 {1} 之间的字符串"),
            range: jQuery.validator.format("请输入一个介于 {0} 和 {1} 之间的值"),
            max: jQuery.validator.format("请输入一个最大为 {0} 的值"),
            min: jQuery.validator.format("请输入一个最小为 {0} 的值")
        },

        autoCreateRanges: false,

        prototype: {

            init: function () {
                this.labelContainer = $(this.settings.errorLabelContainer);
                this.errorContext = this.labelContainer.length && this.labelContainer || $(this.currentForm);
                this.containers = $(this.settings.errorContainer).add(this.settings.errorLabelContainer);
                this.submitted = {};
                this.valueCache = {};
                this.pendingRequest = 0;
                this.pending = {};
                this.invalid = {};
                this.reset();

                var groups = (this.groups = {});
                $.each(this.settings.groups, function (key, value) {
                    $.each(value.split(/\s/), function (index, name) {
                        groups[name] = key;
                    });
                });
                var rules = this.settings.rules;
                $.each(rules, function (key, value) {
                    rules[key] = $.validator.normalizeRule(value);
                });

                function delegate(event) {
                    var validator = $.data(this[0].form, "validator"),
					eventType = "on" + event.type.replace(/^validate/, "");
                    validator.settings[eventType] && validator.settings[eventType].call(validator, this[0], event);
                }
                $(this.currentForm)
			       .validateDelegate("[type='text'], [type='password'], [type='file'], select, textarea, " +
						"[type='number'], [type='search'] ,[type='tel'], [type='url'], " +
						"[type='email'], [type='datetime'], [type='date'], [type='month'], " +
						"[type='week'], [type='time'], [type='datetime-local'], " +
						"[type='range'], [type='color'] ",
						"focusin focusout keyup", delegate)
				.validateDelegate("[type='radio'], [type='checkbox'], select, option", "click", delegate);

                if (this.settings.invalidHandler)
                    $(this.currentForm).bind("invalid-form.validate", this.settings.invalidHandler);
            },

            // http://docs.jquery.com/Plugins/Validation/Validator/form
            form: function () {
                this.checkForm();
                $.extend(this.submitted, this.errorMap);
                this.invalid = $.extend({}, this.errorMap);
                if (!this.valid())
                    $(this.currentForm).triggerHandler("invalid-form", [this]);
                this.showErrors();
                return this.valid();
            },

            checkForm: function () {
                this.prepareForm();
                for (var i = 0, elements = (this.currentElements = this.elements()); elements[i]; i++) {
                    this.check(elements[i]);
                }
                return this.valid();
            },

            // http://docs.jquery.com/Plugins/Validation/Validator/element
            element: function (element) {
                element = this.validationTargetFor(this.clean(element));
                this.lastElement = element;
                this.prepareElement(element);
                this.currentElements = $(element);
                var result = this.check(element);
                if (result) {
                    delete this.invalid[element.name];
                } else {
                    this.invalid[element.name] = true;
                }
                if (!this.numberOfInvalids()) {
                    // Hide error containers on last error
                    this.toHide = this.toHide.add(this.containers);
                }
                this.showErrors();
                return result;
            },

            // http://docs.jquery.com/Plugins/Validation/Validator/showErrors
            showErrors: function (errors) {
                if (errors) {
                    // add items to error list and map
                    $.extend(this.errorMap, errors);
                    this.errorList = [];
                    for (var name in errors) {
                        this.errorList.push({
                            message: errors[name],
                            element: this.findByName(name)[0]
                        });
                    }
                    // remove items from success list
                    this.successList = $.grep(this.successList, function (element) {
                        return !(element.name in errors);
                    });
                }
                this.settings.showErrors
				? this.settings.showErrors.call(this, this.errorMap, this.errorList)
				: this.defaultShowErrors();
            },

            resetElem: function (elem) {
                this.hideErrors();
                this.removeClass(this.settings.errorClass);
            },

            // http://docs.jquery.com/Plugins/Validation/Validator/resetForm
            resetForm: function () {
                if ($.fn.resetForm)
                    $(this.currentForm).resetForm();
                this.submitted = {};
                this.lastElement = null;
                this.prepareForm();
                this.hideErrors();
                this.elements().removeClass(this.settings.errorClass);
            },

            numberOfInvalids: function () {
                return this.objectLength(this.invalid);
            },

            objectLength: function (obj) {
                var count = 0;
                for (var i in obj)
                    count++;
                return count;
            },

            hideErrors: function () {
                this.addWrapper(this.toHide).hide();
            },

            valid: function () {
                return this.size() == 0;
            },

            size: function () {
                return this.errorList.length;
            },

            focusInvalid: function () {
                if (this.settings.focusInvalid) {
                    try {
                        $(this.findLastActive() || this.errorList.length && this.errorList[0].element || [])
					.filter(":visible")
					.focus()
                        // manually trigger focusin event; without it, focusin handler isn't called, findLastActive won't have anything to find
					.trigger("focusin");
                    } catch (e) {
                        // ignore IE throwing errors when focusing hidden elements
                    }
                }
            },

            findLastActive: function () {
                var lastActive = this.lastActive;
                return lastActive && $.grep(this.errorList, function (n) {
                    return n.element.name == lastActive.name;
                }).length == 1 && lastActive;
            },

            elements: function () {
                var validator = this,
				rulesCache = {};

                // select all valid inputs inside the form (no submit or reset buttons)
                return $(this.currentForm)
			.find("input, select, textarea")
			.not(":submit, :reset, :image, [disabled]")
			.not(this.settings.ignore)
			.filter(function () {
			    !this.name && validator.settings.debug && window.console && console.error("%o has no name assigned", this);

			    // select only the first element for each name, and only those with rules specified
			    if (this.name in rulesCache || !validator.objectLength($(this).rules()))
			        return false;

			    rulesCache[this.name] = true;
			    return true;
			});
            },

            clean: function (selector) {
                return $(selector)[0];
            },

            errors: function () {
                return $(this.settings.errorElement + "." + this.settings.errorClass, this.errorContext);
            },

            reset: function () {
                this.successList = [];
                this.errorList = [];
                this.errorMap = {};
                this.toShow = $([]);
                this.toHide = $([]);
                this.currentElements = $([]);
            },

            prepareForm: function () {
                this.reset();
                this.toHide = this.errors().add(this.containers);
            },

            prepareElement: function (element) {
                this.reset();
                this.toHide = this.errorsFor(element);
            },

            check: function (element) {
                element = this.validationTargetFor(this.clean(element));

                var rules = $(element).rules();
                var dependencyMismatch = false;
                for (var method in rules) {
                    var rule = { method: method, parameters: rules[method] };
                    try {
                        var result = $.validator.methods[method].call(this, element.value.replace(/\r/g, ""), element, rule.parameters);

                        // if a method indicates that the field is optional and therefore valid,
                        // don't mark it as valid when there are no other rules
                        if (result == "dependency-mismatch") {
                            dependencyMismatch = true;
                            continue;
                        }
                        dependencyMismatch = false;

                        if (result == "pending") {
                            this.toHide = this.toHide.not(this.errorsFor(element));
                            return;
                        }

                        if (!result) {
                            this.formatAndAdd(element, rule);
                            return false;
                        }
                    } catch (e) {
                        this.settings.debug && window.console && console.log("exception occured when checking element " + element.id
						 + ", check the '" + rule.method + "' method", e);
                        throw e;
                    }
                }
                if (dependencyMismatch)
                    return;
                if (this.objectLength(rules))
                    this.successList.push(element);
                return true;
            },

            // return the custom message for the given element and validation method
            // specified in the element's "messages" metadata
            customMetaMessage: function (element, method) {
                if (!$.metadata)
                    return;

                var meta = this.settings.meta
				? $(element).metadata()[this.settings.meta]
				: $(element).metadata();

                return meta && meta.messages && meta.messages[method];
            },

            // return the custom message for the given element name and validation method
            customMessage: function (name, method) {
                var m = this.settings.messages[name];
                return m && (m.constructor == String
				? m
				: m[method]);
            },

            // return the first defined argument, allowing empty strings
            findDefined: function () {
                for (var i = 0; i < arguments.length; i++) {
                    if (arguments[i] !== undefined)
                        return arguments[i];
                }
                return undefined;
            },

            defaultMessage: function (element, method) {
                return this.findDefined(
				this.customMessage(element.name, method),
				this.customMetaMessage(element, method),
                // title is never undefined, so handle empty string as undefined
				!this.settings.ignoreTitle && element.title || undefined,
				$.validator.messages[method],
				"<strong>Warning: No message defined for " + element.name + "</strong>"
			);
            },

            formatAndAdd: function (element, rule) {
                var message = this.defaultMessage(element, rule.method),
				theregex = /\$?\{(\d+)\}/g;
                if (typeof message == "function") {
                    message = message.call(this, rule.parameters, element);
                } else if (theregex.test(message)) {
                    message = jQuery.format(message.replace(theregex, '{$1}'), rule.parameters);
                }
                this.errorList.push({
                    message: message,
                    element: element
                });

                this.errorMap[element.name] = message;
                this.submitted[element.name] = message;
            },

            addWrapper: function (toToggle) {
                if (this.settings.wrapper)
                    toToggle = toToggle.add(toToggle.parent(this.settings.wrapper));
                return toToggle;
            },

            defaultShowErrors: function () {
                for (var i = 0; this.errorList[i]; i++) {
                    var error = this.errorList[i];
                    this.settings.highlight && this.settings.highlight.call(this, error.element, this.settings.errorClass, this.settings.validClass);
                    this.showLabel(error.element, error.message);
                }
                if (this.errorList.length) {
                    this.toShow = this.toShow.add(this.containers);
                }
                if (this.settings.success) {
                    for (var i = 0; this.successList[i]; i++) {
                        this.showLabel(this.successList[i]);
                    }
                }
                if (this.settings.unhighlight) {
                    for (var i = 0, elements = this.validElements(); elements[i]; i++) {
                        this.settings.unhighlight.call(this, elements[i], this.settings.errorClass, this.settings.validClass);
                    }
                }
                this.toHide = this.toHide.not(this.toShow);
                this.hideErrors();
                this.addWrapper(this.toShow).show();
            },

            validElements: function () {
                return this.currentElements.not(this.invalidElements());
            },

            invalidElements: function () {
                return $(this.errorList).map(function () {
                    return this.element;
                });
            },

            showLabel: function (element, message) {
                var label = this.errorsFor(element);
                if (label.length) {
                    // refresh error/success class
                    label.removeClass(this.settings.validClass).addClass(this.settings.errorClass);

                    // check if we have a generated label, replace the message then
                    label.attr("generated") && label.html(message);
                } else {
                    // create label
                    label = $("<" + this.settings.errorElement + "/>")
					.attr({ "for": this.idOrName(element), generated: true })
					.addClass(this.settings.errorClass)
					.html(message || "");
                    if (this.settings.wrapper) {
                        // make sure the element is visible, even in IE
                        // actually showing the wrapped element is handled elsewhere
                        label = label.hide().show().wrap("<" + this.settings.wrapper + "/>").parent();
                    }
                    if (!this.labelContainer.append(label).length)

                        if (this.settings.errorPlacement) {
                            this.settings.errorPlacement(label, $(element))
                        } else {
                            if (element.tagName == "SELECT" || element.nodeName == "SELECT" || element.localName == "select") {
                                // fix selectinput
                                label.insertAfter($(element).next());
                            } else {
                                label.insertAfter(element);
                            }

                        }
                    this.settings.errorPlacement
                }
                if (!message && this.settings.success) {
                    label.text("");
                    typeof this.settings.success == "string"
					? label.addClass(this.settings.success)
					: this.settings.success(label);
                }
                this.toShow = this.toShow.add(label);
            },

            errorsFor: function (element) {
                var name = this.idOrName(element);
                return this.errors().filter(function () {
                    return $(this).attr('for') == name;
                });
            },

            idOrName: function (element) {
                return this.groups[element.name] || (this.checkable(element) ? element.name : element.id || element.name);
            },

            validationTargetFor: function (element) {
                // if radio/checkbox, validate first element in group instead
                if (this.checkable(element)) {
                    element = this.findByName(element.name).not(this.settings.ignore)[0];
                }
                return element;
            },

            checkable: function (element) {
                return /radio|checkbox/i.test(element.type);
            },

            findByName: function (name) {
                // select by name and filter by form for performance over form.find("[name=...]")
                var form = this.currentForm;
                return $(document.getElementsByName(name)).map(function (index, element) {
                    return element.form == form && element.name == name && element || null;
                });
            },

            getLength: function (value, element) {
                switch (element.nodeName.toLowerCase()) {
                    case 'select':
                        return $("option:selected", element).length;
                    case 'input':
                        if (this.checkable(element))
                            return this.findByName(element.name).filter(':checked').length;
                }
                return value.match(/[^ -~]/g) == null ? value.length : value.length + value.match(/[^ -~]/g).length;
            },

            depend: function (param, element) {
                return this.dependTypes[typeof param]
				? this.dependTypes[typeof param](param, element)
				: true;
            },

            dependTypes: {
                "boolean": function (param, element) {
                    return param;
                },
                "string": function (param, element) {
                    return !!$(param, element.form).length;
                },
                "function": function (param, element) {
                    return param(element);
                }
            },

            optional: function (element) {
                return !$.validator.methods.required.call(this, $.trim(element.value), element) && "dependency-mismatch";
            },

            parseDate: function (val) {
                if (val === undefined) { return; }
                if (val.constructor == Date) { return val; }

                if (typeof val == 'string') {

                    // rfc3339?
                    var els = val.split("-");
                    if (els.length == 3) {
                        return new Date(integer(els[0]), integer(els[1]) - 1, integer(els[2]));
                    }
                }

                return date;
            },

            startRequest: function (element) {
                if (!this.pending[element.name]) {
                    this.pendingRequest++;
                    this.pending[element.name] = true;
                }
            },

            stopRequest: function (element, valid) {
                this.pendingRequest--;
                // sometimes synchronization fails, make sure pendingRequest is never < 0
                if (this.pendingRequest < 0)
                    this.pendingRequest = 0;
                delete this.pending[element.name];
                if (valid && this.pendingRequest == 0 && this.formSubmitted && this.form()) {
                    $(this.currentForm).submit();
                    this.formSubmitted = false;
                } else if (!valid && this.pendingRequest == 0 && this.formSubmitted) {
                    $(this.currentForm).triggerHandler("invalid-form", [this]);
                    this.formSubmitted = false;
                }
            },

            previousValue: function (element) {
                return $.data(element, "previousValue") || $.data(element, "previousValue", {
                    old: null,
                    valid: true,
                    message: this.defaultMessage(element, "remote")
                });
            }

        },

        classRuleSettings: {
            required: { required: true },
            email: { email: true },
            url: { url: true },
            date: { date: true },
            dateISO: { dateISO: true },
            dateDE: { dateDE: true },
            number: { number: true },
            numberDE: { numberDE: true },
            digits: { digits: true },
            creditcard: { creditcard: true }
        },

        addClassRules: function (className, rules) {
            className.constructor == String ?
			this.classRuleSettings[className] = rules :
			$.extend(this.classRuleSettings, className);
        },

        classRules: function (element) {
            var rules = {};
            var classes = $(element).attr('class');
            classes && $.each(classes.split(' '), function () {
                if (this in $.validator.classRuleSettings) {
                    $.extend(rules, $.validator.classRuleSettings[this]);
                }
            });
            return rules;
        },

        attributeRules: function (element) {
            var rules = {};
            var $element = $(element);

            for (var method in $.validator.methods) {
                var value;
                // If .prop exists (jQuery >= 1.6), use it to get true/false for required
                if (method === 'required' && typeof $.fn.prop === 'function') {
                    value = $element.prop(method);
                } else {
                    value = $element.attr(method);
                }
                if (value) {
                    rules[method] = value;
                } else if ($element[0].getAttribute("type") === method) {
                    rules[method] = true;
                }
            }

            // maxlength may be returned as -1, 2147483647 (IE) and 524288 (safari) for text inputs
            if (rules.maxlength && /-1|2147483647|524288/.test(rules.maxlength)) {
                delete rules.maxlength;
            }

            return rules;
        },

        metadataRules: function (element) {
            if (!$.metadata) return {};

            var meta = $.data(element.form, 'validator').settings.meta;
            return meta ?
			$(element).metadata()[meta] :
			$(element).metadata();
        },

        staticRules: function (element) {
            var rules = {};
            var validator = $.data(element.form, 'validator');
            if (validator) {
                if (validator.settings.rules) {
                    rules = $.validator.normalizeRule(validator.settings.rules[element.name]) || {};
                }
                return rules;
            }
            return false;
        },

        normalizeRules: function (rules, element) {
            // handle dependency check
            $.each(rules, function (prop, val) {
                // ignore rule when param is explicitly false, eg. required:false
                if (val === false) {
                    delete rules[prop];
                    return;
                }
                if (val.param || val.depends) {
                    var keepRule = true;
                    switch (typeof val.depends) {
                        case "string":
                            keepRule = !!$(val.depends, element.form).length;
                            break;
                        case "function":
                            keepRule = val.depends.call(element, element);
                            break;
                    }
                    if (keepRule) {
                        rules[prop] = val.param !== undefined ? val.param : true;
                    } else {
                        delete rules[prop];
                    }
                }
            });

            // evaluate parameters
            $.each(rules, function (rule, parameter) {
                rules[rule] = $.isFunction(parameter) ? parameter(element) : parameter;
            });

            // clean number parameters
            $.each(['minlength', 'maxlength', 'min', 'max'], function () {
                if (rules[this]) {
                    rules[this] = Number(rules[this]);
                }
            });
            $.each(['rangelength', 'range'], function () {
                if (rules[this]) {
                    rules[this] = [Number(rules[this][0]), Number(rules[this][1])];
                }
            });

            if ($.validator.autoCreateRanges) {
                // auto-create ranges
                if (rules.min && rules.max) {
                    rules.range = [rules.min, rules.max];
                    delete rules.min;
                    delete rules.max;
                }
                if (rules.minlength && rules.maxlength) {
                    rules.rangelength = [rules.minlength, rules.maxlength];
                    delete rules.minlength;
                    delete rules.maxlength;
                }
            }

            // To support custom messages in metadata ignore rule methods titled "messages"
            if (rules.messages) {
                delete rules.messages;
            }

            return rules;
        },

        // Converts a simple string to a {string: true} rule, e.g., "required" to {required:true}
        normalizeRule: function (data) {
            if (typeof data == "string") {
                var transformed = {};
                $.each(data.split(/\s/), function () {
                    transformed[this] = true;
                });
                data = transformed;
            }
            return data;
        },

        // http://docs.jquery.com/Plugins/Validation/Validator/addMethod
        addMethod: function (name, method, message) {
            $.validator.methods[name] = method;
            $.validator.messages[name] = message != undefined ? message : $.validator.messages[name];
            if (method.length < 3) {
                $.validator.addClassRules(name, $.validator.normalizeRule(name));
            }
        },

        methods: {

            // http://docs.jquery.com/Plugins/Validation/Methods/required
            required: function (value, element, param) {
                // check if dependency is met
                if (!this.depend(param, element))
                    return "dependency-mismatch";
                switch (element.nodeName.toLowerCase()) {
                    case 'select':
                        // could be an array for select-multiple or a string, both are fine this way
                        var val = $(element).find("option:selected").val();
                        return val && val.length > 0;
                    case 'input':
                        if (this.checkable(element))
                            return this.getLength(value, element) > 0;
                    default:
                        return $.trim(value).length > 0 && $.trim(value) != "邮箱/手机号/用户名";
                }
            },

            // http://docs.jquery.com/Plugins/Validation/Methods/remote
            remote: function (value, element, param) {
                if (this.optional(element))
                    return "dependency-mismatch";

                var previous = this.previousValue(element);
                if (!this.settings.messages[element.name])
                    this.settings.messages[element.name] = {};
                previous.originalMessage = this.settings.messages[element.name].remote;
                this.settings.messages[element.name].remote = previous.message;

                param = typeof param == "string" && { url: param} || param;

                if (this.pending[element.name]) {
                    return "pending";
                }
                if (previous.old === value) {
                    return previous.valid;
                }

                previous.old = value;
                var validator = this;
                this.startRequest(element);
                var data = {};
                data[element.name] = value;
                data.randtime = (new Date()).getTime();
                $.ajax($.extend(true, {
                    url: param,
                    mode: "abort",
                    port: "validate" + element.name,
                    dataType: "json",
                    data: data,
                    success: function (response) {
                        validator.settings.messages[element.name].remote = previous.originalMessage;
                        var valid = response === true;
                        if (valid) {
                            var submitted = validator.formSubmitted;
                            validator.prepareElement(element);
                            validator.formSubmitted = submitted;
                            validator.successList.push(element);
                            validator.showErrors();
                        } else {
                            var errors = {};
                            var message = response || validator.defaultMessage(element, "remote");
                            errors[element.name] = previous.message = $.isFunction(message) ? message(value) : message;
                            validator.showErrors(errors);
                        }
                        previous.valid = valid;
                        validator.stopRequest(element, valid);
                    }
                }, param));
                return "pending";
            },

            // http://docs.jquery.com/Plugins/Validation/Methods/minlength
            minlength: function (value, element, param) {
                return this.optional(element) || this.getLength($.trim(value), element) >= param;
            },

            // http://docs.jquery.com/Plugins/Validation/Methods/maxlength
            maxlength: function (value, element, param) {
                return this.optional(element) || this.getLength($.trim(value), element) <= param;
            },

            // http://docs.jquery.com/Plugins/Validation/Methods/rangelength
            rangelength: function (value, element, param) {
                var length = this.getLength($.trim(value), element);
                return this.optional(element) || (length >= param[0] && length <= param[1]);
            },

            // http://docs.jquery.com/Plugins/Validation/Methods/min
            min: function (value, element, param) {
                return this.optional(element) || value >= param;
            },

            // http://docs.jquery.com/Plugins/Validation/Methods/max
            max: function (value, element, param) {
                return this.optional(element) || value <= param;
            },

            // http://docs.jquery.com/Plugins/Validation/Methods/range
            range: function (value, element, param) {
                return this.optional(element) || (value >= param[0] && value <= param[1]);
            },

            // http://docs.jquery.com/Plugins/Validation/Methods/email
            email: function (value, element) {
                // contributed by Scott Gonzalez: http://projects.scottsplayground.com/email_address_validation/
                return this.optional(element) || /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i.test(value);
            },

            // http://docs.jquery.com/Plugins/Validation/Methods/url
            url: function (value, element) {
                // contributed by Scott Gonzalez: http://projects.scottsplayground.com/iri/
                return this.optional(element) || /^(https?|ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(\#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test(value);
            },

            // http://docs.jquery.com/Plugins/Validation/Methods/date
            date: function (value, element) {
                return this.optional(element) || !/Invalid|NaN/.test(parseDate(value));
            },

            // http://docs.jquery.com/Plugins/Validation/Methods/dateISO
            dateISO: function (value, element) {
                return this.optional(element) || /^\d{4}[\/-]\d{1,2}[\/-]\d{1,2}$/.test(value);
            },

            // http://docs.jquery.com/Plugins/Validation/Methods/number
            number: function (value, element) {
                return this.optional(element) || /^-?(?:\d+|\d{1,3}(?:,\d{3})+)(?:\.\d+)?$/.test(value);
            },

            // http://docs.jquery.com/Plugins/Validation/Methods/digits
            digits: function (value, element) {
                return this.optional(element) || /^\d+$/.test(value);
            },

            // http://docs.jquery.com/Plugins/Validation/Methods/creditcard
            // based on http://en.wikipedia.org/wiki/Luhn
            creditcard: function (value, element) {
                if (this.optional(element))
                    return "dependency-mismatch";
                // accept only spaces, digits and dashes
                if (/[^0-9 -]+/.test(value))
                    return false;
                var nCheck = 0,
				nDigit = 0,
				bEven = false;

                value = value.replace(/\D/g, "");

                for (var n = value.length - 1; n >= 0; n--) {
                    var cDigit = value.charAt(n);
                    var nDigit = parseInt(cDigit, 10);
                    if (bEven) {
                        if ((nDigit *= 2) > 9)
                            nDigit -= 9;
                    }
                    nCheck += nDigit;
                    bEven = !bEven;
                }

                return (nCheck % 10) == 0;
            },

            // http://docs.jquery.com/Plugins/Validation/Methods/accept
            accept: function (value, element, param) {
                param = typeof param == "string" ? param.replace(/,/g, '|') : "png|jpe?g|gif";
                return this.optional(element) || value.match(new RegExp(".(" + param + ")$", "i"));
            },

            // http://docs.jquery.com/Plugins/Validation/Methods/equalTo
            equalTo: function (value, element, param) {
                // bind to the blur event of the target in order to revalidate whenever the target field is updated
                // TODO find a way to bind the event just once, avoiding the unbind-rebind overhead
                var target = $(param).unbind(".validate-equalTo").bind("blur.validate-equalTo", function () {
                    $(element).valid();
                });
                return value == target.val();
            }

        }

    });

    // deprecated, use $.validator.format instead
    $.format = $.validator.format;

})(jQuery);

// ajax mode: abort
// usage: $.ajax({ mode: "abort"[, port: "uniqueport"]});
// if mode:"abort" is used, the previous request on that port (port can be undefined) is aborted via XMLHttpRequest.abort()
; (function ($) {
    var pendingRequests = {};
    // Use a prefilter if available (1.5+)
    if ($.ajaxPrefilter) {
        $.ajaxPrefilter(function (settings, _, xhr) {
            var port = settings.port;
            if (settings.mode == "abort") {
                if (pendingRequests[port]) {
                    pendingRequests[port].abort();
                }
                pendingRequests[port] = xhr;
            }
        });
    } else {
        // Proxy ajax
        var ajax = $.ajax;
        $.ajax = function (settings) {
            var mode = ("mode" in settings ? settings : $.ajaxSettings).mode,
				port = ("port" in settings ? settings : $.ajaxSettings).port;
            if (mode == "abort") {
                if (pendingRequests[port]) {
                    pendingRequests[port].abort();
                }
                return (pendingRequests[port] = ajax.apply(this, arguments));
            }
            return ajax.apply(this, arguments);
        };
    }
})(jQuery);

// provides cross-browser focusin and focusout events
// IE has native support, in other browsers, use event caputuring (neither bubbles)

// provides delegate(type: String, delegate: Selector, handler: Callback) plugin for easier event delegation
// handler is only called when $(event.target).is(delegate), in the scope of the jquery-object for event.target
; (function ($) {
    // only implement if not provided by jQuery core (since 1.4)
    // TODO verify if jQuery 1.4's implementation is compatible with older jQuery special-event APIs
    if (!jQuery.event.special.focusin && !jQuery.event.special.focusout && document.addEventListener) {
        $.each({
            focus: 'focusin',
            blur: 'focusout'
        }, function (original, fix) {
            $.event.special[fix] = {
                setup: function () {
                    this.addEventListener(original, handler, true);
                },
                teardown: function () {
                    this.removeEventListener(original, handler, true);
                },
                handler: function (e) {
                    arguments[0] = $.event.fix(e);
                    arguments[0].type = fix;
                    return $.event.handle.apply(this, arguments);
                }
            };
            function handler(e) {
                e = $.event.fix(e);
                e.type = fix;
                return $.event.handle.call(this, e);
            }
        });
    };
    $.extend($.fn, {
        validateDelegate: function (delegate, type, handler) {
            return this.bind(type, function (event) {
                var target = $(event.target);
                if (target.is(delegate)) {
                    return handler.apply(target, arguments);
                }
            });
        }
    });
})(jQuery);
/**
 * @license 
 * jQuery Tools @VERSION Overlay - Overlay base. Extend it.
 * 
 * NO COPYRIGHTS OR LICENSES. DO WHAT YOU LIKE.
 * 
 * http://flowplayer.org/tools/overlay/
 *
 * Since: March 2008
 * Date: @DATE 
 */
(function ($) {

    // static constructs
    $.tools = $.tools || { version: '@VERSION' };

    $.tools.overlay = {

        addEffect: function (name, loadFn, closeFn) {
            effects[name] = [loadFn, closeFn];
        },

        conf: {
            close: null,
            closeOnClick: true,
            closeOnEsc: true,
            closeSpeed: 200,
            effect: 'default',

            // since 1.2. fixed positioning not supported by IE6
            fixed: !$.browser.msie || $.browser.version > 6,

            left: 'center',
            load: false, // 1.2
            mask: null,
            oneInstance: true,
            speed: 'normal',
            target: null, // target element to be overlayed. by default taken from [rel]
            top: '10%'
        }
    };


    var instances = [], effects = {};

    // the default effect. nice and easy!
    $.tools.overlay.addEffect('default',

    /* 
    onLoad/onClose functions must be called otherwise none of the 
    user supplied callback methods won't be called
    */
		function (pos, onLoad) {

		    var conf = this.getConf(),
				 w = $(window);

		    if (!conf.fixed) {
		        pos.top += w.scrollTop();
		        pos.left += w.scrollLeft();
		    }

		    pos.position = conf.fixed ? 'fixed' : 'absolute';
		    this.getOverlay().css(pos).fadeIn(conf.speed, onLoad);

		}, function (onClose) {
		    this.getOverlay().fadeOut(this.getConf().closeSpeed, onClose);
		}
	);


    function Overlay(trigger, conf) {

        // private variables
        var self = this,
			 fire = trigger.add(self),
			 w = $(window),
			 closers,
			 overlay,
			 opened,
			 maskConf = $.tools.expose && (conf.mask || conf.expose),
			 uid = Math.random().toString().slice(10);


        // mask configuration
        if (maskConf) {
            if (typeof maskConf == 'string') { maskConf = { color: maskConf }; }
            maskConf.closeOnClick = maskConf.closeOnEsc = false;
        }

        // get overlay and trigger
        var jq = conf.target || trigger.attr("rel");
        overlay = jq ? $(jq) : null || trigger;

        // overlay not found. cannot continue
        if (!overlay.length) { throw "Could not find Overlay: " + jq; }

        // trigger's click event
        if (trigger && trigger.index(overlay) == -1) {
            trigger.click(function (e) {
                self.load(e);
                return e.preventDefault();
            });
        }

        // API methods  
        $.extend(self, {

            load: function (e) {

                // can be opened only once
                if (self.isOpened()) { return self; }

                // find the effect
                var eff = effects[conf.effect];
                if (!eff) { throw "Overlay: cannot find effect : \"" + conf.effect + "\""; }

                // close other instances?
                if (conf.oneInstance) {
                    $.each(instances, function () {
                        this.close(e);
                    });
                }

                // onBeforeLoad
                e = e || $.Event();
                e.type = "onBeforeLoad";
                fire.trigger(e);
                if (e.isDefaultPrevented()) { return self; }

                // opened
                opened = true;

                // possible mask effect
                if (maskConf) { $(overlay).expose(maskConf); }

                // position & dimensions 
                var top = conf.top,
					 left = conf.left,
					 oWidth = overlay.outerWidth({ margin: true }),
					 oHeight = overlay.outerHeight({ margin: true });

                if (typeof top == 'string') {
                    top = top == 'center' ? Math.max((w.height() - oHeight) / 2, 0) :
						parseInt(top, 10) / 100 * w.height();
                }

                if (left == 'center') { left = Math.max((w.width() - oWidth) / 2, 0); }


                // load effect  		 		
                eff[0].call(self, { top: top, left: left }, function () {
                    if (opened) {
                        e.type = "onLoad";
                        fire.trigger(e);
                    }
                });

                // mask.click closes overlay
                if (maskConf && conf.closeOnClick) {
                    $.mask.getMask().one("click", self.close);
                }

                // when window is clicked outside overlay, we close
                if (conf.closeOnClick) {
                    $(document).on("click." + uid, function (e) {
                        if (!$(e.target).parents(overlay).length) {
                            self.close(e);
                        }
                    });
                }

                // keyboard::escape
                if (conf.closeOnEsc) {

                    // one callback is enough if multiple instances are loaded simultaneously
                    $(document).on("keydown." + uid, function (e) {
                        if (e.keyCode == 27) {
                            self.close(e);
                        }
                    });
                }


                return self;
            },

            close: function (e) {

                if (!self.isOpened()) { return self; }

                e = e || $.Event();
                e.type = "onBeforeClose";
                fire.trigger(e);
                if (e.isDefaultPrevented()) { return; }

                opened = false;

                // close effect
                effects[conf.effect][1].call(self, function () {
                    e.type = "onClose";
                    fire.trigger(e);
                });

                // unbind the keyboard / clicking actions
                $(document).off("click." + uid + " keydown." + uid);

                if (maskConf) {
                    $.mask.close();
                }

                return self;
            },

            getOverlay: function () {
                return overlay;
            },

            getTrigger: function () {
                return trigger;
            },

            getClosers: function () {
                return closers;
            },

            isOpened: function () {
                return opened;
            },

            // manipulate start, finish and speeds
            getConf: function () {
                return conf;
            }

        });

        // callbacks	
        $.each("onBeforeLoad,onStart,onLoad,onBeforeClose,onClose".split(","), function (i, name) {

            // configuration
            if ($.isFunction(conf[name])) {
                $(self).on(name, conf[name]);
            }

            // API
            self[name] = function (fn) {
                if (fn) { $(self).on(name, fn); }
                return self;
            };
        });

        // close button
        closers = overlay.find(conf.close || ".closeBtnIced");

        if (!closers.length && !conf.close) {
            closers = $('<a class="close"></a>');
            overlay.prepend(closers);
        }

        closers.live("click", function (e) {
            self.close(e);
        });

        // autoload
        if (conf.load) { self.load(); }

    }

    // jQuery plugin initialization
    $.fn.overlay = function (conf) {

        // already constructed --> return API
        var el = this.data("overlay");
        if (el) { return el; }

        if ($.isFunction(conf)) {
            conf = { onBeforeLoad: conf };
        }

        conf = $.extend(true, {}, $.tools.overlay.conf, conf);

        this.each(function () {
            var el = new Overlay($(this), conf), self = $(this);
            instances.push(el);
            self.data("overlay", el);
        });
        return conf.api ? el : this;
    };
    // bind resize event
    $(window).resize(function () {
        $.each(instances, function (i, el) {
            if (!el.isOpened()) {
                return true;
            }
            var conf = el.getConf(),
            w = $(window),
            oel = el.getOverlay(),
            top = conf.top,
            left = conf.left,
            oWidth = oel.outerWidth(true),
            oHeight = oel.outerHeight(true),
            pos;

            if (typeof top == 'string') {
                top = top == 'center' ? Math.max((w.height() - oHeight) / 2, 0) :
                    parseInt(top, 10) / 100 * w.height();
            }

            if (left == 'center') { left = Math.max((w.width() - oWidth) / 2, 0); }

            pos = { top: top, left: left }

            if (!conf.fixed) {
                pos.top += w.scrollTop();
                pos.left += w.scrollLeft();
            }

            pos.position = conf.fixed ? 'fixed' : 'absolute';
            oel.css(pos);
        });
    });

})(jQuery);


/**
 * @license 
 * jQuery Tools @VERSION / Expose - Dim the lights
 * 
 * NO COPYRIGHTS OR LICENSES. DO WHAT YOU LIKE.
 * 
 * http://flowplayer.org/tools/toolbox/expose.html
 *
 * Since: Mar 2010
 * Date: @DATE 
 */
(function($) { 	

	// static constructs
	$.tools = $.tools || {version: '@VERSION'};
	
	var tool;
	
	tool = $.tools.expose = {
		
		conf: {	
			maskId: 'exposeMask',
			loadSpeed: 'slow',
			closeSpeed: 'fast',
			closeOnClick: true,
			closeOnEsc: true,
			
			// css settings
			zIndex: 9998,
			opacity: 0.8,
			startOpacity: 0,
			color: '#fff',
			
			// callbacks
			onLoad: null,
			onClose: null
		}
	};

	/* one of the greatest headaches in the tool. finally made it */
	function viewport() {
				
		// the horror case
		if ($.browser.msie) {
			
			// if there are no scrollbars then use window.height
			var d = $(document).height(), w = $(window).height();
			
			return [
				window.innerWidth || 							// ie7+
				document.documentElement.clientWidth || 	// ie6  
				document.body.clientWidth, 					// ie6 quirks mode
				d - w < 20 ? w : d
			];
		} 
		
		// other well behaving browsers
		return [$(document).width(), $(document).height()]; 
	} 
	
	function call(fn) {
		if (fn) { return fn.call($.mask); }
	}
	
	var mask, exposed, loaded, config, overlayIndex;		
	
	
	$.mask = {
		
		load: function(conf, els) {
			
			// already loaded ?
			if (loaded) { return this; }			
			
			// configuration
			if (typeof conf == 'string') {
				conf = {color: conf};	
			}
			
			// use latest config
			conf = conf || config;
			
			config = conf = $.extend($.extend({}, tool.conf), conf);

			// get the mask
			mask = $("#" + conf.maskId);
				
			// or create it
			if (!mask.length) {
				mask = $('<div/>').attr("id", conf.maskId);
				$("body").append(mask);
			}
			
			// set position and dimensions 			
			var size = viewport();
				
			mask.css({				
				position:'absolute', 
				top: 0, 
				left: 0,
				width: size[0],
				height: size[1],
				display: 'none',
				opacity: conf.startOpacity,					 		
				zIndex: conf.zIndex 
			});
			
			if (conf.color) {
				mask.css("backgroundColor", conf.color);	
			}			
			
			// onBeforeLoad
			if (call(conf.onBeforeLoad) === false) {
				return this;
			}
			
			// esc button
			if (conf.closeOnEsc) {						
				$(document).bind("keydown.mask", function(e) {							
					if (e.keyCode == 27) {
						$.mask.close(e);	
					}		
				});			
			}
			
			// mask click closes
			if (conf.closeOnClick) {
				mask.bind("click.mask", function(e)  {
					$.mask.close(e);		
				});					
			}			
			
			// resize mask when window is resized
			$(window).bind("resize.mask", function() {
				$.mask.fit();
			});
			
			// exposed elements
			if (els && els.length) {
				
				overlayIndex = els.eq(0).css("zIndex");

				// make sure element is positioned absolutely or relatively
				$.each(els, function() {
					var el = $(this);
					if (!/relative|absolute|fixed/i.test(el.css("position"))) {
						el.css("position", "relative");		
					}					
				});
			 
				// make elements sit on top of the mask
				exposed = els.css({ zIndex: Math.max(conf.zIndex + 1, overlayIndex == 'auto' ? 0 : overlayIndex)});			
			}	
			
			// reveal mask
			mask.css({display: 'block'}).fadeTo(conf.loadSpeed, conf.opacity, function() {
				$.mask.fit(); 
				call(conf.onLoad);
				loaded = "full";
			});
			
			loaded = true;			
			return this;				
		},
		
		close: function() {
			if (loaded) {
				
				// onBeforeClose
				if (call(config.onBeforeClose) === false) { return this; }
					
				mask.fadeOut(config.closeSpeed, function()  {					
					call(config.onClose);					
					if (exposed) {
						exposed.css({zIndex: overlayIndex});						
					}				
					loaded = false;
				});				
				
				// unbind various event listeners
				$(document).unbind("keydown.mask");
				mask.unbind("click.mask");
				$(window).unbind("resize.mask");  
			}
			
			return this; 
		},
		
		fit: function() {
			if (loaded) {
				var size = viewport();				
				mask.css({width: size[0], height: size[1]});
			}				
		},
		
		getMask: function() {
			return mask;	
		},
		
		isLoaded: function(fully) {
			return fully ? loaded == 'full' : loaded;	
		}, 
		
		getConf: function() {
			return config;	
		},
		
		getExposed: function() {
			return exposed;	
		}		
	};
	
	$.fn.mask = function(conf) {
		$.mask.load(conf,this);
		return this;		
	};			
	
	$.fn.expose = function(conf) {
		$.mask.load(conf, this);
		return this;			
	};


})(jQuery);

/// <reference path="jquery-1.4.4.js" />

/*
** Unobtrusive Ajax support library for jQuery
** Copyright (C) Microsoft Corporation. All rights reserved.
*/

/*jslint white: true, browser: true, onevar: true, undef: true, nomen: true, eqeqeq: true, plusplus: true, bitwise: true, regexp: true, newcap: true, immed: true, strict: false */
/*global window: false, jQuery: false */

(function ($) {
    var data_click = "unobtrusiveAjaxClick",
        data_validation = "unobtrusiveValidation";

    function getFunction(code, argNames) {
        var fn = window, parts = (code || "").split(".");
        while (fn && parts.length) {
            fn = fn[parts.shift()];
        }
        if (typeof (fn) === "function") {
            return fn;
        }
        argNames.push(code);
        return Function.constructor.apply(null, argNames);
    }

    function isMethodProxySafe(method) {
        return method === "GET" || method === "POST";
    }

    function asyncOnBeforeSend(xhr, method) {
        if (!isMethodProxySafe(method)) {
            xhr.setRequestHeader("X-HTTP-Method-Override", method);
        }
    }

    function asyncOnSuccess(element, data, contentType) {
        var mode;

        if (contentType.indexOf("application/x-javascript") !== -1) {  // jQuery already executes JavaScript for us
            return;
        }

        mode = (element.getAttribute("data-ajax-mode") || "").toUpperCase();

        $(element.getAttribute("data-ajax-update")).each(function (i, update) {
            var top;

            switch (mode) {
                case "BEFORE":
                    top = update.firstChild;
                    $("<div />").html(data).contents().each(function () {
                        update.insertBefore(this, top);
                    });
                    break;
                case "AFTER":
                    $("<div />").html(data).contents().each(function () {
                        update.appendChild(this);
                    });
                    break;
                default:
                    //$(update).html(data);
                    // IE8��ʹ������ķ����޷����뵽�ƶ�Ԫ��
                    $(update)[0].innerHTML = data;
                    break;
            }
        });
    }

    function asyncRequest(element, options) {
        var confirm, loading, method, duration;

        confirm = element.getAttribute("data-ajax-confirm");
        if (confirm && !window.confirm(confirm)) {
            return;
        }

        loading = $(element.getAttribute("data-ajax-loading"));
        duration = element.getAttribute("data-ajax-loading-duration") || 0;

        $.extend(options, {
            type: element.getAttribute("data-ajax-method") || undefined,
            url: element.getAttribute("data-ajax-url") || undefined,
            beforeSend: function (xhr) {
                var result;
                asyncOnBeforeSend(xhr, method);
                result = getFunction(element.getAttribute("data-ajax-begin"), ["xhr"]).apply(this, arguments);
                if (result !== false) {
                    loading.show(duration);
                }
                return result;
            },
            complete: function () {
                loading.hide(duration);
                getFunction(element.getAttribute("data-ajax-complete"), ["xhr", "status"]).apply(this, arguments);
            },
            success: function (data, status, xhr) {
                asyncOnSuccess(element, data, xhr.getResponseHeader("Content-Type") || "text/html");
                getFunction(element.getAttribute("data-ajax-success"), ["data", "status", "xhr"]).apply(this, arguments);
            },
            error: getFunction(element.getAttribute("data-ajax-failure"), ["xhr", "status", "error"])
        });

        options.data.push({ name: "X-Requested-With", value: "XMLHttpRequest" });

        method = options.type.toUpperCase();
        if (!isMethodProxySafe(method)) {
            options.type = "POST";
            options.data.push({ name: "X-HTTP-Method-Override", value: method });
        }

        $.ajax(options);
    }

    function validate(form) {
        var validationInfo = $(form).data(data_validation);
        return !validationInfo || !validationInfo.validate || validationInfo.validate();
    }

    $("a[data-ajax=true]").live("click", function (evt) {
        evt.preventDefault();
        asyncRequest(this, {
            url: this.href,
            type: "GET",
            data: []
        });
    });

    $("form[data-ajax=true] input[type=image]").live("click", function (evt) {
        var name = evt.target.name,
            $target = $(evt.target),
            form = $target.parents("form")[0],
            offset = $target.offset();

        $(form).data(data_click, [
            { name: name + ".x", value: Math.round(evt.pageX - offset.left) },
            { name: name + ".y", value: Math.round(evt.pageY - offset.top) }
        ]);

        setTimeout(function () {
            $(form).removeData(data_click);
        }, 0);
    });

    $("form[data-ajax=true] :submit").live("click", function (evt) {

        var name = evt.target.name,
            form = $(evt.target).parents("form")[0];

        $(form).data(data_click, name ? [{ name: name, value: evt.target.value}] : []);

        setTimeout(function () {
            $(form).removeData(data_click);
        }, 0);
    });

    $("form[data-ajax=true]").live("submit", function (evt) {
        var clickInfo = $(this).data(data_click) || [];
        evt.preventDefault();
        if (!validate(this)) {
            return;
        }
        asyncRequest(this, {
            url: this.action,
            type: this.method || "GET",
            data: clickInfo.concat($(this).serializeArray())
        });
    });
} (jQuery));
