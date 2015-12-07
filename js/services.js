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
    this.put = function (id, registro) {
        var req = $http({
            method: 'PUT',
            url: uri + "/" + id,
            headers: {
                'Content-Type': "application/x-www-form-urlencoded"
            },
            data: registro
        });
        return req;
    };
    this.delete = function (id) {
        var req = $http.delete(uri + "/" + id);
        return req;
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
    this.put = function (id, registro) {
        var req = $http({
            method: 'PUT',
            url: uri + "/" + id,
            headers: {
                'Content-Type': "application/x-www-form-urlencoded"
            },
            data: registro
        });
        return req;
    };
    this.delete = function (id) {
        var req = $http.delete(uri + "/" + id);
        return req;
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


app.service("servicioUsuarios", function ($http) {
    var uri = "http://localhost/PHP/ar-sac/usuarios";
    this.get = function (id) {
        var req = $http.get(uri + "/" + id);
        return req;
    };
    this.getAll = function (filtro) {
        var req = $http.get(uri + "?limit=10&orden&filtro=" + filtro);
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
    this.put = function (id, registro) {
        var req = $http({
            method: 'PUT',
            url: uri + "/" + id,
            headers: {
                'Content-Type': "application/x-www-form-urlencoded"
            },
            data: registro
        });
        return req;
    };
    this.delete = function (id) {
        var req = $http.delete(uri + "/" + id);
        return req;
    };
});

