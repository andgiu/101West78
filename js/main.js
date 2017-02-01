//     Underscore.js 1.8.3
//     Underscore.js 1.8.3
//     http://underscorejs.org
//     (c) 2009-2015 Jeremy Ashkenas, DocumentCloud and Investigative Reporters & Editors
//     Underscore may be freely distributed under the MIT license.
(function(){function n(n){function t(t,r,e,u,i,o){for(;i>=0&&o>i;i+=n){var a=u?u[i]:i;e=r(e,t[a],a,t)}return e}return function(r,e,u,i){e=b(e,i,4);var o=!k(r)&&m.keys(r),a=(o||r).length,c=n>0?0:a-1;return arguments.length<3&&(u=r[o?o[c]:c],c+=n),t(r,e,u,o,c,a)}}function t(n){return function(t,r,e){r=x(r,e);for(var u=O(t),i=n>0?0:u-1;i>=0&&u>i;i+=n)if(r(t[i],i,t))return i;return-1}}function r(n,t,r){return function(e,u,i){var o=0,a=O(e);if("number"==typeof i)n>0?o=i>=0?i:Math.max(i+a,o):a=i>=0?Math.min(i+1,a):i+a+1;else if(r&&i&&a)return i=r(e,u),e[i]===u?i:-1;if(u!==u)return i=t(l.call(e,o,a),m.isNaN),i>=0?i+o:-1;for(i=n>0?o:a-1;i>=0&&a>i;i+=n)if(e[i]===u)return i;return-1}}function e(n,t){var r=I.length,e=n.constructor,u=m.isFunction(e)&&e.prototype||a,i="constructor";for(m.has(n,i)&&!m.contains(t,i)&&t.push(i);r--;)i=I[r],i in n&&n[i]!==u[i]&&!m.contains(t,i)&&t.push(i)}var u=this,i=u._,o=Array.prototype,a=Object.prototype,c=Function.prototype,f=o.push,l=o.slice,s=a.toString,p=a.hasOwnProperty,h=Array.isArray,v=Object.keys,g=c.bind,y=Object.create,d=function(){},m=function(n){return n instanceof m?n:this instanceof m?void(this._wrapped=n):new m(n)};"undefined"!=typeof exports?("undefined"!=typeof module&&module.exports&&(exports=module.exports=m),exports._=m):u._=m,m.VERSION="1.8.3";var b=function(n,t,r){if(t===void 0)return n;switch(null==r?3:r){case 1:return function(r){return n.call(t,r)};case 2:return function(r,e){return n.call(t,r,e)};case 3:return function(r,e,u){return n.call(t,r,e,u)};case 4:return function(r,e,u,i){return n.call(t,r,e,u,i)}}return function(){return n.apply(t,arguments)}},x=function(n,t,r){return null==n?m.identity:m.isFunction(n)?b(n,t,r):m.isObject(n)?m.matcher(n):m.property(n)};m.iteratee=function(n,t){return x(n,t,1/0)};var _=function(n,t){return function(r){var e=arguments.length;if(2>e||null==r)return r;for(var u=1;e>u;u++)for(var i=arguments[u],o=n(i),a=o.length,c=0;a>c;c++){var f=o[c];t&&r[f]!==void 0||(r[f]=i[f])}return r}},j=function(n){if(!m.isObject(n))return{};if(y)return y(n);d.prototype=n;var t=new d;return d.prototype=null,t},w=function(n){return function(t){return null==t?void 0:t[n]}},A=Math.pow(2,53)-1,O=w("length"),k=function(n){var t=O(n);return"number"==typeof t&&t>=0&&A>=t};m.each=m.forEach=function(n,t,r){t=b(t,r);var e,u;if(k(n))for(e=0,u=n.length;u>e;e++)t(n[e],e,n);else{var i=m.keys(n);for(e=0,u=i.length;u>e;e++)t(n[i[e]],i[e],n)}return n},m.map=m.collect=function(n,t,r){t=x(t,r);for(var e=!k(n)&&m.keys(n),u=(e||n).length,i=Array(u),o=0;u>o;o++){var a=e?e[o]:o;i[o]=t(n[a],a,n)}return i},m.reduce=m.foldl=m.inject=n(1),m.reduceRight=m.foldr=n(-1),m.find=m.detect=function(n,t,r){var e;return e=k(n)?m.findIndex(n,t,r):m.findKey(n,t,r),e!==void 0&&e!==-1?n[e]:void 0},m.filter=m.select=function(n,t,r){var e=[];return t=x(t,r),m.each(n,function(n,r,u){t(n,r,u)&&e.push(n)}),e},m.reject=function(n,t,r){return m.filter(n,m.negate(x(t)),r)},m.every=m.all=function(n,t,r){t=x(t,r);for(var e=!k(n)&&m.keys(n),u=(e||n).length,i=0;u>i;i++){var o=e?e[i]:i;if(!t(n[o],o,n))return!1}return!0},m.some=m.any=function(n,t,r){t=x(t,r);for(var e=!k(n)&&m.keys(n),u=(e||n).length,i=0;u>i;i++){var o=e?e[i]:i;if(t(n[o],o,n))return!0}return!1},m.contains=m.includes=m.include=function(n,t,r,e){return k(n)||(n=m.values(n)),("number"!=typeof r||e)&&(r=0),m.indexOf(n,t,r)>=0},m.invoke=function(n,t){var r=l.call(arguments,2),e=m.isFunction(t);return m.map(n,function(n){var u=e?t:n[t];return null==u?u:u.apply(n,r)})},m.pluck=function(n,t){return m.map(n,m.property(t))},m.where=function(n,t){return m.filter(n,m.matcher(t))},m.findWhere=function(n,t){return m.find(n,m.matcher(t))},m.max=function(n,t,r){var e,u,i=-1/0,o=-1/0;if(null==t&&null!=n){n=k(n)?n:m.values(n);for(var a=0,c=n.length;c>a;a++)e=n[a],e>i&&(i=e)}else t=x(t,r),m.each(n,function(n,r,e){u=t(n,r,e),(u>o||u===-1/0&&i===-1/0)&&(i=n,o=u)});return i},m.min=function(n,t,r){var e,u,i=1/0,o=1/0;if(null==t&&null!=n){n=k(n)?n:m.values(n);for(var a=0,c=n.length;c>a;a++)e=n[a],i>e&&(i=e)}else t=x(t,r),m.each(n,function(n,r,e){u=t(n,r,e),(o>u||1/0===u&&1/0===i)&&(i=n,o=u)});return i},m.shuffle=function(n){for(var t,r=k(n)?n:m.values(n),e=r.length,u=Array(e),i=0;e>i;i++)t=m.random(0,i),t!==i&&(u[i]=u[t]),u[t]=r[i];return u},m.sample=function(n,t,r){return null==t||r?(k(n)||(n=m.values(n)),n[m.random(n.length-1)]):m.shuffle(n).slice(0,Math.max(0,t))},m.sortBy=function(n,t,r){return t=x(t,r),m.pluck(m.map(n,function(n,r,e){return{value:n,index:r,criteria:t(n,r,e)}}).sort(function(n,t){var r=n.criteria,e=t.criteria;if(r!==e){if(r>e||r===void 0)return 1;if(e>r||e===void 0)return-1}return n.index-t.index}),"value")};var F=function(n){return function(t,r,e){var u={};return r=x(r,e),m.each(t,function(e,i){var o=r(e,i,t);n(u,e,o)}),u}};m.groupBy=F(function(n,t,r){m.has(n,r)?n[r].push(t):n[r]=[t]}),m.indexBy=F(function(n,t,r){n[r]=t}),m.countBy=F(function(n,t,r){m.has(n,r)?n[r]++:n[r]=1}),m.toArray=function(n){return n?m.isArray(n)?l.call(n):k(n)?m.map(n,m.identity):m.values(n):[]},m.size=function(n){return null==n?0:k(n)?n.length:m.keys(n).length},m.partition=function(n,t,r){t=x(t,r);var e=[],u=[];return m.each(n,function(n,r,i){(t(n,r,i)?e:u).push(n)}),[e,u]},m.first=m.head=m.take=function(n,t,r){return null==n?void 0:null==t||r?n[0]:m.initial(n,n.length-t)},m.initial=function(n,t,r){return l.call(n,0,Math.max(0,n.length-(null==t||r?1:t)))},m.last=function(n,t,r){return null==n?void 0:null==t||r?n[n.length-1]:m.rest(n,Math.max(0,n.length-t))},m.rest=m.tail=m.drop=function(n,t,r){return l.call(n,null==t||r?1:t)},m.compact=function(n){return m.filter(n,m.identity)};var S=function(n,t,r,e){for(var u=[],i=0,o=e||0,a=O(n);a>o;o++){var c=n[o];if(k(c)&&(m.isArray(c)||m.isArguments(c))){t||(c=S(c,t,r));var f=0,l=c.length;for(u.length+=l;l>f;)u[i++]=c[f++]}else r||(u[i++]=c)}return u};m.flatten=function(n,t){return S(n,t,!1)},m.without=function(n){return m.difference(n,l.call(arguments,1))},m.uniq=m.unique=function(n,t,r,e){m.isBoolean(t)||(e=r,r=t,t=!1),null!=r&&(r=x(r,e));for(var u=[],i=[],o=0,a=O(n);a>o;o++){var c=n[o],f=r?r(c,o,n):c;t?(o&&i===f||u.push(c),i=f):r?m.contains(i,f)||(i.push(f),u.push(c)):m.contains(u,c)||u.push(c)}return u},m.union=function(){return m.uniq(S(arguments,!0,!0))},m.intersection=function(n){for(var t=[],r=arguments.length,e=0,u=O(n);u>e;e++){var i=n[e];if(!m.contains(t,i)){for(var o=1;r>o&&m.contains(arguments[o],i);o++);o===r&&t.push(i)}}return t},m.difference=function(n){var t=S(arguments,!0,!0,1);return m.filter(n,function(n){return!m.contains(t,n)})},m.zip=function(){return m.unzip(arguments)},m.unzip=function(n){for(var t=n&&m.max(n,O).length||0,r=Array(t),e=0;t>e;e++)r[e]=m.pluck(n,e);return r},m.object=function(n,t){for(var r={},e=0,u=O(n);u>e;e++)t?r[n[e]]=t[e]:r[n[e][0]]=n[e][1];return r},m.findIndex=t(1),m.findLastIndex=t(-1),m.sortedIndex=function(n,t,r,e){r=x(r,e,1);for(var u=r(t),i=0,o=O(n);o>i;){var a=Math.floor((i+o)/2);r(n[a])<u?i=a+1:o=a}return i},m.indexOf=r(1,m.findIndex,m.sortedIndex),m.lastIndexOf=r(-1,m.findLastIndex),m.range=function(n,t,r){null==t&&(t=n||0,n=0),r=r||1;for(var e=Math.max(Math.ceil((t-n)/r),0),u=Array(e),i=0;e>i;i++,n+=r)u[i]=n;return u};var E=function(n,t,r,e,u){if(!(e instanceof t))return n.apply(r,u);var i=j(n.prototype),o=n.apply(i,u);return m.isObject(o)?o:i};m.bind=function(n,t){if(g&&n.bind===g)return g.apply(n,l.call(arguments,1));if(!m.isFunction(n))throw new TypeError("Bind must be called on a function");var r=l.call(arguments,2),e=function(){return E(n,e,t,this,r.concat(l.call(arguments)))};return e},m.partial=function(n){var t=l.call(arguments,1),r=function(){for(var e=0,u=t.length,i=Array(u),o=0;u>o;o++)i[o]=t[o]===m?arguments[e++]:t[o];for(;e<arguments.length;)i.push(arguments[e++]);return E(n,r,this,this,i)};return r},m.bindAll=function(n){var t,r,e=arguments.length;if(1>=e)throw new Error("bindAll must be passed function names");for(t=1;e>t;t++)r=arguments[t],n[r]=m.bind(n[r],n);return n},m.memoize=function(n,t){var r=function(e){var u=r.cache,i=""+(t?t.apply(this,arguments):e);return m.has(u,i)||(u[i]=n.apply(this,arguments)),u[i]};return r.cache={},r},m.delay=function(n,t){var r=l.call(arguments,2);return setTimeout(function(){return n.apply(null,r)},t)},m.defer=m.partial(m.delay,m,1),m.throttle=function(n,t,r){var e,u,i,o=null,a=0;r||(r={});var c=function(){a=r.leading===!1?0:m.now(),o=null,i=n.apply(e,u),o||(e=u=null)};return function(){var f=m.now();a||r.leading!==!1||(a=f);var l=t-(f-a);return e=this,u=arguments,0>=l||l>t?(o&&(clearTimeout(o),o=null),a=f,i=n.apply(e,u),o||(e=u=null)):o||r.trailing===!1||(o=setTimeout(c,l)),i}},m.debounce=function(n,t,r){var e,u,i,o,a,c=function(){var f=m.now()-o;t>f&&f>=0?e=setTimeout(c,t-f):(e=null,r||(a=n.apply(i,u),e||(i=u=null)))};return function(){i=this,u=arguments,o=m.now();var f=r&&!e;return e||(e=setTimeout(c,t)),f&&(a=n.apply(i,u),i=u=null),a}},m.wrap=function(n,t){return m.partial(t,n)},m.negate=function(n){return function(){return!n.apply(this,arguments)}},m.compose=function(){var n=arguments,t=n.length-1;return function(){for(var r=t,e=n[t].apply(this,arguments);r--;)e=n[r].call(this,e);return e}},m.after=function(n,t){return function(){return--n<1?t.apply(this,arguments):void 0}},m.before=function(n,t){var r;return function(){return--n>0&&(r=t.apply(this,arguments)),1>=n&&(t=null),r}},m.once=m.partial(m.before,2);var M=!{toString:null}.propertyIsEnumerable("toString"),I=["valueOf","isPrototypeOf","toString","propertyIsEnumerable","hasOwnProperty","toLocaleString"];m.keys=function(n){if(!m.isObject(n))return[];if(v)return v(n);var t=[];for(var r in n)m.has(n,r)&&t.push(r);return M&&e(n,t),t},m.allKeys=function(n){if(!m.isObject(n))return[];var t=[];for(var r in n)t.push(r);return M&&e(n,t),t},m.values=function(n){for(var t=m.keys(n),r=t.length,e=Array(r),u=0;r>u;u++)e[u]=n[t[u]];return e},m.mapObject=function(n,t,r){t=x(t,r);for(var e,u=m.keys(n),i=u.length,o={},a=0;i>a;a++)e=u[a],o[e]=t(n[e],e,n);return o},m.pairs=function(n){for(var t=m.keys(n),r=t.length,e=Array(r),u=0;r>u;u++)e[u]=[t[u],n[t[u]]];return e},m.invert=function(n){for(var t={},r=m.keys(n),e=0,u=r.length;u>e;e++)t[n[r[e]]]=r[e];return t},m.functions=m.methods=function(n){var t=[];for(var r in n)m.isFunction(n[r])&&t.push(r);return t.sort()},m.extend=_(m.allKeys),m.extendOwn=m.assign=_(m.keys),m.findKey=function(n,t,r){t=x(t,r);for(var e,u=m.keys(n),i=0,o=u.length;o>i;i++)if(e=u[i],t(n[e],e,n))return e},m.pick=function(n,t,r){var e,u,i={},o=n;if(null==o)return i;m.isFunction(t)?(u=m.allKeys(o),e=b(t,r)):(u=S(arguments,!1,!1,1),e=function(n,t,r){return t in r},o=Object(o));for(var a=0,c=u.length;c>a;a++){var f=u[a],l=o[f];e(l,f,o)&&(i[f]=l)}return i},m.omit=function(n,t,r){if(m.isFunction(t))t=m.negate(t);else{var e=m.map(S(arguments,!1,!1,1),String);t=function(n,t){return!m.contains(e,t)}}return m.pick(n,t,r)},m.defaults=_(m.allKeys,!0),m.create=function(n,t){var r=j(n);return t&&m.extendOwn(r,t),r},m.clone=function(n){return m.isObject(n)?m.isArray(n)?n.slice():m.extend({},n):n},m.tap=function(n,t){return t(n),n},m.isMatch=function(n,t){var r=m.keys(t),e=r.length;if(null==n)return!e;for(var u=Object(n),i=0;e>i;i++){var o=r[i];if(t[o]!==u[o]||!(o in u))return!1}return!0};var N=function(n,t,r,e){if(n===t)return 0!==n||1/n===1/t;if(null==n||null==t)return n===t;n instanceof m&&(n=n._wrapped),t instanceof m&&(t=t._wrapped);var u=s.call(n);if(u!==s.call(t))return!1;switch(u){case"[object RegExp]":case"[object String]":return""+n==""+t;case"[object Number]":return+n!==+n?+t!==+t:0===+n?1/+n===1/t:+n===+t;case"[object Date]":case"[object Boolean]":return+n===+t}var i="[object Array]"===u;if(!i){if("object"!=typeof n||"object"!=typeof t)return!1;var o=n.constructor,a=t.constructor;if(o!==a&&!(m.isFunction(o)&&o instanceof o&&m.isFunction(a)&&a instanceof a)&&"constructor"in n&&"constructor"in t)return!1}r=r||[],e=e||[];for(var c=r.length;c--;)if(r[c]===n)return e[c]===t;if(r.push(n),e.push(t),i){if(c=n.length,c!==t.length)return!1;for(;c--;)if(!N(n[c],t[c],r,e))return!1}else{var f,l=m.keys(n);if(c=l.length,m.keys(t).length!==c)return!1;for(;c--;)if(f=l[c],!m.has(t,f)||!N(n[f],t[f],r,e))return!1}return r.pop(),e.pop(),!0};m.isEqual=function(n,t){return N(n,t)},m.isEmpty=function(n){return null==n?!0:k(n)&&(m.isArray(n)||m.isString(n)||m.isArguments(n))?0===n.length:0===m.keys(n).length},m.isElement=function(n){return!(!n||1!==n.nodeType)},m.isArray=h||function(n){return"[object Array]"===s.call(n)},m.isObject=function(n){var t=typeof n;return"function"===t||"object"===t&&!!n},m.each(["Arguments","Function","String","Number","Date","RegExp","Error"],function(n){m["is"+n]=function(t){return s.call(t)==="[object "+n+"]"}}),m.isArguments(arguments)||(m.isArguments=function(n){return m.has(n,"callee")}),"function"!=typeof/./&&"object"!=typeof Int8Array&&(m.isFunction=function(n){return"function"==typeof n||!1}),m.isFinite=function(n){return isFinite(n)&&!isNaN(parseFloat(n))},m.isNaN=function(n){return m.isNumber(n)&&n!==+n},m.isBoolean=function(n){return n===!0||n===!1||"[object Boolean]"===s.call(n)},m.isNull=function(n){return null===n},m.isUndefined=function(n){return n===void 0},m.has=function(n,t){return null!=n&&p.call(n,t)},m.noConflict=function(){return u._=i,this},m.identity=function(n){return n},m.constant=function(n){return function(){return n}},m.noop=function(){},m.property=w,m.propertyOf=function(n){return null==n?function(){}:function(t){return n[t]}},m.matcher=m.matches=function(n){return n=m.extendOwn({},n),function(t){return m.isMatch(t,n)}},m.times=function(n,t,r){var e=Array(Math.max(0,n));t=b(t,r,1);for(var u=0;n>u;u++)e[u]=t(u);return e},m.random=function(n,t){return null==t&&(t=n,n=0),n+Math.floor(Math.random()*(t-n+1))},m.now=Date.now||function(){return(new Date).getTime()};var B={"&":"&amp;","<":"&lt;",">":"&gt;",'"':"&quot;","'":"&#x27;","`":"&#x60;"},T=m.invert(B),R=function(n){var t=function(t){return n[t]},r="(?:"+m.keys(n).join("|")+")",e=RegExp(r),u=RegExp(r,"g");return function(n){return n=null==n?"":""+n,e.test(n)?n.replace(u,t):n}};m.escape=R(B),m.unescape=R(T),m.result=function(n,t,r){var e=null==n?void 0:n[t];return e===void 0&&(e=r),m.isFunction(e)?e.call(n):e};var q=0;m.uniqueId=function(n){var t=++q+"";return n?n+t:t},m.templateSettings={evaluate:/<%([\s\S]+?)%>/g,interpolate:/<%=([\s\S]+?)%>/g,escape:/<%-([\s\S]+?)%>/g};var K=/(.)^/,z={"'":"'","\\":"\\","\r":"r","\n":"n","\u2028":"u2028","\u2029":"u2029"},D=/\\|'|\r|\n|\u2028|\u2029/g,L=function(n){return"\\"+z[n]};m.template=function(n,t,r){!t&&r&&(t=r),t=m.defaults({},t,m.templateSettings);var e=RegExp([(t.escape||K).source,(t.interpolate||K).source,(t.evaluate||K).source].join("|")+"|$","g"),u=0,i="__p+='";n.replace(e,function(t,r,e,o,a){return i+=n.slice(u,a).replace(D,L),u=a+t.length,r?i+="'+\n((__t=("+r+"))==null?'':_.escape(__t))+\n'":e?i+="'+\n((__t=("+e+"))==null?'':__t)+\n'":o&&(i+="';\n"+o+"\n__p+='"),t}),i+="';\n",t.variable||(i="with(obj||{}){\n"+i+"}\n"),i="var __t,__p='',__j=Array.prototype.join,"+"print=function(){__p+=__j.call(arguments,'');};\n"+i+"return __p;\n";try{var o=new Function(t.variable||"obj","_",i)}catch(a){throw a.source=i,a}var c=function(n){return o.call(this,n,m)},f=t.variable||"obj";return c.source="function("+f+"){\n"+i+"}",c},m.chain=function(n){var t=m(n);return t._chain=!0,t};var P=function(n,t){return n._chain?m(t).chain():t};m.mixin=function(n){m.each(m.functions(n),function(t){var r=m[t]=n[t];m.prototype[t]=function(){var n=[this._wrapped];return f.apply(n,arguments),P(this,r.apply(m,n))}})},m.mixin(m),m.each(["pop","push","reverse","shift","sort","splice","unshift"],function(n){var t=o[n];m.prototype[n]=function(){var r=this._wrapped;return t.apply(r,arguments),"shift"!==n&&"splice"!==n||0!==r.length||delete r[0],P(this,r)}}),m.each(["concat","join","slice"],function(n){var t=o[n];m.prototype[n]=function(){return P(this,t.apply(this._wrapped,arguments))}}),m.prototype.value=function(){return this._wrapped},m.prototype.valueOf=m.prototype.toJSON=m.prototype.value,m.prototype.toString=function(){return""+this._wrapped},"function"==typeof define&&define.amd&&define("underscore",[],function(){return m})}).call(this);
//# sourceMappingURL=underscore-min.map

/* Fast Click */
!function(){"use strict";function t(e,o){function i(t,e){return function(){return t.apply(e,arguments)}}var r;if(o=o||{},this.trackingClick=!1,this.trackingClickStart=0,this.targetElement=null,this.touchStartX=0,this.touchStartY=0,this.lastTouchIdentifier=0,this.touchBoundary=o.touchBoundary||10,this.layer=e,this.tapDelay=o.tapDelay||200,this.tapTimeout=o.tapTimeout||700,!t.notNeeded(e)){for(var a=["onMouse","onClick","onTouchStart","onTouchMove","onTouchEnd","onTouchCancel"],c=this,s=0,u=a.length;u>s;s++)c[a[s]]=i(c[a[s]],c);n&&(e.addEventListener("mouseover",this.onMouse,!0),e.addEventListener("mousedown",this.onMouse,!0),e.addEventListener("mouseup",this.onMouse,!0)),e.addEventListener("click",this.onClick,!0),e.addEventListener("touchstart",this.onTouchStart,!1),e.addEventListener("touchmove",this.onTouchMove,!1),e.addEventListener("touchend",this.onTouchEnd,!1),e.addEventListener("touchcancel",this.onTouchCancel,!1),Event.prototype.stopImmediatePropagation||(e.removeEventListener=function(t,n,o){var i=Node.prototype.removeEventListener;"click"===t?i.call(e,t,n.hijacked||n,o):i.call(e,t,n,o)},e.addEventListener=function(t,n,o){var i=Node.prototype.addEventListener;"click"===t?i.call(e,t,n.hijacked||(n.hijacked=function(t){t.propagationStopped||n(t)}),o):i.call(e,t,n,o)}),"function"==typeof e.onclick&&(r=e.onclick,e.addEventListener("click",function(t){r(t)},!1),e.onclick=null)}}var e=navigator.userAgent.indexOf("Windows Phone")>=0,n=navigator.userAgent.indexOf("Android")>0&&!e,o=/iP(ad|hone|od)/.test(navigator.userAgent)&&!e,i=o&&/OS 4_\d(_\d)?/.test(navigator.userAgent),r=o&&/OS [6-7]_\d/.test(navigator.userAgent),a=navigator.userAgent.indexOf("BB10")>0;t.prototype.needsClick=function(t){switch(t.nodeName.toLowerCase()){case"button":case"select":case"textarea":if(t.disabled)return!0;break;case"input":if(o&&"file"===t.type||t.disabled)return!0;break;case"label":case"iframe":case"video":return!0}return/\bneedsclick\b/.test(t.className)},t.prototype.needsFocus=function(t){switch(t.nodeName.toLowerCase()){case"textarea":return!0;case"select":return!n;case"input":switch(t.type){case"button":case"checkbox":case"file":case"image":case"radio":case"submit":return!1}return!t.disabled&&!t.readOnly;default:return/\bneedsfocus\b/.test(t.className)}},t.prototype.sendClick=function(t,e){var n,o;document.activeElement&&document.activeElement!==t&&document.activeElement.blur(),o=e.changedTouches[0],n=document.createEvent("MouseEvents"),n.initMouseEvent(this.determineEventType(t),!0,!0,window,1,o.screenX,o.screenY,o.clientX,o.clientY,!1,!1,!1,!1,0,null),n.forwardedTouchEvent=!0,t.dispatchEvent(n)},t.prototype.determineEventType=function(t){return n&&"select"===t.tagName.toLowerCase()?"mousedown":"click"},t.prototype.focus=function(t){var e;o&&t.setSelectionRange&&0!==t.type.indexOf("date")&&"time"!==t.type&&"month"!==t.type?(e=t.value.length,t.setSelectionRange(e,e)):t.focus()},t.prototype.updateScrollParent=function(t){var e,n;if(e=t.fastClickScrollParent,!e||!e.contains(t)){n=t;do{if(n.scrollHeight>n.offsetHeight){e=n,t.fastClickScrollParent=n;break}n=n.parentElement}while(n)}e&&(e.fastClickLastScrollTop=e.scrollTop)},t.prototype.getTargetElementFromEventTarget=function(t){return t.nodeType===Node.TEXT_NODE?t.parentNode:t},t.prototype.onTouchStart=function(t){var e,n,r;if(t.targetTouches.length>1)return!0;if(e=this.getTargetElementFromEventTarget(t.target),n=t.targetTouches[0],o){if(r=window.getSelection(),r.rangeCount&&!r.isCollapsed)return!0;if(!i){if(n.identifier&&n.identifier===this.lastTouchIdentifier)return t.preventDefault(),!1;this.lastTouchIdentifier=n.identifier,this.updateScrollParent(e)}}return this.trackingClick=!0,this.trackingClickStart=t.timeStamp,this.targetElement=e,this.touchStartX=n.pageX,this.touchStartY=n.pageY,t.timeStamp-this.lastClickTime<this.tapDelay&&t.preventDefault(),!0},t.prototype.touchHasMoved=function(t){var e=t.changedTouches[0],n=this.touchBoundary;return Math.abs(e.pageX-this.touchStartX)>n||Math.abs(e.pageY-this.touchStartY)>n?!0:!1},t.prototype.onTouchMove=function(t){return this.trackingClick?((this.targetElement!==this.getTargetElementFromEventTarget(t.target)||this.touchHasMoved(t))&&(this.trackingClick=!1,this.targetElement=null),!0):!0},t.prototype.findControl=function(t){return void 0!==t.control?t.control:t.htmlFor?document.getElementById(t.htmlFor):t.querySelector("button, input:not([type=hidden]), keygen, meter, output, progress, select, textarea")},t.prototype.onTouchEnd=function(t){var e,a,c,s,u,l=this.targetElement;if(!this.trackingClick)return!0;if(t.timeStamp-this.lastClickTime<this.tapDelay)return this.cancelNextClick=!0,!0;if(t.timeStamp-this.trackingClickStart>this.tapTimeout)return!0;if(this.cancelNextClick=!1,this.lastClickTime=t.timeStamp,a=this.trackingClickStart,this.trackingClick=!1,this.trackingClickStart=0,r&&(u=t.changedTouches[0],l=document.elementFromPoint(u.pageX-window.pageXOffset,u.pageY-window.pageYOffset)||l,l.fastClickScrollParent=this.targetElement.fastClickScrollParent),c=l.tagName.toLowerCase(),"label"===c){if(e=this.findControl(l)){if(this.focus(l),n)return!1;l=e}}else if(this.needsFocus(l))return t.timeStamp-a>100||o&&window.top!==window&&"input"===c?(this.targetElement=null,!1):(this.focus(l),this.sendClick(l,t),o&&"select"===c||(this.targetElement=null,t.preventDefault()),!1);return o&&!i&&(s=l.fastClickScrollParent,s&&s.fastClickLastScrollTop!==s.scrollTop)?!0:(this.needsClick(l)||(t.preventDefault(),this.sendClick(l,t)),!1)},t.prototype.onTouchCancel=function(){this.trackingClick=!1,this.targetElement=null},t.prototype.onMouse=function(t){return this.targetElement?t.forwardedTouchEvent?!0:t.cancelable&&(!this.needsClick(this.targetElement)||this.cancelNextClick)?(t.stopImmediatePropagation?t.stopImmediatePropagation():t.propagationStopped=!0,t.stopPropagation(),t.preventDefault(),!1):!0:!0},t.prototype.onClick=function(t){var e;return this.trackingClick?(this.targetElement=null,this.trackingClick=!1,!0):"submit"===t.target.type&&0===t.detail?!0:(e=this.onMouse(t),e||(this.targetElement=null),e)},t.prototype.destroy=function(){var t=this.layer;n&&(t.removeEventListener("mouseover",this.onMouse,!0),t.removeEventListener("mousedown",this.onMouse,!0),t.removeEventListener("mouseup",this.onMouse,!0)),t.removeEventListener("click",this.onClick,!0),t.removeEventListener("touchstart",this.onTouchStart,!1),t.removeEventListener("touchmove",this.onTouchMove,!1),t.removeEventListener("touchend",this.onTouchEnd,!1),t.removeEventListener("touchcancel",this.onTouchCancel,!1)},t.notNeeded=function(t){var e,o,i,r;if("undefined"==typeof window.ontouchstart)return!0;if(o=+(/Chrome\/([0-9]+)/.exec(navigator.userAgent)||[,0])[1]){if(!n)return!0;if(e=document.querySelector("meta[name=viewport]")){if(-1!==e.content.indexOf("user-scalable=no"))return!0;if(o>31&&document.documentElement.scrollWidth<=window.outerWidth)return!0}}if(a&&(i=navigator.userAgent.match(/Version\/([0-9]*)\.([0-9]*)/),i[1]>=10&&i[2]>=3&&(e=document.querySelector("meta[name=viewport]")))){if(-1!==e.content.indexOf("user-scalable=no"))return!0;if(document.documentElement.scrollWidth<=window.outerWidth)return!0}return"none"===t.style.msTouchAction||"manipulation"===t.style.touchAction?!0:(r=+(/Firefox\/([0-9]+)/.exec(navigator.userAgent)||[,0])[1],r>=27&&(e=document.querySelector("meta[name=viewport]"),e&&(-1!==e.content.indexOf("user-scalable=no")||document.documentElement.scrollWidth<=window.outerWidth))?!0:"none"===t.style.touchAction||"manipulation"===t.style.touchAction?!0:!1)},t.attach=function(e,n){return new t(e,n)},"function"==typeof define&&"object"==typeof define.amd&&define.amd?define(function(){return t}):"undefined"!=typeof module&&module.exports?(module.exports=t.attach,module.exports.FastClick=t):window.FastClick=t}();

FastClick.attach(document.body);
$(document).ready(function() {


    var
    SW,SH,
    ISPRELOADING = true,
    WEST101 = {

        init: function() {

            this.isSmartphone = $('html').hasClass('smartphone');
            this.$window = $(window);
            this.$wrapper = $('#wrapper');

            this.initTexts();
            this.$textAnim = this.$wrapper.find('.text-anim');
            this.$parallax = this.$wrapper.find('.parallax');
            this.$logo = this.$wrapper.find('#logo');
            this.$sections = this.$wrapper.find('section');
            this.$nav = $('nav');
            this.$ham = this.$nav.find('#ham');
            this.$footer = $('footer');


            this.$window.on('scroll',_.bind(this.onScrollHandler,this));
            this.$window.on('resize',_.bind(this.onResizeHandler,this));
            this.onResizeHandler();


            this.initPreloader();
            this.initMenu();
            this.initDraggable();
            this.initCarousel();
            this.initMap();
            this.initAvailability();
            this.initContacts();
            this.initScrollers();
            this.initTeam();
            this.initBlog();
            this.initAnimLink();
            this.initFS();
			      this.initScrollTo();


            if(this.isSmartphone) {

                this.initMediaGallery();

            } else {

                var
                $hover = $('section#contacts').find('.hover'),
                $submit =  $('section#contacts').find('button');

                $submit.bind('mouseenter mouseleave',function(e) {


                    TweenLite.to($hover,1,{

                        opacity:  e.type == 'mouseenter' ? 1 : 0,
                        ease:Expo.easeOut

                    });

                });



            }
        },

		initScrollTo: function() {


			var
			$arrowScroller = $('.scroll-to');

			$arrowScroller.click(function(){

				var
        isAmenities = $(this).hasClass('amenities'),
				sectionName = $(this).data().scroll,
				$sectionOFFSET = $(sectionName).offset().top + (!isAmenities ? -40 : 120),
				scroll = {value: $(window).scrollTop()};


				TweenLite.to(scroll,1,{

					ease: Expo.easeOut,
					value: $sectionOFFSET,
					onUpdate: function() {

						$(window).scrollTop(scroll.value);
					}

				});

			});
		},

        initFS: function() {

            var
            $fs = $('img.fullscreen'),
            $fsHolders = $('.fs-image');

            if($fs.length) {

                $fsHolders.each(function() {

                    var
                    $close = $(this).find('img.close');

                    $close.click(function() {

                        $(this).parent().hide();
                    });

                });

                $fs.click(function() {

                    var imgPath = $(this).data().img;
                    $fsHolders.find('img.main').attr({src:imgPath});

                    var
                    $fsHOLDER = $($(this).data().id);

                    $fsHOLDER.show();

                });
            };
        },

		initAnimLink: function() {

			if(!this.isSmartphone) {

				var
				$animLink = $('a.anim-link');

				$animLink.click(_.bind(function(e) {

					e.preventDefault();
					e.stopImmediatePropagation();


					var
					href = $(e.currentTarget).attr('href');

					TweenLite.to(this.$wrapper,1,{

						autoAlpha:0,
						ease:Expo.easeOut,
						onComplete:function() {

							window.location.href = href;

						}
					})

				},this));

			};

		},

        initBlog: function() {

            var
            $blog = $('section#blog'),
            $more = $blog.find('.more');

            $more.click(function() {

                var
                $preview = $(this).parent().find('.text-more'),
                $span = $preview.find('span'),
                h = $span.outerHeight() + 120;

                if(!$preview.hasClass('open')) {

                    $more.text('Read Less');
                    $preview.addClass('open');
                    TweenLite.to($preview,.7,{height:h,ease:Expo.easeInOut});

                } else {

                    $more.text('Read More');
                    $preview.removeClass('open');
                    TweenLite.to($preview,.7,{height:0,ease:Expo.easeInOut});
                };

            });

        },

        initTeam: function() {

            var
            $sectionTEAM = this.$wrapper.find('section#team'),
            $teamITEMS = $sectionTEAM.find('.team-item');


            $teamITEMS.each(function() {

                var
                $this = $(this),
                $title = $(this).find('p.team-title'),
                $desc = $(this).find('p.team-desc');

                $title.click(function() {

                    if($this.hasClass('enabled')) {

                        $this.removeClass('enabled');
                        $title.find('span.plus').text('+');
                        TweenLite.to($desc,.5,{height:0,ease:Expo.easeOut});

                    } else {

                        $title.find('span.plus').text('-');
                        $this.addClass('enabled');
                        var spanH = $desc.find('span').outerHeight();
                        TweenLite.to($desc,.5,{height:spanH,ease:Expo.easeOut});
                    };

                });

            });
        },

        initScrollers: function() {

            var
            $popups = $('.popup'),
            $footerLinks = $('footer').find('.popup');

            if(!this.isSmartphone) {
                this.floor = new IScroll($('#floor-scroller')[0], {

                    mouseWheel: true,
                    scrollbars: 'custom',
                    interactiveScrollbars: true,
                    useTransition: false,
                    click: true

                });
            };

            this.legal = new IScroll($('#legal-scroller')[0], {

                mouseWheel: true,
                scrollbars: 'custom',
                interactiveScrollbars: true,
                useTransition: false,
                click: true

            });

            this.privacyScroll = new IScroll($('#privacy-scroller')[0], {

                mouseWheel: true,
                scrollbars: 'custom',
                interactiveScrollbars: true,
                useTransition: false,
                click: true

            });


            $footerLinks.click(_.bind(function(e) {

                var
                $this = $(e.currentTarget),
                $popupHOLDER = $('.popup' + $this.data().anchor);

                this.privacyScroll.refresh();
                this.legal.refresh();

                $popupHOLDER.addClass('active');

            },this));

            $popups.each(function(e) {


                $(this).find('.close').click(function() {

                    $(this).parent().removeClass('active');

                });

            });

        },

        initContacts: function() {

          var
          $contacts = $('section#contacts'),
          $form = $contacts.find('form'),
          $select = $contacts.find('p.choose').find('.select'),
          $broker_fn = $contacts.find('#broker_firstName'),
          $broker_ln = $contacts.find('#broker_lastName'),
          $broker_an = $contacts.find('#broker_agentName');


          $form.submit(function(e) {

            e.preventDefault();
            e.stopImmediatePropagation();

            var brokerName = $broker_fn.val() + ' ' + $broker_ln.val();
            if(brokerName.length <= 1) brokerName = '';
            $broker_an.val(brokerName);

            var
            $this = $(this),
            data = ($this.attr("action"), $this.serialize());


            $.ajax({
                type: "POST",
                data: data,
                url: "emailer.min.php",
                success: function() {


                  $contacts.find('#message-sent').addClass('active');
                  setTimeout(function() {

                      $contacts.find('#message-sent').removeClass('active');

                  },3500);

                }
            });

            return false;

          });

          $select.click(function() {

              var
              $form = $contacts.find($(this).data().id);

              $contacts.find('.form.enabled').removeClass('enabled').addClass('hide');
              $form.removeClass('hide').addClass('enabled');

              $(this).parent().find('.active').removeClass('active');
              $(this).addClass('active');

          });


        },

        initAvailability: function() {

            var
            _this = this,
            $floorPlan = $('#floor-plan'),
            $view = $('section.availability').find('.column.view');

            $floorPlan.find('.circle.close').click(function() {

                $floorPlan.removeClass('active');
            });

            $view.each(function() {

                $(this).find('.view').click(function(){


                    var
                    $dataPDF = $(this).parent().data().pdf,
                    $dataIMG = $(this).parent().data().img;

                    $floorPlan.find('img.main').attr({src:$dataIMG});
                    $floorPlan.find('a').attr({href:$dataPDF});

                    console.log(_this.floor);
                    setTimeout(function() { _this.floor.refresh(); },500);
                    $floorPlan.addClass('active');

                });

                $(this).find('.email').click(function(){


                    var
                    $dataPDF = $(this).data().pdf;
                    $('.popup.pdf').addClass('active');

                });

            });
        },

        initMediaGallery: function() {

            var
            $sectionMEDIA = $('section.media'),
            $sectionMEDIAImg = $sectionMEDIA.find('.media-holder');


            $sectionMEDIAImg.bind('touchstart touchend',function(e) {

                TweenLite.to($(this),1,{

                    scale: e.type == 'touchstart' ? 1.2 : 1,
                    ease: Expo.easeOut

                });

            });

        },

        initTexts: function() {

            var
            $hGroup = this.$wrapper.find('h2,h3');

            $hGroup.each(function() {

                var
                $this = $(this),
                split = $this.html().split('<br>');

                if(split.length > 1) {

                    $this.html('');

                    $this.removeClass('text-anim');
                    _.each(split,function(val) {

                        $this.append('<span class="text-anim">' + val + '</span>');

                    });
                };

            });
        },

        initPreloader: function() {


            var
            _this = this,
            doPreload = !$('html').hasClass('noload'),
			$preloader = $('#preloader'),
            $preloads = $('*[data-preload="true"]'),
            $svg = $preloader.find('svg'),
            $path = $svg.find('path'),
            $line = $preloader.find('#line'),
            manifest = [],
            queue = new createjs.LoadQueue(),
            isSmartphone = this.isSmartphone;

            $preloads.each(function() {

                manifest.push({

                    id: $(this).data().id,
                    src: $(this).data().img
                });
            });

            var
            onStart = function() {


                TweenLite.set($svg,{opacity:1});
                TweenMax.to($path,3,{

                    drawSVG: '100%',
                    ease: Power4.easeIn,
                    onComplete: function() {

                        _.delay(function() { queue.loadManifest(manifest); },1500);
                    }
                });

                 TweenMax.to($path,2,{

                    delay:1.75,
                    fill: '#4d4d56',
                    ease:Expo.easeIn

                });

            },
            onProgress = function(e) {


                TweenLite.killTweensOf($line);
                TweenLite.to($line,2,{

                    width: (e.progress * 250),
                    ease: Expo.easeOut

                });

            },
            onFileComplete = function(e) {


                var
                $div = $('#preload-' + e.item.id);
                $div.css({backgroundImage:'url(' + e.item.src + ')'});

            },
            onComplete = function() {

                ISPRELOADING = false;
                _this.$wrapper.addClass('active');

                setTimeout(function() {


                    TweenLite.to($line,1,{

                        opacity:0,
                        ease: Expo.easeOut
                    });

                    $('section#home').addClass('active');
                    $preloader.addClass('disabled');
                    queue = null;

                },1500);

            };

			if(doPreload) {

				/*
				queue.on('progress',onProgress);
				queue.on('fileload',onFileComplete);
				queue.on('complete',onComplete);

				TweenMax.set($path,{drawSVG:'0%'});
				onStart();
				*/

				_.each(manifest,function(el) {

					var
					$div = $('#preload-' + el.id);
					$div.css({backgroundImage:'url(' + el.src + ')'});
				});

				TweenMax.set($path,{drawSVG:'0%'});
				TweenLite.set($svg,{opacity:1});
                TweenMax.to($path,3,{

                    drawSVG: '100%',
                    ease: Power4.easeIn,
                });

                TweenMax.to($path,2,{

                    delay:1.75,
                    fill: '#4d4d56',
                    ease:Expo.easeIn,
					onComplete: function() {

						setTimeout(function() {

							ISPRELOADING = false;
							_this.$wrapper.addClass('active');
							$('section#home').addClass('active');
							$preloader.addClass('disabled');

						},500);


					}

                });



			} else {



				_.each(manifest,function(el) {

					var
					$div = $('#preload-' + el.id);
					$div.css({backgroundImage:'url(' + el.src + ')'});
				});

				ISPRELOADING = false;
                _this.$wrapper.addClass('active');
				$('section#home').addClass('active');
                $preloader.addClass('disabled');

			};




        },

        initMenu: function() {


            this.$nav.bind('touchmove',function(e) {

                e.preventDefault();
                e.stopImmediatePropagation();

            });

            var
            $line = this.$nav.find('#line'),
            $liACTIVE = this.$nav.find('li.active');

            setTimeout(function() {

            TweenMax.set($line,{x:$liACTIVE.offset().left,width:$liACTIVE.width(),opacity:1});

            },100);

            this.$nav.find('li').bind('mouseenter mouseleave',function(e) {

                var
                $this = $(this),
                $li = e.type == 'mouseenter' ? $this : $liACTIVE;

                TweenMax.to($line,1.15,{

                    x:$li.offset().left,
                    width:$li.width(),
                    ease: Expo.easeInOut

                });


            });

            /*
            this.$nav.find('li').click(_.bind(function(e) {

                var
                $this = $(e.currentTarget),
                anchor = $this.data().anchor,
                $section = $('section' + anchor),
                offsetTop = $section.offset().top,
                scrollValue = {value: this.$window.scrollTop()};

                TweenLite.to($('body'),1,{scrollTop:offsetTop,ease:Expo.easeInOut});
                if(this.isSmartphone) this.$ham.click();


            },this));

            */

            this.$ham.click(_.bind(function() {

                this.$nav.toggleClass('active');


            },this));
        },

        initMap: function() {

            var
            $sectionMap = this.$wrapper.find('section#map'),
            $mapHolder = $sectionMap.find('.map-holder'),
            $mapContent = $sectionMap.find('.map-content'),
            $mapLevel = $mapContent.find('.map-level'),
            $map = $mapLevel.find('.map'),
            $buttons = $sectionMap.find('.button'),
            minZoom = 1, maxZoom = 4, currZoom = 1,
            $selectItem = $sectionMap.find('.select-item'),
            $select = $sectionMap.find('select'),
            $selected = null,
            onMouseUp = function() {

                $mapHolder.removeClass('active');

            },
            onMouseDown = function(e) {

                console.log($mapHolder);
                $mapHolder.addClass('active');
            };

            //$mapContent.on('mousedown touchstart',onMouseDown);
            //$(document).bind('mouseup touchend',onMouseUp);

            var draggable = Draggable.create(".map-content", {

                type:"x,y",
                edgeResistance:0.85,
                bounds:".map-holder",
                throwProps:true,
                onDragStart: onMouseDown,
                onDragEnd:onMouseUp

            });

            $buttons.click(function() {

                currZoom += $(this).hasClass('zoom-in') ? 1 : -1;
                currZoom = currZoom < minZoom ? minZoom : currZoom > maxZoom ? maxZoom : currZoom;

                $mapContent[0].className = 'map-content level' + currZoom;

                $buttons.eq(0)[currZoom == 4 ? 'addClass' : 'removeClass']('disabled');
                $buttons.eq(1)[currZoom == 1 ? 'addClass' : 'removeClass']('disabled');

                if($(this).hasClass('zoom-out')) TweenMax.to(draggable[0].target,.5,{force3D:true,x:0,y:0,ease:Power2.easeOut});

            });



            // Select

            $selectItem.each(function() {

                var
                $li = $(this).find('li');

                $li.bind('mouseenter mouseleave',function(e) {

                    var
                    num = $(this).data().num,
                    $pin = $sectionMap.find('.pin[data-num="' + num + '"]'),
                    offset = $pin.position();


                    $pin[e.type == 'mouseenter' ? 'addClass' : 'removeClass']('active');



                });

            });

            /*
            $selectItem.each(function(){

                var
                $this = $(this),
                $ul = $this.find('ul'),
                ulHeight = 45 + ($this.find('li').length * 24);

                if(ulHeight > 300) {


                  var draggable = Draggable.create($this.find('li')[0], {

                      type:"y",
                      edgeResistance:0.85,
                      bounds:$this.parent()[0],
                      throwProps:true

                  });

                };

            });
            */

            $selectItem.click(function() {

                var
                $this = $(this),
                type = $this.data().type.toUpperCase(),
                $pins = $sectionMap.find('.pin'),
                $selectedPins = $sectionMap.find('.pin[data-type="' + type + '"]'),
                ulHeight = 45 + ($this.find('li').length * 24.5);

                if($selected != null) {

                    TweenLite.to($selected.find('ul'),.65,{height:0,ease:Quint.easeInOut});
                };

                $selected = $this;
                TweenLite.to($this.find('ul'),.65,{height:ulHeight / 2 + 50,ease:Quint.easeInOut});

                $pins.addClass('disabled');
                $selectedPins.removeClass('disabled');


                $selectItem.removeClass('active');
                $(this).addClass('active');

            });

            $select.on('change',function() {

                var
                $this = $(this),
                $p = $this.parent().find('p span'),
                type = $this.find('option:selected').val(),
                label = $this.find('option:selected').text(),
                $pins = $sectionMap.find('.pin'),
                $selectedPins = $sectionMap.find('.pin[data-type="' + type + '"]');

                $pins.addClass('disabled');
                $selectedPins.removeClass('disabled');

            });

        },

        initCarousel: function() {

            var
            $carouselSC = this.$wrapper.find('section.carousel');

            $carouselSC.each(function() {

                var
                tween_interval,
                $carousel = $(this),
                $items = $carousel.find('.carousel-item'),
                $counters = $carousel.find('.counter-holder').find('span'),
                $arrows = $carousel.find('.carousel-arrow'),
                items_count = $items.length;



                if(items_count > 1) {

                    var
                    interval = parseFloat($carousel.data().interval),
                    current = 0,
                    change = function(id) {


                        $items.eq(current).removeClass('active').addClass('out');

                        current = id == undefined ? current +1 : id;
                        if(current == items_count) current = 0;
                        if(current < 0) current = items_count - 1;

                        $items.eq(current).removeClass('out').addClass('active');

                        $counters.removeClass('active').eq(current).addClass('active');
                        tween_interval = TweenLite.delayedCall(interval,change);

                    };

                    $counters.click(function() {

                        if(tween_interval) tween_interval.kill();
                        change($(this).index());

                    });

                    $arrows.click(function() {

                        if(tween_interval) tween_interval.kill();
                        var next = $(this).hasClass('left') ? current - 1 : current + 1;

                        change(next);

                    });



                    tween_interval = TweenLite.delayedCall(interval,change);

                };

            });
        },

        initDraggable: function() {

            var
            selected = null,
            slideIN= null,
            slideOUT = null,
            x_pos = 0, x_start = 0,
            perc, x_move, x_elem, opacity_in, opacity_out,
            $draggables = this.$wrapper.find('.slider-circle'),
            dragInit = function(elem,e) {

                selected = elem;
                selected.className = 'slider active';

                x_elem = $(elem).offset().left;
                x_start = document.all ? window.event.clientX : e.pageX;
            },
            dragMove = function(e) {

                x_pos = document.all ? window.event.clientX : e.pageX;

                if (selected != null) {

                    x_move = x_pos - x_start;


                    perc = ((x_elem + x_move) / SW);

                    if(perc >= 0 && perc <= 1)
                    {
                        $(selected).data().perc = (perc * 100) + '%';

                        selected.style.left = (x_elem + x_move) + 'px';
                        opacity_out = (1 - perc) + .5;
                        opacity_in = (1 - (1 - perc)) + .5;

                        slideIN.css({width: (perc * 100) + '%',opacity:opacity_in});
                        slideOUT.css({width: (100 - (perc * 100)) + '%',opacity:opacity_out});
                    };

                };

            },
            dragDestroy = function() {

                if(selected != null) {

                    selected.className = 'slider';

                    selected = null;
                    slideIN = null;
                    slideOUT = null;

                };
            };

            $draggables.each(function() {

                var
                $drag = $(this).parent(),
                onMouseDown = function(e) {

                    e.preventDefault();

                    slideIN = $drag.parent().find('.slide-item').eq(0);
                    slideOUT = $drag.parent().find('.slide-item').eq(1);


                    dragInit(this,e);
                    return false;
                };

                $drag[0].onmousedown = onMouseDown;
                $drag[0].ontouchstart = onMouseDown;


            });

            document.onmousemove = dragMove;
            document.onmouseup = dragDestroy;

            document.ontouchmove = dragMove;
            document.ontouchend = dragDestroy;
        },

        onScrollHandler: function() {

            var
            st = this.$window.scrollTop(),
            parallaxLimit = 55, limit = this.isSmartphone ? .95 : .85;

            if(st > (SH * .5) && !this.$logo.hasClass('scrolled')) this.$logo.addClass('scrolled');
            else if(st < (SH * .5) && this.$logo.hasClass('scrolled')) this.$logo.removeClass('scrolled');

            if(!this.isSmartphone && !ISPRELOADING) {

                if(st + SH > $(document).height() - 100) {

                   this.$footer.addClass('active');

                } else {

                    this.$footer.removeClass('active');
                };

            };

            var $imagePadding = $('.image-padding');

            $imagePadding.each(function() {

                var
                $this = $(this),
                $parent = $this.parent().find('.padding');

                $this.height($parent.outerHeight());

            });

            if(this.isSmartphone) {
            this.$sections.each(_.bind(function(i,el) {


                var
                $this = $(el),
                offsetTop = $this.offset().top,
                sectionTop = offsetTop - st,
                active = null;

				/*
                if($this.attr('id') == 'home' && sectionTop < 120) active = 0;
                if($this.attr('id') == 'building' && sectionTop < 120) active = 1;
                if($this.attr('id') == 'residences' && sectionTop < 120) active = 2;
                if($this.attr('id') == 'availability' && sectionTop < 120) active = 3;
                if($this.attr('id') == 'amenities' && sectionTop < 120) active = 4;
                if($this.attr('id') == 'neighborhood' && sectionTop < 120) active = 5;
                if($this.attr('id') == 'media' && sectionTop < 120) active = 6;
                if($this.attr('id') == 'contacts' && sectionTop < 120) active = 7;

                if(active != null) this.$nav.find('li').removeClass('active').eq(active).addClass('active');
                */

                if((offsetTop - st) < 120) {

                    if($this.hasClass('white')) {

                        this.$ham.addClass('white');
                        this.$logo.addClass('white');

                    } else {

                        this.$ham.removeClass('white');
                        this.$logo.removeClass('white');
                    };
                };

            },this));

			};

            this.$textAnim.each(function(i){

                var
                $this = $(this),
                offsetTop = $this.offset().top;


                if((offsetTop - st) < (SH * limit)) {

                    if(!$this.hasClass('active'))
                        $this.addClass('active');
                };

            });

            if(!this.isSmartphone) {
            this.$parallax.each(function(i){

                var
                $this = $(this),
                yPerc = 0, topLimit = 0, scale, mult,
                offsetTop = $this.offset().top;


                TweenLite.killTweensOf($this);

                if((offsetTop - st) < topLimit) {

                    yPerc = (((st - offsetTop) / SH) * .5) * 100;
                    yPerc = yPerc > parallaxLimit ? parallaxLimit : yPerc;

                    if($this.hasClass('slow')) yPerc = yPerc / 4;


                    TweenLite.to($this,.1,{

                        y:yPerc + '%',
                        ease: Quint.easeOut

                    });

                } else {

                    mult = ((offsetTop - st) / SH);
                    yPerc = -(((offsetTop - st) / SH) * .5) * 100;
                    yPerc = yPerc < -parallaxLimit ? -parallaxLimit : yPerc;

                    if($this.hasClass('slow')) yPerc = yPerc / 4;

                    scale = 1 + ((1 - (mult * 1.05)) * .25);
                    scale = scale > 1.1 ? 1.1 : scale;
                    scale = scale < 1 ? 1 : scale;



                    TweenLite.to($this,.1,{

                        y:yPerc + '%',
                        ease: Quint.easeOut

                    });
                };


            });
            };

        },

        onResizeHandler: function() {

            SW = window.innerWidth;
            SH = window.innerHeight;
            this.onScrollHandler();

            $('section.slide').each(function() {

                var
                $slider = $(this).find('.slider');

                $slider.css({left:$slider.data().perc});

            });

        }

    };

    WEST101.init();

});
