function get_cur_pos(el){if(el.selectionStart){return el.selectionStart;}else{if(document.selection){el.focus();var r=document.selection.createRange();if(r==null){return 0;}var re=el.createTextRange(),rc=re.duplicate();re.moveToBookmark(r.getBookmark());rc.setEndPoint("EndToStart",re);return rc.text.length;}}return 0;}function set_caret_position(_5,_6){if(_5.setSelectionRange){_5.focus();_5.setSelectionRange(_6,_6);}else{if(_5.createTextRange){var _7=_5.createTextRange();_7.collapse(true);_7.moveEnd("character",_6);_7.moveStart("character",_6);_7.select();}}}function get_cur_word_idx(el){var _9=get_cur_pos(el);var _a=el.value;var _b=_9;var _c=_a.substring(0,_9);var _d=_c.split(/\s+/);if(_d.length>0){var _e=_d[_d.length-1];if((_c.lastIndexOf(_e)+_e.length)==_9){_b=_9-_e.length;}}return [_b,_9];}var cur_start_pos,cur_stop_pos,search_word;function patchAutocomplete(){jQuery.ui.autocomplete.prototype.massageVal=function(_f){return search_word;};jQuery.ui.autocomplete.prototype._renderMenu=function(ul,_11){function renderItem(ul,_13){var re=new RegExp(search_word.replace(".","\\."),"ig");var t=(_13.realname+" ("+_13.loginname+")").replace(re,"<span style='font-weight:bold;'>$&</span>");return jQuery("<li></li>").data("item.autocomplete",_13).append("<a><img width=\"24\" height=\"24\" src=\""+_13.photo_url+"\"> "+t+"</a>").appendTo(ul);}function startswith(_16,_17){return _16.toLowerCase().indexOf(_17.toLowerCase())==0;}var _18=new Array();var _19=new Array();var _1a=new Array();var _1b=new Array();jQuery.each(_11,function(_1c,_1d){if(startswith(_1d.realname,search_word)){_18.push(_1d);}else{if(startswith(_1d.pinyin,search_word)){_19.push(_1d);}else{if(startswith(_1d.loginname,search_word)){_1a.push(_1d);}else{_1b.push(_1d);}}}});var _1e=_18.concat(_19,_1a,_1b);if(_1e.length>10){_1e=_1e.slice(0,10);}jQuery("<li id=\"ac_top_banner\">\u4f60\u60f3\u8981@\u8c01,\u7ee7\u7eed\u8f93\u5165TA\u7684\u540d\u5b57\u770b\u770b</li>").appendTo(ul);jQuery.each(_1e,function(_1f,_20){renderItem(ul,_20);});};}jQuery(document).ready(function(){var _21="@";patchAutocomplete();jQuery("textarea[name=\"content\"]").autocomplete({source:"/home.ac_friends",search:function(){var _22=get_cur_word_idx(this);var _23=_22[0];var _24=_22[1];var _25=this.value.substring(_23,_24);if(_25.length>=1){var pos=_25.lastIndexOf(_21);if(pos>=0){cur_start_pos=_23+pos;cur_stop_pos=_24;search_word=_25.substring(pos+1);return true;}}jQuery(this).autocomplete("close");return false;},select:function(_27,ui){var _29=this.value;var pos=_29.lastIndexOf(_21);var _2b=cur_start_pos+ui.item.realname.length+2;this.value=_29.substring(0,cur_start_pos+1)+ui.item.realname+" "+_29.substring(cur_stop_pos);set_caret_position(this,_2b);return false;},focus:function(){return false;},autoFocus:true,minLength:0});});