app.service("servicioPreguntas", function ($http) {
    var uri = "http://localhost/PHP/ar-sac/preguntas";
    this.get = function (id) {
        var req = $http.get(uri + "/" + id);
        return req;
    };
    this.getAll = function () {
        var req = $http.get(uri);
        return req;
    };
    this.post = function (registro) {
        var req = $http({
            method: 'POST',
            url: uri,
            headers: {
                'Content-Type': "application/x-www-form-urlencoded"
            },
            data: registro
        });
        return req;
    };
    this.put = function (id, contact) {
        /*var request = $http({
         method: "put",
         url: uri+'/api/contactos/'+ id,
         data: contact
         });*/
        var url = uri + "/" + id;
        var request = $http.put(url, contact);
        return request;
    };
});

app.service("servicioAreas", function ($http) {
    var uri = "http://localhost/PHP/ar-sac/areas";
    this.get = function (id) {
        var req = $http.get(uri + "/" + id);
        return req;
    };
    this.getAll = function () {
        var req = $http.get(uri);
        return req;
    };
    this.post = function (registro) {
        var req = $http({
            method: 'POST',
            url: uri,
            headers: {
                'Content-Type': "application/x-www-form-urlencoded"
            },
            data: registro
        });
        return req;
    };
    this.put = function (id, contact) {
        /*var request = $http({
         method: "put",
         url: uri+'/api/contactos/'+ id,
         data: contact
         });*/
        var url = uri + "/" + id;
        var request = $http.put(url, contact);
        return request;
    };
});

app.service("servicioEncabezados", function ($http) {
    var uri = "http://localhost/PHP/ar-sac/encabezados";
    this.get = function (id) {
        var req = $http.get(uri + "/" + id);
        return req;
    };
    this.getAll = function () {
        var req = $http.get(uri);
        return req;
    };
    this.post = function (registro) {
        var req = $http({
            method: 'POST',
            url: uri,
            headers: {
                'Content-Type': "application/x-www-form-urlencoded"
            },
            data: registro
        });
        return req;
    };
    this.put = function (id, contact) {
        /*var request = $http({
         method: "put",
         url: uri+'/api/contactos/'+ id,
         data: contact
         });*/
        var url = uri + "/" + id;
        var request = $http.put(url, contact);
        return request;
    };
});
