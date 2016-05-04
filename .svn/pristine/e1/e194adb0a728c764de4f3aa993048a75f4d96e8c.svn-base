// JavaScript Document
var Comment = {
	/**
	 *商品相关评论操作
	 */
	productOperation : function (id, value, type) {
		var jsonarr = {
			json : JSON.stringify({
				base : Base.All(),
				data : {
					id : id,
					value : value,
					type : type,
				},
				route : 'wuadian_cms_product_operation',
				isroute : "0",
				isrows : "1"
			})
		}
		$.ajax({
			type : 'post',
			url : url,
			data : jsonarr,
			timeout : 90000,
			cache : false,
			dataType : 'json',
			success : function (o) {
				if (o.isok != "false") {
					var row = $('#tt').datagrid('getSelected');
					$('#tt').datagrid("reload");
				} else {
					$.messager.alert('提示', '操作失败');
					return false;
				}
			}
		})
	},
	/**
	 *商品回复表
	 */
	producReply : function () {
		var replayComment = $.trim($('#recomment').val());
		if (replayComment == "") {
			$.messager.alert('提示', '回复内容不能为空');
			return false;
		}
		var id = $("#commentid").val();
		var jsonarr = {
			json : JSON.stringify({
				base : Base.All(),
				data : {
					id : id,
					value : replayComment,
					type : 'replay'
				},
				route : 'wuadian_cms_product_operation',
				isroute : "0",
				isrows : "1"
			})
		}
		$.ajax({
			type : 'post',
			url : url,
			data : jsonarr,
			timeout : 90000,
			cache : false,
			dataType : 'json',
			success : function (o) {
				if (o.isok != "false") {
					$('#dlg').dialog('close');
					$('#tt').datagrid("reload");
				} else {
					$.messager.alert('提示', '评论失败');
					return false;
				}
			}
		})
	},
	/**
	 * 查看回复
	 */
	lookReply : function (value, id, time) {

		if (value == 'null') {
			$('#dlg').dialog('open').dialog('setTitle', '回复').dialog('vcenter');
			value = ""
				$('#replytimeid').text("");
		} else {
			$('#dlg').dialog('open').dialog('setTitle', '查看回复').dialog('vcenter');
			$('#replytimeid').text('回复时间:' + time);
		}
		$('#recomment').val(value);
		$('#commentid').val(id);
	},
	/**
	 * 商品评论批量 精华 / 屏蔽
	 */
	batchOperation : function (type) {
		var rows = $('#tt').datagrid('getChecked');
		if (rows.length == 0) {
			$.messager.alert('提示', '至少选择一项');
			return false;
		}
		if (type == 'display') {
			var msg = "您确定要屏蔽？";
		}
		if (type == 'essence') {
			var msg = "您确定要设置为精华？";
		}
		var commentid = "";
		for (var i = 0; i < rows.length; i++) {
			commentid += rows[i].comment_id + ','
		}
		commentid = commentid.substring(0, commentid.length - 1);
		$.messager.confirm('确认', msg, function (r) {
			if (r) {
				var jsonarr = {
					json : JSON.stringify({
						base : Base.All(),
						data : {
							id : commentid,
							value : type,
							type : 'batchoperation'
						},
						route : 'wuadian_cms_product_operation',
						isroute : "0",
						isrows : "1"
					})
				}
				$.ajax({
					type : 'post',
					url : url,
					data : jsonarr,
					timeout : 90000,
					cache : false,
					dataType : 'json',
					success : function (o) {
						$('#tt').datagrid("reload");
					}
				})
			}
		})
		return false;
	},
	batchReply : function () {
		var rows = $('#tt').datagrid('getChecked');
		if (rows.length == 0) {
			$.messager.alert('提示', '至少选择一项');
			return false;
		} else {

			$('#dlg').dialog('open').dialog('setTitle', '批量回复').dialog('vcenter');
			$('#replytimeid').text("");
			$('#recomment').val("");
			var commentid = "";
			for (var i = 0; i < rows.length; i++) {
				commentid += rows[i].comment_id + ','
			}
			commentid = commentid.substring(0, commentid.length - 1);
			$('#commentid').val(commentid);
		}
		return false;
	}
}
var Message = {
	sendMessage : function () {
		var replayComment = $.trim($('#recomment').val());
		if (replayComment == "") {
			$.messager.alert('提示', '消息内容不能为空');
			return false;
		}
		var id = $("#commentid").val();
        var openid = $("#openid").val();
		var jsonarr = {
			json : JSON.stringify({
				base : Base.All(),
				data : {
					id : id,
					value : replayComment,
                    type:1,
                    openid:openid
				},
				route : 'wuadian_cms_message_send',
				isroute : "0",
				isrows : "1"
			})
		}
		$.ajax({
			type : 'post',
			url : url,
			data : jsonarr,
			timeout : 90000,
			cache : false,
			dataType : 'json',
            success : function (msg) {
                if (msg.rsp !=0) {
                    $('#dlg').dialog('close');
                    $('#tt').datagrid("reload");
                } else {
                    $.messager.alert('提示', msg.msg);
                    return false;
                }
            }
		})
	},
	lookMessage : function (value, id,time,openid) {
			if (time == 0) {
			$('#dlg').dialog('open').dialog('setTitle', '回复消息').dialog('vcenter');
			     value = ""
				$('#replytimeid').text("");
		} else {
			$('#dlg').dialog('open').dialog('setTitle', '查看回复').dialog('vcenter');
			$('#replytimeid').text('回复时间:' + time);
		}
		$('#recomment').val(value);
		$('#commentid').val(id);
		$('#openid').val(openid);
	}
}
/**
 *隐藏显示操作
 */
 function showHide(id)
 {
 	if($("#"+id).css("display")=="block")
 	{
		$("#"+id).css("display", "none");
	}
	else
	{
		$("#"+id).css("display", "block");
	}
 	
 }
