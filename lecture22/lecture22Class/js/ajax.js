var ajax = {
    /**
     *
     * @returns {*}
     */
    getXHR: function() {
        var request;
        if (typeof XMLHttpRequest !== 'undefined'){
            return new XMLHttpRequest();
        }

        if (typeof ActiveXObject !== 'undefined'){
            return new ActiveXObject('Microsoft.XMLHTTP');
        }

        throw new Error('Your browser does not support AJAX');
    },
    /**
     *
     * @param method - GET, POST
     * @param url - where we are sending the request
     * @param params - {username: 'Georgi', password: 'mypass'} >> username=Georgi&password=mypass
     * @param async - true, false, undefined
     * @param callback - function called when request returns
     */
    makeRequest : function(method, url, params, async, callback){
        var xhr = this.getXHR();
        async = !async ? false : true;
        if (typeof params != 'object'){
            params = {};
        }
        if (async){
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4){
                    callback(xhr);
                }
            }
        }

        var paramsAsString = this.parseParams(params);
        if (method === 'GET'){
            if (url.indexOf('?') == -1){
                url += '?';
            } else {
                url += '&';
            }
            url += paramsAsString;
        }

        xhr.open(method, url, async);

        if (method === 'POST'){
            xhr.send(paramsAsString);
        } else {
            xhr.send(null);
        }

        if (async == false){
            callback(xhr);
        }
    },

    parseParams: function(params){
        var result = [];
        for(var i in params){
            var pair = encodeURIComponent(i) + '=' + encodeURIComponent(params[i]);
            result.push(pair);
        }
        return result.join('&');
    }
}