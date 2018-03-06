/**
 * @version PAUI Validator 1.0.2
 * @author <a href="liaolibin144@pingan.com">liaolibin144</a>
 * http://stg.pa18.com/paui/1.0.1/docs/validator
 * Depends: jquery,jquery.ui.widget.js
 *  
 */
(function( $, undefined ){
	/**
	 * @name Validator
	 * @class 校验控件
	 * @constructor
	 * @example 
	 * JS:
	 *	$("#em1,#em2").validator({..})
	 * @link <a target="_blank" href="Validator-ajax.html">validator-ajax</a>、
	 * @link <a target="_blank" href="Validator-identityCard.html">validator-identityCard</a>、
	 * @link <a target="_blank" href="Validator-compare.html">validator-compare</a>、
	 * @link <a target="_blank" href="Validator-email.html">validator-email</a>、
	 * @link <a target="_blank" href="Validator-integer.html">validator-integer</a>、
	 * @link <a target="_blank" href="Validator-mobile.html">validator-mobile</a>
	 */
	//$.widget("ui.validator", {
	var validator={
		version: '4.0',
		build: '2012.1107',
		options:{
			/** @lends Validator.prototype*/
			/**
			 * 提示框
			 * 
			 * 
			 * @type String|id
			 * @default 空
			 */
			tipBox:'',
			/**
			 * 默认触发校验的事件
			 * 
			 * @type String 默认事件为blur
			 * @default blur
			 */
			triggerEvent:"blur",
			/**
			 * 校验的规则对像
			 * 
			 * @type Object 格式为json格式
			 * @default null
			 */
			rules:null,
			/**
			 * 是否允许为空
			 * 
			 * @type Boolean
			 * @default false
			 */
			triggerOnEmpty:false, //是否允许为空
			/**
			 * 为空时是否触发校验事件
			 * 
			 * @type Boolean
			 * @default false
			 */
			eventOnEmpty:false,  //为空是否触发校验事件
			/**
			 * form 是否提交自动认证
			 * 
			 * @type Boolean
			 * @default true
			 */
			triggerOnSubmit:true, //form 是否提交自动认证
			/**
			 * 默认显示提示框的样式
			 * 
			 * @type String
			 * @default pa_ui_validator_onshow
			 */
			cssShow:'pa_ui_validator_onshow', 
			/**
			 * 获取焦点时的提示样式
			 * 
			 * @type String
			 * @default pa_ui_validator_onfocus
			 */
			cssFocus:'pa_ui_validator_onfocus',
			/**
			 * 校验正确时的提示样式
			 * 
			 * @type String
			 * @default pa_ui_validator_oncorrect
			 */
			cssCorrect:'pa_ui_validator_oncorrect',
			/**
			 * 校验错误时的提示样式
			 * 
			 * @type String
			 * @default pa_ui_validator_onerror
			 */
			cssError:'pa_ui_validator_onerror',
			/**
			 * 焦点离开为空时的提示样式
			 * 
			 * @type String
			 * @default pa_ui_validator_onempty
			 */
			cssEmpty:'pa_ui_validator_onempty',
			/**
			 * 焦点离开为空时的元素样式
			 * 
			 * @type String
			 * @default pa_ui_element_normal
			 */
			cssElEmpty:'pa_ui_element_normal', 
			/**
			 * 正常状态时的元素样式
			 * 
			 * @type String
			 * @default pa_ui_element_normal
			 */
			cssElShow:'pa_ui_element_normal',
			/**
			 * 获取焦点时的元素样式
			 * 
			 * @type String
			 * @default pa_ui_element_focus
			 */
			cssElFocus:'pa_ui_element_focus',
			/**
			 * 校验正确时的元素样式
			 * 
			 * @type String
			 * @default pa_ui_element_correct
			 */
			cssElCorrect:'pa_ui_element_correct',
			/**
			 * 校验错误时的元素样式
			 * 
			 * @type String
			 * @default pa_ui_element_error
			 */
			cssElError:'pa_ui_element_error',
			/**
			 * 密码强度提示样式
			 * 
			 * @type String
			 * @default pa_ui_validator_password
			 */
			cssPassword:'pa_ui_validator_password',
			/**
			 * 在校验前执行的方法
			 * 
			 * @type Function
			 * @default return true
			 */
			beforeValid:function(){return true;},
			/**
			 * 预定义校验
			 * 
			 * @type JSON
			 * @default ''
			 */
			preDefines:'',
			/**
			 * 校验后执行的方法
			 * 
			 * @type Function
			 * @default Function
			 */
			endValid:function(){return true;},
			/**
			 * 为空时不需要校验的提示且不进行校验
			 * 
			 * @type Boolean
			 * @default false
			 */
			emptyNoTip:false
		},
		/**
	     * @name Validator#getter
	     * @desc  设置外部调用的方法
	     * @event
	     * @example 
		 * JS:
		 *	$("#elem").validator("check");	//调用了方法名为check的方法。
		 */
		
		getter:"check showMessage disable enable",
		_init: function() {
			
			var self=this,em=self.element;
				if(em.is("form")){
					self.form=em;
					self._bulidForm();
				}else{
					self._bulidElement(em);
				}
			
		},
		/**
	     * @name Validator#disable
	     * @desc  禁用校验的方法
	     * @event
	     * @example 
		 * JS:
		 *	$("#elem").validator({}).validator("disable");	//调用了方法名为disable的方法。
		 */
		
		disable:function(){
			if(!this.options.disabled){
				this.options.disabled=true;
				this.changDiabled=true;
			}
			this.element.unbind('.validator');
		},
		/**
	     * @name Validator#enable
	     * @desc  禁用再开启校验的方法
	     * @event
	     * @example 
		 * JS:
		 *	$("#elem").validator("enable");	//调用了方法名为enable的方法。
		 */
		enable:function(){
			this.changDiabled && (this.options.disabled=false);
			this._init();
		},
		_bulidForm:function(){
			var self=this,op=self.options;
			if(self.options.triggerOnSubmit){
				$(self.form).bind('submit.validator',function(){
					if(op.disabled){
						return true;
					}
					if(self._checkForm()){
						return true;
					}
					else{
						return false;
					}
				});
			}
		},
		
		_checkForm:function(){
			var self=this,op=self.options,form=self.form,$elements = $(self._formElements(form)),isValid=true,callback=true;
			self.falseEl=[];
			if(op.beforeValid){
				if(typeof op.beforeValid === 'function'){
					callback = op.beforeValid(self.form);
				}
				else{
					callback = eval( op.beforeValid + '(self.form)' );
				}
			}
			//停止校验
			if(!callback){
				return false;
			}
			$elements.each(function(i,elem){ 
				self.valiResult=$(elem).validator('check');
				$(elem).data("valiResult",self.valiResult);
				if(!self.valiResult || self.valiResult=="pending"){
					isValid = false;
					$(elem).validator("showMessage");
					self.falseEl.push(elem);
				}
			});
			callback=true;
			if(op.endValid){
				if(typeof op.endValid === 'function'){
					callback = op.endValid(self.form,isValid);
				}
				else{
					callback = eval( op.endValid + '(self.form,isValid)' );
				}
			}
			//停止校验
			if(!callback){
				return false;
			}
			self.falseEl[0] && !$(self.falseEl[0]).is(":hidden,:disabled,select,:radio,:checked") &&self.falseEl[0].focus();
			return isValid;
		},
		
		_formElements:function(form,validatorgroup){
			return form.find("input,select,file,textarea")
			.filter(function(){
				if($(this).data('validator') == null){
					return false;
				}
				return true;
			})
			.not(":submit, :reset, :image");
		},
		
		_bulidElement:function(em){
			var self=this,op=self.options,rules=op.rules,event=op.triggerEvent;
			self.form = this.element.parents("form:first");

			if (self.form.length > 0){
				self.form=self.form.eq(0);
			}//else return null;
			//查校验规则
			if(rules){
				for(var validateType in rules){
					if(!self._isSupportType(op[validateType])){
						delete op.rules[validateType];
					}
				}
				
				//有必填字段，空触发校验
				if(rules.required){
					op.triggerOnEmpty = true;
				}
			}
			//增加校验事件
			self._event();
		},
		
		_isSupportType:function(validateType){
			var isSupNode=validateType,em=this.element,emNode=em[0].nodeName;
			if(isSupNode){
				var supNodeArr=isSupNode.split(",");
				for(var i=0;i<supNodeArr.length;i++){
					if(supNodeArr[i].toUpperCase()==emNode||supNodeArr[i].toUpperCase()==em.attr("type").toUpperCase()){
						return true;
					}else{
						return false;
					}
				}
			}else
			return true;
		},
		
		_event:function(){
			var self=this,em=self.element,op=self.options,rules=op.rules;
			var event = ' ';
			//预定的校验
			if(op.preDefines){
				//$.extend(op,self._preDefines[op.preDefines]);
				var pre=self._preDefines[op.preDefines];
				op.show=pre.show;
				op.focus=pre.focus;
				op.empty=pre.empty;
				op.error=pre.error;
				op.rules=$.extend({},op.rules,pre.rules);
				//$.extend(rules,pre.rules);
			}
			if(em.is(':text,:password,:file,textarea')){
				event = op.triggerEvent;
			}
			else if(em.is(':radio,:checkbox')){
				event = 'click';
			}
			else if(em.is('select')){
				event = op.triggerEvent;
			}
			event = $.map(event.split(' '),function(item){return item + '.validator';}).join(' ');
			if(op.cssElFocus){
				em.bind("focus.validator",function(){
					if(op.disabled)return;
					op.focus && self._setTipState(op.cssFocus,op.focus);
					self._setElState(op.cssElFocus);
				});
				
			}
			if(self.getLength()<=0 && !self.options.eventOnEmpty){
				self._setTipState(op.cssShow,op.show,op.cssParShow);
				self._setElState(op.cssElShow);
			}
			em.bind(event,function(event){
				if(op.disabled)return;
				if(self.getLength()<=0 && op.show && !self.options.eventOnEmpty && !op.emptyNoTip){
					self._setTipState(op.cssShow,op.show,op.cssParShow);
					self._setElState(op.cssElShow);
					return;
				}
				if(self.getLength()<=0 && op.emptyNoTip){
					self._setTipState();
					return;
				}
				if(self.getLength()<=0 && !op.triggerOnEmpty){
					self._trigger('empty',event,null);
					self._setTipState(op.cssEmpty,op.empty,op.cssParEmpty);
					self._setElState(op.cssElEmpty);
					return;
				}
				
				self.check();
				//self.showMessage(self.validtype);
			})
		},
		
		showMessage:function(validtype){
			var self=this,em=self.element,op=self.options,tipBox=op.tipBox;
			if(!tipBox)return;
			if(typeof self.valiResult=="undefined")
				self.valiResult=em.data("valiResult");
			if(validtype&&!validtype.isValid){
				self._setTipState(op.cssError,validtype.errorMsg);
				self._setElState(op.cssElError);
				return false;
			}
			if(self.valiResult){			
				self._setTipState(op.cssCorrect,op.correct);
				self._setElState(op.cssElCorrect);
			}else if(!self.valiResult){
				
				if(typeof self.valiResult=="boolean" || op.rules.required){
					if(self.validtype){
						var mes='';
						var mes=self.validtype.errorMessage?self.validtype.errorMessage:(self.validtype.error||op.error);
						self._setTipState(op.cssError,mes);
						self._setElState(op.cssElError);
					}
				}
					
				else {
					self._setTipState(op.cssCorrect,self.valiResult);
					self._setElState(op.cssElCorrect);
				}
			}
		},
		/**
	     * @name Validator#check
	     * @desc  分别根据校验规则rules来分别进行对应的方法调用
	     * @event
	     * @example 
		 * JS:
		 *	$("#elem").validator("check");	//调用了方法名为check的方法。
		 */
		
		check:function(){
			var self=this,em=self.element,op=self.options,rules=op.rules,result=true;
			if(em.is('form')){
				return self._checkForm();
			}
			if(op.disabled)return;
			var callback=true;
			if(op.beforeValid){
				if(typeof op.beforeValid === 'function'){
					callback = op.beforeValid(em);

				}
				else{
					window[op.beforeValid](em);
					//callback = eval( op.beforeValid + '(em)' );
				}
			}
			//停止校验
			if(!callback){
				return false;
			}
			
			if(self.ajaxReponse){
				op.show=self.ajaxReponse.show;
				op.focus=self.ajaxReponse.focus;
				op.empty=self.ajaxReponse.empty;
				op.error=self.ajaxReponse.error;
				op.correct=self.ajaxReponse.correct;
				rules=op.rules=$.extend({},rules,self.ajaxReponse.rules);
			}
			for ( var validateType in rules){
				var method=self[validateType],param=rules[validateType];
				self.validtype=param;
				
				if(method){
					if(validateType!="required" && em.val()=="")return true;
					result = method.call(em[0],param);
					self.valiResult=result;
					if(self.ajaxReponse && validateType=="ajax"){
						continue;
					}
					self.showMessage();
					if(!result){
						break;
						//return result;
					}
				}
				if(result === 'pending'){
					break;
				}
			}
			callback=true;
			if(op.endValid){
				if(typeof op.endValid === 'function'){
					callback = op.endValid(em,self.valiResult);
				}
				else{
					callback = eval( op.endValid + '(element,self.valiResult)');
				}
			}
			//停止校验
			if(!callback){
				return false;
			}
			return result;
			
		},
		_setTipState:function(showclass,showmsg,cssParshow){
			var self=this,op=self.options,css = op.cssShow + ' ' +
				op.cssFocus + ' ' +
				op.cssEmpty + ' ' +
				op.cssCorrect + ' ' +
				op.cssError + ' ' ;
				self.tipBox=$(self.options.tipBox);
//				self.tipBox=$("#"+self.options.tipBox);
			var tipDiv = self.tipBox.children('.pa_ui_valid_tip');
			if(tipDiv.length<=0){
				tipDiv = $('<div></div>').addClass('pa_ui_valid_tip').appendTo(self.tipBox[0]);
			}
			
			if(typeof showmsg == 'undefined' || showmsg==null || showmsg===''){
				tipDiv.removeClass(css).empty().hide();
			}
			else{
				tipDiv.removeClass(css).addClass(showclass ).html(showmsg).show();
			}
		},
		_setElState:function(c){
			var self=this,op=self.options,
				cs = op.cssElFocus + ' ' 
				+ op.cssElError + ' ' 
				+ op.cssElCorrect + ' ' 
				+ op.cssElEmpty + ' '
				+ op.cssElShow;
			this.element.removeClass(cs).addClass(c);
		},

		checkable: function() {
			return /radio|checkbox/i.test(this.element[0].type);
		},
		/**
	     * @name Validator#destroy
	     * @desc  销毁控件的方法，
	     * @event
	     * @example 
		 * JS:
		 *	$("#em").validator("destroy");
		 */
		destroy: function(){
			$.Widget.prototype.destroy.apply(this);
			this.element.unbind('.validator');
			//提示信息样式及信息
			if(this.options.tipBox){
//				$('#'+this.options.tipBox).empty();
				$(this.options.tipBox).empty();
			}
			
		},
		/**
	     * @name Validator#required
	     * @desc  校验规则，required为必填配置
	     * @event
	     * @example 
		 JS:
		 *	$("#em").validator({
		 *		rules:{required:{error:"输入错误。"}},
		 *		tipBox:"id"
		 *	});
		 */
		
		required:function(param){
			var element = this;
			var instance = $.data(element,'validator');
			var isValid = false;
			switch( element.nodeName.toLowerCase() ) {
				case 'select':
					var options = $("option:selected", element);
					isValid =  options.length > 0 && ( element.type == "select-multiple" || ($.browser.msie && !(options[0]&&options[0].attributes['value']&&options[0].attributes['value'].specified) ? options[0].text : options[0].value).length > 0);
					break;
				case 'input':
					if ( instance.checkable() ){
						isValid = instance.getLength() > 0;
						break;
					}
				default:
					isValid =  $.trim($(element).val()).length > 0;
			}
			return isValid;
		},
		/**
	     * @name Validator#exFunction
	     * @desc  校验规则，exFunction为外部校验的方法
	     * @event
	     * @example 
		 *JS:	
		 *$("#em").validator({
		 *		rules:{exFunction:{name:function(){},error:""}},
		 *		tipBox:"id"
		 *	});
		 */
		
		//函数校验。返回true/false表示校验是否成功;返回字符串表示错误信息，校验失败;如果没有返回值表示处理函数，校验成功
		exFunction:function(param){
			var element = this;
			$.data(element,'validator');
			var $element = $(this);
			var rtn = false;
			if(typeof param.name === 'string'){

				rtn = eval( param.name + '($element.val(),element)' );
			}
			else{
				
				rtn = param.name($element.val(),element);
			}
			if(rtn != undefined){
				if(typeof rtn == "string"){
					isValid = false;
					param.errorMessage = rtn;
				}
				else{
					param.errorMessage=isValid = rtn;
					
				}
			}
			else{
				param.errorMessage=isValid = rtn;
			}
			return isValid;
		},
		
			/*same name in a form*/
		findByName: function() {
			var form = this.form;
			var name = this.element[0].name;
			return $(document.getElementsByName(name)).map(function(index, element) {
				return element.form == form[0] && element.name == name && element  || null;
			});
		},
		
		//获取元素的长�??
		getLength : function(){
			var element = this.element[0];
			switch( element.nodeName.toLowerCase()){
				case 'select':
					return $("option:selected", element).length;
				case 'input':
					if( this.checkable() )
						return this.findByName().filter(':checked').length;
			}

			value = $(element).val();
			var len=0;
			if (this.options.wordWidth > 1){
				for (var i = 0; i < value.length; i++){
					if (value.charCodeAt(i) >= 0x4e00 && value.charCodeAt(i) <= 0x9fa5){ 
						len += this.options.wordWidth;
					}
					else{
						len++;
					}
				}
			}
			else{
				len = value.length;
			}

			return len;
		},		
		getValue:function(dataType,value){
			dataType = dataType || 'string';
			var self=this;
			if(dataType == 'date'){
				if(self.isDate(value)){
					value = self.toDate(value);
				}
			}
			else if(dataType == 'number'){
				if(self.isNumeric(value)){
					value = Number(value).valueOf();
				}
			}
			return value;
		},
		
		isDate : function(s){
				var r = s.match(/^(\d{1,4})(-|\/)(\d{1,2})\2(\d{1,2})$/); 
				if(r==null)return false; 
				var d= new Date(r[1], r[3]-1, r[4]); 
				return (d.getFullYear()==r[1]&&(d.getMonth()+1)==r[3]&&d.getDate()==r[4]);
		},
		
		toDate:function(s){
				if(self.isDate(s)){
					s = s.replace(/\-/ig,'/');
					var ss = s.split('/');
				
					$.each(ss,function(i){
						ss[i] = ss[i].replace(/^0+/g,'');
					});

					if(ss[2] && (parseInt(ss[1])>0 && parseInt(ss[1])<13) && (parseInt(ss[2])>0 && parseInt(ss[2])<32) ){
						return new Date(parseInt(ss[0]),parseInt(ss[1])-1,parseInt(ss[2]));
					}
					else{
						return null;
					}
				}
				else{
					return null;
				}
			},
			
			isNumeric:function(s) {var matches = /^[0-9]*$/; return (matches.test(s));},
			/**
		     * @name Validator#max
		     * @desc 校验规则，max为校验最大值的方法
		     * @event
		     * @example 
			 *JS:
			 *	$("#em").validator({
			 *		rules:{max:{value:9,error:""}},
			 *		tipBox:"id"
			 *	});
			 */
			
			max:function(param){
				var element = this;
				var instance =$.data(element,'validator');
				var dataType = instance.options.dataType;

				var val = $(element).val();
				var max = param.value;

				val = instance.getValue(dataType,val);
				max = instance.getValue(dataType,max);
				return val <= max;
			},
			/**
		     * @name Validator#min
		     * @desc 校验规则，min为校验最小值的方法
		     * @event
		     * @example 
			 *JS:
			 *	$("#em").validator({
			 *		rules:{min:{value:9,error:""}},
			 *		tipBox:"id"
			 *	});
			 */
			
			min:function(param){
				var element = this;
				var instance = $.data(element,'validator');
				var dataType = instance.options.dataType;
				var val = $(element).val();
				var min = param.value;

				val = instance.getValue(dataType,val);
				min = instance.getValue(dataType,min);

				return val >= min;
			},
			/**
		     * @name Validator#minLen
		     * @desc 校验规则，minLen为校验最小长度的方法
		     * @event
		     * @example 
			 *JS:
			 *	$("#em").validator({
			 *		rules:{minLen:{value:9,error:""}},
			 *		tipBox:"id"
			 *	});
			 */
			minLen:function(param){
				var element = this;
				var instance = $.data(element,'validator');
				var minLen = param.value;

				val = instance.getLength();
				minLen = instance.getValue('number',minLen);

				return val >= minLen;
			},
			/**
		     * @name Validator#maxLen
		     * @desc 校验规则，maxLen为校验最大长度的方法
		     * @event
		     * @example 
			 *JS:
			 *	$("#em").validator({
			 *		rules:{maxLen:{value:9,error:""}},
			 *		tipBox:"id"
			 *	});
			 */
			maxLen:function(param){
				var element = this;
				var instance = $.data(element,'validator');
				var maxLen = param.value;

				val = instance.getLength();
				maxLen = instance.getValue('number',maxLen);

				return val <= maxLen;
			},
			/**
		     * @name Validator#regex
		     * @desc 校验规则，regex为正则校验的方法
		     * @event
		     * @example 
			 *JS:
			 *	$("#em").validator({
			 *		rules:{regex:{value:/\d/,error:""}},
			 *		tipBox:"id"
			 *	});
			 */
			regex:function(param){
				var element = this;
				$.data(element,'validator');
				var regexpress = param.value;				
				if(param.trim == undefined || param.trim == '0'){
					return (new RegExp(regexpress)).test($(element).val().replace(/\s/ig,''));//去所有空�??
				}
				else if(param.trim == '1'){
					return (new RegExp(regexpress)).test($.trim($(element).val()));
				}
				else if(param.trim == '2'){
					return (new RegExp(regexpress)).test($(element).val());
				}

			},
			
			
			IdCard:function(){
				var element = this;
				return fnCardValidate(element);
				
			},
			email : function() {
				var element=this;
				var regEmail = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
//				var regEmail =  /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				var value = $(element).val();
				if (value != '') {
					return regEmail.test(value);
				}
				return false;
			},
			mobilphone : function() {
				var element=this;
				var reg_mobile=/^[1]\d{10}$/;
				var value = $(element).val();
				if (value != '') {
					return reg_mobile.test(value);
				}
				return false;
			},
			birthday : function() {
				var element=this;
				var value = $(element).val();
				if (value != '') {
					return fnBirthdayValidate(this);
				}
				return false;
			},
				
			gender : function() {
				var element=this;
				var value = $(element).val();
				if (value != '') {
					return fnGenderValidate(this);
				}
				return false;
			},
			eg_name : function() {
				var element=this;
				var reg_mobile=/^[a-zA-Z][a-zA-Z\s\,]{1,121}$/;
				var value = $(element).val();
				if (value != '') {
					var name=value;
					name=name.replace(/,|，/g,' ');
					name=name.toUpperCase();
					name=$.trim(name);
					$(this).val(name);
					return reg_mobile.test(value);
					//return fnegnamenameValidate(value,this);
				}
			},
			
				
	};
	$.widget("ui.validator", validator);
})(jQuery);

