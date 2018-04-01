/**
 * Դ�����ƣ�placeholder.js
 * ʵ�ֹ��ܣ��õͰ汾�������(��Ҫ��IE8)֧��placeholder
 * ������ҳ��http://www.miaoqiyuan.cn/
 * ��ϵ���䣺mqycn@126.com
 * ʹ��˵����http://www.miaoqiyuan.cn/p/placeholder-js
 * ���°汾��http://git.oschina.net/mqycn/placeholder.js
 */
 
(function() {
    //���ڲ�֧�� placeholder ��ʱ��ִ��
    if (!('placeholder' in document.createElement('input'))) {
 
        var listenerName = 'attachEvent';
        var listenerPrefix = 'on';
        if ('addEventListener' in window) {
            listenerName = 'addEventListener';
            listenerPrefix = '';
        }
 
        window[listenerName](listenerPrefix + 'load', function() {
            var placeholderListener = {
                //���������
                add: function(tagName) {
                    var list = document.getElementsByTagName(tagName);
                    for (var i = 0; i < list.length; i++) {
                        this.render(list[i]);
                    }
                    return this;
                },
                //��Ⱦ
                render: function(dom) {
                    var text = dom.getAttribute('placeholder');
                    if (!!text) {
                        this.attachEvent(dom, this.getDiv(dom, text));
                    }
                },
                //������ʽ
                getDiv: function(dom, text) {
                    var div = document.createElement('div');
 
                    div.style.position = 'absolute';
                    div.style.width = this.getPosition(dom, 'Width') + 'px';
                    div.style.height = this.getPosition(dom, 'Height') + 'px';
                    div.style.left = this.getPosition(dom, 'Left') + 'px';
                    div.style.top = this.getPosition(dom, 'Top') + 'px';
                    div.style.color = '#838080';
                    div.style.fontSize='12px';
		    div.style.fontFamily='SimSun';
                    div.style.textIndent = '5px';
                    div.style.zIndex = 999;
                    div.style.background = dom.style.background;
                    div.style.border = dom.style.border;
                    div.style.cursor = 'text';
                    div.innerHTML = text;
 
                    if ('TEXTAREA' == dom.tagName.toUpperCase()) {
                        div.style.lineHeight = '35px';
                    } else {
                        div.style.lineHeight = div.style.height;
                    }
                    document.getElementsByTagName('body')[0].appendChild(div);
                    return div;
                },
                //���㵱ǰ������Ŀ��λ��
                getPosition: function(dom, name, parentDepth) {
                    var offsetName = 'offset' + name;
                    var offsetVal = dom[offsetName];
                    var parentDepth = parentDepth || 0;
                    if (!offsetVal && parentDepth < 3) {
                        offsetVal = this.getPosition(dom.parentNode, name, ++parentDepth);
                    }
                    return offsetVal;
                },
                //����¼�
                attachEvent: function(dom, div) {
 
                    //����ʱ������ placeholder
                    dom[listenerName](listenerPrefix + 'focus', function() {
                        div.style.display = 'none';
                    });
 
                    //ʧȥ����ʱ������ placeholder
                    dom[listenerName](listenerPrefix + 'blur', function(e) {
                        if (e.srcElement.value == '') {
                            div.style.display = '';
                        }
                    });
 
                    //placeholder ���ʱ����Ӧ������򼤻�
                    div[listenerName](listenerPrefix + 'click', function(e) {
                        e.srcElement.style.display = 'none';
                        dom.focus();
                    });
                },
 
            };
 
            //��ֹ�� respond.min.js��html5shiv.min.js֮ǰִ��
            setTimeout(function() {
                placeholderListener.add('input').add('textarea');
            }, 50);
        });
    }
})();
