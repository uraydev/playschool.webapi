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

#Demand
<!-- START_db687e08bedb8e09e996c420294838b4 -->
## Get all
Выводит коллекцию всех объектов

> Example request:

```bash
curl -X GET "http://localhost/api/v1/demand" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/demand",
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
        "_id": "5b82f070ce78a208280038fa",
        "name": "Demand Name 1",
        "description": "Demand description 1",
        "author_id": 1000,
        "responsible_id": 1000,
        "created_at": "2018-08-26 18:24:48",
        "updated_at": "2018-08-26 18:24:48"
    },
    {
        "_id": "5b82f070ce78a208280038fb",
        "name": "Demand Name 2",
        "description": "Demand description 2",
        "author_id": 1000,
        "responsible_id": 1001,
        "created_at": "2018-08-26 18:24:48",
        "updated_at": "2018-08-26 18:24:48"
    }
]
```

### HTTP Request
`GET api/v1/demand`

`HEAD api/v1/demand`


<!-- END_db687e08bedb8e09e996c420294838b4 -->

<!-- START_375a6d54f0f37753f2d6779b2d175766 -->
## Store

> Example request:

```bash
curl -X POST "http://localhost/api/v1/demand" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/demand",
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
`POST api/v1/demand`


<!-- END_375a6d54f0f37753f2d6779b2d175766 -->

<!-- START_a98795a64b25b67ccf18601ade81075c -->
## Get Position

> Example request:

```bash
curl -X GET "http://localhost/api/v1/demand/{demand}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/demand/{demand}",
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
`GET api/v1/demand/{demand}`

`HEAD api/v1/demand/{demand}`


<!-- END_a98795a64b25b67ccf18601ade81075c -->

<!-- START_135ede75efee494e42c42a1a6eb6baab -->
## Update

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/demand/{demand}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/demand/{demand}",
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
`PUT api/v1/demand/{demand}`

`PATCH api/v1/demand/{demand}`


<!-- END_135ede75efee494e42c42a1a6eb6baab -->

<!-- START_5b44f871c08ba31012f6637e4c83ef11 -->
## Remove
Удаляет объект

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/demand/{demand}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/demand/{demand}",
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
`DELETE api/v1/demand/{demand}`


<!-- END_5b44f871c08ba31012f6637e4c83ef11 -->

#Position
<!-- START_b418c6fa34a60daffb35bf6286529927 -->
## Get all
Выводит коллекцию всех объектов

> Example request:

```bash
curl -X GET "http://localhost/api/v1/position" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/position",
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
        "name": "teacher",
        "description": "Воспитатель",
        "created_at": "2018-08-26 18:24:48",
        "updated_at": "2018-08-26 18:24:48"
    },
    {
        "_id": 1001,
        "name": "doctor",
        "description": "Медицинский работник",
        "created_at": "2018-08-26 18:24:48",
        "updated_at": "2018-08-26 18:24:48"
    },
    {
        "_id": 1002,
        "name": "supplier",
        "description": "МТО",
        "created_at": "2018-08-26 18:24:48",
        "updated_at": "2018-08-26 18:24:48"
    },
    {
        "_id": 1003,
        "name": "clerk",
        "description": "Делопроизводитель",
        "created_at": "2018-08-26 18:24:48",
        "updated_at": "2018-08-26 18:24:48"
    },
    {
        "_id": 1004,
        "name": "administrator",
        "description": "Управляющий",
        "created_at": "2018-08-26 18:24:48",
        "updated_at": "2018-08-26 18:24:48"
    }
]
```

### HTTP Request
`GET api/v1/position`

`HEAD api/v1/position`


<!-- END_b418c6fa34a60daffb35bf6286529927 -->

<!-- START_5e751c3a3c62c40dd6b382609d1f14ab -->
## Store

> Example request:

```bash
curl -X POST "http://localhost/api/v1/position" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/position",
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
`POST api/v1/position`


<!-- END_5e751c3a3c62c40dd6b382609d1f14ab -->

<!-- START_664ae746449fd4b5cc40811fc91a7eaa -->
## Get Position

> Example request:

```bash
curl -X GET "http://localhost/api/v1/position/{position}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/position/{position}",
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
`GET api/v1/position/{position}`

