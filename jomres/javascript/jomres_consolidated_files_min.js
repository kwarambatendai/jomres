var jaaulde = window.jaaulde || {};
jaaulde.utils = jaaulde.utils || {};
jaaulde.utils.cookies = function () {
	var e, t, n, r, i = {expiresAt: null, path: "/", domain: null, secure: false};
	e = function (e) {
		var t, n;
		if (typeof e !== "object" || e === null) {
			t = i
		} else {
			t = {expiresAt: i.expiresAt, path: i.path, domain: i.domain, secure: i.secure};
			if (typeof e.expiresAt === "object" && e.expiresAt instanceof Date) {
				t.expiresAt = e.expiresAt
			} else if (typeof e.hoursToLive === "number" && e.hoursToLive !== 0) {
				n = new Date;
				n.setTime(n.getTime() + e.hoursToLive * 60 * 60 * 1e3);
				t.expiresAt = n
			}
			if (typeof e.path === "string" && e.path !== "") {
				t.path = e.path
			}
			if (typeof e.domain === "string" && e.domain !== "") {
				t.domain = e.domain
			}
			if (e.secure === true) {
				t.secure = e.secure
			}
		}
		return t
	};
	t = function (t) {
		t = e(t);
		return(typeof t.expiresAt === "object" && t.expiresAt instanceof Date ? "; expires=" + t.expiresAt.toGMTString() : "") + "; path=" + t.path + (typeof t.domain === "string" ? "; domain=" + t.domain : "") + (t.secure === true ? "; secure" : "")
	};
	n = function () {
		var e = {}, t, n, r, i, s = document.cookie.split(";"), o;
		for (t = 0; t < s.length; t = t + 1) {
			n = s[t].split("=");
			r = n[0].replace(/^\s*/, "").replace(/\s*$/, "");
			try {
				i = decodeURIComponent(n[1])
			} catch (u) {
				i = n[1]
			}
			if (typeof JSON === "object" && JSON !== null && typeof JSON.parse === "function") {
				try {
					o = i;
					i = JSON.parse(i)
				} catch (a) {
					i = o
				}
			}
			e[r] = i
		}
		return e
	};
	r = function () {
	};
	r.prototype.get = function (e) {
		var t, r, i = n();
		if (typeof e === "string") {
			t = typeof i[e] !== "undefined" ? i[e] : null
		} else if (typeof e === "object" && e !== null) {
			t = {};
			for (r in e) {
				if (typeof i[e[r]] !== "undefined") {
					t[e[r]] = i[e[r]]
				} else {
					t[e[r]] = null
				}
			}
		} else {
			t = i
		}
		return t
	};
	r.prototype.filter = function (e) {
		var t, r = {}, i = n();
		if (typeof e === "string") {
			e = new RegExp(e)
		}
		for (t in i) {
			if (t.match(e)) {
				r[t] = i[t]
			}
		}
		return r
	};
	r.prototype.set = function (e, n, r) {
		if (typeof r !== "object" || r === null) {
			r = {}
		}
		if (typeof n === "undefined" || n === null) {
			n = "";
			r.hoursToLive = -8760
		} else if (typeof n !== "string") {
			if (typeof JSON === "object" && JSON !== null && typeof JSON.stringify === "function") {
				n = JSON.stringify(n)
			} else {
				throw new Error("cookies.set() received non-string value and could not serialize.")
			}
		}
		var i = t(r);
		document.cookie = e + "=" + encodeURIComponent(n) + i
	};
	r.prototype.del = function (e, t) {
		var n = {}, r;
		if (typeof t !== "object" || t === null) {
			t = {}
		}
		if (typeof e === "boolean" && e === true) {
			n = this.get()
		} else if (typeof e === "string") {
			n[e] = true
		}
		for (r in n) {
			if (typeof r === "string" && r !== "") {
				this.set(r, null, t)
			}
		}
	};
	r.prototype.test = function () {
		var e = false, t = "cT", n = "data";
		this.set(t, n);
		if (this.get(t) === n) {
			this.del(t);
			e = true
		}
		return e
	};
	r.prototype.setOptions = function (t) {
		if (typeof t !== "object") {
			t = null
		}
		i = e(t)
	};
	return new r
}();
(function () {
	if (window.jQuery) {
		(function (e) {
			e.cookies = jaaulde.utils.cookies;
			var t = {cookify: function (t) {
				return this.each(function () {
					var n, r = ["name", "id"], i, s = e(this), o;
					for (n in r) {
						if (!isNaN(n)) {
							i = s.attr(r[n]);
							if (typeof i === "string" && i !== "") {
								if (s.is(":checkbox, :radio")) {
									if (s.attr("checked")) {
										o = s.val()
									}
								} else if (s.is(":input")) {
									o = s.val()
								} else {
									o = s.html()
								}
								if (typeof o !== "string" || o === "") {
									o = null
								}
								e.cookies.set(i, o, t);
								break
							}
						}
					}
				})
			}, cookieFill: function () {
				return this.each(function () {
					var t, n, r = ["name", "id"], i, s = e(this), o;
					n = function () {
						t = r.pop();
						return!!t
					};
					while (n()) {
						i = s.attr(t);
						if (typeof i === "string" && i !== "") {
							o = e.cookies.get(i);
							if (o !== null) {
								if (s.is(":checkbox, :radio")) {
									if (s.val() === o) {
										s.attr("checked", "checked")
									} else {
										s.removeAttr("checked")
									}
								} else if (s.is(":input")) {
									s.val(o)
								} else {
									s.html(o)
								}
							}
							break
						}
					}
				})
			}, cookieBind: function (t) {
				return this.each(function () {
					var n = e(this);
					n.cookieFill().change(function () {
						n.cookify(t)
					})
				})
			}};
			e.each(t, function (t) {
				e.fn[t] = this
			})
		})(window.jQuery)
	}
})();
jQuery.cookie = function (e, t, n) {
	if (arguments.length > 1 && (t === null || typeof t !== "object")) {
		n = jQuery.extend({}, n);
		if (t === null) {
			n.expires = -1
		}
		if (typeof n.expires === "number") {
			var r = n.expires, i = n.expires = new Date;
			i.setDate(i.getDate() + r)
		}
		return document.cookie = [encodeURIComponent(e), "=", n.raw ? String(t) : encodeURIComponent(String(t)), n.expires ? "; expires=" + n.expires.toUTCString() : "", n.path ? "; path=" + n.path : "", n.domain ? "; domain=" + n.domain : "", n.secure ? "; secure" : ""].join("")
	}
	n = t || {};
	var s, o = n.raw ? function (e) {
		return e
	} : decodeURIComponent;
	return(s = (new RegExp("(?:^|; )" + encodeURIComponent(e) + "=([^;]*)")).exec(document.cookie)) ? o(s[1]) : null
};
jomresJquery.jheartbeat = {options: {url: "heartbeat_default.asp", delay: 1e4, div_id: "test_div"}, beatfunction: function () {
}, timeoutobj: {id: -1}, set: function (e, t) {
	if (this.timeoutobj.id > -1) {
		clearTimeout(this.timeoutobj)
	}
	if (e) {
		jomresJquery.extend(this.options, e)
	}
	if (t) {
		this.beatfunction = t
	}
	jomresJquery("body").append('<div id="' + this.options.div_id + '" style="display: none;"></div>');
	this.timeoutobj.id = setTimeout("jomresJquery.jheartbeat.beat();", this.options.delay)
}, beat: function () {
	jomresJquery.ajax({url: this.options.url, dataType: "html", type: "GET", error: function (e) {
		jomresJquery("#" + jomresJquery.jheartbeat.options.div_id).append("")
	}, success: function (e) {
		jomresJquery("#" + jomresJquery.jheartbeat.options.div_id).html(e)
	}});
	this.timeoutobj.id = setTimeout("jomresJquery.jheartbeat.beat();", this.options.delay);
	this.beatfunction()
}};
(function (e) {
	e.fn.hoverIntent = function (t, n) {
		var r = {sensitivity: 7, interval: 100, timeout: 0};
		r = e.extend(r, n ? {over: t, out: n} : t);
		var i, s, o, u;
		var a = function (e) {
			i = e.pageX;
			s = e.pageY
		};
		var f = function (t, n) {
			n.hoverIntent_t = clearTimeout(n.hoverIntent_t);
			if (Math.abs(o - i) + Math.abs(u - s) < r.sensitivity) {
				e(n).unbind("mousemove", a);
				n.hoverIntent_s = 1;
				return r.over.apply(n, [t])
			} else {
				o = i;
				u = s;
				n.hoverIntent_t = setTimeout(function () {
					f(t, n)
				}, r.interval)
			}
		};
		var l = function (e, t) {
			t.hoverIntent_t = clearTimeout(t.hoverIntent_t);
			t.hoverIntent_s = 0;
			return r.out.apply(t, [e])
		};
		var c = function (t) {
			var n = jQuery.extend({}, t);
			var i = this;
			if (i.hoverIntent_t) {
				i.hoverIntent_t = clearTimeout(i.hoverIntent_t)
			}
			if (t.type == "mouseenter") {
				o = n.pageX;
				u = n.pageY;
				e(i).bind("mousemove", a);
				if (i.hoverIntent_s != 1) {
					i.hoverIntent_t = setTimeout(function () {
						f(n, i)
					}, r.interval)
				}
			} else {
				e(i).unbind("mousemove", a);
				if (i.hoverIntent_s == 1) {
					i.hoverIntent_t = setTimeout(function () {
						l(n, i)
					}, r.timeout)
				}
			}
		};
		return this.bind("mouseenter", c).bind("mouseleave", c)
	}
})(jQuery);
if (window.jQuery)(function (e) {
	if (!e.support.opacity && !e.support.style)try {
		document.execCommand("BackgroundImageCache", false, true)
	} catch (t) {
	}
	e.fn.rating = function (t) {
		if (this.length == 0)return this;
		if (typeof arguments[0] == "string") {
			if (this.length > 1) {
				var n = arguments;
				return this.each(function () {
					e.fn.rating.apply(e(this), n)
				})
			}
			e.fn.rating[arguments[0]].apply(this, e.makeArray(arguments).slice(1) || []);
			return this
		}
		var t = e.extend({}, e.fn.rating.options, t || {});
		e.fn.rating.calls++;
		this.not(".star-rating-applied").addClass("star-rating-applied").each(function () {
			var n, r = e(this);
			var i = (this.name || "unnamed-rating").replace(/\[|\]/g, "_").replace(/^\_+|\_+$/g, "");
			var s = e(this.form || document.body);
			var o = s.data("rating");
			if (!o || o.call != e.fn.rating.calls)o = {count: 0, call: e.fn.rating.calls};
			var u = o[i] || s.data("rating" + i);
			if (u)n = u.data("rating");
			if (u && n)n.count++; else {
				n = e.extend({}, t || {}, (e.metadata ? r.metadata() : e.meta ? r.data() : null) || {}, {count: 0, stars: [], inputs: []});
				n.serial = o.count++;
				u = e('<span class="star-rating-control"/>');
				r.before(u);
				u.addClass("rating-to-be-drawn");
				if (r.attr("disabled") || r.hasClass("disabled"))n.readOnly = true;
				if (r.hasClass("required"))n.required = true;
				u.append(n.cancel = e('<div class="rating-cancel"><a title="' + n.cancel + '">' + n.cancelValue + "</a></div>").on("mouseover",function () {
					e(this).rating("drain");
					e(this).addClass("star-rating-hover")
				}).on("mouseout",function () {
						e(this).rating("draw");
						e(this).removeClass("star-rating-hover")
					}).on("click",function () {
						e(this).rating("select")
					}).data("rating", n))
			}
			var a = e('<div role="text" aria-label="' + this.title + '" class="star-rating rater-' + n.serial + '"><a title="' + (this.title || this.value) + '">' + this.value + "</a></div>");
			u.append(a);
			if (this.id)a.attr("id", this.id);
			if (this.className)a.addClass(this.className);
			if (n.half)n.split = 2;
			if (typeof n.split == "number" && n.split > 0) {
				var f = (e.fn.width ? a.width() : 0) || n.starWidth;
				var l = n.count % n.split, c = Math.floor(f / n.split);
				a.width(c).find("a").css({"margin-left": "-" + l * c + "px"})
			}
			if (n.readOnly)a.addClass("star-rating-readonly"); else a.addClass("star-rating-live").on("mouseover",function () {
				e(this).rating("fill");
				e(this).rating("focus")
			}).on("mouseout",function () {
					e(this).rating("draw");
					e(this).rating("blur")
				}).on("click", function () {
					e(this).rating("select")
				});
			if (this.checked)n.current = a;
			if (this.nodeName == "A") {
				if (e(this).hasClass("selected"))n.current = a
			}
			r.hide();
			r.on("change.rating", function (t) {
				if (t.selfTriggered)return false;
				e(this).rating("select")
			});
			a.data("rating.input", r.data("rating.star", a));
			n.stars[n.stars.length] = a[0];
			n.inputs[n.inputs.length] = r[0];
			n.rater = o[i] = u;
			n.context = s;
			r.data("rating", n);
			u.data("rating", n);
			a.data("rating", n);
			s.data("rating", o);
			s.data("rating" + i, u)
		});
		e(".rating-to-be-drawn").rating("draw").removeClass("rating-to-be-drawn");
		return this
	};
	e.extend(e.fn.rating, {calls: 0, focus: function () {
		var t = this.data("rating");
		if (!t)return this;
		if (!t.focus)return this;
		var n = e(this).data("rating.input") || e(this.tagName == "INPUT" ? this : null);
		if (t.focus)t.focus.apply(n[0], [n.val(), e("a", n.data("rating.star"))[0]])
	}, blur: function () {
		var t = this.data("rating");
		if (!t)return this;
		if (!t.blur)return this;
		var n = e(this).data("rating.input") || e(this.tagName == "INPUT" ? this : null);
		if (t.blur)t.blur.apply(n[0], [n.val(), e("a", n.data("rating.star"))[0]])
	}, fill: function () {
		var e = this.data("rating");
		if (!e)return this;
		if (e.readOnly)return;
		this.rating("drain");
		this.prevAll().addBack().filter(".rater-" + e.serial).addClass("star-rating-hover")
	}, drain: function () {
		var e = this.data("rating");
		if (!e)return this;
		if (e.readOnly)return;
		e.rater.children().filter(".rater-" + e.serial).removeClass("star-rating-on").removeClass("star-rating-hover")
	}, draw: function () {
		var t = this.data("rating");
		if (!t)return this;
		this.rating("drain");
		var n = e(t.current);
		var r = n.length ? n.prevAll().addBack().filter(".rater-" + t.serial) : null;
		if (r)r.addClass("star-rating-on");
		t.cancel[t.readOnly || t.required ? "hide" : "show"]();
		this.siblings()[t.readOnly ? "addClass" : "removeClass"]("star-rating-readonly")
	}, select: function (t, n) {
		var r = this.data("rating");
		if (!r)return this;
		if (r.readOnly)return;
		r.current = null;
		if (typeof t != "undefined" || this.length > 1) {
			if (typeof t == "number")return e(r.stars[t]).rating("select", undefined, n);
			if (typeof t == "string") {
				e.each(r.stars, function () {
					if (e(this).data("rating.input").val() == t)e(this).rating("select", undefined, n)
				});
				return this
			}
		} else {
			r.current = this[0].tagName == "INPUT" ? this.data("rating.star") : this.is(".rater-" + r.serial) ? this : null
		}
		this.data("rating", r);
		this.rating("draw");
		var i = e(r.current ? r.current.data("rating.input") : null);
		var s = e(r.inputs).filter(":checked");
		var o = e(r.inputs).not(i);
		o.prop("checked", false);
		i.prop("checked", true);
		e(i.length ? i : s).trigger({type: "change", selfTriggered: true});
		if ((n || n == undefined) && r.callback)r.callback.apply(i[0], [i.val(), e("a", r.current)[0]]);
		return this
	}, readOnly: function (t, n) {
		var r = this.data("rating");
		if (!r)return this;
		r.readOnly = t || t == undefined ? true : false;
		if (n)e(r.inputs).attr("disabled", "disabled"); else e(r.inputs).removeAttr("disabled");
		this.data("rating", r);
		this.rating("draw")
	}, disable: function () {
		this.rating("readOnly", true, true)
	}, enable: function () {
		this.rating("readOnly", false, false)
	}});
	e.fn.rating.options = {cancel: "Cancel Rating", cancelValue: "", split: 0, starWidth: 16};
	e(function () {
		e("input[type=radio].star").rating()
	})
})(jQuery);
(function (e) {
	e.extend(e.fn, {validate: function (t) {
		if (!this.length) {
			if (t && t.debug && window.console) {
				console.warn("Nothing selected, can't validate, returning nothing.")
			}
			return
		}
		var n = e.data(this[0], "validator");
		if (n) {
			return n
		}
		this.attr("novalidate", "novalidate");
		n = new e.validator(t, this[0]);
		e.data(this[0], "validator", n);
		if (n.settings.onsubmit) {
			this.validateDelegate(":submit", "click", function (t) {
				if (n.settings.submitHandler) {
					n.submitButton = t.target
				}
				if (e(t.target).hasClass("cancel")) {
					n.cancelSubmit = true
				}
				if (e(t.target).attr("formnovalidate") !== undefined) {
					n.cancelSubmit = true
				}
			});
			this.submit(function (t) {
				function r() {
					var r;
					if (n.settings.submitHandler) {
						if (n.submitButton) {
							r = e("<input type='hidden'/>").attr("name", n.submitButton.name).val(n.submitButton.value).appendTo(n.currentForm)
						}
						n.settings.submitHandler.call(n, n.currentForm, t);
						if (n.submitButton) {
							r.remove()
						}
						return false
					}
					return true
				}

				if (n.settings.debug) {
					t.preventDefault()
				}
				if (n.cancelSubmit) {
					n.cancelSubmit = false;
					return r()
				}
				if (n.form()) {
					if (n.pendingRequest) {
						n.formSubmitted = true;
						return false
					}
					return r()
				} else {
					n.focusInvalid();
					return false
				}
			})
		}
		return n
	}, valid: function () {
		if (e(this[0]).is("form")) {
			return this.validate().form()
		} else {
			var t = true;
			var n = e(this[0].form).validate();
			this.each(function () {
				t &= n.element(this)
			});
			return t
		}
	}, removeAttrs: function (t) {
		var n = {}, r = this;
		e.each(t.split(/\s/), function (e, t) {
			n[t] = r.attr(t);
			r.removeAttr(t)
		});
		return n
	}, rules: function (t, n) {
		var r = this[0];
		if (t) {
			var i = e.data(r.form, "validator").settings;
			var s = i.rules;
			var o = e.validator.staticRules(r);
			switch (t) {
				case"add":
					e.extend(o, e.validator.normalizeRule(n));
					s[r.name] = o;
					if (n.messages) {
						i.messages[r.name] = e.extend(i.messages[r.name], n.messages)
					}
					break;
				case"remove":
					if (!n) {
						delete s[r.name];
						return o
					}
					var u = {};
					e.each(n.split(/\s/), function (e, t) {
						u[t] = o[t];
						delete o[t]
					});
					return u
			}
		}
		var a = e.validator.normalizeRules(e.extend({}, e.validator.classRules(r), e.validator.attributeRules(r), e.validator.dataRules(r), e.validator.staticRules(r)), r);
		if (a.required) {
			var f = a.required;
			delete a.required;
			a = e.extend({required: f}, a)
		}
		return a
	}});
	e.extend(e.expr[":"], {blank: function (t) {
		return!e.trim("" + t.value)
	}, filled: function (t) {
		return!!e.trim("" + t.value)
	}, unchecked: function (e) {
		return!e.checked
	}});
	e.validator = function (t, n) {
		this.settings = e.extend(true, {}, e.validator.defaults, t);
		this.currentForm = n;
		this.init()
	};
	e.validator.format = function (t, n) {
		if (arguments.length === 1) {
			return function () {
				var n = e.makeArray(arguments);
				n.unshift(t);
				return e.validator.format.apply(this, n)
			}
		}
		if (arguments.length > 2 && n.constructor !== Array) {
			n = e.makeArray(arguments).slice(1)
		}
		if (n.constructor !== Array) {
			n = [n]
		}
		e.each(n, function (e, n) {
			t = t.replace(new RegExp("\\{" + e + "\\}", "g"), function () {
				return n
			})
		});
		return t
	};
	e.extend(e.validator, {defaults: {messages: {}, groups: {}, rules: {}, errorClass: "error", validClass: "valid", errorElement: "label", focusInvalid: true, errorContainer: e([]), errorLabelContainer: e([]), onsubmit: true, ignore: ":hidden", ignoreTitle: false, onfocusin: function (e, t) {
		this.lastActive = e;
		if (this.settings.focusCleanup && !this.blockFocusCleanup) {
			if (this.settings.unhighlight) {
				this.settings.unhighlight.call(this, e, this.settings.errorClass, this.settings.validClass)
			}
			this.addWrapper(this.errorsFor(e)).hide()
		}
	}, onfocusout: function (e, t) {
		if (!this.checkable(e) && (e.name in this.submitted || !this.optional(e))) {
			this.element(e)
		}
	}, onkeyup: function (e, t) {
		if (t.which === 9 && this.elementValue(e) === "") {
			return
		} else if (e.name in this.submitted || e === this.lastElement) {
			this.element(e)
		}
	}, onclick: function (e, t) {
		if (e.name in this.submitted) {
			this.element(e)
		} else if (e.parentNode.name in this.submitted) {
			this.element(e.parentNode)
		}
	}, highlight: function (t, n, r) {
		if (t.type === "radio") {
			this.findByName(t.name).addClass(n).removeClass(r)
		} else {
			e(t).addClass(n).removeClass(r)
		}
	}, unhighlight: function (t, n, r) {
		if (t.type === "radio") {
			this.findByName(t.name).removeClass(n).addClass(r)
		} else {
			e(t).removeClass(n).addClass(r)
		}
	}}, setDefaults: function (t) {
		e.extend(e.validator.defaults, t)
	}, messages: {required: "This field is required.", remote: "Please fix this field.", email: "Please enter a valid email address.", url: "Please enter a valid URL.", date: "Please enter a valid date.", dateISO: "Please enter a valid date (ISO).", number: "Please enter a valid number.", digits: "Please enter only digits.", creditcard: "Please enter a valid credit card number.", equalTo: "Please enter the same value again.", maxlength: e.validator.format("Please enter no more than {0} characters."), minlength: e.validator.format("Please enter at least {0} characters."), rangelength: e.validator.format("Please enter a value between {0} and {1} characters long."), range: e.validator.format("Please enter a value between {0} and {1}."), max: e.validator.format("Please enter a value less than or equal to {0}."), min: e.validator.format("Please enter a value greater than or equal to {0}.")}, autoCreateRanges: false, prototype: {init: function () {
		function r(t) {
			var n = e.data(this[0].form, "validator"), r = "on" + t.type.replace(/^validate/, "");
			if (n.settings[r]) {
				n.settings[r].call(n, this[0], t)
			}
		}

		this.labelContainer = e(this.settings.errorLabelContainer);
		this.errorContext = this.labelContainer.length && this.labelContainer || e(this.currentForm);
		this.containers = e(this.settings.errorContainer).add(this.settings.errorLabelContainer);
		this.submitted = {};
		this.valueCache = {};
		this.pendingRequest = 0;
		this.pending = {};
		this.invalid = {};
		this.reset();
		var t = this.groups = {};
		e.each(this.settings.groups, function (n, r) {
			if (typeof r === "string") {
				r = r.split(/\s/)
			}
			e.each(r, function (e, r) {
				t[r] = n
			})
		});
		var n = this.settings.rules;
		e.each(n, function (t, r) {
			n[t] = e.validator.normalizeRule(r)
		});
		e(this.currentForm).validateDelegate(":text, [type='password'], [type='file'], select, textarea, " + "[type='number'], [type='search'] ,[type='tel'], [type='url'], " + "[type='email'], [type='datetime'], [type='date'], [type='month'], " + "[type='week'], [type='time'], [type='datetime-local'], " + "[type='range'], [type='color'] ", "focusin focusout keyup", r).validateDelegate("[type='radio'], [type='checkbox'], select, option", "click", r);
		if (this.settings.invalidHandler) {
			e(this.currentForm).bind("invalid-form.validate", this.settings.invalidHandler)
		}
	}, form: function () {
		this.checkForm();
		e.extend(this.submitted, this.errorMap);
		this.invalid = e.extend({}, this.errorMap);
		if (!this.valid()) {
			e(this.currentForm).triggerHandler("invalid-form", [this])
		}
		this.showErrors();
		return this.valid()
	}, checkForm: function () {
		this.prepareForm();
		for (var e = 0, t = this.currentElements = this.elements(); t[e]; e++) {
			this.check(t[e])
		}
		return this.valid()
	}, element: function (t) {
		t = this.validationTargetFor(this.clean(t));
		this.lastElement = t;
		this.prepareElement(t);
		this.currentElements = e(t);
		var n = this.check(t) !== false;
		if (n) {
			delete this.invalid[t.name]
		} else {
			this.invalid[t.name] = true
		}
		if (!this.numberOfInvalids()) {
			this.toHide = this.toHide.add(this.containers)
		}
		this.showErrors();
		return n
	}, showErrors: function (t) {
		if (t) {
			e.extend(this.errorMap, t);
			this.errorList = [];
			for (var n in t) {
				this.errorList.push({message: t[n], element: this.findByName(n)[0]})
			}
			this.successList = e.grep(this.successList, function (e) {
				return!(e.name in t)
			})
		}
		if (this.settings.showErrors) {
			this.settings.showErrors.call(this, this.errorMap, this.errorList)
		} else {
			this.defaultShowErrors()
		}
	}, resetForm: function () {
		if (e.fn.resetForm) {
			e(this.currentForm).resetForm()
		}
		this.submitted = {};
		this.lastElement = null;
		this.prepareForm();
		this.hideErrors();
		this.elements().removeClass(this.settings.errorClass).removeData("previousValue")
	}, numberOfInvalids: function () {
		return this.objectLength(this.invalid)
	}, objectLength: function (e) {
		var t = 0;
		for (var n in e) {
			t++
		}
		return t
	}, hideErrors: function () {
		this.addWrapper(this.toHide).hide()
	}, valid: function () {
		return this.size() === 0
	}, size: function () {
		return this.errorList.length
	}, focusInvalid: function () {
		if (this.settings.focusInvalid) {
			try {
				e(this.findLastActive() || this.errorList.length && this.errorList[0].element || []).filter(":visible").focus().trigger("focusin")
			} catch (t) {
			}
		}
	}, findLastActive: function () {
		var t = this.lastActive;
		return t && e.grep(this.errorList,function (e) {
			return e.element.name === t.name
		}).length === 1 && t
	}, elements: function () {
		var t = this, n = {};
		return e(this.currentForm).find("input, select, textarea").not(":submit, :reset, :image, [disabled]").not(this.settings.ignore).filter(function () {
			if (!this.name && t.settings.debug && window.console) {
				console.error("%o has no name assigned", this)
			}
			if (this.name in n || !t.objectLength(e(this).rules())) {
				return false
			}
			n[this.name] = true;
			return true
		})
	}, clean: function (t) {
		return e(t)[0]
	}, errors: function () {
		var t = this.settings.errorClass.replace(" ", ".");
		return e(this.settings.errorElement + "." + t, this.errorContext)
	}, reset: function () {
		this.successList = [];
		this.errorList = [];
		this.errorMap = {};
		this.toShow = e([]);
		this.toHide = e([]);
		this.currentElements = e([])
	}, prepareForm: function () {
		this.reset();
		this.toHide = this.errors().add(this.containers)
	}, prepareElement: function (e) {
		this.reset();
		this.toHide = this.errorsFor(e)
	}, elementValue: function (t) {
		var n = e(t).attr("type"), r = e(t).val();
		if (n === "radio" || n === "checkbox") {
			return e("input[name='" + e(t).attr("name") + "']:checked").val()
		}
		if (typeof r === "string") {
			return r.replace(/\r/g, "")
		}
		return r
	}, check: function (t) {
		t = this.validationTargetFor(this.clean(t));
		var n = e(t).rules();
		var r = false;
		var i = this.elementValue(t);
		var s;
		for (var o in n) {
			var u = {method: o, parameters: n[o]};
			try {
				s = e.validator.methods[o].call(this, i, t, u.parameters);
				if (s === "dependency-mismatch") {
					r = true;
					continue
				}
				r = false;
				if (s === "pending") {
					this.toHide = this.toHide.not(this.errorsFor(t));
					return
				}
				if (!s) {
					this.formatAndAdd(t, u);
					return false
				}
			} catch (a) {
				if (this.settings.debug && window.console) {
					console.log("Exception occured when checking element " + t.id + ", check the '" + u.method + "' method.", a)
				}
				throw a
			}
		}
		if (r) {
			return
		}
		if (this.objectLength(n)) {
			this.successList.push(t)
		}
		return true
	}, customDataMessage: function (t, n) {
		return e(t).data("msg-" + n.toLowerCase()) || t.attributes && e(t).attr("data-msg-" + n.toLowerCase())
	}, customMessage: function (e, t) {
		var n = this.settings.messages[e];
		return n && (n.constructor === String ? n : n[t])
	}, findDefined: function () {
		for (var e = 0; e < arguments.length; e++) {
			if (arguments[e] !== undefined) {
				return arguments[e]
			}
		}
		return undefined
	}, defaultMessage: function (t, n) {
		return this.findDefined(this.customMessage(t.name, n), this.customDataMessage(t, n), !this.settings.ignoreTitle && t.title || undefined, e.validator.messages[n], "<strong>Warning: No message defined for " + t.name + "</strong>")
	}, formatAndAdd: function (t, n) {
		var r = this.defaultMessage(t, n.method), i = /\$?\{(\d+)\}/g;
		if (typeof r === "function") {
			r = r.call(this, n.parameters, t)
		} else if (i.test(r)) {
			r = e.validator.format(r.replace(i, "{$1}"), n.parameters)
		}
		this.errorList.push({message: r, element: t});
		this.errorMap[t.name] = r;
		this.submitted[t.name] = r
	}, addWrapper: function (e) {
		if (this.settings.wrapper) {
			e = e.add(e.parent(this.settings.wrapper))
		}
		return e
	}, defaultShowErrors: function () {
		var e, t;
		for (e = 0; this.errorList[e]; e++) {
			var n = this.errorList[e];
			if (this.settings.highlight) {
				this.settings.highlight.call(this, n.element, this.settings.errorClass, this.settings.validClass)
			}
			this.showLabel(n.element, n.message)
		}
		if (this.errorList.length) {
			this.toShow = this.toShow.add(this.containers)
		}
		if (this.settings.success) {
			for (e = 0; this.successList[e]; e++) {
				this.showLabel(this.successList[e])
			}
		}
		if (this.settings.unhighlight) {
			for (e = 0, t = this.validElements(); t[e]; e++) {
				this.settings.unhighlight.call(this, t[e], this.settings.errorClass, this.settings.validClass)
			}
		}
		this.toHide = this.toHide.not(this.toShow);
		this.hideErrors();
		this.addWrapper(this.toShow).show()
	}, validElements: function () {
		return this.currentElements.not(this.invalidElements())
	}, invalidElements: function () {
		return e(this.errorList).map(function () {
			return this.element
		})
	}, showLabel: function (t, n) {
		var r = this.errorsFor(t);
		if (r.length) {
			r.removeClass(this.settings.validClass).addClass(this.settings.errorClass);
			r.html(n)
		} else {
			r = e("<" + this.settings.errorElement + ">").attr("for", this.idOrName(t)).addClass(this.settings.errorClass).html(n || "");
			if (this.settings.wrapper) {
				r = r.hide().show().wrap("<" + this.settings.wrapper + "/>").parent()
			}
			if (!this.labelContainer.append(r).length) {
				if (this.settings.errorPlacement) {
					this.settings.errorPlacement(r, e(t))
				} else {
					r.insertAfter(t)
				}
			}
		}
		if (!n && this.settings.success) {
			r.text("");
			if (typeof this.settings.success === "string") {
				r.addClass(this.settings.success)
			} else {
				this.settings.success(r, t)
			}
		}
		this.toShow = this.toShow.add(r)
	}, errorsFor: function (t) {
		var n = this.idOrName(t);
		return this.errors().filter(function () {
			return e(this).attr("for") === n
		})
	}, idOrName: function (e) {
		return this.groups[e.name] || (this.checkable(e) ? e.name : e.id || e.name)
	}, validationTargetFor: function (e) {
		if (this.checkable(e)) {
			e = this.findByName(e.name).not(this.settings.ignore)[0]
		}
		return e
	}, checkable: function (e) {
		return/radio|checkbox/i.test(e.type)
	}, findByName: function (t) {
		return e(this.currentForm).find("[name='" + t + "']")
	}, getLength: function (t, n) {
		switch (n.nodeName.toLowerCase()) {
			case"select":
				return e("option:selected", n).length;
			case"input":
				if (this.checkable(n)) {
					return this.findByName(n.name).filter(":checked").length
				}
		}
		return t.length
	}, depend: function (e, t) {
		return this.dependTypes[typeof e] ? this.dependTypes[typeof e](e, t) : true
	}, dependTypes: {"boolean": function (e, t) {
		return e
	}, string: function (t, n) {
		return!!e(t, n.form).length
	}, "function": function (e, t) {
		return e(t)
	}}, optional: function (t) {
		var n = this.elementValue(t);
		return!e.validator.methods.required.call(this, n, t) && "dependency-mismatch"
	}, startRequest: function (e) {
		if (!this.pending[e.name]) {
			this.pendingRequest++;
			this.pending[e.name] = true
		}
	}, stopRequest: function (t, n) {
		this.pendingRequest--;
		if (this.pendingRequest < 0) {
			this.pendingRequest = 0
		}
		delete this.pending[t.name];
		if (n && this.pendingRequest === 0 && this.formSubmitted && this.form()) {
			e(this.currentForm).submit();
			this.formSubmitted = false
		} else if (!n && this.pendingRequest === 0 && this.formSubmitted) {
			e(this.currentForm).triggerHandler("invalid-form", [this]);
			this.formSubmitted = false
		}
	}, previousValue: function (t) {
		return e.data(t, "previousValue") || e.data(t, "previousValue", {old: null, valid: true, message: this.defaultMessage(t, "remote")})
	}}, classRuleSettings: {required: {required: true}, email: {email: true}, url: {url: true}, date: {date: true}, dateISO: {dateISO: true}, number: {number: true}, digits: {digits: true}, creditcard: {creditcard: true}}, addClassRules: function (t, n) {
		if (t.constructor === String) {
			this.classRuleSettings[t] = n
		} else {
			e.extend(this.classRuleSettings, t)
		}
	}, classRules: function (t) {
		var n = {};
		var r = e(t).attr("class");
		if (r) {
			e.each(r.split(" "), function () {
				if (this in e.validator.classRuleSettings) {
					e.extend(n, e.validator.classRuleSettings[this])
				}
			})
		}
		return n
	}, attributeRules: function (t) {
		var n = {};
		var r = e(t);
		for (var i in e.validator.methods) {
			var s;
			if (i === "required") {
				s = r.get(0).getAttribute(i);
				if (s === "") {
					s = true
				}
				s = !!s
			} else {
				s = r.attr(i)
			}
			if (s) {
				n[i] = s
			} else if (r[0].getAttribute("type") === i) {
				n[i] = true
			}
		}
		if (n.maxlength && /-1|2147483647|524288/.test(n.maxlength)) {
			delete n.maxlength
		}
		return n
	}, dataRules: function (t) {
		var n, r, i = {}, s = e(t);
		for (n in e.validator.methods) {
			r = s.data("rule-" + n.toLowerCase());
			if (r !== undefined) {
				i[n] = r
			}
		}
		return i
	}, staticRules: function (t) {
		var n = {};
		var r = e.data(t.form, "validator");
		if (r.settings.rules) {
			n = e.validator.normalizeRule(r.settings.rules[t.name]) || {}
		}
		return n
	}, normalizeRules: function (t, n) {
		e.each(t, function (r, i) {
			if (i === false) {
				delete t[r];
				return
			}
			if (i.param || i.depends) {
				var s = true;
				switch (typeof i.depends) {
					case"string":
						s = !!e(i.depends, n.form).length;
						break;
					case"function":
						s = i.depends.call(n, n);
						break
				}
				if (s) {
					t[r] = i.param !== undefined ? i.param : true
				} else {
					delete t[r]
				}
			}
		});
		e.each(t, function (r, i) {
			t[r] = e.isFunction(i) ? i(n) : i
		});
		e.each(["minlength", "maxlength"], function () {
			if (t[this]) {
				t[this] = Number(t[this])
			}
		});
		e.each(["rangelength"], function () {
			var n;
			if (t[this]) {
				if (e.isArray(t[this])) {
					t[this] = [Number(t[this][0]), Number(t[this][1])]
				} else if (typeof t[this] === "string") {
					n = t[this].split(/[\s,]+/);
					t[this] = [Number(n[0]), Number(n[1])]
				}
			}
		});
		if (e.validator.autoCreateRanges) {
			if (t.min && t.max) {
				t.range = [t.min, t.max];
				delete t.min;
				delete t.max
			}
			if (t.minlength && t.maxlength) {
				t.rangelength = [t.minlength, t.maxlength];
				delete t.minlength;
				delete t.maxlength
			}
		}
		return t
	}, normalizeRule: function (t) {
		if (typeof t === "string") {
			var n = {};
			e.each(t.split(/\s/), function () {
				n[this] = true
			});
			t = n
		}
		return t
	}, addMethod: function (t, n, r) {
		e.validator.methods[t] = n;
		e.validator.messages[t] = r !== undefined ? r : e.validator.messages[t];
		if (n.length < 3) {
			e.validator.addClassRules(t, e.validator.normalizeRule(t))
		}
	}, methods: {required: function (t, n, r) {
		if (!this.depend(r, n)) {
			return"dependency-mismatch"
		}
		if (n.nodeName.toLowerCase() === "select") {
			var i = e(n).val();
			return i && i.length > 0
		}
		if (this.checkable(n)) {
			return this.getLength(t, n) > 0
		}
		return e.trim(t).length > 0
	}, remote: function (t, n, r) {
		if (this.optional(n)) {
			return"dependency-mismatch"
		}
		var i = this.previousValue(n);
		if (!this.settings.messages[n.name]) {
			this.settings.messages[n.name] = {}
		}
		i.originalMessage = this.settings.messages[n.name].remote;
		this.settings.messages[n.name].remote = i.message;
		r = typeof r === "string" && {url: r} || r;
		if (i.old === t) {
			return i.valid
		}
		i.old = t;
		var s = this;
		this.startRequest(n);
		var o = {};
		o[n.name] = t;
		e.ajax(e.extend(true, {url: r, mode: "abort", port: "validate" + n.name, dataType: "json", data: o, success: function (r) {
			s.settings.messages[n.name].remote = i.originalMessage;
			var o = r === true || r === "true";
			if (o) {
				var u = s.formSubmitted;
				s.prepareElement(n);
				s.formSubmitted = u;
				s.successList.push(n);
				delete s.invalid[n.name];
				s.showErrors()
			} else {
				var a = {};
				var f = r || s.defaultMessage(n, "remote");
				a[n.name] = i.message = e.isFunction(f) ? f(t) : f;
				s.invalid[n.name] = true;
				s.showErrors(a)
			}
			i.valid = o;
			s.stopRequest(n, o)
		}}, r));
		return"pending"
	}, minlength: function (t, n, r) {
		var i = e.isArray(t) ? t.length : this.getLength(e.trim(t), n);
		return this.optional(n) || i >= r
	}, maxlength: function (t, n, r) {
		var i = e.isArray(t) ? t.length : this.getLength(e.trim(t), n);
		return this.optional(n) || i <= r
	}, rangelength: function (t, n, r) {
		var i = e.isArray(t) ? t.length : this.getLength(e.trim(t), n);
		return this.optional(n) || i >= r[0] && i <= r[1]
	}, min: function (e, t, n) {
		return this.optional(t) || e >= n
	}, max: function (e, t, n) {
		return this.optional(t) || e <= n
	}, range: function (e, t, n) {
		return this.optional(t) || e >= n[0] && e <= n[1]
	}, email: function (e, t) {
		return this.optional(t) || /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))$/i.test(e)
	}, url: function (e, t) {
		return this.optional(t) || /^(https?|s?ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test(e)
	}, date: function (e, t) {
		return this.optional(t) || !/Invalid|NaN/.test((new Date(e)).toString())
	}, dateISO: function (e, t) {
		return this.optional(t) || /^\d{4}[\/\-]\d{1,2}[\/\-]\d{1,2}$/.test(e)
	}, number: function (e, t) {
		return this.optional(t) || /^-?(?:\d+|\d{1,3}(?:,\d{3})+)?(?:\.\d+)?$/.test(e)
	}, digits: function (e, t) {
		return this.optional(t) || /^\d+$/.test(e)
	}, creditcard: function (e, t) {
		if (this.optional(t)) {
			return"dependency-mismatch"
		}
		if (/[^0-9 \-]+/.test(e)) {
			return false
		}
		var n = 0, r = 0, i = false;
		e = e.replace(/\D/g, "");
		for (var s = e.length - 1; s >= 0; s--) {
			var o = e.charAt(s);
			r = parseInt(o, 10);
			if (i) {
				if ((r *= 2) > 9) {
					r -= 9
				}
			}
			n += r;
			i = !i
		}
		return n % 10 === 0
	}, equalTo: function (t, n, r) {
		var i = e(r);
		if (this.settings.onfocusout) {
			i.unbind(".validate-equalTo").bind("blur.validate-equalTo", function () {
				e(n).valid()
			})
		}
		return t === i.val()
	}}});
	e.format = e.validator.format
})(jQuery);
(function (e) {
	var t = {};
	if (e.ajaxPrefilter) {
		e.ajaxPrefilter(function (e, n, r) {
			var i = e.port;
			if (e.mode === "abort") {
				if (t[i]) {
					t[i].abort()
				}
				t[i] = r
			}
		})
	} else {
		var n = e.ajax;
		e.ajax = function (r) {
			var i = ("mode"in r ? r : e.ajaxSettings).mode, s = ("port"in r ? r : e.ajaxSettings).port;
			if (i === "abort") {
				if (t[s]) {
					t[s].abort()
				}
				return t[s] = n.apply(this, arguments)
			}
			return n.apply(this, arguments)
		}
	}
})(jQuery);
(function (e) {
	e.extend(e.fn, {validateDelegate: function (t, n, r) {
		return this.bind(n, function (n) {
			var i = e(n.target);
			if (i.is(t)) {
				return r.apply(i, arguments)
			}
		})
	}})
})(jQuery);
if (!document.createElement("canvas").getContext) {
	(function () {
		function a() {
			return this.context_ || (this.context_ = new S(this))
		}

		function l(e, t, n) {
			var r = f.call(arguments, 2);
			return function () {
				return e.apply(t, r.concat(f.call(arguments)))
			}
		}

		function h(e) {
			var t = e.srcElement;
			switch (e.propertyName) {
				case"width":
					t.style.width = t.attributes.width.nodeValue + "px";
					t.getContext().clearRect();
					break;
				case"height":
					t.style.height = t.attributes.height.nodeValue + "px";
					t.getContext().clearRect();
					break
			}
		}

		function p(e) {
			var t = e.srcElement;
			if (t.firstChild) {
				t.firstChild.style.width = t.clientWidth + "px";
				t.firstChild.style.height = t.clientHeight + "px"
			}
		}

		function g() {
			return[
				[1, 0, 0],
				[0, 1, 0],
				[0, 0, 1]
			]
		}

		function y(e, t) {
			var n = g();
			for (var r = 0; r < 3; r++) {
				for (var i = 0; i < 3; i++) {
					var s = 0;
					for (var o = 0; o < 3; o++) {
						s += e[r][o] * t[o][i]
					}
					n[r][i] = s
				}
			}
			return n
		}

		function b(e, t) {
			t.fillStyle = e.fillStyle;
			t.lineCap = e.lineCap;
			t.lineJoin = e.lineJoin;
			t.lineWidth = e.lineWidth;
			t.miterLimit = e.miterLimit;
			t.shadowBlur = e.shadowBlur;
			t.shadowColor = e.shadowColor;
			t.shadowOffsetX = e.shadowOffsetX;
			t.shadowOffsetY = e.shadowOffsetY;
			t.strokeStyle = e.strokeStyle;
			t.globalAlpha = e.globalAlpha;
			t.arcScaleX_ = e.arcScaleX_;
			t.arcScaleY_ = e.arcScaleY_;
			t.lineScale_ = e.lineScale_
		}

		function w(e) {
			var t, n = 1;
			e = String(e);
			if (e.substring(0, 3) == "rgb") {
				var r = e.indexOf("(", 3);
				var i = e.indexOf(")", r + 1);
				var s = e.substring(r + 1, i).split(",");
				t = "#";
				for (var o = 0; o < 3; o++) {
					t += d[Number(s[o])]
				}
				if (s.length == 4 && e.substr(3, 1) == "a") {
					n = s[3]
				}
			} else {
				t = e
			}
			return{color: t, alpha: n}
		}

		function E(e) {
			switch (e) {
				case"butt":
					return"flat";
				case"round":
					return"round";
				case"square":
				default:
					return"square"
			}
		}

		function S(e) {
			this.m_ = g();
			this.mStack_ = [];
			this.aStack_ = [];
			this.currentPath_ = [];
			this.strokeStyle = "#000";
			this.fillStyle = "#000";
			this.lineWidth = 1;
			this.lineJoin = "miter";
			this.lineCap = "butt";
			this.miterLimit = o * 1;
			this.globalAlpha = 1;
			this.canvas = e;
			var t = e.ownerDocument.createElement("div");
			t.style.width = e.clientWidth + "px";
			t.style.height = e.clientHeight + "px";
			t.style.overflow = "hidden";
			t.style.position = "absolute";
			e.appendChild(t);
			this.element_ = t;
			this.arcScaleX_ = 1;
			this.arcScaleY_ = 1;
			this.lineScale_ = 1
		}

		function T(e, t, n, r) {
			e.currentPath_.push({type: "bezierCurveTo", cp1x: t.x, cp1y: t.y, cp2x: n.x, cp2y: n.y, x: r.x, y: r.y});
			e.currentX_ = r.x;
			e.currentY_ = r.y
		}

		function N(e) {
			for (var t = 0; t < 3; t++) {
				for (var n = 0; n < 2; n++) {
					if (!isFinite(e[t][n]) || isNaN(e[t][n])) {
						return false
					}
				}
			}
			return true
		}

		function C(e, t, n) {
			if (!N(t)) {
				return
			}
			e.m_ = t;
			if (n) {
				var r = t[0][0] * t[1][1] - t[0][1] * t[1][0];
				e.lineScale_ = s(i(r))
			}
		}

		function k(e) {
			this.type_ = e;
			this.x0_ = 0;
			this.y0_ = 0;
			this.r0_ = 0;
			this.x1_ = 0;
			this.y1_ = 0;
			this.r1_ = 0;
			this.colors_ = []
		}

		function L() {
		}

		var e = Math;
		var t = e.round;
		var n = e.sin;
		var r = e.cos;
		var i = e.abs;
		var s = e.sqrt;
		var o = 10;
		var u = o / 2;
		var f = Array.prototype.slice;
		var c = {init: function (e) {
			if (/MSIE/.test(navigator.userAgent) && !window.opera) {
				var t = e || document;
				t.createElement("canvas");
				t.attachEvent("onreadystatechange", l(this.init_, this, t))
			}
		}, init_: function (e) {
			if (!e.namespaces["g_vml_"]) {
				e.namespaces.add("g_vml_", "urn:schemas-microsoft-com:vml", "#default#VML")
			}
			if (!e.namespaces["g_o_"]) {
				e.namespaces.add("g_o_", "urn:schemas-microsoft-com:office:office", "#default#VML")
			}
			if (!e.styleSheets["ex_canvas_"]) {
				var t = e.createStyleSheet();
				t.owningElement.id = "ex_canvas_";
				t.cssText = "canvas{display:inline-block;overflow:hidden;" + "text-align:left;width:300px;height:150px}" + "g_vml_\\:*{behavior:url(#default#VML)}" + "g_o_\\:*{behavior:url(#default#VML)}"
			}
			var n = e.getElementsByTagName("canvas");
			for (var r = 0; r < n.length; r++) {
				this.initElement(n[r])
			}
		}, initElement: function (e) {
			if (!e.getContext) {
				e.getContext = a;
				e.innerHTML = "";
				e.attachEvent("onpropertychange", h);
				e.attachEvent("onresize", p);
				var t = e.attributes;
				if (t.width && t.width.specified) {
					e.style.width = t.width.nodeValue + "px"
				} else {
					e.width = e.clientWidth
				}
				if (t.height && t.height.specified) {
					e.style.height = t.height.nodeValue + "px"
				} else {
					e.height = e.clientHeight
				}
			}
			return e
		}};
		c.init();
		var d = [];
		for (var v = 0; v < 16; v++) {
			for (var m = 0; m < 16; m++) {
				d[v * 16 + m] = v.toString(16) + m.toString(16)
			}
		}
		var x = S.prototype;
		x.clearRect = function () {
			this.element_.innerHTML = ""
		};
		x.beginPath = function () {
			this.currentPath_ = []
		};
		x.moveTo = function (e, t) {
			var n = this.getCoords_(e, t);
			this.currentPath_.push({type: "moveTo", x: n.x, y: n.y});
			this.currentX_ = n.x;
			this.currentY_ = n.y
		};
		x.lineTo = function (e, t) {
			var n = this.getCoords_(e, t);
			this.currentPath_.push({type: "lineTo", x: n.x, y: n.y});
			this.currentX_ = n.x;
			this.currentY_ = n.y
		};
		x.bezierCurveTo = function (e, t, n, r, i, s) {
			var o = this.getCoords_(i, s);
			var u = this.getCoords_(e, t);
			var a = this.getCoords_(n, r);
			T(this, u, a, o)
		};
		x.quadraticCurveTo = function (e, t, n, r) {
			var i = this.getCoords_(e, t);
			var s = this.getCoords_(n, r);
			var o = {x: this.currentX_ + 2 / 3 * (i.x - this.currentX_), y: this.currentY_ + 2 / 3 * (i.y - this.currentY_)};
			var u = {x: o.x + (s.x - this.currentX_) / 3, y: o.y + (s.y - this.currentY_) / 3};
			T(this, o, u, s)
		};
		x.arc = function (e, t, i, s, a, f) {
			i *= o;
			var l = f ? "at" : "wa";
			var c = e + r(s) * i - u;
			var h = t + n(s) * i - u;
			var p = e + r(a) * i - u;
			var d = t + n(a) * i - u;
			if (c == p && !f) {
				c += .125
			}
			var v = this.getCoords_(e, t);
			var m = this.getCoords_(c, h);
			var g = this.getCoords_(p, d);
			this.currentPath_.push({type: l, x: v.x, y: v.y, radius: i, xStart: m.x, yStart: m.y, xEnd: g.x, yEnd: g.y})
		};
		x.rect = function (e, t, n, r) {
			this.moveTo(e, t);
			this.lineTo(e + n, t);
			this.lineTo(e + n, t + r);
			this.lineTo(e, t + r);
			this.closePath()
		};
		x.strokeRect = function (e, t, n, r) {
			var i = this.currentPath_;
			this.beginPath();
			this.moveTo(e, t);
			this.lineTo(e + n, t);
			this.lineTo(e + n, t + r);
			this.lineTo(e, t + r);
			this.closePath();
			this.stroke();
			this.currentPath_ = i
		};
		x.fillRect = function (e, t, n, r) {
			var i = this.currentPath_;
			this.beginPath();
			this.moveTo(e, t);
			this.lineTo(e + n, t);
			this.lineTo(e + n, t + r);
			this.lineTo(e, t + r);
			this.closePath();
			this.fill();
			this.currentPath_ = i
		};
		x.createLinearGradient = function (e, t, n, r) {
			var i = new k("gradient");
			i.x0_ = e;
			i.y0_ = t;
			i.x1_ = n;
			i.y1_ = r;
			return i
		};
		x.createRadialGradient = function (e, t, n, r, i, s) {
			var o = new k("gradientradial");
			o.x0_ = e;
			o.y0_ = t;
			o.r0_ = n;
			o.x1_ = r;
			o.y1_ = i;
			o.r1_ = s;
			return o
		};
		x.drawImage = function (n, r) {
			var i, s, u, a, f, l, c, h;
			var p = n.runtimeStyle.width;
			var d = n.runtimeStyle.height;
			n.runtimeStyle.width = "auto";
			n.runtimeStyle.height = "auto";
			var v = n.width;
			var m = n.height;
			n.runtimeStyle.width = p;
			n.runtimeStyle.height = d;
			if (arguments.length == 3) {
				i = arguments[1];
				s = arguments[2];
				f = l = 0;
				c = u = v;
				h = a = m
			} else if (arguments.length == 5) {
				i = arguments[1];
				s = arguments[2];
				u = arguments[3];
				a = arguments[4];
				f = l = 0;
				c = v;
				h = m
			} else if (arguments.length == 9) {
				f = arguments[1];
				l = arguments[2];
				c = arguments[3];
				h = arguments[4];
				i = arguments[5];
				s = arguments[6];
				u = arguments[7];
				a = arguments[8]
			} else {
				throw Error("Invalid number of arguments")
			}
			var g = this.getCoords_(i, s);
			var y = c / 2;
			var b = h / 2;
			var w = [];
			var E = 10;
			var S = 10;
			w.push(" <g_vml_:group", ' coordsize="', o * E, ",", o * S, '"', ' coordorigin="0,0"', ' style="width:', E, "px;height:", S, "px;position:absolute;");
			if (this.m_[0][0] != 1 || this.m_[0][1]) {
				var x = [];
				x.push("M11=", this.m_[0][0], ",", "M12=", this.m_[1][0], ",", "M21=", this.m_[0][1], ",", "M22=", this.m_[1][1], ",", "Dx=", t(g.x / o), ",", "Dy=", t(g.y / o), "");
				var T = g;
				var N = this.getCoords_(i + u, s);
				var C = this.getCoords_(i, s + a);
				var k = this.getCoords_(i + u, s + a);
				T.x = e.max(T.x, N.x, C.x, k.x);
				T.y = e.max(T.y, N.y, C.y, k.y);
				w.push("padding:0 ", t(T.x / o), "px ", t(T.y / o), "px 0;filter:progid:DXImageTransform.Microsoft.Matrix(", x.join(""), ", sizingmethod='clip');")
			} else {
				w.push("top:", t(g.y / o), "px;left:", t(g.x / o), "px;")
			}
			w.push(' ">', '<g_vml_:image src="', n.src, '"', ' style="width:', o * u, "px;", " height:", o * a, 'px;"', ' cropleft="', f / v, '"', ' croptop="', l / m, '"', ' cropright="', (v - f - c) / v, '"', ' cropbottom="', (m - l - h) / m, '"', " />", "</g_vml_:group>");
			this.element_.insertAdjacentHTML("BeforeEnd", w.join(""))
		};
		x.stroke = function (n) {
			var r = [];
			var i = false;
			var s = w(n ? this.fillStyle : this.strokeStyle);
			var u = s.color;
			var a = s.alpha * this.globalAlpha;
			var f = 10;
			var l = 10;
			r.push("<g_vml_:shape", ' filled="', !!n, '"', ' style="position:absolute;width:', f, "px;height:", l, 'px;"', ' coordorigin="0 0" coordsize="', o * f, " ", o * l, '"', ' stroked="', !n, '"', ' path="');
			var c = false;
			var h = {x: null, y: null};
			var p = {x: null, y: null};
			for (var d = 0; d < this.currentPath_.length; d++) {
				var v = this.currentPath_[d];
				var m;
				switch (v.type) {
					case"moveTo":
						m = v;
						r.push(" m ", t(v.x), ",", t(v.y));
						break;
					case"lineTo":
						r.push(" l ", t(v.x), ",", t(v.y));
						break;
					case"close":
						r.push(" x ");
						v = null;
						break;
					case"bezierCurveTo":
						r.push(" c ", t(v.cp1x), ",", t(v.cp1y), ",", t(v.cp2x), ",", t(v.cp2y), ",", t(v.x), ",", t(v.y));
						break;
					case"at":
					case"wa":
						r.push(" ", v.type, " ", t(v.x - this.arcScaleX_ * v.radius), ",", t(v.y - this.arcScaleY_ * v.radius), " ", t(v.x + this.arcScaleX_ * v.radius), ",", t(v.y + this.arcScaleY_ * v.radius), " ", t(v.xStart), ",", t(v.yStart), " ", t(v.xEnd), ",", t(v.yEnd));
						break
				}
				if (v) {
					if (h.x == null || v.x < h.x) {
						h.x = v.x
					}
					if (p.x == null || v.x > p.x) {
						p.x = v.x
					}
					if (h.y == null || v.y < h.y) {
						h.y = v.y
					}
					if (p.y == null || v.y > p.y) {
						p.y = v.y
					}
				}
			}
			r.push(' ">');
			if (!n) {
				var g = this.lineScale_ * this.lineWidth;
				if (g < 1) {
					a *= g
				}
				r.push("<g_vml_:stroke", ' opacity="', a, '"', ' joinstyle="', this.lineJoin, '"', ' miterlimit="', this.miterLimit, '"', ' endcap="', E(this.lineCap), '"', ' weight="', g, 'px"', ' color="', u, '" />')
			} else if (typeof this.fillStyle == "object") {
				var y = this.fillStyle;
				var b = 0;
				var S = {x: 0, y: 0};
				var x = 0;
				var T = 1;
				if (y.type_ == "gradient") {
					var N = y.x0_ / this.arcScaleX_;
					var C = y.y0_ / this.arcScaleY_;
					var k = y.x1_ / this.arcScaleX_;
					var L = y.y1_ / this.arcScaleY_;
					var A = this.getCoords_(N, C);
					var O = this.getCoords_(k, L);
					var M = O.x - A.x;
					var _ = O.y - A.y;
					b = Math.atan2(M, _) * 180 / Math.PI;
					if (b < 0) {
						b += 360
					}
					if (b < 1e-6) {
						b = 0
					}
				} else {
					var A = this.getCoords_(y.x0_, y.y0_);
					var D = p.x - h.x;
					var P = p.y - h.y;
					S = {x: (A.x - h.x) / D, y: (A.y - h.y) / P};
					D /= this.arcScaleX_ * o;
					P /= this.arcScaleY_ * o;
					var H = e.max(D, P);
					x = 2 * y.r0_ / H;
					T = 2 * y.r1_ / H - x
				}
				var B = y.colors_;
				B.sort(function (e, t) {
					return e.offset - t.offset
				});
				var j = B.length;
				var F = B[0].color;
				var I = B[j - 1].color;
				var q = B[0].alpha * this.globalAlpha;
				var R = B[j - 1].alpha * this.globalAlpha;
				var U = [];
				for (var d = 0; d < j; d++) {
					var z = B[d];
					U.push(z.offset * T + x + " " + z.color)
				}
				r.push('<g_vml_:fill type="', y.type_, '"', ' method="none" focus="100%"', ' color="', F, '"', ' color2="', I, '"', ' colors="', U.join(","), '"', ' opacity="', R, '"', ' g_o_:opacity2="', q, '"', ' angle="', b, '"', ' focusposition="', S.x, ",", S.y, '" />')
			} else {
				r.push('<g_vml_:fill color="', u, '" opacity="', a, '" />')
			}
			r.push("</g_vml_:shape>");
			this.element_.insertAdjacentHTML("beforeEnd", r.join(""))
		};
		x.fill = function () {
			this.stroke(true)
		};
		x.closePath = function () {
			this.currentPath_.push({type: "close"})
		};
		x.getCoords_ = function (e, t) {
			var n = this.m_;
			return{x: o * (e * n[0][0] + t * n[1][0] + n[2][0]) - u, y: o * (e * n[0][1] + t * n[1][1] + n[2][1]) - u}
		};
		x.save = function () {
			var e = {};
			b(this, e);
			this.aStack_.push(e);
			this.mStack_.push(this.m_);
			this.m_ = y(g(), this.m_)
		};
		x.restore = function () {
			b(this.aStack_.pop(), this);
			this.m_ = this.mStack_.pop()
		};
		x.translate = function (e, t) {
			var n = [
				[1, 0, 0],
				[0, 1, 0],
				[e, t, 1]
			];
			C(this, y(n, this.m_), false)
		};
		x.rotate = function (e) {
			var t = r(e);
			var i = n(e);
			var s = [
				[t, i, 0],
				[-i, t, 0],
				[0, 0, 1]
			];
			C(this, y(s, this.m_), false)
		};
		x.scale = function (e, t) {
			this.arcScaleX_ *= e;
			this.arcScaleY_ *= t;
			var n = [
				[e, 0, 0],
				[0, t, 0],
				[0, 0, 1]
			];
			C(this, y(n, this.m_), true)
		};
		x.transform = function (e, t, n, r, i, s) {
			var o = [
				[e, t, 0],
				[n, r, 0],
				[i, s, 1]
			];
			C(this, y(o, this.m_), true)
		};
		x.setTransform = function (e, t, n, r, i, s) {
			var o = [
				[e, t, 0],
				[n, r, 0],
				[i, s, 1]
			];
			C(this, o, true)
		};
		x.clip = function () {
		};
		x.arcTo = function () {
		};
		x.createPattern = function () {
			return new L
		};
		k.prototype.addColorStop = function (e, t) {
			t = w(t);
			this.colors_.push({offset: e, color: t.color, alpha: t.alpha})
		};
		G_vmlCanvasManager = c;
		CanvasRenderingContext2D = S;
		CanvasGradient = k;
		CanvasPattern = L
	})()
}
jomresJquery.fn.chainSelect = function (target, url, settings) {
	return this.each(function () {
		jomresJquery(this).change(function () {
			settings = jomresJquery.extend({after: null, before: null, usePost: false, defaultValue: null, parameters: {_id: jomresJquery(this).attr("id"), _name: jomresJquery(this).attr("name")}}, settings);
			settings.parameters._value = jomresJquery(this).val();
			if (settings.before != null) {
				settings.before(target)
			}
			ajaxCallback = function (data, textStatus) {
				jomresJquery(target).html("");
				data = eval(data);
				for (i = 0; i < data.length; i++) {
					for (key in data[i]) {
						if (-1 == data[i][key].toString().toLowerCase().lastIndexOf("object") && -1 == data[i][key].toString().toLowerCase().lastIndexOf("function"))jomresJquery(target).get(0).add(new Option(data[i][key], [key]), document.all ? i : null)
					}
				}
				if (settings.defaultValue != null) {
					jomresJquery(target).val(settings.defaultValue)
				} else {
					jomresJquery("option:first", target).attr("selected", "selected")
				}
				if (settings.after != null) {
					settings.after(target)
				}
				jomresJquery(target).change()
			};
			if (settings.usePost == true) {
				jomresJquery.post(url, settings.parameters, ajaxCallback)
			} else {
				jomresJquery.get(url, settings.parameters, ajaxCallback)
			}
		})
	})
};
(function (e) {
	var t = function () {
		return false === e.support.boxModel && e.support.objectAll && e.support.leadingWhitespace
	}();
	e.jGrowl = function (t, n) {
		if (e("#jGrowl").size() == 0)e('<div id="jGrowl"></div>').addClass(n && n.position ? n.position : e.jGrowl.defaults.position).appendTo("body");
		e("#jGrowl").jGrowl(t, n)
	};
	e.fn.jGrowl = function (t, n) {
		if (e.isFunction(this.each)) {
			var r = arguments;
			return this.each(function () {
				if (e(this).data("jGrowl.instance") == undefined) {
					e(this).data("jGrowl.instance", e.extend(new e.fn.jGrowl, {notifications: [], element: null, interval: null}));
					e(this).data("jGrowl.instance").startup(this)
				}
				if (e.isFunction(e(this).data("jGrowl.instance")[t])) {
					e(this).data("jGrowl.instance")[t].apply(e(this).data("jGrowl.instance"), e.makeArray(r).slice(1))
				} else {
					e(this).data("jGrowl.instance").create(t, n)
				}
			})
		}
	};
	e.extend(e.fn.jGrowl.prototype, {defaults: {pool: 0, header: "", group: "", sticky: false, position: "top-right", glue: "after", theme: "default", themeState: "highlight", corners: "10px", check: 250, life: 3e3, closeDuration: "normal", openDuration: "normal", easing: "swing", closer: true, closeTemplate: "�", closerTemplate: "<div>[ close all ]</div>", log: function () {
	}, beforeOpen: function () {
	}, afterOpen: function () {
	}, open: function () {
	}, beforeClose: function () {
	}, close: function () {
	}, animateOpen: {opacity: "show"}, animateClose: {opacity: "hide"}}, notifications: [], element: null, interval: null, create: function (t, n) {
		var n = e.extend({}, this.defaults, n);
		if (typeof n.speed !== "undefined") {
			n.openDuration = n.speed;
			n.closeDuration = n.speed
		}
		this.notifications.push({message: t, options: n});
		n.log.apply(this.element, [this.element, t, n])
	}, render: function (t) {
		var n = this;
		var r = t.message;
		var i = t.options;
		var t = e("<div/>").addClass("jGrowl-notification " + i.themeState + " ui-corner-all" + (i.group != undefined && i.group != "" ? " " + i.group : "")).append(e("<div/>").addClass("jGrowl-close").html(i.closeTemplate)).append(e("<div/>").addClass("jGrowl-header").html(i.header)).append(e("<div/>").addClass("jGrowl-message").html(r)).data("jGrowl", i).addClass(i.theme).children("div.jGrowl-close").bind("click.jGrowl",function () {
			e(this).parent().trigger("jGrowl.beforeClose")
		}).parent();
		e(t).bind("mouseover.jGrowl",function () {
			e("div.jGrowl-notification", n.element).data("jGrowl.pause", true)
		}).bind("mouseout.jGrowl",function () {
				e("div.jGrowl-notification", n.element).data("jGrowl.pause", false)
			}).bind("jGrowl.beforeOpen",function () {
				if (i.beforeOpen.apply(t, [t, r, i, n.element]) !== false) {
					e(this).trigger("jGrowl.open")
				}
			}).bind("jGrowl.open",function () {
				if (i.open.apply(t, [t, r, i, n.element]) !== false) {
					if (i.glue == "after") {
						e("div.jGrowl-notification:last", n.element).after(t)
					} else {
						e("div.jGrowl-notification:first", n.element).before(t)
					}
					e(this).animate(i.animateOpen, i.openDuration, i.easing, function () {
						if (e.support.opacity === false)this.style.removeAttribute("filter");
						if (e(this).data("jGrowl") !== null)e(this).data("jGrowl").created = new Date;
						e(this).trigger("jGrowl.afterOpen")
					})
				}
			}).bind("jGrowl.afterOpen",function () {
				i.afterOpen.apply(t, [t, r, i, n.element])
			}).bind("jGrowl.beforeClose",function () {
				if (i.beforeClose.apply(t, [t, r, i, n.element]) !== false)e(this).trigger("jGrowl.close")
			}).bind("jGrowl.close",function () {
				e(this).data("jGrowl.pause", true);
				e(this).animate(i.animateClose, i.closeDuration, i.easing, function () {
					if (e.isFunction(i.close)) {
						if (i.close.apply(t, [t, r, i, n.element]) !== false)e(this).remove()
					} else {
						e(this).remove()
					}
				})
			}).trigger("jGrowl.beforeOpen");
		if (i.corners != "" && e.fn.corner != undefined)e(t).corner(i.corners);
		if (e("div.jGrowl-notification:parent", n.element).size() > 1 && e("div.jGrowl-closer", n.element).size() == 0 && this.defaults.closer !== false) {
			e(this.defaults.closerTemplate).addClass("jGrowl-closer " + this.defaults.themeState + " ui-corner-all").addClass(this.defaults.theme).appendTo(n.element).animate(this.defaults.animateOpen, this.defaults.speed, this.defaults.easing).bind("click.jGrowl", function () {
				e(this).siblings().trigger("jGrowl.beforeClose");
				if (e.isFunction(n.defaults.closer)) {
					n.defaults.closer.apply(e(this).parent()[0], [e(this).parent()[0]])
				}
			})
		}
	}, update: function () {
		e(this.element).find("div.jGrowl-notification:parent").each(function () {
			if (e(this).data("jGrowl") != undefined && e(this).data("jGrowl").created !== undefined && e(this).data("jGrowl").created.getTime() + parseInt(e(this).data("jGrowl").life) < (new Date).getTime() && e(this).data("jGrowl").sticky !== true && (e(this).data("jGrowl.pause") == undefined || e(this).data("jGrowl.pause") !== true)) {
				e(this).trigger("jGrowl.beforeClose")
			}
		});
		if (this.notifications.length > 0 && (this.defaults.pool == 0 || e(this.element).find("div.jGrowl-notification:parent").size() < this.defaults.pool))this.render(this.notifications.shift());
		if (e(this.element).find("div.jGrowl-notification:parent").size() < 2) {
			e(this.element).find("div.jGrowl-closer").animate(this.defaults.animateClose, this.defaults.speed, this.defaults.easing, function () {
				e(this).remove()
			})
		}
	}, startup: function (n) {
		this.element = e(n).addClass("jGrowl").append('<div class="jGrowl-notification"></div>');
		this.interval = setInterval(function () {
			e(n).data("jGrowl.instance").update()
		}, parseInt(this.defaults.check));
		if (t) {
			e(this.element).addClass("ie6")
		}
	}, shutdown: function () {
		e(this.element).removeClass("jGrowl").find("div.jGrowl-notification").trigger("jGrowl.close").parent().empty();
		clearInterval(this.interval)
	}, close: function () {
		e(this.element).find("div.jGrowl-notification").each(function () {
			e(this).trigger("jGrowl.beforeClose")
		})
	}});
	e.jGrowl.defaults = e.fn.jGrowl.prototype.defaults
})(jQuery);
jQuery.extend(jQuery.easing, {easeIn: function (e, t, n, r, i) {
	return jQuery.easing.easeInQuad(e, t, n, r, i)
}, easeOut: function (e, t, n, r, i) {
	return jQuery.easing.easeOutQuad(e, t, n, r, i)
}, easeInOut: function (e, t, n, r, i) {
	return jQuery.easing.easeInOutQuad(e, t, n, r, i)
}, expoin: function (e, t, n, r, i) {
	return jQuery.easing.easeInExpo(e, t, n, r, i)
}, expoout: function (e, t, n, r, i) {
	return jQuery.easing.easeOutExpo(e, t, n, r, i)
}, expoinout: function (e, t, n, r, i) {
	return jQuery.easing.easeInOutExpo(e, t, n, r, i)
}, bouncein: function (e, t, n, r, i) {
	return jQuery.easing.easeInBounce(e, t, n, r, i)
}, bounceout: function (e, t, n, r, i) {
	return jQuery.easing.easeOutBounce(e, t, n, r, i)
}, bounceinout: function (e, t, n, r, i) {
	return jQuery.easing.easeInOutBounce(e, t, n, r, i)
}, elasin: function (e, t, n, r, i) {
	return jQuery.easing.easeInElastic(e, t, n, r, i)
}, elasout: function (e, t, n, r, i) {
	return jQuery.easing.easeOutElastic(e, t, n, r, i)
}, elasinout: function (e, t, n, r, i) {
	return jQuery.easing.easeInOutElastic(e, t, n, r, i)
}, backin: function (e, t, n, r, i) {
	return jQuery.easing.easeInBack(e, t, n, r, i)
}, backout: function (e, t, n, r, i) {
	return jQuery.easing.easeOutBack(e, t, n, r, i)
}, backinout: function (e, t, n, r, i) {
	return jQuery.easing.easeInOutBack(e, t, n, r, i)
}})