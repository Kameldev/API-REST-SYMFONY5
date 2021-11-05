# API-REST-SYMFONY5

```json
{
    "status": "success|error",
    "code": "HTTP status code",
    "message": "HTTP status message",
    "data|error": {
        "your data": "data or error field only in case of success or error"
    }
}
```

Example - GET resource: GET /v1/annonces/1
```json
{
  "id": 1,
  "title": "test",
  "content": "test",
  "category": {
    "id": 1,
    "name": "Emploi",
    "annonces": [],
    "marques": []
  }
}

``` 


Example - GET collection: GET /v1/annonces
```json
[
  {
    "id": 1,
    "title": "test",
    "content": "test",
    "category": {
      "id": 1,
      "name": "Emploi",
      "annonces": [],
      "marques": []
    }
  }
]

``` 
Example - POST resource: POST /v1/annonces

JSON (any other field will be ignored):
```json
{
  "data" : {
    "title" : "anonce1",
    "content" : "content test",
    "category_id": 2,
    "modele": "rs4 avant"
  }
}

``` 
Response:
```json

```
Example - PUT resource: PUT /v1/annonces/1

JSON (any other field will be ignored):
```json


``` 
Response:

```

Example - error: Resource not found: GET /v1/annonces/123123
```json
{
    "status": "error",
    "code": 404,
    "message": "Not Found",
    "error": {
        "details": "Resource 123123 not found"
    }
}
```


Example - error: Route not found: GET /wrongroute123
```json
{
    "status": "error",
    "code": 404,
    "message": "Not Found",
    "error": {
        "details": "No route found for \"GET /wrongroute123\""
    }
}
```

Example - 500 Internal Server Error
```json
{
    "status": "error",
    "code": 500,
    "message": "Internal Server Error",
    "error": {
        "details": "Notice: Undefined variable: view"
    }
}
```
Example - form error - POST /v1/annonces
```json
{
    "data": {
        "content": 123
    }
}
```
Response:
```json
{
    "status": "error",
    "code": 400,
    "message": "Bad Request",
    "error": {
        "form": {
            "title": "This value should not be blank."
        }
    }
}
```
``
Example - POST resource: POST /v1/annonces

JSON (any other field will be ignored):
```json
{
	"data" : {
		"title" : "anonce1",
		"content" : "content test",
		"category_id": 2,
		"modele": "rs4 avant"
	}
}

```
Example - PUT resource: PUT /v1/annonces/1

JSON (any other field will be ignored):
```json
{
    "data": {
        "title": "Edit title",
        "content": "content modified"
    }
}
```

Example - error: Resource not found: GET /v1/annonces/123123
```json
{
    "status": "error",
    "code": 404,
    "message": "Not Found",
    "error": {
        "details": "Resource 123123 not found"
    }
}
```


Example - error: Route not found: GET /wrongroute123
```json
{
    "status": "error",
    "code": 404,
    "message": "Not Found",
    "error": {
        "details": "No route found for \"GET /wrongroute123\""
    }
}
```

Example - 500 Internal Server Error
```json
{
    "status": "error",
    "code": 500,
    "message": "Internal Server Error",
    "error": {
        "details": "Notice: Undefined variable: view"
    }
}

```


## Getting Started <a name = "getting_started"></a>

These instructions will get you a copy of the project up and running on your local machine
for development and testing purposes.

### Prerequisites

What things you need to install the software and how to install them.
- PHP 7.2.5+
- [composer](https://getcomposer.org/download/)
- [symfony](https://symfony.com/doc/current/setup.html)
- docker (optional)

### Installing

```bash
git clone https://github.com/Kameldev/API-REST-SYMFONY5.git
cd symfony5-rest-api
cp .env.dist .env
## edit .env if needed
composer install
symfony server:start
```
### Installing (alternative with Docker)

```bash
git clone 
cd symfony5-rest-api
cp .env.dist .env
## edit .env if needed
docker-compose build
docker-compose up
```


### Running the example

#### Install database
```bash
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
```

#### Get with Curl

```bash
curl -H 'content-type: application/json' -v -X GET http://127.0.0.1:8000/v1/annonces
curl -H 'content-type: application/json' -v -X GET http://127.0.0.1:8000/v1/annonces/2 