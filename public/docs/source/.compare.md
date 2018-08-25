---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)
<!-- END_INFO -->

#User
<!-- START_b2892eb191cd19c0a6f1aae56ba43db4 -->
## Get all

Выводит коллекцию всех пользователей

> Example request:

```bash
curl -X GET "http://localhost/api/v1/user" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/user",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
[
    {
        "_id": 1000,
        "surname": "Иванов",
        "name": "Иванов",
        "partonymic": "Иванович",
        "age": 30,
        "gender": 1
    },
    {
        "_id": 1001,
        "surname": "Петров",
        "name": "Петр",
        "partonymic": "Петрович",
        "age": 33
    }
]
```

### HTTP Request
`GET api/v1/user`

`HEAD api/v1/user`


<!-- END_b2892eb191cd19c0a6f1aae56ba43db4 -->

<!-- START_96b8840d06e94c53a87e83e9edfb44eb -->
## Store

Добавляет нового пользователя

> Example request:

```bash
curl -X POST "http://localhost/api/v1/user" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/user",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/user`


<!-- END_96b8840d06e94c53a87e83e9edfb44eb -->

<!-- START_eda2b3d78b052ccb36bffab3b344d72a -->
## Get User

Выводит пользователей по ID

> Example request:

```bash
curl -X GET "http://localhost/api/v1/user/{user}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/user/{user}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/user/{user}`

`HEAD api/v1/user/{user}`


<!-- END_eda2b3d78b052ccb36bffab3b344d72a -->

<!-- START_1006d782d67bb58039bde349972eb2f0 -->
## Update

Обновляет данные о пользователе

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/user/{user}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/user/{user}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/user/{user}`

`PATCH api/v1/user/{user}`


<!-- END_1006d782d67bb58039bde349972eb2f0 -->

<!-- START_a5d7655acadc1b6c97d48e68f1e87be9 -->
## Remove

Удаляет пользователя

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/user/{user}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/user/{user}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/user/{user}`


<!-- END_a5d7655acadc1b6c97d48e68f1e87be9 -->

#UserMeta
<!-- START_345b08937ca816f9f362ace2fc097bd9 -->
## Get all

Выводит коллекцию всех метаданных пользователей

> Example request:

```bash
curl -X GET "http://localhost/api/v1/user_meta" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/user_meta",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
[
    {
        "_id": "5b805eafce78a229e0003442",
        "user__id": 1000,
        "key": "age",
        "value": 30
    },
    {
        "_id": "5b805eafce78a229e0003443",
        "user__id": 1000,
        "key": "gender",
        "value": 1
    },
    {
        "_id": "5b805eafce78a229e0003444",
        "user__id": 1001,
        "key": "age",
        "value": 33
    }
]
```

### HTTP Request
`GET api/v1/user_meta`

`HEAD api/v1/user_meta`


<!-- END_345b08937ca816f9f362ace2fc097bd9 -->

<!-- START_c488e976664f3572d3939cde6e5dcf69 -->
## Store

Добавляет метаданные для пользователя

> Example request:

```bash
curl -X POST "http://localhost/api/v1/user_meta" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/user_meta",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/user_meta`


<!-- END_c488e976664f3572d3939cde6e5dcf69 -->

<!-- START_ffb286359db7489da5a60dec14cc2fda -->
## Get UserMeta

Выводит метаданные по ID пользователя

> Example request:

```bash
curl -X GET "http://localhost/api/v1/user_meta/{user_metum}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/user_meta/{user_metum}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/user_meta/{user_metum}`

`HEAD api/v1/user_meta/{user_metum}`


<!-- END_ffb286359db7489da5a60dec14cc2fda -->

<!-- START_8a153808e32b539395220b7d0f7150c0 -->
## Update

Обновляет метаданные о пользователе

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/user_meta/{user_metum}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/user_meta/{user_metum}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/user_meta/{user_metum}`

`PATCH api/v1/user_meta/{user_metum}`


<!-- END_8a153808e32b539395220b7d0f7150c0 -->

<!-- START_4afc465adfe24bfe6acd4e4cbbcb0b20 -->
## Remove

Удаляет метаданные пользователя

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/user_meta/{user_metum}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/user_meta/{user_metum}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/user_meta/{user_metum}`


<!-- END_4afc465adfe24bfe6acd4e4cbbcb0b20 -->

