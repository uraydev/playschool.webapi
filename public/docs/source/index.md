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

#Auth
JWT Auth
<!-- START_8ae5d428da27b2b014dc767c2f19a813 -->
## API Register

> Example request:

```bash
curl -X POST "http://localhost/api/v1/register" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/register",
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
`POST api/v1/register`


<!-- END_8ae5d428da27b2b014dc767c2f19a813 -->

<!-- START_8c0e48cd8efa861b308fc45872ff0837 -->
## API Login
On success return JWT Auth token

> Example request:

```bash
curl -X POST "http://localhost/api/v1/login" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/login",
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
`POST api/v1/login`


<!-- END_8c0e48cd8efa861b308fc45872ff0837 -->

<!-- START_df9c3d718fac52eccd59f87bc891746f -->
## API Recover Password

Метод sendResetLink в процессе разработки

> Example request:

```bash
curl -X POST "http://localhost/api/v1/recover" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/recover",
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
`POST api/v1/recover`


<!-- END_df9c3d718fac52eccd59f87bc891746f -->

<!-- START_394d402f1e299237fa88b4466e18226b -->
## Log out
Invalidate the token, so user cannot use it anymore
They have to relogin to get a new token

> Example request:

```bash
curl -X GET "http://localhost/api/v1/logout" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/logout",
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
{
    "success": false,
    "error": {
        "code": 0,
        "message": "Token not provided"
    }
}
```

### HTTP Request
`GET api/v1/logout`

`HEAD api/v1/logout`


<!-- END_394d402f1e299237fa88b4466e18226b -->

#Demand

Требования
<!-- START_eda936a19c7351b93b03a410100337bd -->
## Get All

Получает коллекцию всех требований компании

> Example request:

```bash
curl -X GET "http://localhost/api/v1/company/{company}/demand" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/company/{company}/demand",
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
{
    "success": false,
    "error": {
        "code": 404,
        "message": "Указанный UID компании не найден"
    }
}
```

### HTTP Request
`GET api/v1/company/{company}/demand`

`HEAD api/v1/company/{company}/demand`


<!-- END_eda936a19c7351b93b03a410100337bd -->

<!-- START_d31ce41a65c6da6cda007f781d0e207f -->
## Store
Создает новое требование компании

> Example request:

```bash
curl -X POST "http://localhost/api/v1/company/{company}/demand" \
-H "Accept: application/json" \
    -d "name"="totam" \
    -d "description"="totam" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/company/{company}/demand",
    "method": "POST",
    "data": {
        "name": "totam",
        "description": "totam"
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
`POST api/v1/company/{company}/demand`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | 
    description | string |  required  | 

<!-- END_d31ce41a65c6da6cda007f781d0e207f -->

<!-- START_08dd60506b01ea3cd0b77a25b5db9bce -->
## Get

Получает конкретное требование компании

> Example request:

```bash
curl -X GET "http://localhost/api/v1/company/{company}/demand/{demand}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/company/{company}/demand/{demand}",
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
{
    "success": false,
    "error": {
        "code": 0,
        "message": ""
    }
}
```

### HTTP Request
`GET api/v1/company/{company}/demand/{demand}`

`HEAD api/v1/company/{company}/demand/{demand}`


<!-- END_08dd60506b01ea3cd0b77a25b5db9bce -->

<!-- START_35d5a84171442452414458bdee861dcb -->
## Update
Обновляет требование компании

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/company/{company}/demand/{demand}" \
-H "Accept: application/json" \
    -d "name"="aliquid" \
    -d "description"="aliquid" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/company/{company}/demand/{demand}",
    "method": "PUT",
    "data": {
        "name": "aliquid",
        "description": "aliquid"
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
`PUT api/v1/company/{company}/demand/{demand}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | 
    description | string |  required  | 

<!-- END_35d5a84171442452414458bdee861dcb -->

<!-- START_f328c76b749f901e3e478d240b901353 -->
## Remove
Удаляет требование компании по ID

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/company/{company}/demand/{demand}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/company/{company}/demand/{demand}",
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
`DELETE api/v1/company/{company}/demand/{demand}`


<!-- END_f328c76b749f901e3e478d240b901353 -->