`HEAD api/v1/position/{position}`


<!-- END_664ae746449fd4b5cc40811fc91a7eaa -->

<!-- START_c6432985940405e89aa1de34fbe2bd6a -->
## Update

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/position/{position}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/position/{position}",
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
`PUT api/v1/position/{position}`

`PATCH api/v1/position/{position}`


<!-- END_c6432985940405e89aa1de34fbe2bd6a -->

<!-- START_a39af3974557cbe523d138028916a34e -->
## Remove
Удаляет объект

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/position/{position}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/position/{position}",
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
`DELETE api/v1/position/{position}`


<!-- END_a39af3974557cbe523d138028916a34e -->

#UserMeta
<!-- START_345b08937ca816f9f362ace2fc097bd9 -->
## Get all
Выводит коллекцию всех объектов

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
        "_id": "5b82f070ce78a208280038f2",
        "user__id": 1000,
        "key": "email",
        "value": "test@test.ru",
        "created_at": "2018-08-26 18:24:48",
        "updated_at": "2018-08-26 18:24:48"
    },
    {
        "_id": "5b82f070ce78a208280038f3",
        "user__id": 1000,
        "key": "phone",
        "value": "+79222222222",
        "created_at": "2018-08-26 18:24:48",
        "updated_at": "2018-08-26 18:24:48"
    },
    {
        "_id": "5b82f070ce78a208280038f4",
        "user__id": 1000,
        "key": "dob",
        "value": "1990-01-01",
        "created_at": "2018-08-26 18:24:48",
        "updated_at": "2018-08-26 18:24:48"
    },
    {
        "_id": "5b82f070ce78a208280038f5",
        "user__id": 1000,
        "key": "number",
        "value": "100",
        "created_at": "2018-08-26 18:24:48",
        "updated_at": "2018-08-26 18:24:48"
    },
    {
        "_id": "5b82f070ce78a208280038f6",
        "user__id": 1001,
        "key": "email",
        "value": "qwe@qwe.ru",
        "created_at": "2018-08-26 18:24:48",
        "updated_at": "2018-08-26 18:24:48"
    },
    {
        "_id": "5b82f070ce78a208280038f7",
        "user__id": 1001,
        "key": "phone",
        "value": "+7933333333",
        "created_at": "2018-08-26 18:24:48",
        "updated_at": "2018-08-26 18:24:48"
    },
    {
        "_id": "5b82f070ce78a208280038f8",
        "user__id": 1001,
        "key": "dob",
        "value": "1970-06-01",
        "created_at": "2018-08-26 18:24:48",
        "updated_at": "2018-08-26 18:24:48"
    },
    {
        "_id": "5b82f070ce78a208280038f9",
        "user__id": 1001,
        "key": "number",
        "value": "101",
        "created_at": "2018-08-26 18:24:48",
        "updated_at": "2018-08-26 18:24:48"
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
-H "Accept: application/json" \
    -d "user__id"="perspiciatis" \
    -d "key"="perspiciatis" \
    -d "value"="perspiciatis" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/user_meta",
    "method": "POST",
    "data": {
        "user__id": "perspiciatis",
        "key": "perspiciatis",
        "value": "perspiciatis"
},
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

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    user__id | string |  required  | 
    key | string |  required  | 
    value | string |  required  | 

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
-H "Accept: application/json" \
    -d "user__id"="quis" \
    -d "key"="quis" \
    -d "value"="quis" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/user_meta/{user_metum}",
    "method": "PUT",
    "data": {
        "user__id": "quis",
        "key": "quis",
        "value": "quis"
},
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

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    user__id | string |  required  | 
    key | string |  required  | 
    value | string |  required  | 

<!-- END_8a153808e32b539395220b7d0f7150c0 -->

<!-- START_4afc465adfe24bfe6acd4e4cbbcb0b20 -->
## Remove
Удаляет объект

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