function fnCardValidate(obj){
    var jqObj = $(obj);
    var jqCertificateType = jqObj.parents(".ul").find("select[name=certificateType]");
    var pass = true;
    if(jqCertificateType.val() === "1"){
        pass = IsIdCard(jqObj.val());
        return pass;
    }
    pass =jqObj.val() !== "";
    return pass;
}

/**
 * 判断身份证号的格式是否正确
 * true:表示验证同过
 */
function IsIdCard(num){
    var factorArr = new Array(7,9,10,5,8,4,2,1,6,3,7,9,10,5,8,4,2,1); 
    var error; 
    var varArray = new Array(); 
    var intValue; 
    var lngProduct = 0; 
    var intCheckDigit; 
    var intStrLen = num.length; 
    var idNumber = num;     
    // initialize 
    if ((intStrLen != 15) && (intStrLen != 18)) { 
        //error = "输入身份证号码长度不对！"; 
        //alert(error); 
        //frmAddUser.txtIDCard.focus(); 
        return false; 
    }     
    for(i=0;i<intStrLen;i++) { 
        varArray[i] = idNumber.charAt(i); 
        if ((varArray[i] < '0' || varArray[i] > '9') && (i != 17)) { 
            //error = "错误的身份证号码！."; 
            //alert(error); 
            //frmAddUser.txtIDCard.focus(); 
            return false; 
        } else if (i < 17) { 
            varArray[i] = varArray[i]*factorArr[i]; 
        } 
    } 
    if (intStrLen == 18) { 
        var date8 = idNumber.substring(6,14); 
        if (checkDate(date8) == false) { 
            //error = "身份证中日期信息不正确！."; 
            //alert(error); 
            return false; 
        }         

        for(i=0;i<17;i++) { 
            lngProduct = lngProduct + varArray[i]; 
        }         

        intCheckDigit = 12 - lngProduct % 11; 
        switch (intCheckDigit) { 
            case 10: 
                intCheckDigit = 'X'; 
                break; 
            case 11: 
                intCheckDigit = 0; 
                break; 
            case 12: 
                intCheckDigit = 1; 
                break; 
        }         
    
        if (varArray[17].toUpperCase() != intCheckDigit) { 
            //error = "身份证效验位错误!...正确为： " + intCheckDigit + "."; 
            //alert(error); 
            return false; 
        } 
    }else{       
        //check date 
        var date6 = idNumber.substring(6,12); 
        if (checkDate(date6) == false) { 
            //alert("身份证日期信息有误！."); 
            return false; 
        } 
    } 
    return true; 
}

function checkDate(ss){
	return true;
}
/*生日验证 
选择日期 与身份证匹配出生日期匹配验证  
*/
function fnBirthdayValidate(obj){
var jqObj = $(obj);
var jqCertificateType = jqObj.parents(".ul").find("select[name=certificateType]");
var jqCertificateNo = jqObj.parents(".ul").find("input[name=certificateNo]");
var pass = true;

if(jqCertificateType.val() === "1"){
var IDCardVal = jqCertificateNo.val();
if(IDCardVal.length == 18){
    var y = IDCardVal.substr(6,4);
    var m = IDCardVal.substr(10,2);
    var d = IDCardVal.substr(12,2);
    var dateStr = y+"-"+m+"-"+d;
    if(dateStr === fnDateToStr(jqObj.val())){
        return true;
    }
    return false;
}else if(IDCardVal.length == 15){
    var y = IDCardVal.substr(6,2);
    var m = IDCardVal.substr(8,2);
    var d = IDCardVal.substr(10,2);
    //18, 19, 20 
    var dateStr18 = "18"+y+"-"+m+"-"+d;
    var dateStr19 = "19"+y+"-"+m+"-"+d;
    var dateStr20 = "20"+y+"-"+m+"-"+d;
    if(dateStr18 === fnDateToStr(jqObj.val()) || dateStr19 === fnDateToStr(jqObj.val()) || dateStr20 === fnDateToStr(jqObj.val())){
        return true;
    }
    return false;
}else{
    return false;
}

}
if(jqObj.val() == ""){
pass = false;
return pass;
}
var dateStr = jqObj.val();
if(dateStr !== fnDateToStr(dateStr)){
return false;
}

return pass;
}

/*
* 性别验证
* 15位身份证： 身份证最后一位，单数为男 ，偶数为女 
* 18位身份证 ：倒数第二位,单数为男 ，偶数为女 
*/
function fnGenderValidate(obj){
var jqObj = $(obj);
var jqCertificateType = jqObj.parents(".ul").find("select[name=certificateType]");
var jqCertificateNo = jqObj.parents(".ul").find("input[name=certificateNo]");

var jqSex = jqObj.parents(".ul").find("input[name=sex]:checked").val();
var gendeCode = ["F","M"];

if(jqCertificateType.val() === "1"){
 var IDCardVal = jqCertificateNo.val();
 var g = "";
 if(IDCardVal.length == 18){
     g = IDCardVal.substr(16,1);
     
 }else if(IDCardVal.length == 15){
     g = IDCardVal.substr(14,1);
 }
 

// alert(jqObj.val());
 try{
     return gendeCode[parseInt(g) % 2] ==  jqSex;
 }catch(e){
     return false;
 }
}
return true;
}

function checkDate(data){
	return true;
}

function fnDateToStr(dateStr){
    var ds = dateStr.split("-");
    if(ds.length != 3){
        return false;
    }
    try{
        /**
         *      parseInt 函数在IE下存在bug 因此下面需要特殊处理规避这个问题
         *      parseInt("09")  0   Number
         *      parseInt("08")  0   Number
         *      parseInt("07")  7   Number
         *      parseInt("06")  6   Number
         *      parseInt("9")   9   Number
         *      parseInt("7")   7   Number
         *      parseInt("10")  10  Number
         */
        
        var m = ds[1];
        if(m.indexOf("0") === 0){
            m = m.substring(1);
        }
        var n = ds[2];
        if(n.indexOf("0") === 0){
        	n = n.substring(1);
        }
        var d = new Date(parseInt(ds[0]), parseInt(m)-1, parseInt(n),0,0,0);
        return d.format("yyyy-MM-dd");
    }catch(e){
        return false;
    }
}

Date.prototype.format = function(fmt) { // author: meizz
	var o = {
		"M+" : this.getMonth() + 1, // 月份
		"d+" : this.getDate(), // 日
		"h+" : this.getHours(), // 小时
		"m+" : this.getMinutes(), // 分
		"s+" : this.getSeconds(), // 秒
		"q+" : Math.floor((this.getMonth() + 3) / 3), // 季度
		"S" : this.getMilliseconds()
	// 毫秒
	};
	if (/(y+)/.test(fmt))
		fmt = fmt.replace(RegExp.$1, (this.getFullYear() + "")
				.substr(4 - RegExp.$1.length));
	for ( var k in o)
		if (new RegExp("(" + k + ")").test(fmt))
			fmt = fmt.replace(RegExp.$1, (RegExp.$1.length == 1) ? (o[k])
					: (("00" + o[k]).substr(("" + o[k]).length)));
	return fmt;
}

function fnGetFullAge(yearPassed, dayVal){
	var date = new Date();
	var year = parseInt(date.getFullYear());
	date.setFullYear(year-yearPassed);
	date = new Date(date.getTime() + dayVal);
	var d = date.format("yyyy-MM-dd");
	return d;
}
function fnGetFullAgeDate(datePassed, dayVal){
	var date = new Date();
	var dates=parseInt(date.getDate());
	date.setDate(dates-datePassed);
	date = new Date(date.getTime() + dayVal);
	var d = date.format("yyyy-MM-dd");
	return d;
}

/*function fnAttachDatePicker(jcontainer, filter, bdate, edate, message){
	if((typeof message) === "undefined" ){
		message = "年龄应在18到65周岁之间";
	}
	var birth = jcontainer.find(filter);
	var html = '<input name="birthDate" test="' + Math.random() + '" class="Wdate i_text1" title="' + message + '" msg="出生日期不正确" controlBy="fnBirthdayValidate(this)" value="" type="text" onBlur="fnChangeSpareCoverage(this);"/>';
	
	var newBirth = $(html);
	newBirth.attr("required", "required");
	newBirth.click(function(){
		WdatePicker({minDate: bdate, maxDate: edate});
	});
	birth.replaceWith(newBirth);
}*/
